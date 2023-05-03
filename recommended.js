const recommendedRecipesContainer = document.querySelector("#recommended-recipes");

function createRecipeCard(recipe) {
  const recipeCard = document.createElement("div");
  recipeCard.classList.add("column", "is-one-quarter");
  recipeCard.innerHTML = `
    <div class="card">
      <div class="card-image">
        <figure class="image is-4by3">
          <img src="${recipe.recipe.image}" alt="${recipe.recipe.label}">
        </figure>
      </div>
      <div class="card-content">
        <p class="title is-4">${recipe.recipe.label}</p>
        <p class="subtitle is-6"><a href="${recipe.recipe.url}" target="_blank">View Recipe</a></p>
        <div class="buttons">
          <a class="button is-link is-small" href="https://www.facebook.com/sharer/sharer.php?u=${recipe.recipe.url}" target="_blank">
            <span class="icon">
              <i class="fab fa-facebook"></i>
            </span>
          </a>
          <a class="button is-info is-small" href="https://twitter.com/intent/tweet?url=${recipe.recipe.url}&text=${recipe.recipe.label}" target="_blank">
            <span class="icon">
              <i class="fab fa-twitter"></i>
            </span>
          </a>
          <a class="button is-info is-small is-light is-outlined" style="background-color: hsl(14, 100%, 53%);" href="https://www.reddit.com/submit?url=${recipe.recipe.url}&title=${recipe.recipe.label}" target="_blank">
            <span class="icon has-text-white">
              <i class="fab fa-reddit"></i>
            </span>
          </a>
        </div>
        <button class="button is-primary save-btn" data-recipe='${JSON.stringify({
          label: recipe.recipe.label,
          image: recipe.recipe.image,
          url: recipe.recipe.url,
          ingredients: recipe.recipe.ingredients
        }, (key, value) => (typeof value === 'string') ? value.replace(/'/g, '&#39;') : value)}' style="margin-top: 0.1rem;">Save Recipe</button>
      </div>
    </div>
  `;

  const saveButton = recipeCard.querySelector(".save-btn");
  saveButton.addEventListener("click", function () {
    const recipeToSave = JSON.parse(this.dataset.recipe);

    fetch("save-recipe.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ recipe: recipeToSave }),
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          alert("Recipe saved!");
        } else {
          alert("An error occurred. Please try again later.");
        }
      });
  });

  return recipeCard;
}

async function addRecipes(sources) {
  const appId = "d0516f7e";
  const appKey = "fcd769b9e9d117dcba4f6a72fb840f4e";
  const addedRecipes = new Set();

  for (const source of sources) {
    if (addedRecipes.size >= 60) break;

    const response = await fetch(
      `https://api.edamam.com/search?q=${encodeURIComponent(
        source
      )}&app_id=${appId}&app_key=${appKey}&from=0&to=10`
    );
    const data = await response.json();
    const recipes = data.hits;

    for (const recipe of recipes) {
      if (!addedRecipes.has(recipe.recipe.url)) {
        addedRecipes.add(recipe.recipe.url);
        recommendedRecipesContainer.appendChild(createRecipeCard(recipe));
        if (addedRecipes.size >= 60) break;
      }
    }
  }
}

fetch("get-recommendations.php")
  .then((response) => {
    if (!response.ok) {
      throw new Error("Error fetching recommendations");
    }
    return response.json();
  })
  .then((recommendations) => {
    
    console.log("JSON data: ", recommendations);
    
    const sources = [
      ...recommendations.favoriteCuisineTypes,
      ...recommendations.frequentlySavedMenus,
      ...recommendations.frequentlySearchedWords,
    ];
    
    addRecipes(sources);
  })
  .catch((error) => {
    console.log("Error fetching recommendations:", error);
  });

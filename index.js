const app_id = 'd0516f7e';
const app_key = 'fcd769b9e9d117dcba4f6a72fb840f4e';
const container = document.querySelector(".columns");

async function getRecipes() {
  const endpoint = `https://api.edamam.com/search?q=${randomRecommendation()}&app_id=${app_id}&app_key=${app_key}`;
  try {
    const response = await fetch(endpoint);
    const { hits: recipes } = await response.json();
    recipes.slice(0, 9).forEach(({ recipe: recipeData }) => {
      const column = container.appendChild(document.createElement("div"));
      column.className = "column is-one-third";
      column.innerHTML = `
      <div class="card">
      <div class="card-image">
        <figure class="image is-4by3">
          <img src="${recipeData.image}" alt="${recipeData.label}">
        </figure>
      </div>
      <div class="card-content">
        <p class="title is-4">${recipeData.label}</p>
        <p class="subtitle is-6"><a href="${recipeData.url}" target="_blank">View Recipe</a></p>
              
        <div class="buttons">
        <a class="button is-link is-small" href="https://www.facebook.com/sharer/sharer.php?u=${recipeData.url}" target="_blank">
          <span class="icon">
            <i class="fab fa-facebook"></i>
          </span>
        </a>
        <a class="button is-info is-small" href="https://twitter.com/intent/tweet?url=${recipeData.url}&text=${recipeData.label}" target="_blank">
          <span class="icon">
            <i class="fab fa-twitter"></i>
          </span>
        </a>
        <a class="button is-info is-small is-light is-outlined" style="background-color: hsl(14, 100%, 53%);" href="https://www.reddit.com/submit?url=${recipeData.url}&title=${recipeData.label}" target="_blank">
          <span class="icon has-text-white">
           <i class="fab fa-reddit"></i>
         </span>
        </a>
        </div>

        

        <button class="button is-primary save-btn" data-recipe='${JSON.stringify({
          label: recipeData.label,
          image: recipeData.image,
          url: recipeData.url,
          ingredients: recipeData.ingredients
        }, (key, value) => (typeof value === 'string') ? value.replace(/'/g, '&#39;') : value)}' style="margin-top: 0.1rem;">Save Recipe</button>
        </div>
      </div>`;

      const saveButton = column.querySelector(".save-btn");
      saveButton.addEventListener("click", () => {
        const recipe = JSON.parse(saveButton.dataset.recipe);
        fetch("save-recipe.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({ recipe }),
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
    });
  } catch (error) {
    console.error(error);
  }
}


function randomRecommendation() {
  const recommendations = [
    "chicken",
    "beef",
    "steak",
    "salmon",
    "pasta",
    "soup",
    "pizza",
    "tacos",
    "burritos",
    "curry",
    "stew"
  ];
  const randomIndex = Math.floor(Math.random() * recommendations.length);
  return recommendations[randomIndex];
}



getRecipes();

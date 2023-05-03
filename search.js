const API_KEY = "fcd769b9e9d117dcba4f6a72fb840f4e";
const API_ID = "d0516f7e";
const API_URL = `https://api.edamam.com/search?app_id=${API_ID}&app_key=${API_KEY}`;

const form = document.querySelector("#search-form");
const ingredientSearch = document.querySelector("#ingredient-search");
const dietSelect = document.querySelectorAll('input[name="diet"]');
const mealTypesSelect = document.querySelectorAll('input[name="meal-types"]');
const cuisineTypesSelect = document.querySelectorAll('input[name="cuisine-types"]');
const timeSelect = document.querySelectorAll('input[name="time"]');
const allergiesSelect = document.querySelectorAll('input[name="allergies"]');
const searchResults = document.querySelector("#search-results");

form.addEventListener("submit", async (event) => {
  event.preventDefault();

  const ingredients = ingredientSearch.value;
  let diet = "";
  let mealTypes = "";
  let cuisineTypes = "";
  let time = "";
  let allergies = "";

  for (const select of dietSelect) {
    if (select.checked) {
      diet += `&diet=${select.value}`;
    }
  }
  for (const select of mealTypesSelect) {
    if (select.checked) {
      mealTypes += `&mealType=${select.value}`;
    }
  }
  for (const select of cuisineTypesSelect) {
    if (select.checked) {
      cuisineTypes += `&cuisineType=${select.value}`;
    }
  }
  for (const select of timeSelect) {
    if (select.checked) {
      time += `&time=${select.value}`;
    }
  }
  for (const select of allergiesSelect) {
    if (select.checked) {
      allergies += `&health=${select.value}`;
    }
  }

  const response = await fetch(`${API_URL}&q=${ingredients}${diet}${mealTypes}${cuisineTypes}${time}${allergies}`);
  const data = await response.json();

fetch("save-search.php", {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
  },
  body: JSON.stringify({ searchTerm: ingredients }),
})
  .then((response) => response.json())
  .then((data) => {
    if (!data.success) {
      console.error("Failed to save search term to search_history table.");
    }
  });


  searchResults.innerHTML = "";
  const columnsContainer = document.createElement("div");
  columnsContainer.className = "columns is-multiline";

  for (const recipe of data.hits) {
    const recipeDiv = document.createElement("div");
    recipeDiv.className = "column is-one-third";
    recipeDiv.innerHTML = `
      <div class="card">
        <div class="card-image">
          <figure class="image is-4by3">
            <img src="${recipe.recipe.image}" alt="${recipe.recipe.label}">
          </figure>
        </div>
        <div class="card-content">
          <div class="content">
            <h4>${recipe.recipe.label}</h4>
            <p><strong>Ingredients:</strong></p>
            <ul>
              ${recipe.recipe.ingredients.map((ingredient) => `
                <li>
                  ${ingredient.text}
                  <span class="has-text-grey-light">${ingredient.weight.toFixed(1)}g</span>
                </li>
              `).join('')}
            </ul>
            <p><a href="${recipe.recipe.url}" target="_blank">View Recipe</a></p>
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
          </div>
        `;
        columnsContainer.appendChild(recipeDiv);
        
        // Wrap every three columns with a columns container
        if (columnsContainer.children.length === 12) {
          searchResults.appendChild(columnsContainer);
          columnsContainer = document.createElement("div");
          columnsContainer.className = "columns is-multiline";
        }
      }

      // Append any remaining columns to the search results container
      if (columnsContainer.children.length) {
      searchResults.appendChild(columnsContainer);
      }
      
      const saveButtons = document.querySelectorAll(".save-btn");
      for (const button of saveButtons) {
      button.addEventListener("click", (event) => {
      const recipe = JSON.parse(event.target.dataset.recipe);
      
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
  }
});    
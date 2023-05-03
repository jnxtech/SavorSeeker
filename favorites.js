const savedRecipesContainer = document.querySelector("#saved-recipes");

// Get saved recipes from the database
fetch("get-recipe.php")
.then((response) => response.json())
.then((recipes) => {
for (const recipe of recipes) {
const recipeCard = document.createElement("div");
recipeCard.classList.add("column", "is-one-quarter");
recipeCard.innerHTML = `
<div class="card">
<div class="card-image">
<figure class="image is-4by3">
<img src="${recipe.image}" alt="${recipe.label}">
</figure>
</div>
<div class="card-content">
<p class="title is-4">${recipe.label}</p>





<p class="subtitle is-6"><a href="${recipe.url}" target="_blank">View Recipe</a></p>


<div class="buttons">
  <a class="button is-link is-small" href="https://www.facebook.com/sharer/sharer.php?u=${recipe.url}" target="_blank">
    <span class="icon">
      <i class="fab fa-facebook"></i>
    </span>
  </a>
  <a class="button is-info is-small" href="https://twitter.com/intent/tweet?url=${recipe.url}&text=${recipe.label}" target="_blank">
    <span class="icon">
      <i class="fab fa-twitter"></i>
    </span>
  </a>
  <a class="button is-info is-small is-light is-outlined" style="background-color: hsl(14, 100%, 53%);" href="https://www.reddit.com/submit?url=${recipe.url}&title=${recipe.label}" target="_blank">
    <span class="icon has-text-white">
     <i class="fab fa-reddit"></i>
   </span>
  </a>

  <button class="button is-danger is-small delete-btn">Remove</button>
</div>
</div>
</div>
`;

const deleteButton = recipeCard.querySelector(".delete-btn");
deleteButton.addEventListener("click", () => {
fetch("delete-recipe.php", {
method: "POST",
headers: {
"Content-Type": "application/json",
},
body: JSON.stringify({ id: recipe.id }),
})
.then((response) => response.json())
.then((data) => {
if (data.success) {
  recipeCard.remove();
} else {
  alert("An error occurred. Please try again later.");
}
});
});

savedRecipesContainer.appendChild(recipeCard);
}
});

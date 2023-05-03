<?php

include 'connect.php';

session_start();

$user_id = $_SESSION['id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Food Recipe Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="search.css">

</head>

<body>
    <section class="hero is-primary">
        <div class="hero-body">


            <h1 class="title"><a href="index.php"><span class="icon">
                        <i class="fas fa-pizza-slice"></i>
                    </span> SavorSeeker</a></h1>



        </div>

    </section>
    <header>
        <nav class="navbar is-light ">
            <div class="navbar-brand">

                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="navbarExampleTransparentExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="index.php">Home</a>
                    <a class="navbar-item" href="search.php">Search</a>
                    <a class="navbar-item" href="recommended.php">Recommended</a>
                    <a class="navbar-item" href="favorites.php">Favorites Menu</a>


                    <a class="navbar-item" href="aboutus.php">About Us</a>


                </div>
                <div class="navbar-end">
  <div class="navbar-item">
    <div class="buttons">
      <a class="button is-primary" href="profile.php">
        <span class="icon">
          <i class="fas fa-user"></i>
        </span>
        <span>My Profile</span>
      </a>
      <a class="button is-danger" href="logout.php">
        <span class="icon">
          <i class="fas fa-sign-out-alt"></i>
        </span>
        <span>Log out</span>
      </a>
    </div>
  </div>
</div>
</div>
        </nav>
    </header>



    <section class="section">
        <div class="container">
            <h1 class="title has-text-centered">Food Recipe Search</h1>
            <p class="subtitle has-text-centered">Find the perfect recipe in minutes!</p>
            <form id="search-form" action="/search" method="get" class="has-text-centered">
            <br>
                <div class="field">
                    <label class="label" for="ingredient-search">Ingredients</label>
                  
                    <div class="control has-icons-left">
                        <input class="input" type="text" id="ingredient-search" name="ingredients" placeholder="Enter ingredients">
                        <span class="icon is-small is-left">
                            <i class="fas fa-utensils"></i>
                        </span>
                    </div>
                </div>



                <button class="collapsible">Diet</button>
                <div class="content">
                    <div class="field">
                        <div class="control">
                            <input type="checkbox" id="balanced" name="diet" value="balanced">
                            <label for="balanced">Balanced</label>

                            <input type="checkbox" id="high-fiber" name="diet" value="high-fiber">
                            <label for="high-fiber">High-Fiber</label>

                            <input type="checkbox" id="high-protein" name="diet" value="high-protein">
                            <label for="high-protein">High-Protein</label>

                            <input type="checkbox" id="low-carb" name="diet" value="low-carb">
                            <label for="low-carb">Low-carb</label>

                            <input type="checkbox" id="low-fat" name="diet" value="low-fat">
                            <label for="low-fat">Low-Fat</label>

                            <input type="checkbox" id="low-sodium" name="diet" value="low-sodium">
                            <label for="low-sodium">Low-Sodium</label>
                        </div>
                    </div>
                </div>












                <button class="collapsible">Calorie</button>
                <div class="content">
                    <div class="field">
                        <div class="control">
                            <input type="checkbox" id="low-calorie" name="calorie" value="low-calorie">
                            <label for="low-calorie">Low-calorie</label>

                            <input type="checkbox" id="medium-calorie" name="calorie" value="medium-calorie">
                            <label for="medium-calorie">Medium-calorie</label>

                            <input type="checkbox" id="high-calorie" name="calorie" value="high-calorie">
                            <label for="high-calorie">High-calorie</label>
                        </div>
                    </div>
                </div>






                <button class="collapsible">Meal Types</button>
                <div class="content">
                    <div class="field">
                        <div class="control">
                            <input type="checkbox" id="breakfast" name="meal-types" value="breakfast">
                            <label for="breakfast">Breakfast</label>

                            <input type="checkbox" id="brunch" name="meal-types" value="brunch">
                            <label for="brunch">Brunch</label>

                            <input type="checkbox" id="dinner" name="meal-types" value="dinner">
                            <label for="dinner">Dinner</label>

                            <input type="checkbox" id="snack" name="meal-types" value="snack">
                            <label for="snack">Snack</label>

                            <input type="checkbox" id="teatime" name="meal-types" value="teatime">
                            <label for="teatime">Teatime</label>
                        </div>
                    </div>
                </div>







                <button class="collapsible">Cuisine Types</button>
                <div class="content">
                    <div class="field">
                        <div class="control">
                            <input type="checkbox" id="japanese" name="cuisine-types" value="japanese">
                            <label for="japanese">Japanese</label>

                            <input type="checkbox" id="chinese" name="cuisine-types" value="chinese">
                            <label for="chinese">Chinese</label>

                            <input type="checkbox" id="korean" name="cuisine-types" value="korean">
                            <label for="korean">Korean</label>

                            <input type="checkbox" id="american" name="cuisine-types" value="american">
                            <label for="american">American</label>

                            <input type="checkbox" id="italian" name="cuisine-types" value="italian">
                            <label for="italian">Italian</label>

                            <input type="checkbox" id="caribbean" name="cuisine-types" value="caribbean">
                            <label for="caribbean">Caribbean</label>

                            <input type="checkbox" id="mediterranean" name="cuisine-types" value="mediterranean">
                            <label for="mediterranean">Mediterranean</label>

                            <input type="checkbox" id="indian" name="cuisine-types" value="indian">
                            <label for="indian">Indian</label>

                            <input type="checkbox" id="greek" name="cuisine-types" value="greek">
                            <label for="greek">Greek</label>

                            <input type="checkbox" id="mexican" name="cuisine-types" value="mexican">
                            <label for="mexican">Mexican</label>
                        </div>
                    </div>
                </div>





                <button class="collapsible">Time</button>
                <div class="content">
                    <div class="field">
                        <div class="control">
                            <input type="checkbox" id="time-less-than-30" name="time" value="30">
                            <label for="time-less-than-30">Less than 30 minutes</label>
                            <input type="checkbox" id="time-30-60" name="time" value="30-60">
                            <label for="time-30-60">30 minutes to one hour</label>
                            <input type="checkbox" id="time-more-than-one-hour" name="time" value="60%2B">
                            <label for="time-more-than-one-hour">More than one hour</label>
                        </div>
                    </div>
                </div>



                <button class="collapsible">Allergies</button>
                <div class="content">
                    <div class="field">
                        <div class="control">
                            <input type="checkbox" id="pork-free" name="allergies" value="pork-free">
                            <label for="pork-free">Pork-Free</label><br>
                            <input type="checkbox" id="red-meat-free" name="allergies" value="red-meat-free">
                            <label for="red-meat-free">Red-Meat-Free</label><br>
                            <input type="checkbox" id="alcohol-free" name="allergies" value="alcohol-free">
                            <label for="alcohol-free">Alcohol-Free</label><br>
                            <input type="checkbox" id="peanut-free" name="allergies" value="peanut-free">
                            <label for="peanut-free">Peanut-free</label><br>
                            <input type="checkbox" id="tree-nut-free" name="allergies" value="tree-nut-free">
                            <label for="tree-nut-free">Tree-nut-free</label><br>
                            <input type="checkbox" id="sesame-free" name="allergies" value="sesame-free">
                            <label for="sesame-free">Sesame-Free</label><br>
                            <input type="checkbox" id="dairy-free" name="allergies" value="dairy-free">
                            <label for="dairy-free">Dairy-free</label><br>
                            <input type="checkbox" id="egg-free" name="allergies" value="egg-free">
                            <label for="egg-free">Egg-free</label><br>
                            <input type="checkbox" id="soy-free" name="allergies" value="soy-free">
                            <label for="soy-free">Soy-free</label><br>
                            <input type="checkbox" id="fish-free" name="allergies" value="fish-free">
                            <label for="fish-free">Fish-free</label><br>
                            <input type="checkbox" id="shellfish-free" name="allergies" value="shellfish-free">
                            <label for="shellfish-free">Shellfish-free</label><br>
                            <input type="checkbox" id="mustard-free" name="allergies" value="mustard-free">
                            <label for="mustard-free">Mustard-Free</label><br>
                            <input type="checkbox" id="wheat-free" name="allergies" value="wheat-free">
                            <label for="wheat-free">Wheat-Free</label><br>
                        </div>
                    </div>
                </div>







                <br>
                <br>
                <br>
                <div class="field">
                    <div class="control">
                        <input class="button is-primary" type="submit" value="Search">
                    </div>
                </div>
            </form>
            <br>
            <br>
            <div id="search-results"></div>
        </div>

    </section>



    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            // Close all collapsible elements by default
            coll[i].nextElementSibling.style.display = "none";

            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>

    <script src="search.js"></script>
    <script src="navbarburgers.js"></script>
    <script src="snow.js"></script>
</body>

</html>
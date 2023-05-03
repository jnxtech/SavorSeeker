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
  <title>Home</title>
  
                
                
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

  <link rel="stylesheet" type="text/css" href="index.css">
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
    <nav class="navbar is-light">
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


  
      <div class="image-banner">
        <img src="c.jpeg" alt="Welcome to SavorSeeker">
        <div class="is-overlay has-text-centered"  style="position:absolute; padding:360px;">
          <h1 class="title has-text-centered is-size-2 has-text-white">Welcome to SavorSeeker</h1><br>
          <p class="subtitle is-size-5 has-text-white">Discover delicious recipes and cooking tips with our personalized recommendations</p><br>
          <a href="recommended.php" class="button is-danger">See Recommended </a>
          <a href="search.php" class="button is-primary">Search Recipes</a>
        </div>
      </div>
   

 







<section class="section">
  <p class="title has-text-centered is-size-2 has-text-primary">Delicious Recipes</p><br>
  <div class="container">
  <div class="columns is-multiline" id="recipes-container"></div>
  </div>
</section>
</body>

</html>













<script src="index.js"></script>
<script src="navbarburgers.js"></script>
<script src="snow.js"></script>
</body>

</html>
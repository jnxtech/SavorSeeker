<?php

include 'connect.php';

session_start();

$user_id = $_SESSION['id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>


<!DOCTYPE html>
<html>
  <head>
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="aboutus.css">

    <script src="snow.js"></script>
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
      
      
    <section class="section">
      <div class="container">
        <div class="columns">
          <div class="column is-half is-offset-one-quarter">
            <div class="content has-text-centered">
              <h1 class="subtitle">About Us</h1>
              <p>We are a team of food enthusiasts who are passionate about creating a platform to make it easy for people to find and share delicious recipes. We believe that cooking should be fun, and that everyone should have access to a wide variety of recipes to try at home.</p>
              <p>Our website features a wide range of recipes, from classic dishes to new and exciting creations.
                <section class="section">
                    <div class="container">
                      <h1 class="title">About Us</h1>
                      <p>At SavorSeeker, our mission is to help you find delicious and easy-to-make recipes. We believe that cooking should be fun, not a chore. That's why we've created a user-friendly website where you can quickly search for recipes that fit your dietary preferences and skill level. Whether you're a beginner cook or a seasoned pro, we've got something for you.</p>
                      <p>Our team of food experts scour the internet for the best recipes and test them out in our kitchen. We only feature recipes that are easy to follow and have great results. We also have a wide variety of options for different dietary restrictions and preferences, so everyone can find something to enjoy.</p>
                      <p>Thank you for choosing SavorSeeker for your recipe needs. Happy cooking!</p>
                    </div>
                  </section>
                  


                  <script src="navbarburgers.js"></script>
                  <script src="login.js"></script>
                 
              </body>
              </html>
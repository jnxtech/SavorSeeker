<?php
include 'connect.php';
session_start();

$user_id = $_SESSION['id'];

if (!isset($user_id)) {
  header('location:login.php');
  exit();
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Recommended Recipes</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="recommended.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
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
    <nav id="navbar" class="navbar is-light">
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
      <div class="navbar-player"></div>
    </nav>
  </header>
  <section class="section" id="recommended-section">
    <div class="container">
      <h1 class="title has-text-centered has-text-white">Recommended</h1>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="columns is-multiline" id="recommended-recipes">


      </div>
    </div>
  </section>
  <script>
    const navbar = document.getElementById("navbar");
    const navbarPlayer = document.querySelector(".navbar-player");


    const tl = gsap.timeline({
      defaults: {
        ease: "power1.out"
      }
    });

    tl.fromTo(navbar, {
        y: "-100%"
      }, {
        y: "0%",
        opacity: 1,
        duration: 1.5
      })
      .fromTo(
        navbarPlayer, {
          scale: 0
        }, {
          scale: 1,
          duration: 1,
          ease: "elastic.out(1, 0.5)",
          delay: 0.5
        }
      )
      .fromTo(
        ".navbar-player i", {
          opacity: 0,
          scale: 0
        }, {
          opacity: 1,
          scale: 1,
          duration: 0.5,
          ease: "power2.out"
        }
      );
    tl.play();
  </script>
  <script>
    gsap.from("#recommended-section", {
      opacity: 0,
      duration: 1,
      delay: 0.5,
      y: 50
    });


    setTimeout(() => {
      const recommendedSection = document.getElementById("recommended-section");
      recommendedSection.style.opacity = 1;
    }, 2000);
  </script>

  <script src="snow.js"></script>
  <script src="recommended.js"></script>
</body>

</html>

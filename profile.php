<?php
include 'connect.php';

session_start();

$user_id = $_SESSION['id'];

if(!isset($user_id)){
   header('location:login.php');
}
$select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');
$row = mysqli_fetch_assoc($select_user);


?>




<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
   <link rel="stylesheet" type="text/css" href="profile.css">
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



<section class="section" id="profile-section">
    <div class="container">
      <h1 class="title">My Profile</h1>
      
      <div class="columns">
        <div class="column is-one-third">
          
              <div class="media">
                <div class="media-content">
                  <p class="title is-4"><?php echo $row['name']; ?></p>
                  <p class="subtitle is-6"><?php echo $row['email']; ?></p>
                
            </div>
          </div>
        </div>
        <div class="column is-two-thirds">
          <table class="table is-striped is-fullwidth">
            <tbody>
              <tr>
                <td>Name:</td>
                <td><?php echo $row['name']; ?></td>
              </tr>
              <tr>
                <td>Email:</td>
                <td><?php echo $row['email']; ?></td>
              </tr>
              <tr>
                <td>Phone:</td>
                <td><?php echo $row['phone']; ?></td>
              </tr>
              <tr>
              <td>Favorite Cuisine Types:</td>
            <td><?php echo $row['cuisine_type']; ?></td>
          </tr>
          <tr>
              
            </tbody>
          </table>
          <a href="editprofile.php" class="button is-info">Edit Profile</a>
        </div>
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

  <script src="navbarburgers.js"></script>
  <script src="snow.js"></script>
</body>
</html>


<?php
include 'connect.php';
session_start();

$user_id = $_SESSION['id'];

if(!isset($user_id)){
   header('location:login.php');
}

$select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');
$row = mysqli_fetch_assoc($select_user);

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $cuisine_type = mysqli_real_escape_string($conn, implode(", ", $_POST['cuisine_type']));
   

   $update_user = mysqli_query($conn, "UPDATE `users` SET name = '$name', email = '$email',phone = '$phone',cuisine_type = '$cuisine_type' WHERE id = '$user_id'") or die('query failed');

   if($update_user){
      $_SESSION['name'] = $name;
      $_SESSION['phone'] = $phone;
      $_SESSION['email'] = $email;
      $_SESSION['cuisine_type'] = $cuisine_type;
      header('location:profile.php');
   }

}

?>
<!DOCTYPE html>
<html>
<head>
   <title>Edit Profile</title>
   
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
   <link rel="stylesheet" type="text/css" href="editprofile.css">
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
         
      


      <section class="section" id="edit-profile-section">

    <div class="container">
      <h1 class="title">Edit Profile</h1>
 
   <div class="container">
      <form action="" method="post">
         <div class="field">
            <label class="label">Name</label>
            <div class="control">
               <input type="text" name="name" class="input" value="<?php echo $row['name']; ?>" required>
            </div>
         </div>
         <div class="field">
            <label class="label">Email</label>
            <div class="control">
            <input type="text" name="email" class="input" value="<?php echo $row['email']; ?>" required>
            </div>
         </div>
         <div class="field">
            <label class="label">Phone</label>
            <div class="control">
            <input type="text" name="phone" class="input" value="<?php echo $row['phone']; ?>" required>
            </div>
         </div>
         <div class="field">
            <label class="label">Favorite Cuisine Types</label>
            <div class="control">
               <input type="checkbox" id="japanese" name="cuisine_type[]" value="japanese">
               <label for="japanese">Japanese</label>

               <input type="checkbox" id="chinese" name="cuisine_type[]" value="chinese">
               <label for="chinese">Chinese</label>

               <input type="checkbox" id="korean" name="cuisine_type[]" value="korean">
               <label for="korean">Korean</label>

               <input type="checkbox" id="american" name="cuisine_type[]" value="american">
               <label for="american">American</label>

               <input type="checkbox" id="italian" name="cuisine_type[]" value="italian">
               <label for="italian">Italian</label>

               <input type="checkbox" id="caribbean" name="cuisine_type[]" value="caribbean">
               <label for="caribbean">Caribbean</label>

               <input type="checkbox" id="mediterranean" name="cuisine_type[]" value="mediterranean">
               <label for="mediterranean">Mediterranean</label>

               <input type="checkbox" id="indian" name="cuisine_type[]" value="indian">
               <label for="indian">Indian</label>

               <input type="checkbox" id="greek" name="cuisine_type[]" value="greek">
               <label for="greek">Greek</label>

               <input type="checkbox" id="mexican" name="cuisine_type[]" value="mexican">
               <label for="mexican">Mexican</label>
            </div>
         </div>
         <input type="submit" name="submit" value="submit" class="button is-info">
      </form>
   </div>
   </div>
  </section>

  
  <script>
  // Select the navbar and player elements
  const navbar = document.getElementById("navbar");
  const navbarPlayer = document.querySelector(".navbar-player");

  // Define the animation
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
    }) // Slide in animation
    .fromTo(
      navbarPlayer, {
        scale: 0
      }, {
        scale: 1,
        duration: 1,
        ease: "elastic.out(1, 0.5)",
        delay: 0.5
      }
    ) // Player scale animation
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
    ); // Icon opacity and scale animation

  // Play the animation
  tl.play();
</script>
   <script src="snow.js"></script>
   <script src="navbarburgers.js"></script>
</body>
</html>

<?php

include 'connect.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){

      $row = mysqli_fetch_assoc($select_users);

      $_SESSION['name'] = $row['name'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['id'] = $row['id'];
      header('location:index.php');
   

   }else{
    echo '<p class="error">Incorrect email or password!</p>';

   }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<canvas id="snowfall"></canvas>
<section class="hero is-fullheight">
        <div class="hero-body has-text-centered">
    
            <div class="form-container container" style="margin: 0 auto; padding:360px;">
                <form action="" method="post">
                    
                    <div class="field">
                        <label class="label is-size-3 has-text-white" >LOGIN</label>
                        <div class="control has-icons-left">
                            <input type="email" name="email" placeholder="Enter your email" required class="input" >
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                    </div>
                    <div class="field">
                       
                        <div class="control has-icons-left ">
                            <input type="password" name="password" placeholder="Enter your password" required class="input">
                            <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <input type="submit" name="submit" value="Login" class="button is-primary">
                        </div>
                        <div class="control is-size-6 has-text-white">
                           
                            <p>Don't have an account?  <br><a href="register.php" style="color: #40E0D0; font-weight: bold; font-size: 18px;">Register now</a></p>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="navbarburgers.js"></script>
    <script src="login.js"></script>
    

</body>
</html>

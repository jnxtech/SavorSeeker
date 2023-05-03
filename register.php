<?php

include 'connect.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    
    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');
 
    if(mysqli_num_rows($select_users) > 0){
       print 'user already exist!';
    }else{
       if($pass != $cpass){
          print'confirm password not matched!';
       }else{
          if(isset($_POST['cuisine_type']) && is_array($_POST['cuisine_type'])) {
             $cuisine_types = implode(',', $_POST['cuisine_type']);
             $cuisine_types = mysqli_real_escape_string($conn, $cuisine_types);
             mysqli_query($conn, "INSERT INTO `users`(name,phone, email, password,cuisine_type) VALUES('$name','$phone','$email', '$cpass','$cuisine_types')") or die('query failed');
          }
          print'registered successfully!';
          header('location:login.php');
       }
    }
 }
 

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- Bulma CSS link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

   <!-- Font Awesome CSS link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>
    <section class="hero is-primary">
        <div class="hero-body has-text-centered">
            <h1 class="title">Register</h1>
        </div>
    </section>
    <div class="form-container container">
        <form action="" method="post">
            <div class="field">
                <label class="label">Name</label>
                <div class="control has-icons-left">
                    <input type="text" name="name" placeholder="Enter your name" required class="input">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
            </div>
            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left">
                    <input type="email" name="email" placeholder="Enter your email" required class="input">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>
            </div>
            <div class="field">
                <label class="label">Password</label>
                <div class="control has-icons-left">
                    <input type="password" name="password" placeholder="Enter your password" required class="input">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>
            </div>
            <div class="field">
                <label class="label">Confirm Password</label>
                <div class="control has-icons-left">
                    <input type="password" name="cpassword" placeholder="Confirm your password" required class="input">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>
            </div>
            <div class="field">
                <label class="label">Phone</label>
                <div class="control has-icons-left">
                    <input type="phone" name="phone" placeholder="Enter your phone number" required class="input">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
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


      
      <input type="submit" name="submit" value="register now" class="button is-primary">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>
<script src="navbarburgers.js"></script>
<script src="snow.js"></script>
</body>
</html>
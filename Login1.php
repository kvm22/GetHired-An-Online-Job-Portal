<?php

include 'config.php';
session_start();
error_reporting(0);

if(isset($_SESSION["user_id"])){
  header("Location: main.php");
}

if(isset($_POST["signup"])) {
  $full_name = mysqli_real_escape_string($conn, $_POST["signup_full_name"]);
  $email = mysqli_real_escape_string($conn, $_POST["signup_email"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"]));
  $cpassword = mysqli_real_escape_string($conn, md5($_POST["signup_cpassword"]));

  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM user WHERE email='$email'"));
  
  if($password !== $cpassword){
    echo "<script>alert('Password Didn't Match.');</script>";
  }elseif($check_email > 0){
    echo "<script>alert('Email already exist in our database.');</script>";
  }else{
    $sql = "INSERT INTO user (full_name, email, password) VALUES('$full_name','$email', '$password')";
    $result = mysqli_query($conn, $sql);
    if($result){
      $_POST["signup_full_name"] = "";
      $_POST["signup_email"] = "";
      $_POST["signup_password"] = "";
      $_POST["signup_cpassword"] = "";
      echo "<script>alert('User registration successfully.');</script>";
    }else{
      echo "<script>alert('User registration failed.');</script>";
    }
  }
}

if(isset($_POST["signin"])) {
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

  $check_email = mysqli_query($conn, "SELECT id FROM user WHERE email='$email' AND password='$password'");
  
  if(mysqli_num_rows($check_email) > 0) {
    $row = mysqli_fetch_assoc($check_email);
    $_SESSION["user_id"] = $row['id'];
    header("Location: main.php");
  }else{
    echo "<script>alert('Login details incorrect. Please try again..');</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="Login1.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email Address" name="email" value="<?php echo $_POST['email']; ?>" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required/>
            </div>
            <input type="submit" value="Login" name="signin" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          
        
          <form action="" method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Full Name" name="signup_full_name" value="<?php echo $_POST["signup_full_name"] ?>" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email Address" name="signup_email" value="<?php echo $_POST["signup_email"] ?>" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="signup_password" value="<?php echo $_POST["signup_password"] ?>" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password" name="signup_cpassword" value="<?php echo $_POST["signup_cpassword"] ?>" required/>
            </div>
            <input type="submit" class="btn" name="signup" value="Sign up" />


            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
            If your are new to this portal.. What are you waiting for?<br>
            Sign Up and get to your dream job..
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="Image2.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
            If your are registered user, Why waste your time?<br>
            Login with registered details..
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
        </div>
          <img src="Image3.svg" class="image" alt="" />
        </div> 
      </div>
    </div>

    <script src="app.js"></script> 
 </body>
</html>
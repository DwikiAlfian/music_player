<?php

include_once('koneksi.php');
$database = new database();
if(isset($_POST['register']))
{
  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $nama = $_POST['nama'];
  if($database->register($username,$password,$nama))
  {
    header('location:login.php');
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register Form</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
  </head>
  <body>

    <!-- NAVIGATION BAR -->
    <nav class="uk-navbar uk-navbar-container">
      <div class="uk-navbar-left">
        <a href="#" uk-navbar-toggle-icon class="uk-navbar-toggle"></a>
        <ul class="uk-navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="category.php">Category</a></li>
        </ul>
      </div>
      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
          <li><a href="login.php"><button type="button" class="uk-button uk-button-primary" name="button">LOGIN</button></a></li>
          <li><a href="register.php"><button type="button" class="uk-button uk-button-danger" name="button">REGISTER</button></a></li>
        </ul>
      </div>
    </nav>

    <!-- FORM -->
    <div style="background-image: url('register.jpg'); background-size: cover; height: 600px;">
    </div>
    <div class="uk-card uk-card-body uk-card-secondary uk-position-center">
      <form class="" action="index.html" method="post">
        <legend class="uk-legend">Register</legend>
        <div class="uk-margin">
          <div class="uk-inline">
            <a href="#" class="uk-form-icon" uk-icon="icon:user"></a>
            <input type="text" class="uk-input uk-form-width-large" name="name">
          </div>
        </div>
        <div class="uk-margin">
          <div class="uk-inline">
            <a href="#" class="uk-form-icon" uk-icon="icon:mail"></a>
            <input type="text" class="uk-input uk-form-width-large" name="username">
          </div>
        </div>
        <div class="uk-margin">
          <div class="uk-inline">
            <a href="#" class="uk-form-icon" uk-icon="icon:lock"></a>
            <input type="password" class="uk-input uk-form-width-large" name="password">
          </div>
        </div>
        <div class="uk-margin">
          <input type="submit" class="uk-button uk-button-secondary" name="submit" value="REGISTER">
        </div>
      </form>
    </div>
  </body>
</html>

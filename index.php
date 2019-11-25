<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Music Stream</title>
  <link rel="stylesheet" href="css/xxs.css">
  <style>
    body {
      font-family: 'Josefin Sans', sans-serif;
      background-color: black;
      margin: 0;
    }

    .center {
      margin: auto;
      width: 60%;
      border: 3px solid #73AD21;
      padding: 10px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div style="background-image: url('lake.jpg'); background-size: cover;">
    <!-- NAVBAR -->
    <ul class="navbar">
      <li class="navlist"> <a class="active" href="#">HOME</a> </li>
      <li class="navlist"> <a href="#">CATEGORY</a> </li>
      <li class="navlist" style="float:right"> <a href="register.php">REGISTER</a> </li>
      <li class="navlist" style="float:right"> <a href="login.php">LOGIN</a> </li>
    </ul>
    <!-- TITLE -->
    <div style="height: 400px; position: relative;">
      <div style="text-align: center; padding-top: 50px; font-size: 100px;">
        <p style="font-family: 'Staatliches',cursive;">responsive</p>
      </div>
    </div>
  </div>

  <!-- FIRST CARD -->
  <div class="card">
    <p style="font-size: 40px; text-align: center; margin-top: 100px; color: white;">The best music streaming platform you could ever find</p>
    <a href="#" class="button centered" style="color: black;">Start Hearing</a>
  </div>

  <!-- SECOND CARD -->
  <div style="background-image: linear-gradient(0deg, #00dcf0, black); padding-top: 10px;">
    <div class="card">
      <p style="font-size: 40px; text-align: center; margin-top: 100px; color: white;">Pick artist and musician you deserve!</p>
    </div>

    <div class="grid-card">
      <div class="grid-container">
        <a href="" class="i-h i-n index-img1">
          <p class="text">Ed Sheeran</p>
        </a>
        <a href="" class="i-h i-n index-img2">
          <p class="text">Chris Martin</p>
        </a>
        <a href="" class="i-h i-n index-img3">
          <p class="text">QoryGore</p>
        </a>
        <a href="" class="i-h i-n index-img4">
          <p class="text">Kodaline</p>
        </a>
        <a href="" class="i-h i-n index-img5">
          <p class="text">Imagine Dragon</p>
        </a>
        <a href="" class="i-h i-n index-img6">
          <p class="text">Drake</p>
        </a>
        <a href="" class="i-h i-n index-img7">
          <p class="text">Dua Lipa</p>
        </a>
        <a href="" class="i-h i-n index-img8">
          <p class="text">Iwan Fals</p>
        </a>
      </div>
    </div>
  </div>
</body>

</html>
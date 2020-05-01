<?php
require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
              alert('Registrasi Berhasil');
              document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
              alert('Registrasi Gagal');
          </script>";
  }
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Lobster&family=Pacifico&family=Pacifico&Playfair+Display:ital@1&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../css/style.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Radz Project - Sign Up</title>
</head>

<body style="background-image:url(../assets/img/Bg/2.jpg)">
  <!-- Title -->
  <div class="container" style="text-align: center;">
    <img src="../assets/img/logo/1.png" alt="" style="margin: 20px 0 30px;">
    <h2 style="font-family: 'Lobster';">WELCOME!</h2><br>
    <h5>Wanna be a Member? Let's Sign Up first</h5>
  </div>
  <!-- Title -->

  <!-- Log In -->
  <section id="login" class="grey lighten-3 scrollspy" style="margin-top: 50px;">
    <div class="container">
      <h3 class="light grey-text text-darken-3"></h3>
      <div class="row" style="padding: 20px 0 20px;">
        <div class="col m2 s12">

        </div>

        <div class="col m8 s12">
          <form action="" method="POST">
            <div class="card-panel">
              <h3 style="text-align: center;">Sign Up</h3>

              <div class="input-field">
                <input type="text" name="username" id="username" required class="validate" autofocus>
                <label for="username">Username :</label>
              </div>
              <div class="input-field">
                <input type="password" name="password" id="password" required class="validate">
                <label for="password">Password :</label>
              </div>

              <button type="submit" name="register" class="btn pink lighten-3" style="margin-left: 290px;">Join!</button>

              <div class="registrasi" style="padding-top: 20px">
                <p style="text-align: center;">You have an account already? <a href="login.php">Log in here</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Log In -->


  <!-- The JavaScript -->
  <script type="text/javascript" src="../css/js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 600,
      interval: 3000
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 50
    });
  </script>
</body>

</html>
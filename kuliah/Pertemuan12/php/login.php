<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: ../index.php");
  exit;
}

require 'functions.php';

// Ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

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
  <title>Login</title>

  <link rel="stylesheet" href="../css/login.css">
  <style>

  </style>
</head>

<body>

  <body>
    <!-- Title -->
    <section id="title">
      <div class="container">
        <h2 class="white-text">WELCOME!</h2><br>
        <h5 class="white-text">Wanna join? Please Login first. Thanks</h5>
      </div>
    </section>
    <!-- Title -->

    <!-- Log In -->
    <section id="login" class="transparant scrollspy">
      <div class="container">

        <div class="row">
          <div class="col m2 s12">

          </div>

          <div class="col m8 s12">
            <form action="" method="POST">
              <div class="card-panel">
                <h3>Log In</h3>
                <?php if (isset($error)) : ?>
                  <p>Username atau Password Salah</p>
                <?php endif; ?>
                <div class="input-field">
                  <input type="text" name="username" id="username" required class="validate" autofocus autocomplete="off">
                  <label for="username">Username :</label>
                </div>
                <div class="input-field">
                  <input type="password" name="password" id="password" required class="validate">
                  <label for="password">Password :</label>
                </div>

                <div class="switch remember">
                  <label>
                    Ops
                    <input type="checkbox" name="remember">
                    <span class="lever"></span>
                    Remember Me
                  </label>
                </div>

                <button type="submit" name="submit" class="btn pink lighten-3">Get Started</button>

                <div class="registrasi">
                  <p>Don't Have an Account? <a href="registrasi.php">Let's Sign Up</a></p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Log In -->


    <!--JavaScript at end of body for optimized loading-->
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
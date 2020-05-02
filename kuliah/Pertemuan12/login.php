<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
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
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Lobster&family=Pacifico&family=Pacifico&Playfair+Display:ital@1&display=swap" rel="stylesheet">
  <title>Login</title>
</head>

<body>

  <body style="background-image:url(assets/img/Bg/3.jpg)">
    <!-- Title -->
    <div class="container" style="text-align: center;">
      <h2 style="font-family: 'Lobster';" class="white-text">WELCOME!</h2><br>
      <h5 class="white-text">Wanna join? Please Login first. Thanks</h5>
    </div>
    <!-- Title -->

    <!-- Log In -->
    <section id=" login" class="grey lighten-3 scrollspy" style="margin-top: 40px;">
      <div class="container">

        <div class="row" style="padding: 10px 0 10px;">
          <div class="col m2 s12">

          </div>

          <div class="col m8 s12">
            <form action="" method="POST">
              <div class="card-panel">
                <h3 style="text-align: center;">Log In</h3>
                <?php if (isset($login['error'])) : ?>
                  <p style="color: red; padding: 10px 0 10px;">Username atau Password Salah</p>
                <?php endif; ?>
                <div class="input-field">
                  <input type="text" name="username" id="username" required class="validate" autofocus autocomplete="off">
                  <label for="username">Username :</label>
                </div>
                <div class="input-field">
                  <input type="password" name="password" id="password" required class="validate">
                  <label for="password">Password :</label>
                </div>

                <div class="switch remember" style="padding: 15px 0 25px;">
                  <label>
                    Ops
                    <input type="checkbox" name="remember">
                    <span class="lever"></span>
                    Remember Me
                  </label>
                </div>

                <button type="submit" name="submit" class="btn pink lighten-3" style="margin-left: 260px;">Get Started</button>

                <div class="registrasi" style="padding-top: 20px">
                  <p style="text-align: center;">Don't Have an Account? <a href="registrasi.php">Let's Sign Up</a></p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Log In -->


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="css/js/materialize.min.js"></script>
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
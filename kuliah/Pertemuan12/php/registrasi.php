<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('User berhasil ditambahkan. Silahkan login');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo 'User gagal ditambahkan!';
  }
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

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>

  <link rel="stylesheet" href="../css/registrasi.css">
</head>

<body>
  <!-- Title -->
  <section id="title">
    <div class="container">
      <h2 class="white-text">WELCOME!</h2><br>
      <h5 class="white-text">Wanna be a Member? Let's Sign Up first</h5>
    </div>
  </section>
  <!-- Title -->

  <!-- Log In -->
  <section id="login" class="transparent scrollspy">
    <div class="container">
      <h3 class="light grey-text text-darken-3"></h3>
      <div class="row">
        <div class="col m2 s12">

        </div>

        <div class="col m8 s12">
          <form action="" method="POST">
            <div class="card-panel">
              <h3>Sign Up</h3>

              <div class="input-field">
                <input type="text" name="username" id="username" required class="validate" autofocus autocomplete="off">
                <label for="username">Username :</label>
              </div>
              <div class="input-field">
                <input type="password" name="password" id="password" required class="validate">
                <label for="password">Password :</label>
              </div>
              <div class="input-field">
                <input type="password" name="password2" id="password2" required>
                <label for="password">Konfirmasi Password :</label>
              </div>

              <button type="submit" name="register" class="btn pink lighten-3">Join!</button>

              <div class="registrasi">
                <p>You have an account already? <a href="login.php">Log in here</a></p>
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
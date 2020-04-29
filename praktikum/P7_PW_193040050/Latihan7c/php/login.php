<?php
session_start();
require 'functions.php';

// Melakukan pengecekan apakah user sudah melakukan Login, jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

// Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  // Mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      // Jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}


// Cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // Ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  // Cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
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

  <link rel="stylesheet" href="../css/style.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Radz Project - Login</title>

</head>

<body style="background-image:url(../assets/img/Bg/3.jpg)">
  <!-- Title -->
  <div class="container" style="text-align: center;">
    <img src="../assets/img/logo/1.png" alt="" style="margin: 20px 0 30px;">
    <h2 style="font-family: 'Lobster';">WELCOME!</h2><br>
    <h5>Wanna join? Please Login first. Thanks</h5>
  </div>
  <!-- Title -->

  <!-- Log In -->
  <section id="login" class="grey lighten-3 scrollspy" style="margin-top: 40px;">
    <div class="container">

      <div class="row" style="padding: 10px 0 10px;">
        <div class="col m2 s12">

        </div>

        <div class="col m8 s12">
          <form action="" method="POST">
            <div class="card-panel">
              <h3 style="text-align: center;">Log In</h3>
              <?php if (isset($error)) : ?>
                <p style="color: red; padding: 10px 0 10px;">Username atau Password Salah</p>
              <?php endif; ?>
              <div class="input-field">
                <input type="text" name="username" id="username" required class="validate" autofocus>
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
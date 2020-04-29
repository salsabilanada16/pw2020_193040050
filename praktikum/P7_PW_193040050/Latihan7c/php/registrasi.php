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
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script type="text/javascript">
    $(function() {
      //the form wrapper (includes all forms)
      var $form_wrapper = $('#form_wrapper'),
        //the current form is the one with class active
        $currentForm = $form_wrapper.children('form.active'),
        //the change form links
        $linkform = $form_wrapper.find('.linkform');

      //get width and height of each form and store them for later						
      $form_wrapper.children('form').each(function(i) {
        var $theForm = $(this);
        //solve the inline display none problem when using fadeIn fadeOut
        if (!$theForm.hasClass('active'))
          $theForm.hide();
        $theForm.data({
          width: $theForm.width(),
          height: $theForm.height()
        });
      });

      //set width and height of wrapper (same of current form)
      setWrapperWidth();

      /*
      clicking a link (change form event) in the form
      makes the current form hide.
      The wrapper animates its width and height to the 
      width and height of the new current form.
      After the animation, the new form is shown
      */
      $linkform.bind('click', function(e) {
        var $link = $(this);
        var target = $link.attr('rel');
        $currentForm.fadeOut(400, function() {
          //remove class active from current form
          $currentForm.removeClass('active');
          //new current form
          $currentForm = $form_wrapper.children('form.' + target);
          //animate the wrapper
          $form_wrapper.stop()
            .animate({
              width: $currentForm.data('width') + 'px',
              height: $currentForm.data('height') + 'px'
            }, 500, function() {
              //new form gets class active
              $currentForm.addClass('active');
              //show the new form
              $currentForm.fadeIn(400);
            });
        });
        e.preventDefault();
      });

      function setWrapperWidth() {
        $form_wrapper.css({
          width: $currentForm.data('width') + 'px',
          height: $currentForm.data('height') + 'px'
        });
      }

      /*
      for the demo we disabled the submit buttons
      if you submit the form, you need to check the 
      which form was submited, and give the class active 
      to the form you want to show
      */
      $form_wrapper.find('input[type="submit"]')
        .click(function(e) {
          e.preventDefault();
        });
    });
  </script>
</body>

</html>
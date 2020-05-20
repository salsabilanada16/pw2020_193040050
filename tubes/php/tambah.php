<?php
// Mencegah file diakses sebelum melakukan login
session_start();

// Tidak bisa masuk ke halaman manapun sebelum login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// menghubungkan dengan file php lainnya
require 'functions.php';

// Cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Successfully Added!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Failed to Add!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Radz Project - Add Data</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="../css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/Logo/logo1.png">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="contact" class="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="../img/Tools/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="tambah.php"><img src="../img/Logo/logo1.png" alt="image" style="width: 50%;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <h1><span style="font-size: 250%; color: #e6005c;" class="navbar-brand">RADZ</span>PROJECT</h1>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="section inner_page_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="full">
                        <h3 style="margin: -15px 0; text-align: center;">Add Data</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Banner -->

    <!-- Add -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
                            <div class="right">
                                <p class="small_tag">HELLO!</p>
                                <h2><span class="theme_color">WANNA</span> ADD DATA?</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin-top_30">

                <div class="col-lg-12 col-sm-7 col-xs-12 margin-top_30">
                    <div class="contact-block">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <form id="contactForm" enctype="multipart/form-data">
                                <input type="hidden" name="Id" id="Id" value="<?= $pkn['Id']; ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="gambar" class="gambar">Pict :</label><br>
                                            <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                                            <img src="../img/nophoto.png" width="300" style="display: block; padding-top: 20px;" class="img-preview">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Kode">Kode :</label><br>
                                            <input type="text" class="form-control" name="Kode" id="Kode" autofocus required style="color: white;">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Nama">Name :</label><br>
                                            <input type="text" class="form-control" name="Nama" id="Nama" required style="color: white;">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Harga">Price :</label><br>
                                            <input type="text" class="form-control" name="Harga" id="Harga" required style="color: white;">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Warna">Color :</label><br>
                                            <input type="text" class="form-control" name="Warna" id="Warna" required style="color: white;">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Ukuran">Size :</label><br>
                                            <input type="text" class="form-control" name="Ukuran" id="Ukuran" required style="color: white;">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Material">Material :</label><br>
                                            <input type="text" class="form-control" name="Material" id="Material" required style="color: white;">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="submit-button text-center">
                                            <button class="btn btn-common" id="submit" type="submit" name="tambah">Add Data!</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <a href="admin.php" class="btn btn-common">Back</a>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- end section -->


    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 white_fonts">
                    <div class="row">
                        <div class="col-md-12 white_fonts margin-bottom_30">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="col-md-4">
                            <div class="full icon">
                                <img src="../img/Tools/social1.png">
                            </div>
                            <div class="full white_fonts">
                                <p>United States
                                    <br>New York City</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="full icon">
                                <img src="../img/Tools/social2.png">
                            </div>
                            <div class="full white_fonts">
                                <p>radzproject@gmail.com
                                    <br>sadzani16@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="full icon">
                                <img src="../img/Tools/social3.png">
                            </div>
                            <div class="full white_fonts">
                                <p>+7586656566
                                    <br>+7586656566</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="full social_icon margin-top_20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© 2020 Radz Project. Salsabila Nada Adzani</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.pogo-slider.min.js"></script>
    <script src="../js/slider-index.js"></script>
    <script src="../js/smoothscroll.js"></script>
    <script src="../js/form-validator.min.js"></script>
    <script src="../js/contact-form-script.js"></script>
    <script src="../js/isotope.min.js"></script>
    <script src="../js/images-loded.min.js"></script>
    <script src="../js/custom.js"></script>
    <script>
        /* counter js */

        (function($) {
            $.fn.countTo = function(options) {
                options = options || {};

                return $(this).each(function() {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof(settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof(settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0, // the number the element should start at
                to: 0, // the number the element should end at
                speed: 1000, // how long it should take to count between the target numbers
                refreshInterval: 100, // how often the element should be updated
                decimals: 0, // the number of decimal places to show
                formatter: formatter, // handler for formatting the value before rendering
                onUpdate: null, // callback method for every time the element is updated
                onComplete: null // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function(value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>
    <script src="../js/tambah.js"></script>
</body>

</html>
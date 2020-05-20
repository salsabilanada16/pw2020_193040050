<?php
require 'functions.php';

// Ambil id dari URL
$id = $_GET['Id'];

// Query pakaian berdasarkan id
$pkn = query("SELECT * FROM pakaian WHERE Id = $id");
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
    <title>Radz Project - Details</title>
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
    <link rel="shortcut icon" href="../img/Logo/logo.png">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98" class="scrollspy" style="background-image: url(../img/Background/bg6.jpg)">

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
                <a class="navbar-brand" href="../index.php"><img src="../img/Logo/logo1.png" alt="image" style="width: 50%;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <h1><span style="font-size: 250%; color: #e6005c;" class="navbar-brand">RADZ</span>PROJECT</h1>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="elements.php">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Cards -->
    <section id="collections">
        <div class="section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center">
                        <div class="full">
                            <div class="heading_main text_align_left">
                                <div class="center">
                                    <h2><span class="theme_color"><?= $pkn["Nama"]; ?></span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-top_30">
                    <div class="col-sm-6 col-md-4">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service_blog">
                            <div class="service_icons">
                                <img src="../img/<?= $pkn["Gambar"]; ?>" style="display: block; margin-left: auto; margin-right: auto;">
                            </div>
                            <div class="full">
                                <p class="nama">
                                    <span class="pink-text text-darken-3">
                                        <p style="text-align: center;"><b><?= $pkn["Kode"]; ?></b></p><br>
                                        <p>Price : <?= $pkn["Harga"]; ?></p>
                                        <p>Color : <?= $pkn["Warna"]; ?></p>
                                        <p>Size : <?= $pkn["Ukuran"]; ?></p>
                                        <p>Material : <?= $pkn["Material"]; ?></p>
                                    </span>
                                </p>
                            </div>
                            <div class="card-action" style="margin-left: 40%;">
                                <button class=" tombol-kembali"><a href="elements.php">Back</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cards -->

    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container" style="height: 25%;">
            <div class="row">
                <div class="col-md-12 margin-bottom_30">
                    <img src="../img/Logo/logo1.png" alt="#" width="10%;" style="margin-top: -40px;">
                </div>
                <div class="col-xl-8 white_fonts">
                    <div class="row">
                        <div class="col-md-12 white_fonts margin-bottom_20">
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
                        <div class="col-md-4">
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
                    <ul class="bottom_menu">
                        <li><a href="#">Term of Service</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
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
</body>

</html>
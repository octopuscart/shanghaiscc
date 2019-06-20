<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php
        meta_tags();
        ?>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">

        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>"/>
        <link rel="apple-touch-icon image_src" href="<?php echo base_url() . 'assets/images/logof.png'; ?>"/>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->


        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/style.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/swiper.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/magnific-popup.css" type="text/css" />

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/responsive.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />



        <!--web fonts-->
        <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic' rel='stylesheet' type='text/css'>



        <!--theme css-->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/css/theme-animate.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/css/style.css">
        <!--head libs-->

        <link href="<?php echo base_url(); ?>assets/theme/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">


        <!--sweet alert-->
        <script src="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.css">


    

        <!-- External JavaScripts
        ============================================= -->
        <script src="<?php echo base_url(); ?>assets/theme/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/theme/js/plugins.js"></script>
        <!-- Footer Scripts
        ============================================= -->

        <!--angular js-->
        <script src="<?php echo base_url(); ?>assets/theme/angular/angular.min.js"></script>

        <!-- Google Tag Manager -->
    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/include/rs-plugin/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/include/rs-plugin/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/include/rs-plugin/css/navigation.css">





    </head>  
    <?php
    $menuitems = [
        array(
            "title" => "Home",
            "submenu" => "No",
            "link" => site_url("/")),
        array(
            "title" => "Fabrics",
            "submenu" => "No",
            "link" => site_url("Products/CustomSuits")),
        array(
            "title" => "Look Book",
            "submenu" => "No",
            "link" => site_url("lookbook/MensCustomSuits")),
        array(
            "title" => "Book A Fitting",
            "submenu" => "no",
            "link" => site_url("booking"),
            "style" => "background: #dd280f;color: white;"
        ),
        array(
            "title" => "Styling Tips",
            "submenu" => "no",
            "link" => site_url("stylingTips"),
        ),
        array(
            "title" => "How It Works",
            "submenu" => "no",
            "link" => site_url("booking"),
        ),
        array(
            "title" => "Contact Us",
            "submenu" => "no",
            "link" => site_url('contact-us'),
        ),
        array(
            "title" => "FAQ's",
            "submenu" => "no",
            "link" => site_url('faqs'),
        ),
    ];
    ?>

    <style type="text/css">
        #loading {
            position: fixed;
            z-index: 50000;
            height: 500px;

            color: #fff;
            text-indent: -9999px;
            top: 0px;

        }
        .v2 #loading { display: none; }


        #loader {

            /*background:transparent url("") no-repeat center 25%;*/
            height:100%;
            display: white;
            /*opacity: 0.3;*/
            /*background: #000;*/
        }


    </style>



    <style>
        main .shell { padding: 25px 0 90px 43px; width: 917px;}
        #progress-bar{   
            width:100%;
            height:100%; 
            opacity: 1;
            background:#fff;  
            float: right;
            position: fixed;
        }
    </style>


    <!--    <div id='loading' class="" style="width:100%;height: 100% ">
            <div id='progress-bar'>
                <center style=''>
    
                    <img src="<?php echo base_url(); ?>assets/images/loader2.gif" alt="" style="margin-top: 150px;
                         position: fixed;
                         top: 125px;
                         left: 50%;
                         height: 150px;
                         margin-left: -64px;
                         ">
                </center>
            </div> 
            <div id='loader'>
                <div class='loaderstyle'>
                </div>
            </div>
    
        </div>   -->

    <body ng-app="App" class="stretched">
        <div ng-controller="ShopController" id="wrapper" class="clearfix">
            <script>
                var App = angular.module('App', []).config(function ($interpolateProvider, $httpProvider) {
                //$interpolateProvider.startSymbol('{$');
                //$interpolateProvider.endSymbol('$}');
                $httpProvider.defaults.headers.common = {};
                $httpProvider.defaults.headers.post = {};
                });
                var baseurl = "<?php echo base_url(); ?>index.php/";
                var imageurlg = "<?php echo imageserver; ?>";
                var globlecurrency = "<?php echo globle_currency; ?>";
                var avaiblecredits = 0;
                $(window).on('load', function () {
                // Page Preloader
                $('#preloader').fadeOut('slow', function () {
                $(this).remove();
                });
                })

            </script>










            <!-- Header
                            ============================================= -->
            <header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

                <div id="header-wrap">

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                        <!-- Logo
                        ============================================= -->
                        <div id="logo">
                            <a href="<?php echo site_url("/");?>" class="standard-logo" data-dark-logo="<?php echo base_url(); ?>assets/images/logo.png"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Canvas Logo"></a>
                            <a href="<?php echo site_url("/");?>" class="retina-logo" data-dark-logo="<?php echo base_url(); ?>assets/images/logo.png"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Canvas Logo"></a>
                        </div><!-- #logo end -->

                        <!-- Primary Navigation
                        ============================================= -->
                        <nav id="primary-menu" class="dark">

                            <ul class="norightborder norightpadding norightmargin">
                                <li class="current"><a href="<?php echo site_url("/");?>"><div><i class="icon-home2"></i>Home</div></a>
                                </li>
                                <li><a href="#"><div><i class="icon-file-alt"></i>About Us</div></a></li>
                                <li><a href="<?php echo site_url("lookbook");?>"><div><i class="icon-picture"></i>Gallery</div></a></li>
                                <li><a href="#"><div><i class="icon-th"></i>Styles</div></a></li>
                                <li><a href="#"><div><i class="icon-star3"></i>Reviews</div></a></li>
                                <li><a href="#"><div><i class="icon-pencil2"></i>Your Orders</div></a></li>
                                <li><a href="<?php echo site_url("contact-us");?>"><div><i class="icon-map-marker2"></i>Contact</div></a></li>

                            </ul>



                        </nav><!-- #primary-menu end -->

                    </div>

                </div>

            </header><!-- #header end -->


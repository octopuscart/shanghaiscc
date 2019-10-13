<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="SemiColonWeb" />
        <?php
        meta_tags();
        ?>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">

        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>"/>
        <link rel="apple-touch-icon image_src" href="<?php echo base_url() . 'assets/images/logof.png'; ?>"/>

        <!-- Stylesheets
        ============================================= -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/style.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/magnific-popup.css" type="text/css" />

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/responsive.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->



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
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/style_custome.css" type="text/css" />

        <!--angular js-->
        <script src="<?php echo base_url(); ?>assets/theme/angular/angular.min.js"></script>

        <!-- Google Tag Manager -->
        <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/include/rs-plugin/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/include/rs-plugin/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/include/rs-plugin/css/navigation.css">





    </head>  


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


            </script>








            <header id="header">

                <div id="header-wrap">

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                        <!-- Logo
                        ============================================= -->
                        <div id="logo">
                            <a href="<?php echo site_url("/"); ?>" class="standard-logo" data-dark-logo="<?php echo base_url(); ?>images/logo-dark.png"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Canvas Logo"></a>
                            <a href="<?php echo site_url("/"); ?>" class="retina-logo" data-dark-logo="<?php echo base_url(); ?>images/logo-dark@2x.png"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Canvas Logo"></a>
                        </div><!-- #logo end -->

                        <!-- Primary Navigation
                        ============================================= -->
                        <nav id="primary-menu" class="style-4">
                            <ul class="norightborder norightpadding norightmargin">
                                <?php
                                include('header_1.php');
                                ?>
                                <?php
                                foreach ($menuitems as $key => $value) {
                                    ?>
                                    <li><a href="<?php echo $value['link']; ?>"><div><i class="<?php echo $value['icon']; ?>"></i><?php echo $value['title']; ?></div></a></li>
                                <?php } ?>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>

                </div>

            </header><!-- #header end -->
            <div class="clear"></div>
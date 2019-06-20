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
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/style.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/swiper.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/magnific-popup.css" type="text/css" />

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/responsive.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />



        <!--web fonts-->
        <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
        <!--libs css-->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/plugins/owl-carousel/owl.transitions.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/plugins/jackbox/css/jackbox.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>assets/theme/plugins/rs-plugin/css/settings.css">

        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/css/bootstrap.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


        <!--theme css-->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/css/theme-animate.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/css/style.css">
        <!--head libs-->
        <script src="<?php echo base_url(); ?>assets/theme/js/jquery-2.1.0.min.js"></script>

        <link href="<?php echo base_url(); ?>assets/theme/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">


        <!--sweet alert-->
        <script src="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.css">




        <!--angular js-->
        <script src="<?php echo base_url(); ?>assets/theme/angular/angular.min.js"></script>

        <!-- Google Tag Manager -->





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

    <script >

        (function ($) {

        $("html").removeClass("v2");
        $("body").ready(function () {
        })

                $("#header").ready(function () {
        // $("#progress-bar").stop().animate({top: "25%", opacity: 0.8}, 1000)
        });
        $("#footer").ready(function () {
        // $("#progress-bar").stop().animate({top: "75%", opacity: 0.5}, 1000)
        });
        $(window).load(function () {

        $("#progress-bar").stop().animate({opacity: 0}, 500, function () {
        $("#loading").fadeOut("fast", function () {
        $(this).remove();
        $("#price_loader").remove();
        });
        });
        });
        })(jQuery);
        $(function () {

        })
    </script>

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


    <div id='loading' class="" style="width:100%;height: 100% ">
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

    </div>   
    
    <body ng-app="App">
        <div ng-controller="ShopController">
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
            <!-- Google Tag Manager (noscript) -->

            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W49WDTL"

                              height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

            <!-- End Google Tag Manager (noscript) -->
            <!--header-->




         

            <!--layout-->
           	<div id="wrapper" class="clearfix">


                <span class="gradient_line"></span>
                <!--top part-->
                <section class="header_top_part color_dark">
                    <div class="container">
                        <div class="row">
                            <!--contact info-->
                            <div class="col-lg-6 col-md-6 col-sm-6 t_xs_align_c">
                                <ul class="hr_list fs_small color_grey_light">
                                    <li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
                                        <span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-phone-1"></i></span>+(852) 2367 2676
                                    </li>
                                    <li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
                                        <a href="mailto:enquire@hongkongbespoketailors.com" class="color_grey_light d_inline_b color_black_hover"><span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-mail-alt"></i></span>enquire@hongkongbespoketailors.com</a>
                                    </li>

                                </ul>
                            </div>
                            <!--social icons-->
                            <div class="col-lg-6 col-md-6 col-sm-6 t_align_r t_xs_align_c">
                                <ul class="hr_list d_inline_b social_icons">
                                    <li class="m_right_8"><a href="https://www.facebook.com/Hong-Kong-Bespoke-Tailors-1270171433140371/?modal=admin_todo_tour" target="_blank" class="color_grey_light facebook circle icon_wrap_size_1 d_block"><i class="icon-facebook-1"></i></a></li>
                                    <li class="m_right_8"><a href="https://twitter.com/1BespokeTailors" class="color_grey_light twitter circle icon_wrap_size_1 d_block" target="_blank"><i class="icon-twitter-1"></i></a></li>
                                    <li class="m_right_8"><a href="https://www.instagram.com/hongkongbespoketailors/" class="color_grey_light instagram circle icon_wrap_size_1 d_block" target="_blank"><i class="icon-instagramm"></i></a></li>
                                    <li class="m_right_8"><a href="https://en.tripadvisor.com.hk/Profile/hkbespoketailors" class="color_grey_light youtube circle icon_wrap_size_1 d_block" target="_blank"><i class="fa fa-tripadvisor" style="margin-top: 4px;"></i></a></li>
                                    <li class="m_right_8"><a href="https://www.pinterest.com/hongkongbespoketailors/" class="color_grey_light youtube circle icon_wrap_size_1 d_block" target="_blank"><i class="fa fa-pinterest" style="margin-top: 4px;"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <hr>




                <header role="banner" class="relative ">
                    <span class="gradient_line"></span>
                    <!--header bottom part-->
                    <section class="header_bottom_part bg_light ">
                        <div class="container">
                            <div class="d_table w_full d_xs_block">
                                <!--logo-->
                                <div class="col-lg-2 col-md-2 col-sm-2  mobile_left d_table_cell d_xs_block f_none v_align_m logo t_xs_align_c">
                                    <a href="<?php echo site_url(); ?>" class="d_inline_m m_xs_top_20 m_xs_bottom_20 mobilelogo">
                                        <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" >
                                    </a>
                                </div>



                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12  t_align_r d_table_cell d_xs_block f_none">
                                    <div class="relative clearfix t_align_r">
                                        <button id="menu_button" class="r_corners tr_all color_dark db_centered m_bottom_20 d_none d_xs_block">
                                            <i class="icon-menu"></i>
                                        </button>
                                        <!--main navigation-->
                                        <nav role="navigation" class=" mobilemenu d_inline_m d_xs_none m_xs_right_0 m_right_15 m_sm_right_5 t_align_l m_xs_bottom_15 ">
                                            <ul class="hr_list main_menu type_2 fw_medium">
                                                <?php
                                                foreach ($menuitems as $key => $value) {
                                                    $submenu = $value['submenu'] == 'yes' ? 'has_sub_menu' : '';
                                                    $style = isset($value['style']) ? $value['style'] : '';
                                                    ?>
                                                    <li class=" container2d relative f_xs_none m_xs_bottom_5">
                                                        <a class="color_dark fs_medium relative r_xs_corners" href="<?php echo $value['link']; ?>" style="<?php echo $style; ?>;font-size: 1em;"><?php echo $value['title']; ?>
                                                            <?php if ($submenu) { ?>
                                                                <i class="icon-angle-down d_inline_m"></i>
                                                            <?php } ?>
                                                        </a>
                                                        <?php if ($submenu) { ?>
                                                            <!--sub menu-->
                                                            <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                                <?php
                                                                foreach ($value['submenuitems'] as $key => $value2) {
                                                                    ?>
                                                                    <li class="container2d relative ">
                                                                        <a href="<?php echo $value2['link']; ?>" class="menu-link d_block color_dark relative main-menu-link" style="font-size: 1em;"> <?php echo $value2['title']; ?> </a>
                                                                    </li>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </ul>
                                                        <?php } ?>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </nav>
                                        <!--searchform button-->
                                        <!--                                        <div class="f_right header_mobile_left clearfix f_xs_none d_xs_inline_b t_xs_align_l m_xs_bottom_15">
                                                                                    shopping cart
                                                                                    <div class="relative f_right dropdown_2_container shoppingcart">
                                                                                        <span class="cart_top_upper animated bounceIn">{{globleCartData.total_quantity}}</span>
                                                                                        <button class="icon_wrap_size_2 color_blue2  circle tr_all">
                                                                                            <i class="icon-basket color_blue2 _2 tr_inherit"></i>
                                                                                        </button>
                                                                                        <div class="dropdown_2 bg_light shadow_1 tr_all p_top_0" ng-if="globleCartData.total_quantity">
                                                                                            <div class="sc_header bg_light_2 fs_small color_grey">
                                                                                                Recently added item(s)
                                                                                            </div>
                                                                                            <ul class="added_items_list" >
                                                                                                <li class="clearfix lh_large m_bottom_20 relative"  ng-repeat="product in globleCartData.products">
                                                                                                    <a href="#" class="d_block f_left m_right_10"><img src="{{product.file_name}}" alt="" style="height: 60px;width: 60px;"></a>
                                                                                                    <div class="f_left item_description lh_ex_small">
                                                                                                        <a href="#" class="color_dark fs_medium d_inline_b m_bottom_3">{{product.title}} - {{product.item_name}}</a>
                                                                                                        <p class="color_dark  fs_small">{{product.price|currency:" "}} X {{product.quantity}} </p>
                                                                                                    </div>
                                                                                                    <div class="f_right fs_small lh_medium d_xs_none">
                                                                                                        <span class="color_dark">{{product.total_price|currency:" "}}</span>
                                                                                                    </div>
                                                                                                    <i class="icon-cancel-circled-1 color_dark _2 fs_large color_dark_hover tr_all" ng-click="removeCart(product.product_id)"></i>
                                                                                                </li>
                                        
                                                                                            </ul>
                                                                                            <div class="total_price bg_light_2 t_align_r fs_medium m_bottom_15">
                                                                                                <ul>
                                                                                                    <li class="color_dark"><span class="fw_ex_bold">Total:</span> <span class="fw_ex_bold d_inline_b m_left_15 price t_align_l color_pink">{{globleCartData.total_price|currency:"<?php echo globle_currency; ?> "}}</span></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="clearfix border_none p_top_0 sc_footer">
                                                                                                <a href="<?php echo site_url("Cart/checkoutInit"); ?>" class="button_type_1 d_block color_pink  color_pink_hover f_right r_corners tr_all fs_medium m_left_5 hide_from_mobile"><i class="icon-check-1 d_inline_b m_right_5"></i> Checkout</a>
                                                                                                <a href="<?php echo site_url("Cart/details"); ?>" class="button_type_1 d_block color_pink f_left r_corners color_pink_hover tr_all fs_medium"><i class="icon-basket d_inline_b m_right_5"></i> View Cart</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    login
                                                                                    <div class="relative f_right m_right_10 dropdown_2_container login">
                                                                                        <button class="icon_wrap_size_2 color_blue2  circle tr_all">
                                                                                            <i class="icon-lock color_blue2 _2 tr_inherit"></i>
                                                                                        </button>
                                                                                        <div class="dropdown_2 bg_light shadow_1 tr_all">
                                        
                                        <?php
                                        $session_data = $this->session->userdata('logged_in');
                                        if (isset($session_data['login_id'])) {
                                            ?>
                                                                                                                                                            <h5 class="fw_light color_dark m_bottom_23">
                                                                                                                                                                <button class="icon_wrap_size_2 color_blue2  circle tr_all">
                                                                                                                                                                    <i class="icon-user color_blue2 _2 tr_inherit"></i>
                                                                                                                                                                </button>
                                            <?php
                                            echo $session_data['first_name'];
                                            ?><br/>
                                                                                                                                                                <small style="margin-left: 45px">( <?php
                                            echo $session_data['username'];
                                            ?>)</small>
                                                                                                    
                                                                                                                                                            </h5>
                                                                                                                                                            <div class="clearfix border_none p_top_0 sc_footer">
                                                                                                                                                                <a href="<?php echo site_url("Account/logout"); ?>" class="button_type_1 d_block d_block color_pink  color_pink_hover f_right r_corners tr_all fs_medium m_left_5 hide_from_mobile"><i class="icon-logout d_inline_b m_right_5"></i> Logout</a>
                                                                                                                                                                <a href="<?php echo site_url("Account/profile"); ?>" class="button_type_1 d_block d_block color_pink  color_pink_hover f_left r_corners  tr_all fs_medium "><i class="icon-list-alt d_inline_b m_right_5"></i> View Profile</a>
                                                                                                                                                            </div>
                                                                                                    
                                                                                                    
                                                                                                    
                                            <?php
                                        } else {
                                            ?>
                                                                                                                                                            <h5 class="fw_light color_dark m_bottom_23"><i class='icon-user'></i> Login</h5>
                                                                                                                                                            <form class="login_form m_bottom_20" action="<?php echo site_url("Account/login") ?>" method="post">
                                                                                                                                                                <ul>
                                                                                                                                                                    <li class="m_bottom_10 relative">
                                                                                                                                                                        <i class="icon-user login_icon fs_medium color_dark _2"></i>
                                                                                                                                                                        <input type="text" placeholder="Email"  name="email" class="r_corners color_grey w_full fw_light">
                                                                                                                                                                    </li>
                                                                                                                                                                    <li class="m_bottom_10 relative">
                                                                                                                                                                        <i class="icon-lock login_icon fs_medium color_dark _2"></i>
                                                                                                                                                                        <input type="password" placeholder="Password"  name="password" class="r_corners color_grey w_full fw_light">
                                                                                                                                                                    </li>
                                                                                                    
                                                                                                                                                                    <li class="row">
                                                                                                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                                                                                                                                                            <button class="button_type_5 tr_all bg_gradiant color_light pull-left transparent fs_medium r_corners" name="signIn" type="submit" value="signIn">Login</button>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8 t_align_r lh_medium">
                                                                                                                                                                            <a href="#" class="color_scheme color_purple_hover fs_small">Forgot your password?</a><br>
                                                                                                                                                                        </div>
                                                                                                                                                                    </li>
                                                                                                                                                                </ul>
                                                                                                                                                            </form>
                                                                                                                                                            <div class="bg_light_2 im_half_container sc_footer">
                                                                                                                                                                <h5 class="fw_light color_dark d_inline_m half_column">New Customer?</h5>
                                                                                                                                                                <div class="half_column t_align_r d_inline_m">
                                                                                                                                                                    <a href="<?php echo site_url("Account/login"); ?>" class="button_type_5 t_xs_align_c d_inline_b tr_all r_corners color_light bg_gradiant transparent fs_medium">Create an Account</a>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                            <?php
                                        }
                                        ?>
                                        
                                        
                                        
                                        
                                                                                        </div>
                                                                                    </div>
                                        
                                                                                </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </header>

                <!--header-->

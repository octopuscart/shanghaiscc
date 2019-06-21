<?php
$this->load->view('layout/header');
$clients = [1, 2, 3, 4, 5, 6,7,8,9,10,11,12];
?>

<div id="page-menu" class="no-sticky">

    <div id="page-menu-wrap" style="    background-color: #333333;">

        <div class="container clearfix">

            <div class="menu-title">Gallery</div>



            <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

        </div>

    </div>

</div>





<div class="section_offset" ng-controller="lookBookController">
    <div class="container">
        <div class="content">
            <!--contact-->
            <!--clients area-->
            <div class="latest-w3">
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/GridGallery/css/demo.css" />
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/GridGallery/css/component.css" />

                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/modernizr.custom.js"></script>

                <div id="grid-gallery" class="grid-gallery" style="    margin-top: 2em;">
                    <section class="grid-wrap">
                        <ul class="grid">
                            <li class="grid-sizer"></li><!-- for Masonry column width -->

                            <?php
                            foreach ($clients as $key => $value) {
                                ?>

                                <li style="    padding: 10px;" >
                                    <div class="panel panel-default" style="border:none;margin: 0px;">
                                        <div class="panel-body" style="    padding: 5px;">
                                            <div class="thumbnail lookbook_thumb" >
                                                <img src="<?php echo base_url(); ?>assets/images/clients/<?php echo $value; ?>.jpg" alt="img01" style=""/>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>


                        </ul>
                        <div style="clear:both"></div>
                    </section><!-- // grid-wrap -->
                    <section class="slideshow" >
                        <ul>

                            <?php
                            foreach ($clients as $key => $value) {
                                ?>
                                <li >
                                <center>
                                    <img src="<?php echo base_url(); ?>assets/images/clients/<?php echo $value; ?>.jpg" alt="img01"  style="    height:500px;"/>
                                </center>
                                </li>

                                <?php
                            }
                            ?>

                        </ul>

                        <nav>
                            <span class="icon nav-prev"></span>
                            <span class="icon nav-next"></span>
                            <span class="icon nav-close"></span>
                        </nav>

                    </section><!-- // slideshow -->
                </div><!-- // grid-gallery -->


                <!-- // grid-gallery -->
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/imagesloaded.pkgd.min.js"></script>
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/masonry.pkgd.min.js"></script>
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/classie.js"></script>
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/cbpGridGallery.js"></script>
                <script>
                </script>
            </div>
            <!--end of client area-->
            <!--contact-->
        </div>
    </div>


</div>

</div>

<script>

    App.controller('lookBookController', function ($scope, $http, $timeout, $interval) {
        $scope.styleArray = {"title": "", "loading": 1, "style_list": [], "enquery_list": {}};
        $timeout(function () {
            $scope.girdgallary = new CBPGridGallery(document.getElementById('grid-gallery'));
        }, 500)



    })

</script>

<?php
$this->load->view('layout/footer');
?>
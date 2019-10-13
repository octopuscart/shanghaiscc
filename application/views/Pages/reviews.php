<?php
$this->load->view('layout/header');
$clients = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
?>

<div id="page-menu" class="no-sticky">

    <div id="page-menu-wrap" style="    background-color: #333333;">

        <div class="container clearfix">

            <div class="menu-title">Reviews</div>

        </div>

    </div>

</div>





<div class="section_offset" ng-controller="lookBookController">

    <div class="container clearfix m_t_30">

        <div class="col_full">

            <div class="heading-block center nobottomborder">
                <h2 class="m_t_30">The Reviews Of Our Worldwide Clients</h2>
                <span>Recommended and Popular Tailors in Hong Kong.</span>
            </div>


        </div>

    </div>
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
                            $testimoni = [
                                array("name" => "Thank Noel E", "country_city" => "", "review" => "There are many designers out there who offer best of fashion outfits. but seldom offer excellent standards of customer service experience. Aves from Manning Company duly understands my requirements and offer on-time delivery of garments, what more can one ask for."),
                                array("name" => "Thank Shelley S", "country_city" => "", "review" => "I got suits and shirts made on their visit to San Antonio and being on a heavier side of weight, i always require fashion clothes that make me look slender. of all the designers that i have tried, Aves from Manning Company is the best and top notch quality!"),
                                array("name" => "Redouane R", "country_city" => "", "review" => "I had very bad experience in Shenzhen with my first tuxedo which I couldn't take for my ceremony. One week before I had recommandation from a friend of mine to do new one by manning company and I have to say the service was very professional and the result was a perfect. Very patient and take care of your demands on high level of details. Der service bei Manning company einfach klasse( short comment on German :))"),
                                array("name" => "Aysekennedy", "country_city" => "", "review" => "I've been coming to Bespoke Tailors for a few months. They do the most amazing job ! I've had 2 suits and a few shirts made which fit like a glove and are absolutely beautiful! Just bring in a picture and let them create the perfect outfit for you. I highly recommend Bespoke Tailors!"),
                                array("name" => "Adam B", "country_city" => "", "review" => "Located near the Kowloon hotel, Aves's tailor shop has the largest selection of fine fabrics I've come across. His professionalism service was spot on goods were delivered on time and it fitted perfectly first time. If your after a high quality suite I recommend a visit!!!"),
                                array("name" => "Leni911", "country_city" => "", "review" => "We came to hongkong 3 days ago and i decided to get a cashmere coat like i saw it in a Cuccinelli Shop. Because of the many good references in google we decided to go to Manning Company. I showed him the pictures of the coat and he took all my measurements. After two days we came back for the first fitting and it was nearly perfect. One day later we came for pick up the coat - it looks gorgeous, the fit is excellent and i am more than happy. I saved up so much money and the quality and look is identically as the one i saw in the shop. The service was so fast and i would definitely recommend this company. I finally found my personal tailor"),
                                array("name" => "Willie F", "country_city" => "", "review" => " I have came here two times and brought with me a friend who wanted to have some clothes made. Aves treated us as friends and not as customers but as friends. I got him to even come to Memphis two or three times during his tour of the U.S. The prices are fair and reasonable. Lastly, all of my friends that he made clothes for were very satisfied, including my Army friend Robert Bonds, who is very hard to please. Many thanks Aves, you made me look like I have a million dollars."),
                                array("name" => "TANZANIA09Dc", "country_city" => "", "review" => "Thank you for good and nice suit with shirts. Nice welcome . Very professional. Amazing result ! I m very happy"),
                                array("name" => "MauriceLeonard22", "country_city" => "", "review" => "Located near the Kowloon hotel, Aves's tailor shop has the largest selection of fine fabrics I've come across. His professionalism service was spot on goods were delivered on time and it fitted perfectly first time. If your after a high quality suite I recommend a visit!!!"),
                                array("name" => "Candy M", "country_city" => "", "review" => "I real suggest Imperial Bespoke Tailors .I have had several items Tailored made and they are the best in Hong Kong.I highly reccommend them for all your clothing needs you will not be disappointed."),
                            ];
                            foreach ($testimoni as $key => $value) {
                                ?>

                                <li style="    padding: 20px;" >
                                    <div class="panel panel-default review_col" style="margin: 0px;">
                                        <div class="panel-body" style="    padding: 5px;">
                                            <div class="thumbnail " >
                                                <div class="testi-content">
                                                    <p>
                                                        <?php echo $value['review']; ?>
                                                    </p>
                                                    <div class="testi-meta">
                                                        <?php echo $value['name']; ?>

                                                    </div>
                                                </div>
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
                            $testimoni = [
                                array("name" => "Thank Noel E", "country_city" => "", "review" => "There are many designers out there who offer best of fashion outfits. but seldom offer excellent standards of customer service experience. Aves from Manning Company duly understands my requirements and offer on-time delivery of garments, what more can one ask for."),
                                array("name" => "Thank Shelley S", "country_city" => "", "review" => "I got suits and shirts made on their visit to San Antonio and being on a heavier side of weight, i always require fashion clothes that make me look slender. of all the designers that i have tried, Aves from Manning Company is the best and top notch quality!"),
                                array("name" => "Redouane R", "country_city" => "", "review" => "I had very bad experience in Shenzhen with my first tuxedo which I couldn't take for my ceremony. One week before I had recommandation from a friend of mine to do new one by manning company and I have to say the service was very professional and the result was a perfect. Very patient and take care of your demands on high level of details. Der service bei Manning company einfach klasse( short comment on German :))"),
                                array("name" => "Aysekennedy", "country_city" => "", "review" => "I've been coming to Bespoke Tailors for a few months. They do the most amazing job ! I've had 2 suits and a few shirts made which fit like a glove and are absolutely beautiful! Just bring in a picture and let them create the perfect outfit for you. I highly recommend Bespoke Tailors!"),
                                array("name" => "Adam B", "country_city" => "", "review" => "Located near the Kowloon hotel, Aves's tailor shop has the largest selection of fine fabrics I've come across. His professionalism service was spot on goods were delivered on time and it fitted perfectly first time. If your after a high quality suite I recommend a visit!!!"),
                                array("name" => "Leni911", "country_city" => "", "review" => "We came to hongkong 3 days ago and i decided to get a cashmere coat like i saw it in a Cuccinelli Shop. Because of the many good references in google we decided to go to Manning Company. I showed him the pictures of the coat and he took all my measurements. After two days we came back for the first fitting and it was nearly perfect. One day later we came for pick up the coat - it looks gorgeous, the fit is excellent and i am more than happy. I saved up so much money and the quality and look is identically as the one i saw in the shop. The service was so fast and i would definitely recommend this company. I finally found my personal tailor"),
                                array("name" => "Willie F", "country_city" => "", "review" => " I have came here two times and brought with me a friend who wanted to have some clothes made. Aves treated us as friends and not as customers but as friends. I got him to even come to Memphis two or three times during his tour of the U.S. The prices are fair and reasonable. Lastly, all of my friends that he made clothes for were very satisfied, including my Army friend Robert Bonds, who is very hard to please. Many thanks Aves, you made me look like I have a million dollars."),
                                array("name" => "TANZANIA09Dc", "country_city" => "", "review" => "Thank you for good and nice suit with shirts. Nice welcome . Very professional. Amazing result ! I m very happy"),
                                array("name" => "MauriceLeonard22", "country_city" => "", "review" => "Located near the Kowloon hotel, Aves's tailor shop has the largest selection of fine fabrics I've come across. His professionalism service was spot on goods were delivered on time and it fitted perfectly first time. If your after a high quality suite I recommend a visit!!!"),
                                array("name" => "Candy M", "country_city" => "", "review" => "I real suggest Imperial Bespoke Tailors .I have had several items Tailored made and they are the best in Hong Kong.I highly reccommend them for all your clothing needs you will not be disappointed."),
                            ];
                            foreach ($testimoni as $key => $value) {
                                ?>
                                <li >
                                <div class="panel panel-default" style="border:none;margin: 20px;background: white">
                                        <div class="panel-body" style="    padding: 50px;">
                                            <div class="thumbnail " >
                                                <div class="testi-content">
                                                    <p>
                                                        <?php echo $value['review']; ?>
                                                    </p>
                                                    <div class="testi-meta">
                                                        <?php echo $value['name']; ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
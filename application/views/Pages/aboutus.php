<?php
$this->load->view('layout/header');
?>

<div id="page-menu" class="no-sticky">

    <div id="page-menu-wrap" style="    background-color: #333333;">

        <div class="container clearfix">

            <div class="menu-title">About Us</div>



        </div>

    </div>

</div>

<section id="content">

    <div class="content-wrap" style="padding: 0px;">

        <div class="row clearfix common-height">

            <div class="col-lg-6 center col-padding hideonmobile" style="background: url(<?php echo base_url(); ?>assets/images/suit_st.jpg) center center / cover no-repeat; height: 708px;">
                <div>&nbsp;</div>
            </div>
            <div class="col-lg-6 center col-padding" style="background-color: rgb(245, 245, 245); height: 708px;">
                <div>
                    <div class="heading-block nobottomborder">
                        <h3>About Us</h3>
                    </div>

                    <p class="lead nobottommargin">
                        Since 1948 after the Chinese independence skilled Shanghai's Tailors were started moving to Hong Kong , and since then they has been providing their best Workmanship in Hong Kong tailoring business, and now they are famous all over the world for their high quality hand tailoring.
                    </p>
                    <p class="lead nobottommargin">
                        Shanghai's tailor always stand by its name and known as one of the leading tailor in Hong Kong. Because of its highly skilled and nit workmanship, and best service, today Shanghai's tailor is considered as a trusted home for tailoring. It's professional fashion advising,	
                        made Shanghai's tailor thousand of clientele from all over the world includes diplomats, military officers, business men, and many more world servicing clients.                  

                    </p>
                    <p class="lead nobottommargin">
                        Shanghai's tailor is more than a retail store can't understand without visiting it. Providing the latest styles, according different body shapes and under the close observations of cut and stitch, Shanghai's tailor always provides something new in fashion and fabrics quality, which delights it's clients.    
                    </p>
                </div>
            </div>
        </div>

        <div class="container clearfix m_t_30">

            <div class="col_full">

                <div class="heading-block center nobottomborder">
                    <img src="<?php echo base_url(); ?>assets/images/mlogo.png" style="height: 79px;">
                    <h2 class="m_t_30">From The House Of Manning Company Tailor</h2>
                    <span>Producing only the highest-quality garments, Manning Company clients have come to expect excellence as a given. Manning Company's clientele - many of whom are leaders in their own fields - are uncompromising in their demand for quality.</span>
                    <a href="https://www.manningcompany.com/" class="btn btn-success m_t_30" target="_blank">Visit Now</a>
                </div>


            </div>




        </div>

        <div class="section footer-stick">

            <h4 class="uppercase center">What <span>Clients</span> Say?</h4>

            <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="true">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <?php
                        $testimoni = [
                            array("name" => "Thank Noel E", "country_city" => "", "review" => "There are many designers out there who offer best of fashion outfits. but seldom offer excellent standards of customer service experience. Aves from Manning Company duly understands my requirements and offer on-time delivery of garments, what more can one ask for."),
                            array("name" => "Thank Shelley S", "country_city" => "", "review" => "I got suits and shirts made on their visit to San Antonio and being on a heavier side of weight, i always require fashion clothes that make me look slender. of all the designers that i have tried, Aves from Manning Company is the best and top notch quality!"),
                            array("name" => "Redouane R", "country_city" => "", "review" => "I had very bad experience in Shenzhen with my first tuxedo which I couldn't take for my ceremony. One week before I had recommandation from a friend of mine to do new one by manning company and I have to say the service was very professional and the result was a perfect. Very patient and take care of your demands on high level of details. Der service bei Manning company einfach klasse( short comment on German :))"),
                            array("name" => "Aysekennedy", "country_city" => "", "review" => "I've been coming to Bespoke Tailors for a few months. They do the most amazing job ! I've had 2 suits and a few shirts made which fit like a glove and are absolutely beautiful! Just bring in a picture and let them create the perfect outfit for you. I highly recommend Bespoke Tailors!"),
                        ];
                        foreach ($testimoni as $key => $value) {
                            ?>

                            <div class="slide">

                                <div class="testi-content">
                                    <p>
                                        <?php echo $value['review']; ?>
                                    </p>
                                    <div class="testi-meta">
                                        <?php echo $value['name']; ?>

                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>

        </div>


    </div>
</section>





<?php
$this->load->view('layout/footer');
?>
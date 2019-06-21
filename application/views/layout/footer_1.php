<footer id="footer" class="dark">

    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_two_third">

                <div class="col_one_third">

                    <div class="widget clearfix">

                        <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" class="footer-logo" style="margin-top: -31px;    margin-bottom: 0px;">


                        <div style="background: url('<?php echo base_url(); ?>assets/images/world-map.png') no-repeat center center; background-size: 100%;">
                            <address>
                                <strong>Location:</strong><br>
                                Shop 22B, G/F,<br/>
                                Hankow Centre,<br/>
                                5-15 Hankow Road<br/> 
                                Tsim Sha Tsui,<br/>
                                Kowloon, Hong Kong                                        </address>


                        </div>

                    </div>

                </div>

                <div class="col_one_third hideonmobile" style="    padding-left: 45px;">

                    <div class="widget widget_links clearfix">

                        <h4>Links</h4>

                        <ul>
                            <?php
                            include('header_1.php');
                            ?>
                            <?php
                            foreach ($menuitems as $key => $value) {
                                ?>
                                <li><a href="<?php echo $value['link']; ?>"><?php echo $value['title']; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>

                    </div>

                </div>

                <div class="col_one_third col_last">

                    <div class="widget clearfix">
                        <h4>Contact Us</h4>

                        <div id="post-list-footer">
                            <div class="spost clearfix">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4>
                                            <div class="footer_icon_container"> <i class="icon-phone3 footer_icon" style="    font-size: 44px;"></i> </div>
                                            <div>
                                                <a href="tel:+852 2739 6165" >+(852) 2111 1955</a><br/>
                                                <a href="tel:+852 3427 9296" >+(852) 3427 9296</a><br/>
                                                <a href="tel:+852 2375 3897" >+(852) 2375 3897</a>
                                            </div>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4>


                                            <div class="footer_icon_container"> <i class="fa fa-whatsapp footer_icon" style="    font-size: 20px;"></i>  </div>
                                            <div class="float_left  m_l_10">
                                                <a href="https://api.whatsapp.com/send?phone=85293805471">+(852) 9380 5471 </a>
                                            </div>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4>
                                            <div class="footer_icon_container"> <i class="icon-email3 footer_icon" style="    font-size: 20px;"></i>  </div>
                                            <div class="float_left m_top_5 m_l_10">
                                                <a href="mailto:info@manningcompany.com">info@manningcompany.com</a>
                                            </div>
                                        </h4>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>

                </div>

            </div>

            <div class="col_one_third col_last">



                <div class="widget subscribe-widget clearfix">
                    <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers :</h5>
                    <div class="widget-subscribe-form-result"></div>
                    <form id="widget-subscribe-form"  role="form" method="post" class="nobottommargin" novalidate="novalidate">
                        <div class="input-group divcenter">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="icon-email2"></i></div>
                            </div>
                            <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="submit">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="widget clearfix" style="margin-bottom: -20px;margin-top: 30px;">

                    <div class="row">

                        <div class="col_last tright">
                            <div class=" clearfix">
                                <a href="#" class="social-icon si-small si-borderless si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-instagram">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-pinterest">
                                    <i class="icon-pinterest"></i>
                                    <i class="icon-pinterest"></i>
                                </a>



                                <a href="#" class="social-icon si-small si-borderless si-linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>
                            </div>
                            <br/>
                            <div class="copyright-links m_l_10"><a href="https://www.manningcompany.com/" target="_blank">From The House Of Manning Company Tailor</a></div>


                            <div class="clear"></div>

                        </div>


                    </div>

                </div>

            </div>

        </div><!-- .footer-widgets-wrap end -->

    </div>







    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                Copyrights © <?php echo date("Y"); ?> All Rights Reserved by Shanghai's tailor.<br>
            </div>


        </div>

    </div><!-- #copyrights end -->

</footer>
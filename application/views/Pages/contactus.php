<?php
$this->load->view('layout/header');
?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.537609290042!2d114.17099675152589!3d22.295498869329954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400ec9eb6f00d%3A0x1ffe11fbfb9cbb0f!2sManning+Company+Bespoke+Tailors!5e0!3m2!1sen!2sin!4v1491288945320"
        width="100%" height="400" frameborder="0" style="border: 0;;" allowfullscreen>
</iframe>


<!--content-->
<section class="section_offset">
    <div class="container clearfix">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                <h3 class="color_dark fw_light m_bottom_15 heading_1 t_align_c">Contact Information</h3>

                <div class="row">

                    <div class="col-md-6">
                        <h4 style="    margin-bottom: 11px;">
                            <i class="icon-location" style="    font-size: 29px;
                               margin-right: 5px;    margin-top: -6px;
                               float: left;"></i> <strong>Location</strong>
                        </h4>
                        <address style="font-size: 15px;    margin-right: 11px;    margin-left: 29px;">

                            Shop 22B, G/F,
                            Hankow Centre,<br/>
                            5-15 Hankow Road
                            Tsim Sha Tsui,<br/>
                            Kowloon, Hong Kong                                        
                        </address>


                        <div class="spost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><i class="icon-phone" style="    font-size: 29px;
                                           margin-top: -11px;    margin-right: 5px;
                                           float: left;"></i> <a href="tel:+(852) 2739 6165">+(852) 2111 1955</a></h4>
                                </div>

                            </div>
                        </div>
                        <div class="spost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><i class="icon-email3" style="    font-size: 29px;
                                           /* line-height: 26px; */
                                           margin-top: -11px;    margin-right: 5px;
                                           float: left;"></i> <a href="email:info@manningcompany.com">info@manningcompany.com</a></h4>
                                </div>

                            </div>
                        </div>

                        <div class="spost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
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

                                    <div class="clear"></div></div>

                            </div>
                        </div>

                    </div>


                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                <h3 class="color_dark fw_light m_bottom_15 heading_1 t_align_c">Contact Form</h3>
                <div class="contact-widget">

                    <div class="contact-form-result"></div>

                    <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post" novalidate="novalidate">

                        <div class="form-process"></div>

                        <div class="col_one_third">
                            <label for="template-contactform-name">Name <small>*</small></label>
                            <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required">
                        </div>

                        <div class="col_one_third">
                            <label for="template-contactform-email">Email <small>*</small></label>
                            <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control">
                        </div>

                        <div class="col_one_third col_last">
                            <label for="template-contactform-phone">Phone</label>
                            <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control">
                        </div>

                        <div class="clear"></div>

                        <div class="col_two_third">
                            <label for="template-contactform-subject">Subject <small>*</small></label>
                            <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control">
                        </div>

                        <div class="col_one_third col_last">
                            <label for="template-contactform-service">Services</label>
                            <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control">

                        </div>

                        <div class="clear"></div>

                        <div class="col_full">
                            <label for="template-contactform-message">Message <small>*</small></label>
                            <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                        </div>

                        <div class="col_full hidden">
                            <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control">
                        </div>

                        <div class="col_full">
                            <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d black">Submit Comment</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
if (isset($_GET['error'])) {
    ?>

    <script>
        swal({
            title: 'Error',
            type: 'error',
            html: "Invalid Entry",
            timer: 5000,
        }).then(
                function () {
                    window.location = "<?php echo site_url("contact-us"); ?>";
                },
                function (dismiss) {
                    window.location = "<?php echo site_url("contact-us"); ?>";
                }
        )
    </script>
    <?php
}
?>


<?php
$this->load->view('layout/footer');
?>
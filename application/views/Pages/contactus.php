<?php
$this->load->view('layout/header');
?>
<div class="google-map-area">
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyA319S-ZyrzBQNhbYmjGedtOfl8wm6tY0Y&v=3.exp'></script><div style='overflow:hidden;height:338px;width:100%;'>
        <div id='gmap_canvas' style='height:338px;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small>

            </small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
    </div><script type='text/javascript'>
        function init_map() {
            //22.2968045,114.1687551  22.2969039,114.1623853
            var myOptions = {zoom: 13, center: new google.maps.LatLng(22.3002741, 114.1779154),
                mapTypeId: google.maps.MapTypeId.ROADMAP};
            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
            marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(22.3002741, 114.1779154)});




            infowindow = new google.maps.InfoWindow({content: '<strong>Hong Kong Bespoke Tailors</strong><br>\
            Room No. 603, 6/F, Tower A, <br/>New Mandarin Plaza,<br/> 14 Science Museum Road, T.S.T, Hong Kong<br>'});

            google.maps.event.addListener(marker, 'click', function () {
                infowindow.open(map, marker);
            });
            infowindow.open(map, marker);





        }
        google.maps.event.addDomListener(window, 'load', init_map);</script>

</div>




<!--content-->
<section class="section_offset">
    <div class="container clearfix">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                <h3 class="color_dark fw_light m_bottom_15 heading_1 t_align_c">Contact Information</h3>
                <p class="m_bottom_35 heading_2 t_align_c">Contact <?php echo site_name; ?>
                </p>		
                <div class="row">
                    <ul class="col-lg-7 col-md-7 col-sm-7 fw_light w_break m_bottom_45 m_xs_bottom_30">
                        <li class="m_bottom_8">
                            <a href="tel:85223672676"> 
                               <div class="d_inline_m icon_wrap_size_1 color_dark  circle m_right_10">
                                    <i class="icon-phone-1"></i>
                                </div>
                                +(852) 2367 2676<br/> 
                            </a>
                        </li>

                        <li class="m_bottom_8">

                            <a href="https://api.whatsapp.com/send?phone=85298163280">
                                <i class="fa fa-whatsapp " style="    font-size: 23px;color:black;
                                   margin-right: 12px;"></i>



                                +(852) 9816 3280<br/> 
                            </a>
                        </li>





                        <li class="m_bottom_8">
                            <div class="d_inline_m icon_wrap_size_1 color_dark  circle m_right_10">
                                <i class="icon-mail-alt"></i>
                            </div>

                            <a href="mailto: enquire@hongkongbespoketailors.com" class="color_dark  _hover"> enquire@hongkongbespoketailors.com</a><br/>


                        </li>

                    </ul>
                    <ul class="col-lg-5 col-md-5 col-sm-5 m_xs_bottom_30 vr_list_type_5">

                        <li class="m_bottom_8 fw_light">
                            <div class="f_left icon_wrap_size_1 color_dark  circle">
                                <i class="icon-location"></i>
                            </div>
                            Room No. 603, <br/>6/F, Tower A, <br/>New Mandarin Plaza, </br>
                            14 Science Museum Road, T.S.T, Hong Kong

                        </li>



                    </ul>

                </div>
                <h5 class="color_dark m_bottom_10 fw_light ">Opening Hours</h5>
                <ul class="hr_list social_icons">
                    <!--tooltip_container class is required-->
                    <li class="m_right_ fw_light m_bottom_10 tooltip_container">
                    <li class="m_bottom_8 color_dark fw_light font_size_14">
                        <ul class='row' style="width: 300px;">
                            <div class='m_bottom_8 col-md-12'>
                                <div class="d_inline_m icon_wrap_size_1 color_dark  circle m_right_10">
                                    <i class="icon-clock"></i>
                                </div>
                                <span class='font_size_14'>Monday to Saturday</span><br/>
                                <span style='margin-left: 35px'>09:00 AM to 09:00 PM</span>
                            </div>

                        </ul>

                    </li>

                    </li>




                </ul>
                <h5 class="color_dark m_bottom_20 fw_light">Stay Connected</h5>
                <ul class="hr_list social_icons">
                    <!--tooltip_container class is required-->
                    <li class="m_right_15 m_bottom_15 tooltip_container">
                        <!--tooltip-->
                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Follow Us on Facebook</span>
                        <a href="https://www.facebook.com/Hong-Kong-Bespoke-Tailors-1270171433140371/?modal=admin_todo_tour" target="_blank" class="d_block facebook facebook_static_color icon_wrap_size_2 circle color_grey_light_2">
                            <i class="icon-facebook fs_small"></i>
                        </a>
                    </li>
                    <li class="m_right_15 m_bottom_15 tooltip_container">
                        <!--tooltip-->
                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Follow Us on Twitter</span>
                        <a href="https://twitter.com/1BespokeTailors" class="d_block twitter twitter_static_color icon_wrap_size_2 circle color_grey_light_2" target="_blank">
                            <i class="icon-twitter fs_small"></i>
                        </a>
                    </li>
                    <li class="m_right_15 m_bottom_15 tooltip_container m_sm_right_0 m_xs_right_15">
                        <!--tooltip-->
                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Instagram</span>
                        <a href="https://www.instagram.com/hongkongbespoketailors/" class="d_block instagram instagram_static_color icon_wrap_size_2 circle color_grey_light_2" target="_blank">
                            <i class="icon-instagramm fs_small"></i>
                        </a>
                    </li>
                    <li class="m_right_15 m_bottom_15 m_sm_right_0 tooltip_container m_xs_right_15">
                        <!--tooltip-->
                        <span class="d_block r_corners color_default tooltip fs_small tr_all">TripAdvisor</span>
                        <a href="https://en.tripadvisor.com.hk/Profile/hkbespoketailors" class="d_block  youtube_static_color icon_wrap_size_2 circle color_grey_light_2" target="_blank">
                            <i class="fa fa-tripadvisor fs_small" style="    margin-top: 7px;"></i>
                        </a>
                    </li>

                    <li class="m_right_15 m_bottom_15 m_sm_right_0 tooltip_container m_xs_right_15">
                        <!--tooltip-->
                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Pinterest</span>
                        <a href="https://www.pinterest.com/hongkongbespoketailors/" class="d_block  pinterest_static_color icon_wrap_size_2 circle color_grey_light_2" target="_blank">
                            <i class="fa fa-pinterest fs_small" style="    margin-top: 7px;"></i>
                        </a>
                    </li>









                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                <h3 class="color_dark fw_light m_bottom_15 heading_1 t_align_c">Contact Form</h3>
                <p class="m_bottom_35 heading_2 t_align_c">For any queries
                </p>	
                <?php
                if ($checksent == 1) {
                    ?>

                    <script>
                        swal({
                            title: 'Thanks',
                            type: 'success',
                            html: "Thanks to contact us.",
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
                if ($checksent == 2) {
                    ?>
                    <div class="alert_box error r_corners relative fs_medium">
                        <b>Connection Error!</b> Unable to sent mail.
                        <i class="icon-cancel close_alert_box tr_all translucent circle t_align_c"></i>
                    </div><?php
                }
                ?>
                <form method="post" action="#">
                    <ul>
                        <li class="row m_bottom_10">
                            <div class="col-lg-6 col-md-6 col-sm-6 w_xs_full m_xs_bottom_10">
                                <input type="text" name="full_name" placeholder="Name*" class="w_full r_corners fw_light">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 w_xs_full">
                                <input type="text" name="contact" placeholder="Contact No.*" class="w_full r_corners fw_light" required="">
                            </div>
                        </li>
                        <li class="m_bottom_10">
                            <input type="email" name="email" placeholder="Email*" class="w_full r_corners fw_light" required="">
                        </li>
                        <li class="m_bottom_10">
                            <input type="text" name="subject" placeholder="Subject" class="w_full r_corners fw_light" required="">
                        </li>
                        <li class="m_bottom_5">
                            <textarea class="w_full r_corners fw_light height_3" name="message" placeholder="Message" required=""></textarea>
                        </li>
                        <li class="m_bottom_20">
                            <label for="capcha" class="d_inline_m fw_light m_right_5 w_auto">Anti-spam test: 4+4=</label>
                            <input id="capcha" type="text" name="anti_spam" class="r_corners fw_light d_inline_m w_auto">
                        </li>
                        <li class="m_bottom_10">
                            <button name='sendmessage' value='sendmessage' class="button_type_5 color_dark  r_corners fs_medium tr_all m_right_10 m_sm_bottom_10">Submit</button>
                        </li>
                    </ul>
                </form>
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
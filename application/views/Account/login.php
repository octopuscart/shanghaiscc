<?php
$this->load->view('layout/header');
?>
<style>
    .login-registration-page-area select{
        width: 100%;
        border: 1px solid #e1e4e6;
        height: 40px;
        padding: 5px 5px;
        font-style: italic;
    }
    select{

    }

    .bith_date_select{
        width: 28%!important;

    }

    .bith_date_select_year{
        width: 35%!important;

    }

    .product-box1 .product-img-holder {
        position: relative;
        min-height: 260px;
        border: 1px solid #e1e4e6;
        height: 40px;
        padding: 5px 15px;
        font-style: italic;
    }
</style>
<!-- Login Registration Page Area Start Here -->
<div class="login-registration-page-area" style="background: url(<?php echo base_url(); ?>assets/theme/slider2/slide3.jpg);background-size: cover;" >
    <div class="container">
        <div class="row">
            <?php
            if ($msg) {
                ?>


                <div class="alert_box warning r_corners relative fs_medium m_bottom_10 m_top_35">
                    <b>Warning!</b> <?php echo $msg; ?>
                    <i class="icon-cancel close_alert_box tr_all translucent circle t_align_c"></i>
                </div>

              
                <?php
            }
            ?>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="login-registration-field registration_corner">

                    <h2 class="cart-area-title fw_light color_dark m_bottom_15"><i class="icon-lock"></i> Login</h2>
                    <form method="post" action="#">
                        <ul>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">Email address *</label>
                                <input type="email" name="email" id="input_1" placeholder="Email *" class="r_corners w_full">
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">Password *</label>
                                <input type="password" name="password" placeholder="Password *" id="input_1" class="r_corners w_full">
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">    
                                <button name="signIn" type="submit" value="signIn" class="button_type_3 r_corners tt_uppercase fs_medium bg_gradiant tr_all f_left m_right_10 m_md_bottom_10">Login</button>
                                <?php
                                if ($next_link === 'checkoutInit') {
                                    ?>
                                    <span class="guestlogintext">OR</span>

                                    <a href="<?php echo site_url("CartGuest/checkoutInit"); ?>" class="button_type_3 f_right  r_corners tt_uppercase fs_medium bg_gradiant tr_all f_left m_right_0 m_md_bottom_10">
                                        <i class="icon-user d_inline_b m_right_5"></i> Checkout As Guest <i class="icon-right-1 d_inline_b m_right_5"></i>
                                    </a>
                                    <div style="clear: both"></div>

                                    <?php
                                }
                                ?>

                            </li>
                        </ul>
                        <div style="clear: both"></div>


                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>

            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="login-registration-field registration_corner">
                    <h2 class="cart-area-title fw_light color_dark m_bottom_15"><i class="icon-user-add"></i> Register</h2>
                    <p class="font_size_10" style="line-height: 15px;margin-bottom: 10px;">By creating an account with our store, you will be able to move through the checkout process faster.</p>
                    <form action="#" method="post">
                        <ul>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">First Name *</label>
                                        <input type="text" name="first_name" id="input_1" placeholder="First Name *" class="r_corners w_full" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">Last Name *</label>
                                        <input type="text" name="last_name" placeholder="Last Name *" id="input_1" class="r_corners w_full" required>
                                    </div>
                                </div>
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">Email *</label>
                                <input type="email" name="email" id="input_1" placeholder="Email *" class="r_corners w_full" required>
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">Password *</label>
                                        <input type="password" name="password" placeholder="Password *" id="input_1" class="r_corners w_full" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">Confirm Password *</label>
                                        <input type="password" name="con_password" placeholder="Confirm Password *" id="input_1" class="con_pass r_corners w_full" required>
                                    </div>
                                </div>

                            </li>



                            <li class="m_bottom_15 m_xs_bottom_15">

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">Gender *</label>
                                        <select name="gender" id="profession_select"  onchange="professionChange()" class="r_corners bg_light w_full " style="width: 100%;height: 40px;padding: 5px;" required >
                                            <option value="Male" >Male</option>
                                            <option value="Female" >Female</option>
                                        </select>
                                    </div>

                                    <div class="col-md-8">
                                        <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">Date Of Birth *</label>


                                        <input type="hidden" name="birth_date" id="birth_date" value="{{birth_year}}-{{birth_month}}-{{date_birth}}"> 
                                        <select id="birth_year" name="birth_year" ng-model="birth_year" class="r_corners bg_light w_full  bith_date_select_year from-control"  required >
                                            <option value="" >-YYYY-</option>
                                            <?php
                                            for ($i = (date('Y') - 100); $i <= date('Y'); $i++) {
                                                echo "<option value='$i'>$i</option>";
                                            }
                                            ?>
                                        </select>

                                        <select id="birth_month" ng-model="birth_month" name="birth_month" class="r_corners bg_light w_full  bith_date_select" required >
                                            <option value="" >-MM-</option>
                                            <?php
                                            for ($i = 1; $i <= 12; $i++) {
                                                $mmdate = $i < 10 ? "0" . $i : $i;
                                                echo "<option value='$mmdate'>$mmdate</option>";
                                            }
                                            ?>
                                        </select> 

                                        <select id="birth_date" name="date_birth" ng-model="date_birth" class="r_corners bg_light w_full  bith_date_select"  required >
                                            <option value="" >-DD-</option>
                                            <?php
                                            for ($i = 1; $i <= 31; $i++) {
                                                $dddate = $i < 10 ? "0" . $i : $i;
                                                echo "<option value='$dddate'>$dddate</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                            </li>


                            <li class="m_bottom_15 m_xs_bottom_15">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">Profession *</label>
                                        <select name="country" id="profession_select"  onchange="professionChange()" class="r_corners bg_light w_full " style="width: 100%;height: 40px;padding: 5px;" required >
                                            <option value="" >Select Country</option>
                                            <?php
                                            foreach ($countrylist as $key => $value) {
                                                echo $country = ucwords(strtolower($value->country_name));
                                                echo "<option value='$country'>$country</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">Profession *</label>
                                        <select name="profession" id="profession_select"  onchange="professionChange()" class="r_corners bg_light w_full " style="width: 100%;height: 40px;padding: 5px;" required >
                                            <option value="" >Select Profession</option>
                                            <option value="Academic" >Academic</option>
                                            <option value="Medicine" >Medicine</option>
                                            <option value="Law" >Law</option>
                                            <option value="Banking" >Banking</option>
                                            <option value="IT" >IT</option>
                                            <option value="Entrepreneur" >Entrepreneur</option>
                                            <option value="Sales/Marketing" >Sales/Marketing</option>
                                            <option value="Other" >Other</option>
                                        </select>
                                    </div>
                                </div>
                            </li>

                            <li class="m_bottom_15 m_xs_bottom_15">


                            </li>



                            <li class="m_bottom_15 m_xs_bottom_15">    
                                <button type="submit" name="registration" class="button_type_3 r_corners tt_uppercase fs_medium bg_gradiant tr_all f_left m_right_10 m_md_bottom_10">Register</button>
                            </li>
                        </ul>
                        <div style="clear: both"></div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Registration Page Area End Here -->

<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>
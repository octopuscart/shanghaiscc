<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$ci = new CI_Controller();
$ci = & get_instance();
$ci->load->helper('url');
?>
<?php
include APPPATH . '/views/layout/header.php';
?>
<!-- Content -->
<div id="content"> 
    <!-- Tesm Text -->
    <section class="page_title bg_gradiant image_fixed t_align_c relative wrapper" style="margin-top: 0px;">
        <h1 class="color_light fw_light m_bottom_12">Error 404 Page</h1>
        <!--breadcrumbs-->
        <p class="color_grey_light_3" style="margin-bottom: 50px;">This Page Could Not Be Found :(</p>
        <a href="/"  style="    font-size: 20px;" class="button_type_3 color_pink r_corners tt_uppercase fs_medium tr_all  m_right_10 m_md_bottom_10">BACK TO HOME</a>

    </section>

</div>
<!-- End Content --> 
<?php
include APPPATH . '/views/layout/footer.php';
?>
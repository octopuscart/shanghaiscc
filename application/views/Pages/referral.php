<?php
$this->load->view('layout/header');
?>


<!--content-->
<section class="section_offset">
    <section class="page_title translucent_bg_red image_fixed t_align_c relative wrapper" style="margin-top: 0px;">
        <img src="images/page_404.jpg" alt="" class="page_404 d_xs_none">
        <h1 class="color_light fw_light m_bottom_12">Thank You For Subscribing</h1>

    </section>
</section>

<script>

setTimeout(function(){
    window.location = "<?php echo site_url("/"); ?>";
},5000)

</script>

<?php
$this->load->view('layout/footer');
?>
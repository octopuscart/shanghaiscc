<?php
$this->load->view('layout/header');
?>

<!-- Content -->
<div id="content"> 
    <!-- Tesm Text -->
    <section class="error-page text-center pad-t-b-130 banner-w3">
        <div class="container "> 
            <div class="latest-w3 color_red">
                <!-- Heading -->
                <h1 style="    font-size: 115px;">404</h1>
                <p style="    font-size: 20px;">We're sorry, the page you requested cannot be found.<br>
                    You can go back to</p>
                <hr class="dotted">
                <a href="/"  style="    font-size: 20px;" class="btn btn-default"><i class="fa fa-home inline"></i> BACK TO HOME</a>
            <hr class="dotted">
            </div>
        </div>
    </section>
</div>
<!-- End Content --> 


<?php
$this->load->view('layout/footer');
?>
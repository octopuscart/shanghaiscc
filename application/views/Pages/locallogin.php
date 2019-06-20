<?php
$this->load->view('layout/header');
?>

<!-- Content -->
<div id="content"> 
    <!-- Tesm Text -->
    <section class="error-page text-center pad-t-b-130 banner-w3">
        <div class=" " style="margin: 20px 0px;"> 
            <div class="row">
               
                <div class="col-md-5"></div>
                <div class="col-md-2">
                    <?php
                    if($usertype){
                        ?>
                    <p>
                        Login As Admin<br/>
                        <a href="<?php echo site_url('admin?logout=logout');?>">Logout</a>
                    </p>
                            <?php
                    }
                    else{
                    ?>
                    <form action="" method="post">
                        <label>Admin Login</label>
                        <input type="password" name="password" required="" class="form-control"><br/>
                        <button type="submit" name="submit" class="btn btn-default">Login Now</button>
                    </form>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </section>
</div>
<!-- End Content --> 


<?php
$this->load->view('layout/footer');
?>
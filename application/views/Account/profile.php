<?php
$this->load->view('layout/header');
?>




<!-- Content -->
<div id="content" class="my-account-page-area"> 

    <!-- Blog -->
    <section class="woocommerce ">
        <div class="container"> 

            <!-- News Post -->
            <div class="news-post">
                <div class="row"> 

                  


                    <div class="col-md-12 checkout-form">
                      

                        <div style="padding: 100px;text-align: center">  
                            <h3>Welcome</h3><br/>
                            <h6><i class="icon-user color_blue2 _2 tr_inherit"></i> <?php echo $user_details->email; ?> </h6>
                            
                        </div>
                    </div>



                </div>
                </section>
            </div>
            <!-- End Content --> 


            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal  fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="    z-index: 20000000;">
                <div class="modal-dialog modal-sm woocommerce" role="document" style="width: 300px">
                    <form action="#" method="post">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel" style="font-size: 15px">Change Password</h4>
                            </div>
                            <div class="modal-body checkout-form ">

                                <label class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                    Old Password
                                    <input type="text" name="old_password"  value="" class=" woocommerce-Input woocommerce-Input--text input-text">
                                </label>

                                <label class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                    New Password
                                    <input type="text" name="new_password"  value="" class=" woocommerce-Input woocommerce-Input--text input-text">
                                </label>
                                <br/>
                                <label class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                    Confirm Password
                                    <input type="text" name="re_password"  value="" class=" woocommerce-Input woocommerce-Input--text input-text">
                                </label>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="change_password" class="btn btn-primary">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>




            <?php
            $this->load->view('layout/footer');
            ?>
            <script>
                $(function () {
                    $(".woocommerce-MyAccount-navigation-link--dashboard").removeClass("active");
                    $(".profile_page").addClass("active");
                })
            </script>
<?php
$this->load->view('layout/header');
?>

<style>
    .cartbutton{
        width: 100%;
        padding: 6px;
        color: #fff!important;
    }


    .noti-check1 span{
        color: red;
        color: red;
        width: 111px;
        float: left;
        text-align: right;
        padding-right: 13px;
    }

    .noti-check1 h6{
        font-size: 15px;
        font-weight: 600;
    }

    .address_block{
        background: #fff;
        border: 3px solid #d30603;
        padding: 5px 10px;
        margin-bottom: 20px;
        height: 150px;


    }
    .checkcart {
        border-radius: 50%;
        position: absolute;
        top: -28px;
        left: -8px;
        padding: 4px;
        background: #fff;
        border: 2px solid green;
    }


    .default{
        border: 2px solid green;
    }

    .default{
        border: 2px solid green;
    }

    .checkcart i{
        color: green;
    }

    .address_button{
        padding: 0px 10px;
        margin-top: 15px;
        font-size: 10px;


    }

    .cartdetail_small {
        float: left;
        width: 203px;
    }
    
    .tab-pane p{
        padding:15px;
    }

</style>



<?php
$this->load->view('Cart/checkoutheader');
?>


<!-- Content -->


<div class="cart-page-area">
    <div class="container" ng-if="globleCartData.total_quantity">
        <div class="row">
            <?php
            $this->load->view('CartGuest/itemblock', array('vtype' => 'items'));
            ?>
            <?php
            $this->load->view('Cart/itemblock', array('vtype' => 'size'));
            ?>
            <?php
            $this->load->view('CartGuest/itemblock', array('vtype' => 'shipping'));
            ?>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel1 panel-default">
                    <div class="panel-heading1" role="tab" id="headingOne">
                        <h4 class=" r_corners wrapper m_bottom_10 bg_light_2  color_dark bg_gradient color_light">
                            <span class="fa-stack">
                                <i class="fa fa-money fa-stack-1x"></i>
                                <i class="ion-bag fa-stack-1x "></i>
                            </span>  Payment Method
                            <span class="process_block">
                                PayPal
                            </span> 
                        </h4>
                    </div>
                    <!-- Address Details -->
                    <div class="panel-body">
                        <div class="order-sheet product-details2-area" style="margin-top: 5px;padding:0">
                            <form action="#" method="post">
                                <div class="product-details-tab-area" style="margin: 0;">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <ul class="nav nav-tabs bg_blue3 tab_measurement" >
                                                <li class="active"><a href="#paypal" data-toggle="tab" aria-expanded="false">PayPal</a></li>
                                                <li class=""><a href="#bank" data-toggle="tab" aria-expanded="true">Bank Transfer</a></li>
                                                <li><a href="#cash" data-toggle="tab" aria-expanded="false">Cash On Delivery</a></li>
                                                <li><a href="#cheque" data-toggle="tab" aria-expanded="false">Cheque On Delivery</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active in"  id="paypal">
                                                    <p>
                                                        <img src="<?php echo base_url(); ?>assets/paymentstatus/paypal.png" style="height: 100px;">                
                                                    </p>
                                                    <div class="cart-page-top table-responsive">
                                                        <table class="table table-hover">
                                                            <tbody id="quantity-holder">
                                                                <tr>
                                                                    <td colspan="4" class="text_right">
                                                                        <div class="proceed-button pull-left " >
                                                                            <a href=" <?php echo site_url("Cart/checkoutShipping"); ?>" class="btn-apply-coupon btn btn-info btn-lg checkout_button_pre " ><i class="fa fa-arrow-left"></i> View Shipping Address</a>
                                                                        </div>
                                                                        <div class="proceed-button pull-right ">

                                                                            <a href=" <?php echo site_url("PayPalPayment/process"); ?>" class="btn-apply-coupon btn btn-info btn-lg checkout_button_next " >Place Order <i class="fa fa-arrow-right"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                                <div class="tab-pane fade " id="bank">
                                                    <p>
                                                        <img src="<?php echo base_url(); ?>assets/paymentstatus/bank.png" style="height: 100px;">                

                                                    </p>
                                                    <div class="cart-page-top table-responsive">
                                                        <table class="table table-hover">
                                                            <tbody id="quantity-holder">
                                                                <tr>
                                                                    <td colspan="4" class="text_right">
                                                                        <div class="proceed-button pull-left " >
                                                                            <a href=" <?php echo site_url("Cart/checkoutShipping"); ?>" class="btn-apply-coupon btn btn-info btn-lg checkout_button_pre " ><i class="fa fa-arrow-left"></i> View Shipping Address</a>
                                                                        </div>
                                                                        <div class="proceed-button pull-right ">
                                                                            <button type="submit" name="place_order" class="btn-apply-coupon btn btn-info btn-lg checkout_button_next "  value="Bank Transfer">
                                                                                Place Order <i class="fa fa-arrow-right"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="cash">
                                                    <p>
                                                        <img src="<?php echo base_url(); ?>assets/paymentstatus/cod.png" style="height: 100px;">                

                                                    </p>
                                                    <div class="cart-page-top table-responsive">
                                                        <table class="table table-hover">
                                                            <tbody id="quantity-holder">
                                                                <tr>
                                                                    <td colspan="4" class="text_right">
                                                                        <div class="proceed-button pull-left " >
                                                                            <a href=" <?php echo site_url("Cart/checkoutShipping"); ?>" class="btn-apply-coupon btn btn-info btn-lg checkout_button_pre " ><i class="fa fa-arrow-left"></i> View Shipping Address</a>
                                                                        </div>
                                                                        <div class="proceed-button pull-right ">
                                                                            <button type="submit" name="place_order" class="btn-apply-coupon btn btn-info btn-lg checkout_button_next "  value="Cash On Delivery">
                                                                                Place Order <i class="fa fa-arrow-right"></i>
                                                                            </button>                                                                    </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="cheque">
                                                    <p>
                                                        <img src="<?php echo base_url(); ?>assets/paymentstatus/chod.png" style="height: 100px;">                

                                                    </p>
                                                    <div class="cart-page-top table-responsive">
                                                        <table class="table table-hover">
                                                            <tbody id="quantity-holder">
                                                                <tr>
                                                                    <td colspan="4" class="text_right">
                                                                        <div class="proceed-button pull-left " >
                                                                            <a href=" <?php echo site_url("Cart/checkoutShipping"); ?>" class="btn-apply-coupon btn btn-info btn-lg checkout_button_pre " ><i class="fa fa-arrow-left"></i> View Shipping Address</a>
                                                                        </div>
                                                                        <div class="proceed-button pull-right ">
                                                                            <button type="submit" name="place_order" class="btn-apply-coupon btn btn-info btn-lg checkout_button_next "  value="Cheque On Delivery">
                                                                                Place Order <i class="fa fa-arrow-right"></i>
                                                                            </button>                                                                   
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>
</div>



<!-- Content -->
<div id="content" class="cart-page-area"  ng-if="globleCartData.total_quantity == 0"> 
    <!-- Tesm Text -->
    <section class="error-page text-center pad-t-b-130">
        <div class="container "> 

            <!-- Heading -->
            <h1 style="font-size: 40px">No Product Found</h1>
            <p>Please add product to cart<br>
                You can go back to</p>
            <hr class="dotted">
            <a href="<?php echo site_url(); ?>" class="btn-send-message ">BACK TO HOME</a>
        </div>
    </section>
</div>
<!-- End Content --> 



<!-- Modal -->
<div class="modal  fade" id="changeAddress" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="    z-index: 20000000;">
    <div class="modal-dialog modal-sm" role="document">
        <form action="#" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" style="font-size: 15px">Add New Address</h4>
                </div>
                <div class="modal-body checkout-form">

                    <table class="table">
                        <tbody><tr>
                                <td style="line-height: 25px;">
                                    <span for="name" class=""><b>Address (Line 1)</b></span>
                                </td>
                                <td>
                                    <input type="text" required="" name="address1" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">
                                </td>
                            </tr>

                            <tr>
                                <td style="line-height: 25px;">
                                    <span for="name" class=""><b>Address (Line 2)</b></span>
                                </td>
                                <td>
                                    <input type="text" required="" name="address2" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">
                                </td>
                            </tr>
                            <tr>
                                <td style="line-height: 25px;">
                                    <span for="name" class=""><b>Town/City</b></span>

                                </td>
                                <td>
                                    <input type="text" required="" name="city" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">
                                </td>
                            </tr>
                            <tr>
                                <td style="line-height: 25px;">
                                    <span for="name"><b>State</b></span>
                                </td>
                                <td>
                                    <input type="text" required="" name="state" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">
                                </td>
                            </tr>


                            <tr>
                                <td style="line-height: 25px;">
                                    <span for="name"><b>Zip/Postal</b></span>
                                </td>
                                <td>
                                    <input type="text"  name="zipcode" class="form-control " value="" style="height: 10%;">
                                </td>
                            </tr>
                            <tr>
                                <td style="line-height: 25px;">
                                    <span for="name"><b>Country</b></span>
                                </td>
                                <td>
                                    <input type="text" required="" name="country" class="form-control" value="" style="height: 10%;">
                                </td>
                            </tr>

                        </tbody>
                    </table>


                </div>
                <div class="modal-footer">
                    <button type="submit" name="add_address" class="btn btn-primary btn-small" style="color: white">Add Address</button>
                </div>
            </div>
        </form>
    </div>
</div>









<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>
<script>
    var avaiblecredits =0;
</script>

<?php
$this->load->view('layout/footer');
?>
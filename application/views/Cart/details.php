<?php
$this->load->view('layout/header');
?>

<section class="page_title_1 bg_light_2 t_align_c relative wrapper m_top_5 m_bottom_5">
    <div class="container">
        <h2 class="color_dark fw_light m_bottom_5"><i class="icon-basket"></i> Shopping Cart</h2>
        <!--breadcrumbs-->
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="/" class="color_default d_inline_m m_right_10">Home</a><i class="icon-angle-right d_inline_m color_default fs_small"></i></li>
            <li><a class="color_default d_inline_m">Shopping Cart</a></li>
        </ul>
    </div>
</section>
<!--content-->
<div class="section_offset counter" ng-if="globleCartData.total_quantity">
    <div class="container">
        <div class="im_half_container m_bottom_10">
            <div class="half_column d_inline_m w_xs_full m_xs_bottom_10">
                <p class="fw_light">Your shopping cart contains {{globleCartData.total_quantity}} product(s)</p>
            </div>
            <div class="half_column d_inline_m w_xs_full t_xs_align_l t_align_r m_xs_bottom_5">
                <a href="<?php echo site_url('Product/ProductList/2/0'); ?>" class="d_inline_b tr_all r_corners button_type_1 color_pink transparent fs_medium mini_side_offset"><i class="icon-basket d_inline_b m_right_5"></i> Continue Shopping</a>
            </div>
        </div>
        <div class="r_corners wrapper border_grey m_bottom_10 m_xs_bottom_10">
            <table class="table_type_2 responsive_table w_full t_align_l">
                <thead>
                    <tr class="bg_light_2 color_dark">

                        <th colspan="2">Product Description</th>

                        <th style='    width: 100px;'>Price</th>
                        <th style='    width: 140px;'>Quantity</th>
                        <th style='    width: 100px;'>Total</th>
                        <th style='    width: 100px;'></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tr_delay" ng-repeat="product in globleCartData.products">
                        <td data-title="Product Image" style='    width: 100px;'>
                            <a href="#" class="r_corners d_inline_b wrapper">
                                <img src="{{product.file_name}}" alt="" style='height: 80px'>
                            </a>
                        </td>
                        <td data-title="Description">
                            <h6 class="m_bottom_5"><a href="#" class="color_dark tr_all">{{product.title}} - {{product.item_name}}</a></h6>
                            <p class="fw_light">{{product.attrs}}</p>
                        </td>
                        <td data-title="Price">{{product.price|currency:" "}}</td>
                        <td data-title="Quantity" >
                            <div class="wrapper fs_medium r_corners d_inline_b quantity clearfix">
                                <button class="f_left bg_light_3" data-count="minus" ng-click="updateCart(product, 'sub')">
                                    <i class="icon-minus "></i>
                                </button>
                                <input type="text" readonly value="{{product.quantity}}" class="f_left color_grey bg_light">
                                <button class="f_left bg_light_3" data-count="plus" ng-click="updateCart(product, 'add')">
                                    <i class="icon-plus"></i>
                                </button>
                            </div>
                        </td>

                        <td data-title="Total" class="fw_ex_bold color_dark ">
                            {{product.total_price|currency:" "}}
                        </td>
                        <td>
                            <button class="color_grey_light_2 color_dark_hover tr_all" ng-click="removeCart(product.product_id)">
                                <i class="icon-cancel-circled-1 fs_large"></i>
                            </button>
                        </td>
                    </tr>



                    <tr class="bg_light_2">
                        <td colspan="4" class="v_align_m">
                            <div class="d_table w_full">
                                <!--                                <div class="col-lg-9 col-md-9 col-sm-11 d_table_cell f_none d_xs_block">
                                                                    <p class="fw_light d_inline_m m_right_5 d_xs_block">Coupon Code:</p>
                                                                    <form class="d_inline_m">
                                                                        <input type="text" placeholder="Enter yout coupon code here" class="color_grey r_corners bg_light fw_light coupon m_xs_bottom_15">
                                                                        <button class="tr_all m_xs_bottom_10 r_corners color_purple transparent tt_uppercase button_type_5 fs_medium">Submit</button>
                                                                    </form>
                                                                </div>-->
                                <div class="v_align_m d_table_cell d_xs_block f_none t_align_r fw_ex_bold color_pink t_xs_align_c">
                                    Total:		
                                </div>
                            </div>
                        </td>
                        <td colspan="2" class="fw_ex_bold color_pink v_align_m">{{globleCartData.total_price|currency:" "}}</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <a href="<?php echo site_url("Cart/checkoutInit"); ?>" class="button_type_3 tr_all color_pink r_corners tt_uppercase d_inline_b fs_medium mini_side_offset f_right">
            <i class="icon-check fs_large d_inline_b m_right_10"></i>
            Checkout Now
        </a>


    </div>
</div>


<?php
$this->load->view('Cart/noproduct');
?>


<!-- Cart Page Area End Here -->
<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>
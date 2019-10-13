<?php
$this->load->view('layout/header');
?>
<?php
$linklist = [];
foreach ($categorie_parent as $key => $value) {
    $cattitle = $value['category_name'];
    $catid = $value['id'];
    $liobj = "<li class='m_right_8 f_xs_none'><a class='color_default d_inline_m m_right_10 11' href='" . site_url("Product/ProductList/" . $custom_id . "/" . $catid) . "'> $cattitle</a> <i class='icon-angle-right d_inline_m color_default fs_small'></i></li>";
    array_push($linklist, $liobj);
}



$image1 = "";
$image2 = "";
?>

<div ng-controller="ProductController">
    <section class="page_title_1 bg_light_2 t_align_c relative wrapper" style="margin-top: 0px;">
        <div class="container ">

            <!--breadcrumbs-->
            <ul class="hr_list d_inline_m breadcrumbs">
                <li class="m_right_8 f_md_none"><a href="<?php echo site_url("/"); ?>" class="color_default d_inline_m m_right_10">Home</a><i class="icon-angle-right d_inline_m color_default fs_small"></i></li>
                <?php
                echo $custom_item;
                ?>
            </ul>
            <h4>To Get Real Feel Of Fabrics By Touch - Book A Fitting</h4>

        </div>
    </section>


    <!-- Shop Page Area Start Here --> 
    <div class="shop-page-area" >
        <div class="container">
            <div class="row"  ng-if="productResults.products.length">
                <aside class="col-lg-2 col-md-2 col-sm-2 m_bottom_70 m_xs_bottom_30" style="    padding: 0;">
                    <!--categories-->
                    <?php
                    if (count($categories)) {
                        ?>
                        <div class="m_bottom_40 m_xs_bottom_30">
                            <h5 class="color_dark fw_light m_bottom_10 m_top_10">Categories</h5>
                            <ul class="categories_list">
                                <?php
                                foreach ($categories as $key => $value) {
                                    $subcategories = $value['sub_category'];
                                    ?> 

                                                <!--                                <a href="<?php echo site_url("Product/ProductList/" . $custom_id . "/" . $value['id']); ?>" class="color_dark tr_all d_block">
                                                        <span class="icon_wrap_size_0 circle d_inline_m m_right_8 color_grey_light_5 tr_inherit">
                                                            <i class="icon-angle-right"></i>
                                                        </span>
                                    <?php echo $value['category_name']; ?>
                                                    </a>-->

                                    <a href="#" class="color_dark tr_all d_block">
                                        <span class="icon_wrap_size_0 circle d_inline_m m_right_8 color_grey_light_5 tr_inherit">
                                            <i class="icon-angle-right"></i>
                                        </span>
                                        <?php echo $value['category_name']; ?>
                                    </a>
                                    <?php
                                    if (count($subcategories)) {
                                        ?>
                                        <ul class="fw_light d_none">
                                            <?php
                                            foreach ($subcategories as $key1 => $value1) {
                                                ?>
                                                <li>
                                                    <a href="<?php echo site_url("Product/ProductList/" . $custom_id . "/" . $value1['id']); ?>" class="d_block color_dark"><i class="icon-angle-right d_inline_m m_right_8 color_grey_light_5 fs_small tr_inherit"></i><span class="d_inline_m"><?php echo $value1['category_name']; ?></span></a>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                }
                                ?>  
                            </ul>
                        </div>



                        <?php
                    }
                    ?>





                    <div class="product_attr" ng-repeat="(attrk, attrv) in productResults.attributes" ng-if="attrv.length > 1">
                        <div class="m_bottom_45 m_xs_bottom_30">
                            <!--manufacturers-->
                            <div class="m_bottom_25">
                                <h5 class="color_dark fw_light m_bottom_10 m_bottom_10">{{attrk}}</h5>
                                <ul>
                                    <li class="m_bottom_10"  ng-repeat="atv in attrv">
                                        <input type="checkbox" checked id="checkbox_{{atv.id}}" name="" class="d_none" ng-model="atv.checked" ng-click="attributeProductGet(atv)">
                                        <label for="checkbox_{{atv.id}}" class="d_inline_m m_right_10  color_dark">{{atv.attribute_value}}  <span class="color_grey">({{atv.product_count}})</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </aside>



                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 m_top_10">
                    <div class="shop_isotope_container t_xs_align_c three_columns m_bottom_15" data-isotope-options='{"itemSelector" : ".shop_isotope_item","layoutMode" : "fitRows","transitionDuration":"0.7s"}'>
                        <!--product-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"  ng-repeat="(k, product) in productResults.products" style="padding:10px; ">

                            <figure class="fp_item t_align_c d_xs_inline_b" >
                                <div class="relative r_corners d_xs_inline_b d_mxs_block wrapper m_bottom_23">
                                    <!--images container-->
                                    <div class="fp_images relative">
                                        <img class="img-responsive" src="<?php echo custome_image_server; ?>/{{product.folder}}.jpg" alt="product" style="background: white;">
                                                                           <img class="img-responsive" src="<?php echo custome_image_server; ?>/{{product.folder}}.jpg" alt="product" style="background: white;">

                                    </div>
                                </div>
                                <figcaption>
                                    <h6 class="m_bottom_8"><a href="#" class="color_dark">{{product.title}} </a></h6>

                                    <div class="product_description">
                                        <p class="color_grey fs_medium m_bottom_8">
                                            <span style="font-size: 12px">{{product.short_description}} </span>        
                                        </p>
                                    </div>

                                    <div class="clearfix fp_buttons">
                                        <div class="half_column w_md_full animate_fctl tr_all f_left with_ie f_md_none m_md_bottom_10">
                                            <a href="<?php echo site_url("booking");?>"  class="button_type_6 d_inline_b color_pink transparent r_corners vc_child tr_all add_to_cart_button"><span class="d_inline_m clerarfix"><i class="icon-pencil f_left m_right_10 fs_large"></i><span class="fs_medium">Book A Fitting</span></span></a>
                                        </div>
<!--                                        <div class="half_column w_md_full animate_fctr tr_all f_left clearfix with_ie f_md_none">
                                            <a href="#" class="button_type_6 relative tooltip_container f_right f_md_none d_md_inline_b d_block color_dark r_corners vc_child tr_all color_blue_hover t_align_c"><i class="icon-basket d_inline_m fs_large"></i><span class="d_block r_corners color_default tooltip fs_small fw_normal tr_all">Add to Cart</span></a>
                                        </div>-->
                                    </div>
                                </figcaption>
                            </figure>
                            <!--product-->


                        </div>
                    </div>

                </div>
            </div>


            <div id="content"  ng-if="!productResults.products.length"> 
                <section class="section_offset">
                    <main class="container t_align_c">
                        <h3 class="color_dark fw_light m_bottom_15 heading_1">No Product Found</h3>
                        <p class="m_bottom_35 heading_2">Please add product to cart<br>
                            You can go back to</p>
                        <div class="row">
                            <hr class="dotted">
                            <a href="<?php echo site_url(); ?>" class="btn-send-message button_type_3 color_pink r_corners tt_uppercase fs_medium tr_all  m_right_10 m_md_bottom_10 ">BACK TO HOME</a>
                        </div>
                    </main>
                </section>
            </div>

        </div>
        
    </div>
    <!-- Shop Page Area End Here -->

</div>

<script>
    var category_id = <?php echo $category; ?>;
    var custom_id = <?php echo $custom_id; ?>;</script>
<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>
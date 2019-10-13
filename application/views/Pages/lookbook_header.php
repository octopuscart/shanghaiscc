<?php
$mensArray = [
    array(
        'title' => 'Suits',
        'images' => 'm_suits.jpg',
        'url' => 'MensCustomSuits'
    ),
    array(
        'title' => 'Shirts',
        'images' => 'm_shirts.jpg',
        'url' => 'MensCustomShirts'
    ),
    array(
        'title' => 'Sports Jacket',
        'images' => 'm_jackets.jpg',
        'url' => 'MensCustomJackets'
    ),
    array(
        'title' => 'Vests',
        'images' => 'm_vests.jpg',
        'url' => 'MensCustomVests'
    ),
    array(
        'title' => 'Pants',
        'images' => 'm_pant.jpg',
        'url' => 'MensCustomPants'
    ),
    array(
        'title' => 'Tuxedos',
        'images' => 'm_tuxedo.jpg',
        'url' => 'MensCustomTuxedo'
    ),
    array(
        'title' => 'Top Coats',
        'images' => 'm_top_coat.jpg',
        'url' => 'MensCustomTopCoat'
    ),
];

$womensArray = [
    array(
        'title' => 'Suits',
        'images' => 'wm_suits.jpg',
        'url' => 'WomensCustomSuits'
    ),
    array(
        'title' => 'Shirts',
        'images' => 'wm_shirts.jpg',
        'url' => 'WomensCustomShirts'
    ),
    array(
        'title' => 'Dresses',
        'images' => 'wm_dress.jpg',
        'url' => 'WomensCustomDress'
    ),
    array(
        'title' => 'Pants',
        'images' => 'wm_pant.jpg',
        'url' => 'WomensCustomPants'
    ),
    array(
        'title' => 'Top Coats',
        'images' => 'wm_top_coat.jpg',
        'url' => 'WomensCustomTopCoat'
    ),
];
?>
<!--content-->
<section class="section_offset lookbook">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="<?php echo $active_gender['gender'] == 'Mens' ? 'active' : ''; ?> col-lg-6 col-md-6 col-sm-6 col-xs-6 m_bottom_50 m_xs_bottom_30">
                    <a href="<?php echo site_url("lookbook/MensCustomSuits"); ?>"  role="tab" data-toggle="tab1">
                        <article>
                            <!--post content-->
                            <figure>
                                <div class="thumbnail lookheaderimage" style="    border: 0;">
                                    <img src="<?php echo base_url(); ?>assets/lookbook/mens5.jpg" alt="" >
                                </div>
                            </figure>
                        </article>
                    </a></li>
                <li role="presentation" class="<?php echo $active_gender['gender'] == 'Womens' ? 'active' : ''; ?> col-lg-6 col-md-6 col-sm-6 col-xs-6 m_bottom_50 m_xs_bottom_30">
                    <a href="<?php echo site_url("lookbook/WomensCustomSuits"); ?>"   role="tab" data-toggle="tab1">
                        <article>
                            <!--post content-->
                            <figure>
                                <div class="thumbnail lookheaderimage" style="    border: 0;">
                                    <img src="<?php echo base_url(); ?>assets/lookbook/womens5.jpg" alt="" >
                                </div>
                            </figure>
                        </article>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane <?php echo $active_gender['gender'] == 'Mens' ? 'active' : ''; ?>" id="mens_tab">
                    <div class="">
                        <h3 class="color_black fw_light t_align_c m_bottom_30" >Men's</h3>
                        <div class="relative" >
                            <div class="t_xs_align_c">
                                <div class="owl-carousel" data-nav="c_nav1_" data-plugin-options='{"itemsCustom" : [[992,5],[768,3],[100,3]], "singleItem" : false}'>                                        <!--item-->
                                    <?php
                                    foreach ($mensArray as $key => $value) {
                                        ?>
                                        <div class="col-xs-12 m_bottom_20 "  >
                                            <div class="clients_item db_xs_centered wrapper relative border_grey r_corners d_xs_block style_block <?php echo $value['url'] == $active_block ? 'active' : ''; ?> ">
                                                <a href="<?php echo site_url("lookbook/" . $value['url']); ?>" class="d_block translucent1 tr_all wrapper r_corners">
                                                    <img src="<?php echo base_url(); ?>assets/lookbook/<?php echo $value['images']; ?>" alt="">
                                                    <p style="color:black;text-align: center"><?php echo $value['title']; ?></p>
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="d_table w_full clients_nav">
                            <!--paginations container-->
                            <div class="d_table_cell half_column clients_pags_container v_align_m"></div>
                            <!--navigations-->
                            <div class="d_table_cell half_column t_align_r v_align_m">
                                <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all c_nav1_prev">
                                    <i class="icon-left-open-big"></i>
                                </button>
                                <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all c_nav1_next">
                                    <i class="icon-right-open-big"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane <?php echo $active_gender['gender'] == 'Womens' ? 'active' : ''; ?>" id="womens_tab">

                    <div class="">
                        <h3 class="color_black fw_light t_align_c m_bottom_30" >Women's</h3>
                        <div class="relative" >
                            <div class="t_xs_align_c">
                                <div class="owl-carousel" data-nav="fp_nav2_" data-plugin-options='{"itemsCustom" : [[992,5],[768,3],[100,3]], "singleItem" : false}'>                                        <!--item-->

                                    <?php
                                    foreach ($womensArray as $key => $value) {
                                        ?>
                                        <div class="col-xs-12 m_bottom_20 ">
                                            <div class="clients_item db_xs_centered wrapper relative border_grey r_corners d_xs_block style_block <?php echo $value['url'] == $active_block ? 'active' : ''; ?>" >
                                                <a href="<?php echo site_url("lookbook/" . $value['url']); ?>" class="d_block translucent1 tr_all wrapper r_corners">
                                                    <img src="<?php echo base_url(); ?>assets/lookbook/<?php echo $value['images']; ?>" alt="">
                                                    <p style="color:black;text-align: center"><?php echo $value['title']; ?></p>
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>


                                </div>
                                
                            </div>
                        </div>
                        <!--carousel nav-->
                        <div class="d_table w_full clients_nav">
                            <!--paginations container-->
                            <div class="d_table_cell half_column clients_pags_container v_align_m"></div>
                            <!--navigations-->
                            <div class="d_table_cell half_column t_align_r v_align_m">
                                <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all fp_nav2_prev">
                                    <i class="icon-left-open-big"></i>
                                </button>
                                <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all fp_nav2_next">
                                    <i class="icon-right-open-big"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-2"></div>
    </div>



</section>

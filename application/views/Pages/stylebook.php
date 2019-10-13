<?php
$this->load->view('layout/header');

function truncate($str, $len) {
    $tail = max(0, $len - 10);
    $trunk = substr($str, 0, $tail);
    $trunk .= strrev(preg_replace('~^..+?[\s,:]\b|^...~', '...', strrev(substr($str, $tail, $len - $tail))));
    return $trunk;
}
?>

<section class="page_title translucent_bg_color_dark image_fixed t_align_c relative wrapper" style="margin-top: 0px;padding: 0px;">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5" style="    font-size: 22px;
            line-height: 25px;">Styling Tips</h1>
        <!--breadcrumbs-->

    </div>
</section>


<div class="section_offset">
    <div class="container">
        <section class="blog_isotope_container three_columns m_bottom_35 m_xs_bottom_15" data-isotope-options='{"itemSelector" : ".blog_isotope_item","layoutMode" : "masonry","transitionDuration":"0.7s","masonry" : {"columnWidth":".blog_isotope_item"}}'>


            <?php
            foreach ($stylebook as $key => $value) {
                ?>
                <div class="blog_isotope_item">
                    <!--post-->
                    <article class="r_corners border_grey">
                        <!--post content-->
                        <figure>
                            <a href="<?php echo site_url("styleTips/" . $value['id'] . "/" . $value['title']) ?>" class="d_block wrapper r_corners m_bottom_20">
                                <img src="<?php echo base_url(); ?>assets/images/styletips/<?php echo $value['image']; ?>" alt="">
                            </a>
                            <figcaption>
                                <h4 class="fw_light m_bottom_5 fs_middle">
                                    <a href="<?php echo site_url("styleTips/" . $value['id'] . "/" . $value['title']) ?>" class="color_dark tr_all">
                                        <?php echo truncate($value['title'], 100); ?>
                                    </a></h4>

                                <p class="fw_light m_bottom_12">
                                    <?php echo truncate($value['description'], 200); ?>                                </p>
                                <a href="<?php echo site_url("styleTips/" . $value['id'] . "/" . $value['title']) ?>" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
                                    <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                        <i class="icon-angle-right"></i>
                                    </span>
                                    Read More
                                </a>
                            </figcaption>
                        </figure>
                    </article>
                </div>

                <?php
            }
            ?>
        </section>
    </div>
</div>




<script src="<?php echo base_url(); ?>assets/theme/plugins/isotope.pkgd.min.js"></script>



<?php
$this->load->view('layout/footer');
?>
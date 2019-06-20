<?php
$this->load->view('layout/header');
?>



<section class="section_offset ">
    <div class="container">
        <h3 class="color_dark fw_light m_bottom_15 t_align_c heading_3">Site Map</h3>
        <div class="row">
            <!--accordion-->
            <div class="m_bottom_40 m_xs_bottom_30">
                <div class="accordion" style=''>
                    <div class="list-group">
                        <a href="#" class="list-group-item active" style="background: #e8e8e8;color:black">
                            <?php echo site_name; ?>
                        </a>
                        <?php
                        foreach ($sitemap as $key => $value) {
                            ?>

                            <a href="<?php echo $value['url']; ?>" class="list-group-item"><?php echo $value['title']; ?></a>
                            <?php
                            $sitemapsub = $value['suburl'];
                            foreach ($sitemapsub as $skey => $svalue) {
                                ?>
                                <a href="<?php echo $svalue['url']; ?>" class="list-group-item"><span style="margin-left: 50px;"> <?php echo $svalue['title']; ?></span></a>

                            <?php } ?>

                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            
            
             <div class="m_bottom_40 m_xs_bottom_30">
                <div class="accordion" style=''>
                    <div class="list-group">
                        <a href="#" class="list-group-item active" style="background: #e8e8e8;color:black">
                            Styling Tips
                        </a>
                        <?php
                        foreach ($blog as $key => $value) {
                            $location = base_url("styleTips/" . $value['id'] . '/' . $value['title']);
                            ?>

                            <a href="<?php echo $location; ?>" class="list-group-item"><?php echo $value['title']; ?></a>
                          

                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
$this->load->view('layout/footer');
?>
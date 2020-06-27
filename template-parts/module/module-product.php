<?php
$product_option = cs_get_option('product_option');
$product_radio = cs_get_option('product_radio');
?>
<!-- 产品展示 Start -->
<section class="flat-row card-box">
    <div class="container">
        <div class="section-top mb-30 text-center">
            <h2><?php echo cs_get_option('product_big_title');
                ?></h2>  <span class="mt-10 mb-10">OUR PRODUCT</span>
            <p>
                <?php echo cs_get_option('product_big_desc');
                ?>
            </p>
        </div>

        <?php
        if ($product_radio == 'column3') {
            ?>
            <!-- 一行三列 Start -->
            <div class="flat-iconbox column-3">
                <div class="row">
                    <?php
                    if ($product_option) {
                        foreach ($product_option as $key => $value) {
                            ?>
                            <div class="item col-md-4 ">
                                <div class="iconbox card-box jQueryEqualHeight">
                                    <div class="iconbox-icon">
                                        <img src="<?php echo  wp_get_attachment_url($value['image']);
                                        ?>" alt="">
                                    </div>
                                    <div class="iconbox-content">
                                        <h5 class="heading"><?php echo  $value['title'];
                                            ?></h5>
                                        <p class="sub-heading">
                                            <?php echo wp_trim_words($value['desc'], 50);
                                            ?>
                                        </p>
                                        <?php if (!empty($value['link'])) {
                                            ?>
                                            <a target="_blank" href="<?php echo  $value['link'];
                                                ?>" class="bttn bttn-fill bttn-sm bttn-primary bttn-no-outline"><?php echo  $value['link_text'];
                                                ?></a>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <!-- 一行三列 End -->
            <?php
        } else {
            ?>
            <!-- 一行四列 Start -->
            <div class="flat-iconbox column-4">
                <div class="row">
                    <?php
                    if ($product_option) {
                        foreach ($product_option as $key => $value) {
                            ?>
                            <div class="item col-md-6 col-lg-3">
                                <div class="iconbox card-box jQueryEqualHeight">
                                    <div class="iconbox-icon">
                                        <img src="<?php echo  wp_get_attachment_url($value['image']);
                                        ?>" alt="">
                                    </div>
                                    <div class="iconbox-content">
                                        <h5 class="heading"><?php echo  $value['title'];
                                            ?></h5>
                                        <p class="sub-heading">
                                            <?php echo wp_trim_words($value['desc'], 50);
                                            ?>
                                        </p>
                                        <?php if (!empty($value['link'])) {
                                            ?>
                                            <a target="_blank" href="<?php echo  $value['link'];
                                                ?>" class="bttn bttn-fill bttn-sm bttn-primary bttn-no-outline"><?php echo  $value['link_text'];
                                                ?></a>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <!-- 一行四列 End -->
            <?php
        }
        ?>
    </div>
</section>
<!-- 产品展示 End -->
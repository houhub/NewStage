<?php
$testimonials = cs_get_option('testimonials');
$testimonials_radio = cs_get_option('testimonials_radio');
?>

<!-- 评价模块 Start -->
<section class="flat-row flat-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-top mb-30 text-center">
                    <h2><?php echo cs_get_option('testimonials_big_title');
                        ?></h2>  <span class="mt-10 mb-10">CUSTOMER TESTIMONIALS</span>
                    <p>
                        <?php echo cs_get_option('testimonials_big_desc');
                        ?>
                    </p>
                </div>


                <?php
                if ($testimonials_radio == 'column3') {
                    ?>
                    <!-- 一行三列 Start -->

                    <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-dots="true" data-nav="false" data-auto="false">
                        <div class="owl-carousel owl-theme">

                            <?php
                            if ($testimonials) {
                                foreach ($testimonials as $key => $value) {
                                    ?>
                                    <div class="testimonial clearfix">
                                        <blockquote class="testimonial-text">
                                            <?php echo  $value['desc'];
                                            ?>
                                            <i class="fa fa-quote-right"></i>
                                        </blockquote>
                                        <div class="testimonial-author clearfix">
                                            <div class="author-image">
                                                <img src="<?php echo  wp_get_attachment_url($value['image']);
                                                ?>" alt="images">
                                            </div>

                                            <div class="author-info">
                                                <h5 class="name"><?php echo  $value['name'];
                                                    ?></h5>
                                                <p class="info">
                                                    <?php echo  $value['info'];
                                                    ?>
                                                </p>
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

                    <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="4" data-column2="2" data-column3="1" data-dots="true" data-nav="false" data-auto="false">
                        <div class="owl-carousel owl-theme">

                            <?php
                            if ($testimonials) {
                                foreach ($testimonials as $key => $value) {
                                    ?>
                                    <div class="testimonial clearfix">
                                        <blockquote class="testimonial-text">
                                            <?php echo  $value['desc'];
                                            ?>
                                            <i class="fa fa-quote-right"></i>
                                        </blockquote>
                                        <div class="testimonial-author clearfix">
                                            <div class="author-image">
                                                <img src="<?php echo  wp_get_attachment_url($value['image']);
                                                ?>" alt="images">
                                            </div>

                                            <div class="author-info">
                                                <h5 class="name"><?php echo  $value['name'];
                                                    ?></h5>
                                                <p class="info">
                                                    <?php echo  $value['info'];
                                                    ?>
                                                </p>
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
        </div>
    </div>
</section>
<!-- 评价模块 End -->
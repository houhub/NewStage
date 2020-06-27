<?php
$teamshow = cs_get_option('teamshow');
$team_radio = cs_get_option('team_radio');
?>
<!-- 团队展示 Start -->
<section class="flat-row flat-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-top mb-30 text-center">
                    <h2><?php echo cs_get_option('teamshow_big_title');
                        ?></h2>  <span class="mt-10 mb-10">OUR TEAM</span>
                    <p>
                        <?php echo cs_get_option('teamshow_big_desc');
                        ?>
                    </p>
                </div>

                <?php
                if ($team_radio == 'column3') {
                    ?>
                    <!-- 一行三列 Start -->
                    <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-dots="true" data-nav="false" data-auto="false">
                        <div class="owl-carousel owl-theme">

                            <?php
                            if ($teamshow) {
                                foreach ($teamshow as $key => $value) {
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="team-item text-center">

                                            <div class="single-hover-effect">
                                                <img src="<?php echo  wp_get_attachment_url($value['image']);
                                                ?>" alt="">
                                            </div>

                                            <div class="team-text">

                                                <h3><?php echo $value['title'];
                                                    ?></h3>
                                                <p>
                                                    <?php echo $value['desc'];
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
                        <!-- 一行三列 End -->
                        <?php
                    } else {
                        ?>
                        <!-- 一行四列 Start -->
                        <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="4" data-column2="2" data-column3="1" data-dots="true" data-nav="false" data-auto="false">
                            <div class="owl-carousel owl-theme">

                                <?php
                                if ($teamshow) {
                                    foreach ($teamshow as $key => $value) {
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="team-item text-center">

                                                <div class="single-hover-effect">
                                                    <img src="<?php echo  wp_get_attachment_url($value['image']);
                                                    ?>" alt="">
                                                </div>
                                                <div class="team-text">

                                                    <h3><?php echo $value['title'];
                                                        ?></h3>
                                                    <p>
                                                        <?php echo $value['desc'];
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

                            <!-- 一行四列 End -->
                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 团队展示 End -->
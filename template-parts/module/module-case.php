<?php
$case_post_id = cs_get_option('case_post_id');
$case_post_number = cs_get_option('case_post_number');
?>
<!-- 案例模块 Start -->
<section class="flat-row flat-blog hover-showcase">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-top mb-30 text-center">
                    <h2><?php echo  cs_get_option('case_big_title');
                        ?></h2>  <span class="mt-10 mb-10">OUR CASE</span>
                    <p>
                        <?php echo  cs_get_option('case_big_desc');
                        ?>
                    </p>
                </div>

                <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-dots="true" data-nav="false" data-auto="false">
                    <div class="owl-carousel owl-theme">
                        <?php query_posts("showposts=$case_post_number&cat=$case_post_id");
                        ?>
                        <?php while (have_posts()) : the_post();
                        ?>
                        <div class="single-hover-effect">
                            <?php focus_blog_thumbnail_new();
                            ?>
                            <div class="content">
                                <div class="top-part">
                                    <h2><a href="<?php the_permalink();
                                        ?>"><?php the_title();
                                        ?></a></h2>
                                </div>
                                <div class="bottom-part">
                                    <div class="meta">
                                        <p class="desc">
                                            <?php
                                            $meta_data = get_post_meta(get_the_ID(), 'post_options', true);
                                            if ($meta_data) {
                                                echo wp_trim_words($meta_data['desc'],30) ;
                                            }
                                            ?>
                                        </p>
                                        <a href="<?php the_permalink();
                                            ?>" class="bttn bttn-fill bttn-sm bttn-primary bttn-no-outline">查看详情</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                    </div>
                </div>

            </div>

            <div class="col-md-12 col-12 mt-10">
                <p align="center">
                    <a href="<?php echo get_category_link($case_post_id);
                        ?>" target="_blank" class="btn-more" align="center">查看更多</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- 案例模块 End -->
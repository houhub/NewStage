<?php

$news_style_radio= cs_get_option('news_style_radio');
$news_style1 = cs_get_option('news_style1');
$news_style2 = cs_get_option('news_style2');
$news_sytle1_category_id = $news_style1['news_sytle1_category_id'];
$news_sytle1_post_number = $news_style1['news_sytle1_post_number'];
$news_sytle2_category_id1 = $news_style2['news_sytle2_category_id1'];
$news_sytle2_category_id2 = $news_style2['news_sytle2_category_id2'];
$news_sytle2_post_number = $news_style2['news_sytle2_post_number'];


?>
<!-- 新闻动态模块 Start -->

<?php
if ($news_style_radio == 'news_style_Option1') {
    ?>
    <section class="flat-row flat-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-top mb-30 text-center">
                        <h2><?php echo  cs_get_option('news_big_title');
                            ?></h2>  <span class="mt-10 mb-10">OUR NEWS</span>
                        <p>
                            <?php echo cs_get_option('news_big_desc');
                            ?>
                        </p>
                    </div>

                    <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-dots="true" data-nav="false" data-auto="false">
                        <div class="owl-carousel owl-theme">
                            <?php query_posts("showposts=$news_sytle1_post_number&cat=$news_sytle1_category_id");
                            ?>
                            <?php while (have_posts()) : the_post();
                            ?>
                            <article class="post style1">
                                <div class="post-border">
                                    <div class="featured-post">
                                        <?php focus_blog_thumbnail_new();
                                        ?>
                                    </div>
                                    <div class="content-post">
                                        <div class="post-meta">
                                            <ul>
                                                <li class="time"><?php the_time('Y-n-j');
                                                    ?></li>
                                                <li class="categories"><?php
                                                    $category = get_the_category();
                                                    echo '<a class="meta-category" href="'.get_category_link($category[0]->cat_ID).'"> ' . $category[0]->cat_name . '</a>';
                                                    ?></li>
                                            </ul>
                                        </div>
                                        <h5 class="post-title">
                                            <a href="<?php the_permalink();
                                                ?>"><?php the_title();
                                                ?></a>
                                        </h5>
                                        <div class="post-content">
                                            <p>
                                                <?php echo wp_trim_words(get_the_excerpt(), 50);
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php endwhile;
                            wp_reset_query();
                            ?>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <p align="center">
                            <a href="<?php echo get_category_link($news_sytle1_category_id);
                                ?>" target="_blank" class="btn-more" align="center">查看更多</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
} else {
    ?>
    <section class="news mb-30 mt-60">
        <div class="container">
            <div class="section-top mb-20 text-center">
                <h2><?php echo  cs_get_option('news_big_title');
                    ?></h2> <span class="mt-10">OUR NEWS</span>
            </div>
            <div class="news-cat">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="news-con first">

                            <div class="news-head">
                                <h3><a href="<?php echo get_category_link($news_sytle2_category_id1);
                                    ?>"><?php echo get_cat_name($news_sytle2_category_id1);
                                    ?></a></h3>
                                <a href="<?php echo get_category_link($news_sytle2_category_id1);
                                    ?>" class="more">查看更多</a>
                            </div>


                            <ul class="news-list">
                                <?php query_posts("showposts=$news_sytle2_post_number&cat=$news_sytle2_category_id1");
                                ?>
                                <?php while (have_posts()) : the_post();
                                ?>

                                <li class="mb-30">
                                    <a href="<?php the_permalink();
                                        ?>" target="_blank" title="<?php the_title();
                                        ?>">
                                        <div class="images d-none d-md-block">
                                            <img src="<?php if (has_post_thumbnail()) { the_post_thumbnail_url('codilight_lite_single_medium');
                                            }
                                            ?>" alt="<?php the_title();
                                            ?>" width="150" height="100">

                                        </div>
                                        <div class="text">
                                            <h2><span><?php the_time('Y-n-j');
                                                ?></span><?php the_title();
                                                ?></h2><p class="d-none d-md-block">
                                                <?php echo wp_trim_words(get_the_excerpt(), 50);
                                                ?>
                                            </p>
                                        </div>
                                    </a>
                                </li>

                                <?php endwhile;
                                wp_reset_query();
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="news-con last">

                            <div class="news-head">
                                <h3><a href="<?php echo get_category_link($news_sytle2_category_id2);
                                    ?>"><?php echo get_cat_name($news_sytle2_category_id2);
                                    ?></a></h3>
                                <a href="<?php echo get_category_link($news_sytle2_category_id2);
                                    ?>" class="more">查看更多</a>
                            </div>
                            <ul class="news-list">
                                <?php query_posts("showposts=$news_sytle2_post_number&cat=$news_sytle2_category_id2");
                                ?>
                                <?php while (have_posts()) : the_post();
                                ?>

                                <li class="mb-30">
                                    <a href="<?php the_permalink();
                                        ?>" target="_blank" title="<?php the_title();
                                        ?>">
                                        <div class="images d-none d-md-block">
                                            <img src="<?php if (has_post_thumbnail()) { the_post_thumbnail_url('codilight_lite_single_medium');
                                            }
                                            ?>" alt="<?php the_title();
                                            ?>" width="150" height="100">

                                        </div>
                                        <div class="text">
                                            <h2><span><?php the_time('Y-n-j');
                                                ?></span><?php the_title();
                                                ?></h2><p class="d-none d-md-block">
                                                <?php echo wp_trim_words(get_the_excerpt(), 50);
                                                ?>
                                            </p>
                                        </div>
                                    </a>
                                </li>

                                <?php endwhile;
                                wp_reset_query();
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>
<!-- 新闻动态模块 End -->

<div class="flat-row main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-wrap fix-float-box">
                    <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <article class="post">
                        <div class="post-border">
                            <div class="featured-post">
                                <?php focus_blog_thumbnail_new(); ?>
                            </div>
                            <div class="content-post">
                                <div class="post-meta">
                                    <ul>
                                        <li class="time"><?php the_time('Y-n-j'); ?></li>
                                        <li class="categories"><?php
                                        $category = get_the_category();
                                        echo '<a class="meta-category" href="'.get_category_link($category[0]->cat_ID).'"> ' . $category[0]->cat_name . '</a>';
                                      ?></li>
                                    </ul>
                                </div>
                                <h2 class="post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="post-content">
                                    <p class="d-none d-md-block d-lg-block"><?php echo wp_trim_words(get_the_excerpt(), 50); ?></p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="pagination-wrap blog-pagination ">
                <?php focus_pagenavi();?>
            </div>
        </div>
    </div>
</div>
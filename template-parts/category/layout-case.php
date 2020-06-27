<div class="flat-showcase hover-showcase">
    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="item col-sm-4">
              <div class="single-hover-effect">
                <?php focus_blog_thumbnail_new(); ?>
                <div class="content">
    
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
                        <div class="meta">
                            <p class="desc">
                            <?php 
                            $meta_data = get_post_meta( get_the_ID(), 'post_options', true );
                            if($meta_data){
                                echo wp_trim_words($meta_data['desc'],20) ;
                            }?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="bttn bttn-fill bttn-sm bttn-primary bttn-no-outline">查看详情</a>
                        </div>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="pagination-wrap blog-pagination ">
            <?php focus_pagenavi();?>
        </div>
    </div>
</div>
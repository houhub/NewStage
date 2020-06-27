<div class="widget-item widget-recent-news">
    <?php $post_newest = cs_get_option( 'post_newest' ); ?>
    <h3 class="widget-title"><?php echo $post_newest['title'];?></h3>
    <div class="widget-content">
        <ul>
           <?php 
            $post_newest_id = $post_newest['id'];
            $post_number = $post_newest['number'];
            $args = array(
              'showposts' => $post_number,
              'ignore_sticky_posts' => 1
            );
            if( is_array( $post_newest_id ) ){
              $args['category__not_in'] = $post_newest_id;
            }
            query_posts($args); ?>
            <?php while (have_posts()) : the_post(); ?>
            <li>
                <div class="thumb-new">
                    <?php focus_blog_thumbnail_new(); ?>
                </div>
                <div class="thumb-new-content clearfix">
                    <h5 class="thumb-new-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h5>
                    <p class="thumb-new-day"><?php the_time('Y-n-j'); ?></p>
                </div>
            </li>
            <?php endwhile; wp_reset_query(); ?>
        </ul>
    </div>
</div>
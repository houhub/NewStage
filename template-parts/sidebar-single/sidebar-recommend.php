<div class="widget-item widget-recent-news recommend-news">
    <?php $post_recommend = cs_get_option( 'post_recommend' ); ?>
    <h3 class="widget-title"><?php echo $post_recommend['title'];?></h3>
    <div class="widget-content">
        <ul>
           <?php 
            $post_recommend_id = $post_recommend['id'];
            $post_number = $post_recommend['number'];
            $args = array(
              'showposts' => $post_number,
              'orderby'   => 'rand'
            );
            if( is_array( $post_recommend_id ) ){
              $args['category__not_in'] = $post_recommend_id;
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
                    <p class="thumb-new-day"><?php if(function_exists('custom_the_views') ) custom_the_views($post->ID); ?></p>
                </div>
            </li>
            <?php endwhile; wp_reset_query(); ?>
        </ul>
    </div>
</div>
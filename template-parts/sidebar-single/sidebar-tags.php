<div class="widget-item widget-tags">
    <div class="title-link">
        <?php $post_tag = cs_get_option( 'post_tag' ); ?>
        <h3 class="widget-title"><?php echo $post_tag['title'];?></h3>
    </div>
    <div class="widget-content">
        <div class="tags">
            <?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>
            <?php wp_tag_cloud( '&unit=pxsmallest=12&largest=12&orderby=count&order=DESC&number=20' ); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
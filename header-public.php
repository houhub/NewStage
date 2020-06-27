<?php
    get_template_part( 'top' );
?>  
<div class="page-title" style="background-image: url(<?php echo wp_get_attachment_url(cs_get_option( 'web_topbg' )); ?>);">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-title-content text-center">
            <div class="page-title-heading ">
                <h3 class="title">
                    <?php 
                        if(is_page()){ $post_data = get_post($post->ID, ARRAY_A); echo $slug = $post_data['post_title']; } 
                        if(is_category()){ $thiscat = get_category($cat); echo $thiscat ->name; }
                        if(is_single()){ 
                            $category = get_the_category();
                            echo $category[0]->cat_name;
                        }
                        if(is_tag()){ echo single_tag_title(); }
                        if(is_search()){ echo htmlspecialchars($s); }
                    ?>
                </h3>
            </div>
            <div class="breadcrumbs">
                <?php if (function_exists('get_breadcrumbs')){get_breadcrumbs(); } ?>
            </div>
        </div>
    </div>
</div>
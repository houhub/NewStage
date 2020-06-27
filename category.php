<?php get_header('public');?>
    <?php
        
        $queried_object = get_queried_object(); 
        $term_id = $queried_object->term_id;
        $term_data = get_term_meta( $term_id, '_custom_category_options', true );

        if($term_data['category_layout_select']=='layout_news'){
            get_template_part( 'template-parts/category/layout-news' );
        }
        if($term_data['category_layout_select']=='layout_case'){
            get_template_part( 'template-parts/category/layout-case' );
        }
        if($term_data['category_layout_select']=='layout_faqs'){
            get_template_part( 'template-parts/category/layout-faqs' );
        }
        if($term_data['category_layout_select']=='layout_jobs'){
            get_template_part( 'template-parts/category/layout-jobs' );
        }
    ?>
<?php get_footer();?>
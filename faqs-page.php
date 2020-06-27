<?php
/*
Template Name: 常见问题模板
Template Post Type: page
*/
?>
<?php 
    $faqs_post_id = cs_get_option( 'faqs_post_id' );
    $faqs_post_number = cs_get_option( 'faqs_post_number' );
?>

<?php get_header('public');?>

<!-- 常见问题 Start -->
<section class="flat-row main-page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 d-none d-lg-block d-xl-block">
                <div class="sidebar-left sidebar-page">                    
                     <?php 
                         get_template_part( 'template-parts/sidebar-page/sidebar-nav' );
                         get_template_part( 'template-parts/sidebar-page/sidebar-contact' );;
                    ?>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 ">
                <div class="flat-textbox textbox-about-us focux-content">
                    <div class="textbox-content">

                        <div class="content-title">
                            <h1 class="pull-left"><?php echo  cs_get_option( 'faqs_page_title' ); ?></h1>
                        </div>
                        <p>
                            <?php echo cs_get_option('faqs_page_desc');?>
                        </p>
                        
                        <div class="accordion">
                            <?php query_posts("showposts=$faqs_post_number&cat=$faqs_post_id"); ?>
                            <?php while ( have_posts() ) : the_post(); ?>

                            <div class="accordion-toggle">
                                <div class="toggle-title">
                                    <?php the_title();
                                    ?>
                                </div>
                                <div class="toggle-content">
                                    <?php the_content();
                                    ?>
                                </div>
                            </div>

                           <?php endwhile; wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 常见问题 End -->
<?php get_footer();?>
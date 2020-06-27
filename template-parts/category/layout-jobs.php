<!-- 人才招聘 Start -->

<section class="flat-row main-page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 d-none d-lg-block d-xl-block">
                <?php get_sidebar('page');
                ?>
            </div>
            <div class="col-lg-9 col-md-12 ">
                <div class="flat-textbox textbox-about-us focux-content">
                    <div class="textbox-content">

                        <div class="content-title">
                            <h1 class="pull-left"><?php echo  cs_get_option( 'jobs_page_title' ); ?></h1>
                        </div>
                        <p>
                            <?php echo cs_get_option('jobs_page_desc');?>
                        </p>
                        <div class="accordion">
                            <?php if ( have_posts() ) : ?>
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

                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

 
<!-- 人才招聘 End -->
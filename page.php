<?php get_header('public');?>
        <section class="flat-row main-page-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 d-none d-lg-block d-xl-block">
                        <?php get_sidebar('page');?>
                    </div>
                    <div class="col-lg-9 col-md-12 ">
                        <?php   if ( have_posts() ) :?>
                        <div class="flat-textbox textbox-about-us focux-content">
                            <div class="textbox-content">
                                <?php
                                    $content=$post->post_content;
                                    echo apply_filters('the_content', $content);
                                ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>    
        </section>
<?php get_footer();?>
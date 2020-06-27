<?php get_header('home');?>
        <section class="flat-error">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="wrap-error text-center">
                            <h2 class="heading-error text-ffb922">404</h2>
                            <h2 class="title-error">抱歉！您找的页面不存在</h2>
                            <div class="wrap-button">
                                <a href="<?php echo home_url( '/' ); ?>" class="bttn bttn-unite bttn-lg bttn-primary bttn-no-outline">返回首页</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>   
                </div>
            </div>
        </section>
<?php get_footer();?>
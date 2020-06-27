<!-- 成长历程视频模块 Start -->
<section class="flat-row flat-video flat-video-style2" style="background-image: url(<?php echo  wp_get_attachment_url(cs_get_option( 'video_image' )); ?>);background-repeat:no-repeat;background-position:center center;background-size:cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 flex-column text-center">
                 <h2 style="font-size:30px; color:#fff;"><?php echo cs_get_option('video_title'); ?> </h2> 
                <p style="color:#fff;padding-top: 10px;">
                    <?php echo cs_get_option( 'video_desc'); ?>
                </p>
                <div class="video-box"> <a href="#videoLightboxStyle2-1" class="video-btn afterglow"><i class="fa fa-play"></i></a>

                    <video id="videoLightboxStyle2-1" width="960" height="540" data-overscale="false">
                        <source src="<?php echo cs_get_option('video_link'); ?>" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 成长历程视频模块 End -->
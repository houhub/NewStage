<?php 
    $banner = cs_get_option( 'banner_style2' );
?>
<!-- flat-slider2 Start -->
<div class="flat-slider style1 no-text">
    <div class="swiper-container" id="bannerSwiper">
        <div class="swiper-wrapper">
            <?php 
            if($banner){
            foreach($banner as $key => $value){ ?>
            <div class="swiper-slide" >
                <a href="<?php echo $value['banner_link']; ?>" style="background-image: url(<?php echo  wp_get_attachment_url($value['banner_image']); ?>);">
                </a>
            </div>
            <?php } } ?>
        </div>
        <div id="bannerpagination" class="swiper-pagination"></div>
        <div id="banner-swiper-button-prev" class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
        <div id="banner-swiper-button-next" class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
    </div> 
</div>
<!-- flat-slider2 End -->
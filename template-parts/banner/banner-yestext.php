<?php 
    $banner = cs_get_option( 'banner_style1' );
?>
<!-- flat-slider1 Start -->
<div class="flat-slider style1 yes-text">
    <div class="swiper-container" id="bannerSwiper">
        <div class="swiper-wrapper">
            <?php 
            if($banner){
            foreach($banner as $key => $value){ ?>
            <div class="swiper-slide" style="background-image: url(<?php echo  wp_get_attachment_url($value['banner_image']); ?>);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="inner">
                        <div class="content">
                            <h1 class="webfont-bold" data-swiper-parallax="-500" data-swiper-parallax-opacity="0"><?php echo  $value['banner_title']; ?></h1>
                            <p class="webfont-thin" data-swiper-parallax="-1500" data-swiper-parallax-opacity="0"><?php echo  $value['banner_desc']; ?></p>
                            <?php if(!empty($value['banner_link'])){ ?>
                            <div class="mainbtn" data-swiper-parallax="-4500" data-swiper-parallax-opacity="0">
                                <a target="_blank" href="<?php echo $value['banner_link']; ?>" class="bttn bttn-fill bttn-md bttn-primary bttn-no-outline"><?php echo $value['banner_link_text']; ?></a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
        <div id="bannerpagination" class="swiper-pagination"></div>
        <div id="banner-swiper-button-prev" class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
        <div id="banner-swiper-button-next" class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
    </div> 
</div>
<!-- flat-slider1 End -->

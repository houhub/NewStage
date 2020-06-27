<!-- footer Start -->
<?php
$footer_about = cs_get_option('footer_about');
$footer_service = cs_get_option('footer_service');
$footer_news = cs_get_option('footer_news');
$footer_costom_links = cs_get_option('footer_costom_links');

$footer_site_links = cs_get_option('footer_site_links');
$footer_site_links_switcher = cs_get_option('footer_site_links_switcher');

$footer_copyright = cs_get_option('footer_copyright');

$service_style1 = cs_get_option('service_style1');
$style1_switcher = cs_get_option('style1_switcher');
$service_style2 = cs_get_option('service_style2');
$style2_switcher = cs_get_option('style2_switcher');
?>
<footer id="footer">

    <section id="footer">
        <div class="container">
            <div class="footer-top clearfix pt-40 pb-40">
                <div class="row">
                    <div class="col-md-2 d-none d-md-block">
                        <h3> 关于我们</h3>

                        <ul class="web-menu-con">
                            <?php
                            if ($footer_about) {
                                foreach ($footer_about as $key => $value) {
                                    ?>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                        <a href="<?php echo  $value['link'];
                                            ?>"><?php echo  $value['text'];
                                            ?></a></li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col-md-2 d-none d-md-block">
                        <h3> 服务内容</h3>
                        <ul class="web-menu-con">
                            <?php
                            if ($footer_service) {
                                foreach ($footer_service as $key => $value) {
                                    ?>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                        <a href="<?php echo  $value['link'];
                                            ?>"><?php echo  $value['text'];
                                            ?></a></li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <!-- footer links costom -->
                    <div class="col-md-2 d-none d-md-block">
                        <h3>快捷导航</h3>
                        <ul class="web-menu-con">
                            <?php
                            if ($footer_costom_links) {
                                foreach ($footer_costom_links as $key => $value) {
                                    ?>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                        <a href="<?php echo  $value['link'];
                                            ?>"><?php echo  $value['text'];
                                            ?></a></li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <!-- footer links costom -->
                    <!-- footer site links costom -->
                    <?php if ($footer_site_links_switcher) {
                        ?>

                        <div class="col-md-2 d-none d-md-block">

                            <h3>友情连接</h3>
                            <ul class="web-menu-con">
                                <?php
                                if ($footer_site_links) {
                                    foreach ($footer_site_links as $key => $value) {
                                        ?>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="<?php echo  $value['link'];
                                                ?>"><?php echo  $value['text'];
                                                ?></a></li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>

                        </div>

                        <?php
                    }
                    ?>
                    <!-- footer site links costom -->
                    <div class="col-md-2 col-6">
                        <h3>联系我们</h3>
                        <div class="tel">
                            <?php echo  cs_get_option('footer_contact');
                            ?>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <h3>关注我们</h3>
                        <img src="<?php echo  wp_get_attachment_url(cs_get_option('footer_qrcode'));
                        ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="copyr pt-20 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <p align="center">
                            <?php echo  $footer_copyright;
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</footer>
<!-- footer End -->

<?php if ($style1_switcher) {
    ?>
    <!-- service suspension Start -->
    <div class="suspension d-none d-xl-block">
        <div class="suspension-box">
            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo  $service_style1['qq'];
                ?>&site=qq&menu=yes" target="_blank" class="a a-service "><i class="fa fa-qq"></i></a>
            <a href="javascript:;" class="a a-service-phone "><i class="fa fa-phone"></i></a>
            <a href="javascript:;" class="a a-qrcode"><i class="fa fa-weixin"></i></a>
            <a href="javascript:;" class="a a-top"><i class="fa fa-angle-double-up"></i></a>
            <div class="d d-service">
                <i class="arrow"></i>
                <div class="inner-box">
                    <div class="d-service-item clearfix">
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo  $service_style1['qq'];
                            ?>&site=qq&menu=yes" target="_blank" class="clearfix"><span class="circle"><i class="i-qq"></i></span><h3>咨询在线客服</h3></a>
                    </div>
                </div>
            </div>
            <div class="d d-service-phone">
                <i class="arrow"></i>
                <div class="inner-box">
                    <div class="d-service-item clearfix">
                        <span class="circle"><i class="i-tel"></i></span>
                        <div class="text">
                            <p>
                                服务热线
                            </p>
                            <p class="red number">
                                <?php echo  $service_style1['phone'];
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d d-qrcode">
                <i class="arrow"></i>
                <div class="inner-box">
                    <div class="qrcode-img">
                        <img src="<?php echo  wp_get_attachment_url($service_style1['qrcode']);
                        ?>" alt="">
                    </div>
                    <p>
                        扫一扫，关注我们
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- service suspension End -->
    
    <?php
} else {
    ?>
    <!-- 回到顶部 Start -->    
    <div class="side-top hidden-xs"> <a title="回到顶部" href="javascript:;" class="gotop" style="display: block;"><i class="f_top fa fa-chevron-up"></i></a></div>
    <!-- 回到顶部 End --> 
    <?php
}
?>


<?php if ($style2_switcher) {
    ?>
    <!-- livechat-chat Start -->
    <div class="livechat-chat animated d-none d-xl-block">
        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo  $service_style2['qq'];
            ?>&site=qq&menu=yes"><img class="chat" src="<?php echo  wp_get_attachment_url($service_style2['icon']);
            ?>"></a>
        <div class="livechat-hint rd-notice-tooltip rd-notice-type-success rd-notice-position-left single-line show_hint">
            <div class="rd-notice-content">
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo  $service_style2['qq'];
                    ?>&site=qq&menu=yes"><?php echo  $service_style2['info'];
                    ?></a>
            </div>
        </div>
        <div class="animated-circles">
            <div class="circle c-1"></div>
            <div class="circle c-2"></div>
            <div class="circle c-3"></div>
        </div>
    </div>
    <!-- livechat-chat End -->
    <?php
}
?>

<?php wp_footer();
?>

<?php
$web_analysis = cs_get_option('web_analysis');
if ($web_analysis) {
    ?>
    <?php echo $web_analysis;
    ?>
    <?php
}
?>

<?php
$web_js = cs_get_option('web_js');
if ($web_js) {
    ?>
    <script>
        <?php echo $web_js;
        ?>
    </script>
    <?php
}
?>
</body>
</html>
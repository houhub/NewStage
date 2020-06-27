<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit" />
    <meta name="force-rendering" content="webkit" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title><?php if (is_home()) {
        bloginfo('name');
        echo " - ";
        bloginfo('description');
    } elseif (is_category()) {
        single_cat_title();
        echo " - ";
        bloginfo('name');
    } elseif (is_single() || is_page()) {
        single_post_title();
        echo " - ";
        bloginfo('name');
    } elseif (is_search()) {
        echo "搜索结果";
        echo " - ";
        bloginfo('name');
    } elseif (is_404()) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    }
        ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php require 'seo.php';
    ?>
    <meta name="description" content="<?php echo $description;
    ?>" />
    <meta name="keywords" content="<?php echo $keywords;
    ?>" />
    <link rel="shortcut icon" href="<?php echo  wp_get_attachment_url(cs_get_option('web_favicon'));
    ?>">
    <?php wp_head();
    ?>
    <?php
    $web_css = cs_get_option('web_css');
    if ($web_css) {
        ?>
        <style>
            <?php echo $web_css;
            ?>
        </style>
        <?php
    }
    ?>
    <!-- IE低版本弹窗升级浏览器 -->
    <script>
        /*@cc_on document.write('\x3Cscript id="_iealwn_js" src="//support.dmeng.net/ie-alert-warning/latest.js">\x3C/script>'); @*/
    </script>
</head>
<body <?php body_class() ?>>
    <div class="focux-header">
        <!-- header Start -->
        <header id="header" class=" top-nav">
            <div class="container container-header">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-wrap clearfix">
                            <div id="logo" style="top: 25px;">
                                <a href="<?php echo home_url('/');
                                    ?>"><img width="200px" height="60px" src="<?php echo  wp_get_attachment_url(cs_get_option('header_logo'));
                                    ?>" alt="logo"></a>
                            </div>

                            <div class="mobile-button">
                                <span></span>
                            </div>

                            <div class="show-search">
                                <a href="#"><i class="fa fa-search"></i></a>
                                <div class="submenu top-search widget_search">
                                    <form role="search" method="get" class="search-form" action="<?php echo home_url('/');
                                        ?>">

                                        <input id="s" type="search" class="search-field" placeholder="输入关键词" value="" name="s" autocomplete="off" />

                                        <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div class="nav-wrap">
                                <nav id="mainnav" class="mainnav">
                                    <?php wp_nav_menu(
                                        array(
                                            'theme_location' => 'nav',
                                            'sort_column' => 'menu_order',
                                            'menu_id' => 'menu',
                                            'menu_class' => 'menu',
                                            'container' => 'ul',
                                        )
                                    );
                                    ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header End -->
    </div>
<?php

require_once get_template_directory() .'/cs-framework/cs-framework.php';

ini_set('error_reporting','E_ALL & ~E_NOTICE'); //提示除去 E_NOTICE 之外的所有错误信息

/**
 * JavaScripts和CSS
 */
function focusScripts() {  
    //Enqueue Javascripts
    wp_register_script( 'jq', get_template_directory_uri() . '/js/jquery.min.js');
    wp_register_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js');
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_register_script( 'carousel', get_template_directory_uri() . '/js/owl.carousel.min.js');
    wp_register_script( 'sticky', get_template_directory_uri() . '/js/hc-sticky.js');
    wp_register_script( 'afterglow', get_template_directory_uri() . '/js/afterglow.min.js');
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js');
    wp_register_script( 'slicknav', get_template_directory_uri() . '/js/jquery.slicknav.js');
    wp_register_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js');
    wp_register_script( 'jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate-1.4.1.js');
    wp_register_script( 'html5', get_template_directory_uri() . '/js/html5.js');
      
    //Enqueue Css Style  highlighs
    wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_register_style('bootstrap-extras',get_template_directory_uri() . '/css/bootstrap-extras-margins-padding.css');
    wp_register_style('font-awesome',get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_register_style('swiper',get_template_directory_uri() . '/css/swiper.min.css');
 	wp_register_style('slicknav',get_template_directory_uri() . '/css/slicknav.min.css');
	wp_register_style('fancybox',get_template_directory_uri() . '/css/jquery.fancybox.css');
    wp_register_style('main',get_template_directory_uri() . '/css/main.css');
    wp_register_style('sub',get_template_directory_uri() . '/css/sub.css');

    if ( !is_admin() ) {
        wp_enqueue_script( 'jq' );
        wp_enqueue_script( 'swiper' );
        wp_enqueue_script( 'bootstrap' );
        wp_enqueue_script( 'carousel' );
        wp_enqueue_script( 'sticky' );
        wp_enqueue_script( 'afterglow' );
        wp_enqueue_script( 'main' );
        wp_enqueue_script( 'slicknav' );
        wp_enqueue_script( 'fancybox' );
        wp_enqueue_script( 'jquery-migrate' );
         wp_enqueue_script( 'html5' );
        
        wp_enqueue_style( 'bootstrap' );
        wp_enqueue_style( 'bootstrap-extras' );
        wp_enqueue_style( 'font-awesome' );        
        wp_enqueue_style( 'swiper' );
        wp_enqueue_style( 'slicknav' );
        wp_enqueue_style( 'fancybox' );
        wp_enqueue_style( 'main' );
        wp_enqueue_style( 'sub' );
        
        // 禁止加载默认jq库
        function my_init_method() {
            wp_deregister_script( 'jquery' ); // 取消原有的 jquery 定义
        }
        add_action('init', 'my_init_method');
        wp_deregister_script( 'l10n' );
    }  
}  
add_action( 'init', 'focusScripts' );

/**
 * 禁止后台加载谷歌字体
 */
function wp_remove_open_sans_from_wp_core() {
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false );
    wp_enqueue_style('open-sans','');
}
add_action( 'init', 'wp_remove_open_sans_from_wp_core' );

/**
 * 移除 WordPress 加载的JS和CSS链接中的版本号
 */
function version_remove_cssjs_ver( $src ) {
    if( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'version_remove_cssjs_ver', 999 );
add_filter( 'script_loader_src', 'version_remove_cssjs_ver', 999 );

/**
 * 清除wordpress自带的meta标签
 */
function ashuwp_clean_theme_meta(){
  remove_action( 'wp_head', 'print_emoji_detection_script', 7, 1);
  remove_action( 'wp_print_styles', 'print_emoji_styles', 10, 1);
  remove_action( 'wp_head', 'rsd_link', 10, 1);
  remove_action( 'wp_head', 'wp_generator', 10, 1);
  remove_action( 'wp_head', 'feed_links', 2, 1);
  remove_action( 'wp_head', 'feed_links_extra', 3, 1);
  remove_action( 'wp_head', 'index_rel_link', 10, 1);
  remove_action( 'wp_head', 'wlwmanifest_link', 10, 1);
  remove_action( 'wp_head', 'start_post_rel_link', 10, 1);
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0);
  remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0);
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0);
  remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0);
  remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10, 1);
  remove_action( 'wp_head', 'rel_canonical', 10, 0);
}
add_action( 'after_setup_theme', 'ashuwp_clean_theme_meta' ); //清除wp_head带入的meta标签
function ashuwp_deregister_embed_script(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'ashuwp_deregister_embed_script' ); //清除wp_footer带入的embed.min.js

/**
 * 替换Gavatar头像地址
 */
function get_ssl_avatar($avatar) {
    if (preg_match_all(
        '/(src|srcset)=["\']https?.*?\/avatar\/([^?]*)\?s=([\d]+)&([^"\']*)?["\']/i',
        $avatar,
        $matches
    ) > 0) {
        $url = 'https://secure.gravatar.com';
        $size = $matches[3][0];
        $vargs = array_pad(array(), count($matches[0]), array());
        for ($i = 1; $i < count($matches); $i++) {
            for ($j = 0; $j < count($matches[$i]); $j++) {
                $tmp = strtolower($matches[$i][$j]);
                $vargs[$j][] = $tmp;
                if ($tmp == 'src') {
                    $size = $matches[3][$j];
                }
            }
        }
        $buffers = array();
        foreach ($vargs as $varg) {
            $buffers[] = vsprintf(
            '%s="%s/avatar/%s?s=%s&%s"',
            array($varg[0], $url, $varg[1], $varg[2], $varg[3])
           );
        }
        return sprintf(
                '<img alt="avatar" %s class="avatar avatar-%s" height="%s" width="%s" />',
                implode(' ', $buffers), $size, $size, $size
            );
    } else {
        return false;
    }
}
add_filter('get_avatar', 'get_ssl_avatar');

/**
 * 防pingback攻击
 */
add_filter( 'xmlrpc_methods', 'remove_xmlrpc_pingback_ping' );
function remove_xmlrpc_pingback_ping( $methods ) {
    unset( $methods['pingback.ping'] );
    return $methods;
};

/**
 * 开启自定义菜单
 */
function register_my_menus() {
  register_nav_menus(
    array(
      'nav' => '网站菜单'
    )
  );
}
add_action( 'init', 'register_my_menus' );

/**
 * 移除wp_nav_menu()多余的CSS选择器
 */
function uazoh_css_attributes_filter($var) {  
    return is_array($var) ? array() : '';  
}  
add_filter('nav_menu_css_class', 'uazoh_css_attributes_filter', 100, 1);  
add_filter('nav_menu_item_id', 'uazoh_css_attributes_filter', 100, 1);  
add_filter('page_css_class', 'uazoh_css_attributes_filter', 100, 1);

/**
 * 移除顶部工具条
 */
add_filter('show_admin_bar', '__return_false');

/**
 * 文章特色图像
 */
add_theme_support('post-thumbnails');


/**
 * Post Thumbnails New
 */
function focus_blog_thumbnail_new() {
    global $post;
    $img_id = get_post_thumbnail_id();
    $img_url = wp_get_attachment_image_src($img_id,full);
    $img_url = $img_url[0];
    if ( has_post_thumbnail() ) {
        echo '<a href="'.get_permalink().'"><img src="'.$img_url.'" /></a>';
    } else {
        $content = $post->post_content;
        $img_preg = "/<img (.*?) src=\"(.+?)\".*?>/";
        preg_match($img_preg,$content,$img_src);
        $img_count=count($img_src)-1;
        $img_val = $img_src[$img_count];
        if(!empty($img_val)){
            echo '<a href="'.get_permalink().'"><img src="'.$img_val.'" /></a>';
        } else {
             echo '<a href="'.get_permalink().'"><img src="'.get_stylesheet_directory_uri() .'/images/default.jpg" /></a>';
        }
    }  
}

/**
 * Post Thumbnails New - nolink
 */
function focus_blog_thumbnail_nolink() {
    global $post;
    $img_id = get_post_thumbnail_id();
    $img_url = wp_get_attachment_image_src($img_id,full);
    $img_url = $img_url[0];
    if ( has_post_thumbnail() ) {
        echo '<img src="'.$img_url.'" />';
    } else {
        $content = $post->post_content;
        $img_preg = "/<img (.*?) src=\"(.+?)\".*?>/";
        preg_match($img_preg,$content,$img_src);
        $img_count=count($img_src)-1;
        $img_val = $img_src[$img_count];
        if(!empty($img_val)){
            echo '<img src="'.$img_val.'" />';
        } else {
             echo '<img src="'.get_stylesheet_directory_uri() .'/images/default.jpg" />';
        }
    }  
}

/**
 * 文章统计
 */
function custom_the_views($post_id, $echo=true, $views='') {
    $count_key = 'views';  
    $count = get_post_meta($post_id, $count_key, true);  
    if ($count == '') {  
        delete_post_meta($post_id, $count_key);  
        add_post_meta($post_id, $count_key, '0');  
        $count = '0';  
    }  
    if ($echo)  
        echo number_format_i18n($count) . $views;  
    else  
        return number_format_i18n($count) . $views;  
}  
function set_post_views() {  
    global $post;  
    $post_id = $post->ID;  
    $count_key = 'views';  
    $count = get_post_meta($post_id, $count_key, true);  
    if (is_single() || is_page()) {  
        if ($count == '') {  
            delete_post_meta($post_id, $count_key);  
            add_post_meta($post_id, $count_key, '0');  
        } else {  
            update_post_meta($post_id, $count_key, $count + 1);  
        }  
    }  
}  
add_action('get_header', 'set_post_views');

/**
 * 图片自动添加alt属性
 */
function image_alt_tag($content){
    global $post;preg_match_all('/<img (.*?)\/>/', $content, $images);
    if(!is_null($images)) {foreach($images[1] as $index => $value)
    {
        $new_img = str_replace('<img', '<img alt="'.get_the_title().'-'.get_bloginfo('name').'"', $images[0][$index]);
        $content = str_replace($images[0][$index], $new_img, $content);}}
    return $content;
}
add_filter('the_content', 'image_alt_tag', 99999);

/**
 * 去除分类链接
 */
add_action( 'load-themes.php',  'no_category_base_refresh_rules');
add_action('created_category', 'no_category_base_refresh_rules');
add_action('edited_category', 'no_category_base_refresh_rules');
add_action('delete_category', 'no_category_base_refresh_rules');
function no_category_base_refresh_rules() {
    global $wp_rewrite;
    $wp_rewrite -> flush_rules();
}
// register_deactivation_hook(__FILE__, 'no_category_base_deactivate');
// function no_category_base_deactivate() {
//  remove_filter('category_rewrite_rules', 'no_category_base_rewrite_rules');
//  // We don't want to insert our custom rules again
//  no_category_base_refresh_rules();
// }
// Remove category base
add_action('init', 'no_category_base_permastruct');
function no_category_base_permastruct() {
    global $wp_rewrite, $wp_version;
    if (version_compare($wp_version, '3.4', '<')) {      // For pre-3.4 support      $wp_rewrite -> extra_permastructs['category'][0] = '%category%';
    } else {
        $wp_rewrite -> extra_permastructs['category']['struct'] = '%category%';
    }
}
// Add our custom category rewrite rules
add_filter('category_rewrite_rules', 'no_category_base_rewrite_rules');
function no_category_base_rewrite_rules($category_rewrite) {
    //var_dump($category_rewrite); // For Debugging
    $category_rewrite = array();
    $categories = get_categories(array('hide_empty' => false));
    foreach ($categories as $category) {
        $category_nicename = $category -> slug;
        if ($category -> parent == $category -> cat_ID)// recursive recursion
            $category -> parent = 0;
        elseif ($category -> parent != 0)
            $category_nicename = get_category_parents($category -> parent, false, '/', true) . $category_nicename;
        $category_rewrite['(' . $category_nicename . ')/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?category_name=$matches[1]&feed=$matches[2]';
        $category_rewrite['(' . $category_nicename . ')/page/?([0-9]{1,})/?$'] = 'index.php?category_name=$matches[1]&paged=$matches[2]';
        $category_rewrite['(' . $category_nicename . ')/?$'] = 'index.php?category_name=$matches[1]';
    }
    // Redirect support from Old Category Base
    global $wp_rewrite;
    $old_category_base = get_option('category_base') ? get_option('category_base') : 'category';
    $old_category_base = trim($old_category_base, '/');
    $category_rewrite[$old_category_base . '/(.*)$'] = 'index.php?category_redirect=$matches[1]';
    //var_dump($category_rewrite); // For Debugging
    return $category_rewrite;
}
// Add 'category_redirect' query variable
add_filter('query_vars', 'no_category_base_query_vars');
function no_category_base_query_vars($public_query_vars) {
    $public_query_vars[] = 'category_redirect';
    return $public_query_vars;
}
// Redirect if 'category_redirect' is set
add_filter('request', 'no_category_base_request');
function no_category_base_request($query_vars) {
    //print_r($query_vars); // For Debugging
    if (isset($query_vars['category_redirect'])) {
        $catlink = trailingslashit(get_option('home')) . user_trailingslashit($query_vars['category_redirect'], 'category');
        status_header(301);
        header("Location: $catlink");
        exit();
    }
    return $query_vars;
}

/**
 * 上传文件重命名
 */
function git_upload_filter($file) {
    $time = date("YmdHis");
    $file['name'] = $time . "" . mt_rand(1, 100) . "." . pathinfo($file['name'], PATHINFO_EXTENSION);
    return $file;
}
add_filter('wp_handle_upload_prefilter', 'git_upload_filter');

//disable srcset on images
function disable_srcset( $sources ) {
return false;
}
add_filter( 'wp_calculate_image_srcset', 'disable_srcset' );

/**
* 数字分页函数
* 因为wordpress默认仅仅提供简单分页
* 所以要实现数字分页，需要自定义函数
* @Param int $range            数字分页的宽度
* @Return string|empty        输出分页的HTML代码        
*/
function focus_pagenavi( $range = 4 ) {
    global $paged,$wp_query;
    if ( !$max_page ) {
        $max_page = $wp_query->max_num_pages;
    }
    if( $max_page >1 ) {
        echo "<div class='flat-pagination'>"; 
        if( !$paged ){
            $paged = 1;
        }
        if( $paged != 1 ) {
            echo "<a href='".get_pagenum_link(1) ."' class='extend' title='跳转到首页'>首页</a>";
        }
        previous_posts_link('上一页');
        if ( $max_page >$range ) {
            if( $paged <$range ) {
                for( $i = 1; $i <= ($range +1); $i++ ) {
                    echo "<a href='".get_pagenum_link($i) ."'";
                if($i==$paged) echo " class='current'";echo ">$i</a>";
                }
            }elseif($paged >= ($max_page -ceil(($range/2)))){
                for($i = $max_page -$range;$i <= $max_page;$i++){
                    echo "<a href='".get_pagenum_link($i) ."'";
                    if($i==$paged)echo " class='current'";echo ">$i</a>";
                    }
                }elseif($paged >= $range &&$paged <($max_page -ceil(($range/2)))){
                    for($i = ($paged -ceil($range/2));$i <= ($paged +ceil(($range/2)));$i++){
                        echo "<a href='".get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";
                    }
                }
            }else{
                for($i = 1;$i <= $max_page;$i++){
                    echo "<a href='".get_pagenum_link($i) ."'";
                    if($i==$paged)echo " class='current'";echo ">$i</a>";
                }
            }
        next_posts_link('下一页');
        if($paged != $max_page){
            echo "<a href='".get_pagenum_link($max_page) ."' class='extend' title='跳转到最后一页'>尾页</a>";
        }
        echo '<span>共 [ ' .$max_page. ' ] 页</span>';
        echo "</div>\n";  
    }
}

/**
 * 面包屑导航
 */
function get_breadcrumbs()  
{  
    global $wp_query;  
    
    if ( !is_home() ){  
    
        // Start the UL  
        echo '<ul class="breadcrumbs">';  
        // Add the Home link  
        echo '<li><a href="'. get_option('home') .'">首页</a></li>';  
    
        if ( is_category() )  
        {  
            $catTitle = single_cat_title( "", false );  
            $cat = get_cat_ID( $catTitle );  
            echo "<li> &raquo; ". get_category_parents( $cat, TRUE, " &raquo; " ) ."</li>";  
        }  
        elseif ( is_archive() && !is_category() )  
        {  
            echo "<li> &raquo; 标签</li>";  
        }  
        elseif ( is_search() ) {  
    
            echo "<li> &raquo; 搜索结果</li>";  
        }  
        elseif ( is_404() )  
        {  
            echo "<li> &raquo; 404 Not Found</li>";  
        }  
        elseif ( is_single() )  
        {  
            $category = get_the_category();  
            $category_id = get_cat_ID( $category[0]->cat_name );  
    
            echo '<li> &raquo; '. get_category_parents( $category_id, TRUE, " &raquo; " );  
            echo "正文</li>";  
        }  
        elseif ( is_page() )  
        {  
            $post = $wp_query->get_queried_object();  
    
            if ( $post->post_parent == 0 ){  
    
                echo "<li> &raquo; ".the_title('','', FALSE)."</li>";  
    
            } else {  
                $title = the_title('','', FALSE);  
                $ancestors = array_reverse( get_post_ancestors( $post->ID ) );  
                array_push($ancestors, $post->ID);  
    
                foreach ( $ancestors as $ancestor ){  
                    if( $ancestor != end($ancestors) ){  
                        echo '<li> &raquo; <a href="'. get_permalink($ancestor) .'">'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</a></li>';  
                    } else {  
                        echo '<li> &raquo; '. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</li>';  
                    }  
                }  
            }  
        }  
    
        // End the UL  
        echo "</ul>";  
    }  
}

/**
 * 禁用 WordPress 4.4+ 的响应式图片功能及缩略图裁剪的所有功能
 */
function zg_disable_wp_tailoring( $sizes ){
    unset( $sizes[ 'thumbnail' ]);//缩略图大小
    unset( $sizes[ 'medium' ]);//中等大小
    unset( $sizes[ 'medium_large' ] );//自动生成的768图片选项
    unset( $sizes[ 'large' ]);//大尺寸
    unset( $sizes[ 'full' ] );//全尺寸
    return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'zg_disable_wp_tailoring' );

/**
 * 只搜索文章标题
 */
function wp_search_by_title( $search, $wp_query ) {
    if ( ! empty( $search ) && ! empty( $wp_query->query_vars['search_terms'] ) ) {
        global $wpdb;
        $q = $wp_query->query_vars;
        $n = ! empty( $q['exact'] ) ? '' : '%';
        $search = array();
        foreach ( ( array ) $q['search_terms'] as $term )
            $search[] = $wpdb->prepare( "$wpdb->posts.post_title LIKE %s", $n . $wpdb->esc_like( $term ) . $n );
        if ( ! is_user_logged_in() )
            $search[] = "$wpdb->posts.post_password = ''";
        $search = ' AND ' . implode( ' AND ', $search );
    }
    return $search;
}
add_filter( 'posts_search', 'wp_search_by_title', 10, 2 );

/**
 * 搜索结果排除所有页面
 */
function search_filter_page($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','search_filter_page');

?>
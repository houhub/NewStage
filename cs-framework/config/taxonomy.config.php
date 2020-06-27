<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// TAXONOMY OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options     = array();

// -----------------------------------------
// Taxonomy Options                        -
// -----------------------------------------
$options[]   = array(
  'id'       => '_custom_category_options',
  'taxonomy' => 'category', // category, post_tag or your custom taxonomy name
  'fields'   => array(

    array(
      'id'                => 'category_layout_select',
      'type'              => 'radio',
      'title'             => '分类模板选择',
      'desc'              => '为该分类选择一个模板<br>默认选择：新闻列表模板',
      'options'           => array(
        'layout_news'   => '新闻列表模板',
        'layout_case'    => '案例列表模板',
        'layout_faqs'    => '常见问题FAQ列表模板',
        'layout_jobs'    => '人才招聘列表模板',
      ),
      'default'           => 'layout_news',
    ),

  ),
);


CSFramework_Taxonomy::instance( $options );

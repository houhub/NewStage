<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'post_options',
  'title'     => '自定义设置项',
  'post_type' => 'post',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'desc',
      'fields' => array(

        array(
          'id'    => 'desc',
          'type'  => 'textarea',
          'title' => '描述',
          'desc'  => '可解析HTML代码',
        ),

      ),
    ),

  ),
);


CSFramework_Metabox::instance( $options );

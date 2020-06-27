<?php get_header('home');?>
    <?php 
        $banner_switcher = cs_get_option( 'banner_switcher' );
        if($banner_switcher){
            $banner_radio = cs_get_option( 'banner_radio' );
            if($banner_radio == 'yes_text'){
                get_template_part( 'template-parts/banner/banner-yestext' );
            }else{
                get_template_part( 'template-parts/banner/banner-notext' );
            }
        }

      $module_home = cs_get_option( 'module_home' );
      if($module_home){
          foreach ($module_home['enabled'] as $key => $value) {
            get_template_part( 'template-parts/module/module', $key );
          }
      }
    ?>
<?php get_footer();?>
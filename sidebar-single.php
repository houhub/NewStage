
<div class="sidebar sidebar-blog clearfix">
<?php 
  $sidebar_single_sorter = cs_get_option( 'sidebar_single_sorter' );
  if($sidebar_single_sorter){
      foreach ($sidebar_single_sorter['enabled'] as $key => $value) {
        get_template_part( 'template-parts/sidebar-single/sidebar', $key );
      }
  } 
?>
</div>
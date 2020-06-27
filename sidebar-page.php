<div class="sidebar-left sidebar-page">                    
<?php 
  $sidebar_page_sorter = cs_get_option( 'sidebar_page_sorter' );
  if($sidebar_page_sorter){
      foreach ($sidebar_page_sorter['enabled'] as $key => $value) {
        get_template_part( 'template-parts/sidebar-page/sidebar', $key );
      }
  } 
?>
</div>
<?php 
    $page_contact = cs_get_option( 'page_contact' );
?>
<div class="widget widget-item widget-contact-info widget-text">
        <div class="widget-title">
             <h5><?php echo  $page_contact['title']; ?></h5> 
         </div> 
    <ul class="info">
        <li class="phone"><div><?php echo  $page_contact['phone']; ?></div></li>
        <li class="mail"><div><?php echo  $page_contact['mail']; ?></div></li>
        <li class="address"><div><?php echo  $page_contact['address']; ?></div></li>   
    </ul>
</div>
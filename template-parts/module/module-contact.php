<?php 
    $contact = cs_get_option( 'contact' );
?>
<!-- 联系我们 Start -->
<section class="contact pt-80 pb-80" style="background-image: url(<?php echo  wp_get_attachment_url(cs_get_option( 'contact_big_image' )); ?>);background-repeat:no-repeat;background-position:center center;background-size:cover;">
    <div class="container">
            <div class="col-md-12 text-center">
                <h3 class="mb-20"><?php echo $contact['title'];?></h3>
                <p><?php echo $contact['desc']; ?></p> 
                <div class="btn-quote mt-20">
                    <?php if(!empty($contact['link'])){ ?>
                        <a href="<?php echo $contact['link'];
                            ?>" target="_blank" class="btn-more" align="center"><?php echo $contact['link_text']; ?></a>
                    <?php } ?>
                </div>
            </div>
     </div>
</section>
<!-- 联系我们 End -->
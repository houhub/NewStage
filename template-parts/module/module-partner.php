 <?php
    $partner_option = cs_get_option('partner_option');
    $partner_radio = cs_get_option('partner_radio');
 ?>
<!-- 合作伙伴模块- Start -->
    <section class="flat-row card-box">
        <div class="container">
            <div class="section-top mb-30 text-center">
                <h2><?php echo cs_get_option('partner_title');
                    ?></h2>  <span class="mt-10 mb-10">OUR PARTNER</span>
                <p>
                    <?php echo cs_get_option('partner_desc');?>
                </p>
            </div>
    
            <?php
            if ($partner_radio == 'column3') {
                ?>
                <!-- 一行三列 Start -->
                <div class="flat-iconbox column-3">
                    <div class="row">
                        <?php
                        if ($partner_option) {
                            foreach ($partner_option as $key => $value) {
                                ?>
                                
                            <li class="col-md-4 col-4 mb-40">
                                <img src="<?php echo  wp_get_attachment_url($value['image']);?>" alt="">
                            </li>
                            
                             <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <!-- 一行三列 End -->
                <?php
            } else {
                ?>
                <!-- 一行四列 Start -->
                <div class="flat-iconbox column-4">
                    <div class="row">
                        <?php
                        if ($partner_option) {
                            foreach ($partner_option as $key => $value) {
                                ?>
                                
                            <li class="col-md-3 col-3 mb-40">
                                <img src="<?php echo  wp_get_attachment_url($value['image']);?>" alt="">
                            </li>
                            
                             <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <!-- 一行四列 End -->
                <?php
            }
            ?>
        </div>
    </section>
<!-- 合作伙伴模块 End -->
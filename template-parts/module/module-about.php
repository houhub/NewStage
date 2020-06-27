<!-- 关于我们 Start -->
<?php
$about_set_option = cs_get_option('about_set_option');
$about_radio = cs_get_option('about_radio');
?>

<?php
if ($about_radio == 'column3') {
    ?>
    <!-- 一行三列 Start -->

    <section class="about mb-40 mt-60">
        <div class="container">
            <div class="section-top mb-40 text-center">
                <h2><?php echo cs_get_option('about_title');
                    ?></h2>  <span class="mt-10 mb-10">ABOUT US</span>
                <p>
                    <?php echo cs_get_option('about_desc');
                    ?>
                </p>
            </div>
            <div class="about-con">
                <ul class="row">

                    <?php

                    if ($about_set_option) {
                        foreach ($about_set_option as $key => $value) {
                            ?>
                            <li class="col-md-4 col-12 mb-30">
                                <a href="<?php echo  $value['link'];
                                    ?>" target="_blank">
                                    <p>
                                        <?php echo  $value['title'];
                                        ?>
                                    </p>
                                    <img src="<?php echo  wp_get_attachment_url($value['image']);
                                    ?>" alt="">
                                </a>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- 一行三列 End -->
    <?php
} else {
    ?>
    <!-- 一行四列 Start -->
    <section class="about mb-30 mt-60">
        <div class="container">
            <div class="section-top mb-30 text-center">
                <h2><?php echo cs_get_option('about_title');
                    ?></h2>  <span class="mt-10 mb-10">ABOUT US</span>
                <p>
                    <?php echo cs_get_option('about_desc');
                    ?>
                </p>
            </div>
            <div class="about-con">
                <ul class="row">
                    <?php

                    if ($about_set_option) {
                        foreach ($about_set_option as $key => $value) {
                            ?>
                            <li class="col-md-3 col-12 mb-30">
                                <a href="<?php echo  $value['link'];
                                    ?>" target="_blank">
                                    <p>
                                        <?php echo  $value['title'];
                                        ?>
                                    </p>
                                    <img src="<?php echo  wp_get_attachment_url($value['image']);
                                    ?>" alt="">
                                </a>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </section>
    <!-- 一行四列 End -->
    <?php
}
?>

<!-- 关于我们 End -->
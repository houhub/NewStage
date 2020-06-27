<?php
$page_about_nav = cs_get_option('page_about_nav');
$page_about_nav_links = $page_about_nav['page_about_nav_links'];
?>

<?php
/*
 设置了导航内容项目才显示
*/
?>
<?php
if ($page_about_nav_links) {
    ?>
    <div class="widget widget-item widget-categories">
         <div class="widget-title">
            <h5><?php echo  $page_about_nav['title']; ?></h5> 
         </div> 
        <ul>
            <?php
            if ($page_about_nav_links) {
                foreach ($page_about_nav_links as $key => $value) {
                    ?>
                    <li><a href="<?php echo  $value['link'];
                        ?>"><?php echo  $value['text'];
                        ?></a></li>
                    <?php
                }
            }
            ?>
        </ul>
    </div>
    <?php
}
?>

<?php
$page_nav = cs_get_option('page_nav');
$page_links = $page_nav['links'];
?>

<?php
/*
 设置了导航内容项目才显示
*/
?>
<?php
if ($page_links) {
    ?>

    <div class="widget widget-item widget-categories">
        <div class="widget-title">
             <h5><?php echo  $page_nav['title']; ?></h5> 
         </div> 
        <ul>
            <?php
            if ($page_links) {
                foreach ($page_links as $key => $value) {
                    ?>
                    <li><a href="<?php echo  $value['link'];
                        ?>"><?php echo  $value['text'];
                        ?></a></li>
                    <?php
                }
            }
            ?>
        </ul>
    </div>
    <?php
}
?>
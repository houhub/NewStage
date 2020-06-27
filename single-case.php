<?php
/*
Template Name: 案例详情页模板
Template Post Type: post
*/
?>
<?php get_header('public');?>
        <div class="content-wrap main-project-detail">
            <?php if( have_posts() ){ the_post();?>
            <div class="wrap-project-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="sidebar-left sidebar-case">
                                <div class="widget-list-info">
                                    <div class="caption">项目名称</div>
                                    <h1 class="widget-title"><?php single_post_title(); ?></h1>
                                    <div class="caption">项目介绍</div>
                                    <div class="desc">
                                    <?php 
                                    $meta_data = get_post_meta( get_the_ID(), 'post_options', true );
                                    if($meta_data){
                                        echo $meta_data['desc'];
                                    }?>
                                    </div>
                                    <div class="post-tags">
                                        <?php
                                          if(get_the_tag_list()) {
                                            echo get_the_tag_list();
                                          }
                                        ?>
                                    </div>
                                    <div><?php edit_post_link( __( '[ 编辑本文 ]', '' ), '<span class="edit-link">', '</span>' ); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            <div class="project-content">
                                <div class="textbox textbox-project-detail">
                                    <div class="caption">项目详情</div>
                                    <div class="textbox-content focux-content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
<?php get_footer();?>
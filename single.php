<?php get_header('public');?>
        <div class="main-blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-wrap blog-single" >
                            <?php if( have_posts() ){ the_post();?>
                            <article class="main-single">
                                <div class="content-post">
                                    <h1 class="post-title"><?php the_title(); ?></h1>
                                    <div class="post-meta">
                                        <ul>
                                            <li>发布时间：<?php the_time('Y-n-j'); ?></li>
                                            <li>
                                                分类：<?php
                                                    $category = get_the_category();
                                                    echo '<a href="'.get_category_link($category[0]->cat_ID).'"> ' . $category[0]->cat_name . '</a>';
                                                ?>
                                            </li>
                                            <li>阅读：<?php if(function_exists('custom_the_views') ) custom_the_views($post->ID); ?></li>
                                            <li>
                                              <?php edit_post_link( __( '[ 编辑本文 ]', '' ), '<span class="edit-link">', '</span>' ); ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-content focux-content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <div class="post-categories">
                                    <?php
                                      if(get_the_tag_list()) {
                                        echo get_the_tag_list();
                                      }
                                    ?>
                                </div>
                                <!-- share -->
                                <!--
                                    <div class="share clearfix">
                                        <span style="float: left;line-height: 36px;">分享到：</span>
                                        <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
                                        <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                                    </div>
                                -->
                                <!-- share -->
                                
                                <nav class="post-navigation">
                                    <div class="row">
                                        <?php
                                            $categories = get_the_category();
                                            $categoryIDS = array();
                                            foreach ($categories as $category) {
                                                array_push($categoryIDS, $category->term_id);
                                            }
                                            $categoryIDS = implode(",", $categoryIDS);
                                        ?>
                                        <div class="post-navigation-left col-12 col-sm-6">
                                            <span>上一篇</span>
                                            <div class="entry-navigation__link">
                                                <?php if (get_previous_post($categoryIDS)) { previous_post_link('%link','%title',true);} else { echo '本文为「'.$categories[0] -> cat_name.'」分类下最后文章';} ?>
                                            </div>
                                        </div>
                                        <div class="post-navigation-right col-12 col-sm-6">
                                            <span>下一篇</span>
                                            <div class="entry-navigation__link">
                                                <?php if (get_next_post($categoryIDS)) { next_post_link('%link','%title',true);} else { echo '本文为「'.$categories[0] -> cat_name.'」分类下最新文章';} ?>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </article>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                        <?php get_sidebar('single');?>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer();?>
<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'NewStage主题设置',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'NewStage <small>v1.0</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ------------------------------
// 基本设置
// ------------------------------
$options[] = array(
  'name'  => 'basic',
  'title' => '基本设置',
  'icon'  => 'fa fa-cog',

  'fields' => array(
    
    array(
      'id'        => 'seo',
      'type'      => 'fieldset',
      'title'     => 'SEO相关',
      'fields'    => array(

        array(
          'id'        => 'web_keywords',
          'type'      => 'text',
          'title'     => '网站关键词',
          'desc'      => '3-5个关键词，用英文逗号隔开',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),
        array(
          'id'        => 'web_description',
          'type'      => 'textarea',
          'title'     => '网站描述',
        ),

      ),
    ),

    array(
      'id'        => 'web_favicon',
      'type'      => 'image',
      'title'     => 'favicon图标',
      'add_title' => '上传图标',
      'desc'      => '上传 .ico 格式的文件<br>图标制作可搜索：favicon图标制作',
    ),
    
    array(
      'id'        => 'header_logo',
      'type'      => 'image',
      'title'     => '网站LOGO',
      'desc'      => '尺寸大小参考：128px*80px',
      'add_title' => '上传图片',
    ),
    array(
      'id'        => 'web_topbg',
      'type'      => 'image',
      'title'     => '页面上部背景图',
      'add_title' => '上传图片',
      'desc'      => '设置各文章和分类页面上部分顶部背景图',
    ),

    array(
      'id'       => 'web_analysis',
      'type'     => 'textarea',
      'title'    => '网站统计代码',
      'desc'     => '位于底部，用于添加第三方流量数据统计代码，如：Google analytics、百度统计、CNZZ',
      'sanitize' => false,
    ),

    array(
      'id'       => 'web_css',
      'type'     => 'textarea',
      'title'    => '自定义样式',
      'desc'     => '位于顶部，直接写样式代码，不用添加<strong>&lt;style></strong>标签',
      'sanitize' => false,
    ),

    array(
      'id'       => 'web_js',
      'type'     => 'textarea',
      'title'    => '自定义JavaScript',
      'desc'     => '位于底部，这部分代码是在主要内容加载完毕加载，不用添加<strong>&lt;script></strong>标签,如：禁止右键',
      'sanitize' => false,
    ),

  ),
);

// ------------------------------
// 首页幻灯片
// ------------------------------
$options[] = array(
  'name'  => 'banner',
  'title' => '首页幻灯片设置',
  'icon'  => 'fa fa-home',

  'fields' => array(

    array(
      'id'      => 'banner_switcher',
      'type'    => 'switcher',
      'title'   => '幻灯片是否显示',
      'desc'    => '默认开启',
      'default' => true,
    ),

    array(
      'id'                => 'banner_radio',
      'type'              => 'radio',
      'title'             => '幻灯片模式',
      'desc'              => '默认为有自定义文字的幻灯片模式',
      'options'           => array(
        'yes_text'   => '有标题/描述/按钮模式',
        'no_text'    => '仅图片链接模式',
      ),
      'default'           => 'yes_text',
    ),

    array(
      'id'              => 'banner_style1',
      'type'            => 'group',
      'title'           => '有标题/描述/按钮模式',
      'button_title'    => '添加',
      'accordion_title' => '标题',
      'desc'        => '可按住鼠标拖拽排序',
      'fields' 
               => array(
        array(
          'id'      => 'banner_title',
          'type'    => 'text',
          'title'   => '标题',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

        array(
          'id'      => 'banner_desc',
          'type'    => 'text',
          'title'   => '描述',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

        array(
          'id'      => 'banner_link',
          'type'    => 'text',
          'title'   => '链接',
          'desc'    => '链接留空，按钮即可隐藏',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

        array(
          'id'        => 'banner_link_text',
          'type'      => 'text',
          'title'     => '链接文字',
          'default'   => '联系我们',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

        array(
          'id'        => 'banner_image',
          'type'      => 'image',
          'title'     => '图片',
          'desc'      => '图片大小参考：1920px*550px',
          'add_title' => '上传图片',
        ),

      ),
    ),

    array(
      'id'              => 'banner_style2',
      'type'            => 'group',
      'title'           => '仅图片链接模式',
      'button_title'    => '添加',
      'accordion_title' => '标题',
      'desc'            => '自由设计Banner图<br>可按住鼠标拖拽排序',
      'fields'          => array(

        array(
          'id'      => 'banner_title',
          'type'    => 'text',
          'title'   => '标题',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

        array(
          'id'      => 'banner_link',
          'type'    => 'text',
          'title'   => '链接',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

        array(
          'id'        => 'banner_image',
          'type'      => 'image',
          'title'     => '图片',
          'desc'      => '图片大小1920px*578px',
          'add_title' => '上传图片',
        ),
      ),
    ),
  ), 
);

// ------------------------------
// 模块显示设置
// ------------------------------
$options[] = array(
  'name'  => 'module_home',
  'title' => '模块显示设置',
  'icon'  => 'fa fa-cube',

  'fields' => array(
    
    array(
          'id'             => 'module_home',
          'type'           => 'sorter',
          'title'          => '首页模块显示/隐藏/排序',
          'icon'           => 'fa fa-minus',
          'desc'           => '可按住鼠标拖拽排序<br/>拖拽到右侧 [未启用的模块] 中可隐藏',
          'default'        => array(
            'enabled'      => array(
              'about'        => '关于我们模块',
              'service'     => '服务内容模块',
              'news'         => '新闻中心模块',
              'partner'     => '合作伙伴模块',

            ),
            'disabled'     => array(
              'case'         => '客户案例模块',
              'product'    => '产品展示模块',
              'teamshow'   => '团队展示模块', 
              'testimonials' => '客户评价模块',
              'video'   => '成长历程视频模块',
              'contact'   => '联系我们模块',
            ),
          ),
          'enabled_title'  => '启用的模块',
          'disabled_title' => '未启用的模块',
        ),


  ),
);

// ------------------------------
// 模块具体设置
// ------------------------------
$options[]   = array(
  'name'     => 'accordion_section',
  'title'    => '模块具体设置',
  'icon'     => 'fa fa-cube',
  'sections' => array(

    // 关于模块
    array(
      'name'     => 'sub_section_1',
      'title'    => '关于我们模块',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'      => 'about_title',
          'type'    => 'text',
          'title'   => '标题',
          'default' => '关于我们',
        ),
        array(
          'id'      => 'about_desc',
          'type'    => 'textarea',
          'title'   => '描述',
          'desc'     => '可解析HTML代码',
          'default' => '腾讯是一家以互联网为基础的平台公司，通过技术丰富互联网用户的生活，助力企业数字化升级，我们的使命是“用户为本 科技向善',
          'sanitize' => false,
        ),
        array(
          'id'                => 'about_radio',
          'type'              => 'radio',
          'title'             => '一行显示几列',
          'desc'              => '默认一行三列',
          'options'           => array(
            'column3'           => '一行三列模式',
            'column4'           => '一行四列模式',
          ),
          'default'           => 'column4',
        ),

        array(
          'id'              => 'about_set_option',
          'type'            => 'group',
          'title'           => '添加卡片',
          'button_title'    => '添加',
          'accordion_title' => '标题',
          'desc'        => '可按住鼠标拖拽排序',
          'fields'      => array(
            
            array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => '标题',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'      => 'desc',
              'type'    => 'textarea',
              'title'   => '描述（60文字以内）',
            ),

            array(
              'id'      => 'link',
              'type'    => 'text',
              'title'   => '链接',
              'desc'    => '链接留空，按钮即可隐藏',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'        => 'link_text',
              'type'      => 'text',
              'title'     => '链接文字',
              'default'   => '查看详情',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'        => 'image',
              'type'      => 'image',
              'title'     => '图片',
              'desc'      => '图片大小参考：400px*250px',
              'add_title' => '上传图片',
            ),

          ),
        ),
      )
    ),

    // 服务项目模块
    array(
      'name'     => 'sub_section_2',
      'title'    => '服务内容模块',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'        => 'service_big_title',
          'type'      => 'text',
          'title'     => '模块标题',
          'default'   => '服务内容',
        ),
        array(
          'id'      => 'service_big_desc',
          'type'    => 'textarea',
          'title'   => '描述',
          'desc'     => '可解析HTML代码',
          'default' => '一切以用户价值为依归，将社会责任融入产品及服务之中；推动科技创新与文化传承，助力各行各业升级，促进社会的可持续发展。',
          'sanitize' => false,
        ),
        array(
          'id'                => 'service_radio',
          'type'              => 'radio',
          'title'             => '一行显示几列',
          'desc'              => '默认一行三列',
          'options'           => array(
            'column3'           => '一行三列模式',
            'column4'           => '一行四列模式',
          ),
          'default'           => 'column4',
        ),

        array(
          'id'              => 'service_option',
          'type'            => 'group',
          'title'           => '添加卡片',
          'button_title'    => '添加',
          'accordion_title' => '标题',
          'desc'        => '可按住鼠标拖拽排序',
          'fields'      => array(
            
            array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => '标题',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'      => 'desc',
              'type'    => 'textarea',
              'title'   => '描述（60文字以内）',
            ),

            array(
              'id'      => 'link',
              'type'    => 'text',
              'title'   => '链接',
              'desc'    => '链接留空，按钮即可隐藏',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'        => 'link_text',
              'type'      => 'text',
              'title'     => '链接文字',
              'default'   => '查看详情',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'        => 'image',
              'type'      => 'image',
              'title'     => '图片',
              'desc'      => '图片大小参考：128px*128px',
              'add_title' => '上传图片',
            ),

          ),
        ),

      )
    ),

    // 案例模块
    array(
      'name'     => 'sub_section_3',
      'title'    => '客户案例模块',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'      => 'case_big_title',
          'type'    => 'text',
          'title'   => '模块标题',
          'default' => '案例展示',
        ),
        array(
          'id'      => 'case_big_desc',
          'type'    => 'textarea',
          'title'   => '描述',
          'desc'     => '可解析HTML代码',
          'default' => '面向不同行业，我们推出了针对性的行业解决方案。客户成功案例展示如下 ',
          'sanitize' => false,
        ),
        array(
          'id'         => 'case_post_id',
          'type'       => 'radio',
          'title'      => '分类选择',
          'desc'    => '显示该分类下的案例',
          'options'    => 'categories',
          'default' => 1,
        ),

        array(
          'id'      => 'case_post_number',
          'type'    => 'number',
          'title'   => '显示的案例数',
          'default' => '6',
          'desc'    => '默认6',
        ),

      )
    ),

    // 新闻模块
    array(
      'name'     => 'sub_section_4',
      'title'    => '新闻中心模块',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'      => 'news_big_title',
          'type'    => 'text',
          'title'   => '模块标题',
          'default' => '新闻中心',
        ),
        
        array(
          'id'      => 'news_big_desc',
          'type'    => 'textarea',
          'title'   => '描述',
          'desc'     => '可解析HTML代码',
          'default' => '最前沿的行业动态和企业动态',
          'sanitize' => false,
        ),
  
        array(
          'id'                => 'news_style_radio',
          'type'              => 'radio',
          'title'             => '新闻模块显示模式设置',
          'desc'              => '默认为模式1 新闻资讯大分类的模式',
          'options'           => array(
            'news_style_Option1'   => '显示模式1：按照新闻资讯大图，大分类模式显示',
            'news_style_Option2'    => '显示模式2：按照企业动态，行业动态这样左右2栏显示',
          ),
          'default'           => 'news_style_Option1',
        ),

        array(
          'id'              => 'news_style1',
          'type'            => 'fieldset',
          'title'           => '模式1：新闻资讯大分类模式显示',
          'desc'              => '新闻中心大分类设置，选择新闻大分类',
          'fields'          => array(
                array(
                      'id'         => 'news_sytle1_category_id',
                      'type'       => 'radio',
                      'title'      => '分类选择',
                      'desc'    => '选择后新闻模块会显示该分类下的文章',
                      'options'    => 'categories',
                      'default' => 1,
                    ),
            
                array(
                  'id'      => 'news_sytle1_post_number',
                  'type'    => 'number',
                  'title'   => '显示的文章数',
                  'default' => '6',
                  'desc'    => '默认6',
                 ),              
            ),
        ),
        array(
          'id'              => 'news_style2',
          'type'            => 'fieldset',
          'title'           => '模式2：企业动态，行业动态左右2栏显示',
          'desc'              => '分类选择设置，选择企业动态，行业动态这样2个分类',
          'fields'          => array(
                array(
                      'id'         => 'news_sytle2_category_id1',
                      'type'       => 'radio',
                      'title'      => '左边显示分类选择',
                      'desc'    => '选择后新闻模块会显示该分类下的文章',
                      'options'    => 'categories',
                      'default' => 1,
                    ),
                array(
                      'id'         => 'news_sytle2_category_id2',
                      'type'       => 'radio',
                      'title'      => '右边显示分类选择',
                      'desc'    => '选择后新闻模块会显示该分类下的文章',
                      'options'    => 'categories',
                      'default' => 1,
                    ),            
                array(
                  'id'      => 'news_sytle2_post_number',
                  'type'    => 'number',
                  'title'   => '显示的文章数',
                  'default' => '6',
                  'desc'    => '默认6',
                 ),              
            ),
        ),

        )
    ),

    // 产品展示模块
        array(
      'name'     => 'sub_section_5',
      'title'    => '产品展示模块',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'        => 'product_big_title',
          'type'      => 'text',
          'title'     => '模块标题',
          'default'   => '产品展示',
        ),
        array(
          'id'      => 'product_big_desc',
          'type'    => 'textarea',
          'title'   => '描述',
          'desc'     => '可解析HTML代码',
          'default' => '我们优秀的产品展示',
          'sanitize' => false,
        ),
        array(
          'id'                => 'product_radio',
          'type'              => 'radio',
          'title'             => '一行显示几列',
          'desc'              => '默认一行三列',
          'options'           => array(
            'column3'           => '一行三列模式',
            'column4'           => '一行四列模式',
          ),
          'default'           => 'column4',
        ),

        array(
          'id'              => 'product_option',
          'type'            => 'group',
          'title'           => '添加卡片',
          'button_title'    => '添加',
          'accordion_title' => '标题',
          'desc'        => '可按住鼠标拖拽排序',
          'fields'      => array(
            
            array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => '标题',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'      => 'desc',
              'type'    => 'textarea',
              'title'   => '描述（60文字以内）',
            ),

            array(
              'id'      => 'link',
              'type'    => 'text',
              'title'   => '链接',
              'desc'    => '链接留空，按钮即可隐藏',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'        => 'link_text',
              'type'      => 'text',
              'title'     => '链接文字',
              'default'   => '查看详情',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'        => 'image',
              'type'      => 'image',
              'title'     => '图片',
              'desc'      => '图片大小参考：128px*128px',
              'add_title' => '上传图片',
            ),

          ),
        ),

      )
    ),


    // 团队展示
    array(
      'name'     => 'sub_section_6',
      'title'    => '团队展示模块',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'        => 'teamshow_big_title',
          'type'      => 'text',
          'title'     => '模块标题',
          'default'   => '团队展示',
        ),
        
        array(
          'id'      => 'teamshow_big_desc',
          'type'    => 'textarea',
          'title'   => '描述',
          'desc'     => '可解析HTML代码',
          'default' => '我们的团队展示',
          'sanitize' => false,
        ),
        array(
          'id'                => 'team_radio',
          'type'              => 'radio',
          'title'             => '一行显示几列',
          'desc'              => '默认一行三列',
          'options'           => array(
            'column3'           => '一行三列模式',
            'column4'           => '一行四列模式',
          ),
          'default'           => 'column3',
        ),        
        array(
          'id'              => 'teamshow',
          'type'            => 'group',
          'title'           => '添加成员',
          'button_title'    => '添加',
          'accordion_title' => '标题',
          'desc'        => '可按住鼠标拖拽排序',
          'fields'      => array(
            
            array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => '标题',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'      => 'desc',
              'type'    => 'text',
              'title'   => '描述',
            ),

             array(
              'id'        => 'image',
              'type'      => 'image',
              'title'     => '图片',
              'desc'      => '图片大小参考：360px*300px',
              'add_title' => '上传图片',
            ),

          ),
        ),

      )
    ),
    
    // 合作伙伴模块
    array(
      'name'     => 'sub_section_7',
      'title'    => '合作伙伴模块',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'      => 'partner_title',
          'type'    => 'text',
          'title'   => '标题',
          'default' => '合作伙伴',
        ),
        array(
          'id'      => 'partner_desc',
          'type'    => 'textarea',
          'title'   => '描述',
          'desc'     => '可解析HTML代码',
          'default' => '我们的合作伙伴展示',
          'sanitize' => false,
        ),
        array(
          'id'                => 'partner_radio',
          'type'              => 'radio',
          'title'             => '一行显示几列',
          'desc'              => '默认一行三列',
          'options'           => array(
            'column3'           => '一行三列模式',
            'column4'           => '一行四列模式',
          ),
          'default'           => 'column4',
        ),

        array(
          'id'              => 'partner_option',
          'type'            => 'group',
          'title'           => '添加卡片',
          'button_title'    => '添加',
          'accordion_title' => '标题',
          'desc'        => '可按住鼠标拖拽排序',
          'fields'      => array(
            
            array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => '标题',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'      => 'desc',
              'type'    => 'textarea',
              'title'   => '描述（60文字以内）',
            ),

            array(
              'id'      => 'link',
              'type'    => 'text',
              'title'   => '链接',
              'desc'    => '链接留空，按钮即可隐藏',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'        => 'link_text',
              'type'      => 'text',
              'title'     => '链接文字',
              'default'   => '查看详情',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'        => 'image',
              'type'      => 'image',
              'title'     => '图片',
              'desc'      => '图片大小参考：400px*250px',
              'add_title' => '上传图片',
            ),

          ),
        ),
      )
    ),

    
    // 评价模块
    array(
      'name'     => 'sub_section_8',
      'title'    => '客户评价模块',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'        => 'testimonials_big_title',
          'type'      => 'text',
          'title'     => '模块标题',
          'default'   => '客户评价',
        ),
        
        array(
          'id'      => 'testimonials_big_desc',
          'type'    => 'textarea',
          'title'   => '描述',
          'desc'     => '可解析HTML代码',
          'default' => '我们的客户评价展示',
          'sanitize' => false,
        ),
        
        array(
          'id'                => 'testimonials_radio',
          'type'              => 'radio',
          'title'             => '一行显示几列',
          'desc'              => '默认一行三列',
          'options'           => array(
            'column3'           => '一行三列模式',
            'column4'           => '一行四列模式',
          ),
          'default'           => 'column3',
        ),

        array(
          'id'              => 'testimonials',
          'type'            => 'group',
          'title'           => '添加卡片',
          'button_title'    => '添加',
          'accordion_title' => '标题',
          'desc'        => '可按住鼠标拖拽排序',
          'fields'      => array(
            
            array(
              'id'      => 'name',
              'type'    => 'text',
              'title'   => '昵称',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'      => 'info',
              'type'    => 'text',
              'title'   => '简要描述',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'      => 'desc',
              'type'    => 'textarea',
              'title'   => '评价内容',
            ),

            array(
              'id'        => 'image',
              'type'      => 'image',
              'title'     => '头像',
              'desc'      => '图片大小参考：160px*160px',
              'add_title' => '上传图片',
            ),

          ),
        ),

      )
    ),
    // 联系我们模块
    array(
      'name'     => 'sub_section_9',
      'title'    => '联系我们模块',
      'icon'     => 'fa fa-minus',
      'fields'   => array(
        array(
          'id'        => 'contact_big_image',
          'type'      => 'image',
          'title'     => '模块背景图',
          'add_title' => '上传图片',
        ), 
        array(
          'id'        => 'contact',
          'type'      => 'fieldset',
          'title'     => '联系我们',
          'fields'    => array(

            array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => '标题',
              'default' => '真诚期待与您的合作',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'      => 'desc',
              'type'    => 'textarea',
              'title'   => '描述',
              'default' => '获取报价，了解更多业务，7*24小时专业服务。',
            ),

            array(
              'id'      => 'link',
              'type'    => 'text',
              'title'   => '链接',
              'desc'     => '链接留空，按钮即可隐藏',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'      => 'link_text',
              'type'    => 'text',
              'title'   => '链接文字',
              'default' => '联系我们',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

          ),
        ),

      )
    ), 
    
    // 成长历程视频模块
    array(
      'name'     => 'sub_section_10',
      'title'    => '成长历程视频模块',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'      => 'video_title',
          'type'    => 'text',
          'title'   => '视频标题',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

        array(
          'id'      => 'video_desc',
          'type'    => 'textarea',
          'title'   => '视频描述',
          'default' => '公司成长历程视频',
        ),

        array(
          'id'      => 'video_link',
          'type'    => 'text',
          'title'   => '视频链接',
          'desc'    => '请填写.mp4结尾的视频地址',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

         array(
          'id'        => 'video_image',
          'type'      => 'image',
          'title'     => '大背景图',
          'desc'      => '图片大小参考：1920px*500px',
          'add_title' => '上传图片',
        ),

      )
    ),
  ),
);

// ------------------------------
// 侧边栏排序隐藏
// ------------------------------
$options[] = array(
  'name'  => 'module_sidebar',
  'title' => '侧边栏显示设置',
  'icon'  => 'fa fa-ellipsis-v',

  'fields' => array(
    
    array(
      'id'             => 'sidebar_single_sorter',
      'type'           => 'sorter',
      'title'          => '文章页侧边栏排序隐藏',
      'icon'           => 'fa fa-minus',
      'desc'           => '可按住鼠标拖拽排序<br/>拖拽到右侧 [未启用的模块] 中可隐藏',
      'default'        => array(
        'enabled'      => array(
          'newest'   => '最新文章模块',
          'recommend'=> '推荐文章模块',
          'tags'     => '标签模块',
        ),
        'disabled'     => array(
        ),
      ),
      'enabled_title'  => '启用的模块',
      'disabled_title' => '未启用的模块',
    ),

    array(
      'id'             => 'sidebar_page_sorter',
      'type'           => 'sorter',
      'title'          => '单页面侧边栏排序隐藏',
      'icon'           => 'fa fa-minus',
      'desc'           => '可按住鼠标拖拽排序<br/>拖拽到右侧 [未启用的模块] 中可隐藏',
      'default'        => array(
        'enabled'      => array(
          'nav'     => '链接导航模块',
          'contact' => '联系方式模块',
        ),
        'disabled'     => array(
        ),
      ),
      'enabled_title'  => '启用的模块',
      'disabled_title' => '未启用的模块',
    ),

  ),
);

// ------------------------------
// 侧边栏具体设置
// ------------------------------
$options[]   = array(
  'name'     => 'sidebar_section',
  'title'    => '侧边栏详细设置',
  'icon'     => 'fa fa-ellipsis-v',
  'sections' => array(

    // 文章页侧边栏
    array(
      'name'     => 'sidebar_single',
      'title'    => '文章页侧边栏',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'        => 'post_newest',
          'type'      => 'fieldset',
          'title'     => '最新动态模块',
          'fields'    => array(

            array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => '标题',
              'default' => '最新动态',
            ),

            array(
              'id'         => 'id',
              'type'       => 'checkbox',
              'title'      => '排除分类',
              'desc'       => '请选择不想显示在新闻动态侧边栏的分类，选择后过滤该分类下的文章',
              'options'    => 'categories',
            ),

            array(
              'id'      => 'number',
              'type'    => 'number',
              'title'   => '显示文章数',
              'default' => '3',
            ),

          ),
        ),

        array(
          'id'        => 'post_recommend',
          'type'      => 'fieldset',
          'title'     => '推荐文章模块',
          'fields'    => array(

            array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => '标题',
              'default' => '文章推荐',
            ),

            array(
              'id'         => 'id',
              'type'       => 'checkbox',
              'title'      => '排除分类',
              'desc'       => '请选择不想显示在推荐文章侧边栏的分类，选择后过滤该分类下的文章',
              'options'    => 'categories',
            ),

            array(
              'id'      => 'number',
              'type'    => 'number',
              'title'   => '显示文章数',
              'default' => '3',
            ),

          ),
        ),

        array(
          'id'        => 'post_tag',
          'type'      => 'fieldset',
          'title'     => '标签模块',
          'fields'    => array(

            array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => '标题',
              'default' => '文章标签',
            ),

          ),
        )

      )
    ),

    // 单页面侧边栏
    array(
      'name'     => 'sidebar_page',
      'title'    => '单页面侧边栏',
      'icon'     => 'fa fa-minus',
      'fields'   => array(


        array(
          'id'        => 'page_about_nav',
          'type'      => 'fieldset',
          'title'     => '关于我们导航',
          'fields'    => array(

            array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => '标题',
              'default' => '关于我们',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'              => 'page_about_nav_links',
              'type'            => 'group',
              'title'           => '关于我们导航',
              'button_title'    => '添加',
              'accordion_title' => '标题',
              'desc'        => '可按住鼠标拖拽排序',
              'fields'      => array(
                
                array(
                  'id'      => 'text',
                  'type'    => 'text',
                  'title'   => '文字',
                  'attributes' => array(
                    'style'    => 'width: 100%;'
                  ),
                ),

                array(
                  'id'      => 'link',
                  'type'    => 'text',
                  'title'   => '链接',
                  'attributes' => array(
                    'style'    => 'width: 100%;'
                  ),
                ),

              ),
            ),

          ),
        ),
        
        array(
          'id'        => 'page_nav',
          'type'      => 'fieldset',
          'title'     => '链接导航',
          'fields'    => array(

            array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => '标题',
              'default' => '链接导航',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'              => 'links',
              'type'            => 'group',
              'title'           => '导航链接',
              'button_title'    => '添加',
              'accordion_title' => '标题',
              'desc'        => '可按住鼠标拖拽排序',
              'fields'      => array(
                
                array(
                  'id'      => 'text',
                  'type'    => 'text',
                  'title'   => '文字',
                  'attributes' => array(
                    'style'    => 'width: 100%;'
                  ),
                ),

                array(
                  'id'      => 'link',
                  'type'    => 'text',
                  'title'   => '链接',
                  'attributes' => array(
                    'style'    => 'width: 100%;'
                  ),
                ),

              ),
            ),

          ),
        ),

        array(
          'id'        => 'page_contact',
          'type'      => 'fieldset',
          'title'     => '联系方式',
          'fields'    => array(

            array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => '标题',
              'default' => '联系方式',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'      => 'phone',
              'type'    => 'text',
              'title'   => '手机号',
              'default' => '123456',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'      => 'mail',
              'type'    => 'text',
              'title'   => '邮箱',
              'default' => '123456@qq.com',
              'attributes' => array(
                'style'    => 'width: 100%;'
              ),
            ),

            array(
              'id'      => 'address',
              'type'    => 'textarea',
              'title'   => '联系地址',
              'default' => 'XXX路XXX大厦123号XXX楼',
            ),

          ),
        ),

      )
    ),

  ),
); 

// ------------------------------
// 底部设置
// ------------------------------
$options[] = array(
  'name'  => 'footer',
  'title' => '网站底部设置',
  'icon'  => 'fa fa-arrow-circle-o-down',

  'fields' => array(
    array(
      'id'              => 'footer_about',
      'type'            => 'group',
      'title'           => '关于我们',
      'button_title'    => '添加',
      'accordion_title' => '标题',
      'desc'        => '关于我们的导航链接，可按住鼠标拖拽排序',
      'fields'      => array(
        
        array(
          'id'      => 'text',
          'type'    => 'text',
          'title'   => '文字',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

        array(
          'id'      => 'link',
          'type'    => 'text',
          'title'   => '链接',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

      ),
    ),
  array(
      'id'              => 'footer_service',
      'type'            => 'group',
      'title'           => '服务内容',
      'button_title'    => '添加',
      'accordion_title' => '标题',
      'desc'        => '服务内容的导航链接，可按住鼠标拖拽排序',
      'fields'      => array(
        
        array(
          'id'      => 'text',
          'type'    => 'text',
          'title'   => '文字',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

        array(
          'id'      => 'link',
          'type'    => 'text',
          'title'   => '链接',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

      ),
    ),
    array(
      'id'              => 'footer_costom_links',
      'type'            => 'group',
      'title'           => '快捷导航',
      'button_title'    => '添加',
      'accordion_title' => '标题',
      'desc'        => '可按住鼠标拖拽排序',
      'fields'      => array(
        
        array(
          'id'      => 'text',
          'type'    => 'text',
          'title'   => '文字',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

        array(
          'id'      => 'link',
          'type'    => 'text',
          'title'   => '链接',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),
      ),
    ),

     array(
      'id'      => 'footer_contact',
      'type'    => 'textarea',
      'title'   => '联系方式',
      'desc'     => '可解析HTML代码',
      'sanitize' => false,
    ),
    
    array(
      'id'        => 'footer_qrcode',
      'type'      => 'image',
      'title'     => '关注我们二维码',
      'desc'      => '图片大小参考：240px*240px',
      'add_title' => '上传图片',
    ),


    array(
      'id'      => 'footer_site_links_switcher',
      'type'    => 'switcher',
      'title'   => '底部友情链接是否显示',
      'desc'    => '默认关闭，<br>开启后其页面底部可显示',
      'default' => false,
    ),
    
    array(
      'id'              => 'footer_site_links',
      'type'            => 'group',
      'title'           => '友情链接',
      'button_title'    => '添加',
      'accordion_title' => '标题',
      'desc'        => '可按住鼠标拖拽排序',
      'fields'      => array(
        
        array(
          'id'      => 'text',
          'type'    => 'text',
          'title'   => '文字',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

        array(
          'id'      => 'link',
          'type'    => 'text',
          'title'   => '链接',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),
      ),
    ),

    array(
      'id'       => 'footer_copyright',
      'type'     => 'textarea',
      'title'    => '版权信息',
      'desc'     => '可解析HTML代码',
      'default'  => '© 2020 NewStage主题.',
      'sanitize' => false,
    ),

  ),
);

// ------------------------------
// 人才招聘
// ------------------------------
$options[] = array(
  'name'  => 'jobs',
  'title' => '人才招聘页面设置',
  'icon'  => 'fa fa-handshake-o',

  'fields' => array(
      
        array(
          'id'      => 'jobs_page_title',
          'type'    => 'text',
          'title'   => '人才招聘',
          'desc'     => '人才招聘文章分类，招聘工作信息发布到人才招聘分类下面',
          'default' => '人才招聘',
        ),
        
        array(
          'id'      => 'jobs_page_desc',
          'type'    => 'textarea',
          'title'   => '描述',
          'desc'     => '可解析HTML代码',
          'default' => '我们热烈欢迎有丰富经验和专业知识的您加入我们的大家庭，诚邀有志之士携手共进！<br><br>我们的岗位需求如下:<br><br>',
          'sanitize' => false,
        ),
        
        array(
          'id'         => 'jobs_post_id',
          'type'       => 'radio',
          'title'      => '分类选择',
          'desc'    => '请选择人才招聘相关的分类',
          'options'    => 'categories',
          'default' => 1,
        ),

        array(
          'id'      => 'news_post_number',
          'type'    => 'number',
          'title'   => '显示的招聘工作数',
          'default' => '6',
          'desc'    => '默认6',
        ),

  ),
);


// ------------------------------
// 常见问题
// ------------------------------
$options[] = array(
  'name'  => 'faqs',
  'title' => '常见问题页面设置',
  'icon'  => 'fa fa-question',

  'fields' => array(
      
        array(
          'id'      => 'faqs_page_title',
          'type'    => 'text',
          'title'   => '常见问题',
          'desc'     => '常见问题文章分类，常见问题 信息发布到常见问题分类下面',
          'default' => '常见问题',
        ),
        
        array(
          'id'      => 'faqs_page_desc',
          'type'    => 'textarea',
          'title'   => '描述',
          'desc'     => '可解析HTML代码',
          'default' => '我们收集了常见的问题，请参考如下:<br><br>',
          'sanitize' => false,
        ),
        
        array(
          'id'         => 'faqs_post_id',
          'type'       => 'radio',
          'title'      => '分类选择',
          'desc'    => '请选择常见问题相关的分类',
          'options'    => 'categories',
          'default' => 1,
        ),

        array(
          'id'      => 'faqs_post_number',
          'type'    => 'number',
          'title'   => '显示的常见问题数目',
          'default' => '6',
          'desc'    => '默认6',
        ),

  ),
);



// ------------------------------
// 在线客服设置
// ------------------------------
$options[] = array(
  'name'  => 'service',
  'title' => '在线客服设置 ',
  'icon'  => 'fa fa-user-o',

  'fields' => array(

    array(
      'id'      => 'style1_switcher',
      'type'    => 'switcher',
      'title'   => '右侧客服服务 - 竖排按钮',
      'desc'    => '默认开启',
      'default' => true,
    ),

    array(
      'id'        => 'service_style1',
      'type'      => 'fieldset',
      'title'     => '右侧客服服务 - 竖排按钮',
      'fields'    => array(

        array(
          'id'      => 'qq',
          'type'    => 'text',
          'title'   => 'QQ号',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

        array(
          'id'      => 'phone',
          'type'    => 'text',
          'title'   => '联系电话',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

        array(
          'id'        => 'qrcode',
          'type'      => 'image',
          'title'     => '二维码',
          'add_title' => '上传图片',
        ),

      ),
    ),

    array(
      'id'      => 'style2_switcher',
      'type'    => 'switcher',
      'title'   => '底部客服服务 - 动画按钮',
      'desc'    => '默认开启',
      'default' => true,
    ),

    array(
      'id'        => 'service_style2',
      'type'      => 'fieldset',
      'title'     => '底部客服服务 - 动画按钮',
      'fields'    => array(
        
        array(
          'id'      => 'qq',
          'type'    => 'text',
          'title'   => 'QQ号',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

        array(
          'id'      => 'info',
          'type'    => 'text',
          'title'   => '信息',
          'default' => '嘿！有什么能帮到您的吗？',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

        array(
          'id'        => 'icon',
          'type'      => 'image',
          'title'     => '图片',
          'add_title' => '上传图片',
        ),

      ),
    ),

  ),
);

// ------------------------------
// 备份与恢复
// ------------------------------
$options[] = array(
  'name'  => 'backup',
  'title' => '备份与恢复',
  'icon'  => 'fa fa-recycle',

  'fields' => array(
    
    array(
      'type'  => 'backup',
      'title' => '选项的备份与恢复',
    ),

  ),
);

CSFramework::instance( $settings, $options );

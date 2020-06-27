
;(function($) {
    "use strict";

    var themesflatSearch = function () {
       $(document).on('click', function(e) {   
            var clickID = e.target.id;   
            if ( ( clickID !== 's' ) ) {
                $('.top-search').removeClass('show');   
                $('.show-search').removeClass('active');             
            } 
        });

        $('.show-search').on('click', function(event){
            event.stopPropagation();
        });

        $('.search-form').on('click', function(event){
            event.stopPropagation();
        });        

        $('.show-search').on('click', function (e) {           
            if( !$( this ).hasClass( "active" ) )
                $( this ).addClass( 'active' );
            else
                $( this ).removeClass( 'active' );
             e.preventDefault();

            if( !$('.top-search' ).hasClass( "show" ) )
                $( '.top-search' ).addClass( 'show' );
            else
                $( '.top-search' ).removeClass( 'show' );
        });
    }  


    var flatOwl = function() {
        if ( $().owlCarousel ) {
            $('.themesflat-carousel-box').each(function(){
                var
                $this = $(this),
                auto = $this.data("auto"),
                item = $this.data("column"),
                item2 = $this.data("column2"),
                item3 = $this.data("column3"),
                gap = Number($this.data("gap")),
                dots = $this.data("dots"),
                nav = $this.data("nav");

                $this.find('.owl-carousel').owlCarousel({
                    margin: gap,
                    loop:false,
                    dots:dots,
                    nav: nav,
                    navigation : true,
                    pagination: true,
                    autoplay: auto,
                    autoplayTimeout: 5000,
                    responsive: {
                        0:{
                            items:item3
                        },
                        765:{
                            items:item2
                        },
                        1000:{
                            items:item
                        }
                    }
                });
            });
            $('.flat-testimonial-carousel').each(function(){
                var
                $this = $(this),
                auto = $this.data("auto"),
                item = $this.data("column"),
                item2 = $this.data("column2"),
                item3 = $this.data("column3"),
                gap = Number($this.data("gap")),
                dots = $this.data('dots'),
                nav = $this.data('nav');

                $this.find('.owl-carousel').owlCarousel({
                    margin: gap,
                    loop:false,
                    dots:dots,
                    nav: nav,
                    navigation : true,
                    pagination: true,
                    autoplay: auto,
                    autoplayTimeout: 5000,
                    navText:['&#x23;','&#x24;'],
                    responsive: {
                        0:{
                            items:item3
                        },
                        600:{
                            items:item2
                        },
                        1000:{
                            items:item
                        }
                    }
                });
            });
        }
    };

    var testimonialSlider = function() {
        $('#flat-testimonials-slider').each(function(){
            $('#flat-testimonials-slider').flexslider({
                animation: "slide",
                controlNav: "thumbnails",
                directionNav: false,
            });
        });   
    }; 


    var accordionToggle = function() {
        var speed = {duration: 400};
        // $('.accordion')
        $('.toggle-content').hide();
        $('.accordion').find('.accordion-toggle').first().find('.toggle-title').addClass('active')
            .next().show();
        $('.accordion-toggle .toggle-title.active').siblings('.toggle-content').show();
        $('.accordion').find('.toggle-title').on('click', function() {
            $(this).toggleClass('active');
            $(this).next().stop().slideToggle(speed);
            $(".toggle-content").not($(this).next()).stop().slideUp(speed);
            if ($(this).is('.active')) {
                $(this).closest('.accordion').find('.toggle-title.active').toggleClass('active')
                $(this).toggleClass('active');
            };
        });
    };

    var responsiveMenu = function() {
        var menuType = 'desktop';

        $(window).on('load resize', function() {
            var currMenuType = 'desktop';

            if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ) {
                currMenuType = 'mobile';
            }

            if ( currMenuType !== menuType ) {
                menuType = currMenuType;

                if ( currMenuType === 'mobile' ) {
                    var $mobileMenu = $('#mainnav').attr('id', 'mainnav-mobi').hide();
                    var hasChildMenu = $('#mainnav-mobi').find('li:has(ul)');

                    $('#header .container-header ').after($mobileMenu);
                    hasChildMenu.children('ul').hide();
                    hasChildMenu.children('a').after('<span class="btn-submenu"></span>');
                    $('.btn-menu').removeClass('active');
                } else {
                    var $desktopMenu = $('#mainnav-mobi').attr('id', 'mainnav').removeAttr('style');

                    $desktopMenu.find('.submenu').removeAttr('style');
                    $('#header .container-header ').find('.nav-wrap').append($desktopMenu);
                    $('.btn-submenu').remove();
                }
            }
        });

        $('.mobile-button').on('click', function() {         
            $('#mainnav-mobi').slideToggle(300);
            $(this).toggleClass('active');
        });

        $(document).on('click', '#mainnav-mobi li .btn-submenu', function(e) {
            $(this).toggleClass('active').next('ul').slideToggle(300);
            e.stopImmediatePropagation()
        });
    };
    
    var liveChat = function(){
        setInterval(function(){
            if($(".animated-circles").hasClass("animated")){
                $(".animated-circles").removeClass("animated");
            }else{
                $(".animated-circles").addClass('animated');
            }
        },3000);
        var wait = setInterval(function(){
            $(".livechat-hint").removeClass("show_hint").addClass("hide_hint");
            clearInterval(wait);
        },4500);
        $(".livechat-chat").hover(function(){
            clearInterval(wait);
            $(".livechat-hint").removeClass("hide_hint").addClass("show_hint");
        },function(){
            $(".livechat-hint").removeClass("show_hint").addClass("hide_hint");
        });
    };

    var suspension = function(){
        $(document).on("mouseenter", ".suspension .a", function(){
            var _this = $(this);
            var s = $(".suspension");
            var isService = _this.hasClass("a-service");
            var isServicePhone = _this.hasClass("a-service-phone");
            var isQrcode = _this.hasClass("a-qrcode");
            if(isService){ s.find(".d-service").show().siblings(".d").hide();}
            if(isServicePhone){ s.find(".d-service-phone").show().siblings(".d").hide();}
            if(isQrcode){ s.find(".d-qrcode").show().siblings(".d").hide();}
        });
        $(document).on("mouseleave", ".suspension, .suspension .a-top", function(){
            $(".suspension").find(".d").hide();
        });
        $(document).on("mouseenter", ".suspension .a-top", function(){
            $(".suspension").find(".d").hide(); 
        });
        $(document).on("click", ".suspension .a-top", function(){
            $("html,body").animate({scrollTop: 0});
        });
        $(window).scroll(function(){
            var st = $(document).scrollTop();
            var $top = $(".suspension .a-top");
            if(st > 400){
                $top.css({display: 'block'});
            }else{
                if ($top.is(":visible")) {
                    $top.hide();
                }
            }
        });
    };

    var bannerSwiper = function(){
        var mySwiper = new Swiper('#bannerSwiper', {
            loop: true,
            speed: 600,
            parallax: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '#bannerpagination',
                clickable: true,
            },
            navigation: {
                nextEl: '#banner-swiper-button-next',
                prevEl: '#banner-swiper-button-prev',
            },
        });
    }

    var videoSwiper = function(){
        var mySwiper = new Swiper('#videoSwiper', {
            loop: false,
            speed: 600,
            parallax: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '#videopagination',
                clickable: true,
            },
            navigation: {
                nextEl: '#video1-swiper-button-next',
                prevEl: '#video1-swiper-button-prev',
            },
        });
    }

    var teamSwiper = function(){
        var mySwiper = new Swiper('#teamSwiper', {
            loop: false,
            slidesPerView : 4,
            spaceBetween : 30,
            pagination: {
                el: '#teampagination',
                clickable: true,
            },
            breakpoints: { 
                //当宽度小于等于320
                320: {
                  slidesPerView: 1,
                  spaceBetween: 10
                },
               //当宽度小于等于480
                480: { 
                  slidesPerView: 2,
                  spaceBetween: 10
                },
                //当宽度小于等于640
                640: {
                  slidesPerView: 3,
                  spaceBetween: 10
                },
                768: {
                  slidesPerView: 4,
                  spaceBetween: 10
                }
            }
        });
    }

    var sticky = function(){
        // hcStickyCase
        var stickyCase = new hcSticky('.sidebar-case', {
            stickTo: '.wrap-project-detail',
            top: 100,
            queries: {
                980: {
                    disable: true
                }
            }
        });

        // hcStickyBlog
        var stickyBlog = new hcSticky('.sidebar-blog', {
            stickTo: '.main-blog-details',
            top: 100,
            queries: {
                980: {
                    disable: true
                }
            }
        });

        // hcStickyPage
        var stickyBlog = new hcSticky('.sidebar-page', {
            stickTo: '.main-page-details',
            top: 100,
            queries: {
                980: {
                    disable: true
                }
            }
        });
    }

    
    $(function() {
        themesflatSearch();
        flatOwl();
        testimonialSlider();
        accordionToggle();
        responsiveMenu();
        liveChat();
        suspension();
        bannerSwiper();
        videoSwiper();
        teamSwiper();
        sticky();
    });

})(jQuery);
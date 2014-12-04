//Short codes
(function($){

    //Form Input Placeholder cleaner
    formInputCleaner = function(input, label, focus){

        if (focus && $(input).val() == label){
            $(input).val('');
        } else if (!focus && !$(input).val()){
            $(input).val(label);
        }
    };

    //Add odd/even class to item
    webuza_add_odd_even_class = function($elements){
        $elements.each(function(idx, value){
            if (idx % 2 == 0){
                $(this).addClass('even');
            } else {
                $(this).addClass('odd');
            }
        });
    };




    $(document).ready(function($){

        /***** Main Services *****/

        function addPaddingFromIcon(){
            $(".main-services .icon.custom i").each(function() {
                $(this).css({"padding-left":"0px", "padding-right":"0px"})
                var iconWidth = $(this).width();
                var iconHeight = $(this).height();
                $(this).css({'margin-right':'0px'});
                if( iconHeight != iconWidth ){
                    if( iconHeight > iconWidth ) {
                        var iconPadding = ( iconHeight - iconWidth ) / 2;
                        var res = Math.round(iconPadding);
                        $(this).css({'padding-left': res+'px', 'padding-right': res+'px' });
                    }else if( iconHeight < iconWidth ) {
                        var iconPadding = ( iconWidth - iconHeight ) / 2;
                        var res = Math.round(iconPadding);
                        $(this).css({'padding-top': iconPadding+'px', 'padding-bottom': iconPadding+'px' });
                    }
                }
            });
        }
        addPaddingFromIcon();

        /***** SF-Menu *****/
        function initSF(){
            $(".sf-menu").superfish({
                delay:  100,
                autoArrows:    true,
                speed: 'fast',
                animation:   {opacity:'show'}
            });
        }
        function addOrRemoveSF(){
            if( $(window).width() < 1000 ){
                $('body').addClass('mobile');
                $('header#top nav').hide();
            } else {
                $('body').removeClass('mobile');
                $('header#top nav').show();
                $('#mobile-menu').hide();
                $('.sf-sub-indicator').css('height',$('a.sf-with-ul').height());
            }
        }
        addOrRemoveSF();
        initSF();
        $(window).resize(addOrRemoveSF);
        //turn dropdown arrows into font awesome
        $('nav > ul.sf-menu > li').each(function(){
            $(this).find(' > a > .sf-sub-indicator').html('<i class="icon-angle-right" style="font-size: 15px;"></i>');
        });
        function SFArrows(){
            $('nav > ul.sf-menu > li > ul li').each(function(){
                $(this).find(' > a > .sf-sub-indicator').html('<i class="icon-angle-right" style="font-size: 15px;"></i>');
            });
            //set height of dropdown arrow
            $('.sf-sub-indicator').css('height',$('a.sf-with-ul').height());
        }
        SFArrows();

        /***************** Nav ******************/
        var logoHeight = parseInt($('#header-outer').attr('data-logo-height'));
        var headerPadding = parseInt($('#header-outer').attr('data-padding'));
        var usingLogoImage = $('#header-outer').attr('data-using-logo');
        if( isNaN(headerPadding) || headerPadding.length == 0 ) { headerPadding = 0; }
        if( isNaN(logoHeight) || usingLogoImage.length == 0 ) { usingLogoImage = false; logoHeight = 35;}

        //inital calculations
        function headerInit() {

            $('#header-outer #logo img').css({ 'height' : logoHeight });
            $('#header-outer').css({ 'padding-top' : headerPadding });

            $('header#top nav > ul > li > a').css({
                'padding-bottom' : '38px',
                'padding-top' : Math.floor( (logoHeight/2) - ($('header#top nav > ul > li > a').height()/2) )
            });
            $("header#top nav > ul li#lens span.lens, header#top nav > ul li#lens span.lens-closed").css({
                'margin-top' : Math.floor( (logoHeight/2) - ($('header#top nav > ul > li > a').height()/2) )
            });
            $('header#top .sf-menu > li > ul, header#top .sf-menu > li.sfHover > ul').css({
                'top' : $('header#top nav > ul > li > a').outerHeight()
            });
            $('#header-space').css('height', $('#header-outer').outerHeight() );
            $('#header-outer .container').css('visibility','visible');
            $('#search-outer').css({ 'height' : logoHeight + headerPadding*2 });
            $('#search-outer > #search input[type="text"]').css({
                'font-size'  : 43,
                'top' : ((logoHeight + headerPadding*2)/2) - $('#search-outer > #search input[type="text"]').height()/2
            });
            $('#search-outer > #search #close a').css({ 'top' : ((logoHeight + headerPadding*2)/2) - 8 });
//            if no image is being used
            if(usingLogoImage == false) $('header#top #logo').css('margin-top','4px');
        }
        //is header resize on scroll enabled?
        var headerResize = $('#header-outer').attr('data-header-resize');
        if( headerResize == 1 ){
            headerInit();
            $(window).bind('scroll',smallNav);
//            if user starts in mobile but resizes to large, don't break the nav
            if($('body').hasClass('mobile')){
                $(window).resize(headerInit);
            }
        } else {
            headerInit();
        }
        function smallNav(){
            var $offset = $(window).scrollTop();
            var $windowWidth = $(window).width();
            var shrinkNum = 6;

            if (logoHeight >= 40 && logoHeight < 60) shrinkNum = 8;
            else if (logoHeight >= 60 && logoHeight < 80) shrinkNum = 10;
            else if (logoHeight >= 80 ) shrinkNum = 14;

            if($offset > 0 && $windowWidth > 1000) {

                $('#header-outer #logo img').stop(true,true).animate({
                    'height' : logoHeight - shrinkNum
                },{queue:false, duration:250, easing: 'easeOutCubic'});

                $('#header-outer').stop(true,true).animate({
                    'padding-top' : headerPadding / 1.8
                },{queue:false, duration:250, easing: 'easeOutCubic'});

                $('header#top nav > ul > li > a').stop(true,true).animate({
                    'padding-bottom' : (((logoHeight-shrinkNum)/2) - ($('header#top nav > ul > li > a').height()/2)) + headerPadding / 1.8,
                    'padding-top' : ((logoHeight-shrinkNum)/2) - ($('header#top nav > ul > li > a').height()/2)
                },{queue:false, duration:250, easing: 'easeOutCubic'});

                $('header#top nav > ul li#search-btn').stop(true,true).animate({
                    'padding-bottom' : Math.floor(((logoHeight-shrinkNum)/2) - ($('header#top nav > ul li#search-btn a').height()/2)),
                    'padding-top' : Math.floor(((logoHeight-shrinkNum)/2) - ($('header#top nav > ul li#search-btn a').height()/2))
                },{queue:false, duration:250, easing: 'easeOutCubic'});

                $('header#top .sf-menu > li > ul, header#top .sf-menu > li.sfHover > ul').stop(true,true).animate({
                    'top' : Math.floor($('header#top nav > ul > li > a').height() + (((logoHeight-shrinkNum)/2) - ($('header#top nav > ul > li > a').height()/2))*2 + headerPadding / 1.8)
                },{queue:false, duration:250, easing: 'easeOutCubic'});
                $('#search-outer').stop(true,true).animate({
                    'height' : (logoHeight-shrinkNum) + headerPadding
                },{queue:false, duration:450, easing: 'easeOutExpo'});
                $('#search-outer > #search input[type="text"]').stop(true,true).animate({
                    'font-size'  : 30,
                    'line-height' : '30px',
                    'top' : ((logoHeight-shrinkNum+headerPadding+5)/2) - ($('#search-outer > #search input[type="text"]').height()-15)/2
                },{queue:false, duration:450, easing: 'easeOutExpo'});
                $('#search-outer > #search #close a, #search-outer > #search #close span').stop(true,true).animate({
                    'top' : ((logoHeight-shrinkNum + headerPadding+5)/2) - 8
                },{queue:false, duration:450, easing: 'easeOutExpo'});
                //if no image is being used
                if(usingLogoImage == false) $('header#top #logo').stop(true,true).animate({
                    'margin-top' : 0
                },{queue:false, duration:450, easing: 'easeOutExpo'});

                $(window).unbind('scroll',smallNav);
                $(window).bind('scroll',bigNav);
            }
        }
        function bigNav(){
            var $offset = $(window).scrollTop();
            var $windowWidth = $(window).width();
            if($offset == 0 && $windowWidth > 1000) {
                $('#header-outer #logo img').stop(true,true).animate({
                    'height' : logoHeight
                },{queue:false, duration:250, easing: 'easeOutCubic'});
                $('#header-outer').stop(true,true).animate({
                    'padding-top' : headerPadding
                },{queue:false, duration:250, easing: 'easeOutCubic'});
                $('header#top nav > ul > li > a').stop(true,true).animate({
                    'padding-bottom' : ((logoHeight/2) - ($('header#top nav > ul > li > a').height()/2)) + headerPadding,
                    'padding-top' : (logoHeight/2) - ($('header#top nav > ul > li > a').height()/2)
                },{queue:false, duration:250, easing: 'easeOutCubic'});
                $('header#top nav > ul li#search-btn').stop(true,true).animate({
                    'padding-bottom' : Math.ceil((logoHeight/2) - ($('header#top nav > ul li#search-btn a').height()/2)),
                    'padding-top' : Math.ceil((logoHeight/2) - ($('header#top nav > ul li#search-btn a').height()/2))
                },{queue:false, duration:250, easing: 'easeOutCubic'});
                $('header#top .sf-menu > li > ul, header#top .sf-menu > li.sfHover > ul').stop(true,true).animate({
                    'top' : $('header#top nav > ul > li > a').height() + (((logoHeight)/2) - ($('header#top nav > ul > li > a').height()/2))*2 + headerPadding
                },{queue:false, duration:250, easing: 'easeOutCubic'});
                $('#search-outer').stop(true,true).animate({
                    'height' : logoHeight + headerPadding*2
                },{queue:false, duration:450, easing: 'easeOutExpo'});
                $('#search-outer > #search input[type="text"]').stop(true,true).animate({
                    'font-size'  : 43,
                    'line-height' : '43px',
                    'top' : ((logoHeight + headerPadding*2)/2) - 30
                },{queue:false, duration:450, easing: 'easeOutExpo'});
                $('#search-outer > #search #close a, #search-outer > #search #close span').stop(true,true).animate({
                    'top' : ((logoHeight + headerPadding*2)/2) - 8
                },{queue:false, duration:450, easing: 'easeOutExpo'});
                //if no image is being used
                if(usingLogoImage == false) $('header#top #logo').stop(true,true).animate({
                    'margin-top' : 4
                },{queue:false, duration:450, easing: 'easeOutExpo'});
                $(window).unbind('scroll',bigNav);
                $(window).bind('scroll',smallNav);
            }
        }
        $('#mobile-menu').css({'display':'none'});
        //responsive nav
        $('#toggle-nav').click(function(){

            $('#mobile-menu').stop(true,true).slideToggle(500);
            return false;
        });
        //append dropdown indicators / give classes
        $('#mobile-menu .container ul li').each(function(){
            if($(this).find('> ul').length > 0) {
                $(this).addClass('has-ul');
                $(this).find('> a').append('<span class="sf-sub-indicator"><i class="icon-angle-right" style="font-size: 15px;"></i></span>');
            }
        });
        //events
        $('#mobile-menu .container ul li:has("> ul") > a').click(function(){
            $(this).parent().toggleClass('open');
            $(this).parent().find('> ul').stop(true,true).slideToggle();
            return false;
        });
        //Added tringle for active li
        $( "#top nav ul li ul.sub-menu ").append( "<span class='menu-tringle'></span>" );
        $( "#top nav ul li ul.sub-menu li ul.sub-menu ").find( " span.menu-tringle ").remove();

        /***** SF-Menu End *****/

        /*****  SF-Menu Lens *****/

        $('span.lens-closed').hide();
        $('.lens').click( function(){
            $('span.lens').hide();
            $(".lens-form, span.lens-closed").fadeIn();
        });
        $('.lens-closed').click( function(){
            $("span.lens-closed").hide();
            $('span.lens').fadeIn();
            $(".lens-form").fadeOut();
        });

        /***** Super Header *****/
        $('#super-header .super-header-hide-wrap').hover(function(){
            $(this).addClass('over');
        }, function(){ $(this).removeClass('over'); } ).click(function(){
                $('#super-header .container .super-header-content').show();
                $('#super-header .container').slideToggle(500);
            }
        );

        /***** Portfolio *****/
        $(' .triangle').css({ opacity: '0'});

        $('#portfolio .col.span_2 .image-hovered').css('opacity', '0').parents('.col.span_2').hover(
            function(){
                $(this).find('.triangle').stop(1, 1).animate({bottom: '+=20', opacity: '1'}, 'fast');
                $(this).find('.portfolio-image-x2 .ico-plus').stop(1, 1).animate({left: '+=31%'}, 'fast');
                $(this).find('.portfolio-image-x2 .ico-link').stop(1, 1).animate({right: '+=31%'}, 'fast');
                $(this).find('.image-hovered').stop(1, 1).animate({opacity: '0.9'}, 'fast');

                $(this).find('.work-meta h4, .work-meta span').stop(1, 1).animate({opacity: '0'}, 100);
                $(this).find('.work-meta p').stop(1, 1).animate({opacity: '0.9', "margin-top": '-40px' }, 'fast');
            },
            function(){
                $(this).find(' .triangle').stop(1, 1).animate({bottom: '-=20', opacity: '0'}, 'fast');
                $(this).find('.portfolio-image-x2 .ico-plus').stop(1, 1).animate({left: '-=31%'}, 'fast');
                $(this).find('.portfolio-image-x2 .ico-link').stop(1, 1).animate({right: '-=31%'}, 'fast');
                $(this).find(' .image-hovered').stop(1, 1).animate({opacity: '0'}, 'fast');

                $(this).find('.work-meta h4, .work-meta span' ).stop(1, 1).animate({opacity: '0.9'}, 100);
                $(this).find('.work-meta p').stop(1, 1).animate({opacity: '0', "margin-top": '-20px' }, 'fast');
            }
        );

        $('#portfolio .col.span_3 .image-hovered').css('opacity', '0').parents('.col.span_3').hover(
            function(){
                $(this).find(' .triangle').stop(1, 1).animate({bottom: '+=20', opacity: '1'}, 'fast');
                $(this).find('.portfolio-image-x3 .ico-plus').stop(1, 1).animate({left: '+=30%'}, 'fast');
                $(this).find('.portfolio-image-x3 .ico-link').stop(1, 1).animate({right: '+=30%'}, 'fast');
                $(this).find(' .image-hovered').stop(1, 1).animate({opacity: '0.9'}, 'fast');

                $(this).find('.work-meta h4, .work-meta span').stop(1, 1).animate({opacity: '0'}, 100);
                $(this).find('.work-meta p').stop(1, 1).animate({opacity: '0.9', "margin-top": '-48px' }, 'fast');
            },
            function(){
                $(this).find(' .triangle').stop(1, 1).animate({bottom: '-=20', opacity: '0'}, 'fast');
                $(this).find('.portfolio-image-x3 .ico-plus').stop(1, 1).animate({left: '-=30%'}, 'fast');
                $(this).find('.portfolio-image-x3 .ico-link').stop(1, 1).animate({right: '-=30%'}, 'fast');
                $(this).find(' .image-hovered').stop(1, 1).animate({opacity: '0'}, 'fast');

                $(this).find('.work-meta h4, .work-meta span' ).stop(1, 1).animate({opacity: '0.9'}, 100);
                $(this).find('.work-meta p').stop(1, 1).animate({opacity: '0', "margin-top": '-24px' }, 'fast');
            }
        );

        $('#portfolio .col.span_4 .image-hovered').css('opacity', '0').parents('.col.span_4').hover(
            function(){
                $(this).find(' .triangle').stop(1, 1).animate({bottom: '+=20', opacity: '1'}, 'fast');
                $(this).find('.portfolio-image-x4 .ico-plus').stop(1, 1).animate({left: '+=29%'}, 'fast');
                $(this).find('.portfolio-image-x4 .ico-link').stop(1, 1).animate({right: '+=29%'}, 'fast');
                $(this).find(' .image-hovered').stop(1, 1).animate({opacity: '0.9'}, 'fast');
            },
            function(){
                $(this).find(' .triangle').stop(1, 1).animate({bottom: '-=20', opacity: '0'}, 'fast');
                $(this).find('.portfolio-image-x4 .ico-plus').stop(1, 1).animate({left: '-=29%'}, 'fast');
                $(this).find('.portfolio-image-x4 .ico-link').stop(1, 1).animate({right: '-=29%'}, 'fast');
                $(this).find(' .image-hovered').stop(1, 1).animate({opacity: '0'}, 'fast');
            }
        );


        /***************** Custom Icon Margin Auto *************/

        $(this).find('.mauto').each( function(i){
            var that = this;
            var nnf = $(this).outerHeight();
            var uhg = $(this).parent().parent().height();
            $(that).css( { "margin-bottom" :  ( ( uhg - nnf ) + 30) + 'px' } );
        } );

        $(window).resize(function(){
            $('.mauto').css( { "margin-bottom" : '0px' } );
            $('.mauto').each( function(i){
                var that = this;
                var nnf = $(this).outerHeight();
                var uhg = $(this).parent().parent().height();
                $(that).css( { "margin-bottom" : ( ( uhg - nnf ) + 30 ) + 'px' } );
            } );
        });



        /***************** Testimonial Slider ******************/

        //fadeIn
        $('.testimonial_slider .slides').append('<div class="testim-prev"></div><div class="testim-next"></div>');
        $('.testimonial_slider').animate({'opacity':'1'},800);

        //testimonial slider controls
        $('body').on('click','.testimonial_slider .controls li', function(){

            if($(this).find('span').hasClass('active')) return false;

            var $index = $(this).index();
            var currentHeight = $(this).parents('.testimonial_slider').find('.slides blockquote').eq($index).height();

            $(this).parents('.testimonial_slider').find('li').html('<span class="pagination-switch"></span>');
            $(this).html('<span class="pagination-switch active"></span>');

            $(this).parents('.testimonial_slider').find('.slides blockquote').stop().css({'opacity':'0', 'left':'-25px', 'z-index': '1'});
            $(this).parents('.testimonial_slider').find('.slides blockquote').eq($index).stop(true,true).animate({'opacity':'1','left':'0'},550,'easeOutCubic').css('z-index','20');
            $(this).parents('.testimonial_slider').find('.slides').stop(true,true).animate({'height' : currentHeight + 20 + 'px' },450,'easeOutCubic');

        });


        var $tallestQuote;

        //create controls
        $('.testimonial_slider').each(function(){

            var tmpThis = $(this);
            $(this).append('<div class="controls"><ul></ul></div>');


            var slideNum = $(this).find('blockquote').length;
            var $that = $(this);

            for(var i=0;i<slideNum;i++) {
                $that.find('.controls ul').append('<li><span class="pagination-switch"></span></li>')
            }

            //activate first slide
            $(this).find('.controls ul li').first().click();

            //autorotate
            if($(this).attr('data-autorotate').length > 0) {
                slide_interval = 10000000000;
                var $that = $(this);
                var $rotate = setInterval(function(){ testimonialRotate($that) },slide_interval);
            }

            $(this).find('.controls li').click(function(e){
                if(typeof e.clientX != 'undefined') clearInterval($rotate);
            });

            //swipe for testimonials
            $(this).swipe({
                swipeLeft : function(e) {
                    $(this).find('.controls ul li span.active').parent().next('li').find('span').trigger('click');
                    e.stopImmediatePropagation();
                    clearInterval($rotate);
                    return false;
                },
                swipeRight : function(e) {
                    $(this).find('.controls ul li span.active').parent().prev('li').find('span').trigger('click');
                    e.stopImmediatePropagation();
                    clearInterval($rotate);
                    return false;
                }
            });


            $('.testim-prev').click(function(e){
                $(this).parent().parent().find('.controls ul li span.active').parent().prev('li').find('span').trigger('click');
                e.stopImmediatePropagation();
                clearInterval($rotate);
                return false;
            });
            $('.testim-next').click(function(e){
                $(this).parent().parent().find('.controls ul li span.active').parent().next('li').find('span').trigger('click');
                e.stopImmediatePropagation();
                clearInterval($rotate);
                return false;
            });

        });

        function testimonialRotate(slider){

            var $testimonialLength = slider.find('li').length;
            var $currentTestimonial = slider.find('.pagination-switch.active').parent().index();
            if( $currentTestimonial+1 == $testimonialLength) {
                slider.find('ul li:first-child').click();
            } else {
                slider.find('.pagination-switch.active').parent().next('li').click();
            }

        }

        function testimonialHeightResize(){
            $('.testimonial_slider').each(function(){
                var $index = $(this).find('.controls ul li span.active').parent().index();
                var currentHeight = $(this).find('.slides blockquote').eq($index).height();
                $(this).find('.slides').stop(true,true).animate({'height' : currentHeight + 20 + 'px' },450,'easeOutCubic');

            });
        }


        $(window).resize( function(){
            testimonialHeightResize()
        });



        /***************** Page Headers ******************/

        var pageHeaderHeight = parseInt($('#page-header-bg').attr('data-height'));
        $('#page-header-bg').css('height',pageHeaderHeight+'px');
        function pageHeader(){
            if(!$('body').hasClass('mobile')){
                $('#page-header-bg .container > .row > .span_6').css('width', '100%');
                pageHeaderHeight = parseInt($('#page-header-bg').attr('data-height'));
                var pageHeadingHeight = $('#page-header-bg .container > .row').height();
                $('#page-header-bg .container > .row').css('top',  ( pageHeaderHeight  - ( pageHeadingHeight - 4 ) ) / 2 );
            } else {
                pageHeaderHeight = parseInt($('#page-header-bg').attr('data-height'));
                var pageHeadingHeight = $('#page-header-bg .container > .row').height();
                $('#page-header-bg .container > .row').css('top', ( pageHeaderHeight  - ( pageHeadingHeight - 4 ) ) / 2 );
            }
            $('#page-header-bg .container > .row').css('visibility','visible');
            var dataTextAlign =  parseInt($('#page-header-bg').attr('data-align'));
            $('#page-header-bg .container > .row > .span_6 ').css('text-align', dataTextAlign);
        }
         function pageHeaderNoBg() {
             var pageHeaderHeight = $('.page-header-no-bg').height();
             var pageHeaderContainerHeight = $('.page-header-no-bg').find('.container').height();
             $('.page-header-no-bg .container').css( 'top', ( ( pageHeaderHeight - pageHeaderContainerHeight ) / 2 ) - 5 );
         }
        pageHeader();
        pageHeaderNoBg();

        $(window).resize( pageHeader );
        $(window).resize( pageHeaderNoBg );



        $("p.nocomments").remove();

        //Columns-hover Popout efect
        $('.columns-hover .col-hover').hover(function(){
            $(this).toggleClass('hover');
        });

        //Init tabs
        $('.tabs').tabs({
            show: {
                opacity: "toggle"
            }
        });

        /***** Resize Tabs *****/
        function resizeTabs() {
            var tws = 0;
            var tabsWidth = $(".tabs").width();
            $(".tabs ul.ui-tabs-nav li").each(function(){
                tws += $(this).find("a.ui-tabs-anchor").width();
                tws += 32;
            });
            tws += 28;

            if( tabsWidth < tws) {
                $(".tabs").addClass('full');
            } else {
                $(".tabs").removeClass('full');
            }


        }
        resizeTabs();
        $(window).smartresize(function(){
            resizeTabs();
        });

        //Init toggles (Accordion)
        $('.accordion').accordion({
            heightStyle: 'content'
        });

        //Add odd/even class to tables
        webuza_add_odd_even_class($('table tbody tr'));

       //Alert Messages init
        $('.alert_message .content span.alert-close').on('click', function(){
            $(this).parents('.alert_message').remove();
        });
        $('.alert_message .content i').hover(
            function(){
                $(this).addClass('hover');
            },
            function(){
                $(this).removeClass('hover');
            }
        );

        //Buttons init
        $('.button').hover(
            function(){
                $(this).addClass('hover');
            },
            function(){
                $(this).removeClass('hover');
            }
        );

        //Bar Graphs init
        $('.bar_graphs .graph').each(function(){
            var $this = $(this);
            var value = parseInt($this.attr('graph-percent'));

            var $graph = $this.progressbar({
                value: 1,
                 create: function(event, ui){

                    var $r3 = $('<div>').addClass('graph-percent').append($('<i class="icon-caret-right"></i>'));

                    $r3.find('i').after(
                        $('<span>').append(
                            $('<span>').text(
                                $this.progressbar('option', 'value') + '%'
                            )
                        )
                    );

                    $(this).find('.ui-progressbar-value').append($r3);

                },
                change: function(event, ui){
                    $(this).find('.ui-progressbar-value .graph-percent span span').text(
                        $this.progressbar('option', 'value') + '%'
                    )
                }
            });
            var graph_progress = setInterval(function() {
                var cur_value = $graph.progressbar('option', 'value');


                var percent = !isNaN(cur_value) ? (cur_value + 1) : 1;
                if (percent > value) {
                    clearInterval(graph_progress);
                    $graph.progressbar({
                        value : value
                    });
                } else {
                    $graph.progressbar({
                        value : percent
                    });
                }
            }, (1000/value));
        });

        //Team Members

        var members = $('.team_members');
        var countMembers = members.length;
        var membersArr = new Array();
        for( var i = 0; i < countMembers; i++ ) {

            var team_members_selector = $(members[i]).find('.team_member');

            webuza_add_odd_even_class($(team_members_selector));
            var team_members_column = $(team_members_selector).length;
            if (team_members_column > 0){
                var columns = $(team_members_selector).parent().attr('class').replace(/(.*)(columns_set\d+)(.*)/i, '$2');
                var column_class = 'col_3';

                switch (columns){
                    case 'columns_set2':
                        column_class = 'col_6';
                        break
                    case 'columns_set3':
                        column_class = 'col_4';
                        break
                    case 'columns_set4':
                        column_class = 'col_3';
                        break
                    case 'columns_set5':
                        column_class = 'col_2';
                        break
                    case 'columns_set6':
                        column_class = 'col_1';
                        break
                }
                var member_index = 0;
                $(team_members_selector).each(function(idx, elm){
                    $(this).addClass(column_class);
                    member_index++;
                    if (member_index == columns){
                        $(this).addClass('col_last');
                        member_index = 0;
                    }
                });

                var member_height = Math.max.apply(
                        null,
                        $(team_members_selector).map(function(){
                            return $(this).children('.team_member_wrap').height();
                        }).get()
                    );
                var member_width = $(team_members_selector).width();

                $(team_members_selector).css({height: member_height + 20}).hover(
                        function(){

                        },
                        function(){

                        }
                    ).parent('.team_members').css('height', member_height + 30)
            }
        }

        //Pricing plan init
        var $prising_plan_columns = $('.prising_plan .prising_plan_column');
        var prising_plan_column_height = 0;
        //Get max height of column
        $prising_plan_columns.each(function(){
            var $this = $(this);
            if ($this.height() > prising_plan_column_height){
                prising_plan_column_height = $this.height()
            }
        });
        //Remove border for next column after highlighted
        $prising_plan_columns.each(function(){
            var $this = $(this);
            webuza_add_odd_even_class($this.find('.content li'));
            if ($this.hasClass('highlighted')){
                $this.next().css({'border-left':'none', 'border-right':'1px solid #ccc'});
                $this.css('height', prising_plan_column_height + 40);
                $this.css('padding-bottom', 80);
            } else {
                $this.css('height', prising_plan_column_height);
            }
        });

        //Our Main Services Init
        $('div.main-services').hover(
            function(){
                $(this).addClass('hover');
            },
            function(){
                $(this).removeClass('hover');
            }
        );



        //Carousel init
        if($('div.carousel .carousel-items').length){
            var carousel_items_number = $('div.carousel .carousel-items').attr('class').replace(/(.*)(items_number_)(\d*)(.*)/, '$3');
            $('div.carousel').flexslider({
                slideshow: false,
                selector: '.carousel-items > .slide',
                animation: 'slide',
                animationLoop: false,
                itemWidth: Math.max.apply(null, $('div.carousel .slide').map(function(){
                    return $(this).width();
                }).get()),
                minItems: carousel_items_number,
                maxItems: carousel_items_number,
                controlNav: false,
                prevText: '',
                nextText: ''
            });
        }

        //Resent Projects init
        $('.recent-projects .col-hover .image-hovered').css('opacity', '0').parents('.col-hover').hover(
            function(){
                $(this).find('.recent-image .triangle').animate({bottom: '+=20'}, 'fast');

                $(this).find('.recent-image .icon-plus').animate({left: '+=60%'}, 'fast');
                $(this).find('.recent-image .icon-link').animate({right: '+=60%'}, 'fast');

                $(this).find('.recent-image .image-hovered').animate({opacity: '0.9'}, 'fast');
            },
            function(){
                $(this).find('.recent-image .triangle').animate({bottom: '-=20'}, 'fast');

                $(this).find('.recent-image .icon-plus').animate({left: '-=60%'}, 'fast');
                $(this).find('.recent-image .icon-link').animate({right: '-=60%'}, 'fast');

                $(this).find('.recent-image .image-hovered').animate({opacity: '0'}, 'fast');
            }
        );

        //Promo Teasers init
        $('.promo-teasers .promo-teaser').hover(
            function(){
                $(this).find('.teaser-title').stop(1, 1).animate({bottom: '-=100'}, 'fast');
                var teaser_content_height = $(this).find('.content').height();

                $(this).find('.content > div').css('margin-top', '-' + teaser_content_height)
                    .parent('.content').css('opacity', 0).show().stop(1, 1).animate({opacity: '1'}, 'slow');
                $(this).find('.teaser-content .triangle').stop(1, 1).animate({bottom: '+=20'}, 'slow');
            },
            function(){
                $(this).find('.teaser-title').stop(1, 1).animate({bottom: '+=100'}, 'slow');
                $(this).find('.content').animate({opacity: '0'}, 'fast');
                $(this).find('.teaser-content .triangle').stop(1, 1).animate({bottom: '-=20'}, 'fast');
            }
        );


        $('.tabs-wrapper').each(function() {
            $(this).find(".tabw_content").hide(); //Hide all content
            $(this).find("div.tabsw div:first").addClass("active").show(); //Activate first tab
            $(this).find(".tabw_content:first").show(); //Show first tab content
        });

        $("#tabs-widget-set div a").click(function(e) {
            $(this).parents('.tabs-wrapper').find("#tabs-widget-set div").removeClass("active"); //Remove any "active" class
            $(this).parent('div').addClass("active"); //Add "active" class to selected tab
            $(this).parents('.tabs-wrapper').find(".tabw_content").hide(); //Hide all tab content

            var activeTab = $(this).attr("href"); //Find the href attribute value to identify the active tab + content

            $(this).parents('.tabs-wrapper').find(activeTab).fadeIn(); //Fade in the active ID content

            e.preventDefault();
        });

        $("div.tabsw div a").click(function(e) {
            e.preventDefault();
        })

        function customArchiveResize(){
            var archiveWidth = $("div.custom_archives").width();
            var leftCollumn = $("ul.archive_left").width();
            var rightCollumn = $("ul.archive_right").width();
            if( archiveWidth < ( leftCollumn + rightCollumn ) ) {
                $("ul.archive_right").css({ "clear": "left", "float":"left" });
            }else if( archiveWidth > ( leftCollumn + rightCollumn ) ) {
                $("ul.archive_right").css({ "clear": "none", "float":"right" });
            }
        }
        customArchiveResize();

        $(window).resize(function(){
            customArchiveResize();
        });


        /***************** Full Width Section ******************/
        function fullWidthSections(){

            var $scrollBar = ($('#ascrail2000').length > 0 && window.innerWidth > 1100) ? -13 : 0;
            var contentHeight ='';

            $justOutOfSight = ( ( parseInt( $('#main').width() ) - parseInt($('.main-content').css('width'))) / 2) - 1;

            $('.full-width-section').each(function(){

                var currentId = $(this).attr("id");

                contentHeight = $('#'+currentId+'.full-width-section .col_main').outerHeight();

                if(!$(this).parent().hasClass('col_8') && !$(this).parent().hasClass('col_4') && $(this).parent().attr('id') != 'sidebar-inner' && $(this).parent().attr('id') != 'portfolio-extra'){
                    $(this).css({
                        'margin-left': - $justOutOfSight,
                        'padding-left': $justOutOfSight,
                        'padding-right': $justOutOfSight,
                        'padding-bottom': '60px',
                        'height': contentHeight,
                        'visibility': 'visible'
                    });
                } else {
                    $(this).css({
                        'margin-left': 0,
                        'padding-left': 0,
                        'padding-right': 0,
                        'padding-bottom': '60px',
                        'height': contentHeight,
                        'visibility': 'visible'
                    });
                }

            });

        }

        fullWidthSections();

        $('.full-width-section .col_main').resize( function(){
            fullWidthSections();
        });

        $(window).resize(function(){
            fullWidthSections();
        });

    });



})(jQuery)

<?php header('Content-type: text/css'); ?>
<?php
/*-------------------------------------------------------------------------*/
/*   Front-end custom styles from theme options and shortcodes
/*-------------------------------------------------------------------------*/

/*-------------------------------------------------------------------------*/
/*	Access WordPress
/*-------------------------------------------------------------------------*/

$absolute_path = __FILE__;
$file_path = explode( 'wp-content', $absolute_path );
require_once( $file_path[0] . '/wp-load.php' );


/* -----  Declare Vars ----- */
$options = webuza_get_options();


/*-------------------------------------------------------------------------*/
/*	Display fonts style from options
/*-------------------------------------------------------------------------*/

if( isset( $options['wbz_typography_use'] ) && $options['wbz_typography_use'] == 'yes' ){

    /* ----- Body ----- */
    webuza_typography_option_renderer( 'body', $options['wbz_typography_body'] );

    /* ----- Navigation & Navigation Dropdown ----- */
    webuza_typography_option_renderer( 'nav#site-navigation', $options['wbz_typography_navigation'] );

    /* ----- Home Slider Caption ----- */
    webuza_typography_option_renderer('.orbit-wrapper', $options['wbz_typography_home_slider'] );

    /* ----- Standard Header ----- */
    webuza_typography_option_renderer( 'header#top', $options['wbz_typography_header'] );

    /* ----- Sidebar, Carousel, Button & Footer Headers ----- */
    webuza_typography_option_renderer( '#footer-outer, #footer-outer .widget, #sidebar, .button, .testimonial_slider', $options['wbz_typography_other'] );

    /* ----- Team Members ----- */
    webuza_typography_option_renderer( '.team_members .member_title, ', $options['wbz_typography_sub-headers'] );
}


/* ----- Back to Top Button ----- */
if ( isset( $options['wbz_gen_back_to_top'] ) && $options['wbz_gen_back_to_top'] == 'yes' ): ?>

    .back-to-top {
        position: fixed;
        width: 49px;
        height: 49px;
        bottom: 15px;
        right: 20px;
        background-color:#a8a8a8;
        border: 1px solid #f3f3f3;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
        -moz-opacity: 0.5;
        -khtml-opacity: 0.5;
        opacity: 0.5;
    }

    .back-to-top a {
        color: #ffffff;
        display: block;
        text-indent: -9999px;
        background: url(../images/arrow-top.png) no-repeat center center transparent;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        -moz-opacity: 1;
        -khtml-opacity: 1;
        opacity: 1;
    }

    .back-to-top:hover {
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        -moz-opacity: 1;
        -khtml-opacity: 1;
        opacity: 1;
    }

<?php endif;


/* ----- Super Header ----- */
if ( webuza_is_superheader_enabled( $options ) ): ?>
    #super-header {
        max-width: 1600px;
        margin: 0 auto;
        padding: 5px 0;
        position:relative;
        background-color: #<?php echo $options['wbz_superheader_bkg_color'] ?>;
    }

    #super-header .container {
        padding: 20px 0;
    }

    .super-header-hide-wrap {
        width: 42px;
        left: 48.7%;
        bottom: -14px;
        cursor: pointer;
        background-color: #<?php echo $options['wbz_superheader_bkg_color'] ?>;
        position: absolute;
        z-index: 9999;
    }

    .super-header-hide {
        text-indent: -9999px;
        background:url(../images/super-header.png) no-repeat 0 0 transparent;
        height: 23px;
    }

    .super-header-hide-wrap.over {
        bottom: -20px;
    }

    .super-header-hide-wrap.over .super-header-hide {
        height: 29px;
        background-position: 0px  -41px;
    }
<?php endif;


/* ----- Accent Color ----- */
if( isset( $options['wbz_gen_accent_color'] ) ): ?>

    /* ----- Background Color ----- */
    thead,
    tfoot,
    .blockquote,
    .jp-play-bar,
    .back-to-top:hover,
    .jp-volume-bar-value,
    #pagination span.current,
    .caroufredsel_prew:hover,
    .caroufredsel_next:hover,
    .tabs ul li.ui-state-active,
    #tabs-widget-set div.active,
    .navigation #all-items a:hover,
    .navigation #next-item a:hover,
    .navigation #prev-item a:hover,
    #pagination a.page-numbers:hover,
    #sidebar .widget .tagcloud a:hover,
    #footer-outer .widget .tagcloud a:hover,
    header#top nav .sf-menu ul li > li.sfHover > a,
    .carousel .flex-direction-nav a.flex-prev:hover,
    .carousel .flex-direction-nav a.flex-next:hover,
    .accordion h3.ui-state-active,
    .accordion h3.ui-state-hover {
        background-color: #<?php echo $options['wbz_gen_accent_color']; ?>;
    }



    /* ----- Background Color ( Important )----- */
    .launch a:hover,
    .sf-menu li ul li a:hover,
    .comment-list .reply a:hover,
    .sf-menu li ul li.sfHover > a,
    .protected-form input.submit:hover {
        background-color: #<?php echo $options['wbz_gen_accent_color']; ?> !important;
    }



    /* ----- Accent Color ----- */
    a.mail,
    a:hover,
    ul#jtwt li a,
    .comment-list em,
    article.error404 h1,
    .tabw_content ul li a,
    .cancel-comment-reply a,
    .post-header h2 a:hover,
    .custom_archives li a:hover,
    header#top nav ul li a:hover,
    header#top nav .sf-menu li.current-menu-item > a,
    header#top nav .sf-menu li.current-menu-ancestor > a,
    .tabs ul li.ui-state-hover a,
    .recent_posts_extra_widget a,
    .recent-posts .block-title h3 a,
    .recent-posts .recent-title h4 a,
    .testimonial_slider blockquote span,
    .carousel-heading .block-title h3 a,
    #wbz-recent-comments .comment-text a,
    .tabw_content ul li a.comment-text-side,
    #sidebar .widget.widget_recent_entries a,
    #footer-outer .widget.widget_recent_entries a,
    .post-meta .post-like a.webuza-love.loved,
    .sociable ul .post-like a.webuza-love.loved,
    #footer-outer .widget.widget_archive ul li a:hover,
    #footer-outer .widget.widget_nav_menu ul li a:hover,
    #footer-outer .widget_recent_comments ul li a:hover,
    #footer-outer .widget.widget_meta ul li a:hover,
    #footer-outer .widget.widget_rss a.rsswidget:hover,
    #footer-outer .widget.widget_categories ul li a:hover,
    #sidebar .widget.widget_archive ul li a:hover,
    #sidebar .widget.widget_nav_menu ul li a:hover,
    #sidebar .widget_recent_comments ul li a:hover,
    #sidebar .widget.widget_meta ul li a:hover,
    #sidebar .widget.widget_rss a.rsswidget:hover,
    #sidebar .widget.widget_categories ul li a:hover,
    #footer-outer .widget.widget_pages ul li a:hover {
        color: #<?php echo $options['wbz_gen_accent_color']; ?>;
    }


    /* ----- Border Accent Color ----- */
    #tabs-widget-set {
        border-bottom: 1px solid #<?php echo $options['wbz_gen_accent_color']; ?>;
    }

    .widget-tab-1.active,
    .widget-tab-2.active,
    .widget-tab-3.active {
        border: 1px solid #<?php echo $options['wbz_gen_accent_color']; ?> !important;
    }

    .tabs.full ul li.ui-state-active {
        border-color: #<?php echo $options['wbz_gen_accent_color']; ?> !important;
    }


    /* ----- Responsive Colors ----- */
    @media only screen and ( min-width : 1px ) and ( max-width : 860px ) {
        #portfolio-filters a.active {
            color: #<?php echo $options['wbz_gen_accent_color']; ?>;
        }
    }

<?php endif;



/*-------------------------------------------------------------------------*/
/*	Display Custom CSS from Options
/*-------------------------------------------------------------------------*/

echo isset( $options['wbz_gen_custom_css'] ) ? $options['wbz_gen_custom_css'] : '';


?>
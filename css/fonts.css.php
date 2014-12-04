<?php header("Content-type: text/css; charset=utf-8");

// Access WordPress
$absolute_path = __FILE__;
$path_to_file = explode( 'wp-content', $absolute_path );
$path_to_wp = $path_to_file[0];

require_once( $path_to_wp . '/wp-load.php' );
$options = webuza_get_options();

$_body = $options['wbz_typography_body']['font'];
$_body_size = $options['wbz_typography_body']['size'];
$_body_style = $options['wbz_typography_body']['style'];

$_navigation = $options['wbz_typography_navigation']['font'];
$_navigation_size = $options['wbz_typography_navigation']['size'];
$_navigation_style = $options['wbz_typography_navigation']['style'];

$_home_slider = $options['wbz_typography_home_slider']['font'];
$_home_slider_size = $options['wbz_typography_home_slider']['size'];
$_home_slider_style = $options['wbz_typography_home_slider']['style'];

$_standard_header = $options['wbz_typography_header']['font'];
$_standard_header_size = $options['wbz_typography_header']['size'];
$_standard_header_style  = $options['wbz_typography_header']['style'];

$_sidebar_carousel_footer_header = $options['wbz_typography_other']['font'];
$_sidebar_carousel_footer_header_size = $options['wbz_typography_other']['size'];
$_sidebar_carousel_footer_header_style = $options['wbz_typography_other']['style'];

$_team_member = $options['wbz_typography_sub-headers']['font'];
$_team_member_size = $options['wbz_typography_sub-headers']['size'];
$_team_member_style = $options['wbz_typography_sub-headers']['style'];

/*-------------------------------------------------------------------------*/
/*	Body Font
/*-------------------------------------------------------------------------*/
?>
body, p
{
    <?php if( $_body != null) echo 'font-family: '. $_body .';'; ?>
    <?php if( $_body_size != null ) echo 'font-size: '. $_body_size .' !important;'; ?>
    <?php if( $_body_style != null ) {
        if( $_body_style == 'bold' ||$_body_style == 'bolder' ) {
            echo 'font-weight: '. $_body_style .' !important;';
        } else {
            echo 'font-style: '. $_body_style .' !important;';
        }
    } ?>
    <?php if( $_body_size != null && ( intval( $_body_size ) ) > 20 ) echo 'line-height: '. ( intval( $_body_size ) + 4 ) .'px !important;'; ?>

}
<?php
/*-------------------------------------------------------------------------*/
/*	Navigation and Navigation Dropdown Font
/*-------------------------------------------------------------------------*/
?>
header#top nav > ul > li > a,
#mobile-menu ul > li > a
{
    <?php if( $_navigation != null ) echo 'font-family: '. $_navigation .';'; ?>
    <?php if( $_navigation_size != null ) echo 'font-size: '. $_navigation_size .';'; ?>
    <?php if( $_navigation_style != null ) {
            if( $_navigation_style == 'bold' || $_navigation_style == 'bolder' ) {
                echo 'font-weight: '. $_navigation_style .' !important;';
            } else {
                echo 'font-style: '. $_navigation_style .' !important;';
            }
        } ?>
}
<?php
/*-------------------------------------------------------------------------*/
/*	Home Slider Caption Font
/*-------------------------------------------------------------------------*/

/*-------------------------------------------------------------------------*/
/*	Standard Header Font
/*-------------------------------------------------------------------------*/
?>
h1, h2, h3, h4, h5, h6,
#single-header,
#portfolio.portfolio-items h4,
.recent-posts .block-title h3 a,
.recent-posts .recent-title h4 a,
#author-content .author-info h3 {
<?php if( $_standard_header != null ) echo 'font-family: '. $_standard_header .';'; ?>
<?php if( $_standard_header_style != null ) {
    if( $_standard_header_style == 'bold' || $_standard_header_style == 'bolder' ) {
        echo 'font-weight: '. $_standard_header_style .' !important;';
    } else {
        echo 'font-style: '. $_standard_header_style .' !important;';
    }
} ?>
}

h1 {
    <?php if( $_standard_header_size != null ) echo 'font-size: '. ( 30 + intval( $_standard_header_size ) ) .'px;'; ?>
    <?php if( $_standard_header_size != null ) echo 'line-height: '. ( 30 + intval( $_standard_header_size ) ) .'px;'; ?>
}
h2 {
    <?php if( $_standard_header_size != null ) echo 'font-size: '. ( 24 + intval( $_standard_header_size ) ) .'px;'; ?>
    <?php if( $_standard_header_size != null ) echo 'line-height: '. ( 24 + intval( $_standard_header_size ) ) .'px;'; ?>
}
#author-content .author-info h3,
.recent-posts .block-title h3 a,
h3 {
    <?php if( $_standard_header_size != null ) echo 'font-size: '. ( 21 + intval( $_standard_header_size ) ) .'px;'; ?>
    <?php if( $_standard_header_size != null ) echo 'line-height: '. ( 21 + intval( $_standard_header_size ) ) .'px;'; ?>
}
.recent-posts .recent-title h4 a,
#portfolio.portfolio-items h4,
h4 {
    <?php if( $_standard_header_size != null ) echo 'font-size: '. ( 18 + intval( $_standard_header_size ) ) .'px;'; ?>
    <?php if( $_standard_header_size != null ) echo 'line-height: '. ( 18 + intval( $_standard_header_size ) ) .'px;'; ?>
}
h5 {
    <?php if( $_standard_header_size != null ) echo 'font-size: '. ( 16 + intval( $_standard_header_size ) ) .'px;'; ?>
    <?php if( $_standard_header_size != null ) echo 'line-height: '. ( 16 + intval( $_standard_header_size ) ) .'px;'; ?>
}
h6 {
    <?php if( $_standard_header_size != null ) echo 'font-size: '. ( 15 + intval( $_standard_header_size ) ) .'px;'; ?>
    <?php if( $_standard_header_size != null ) echo 'line-height: '. ( 15 + intval( $_standard_header_size ) ) .'px;'; ?>
}



<?php
/*-------------------------------------------------------------------------*/
/*	Sidebar, Carouse, Footer, Header Font
/*-------------------------------------------------------------------------*/
?>
#footer-outer h4.widget-title,
#sidebar h4 {
    <?php if( $_sidebar_carousel_footer_header != null) echo 'font-family: '. $_sidebar_carousel_footer_header .';'; ?>
    <?php if( $_sidebar_carousel_footer_header_size != null ) echo 'font-size: '. $_sidebar_carousel_footer_header_size .';'; ?>
}

#sidebar .widget.widget_recent_entries a,
#sidebar .recent_posts_extra_widget a,
.tabw_content ul li a {
    <?php if( $_sidebar_carousel_footer_header != null) echo 'font-family: '. $_sidebar_carousel_footer_header .';'; ?>
}

<?php
/*-------------------------------------------------------------------------*/
/*	Team member Font
/*-------------------------------------------------------------------------*/
?>
.team_members .member_title h4 a
{
    <?php if( $_team_member != null) echo 'font-family: '. $_team_member .';'; ?>
    <?php if( $_team_member_size != null) echo 'font-size: '. $_team_member_size .' !important;'; ?>
    <?php if( $_team_member_style != null ) {
        if( $_team_member_style == 'bold' || $_team_member_style == 'bolder' ) {
           echo 'font-weight: '. $_team_member_style .' !important;';
        } else {
            echo 'font-style: '. $_team_member_style .' !important;';
        }
    } ?>

}




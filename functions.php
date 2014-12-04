<?php

// Define the theme version
if ( ! defined( 'SHOESTRAP_VERSION' ) ) {
	define( 'SHOESTRAP_VERSION', '3.2.9' );
}

if ( class_exists( 'BuddyPress' ) ) {
	require_once locate_template( '/lib/buddypress.php' );
}

if ( ! defined( 'SS_FRAMEWORK' ) ) {
	// Define bootstrap as the default framework.
	// Other frameworks can be added via plugins and override this.
	define( 'SS_FRAMEWORK', 'bootstrap' );
}

// define the 'SHOESTRAP_ASSETS_URL' constant.
if ( ! defined( 'SHOESTRAP_ASSETS_URL' ) ) {
	$shoestrap_assets_url = str_replace( 'http:', '', get_template_directory_uri() . '/assets' );
	$shoestrap_assets_url = str_replace( 'https:', '', $shoestrap_assets_url );
	define( 'SHOESTRAP_ASSETS_URL', $shoestrap_assets_url );
}

/*
 * The option that is used by Shoestrap in the database for all settings.
 *
 * This can be overriden by adding this in your wp-config.php:
 * define( 'SHOESTRAP_OPT_NAME', 'custom_option' )
 */
if ( ! defined( 'SHOESTRAP_OPT_NAME' ) ) {
	define( 'SHOESTRAP_OPT_NAME', 'shoestrap' );
}

global $ss_settings;
$ss_settings = get_option( SHOESTRAP_OPT_NAME );

do_action( 'shoestrap_include_files' );

require_once locate_template( '/lib/class-Shoestrap_Color.php' );
require_once locate_template( '/lib/class-Shoestrap_Image.php' );
require_once locate_template( '/lib/functions-core.php' );

// Get the framework
require_once locate_template( '/framework/class-SS_Framework.php' );

require_once locate_template( '/lib/template.php' );       // Custom get_template_part function.
require_once locate_template( '/lib/utils.php' );          // Utility functions
require_once locate_template( '/lib/init.php' );           // Initial theme setup and constants
require_once locate_template( '/lib/wrapper.php' );        // Theme wrapper class
require_once locate_template( '/lib/sidebar.php' );        // Sidebar class
require_once locate_template( '/lib/footer.php' );         // Footer configuration
require_once locate_template( '/lib/config.php' );         // Configuration
require_once locate_template( '/lib/titles.php' );         // Page titles
require_once locate_template( '/lib/cleanup.php' );        // Cleanup
require_once locate_template( '/lib/comments.php' );       // Custom comments modifications
require_once locate_template( '/lib/meta.php' );           // Tags
require_once locate_template( '/lib/widgets.php' );        // Sidebars and widgets
require_once locate_template( '/lib/post-formats.php' );   // Sidebars and widgets
require_once locate_template( '/lib/scripts.php' );        // Scripts and stylesheets
require_once locate_template( '/lib/deprecated.php' );     // Deprecated functions

// Only load TGM if REDUX is not installed
if ( ! class_exists( 'ReduxFramework' ) ) {
	require_once locate_template( '/lib/class-TGM_Plugin_Activation.php' ); // TGM_Plugin_Activation
	require_once locate_template( '/lib/dependencies.php' );                // load our dependencies
} elseif ( file_exists( dirname( __FILE__ ) . '/framework/redux/custom-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/framework/redux/custom-config.php' );
}

// Setup our custom updater
if ( file_exists( locate_template( '/lib/updater/updater.php' ) ) ) {
	require_once locate_template( '/lib/updater/updater.php' );
}

if ( class_exists( 'bbPress' ) ) {
	require_once locate_template( '/lib/bbpress.php' );
}

require_once locate_template( '/override/actions.php' );   // custom actions
require_once locate_template( '/override/nav.php' );       // Cleaner walker for wp_nav_menu
require_once locate_template( '/override/shortcodes.php' );// Cleaner walker for wp_nav_menu









#-----------------------------------------------------------------#
# Default theme constants
#-----------------------------------------------------------------#
define('WEBUZA_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/');
define('WEBUZA_DIRECTORY_URI', get_template_directory_uri() . '/');
define('WEBUZA_THEME_NAME', 'webuza');
define('WEBUZA_THEME_SHORT_NAME', 'wbz');

#-----------------------------------------------------------------#
# Registered Webuza Menus
#-----------------------------------------------------------------#
function register_webuza_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_webuza_menus' );

#-----------------------------------------------------------------#
# Register/Enqueue JS
#-----------------------------------------------------------------#
/*function webuza_main_js() {

    // Register
    wp_register_script( 'live-query', get_template_directory_uri() . '/js/jquery.livequery.js', 'jquery', '6.2', TRUE);
    wp_register_script( 'query-timer', get_template_directory_uri() . '/js/jquery.timers.js', 'jquery', '6.2', TRUE);
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', 'jquery', '1.8.3' );
    wp_register_script( 'jquery-ui-tabs', get_template_directory_uri() . '/js/jquery/ui/jquery.ui.tabs.min.js', array('jquery'), '1.9.2' );
    wp_register_script( 'jquery-ui-tooltip', get_template_directory_uri() . '/js/jquery/ui/jquery.ui.tooltip.min.js', array('jquery'), '1.9.2' );
    wp_register_script( 'jquery-flexslider', get_template_directory_uri() . '/js/jquery.flexslider/jquery.flexslider-min.js', array('jquery'), '2.1' );
    wp_register_script( 'jplayer', get_template_directory_uri() . '/js/jplayer.min.js', 'jquery', '2.1', TRUE );
    wp_register_script( 'portfolio', get_template_directory_uri() . '/js/portfolio/filterable.js', 'jquery' );
    wp_register_script( 'social', get_template_directory_uri() . '/js/social.js', '1.0', TRUE );
    wp_register_script( 'isotope', get_template_directory_uri() . '/js/isotope.min.js', 'jquery', '1.5.25' ,TRUE );
    wp_register_script( 'superfish', get_template_directory_uri() . '/js/superfish.js', 'jquery' );
    wp_register_script( 'light-box', get_template_directory_uri() . '/js/lightbox/lightbox-2.6.min.js', 'jquery' );
    wp_register_script( 'orbit', get_template_directory_uri() . '/js/orbit.js', 'jquery', '1.2.3', TRUE);
    wp_register_script( 'carouFredSel', get_template_directory_uri() . '/js/carouFredSel.min.js', 'jquery', '6.2', TRUE);


    // Enqueue
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'live-query' );
    wp_enqueue_script( 'query-timer' );
    wp_enqueue_script( 'main' );
    wp_enqueue_script( 'jplayer' );
    wp_enqueue_script( 'jquery-effects-core' );
    wp_enqueue_script( 'jquery-effects-drop' );
    wp_enqueue_script( 'jquery-effects-slide' );
    wp_enqueue_script( 'jquery-ui-tabs' );
    wp_enqueue_script( 'jquery-ui-tooltip' );
    wp_enqueue_script( 'jquery-flexslider' );
    wp_enqueue_script( 'jquery-ui-accordion' );
    wp_enqueue_script( 'jquery-ui-progressbar' );
    wp_enqueue_script( 'portfolio' );
    wp_enqueue_script( 'carouFredSel' );
    wp_enqueue_script( 'social' );
    wp_enqueue_script( 'isotope' );
    wp_enqueue_script( 'superfish' );
    wp_enqueue_script( 'light-box' );

}*/
//add_action('wp_enqueue_scripts', 'webuza_main_js');

#-----------------------------------------------------------------#
# Google Fonts
#-----------------------------------------------------------------#
require_once("options/google-fonts.php");

#-----------------------------------------------------------------#
# Custom Avatar
#-----------------------------------------------------------------#
add_filter( 'avatar_defaults', 'custom_avatar' );

function custom_avatar ($avatar_defaults) {
    $themeAvatar = get_bloginfo('template_directory') .'/images/custom-avatar.png';
    $avatar_defaults[$themeAvatar] = "Webuza Avatar";
    return $avatar_defaults;
}

#-----------------------------------------------------------------#
# Excerpt related
#-----------------------------------------------------------------#

function excerpt_length( $length ) {
    return 90;
}

add_filter( 'excerpt_length', 'excerpt_length', 999 );

#-----------------------------------------------------------------#
# Post formats
#-----------------------------------------------------------------#

add_theme_support( 'post-formats', array('quote','video','audio','gallery','link') );

#-----------------------------------------------------------------#
# Image sizes
#-----------------------------------------------------------------#

add_theme_support( 'post-thumbnails' );
add_image_size( 'blog-widget', 50, 50, true );
add_image_size( 'portfolio-4x', 252, 161, true );
add_image_size( 'portfolio-3x', 346, 221, true );
add_image_size( 'portfolio-2x', 533, 341, true );
add_image_size( 'portfolio-thumb', 600, 403, true );
add_image_size( 'portfolio-widget', 100, 100, true );
add_image_size( 'recent-portfolio-thumb', 100, 100, true );
add_image_size( 'recent-thumb', 346, 221, true );

//thumb for Promo Teaser
add_image_size( 'promo-teaser-2', 534, 281, true );
add_image_size( 'promo-teaser-3', 342, 183, true );
add_image_size( 'promo-teaser-22', 535, 281, true );
add_image_size( 'promo-teaser-33', 348, 183, true );
add_image_size( 'promo-teaser-77', 348, 228, true );

#-----------------------------------------------------------------#
# Load text domain
#-----------------------------------------------------------------#

add_action('after_setup_theme', 'lang_setup');
function lang_setup(){

    load_theme_textdomain( WEBUZA_THEME_NAME, get_template_directory() . '/lang' );

}

#-----------------------------------------------------------------#
# Add multiple thumbnail support
#-----------------------------------------------------------------#
include("assets/functions/multi-post-thumbnails/multi-post-thumbnails.php");

#-----------------------------------------------------------------#
# Register/Enqueue CSS
#-----------------------------------------------------------------#
function webuza_main_styles() {

    $template_dir = get_bloginfo('template_directory');

    // Register
    wp_register_style( 'main-styles', get_stylesheet_directory_uri() .'/style.css' );
    wp_register_style( 'webuza', get_template_directory_uri() .'/css/webuza.css' );
    wp_register_style( 'options-styles', get_stylesheet_directory_uri() .'/css/style.css.php', array('main-styles', 'webuza' ));
    wp_register_style( 'jquery-flexslider-styles', get_stylesheet_directory_uri() .'/css/jquery.flexslider/flexslider.css', array('main-styles', 'webuza' ));
    wp_register_style( 'webuza-font-awesome', get_template_directory_uri() .'/css/font-awesome.min.css', array('main-styles', 'webuza' ));
    wp_register_style( 'light-box', get_template_directory_uri() .'/css/lightbox.css', array('main-styles', 'webuza' ));
    wp_register_style( 'responsive', get_template_directory_uri() .'/css/responsive.css', array('main-styles', 'webuza' ));
    wp_register_style( 'caroufredsel', get_template_directory_uri() .'/css/caroufredsel.css', array('main-styles', 'webuza' ));

    // Enqueue
    wp_enqueue_style( 'main-styles' );
    wp_enqueue_style( 'webuza' );
    wp_enqueue_style( 'options-styles' );
    wp_enqueue_style( 'jquery-flexslider-styles' );
    wp_enqueue_style( 'webuza-font-awesome' );
    wp_enqueue_style( 'light-box' );
    wp_enqueue_style( 'responsive' );
    wp_enqueue_style( 'caroufredsel' );

    $options = webuza_get_options();
    if(!empty($options['wbz_typography_use']) && $options['wbz_typography_use'] == 'yes'){
        wp_register_style('dynamic-fonts', get_stylesheet_directory_uri() . '/css/fonts.css.php', 'style');
        wp_enqueue_style('dynamic-fonts');
    }
    //IE
    global $wp_styles;
    $wp_styles->add_data("ie8", 'conditional', 'lt IE 9');
}

add_action('wp_print_styles', 'webuza_main_styles');



function webuza_page_specific_js() {
    //home
    if ( is_page_template('page-template-home-slider.php') || is_page_template('template-home-5.php') ) {
        wp_enqueue_script( 'orbit' );
        wp_register_style( 'orbit-css', get_template_directory_uri() .'/css/orbit.css' );
        wp_enqueue_style( 'orbit-css' );
    }
    //comments
    if ( is_singular() && comments_open() && get_option('thread_comments') ) wp_enqueue_script('comment-reply');

    //contacts
    if ( is_page_template( 'template-contact.php') ) {
        wp_register_script('googleMaps', 'https://maps.google.com/maps/api/js?sensor=false', NULL, NULL, TRUE);
        wp_register_script('webuzaLocationMap', get_template_directory_uri() . '/js/map.js', array('jquery', 'googleMaps'), '1.0', TRUE);

        wp_enqueue_script('googleMaps');
        wp_enqueue_script('webuzaLocationMap');
    }

    //home slider mediaElement
    if ( is_page_template( 'page-template-home-slider.php') ) {

        if ( floatval( get_bloginfo('version') ) >= "3.6" ) {
            wp_enqueue_script('wp-mediaelement');
            wp_enqueue_style('wp-mediaelement');
        } else {

            //register media element for WordPress 3.5
            wp_register_script('wp-mediaelement', get_template_directory_uri() . '/js/mediaelement-and-player.min.js', array('jquery'), '1.0', TRUE);
            wp_register_style('wp-mediaelement', get_template_directory_uri() . '/css/mediaelementplayer.min.css');

            wp_enqueue_script('wp-mediaelement');
            wp_enqueue_style('wp-mediaelement');
        }
    }
}
add_action('wp_enqueue_scripts', 'webuza_page_specific_js');

#-----------------------------------------------------------------#
#  Include options;
#  Include ShortCodes;
#-----------------------------------------------------------------#

/* Include admin */
if (is_admin()) {
    include('options/init.php');
    include('shortcodes/tinymce/init.php');
}

/* Include front-end */
if(!is_admin()){
    include ('options/front-init.php');
    include ('shortcodes/front-init.php');
}

#-----------------------------------------------------------------#
# Custom page header
#-----------------------------------------------------------------#

if ( !function_exists( 'webuza_page_header' ) ) {
    function webuza_page_header( $postid ) {

        global $options;
        global $post;

        $bg = get_post_meta( $postid, '_webuza_header_bg', true );
        $title = get_post_meta( $postid, '_webuza_header_title', true );
        $subtitle = get_post_meta( $postid, '_webuza_header_subtitle', true );
        $height = get_post_meta( $postid, '_webuza_header_bg_height', true );
        $align = get_post_meta( $postid, '_webuza_header_align', true );

?>
        <?php if( !empty( $bg ) ){ ?>
            <div id="page-header-bg" data-height="<?php echo (!empty( $height )) ? $height : '350'; ?>" style="background-image: url(<?php echo $bg; ?>); height: <?php echo $height;?>px; text-align: <?php echo $align; ?>;">
                <div class="container">
                    <div class="row">
                        <div class="col span_6">
                            <h1><?php echo $title; ?></h1>
                            <span class="subheader"><?php echo $subtitle; ?></span>
                        </div>


                    </div>
                </div>
            </div>

        <?php } elseif( !empty( $title ) ){ ?>
            <div class="page-header-no-bg">
                <div class="container">
                    <div class="section-title">
                        <h1><?php echo $title; ?><?php if(!empty($subtitle)) echo '<span>' . $subtitle . '</span>'; ?></h1>
                    </div>
                </div>
            </div>
        <?php } ?>

<?php
    }
}


#-----------------------------------------------------------------#
# Post gallery
#-----------------------------------------------------------------#

if ( !function_exists( 'webuza_gallery' ) ) {
    function webuza_gallery( $postid ) {

        if ( class_exists( 'MultiPostThumbnails' ) ) { ?>

            <div class="flexslider">
                <ul class="slides">
                    <?php if ( has_post_thumbnail() ) { echo '<li>' . get_the_post_thumbnail($postid, 'full', array('title' => '')) . '</li>'; } ?>

                    <?php
                    if( MultiPostThumbnails::has_post_thumbnail( get_post_type(), 'second-slide' )) { echo '<li>' . MultiPostThumbnails::get_the_post_thumbnail( get_post_type(), 'second-slide' ) . '</li>'; }
                    if( MultiPostThumbnails::has_post_thumbnail( get_post_type(), 'third-slide' )) { echo '<li>' . MultiPostThumbnails::get_the_post_thumbnail( get_post_type(), 'third-slide' ) . '</li>'; }
                    if( MultiPostThumbnails::has_post_thumbnail( get_post_type(), 'fourth-slide' )) { echo '<li>' . MultiPostThumbnails::get_the_post_thumbnail( get_post_type(), 'fourth-slide' ) . '</li>'; }
                    if( MultiPostThumbnails::has_post_thumbnail( get_post_type(), 'fifth-slide' )) { echo '<li>' . MultiPostThumbnails::get_the_post_thumbnail( get_post_type(), 'fifth-slide' ) . '</li>'; }
                    if( MultiPostThumbnails::has_post_thumbnail( get_post_type(), 'sixth-slide' )) { echo '<li>' . MultiPostThumbnails::get_the_post_thumbnail( get_post_type(), 'sixth-slide' ) . '</li>'; }
                    ?>

                </ul>
            </div>
        <?php }

    }

}
#-----------------------------------------------------------------#
# Post audio
#-----------------------------------------------------------------#

if ( !function_exists( 'webuza_audio' ) ) {
    function webuza_audio($postid) {

        $mp3 = get_post_meta( $postid, '_webuza_audio_mp3', true );
        $ogg = get_post_meta( $postid, '_webuza_audio_ogg', true );
        ?>

        <script type="text/javascript">

            jQuery(document).ready(function($){

                if( $().jPlayer ) {
                    $("#jquery_jplayer_<?php echo $postid; ?>").jPlayer({
                        ready: function () {
                            $(this).jPlayer("setMedia", {
                                <?php if($mp3 != '') : ?>
                                mp3: "<?php echo $mp3; ?>",
                                <?php endif; ?>
                                <?php if($ogg != '') : ?>
                                oga: "<?php echo $ogg; ?>",
                                <?php endif; ?>
                                end: ""
                            });
                        },
                        <?php if( !empty($poster) ) { ?>
                        size: {
                            width: "<?php echo $width; ?>px",
                            height: "<?php echo $height . 'px'; ?>"
                        },
                        <?php } ?>
                        swfPath: "<?php echo get_template_directory_uri(); ?>/js",
                        cssSelectorAncestor: "#jp_interface_<?php echo $postid; ?>",
                        supplied: "<?php if($ogg != '') : ?>oga,<?php endif; ?><?php if($mp3 != '') : ?>mp3, <?php endif; ?> all"
                    });

                }
            });
        </script>

        <div id="jquery_jplayer_<?php echo $postid; ?>" class="jp-jplayer jp-jplayer-audio"></div>

        <div class="jp-audio-container">
            <div class="jp-audio">
                <div id="jp_interface_<?php echo $postid; ?>" class="jp-interface">
                    <ul class="jp-controls">
                        <li><a href="#" class="jp-play" tabindex="1">play</a></li>
                        <li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
                        <li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
                        <li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
                    </ul>
                    <div class="jp-progress">
                        <div class="jp-seek-bar">
                            <div class="jp-play-bar"></div>
                        </div>
                    </div>
                    <div class="jp-volume-bar-container">
                        <div class="jp-volume-bar">
                            <div class="jp-volume-bar-value"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
}


#-----------------------------------------------------------------#
# Post video
#-----------------------------------------------------------------#
if ( !function_exists( 'webuza_video' ) ) {
    function webuza_video( $postid ) {

        $m4v = get_post_meta($postid, '_webuza_video_m4v', true);
        $ogv = get_post_meta($postid, '_webuza_video_ogv', true);
        $poster = get_post_meta($postid, '_webuza_video_poster', true);

        ?>
        <script type="text/javascript">
            jQuery(document).ready(function($){

                if( $().jPlayer ) {
                    $("#jquery_jplayer_<?php echo $postid; ?>").jPlayer({
                        ready: function () {
                            $(this).jPlayer("setMedia", {
                                <?php if($m4v != '') : ?>
                                m4v: "<?php echo $m4v; ?>",
                                <?php endif; ?>
                                <?php if($ogv != '') : ?>
                                ogv: "<?php echo $ogv; ?>",
                                <?php endif; ?>
                                <?php if ($poster != '') : ?>
                                poster: "<?php echo $poster; ?>"
                                <?php else: ?>
                                poster: "<?php echo get_template_directory_uri().'/images/no-video-img.png'; ?>"
                                <?php endif; ?>
                            });
                        },
                        size: {
                            width: "100%",
                            height: "auto"
                        },
                        swfPath: "<?php echo get_template_directory_uri(); ?>/js",
                        cssSelectorAncestor: "#jp_interface_<?php echo $postid; ?>",
                        supplied: "<?php if($m4v != '') : ?>m4v, <?php endif; ?><?php if($ogv != '') : ?>ogv, <?php endif; ?> all"
                    });
                }
            });
        </script>

        <div id="jquery_jplayer_<?php echo $postid; ?>" class="jp-jplayer jp-jplayer-video"> <img src="<?php echo get_template_directory_uri().'/img/no-video-img.png'; ?>" alt="video" /> </div>

        <div class="jp-video-container">
            <div class="jp-video">
                <div id="jp_interface_<?php echo $postid; ?>" class="jp-interface">
                    <ul class="jp-controls">
                        <li><div class="seperator-first"></div></li>
                        <li><div class="seperator-second"></div></li>
                        <li><a href="#" class="jp-play" tabindex="1">play</a></li>
                        <li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
                        <li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
                        <li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
                    </ul>
                    <div class="jp-progress">
                        <div class="jp-seek-bar">
                            <div class="jp-play-bar"></div>
                        </div>
                    </div>
                    <div class="jp-volume-bar-container">
                        <div class="jp-volume-bar">
                            <div class="jp-volume-bar-value"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    <?php }
}

//default video size
$content_width = 1080;


#-----------------------------------------------------------------#
# Except Analog
#-----------------------------------------------------------------#
function kama_excerpt($args=''){
    global $post;
    parse_str($args, $i);
    $maxchar     = isset($i['maxchar']) ?  (int)trim($i['maxchar'])     : 350;
    $text        = isset($i['text']) ?          trim($i['text'])        : '';
    $save_format = isset($i['save_format']) ?   trim($i['save_format'])         : false;
    $echo        = isset($i['echo']) ?          false                   : true;

    if (!$text){
        $out = $post->post_excerpt ? $post->post_excerpt : $post->post_content;
        $out = preg_replace ("!\[/?.*\]!U", '', $out );
        // for more tag <!--more-->
        if( !$post->post_excerpt && strpos($post->post_content, '<!--more-->') ){
            preg_match ('/(.*)<!--more-->/s', $out, $match);
            $out = str_replace("\r", '', trim($match[1], "\n"));
            $out = preg_replace( "!\n\n+!s", "</p><p>", $out );
            $out = "<p>". str_replace( "\n", "<br />", $out ) ."</p>";
            if ($echo)
                return print $out;
            return $out;
        }
    }

    $out = $text.$out;
    if (!$post->post_excerpt)
        $out = strip_tags($out, $save_format);

    if ( iconv_strlen($out, 'utf-8') > $maxchar ){
        $out = iconv_substr( $out, 0, $maxchar, 'utf-8' );
        $out = preg_replace('@(.*)\s[^\s]*$@s', '\\1 ...', $out);
    }

    if($save_format){
        $out = str_replace( "\r", '', $out );
        $out = preg_replace( "!\n\n+!", "</p><p>", $out );
        $out = "<p>". str_replace ( "\n", "<br />", trim($out) ) ."</p>";
    }

    if($echo) return print $out;
    return $out;
}

#-----------------------------------------------------------------#
# Post Comment
#-----------------------------------------------------------------#

if ( !function_exists( 'webuza_comment' ) ) {
    function webuza_comment( $comment, $args, $depth, $post ) {
        global $post;
        $GLOBALS['comment'] = $comment; ?>


        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
            <div id="comment-<?php comment_ID(); ?>">
                <div class="comment-author vcard">
                    <?php echo get_avatar( $comment, $size = '64' ); ?>
                </div>

                <?php  if ( $comment->user_id === $post->post_author ): ?>
                    <div class="custom-comment-author">
                <?php else:  ?>
                    <div class="custom-comment-webuza">
                <?php endif; ?>

                    <?php if ( $comment->comment_approved == '0' ) : ?>
                        <em><?php _e('Your comment is awaiting moderation.') ?></em>
                        <br />
                    <?php endif; ?>

                    <?php comment_text() ?>

                    <div class="comment-meta commentmetadata"><?php printf( __('<cite class="fn">%s</cite>'), get_comment_author_link()) ?><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time() ) ?></a></div>

                    <div class="reply">
                        <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                    </div>

                </div>

            </div>
        </li>
    <?php
    }
}

#-----------------------------------------------------------------#
# Create admin portfolio section
#-----------------------------------------------------------------#
function portfolio_register() {

    $portfolio_labels = array(
        'name' => __( 'Portfolio', 'taxonomy general name', WEBUZA_THEME_NAME ),
        'singular_name' => __( 'Portfolio Item', WEBUZA_THEME_NAME ),
        'search_items' =>  __( 'Search Portfolio Items', WEBUZA_THEME_NAME ),
        'all_items' => __( 'Portfolio', WEBUZA_THEME_NAME ),
        'parent_item' => __( 'Parent Portfolio Item', WEBUZA_THEME_NAME ),
        'edit_item' => __( 'Edit Portfolio Item', WEBUZA_THEME_NAME ),
        'update_item' => __( 'Update Portfolio Item', WEBUZA_THEME_NAME ),
        'add_new_item' => __( 'Add New Portfolio Item', WEBUZA_THEME_NAME )
    );

    $options = get_option('salient');
    $custom_slug = null;

    if( !empty( $options['portfolio_rewrite_slug'] )) $custom_slug = $options['portfolio_rewrite_slug'];

    $args = array(
        'labels' => $portfolio_labels,
        'rewrite' => array( 'slug' => $custom_slug,'with_front' => false ),
        'singular_label' => __( 'Project', WEBUZA_THEME_NAME ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'hierarchical' => false,
        'menu_position' => 9,
        'menu_icon' => WEBUZA_DIRECTORY_URI . 'images/icons/portfolio.png',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments' )
    );

    register_post_type( 'portfolio' , $args );
}
add_action('init', 'portfolio_register');

#-----------------------------------------------------------------#
# Add taxonomys attached to portfolio
#-----------------------------------------------------------------#

$category_labels = array(
    'name' => __( 'Project Categories', WEBUZA_THEME_NAME ),
    'singular_name' => __( 'Project Category', WEBUZA_THEME_NAME ),
    'search_items' =>  __( 'Search Project Categories', WEBUZA_THEME_NAME ),
    'all_items' => __( 'All Project Categories', WEBUZA_THEME_NAME ),
    'parent_item' => __( 'Parent Project Category', WEBUZA_THEME_NAME ),
    'edit_item' => __( 'Edit Project Category', WEBUZA_THEME_NAME ),
    'update_item' => __( 'Update Project Category', WEBUZA_THEME_NAME ),
    'add_new_item' => __( 'Add New Project Category', WEBUZA_THEME_NAME ),
    'menu_name' => __( 'Project Categories', WEBUZA_THEME_NAME )
);

register_taxonomy( 'project-type',
    array( 'portfolio' ),
    array( 'hierarchical' => true,
        'labels' => $category_labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'project-type' )
    )
);

$attributes_labels = array(
    'name' => __( 'Project Attributes', WEBUZA_THEME_NAME ),
    'singular_name' => __( 'Project Attribute', WEBUZA_THEME_NAME ),
    'search_items' =>  __( 'Search Project Attributes', WEBUZA_THEME_NAME ),
    'all_items' => __( 'All Project Attributes', WEBUZA_THEME_NAME ),
    'parent_item' => __( 'Parent Project Attribute', WEBUZA_THEME_NAME ),
    'edit_item' => __( 'Edit Project Attribute', WEBUZA_THEME_NAME ),
    'update_item' => __( 'Update Project Attribute', WEBUZA_THEME_NAME ),
    'add_new_item' => __( 'Add New Project Attribute', WEBUZA_THEME_NAME ),
    'new_item_name' => __( 'New Project Attribute', WEBUZA_THEME_NAME ),
    'menu_name' => __( 'Project Attributes', WEBUZA_THEME_NAME )
);

register_taxonomy( 'project-attributes',
    array( 'portfolio' ),
    array( 'hierarchical' => true,
        'labels' => $attributes_labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'project-attributes' )
    )
);

#-----------------------------------------------------------------#
# get Portfolio categories
#-----------------------------------------------------------------#

function webuza_get_portfolio_categories( $post = null ){
    $categories = array();
    if ( $post ){
        $_categories = get_the_terms( $post, 'project-type' );
        if ( ! $_categories || is_wp_error( $_categories ) ){
            $categories = array();
        } else {
            foreach ( $_categories as $cat ){
                $categories[] = $cat->name;
            }
        }
    }
    return $categories;
}

#-----------------------------------------------------------------#
# Add Multiple Post thumbnails Post/Portfolio
#-----------------------------------------------------------------#

if ( class_exists('MultiPostThumbnails') ) {

    //Portfolio
    new MultiPostThumbnails(
        array(
            'label' => 'Second Image',
            'id' => 'second-slide',
            'post_type' => 'portfolio'
        ));
    new MultiPostThumbnails(
        array(
            'label' => 'Third Image',
            'id' => 'third-slide',
            'post_type' => 'portfolio'
        ));
    new MultiPostThumbnails(
        array(
            'label' => 'Fourth Image',
            'id' => 'fourth-slide',
            'post_type' => 'portfolio'
        ));
    new MultiPostThumbnails(
        array(
            'label' => 'Fifth Image',
            'id' => 'fifth-slide',
            'post_type' => 'portfolio'
        ));
    new MultiPostThumbnails(
        array(
            'label' => 'Sixth Image',
            'id' => 'sixth-slide',
            'post_type' => 'portfolio'
        ));

    //Posts
    new MultiPostThumbnails(
        array(
            'label' => 'Second Image',
            'id' => 'second-slide',
            'post_type' => 'post'
        ));
    new MultiPostThumbnails(
        array(
            'label' => 'Third Image',
            'id' => 'third-slide',
            'post_type' => 'post'
        ));
    new MultiPostThumbnails(
        array(
            'label' => 'Fourth Image',
            'id' => 'fourth-slide',
            'post_type' => 'post'
        ));
    new MultiPostThumbnails(
        array(
            'label' => 'Fifth Image',
            'id' => 'fifth-slide',
            'post_type' => 'post'
        ));
    new MultiPostThumbnails(
        array(
            'label' => 'Sixth Image',
            'id' => 'sixth-slide',
            'post_type' => 'post'
        ));

}
#-----------------------------------------------------------------#
# Post meta
#-----------------------------------------------------------------#

function enqueue_media(){

    /* Enqueue the correct media scripts for the media library */
    $wp_version = floatval(get_bloginfo('version'));

    if ( $wp_version < "3.5" ) {
        wp_enqueue_script(
            'redux-opts-field-upload-js',
            get_template_directory_uri() . '/inc/meta/js/assets/js/field_upload_3_4.js',
            array('jquery', 'thickbox', 'media-upload'),
            time(),
            true
        );
        wp_enqueue_style('thickbox');
    } else {
        wp_enqueue_script(
            'redux-opts-field-upload-js',
            get_template_directory_uri() . '/inc/meta/assets/js/field_upload.js',
            array('jquery'),
            time(),
            true
        );
        wp_enqueue_media();
    }

}


/* Post meta styling */
function webuza_metabox_styles() {
    wp_enqueue_style('webuza_meta_css', get_template_directory_uri() .'/inc/meta/assets/css/webuza-meta.css');
}

/* Post meta scripts */
function webuza_metabox_scripts() {
    wp_register_script('webuza-upload', get_template_directory_uri() .'/inc/meta/assets/js/webuza-meta.js', array('jquery','media-upload','thickbox'));
    wp_enqueue_script('webuza-upload');

    wp_register_script('wizard-field', get_template_directory_uri() .'/inc/meta/assets/js/wizard-field.js', array('jquery'));
    wp_enqueue_script('wizard-field');

    wp_localize_script('redux-opts-field-upload-js', 'redux_upload', array('url' => get_template_directory_uri() .'inc/meta/assets/js/blank.png'));
}

add_action('admin_enqueue_scripts', 'webuza_metabox_scripts');
add_action('admin_print_styles', 'webuza_metabox_styles');
add_action('admin_print_styles', 'enqueue_media');

/* Post meta core functions */
include("inc/meta/meta-config.php");
include("inc/meta/post-meta.php");
include("inc/meta/page-meta.php");

#-----------------------------------------------------------------#
# Portfolio Meta
#-----------------------------------------------------------------#

include("inc/meta/portfolio-meta.php");


#-----------------------------------------------------------------#
# Create admin slider section
#-----------------------------------------------------------------#
function slider_register() {

    $labels = array(
        'name' => __( 'Slides', 'taxonomy general name', WEBUZA_THEME_NAME ),
        'singular_name' => __( 'Slide', WEBUZA_THEME_NAME ),
        'search_items' =>  __( 'Search Slides', WEBUZA_THEME_NAME ),
        'all_items' => __( 'All Slides', WEBUZA_THEME_NAME ),
        'parent_item' => __( 'Parent Slide', WEBUZA_THEME_NAME ),
        'edit_item' => __( 'Edit Slide', WEBUZA_THEME_NAME ),
        'update_item' => __( 'Update Slide', WEBUZA_THEME_NAME ),
        'add_new_item' => __( 'Add New Slide', WEBUZA_THEME_NAME ),
        'menu_name' => __( 'Home Slider', WEBUZA_THEME_NAME )
    );

    $args = array(
        'labels' => $labels,
        'singular_label' => __('Home Slider', WEBUZA_THEME_NAME ),
        'public' => true,
        'show_ui' => true,
        'hierarchical' => false,
        'menu_position' => 10,
        'menu_icon' => WEBUZA_DIRECTORY_URI . '/images/icons/home-slider.png',
        'exclude_from_search' => true,
        'supports' => false
    );

    register_post_type( 'home_slider' , $args );
}

add_action( 'init', 'slider_register' );


#-----------------------------------------------------------------#
# Custom slider columns
#-----------------------------------------------------------------#

add_filter( 'manage_edit-home_slider_columns', 'edit_columns_home_slider' );

function edit_columns_home_slider( $columns ){
    $column_thumbnail = array( 'thumbnail' => 'Thumbnail' );
    $column_caption = array( 'caption' => 'Caption' );
    $columns = array_slice( $columns, 0, 1, true ) + $column_thumbnail + array_slice( $columns, 1, null, true );
    $columns = array_slice( $columns, 0, 2, true ) + $column_caption + array_slice( $columns, 2, null, true );
    return $columns;
}

#-----------------------------------------------------------------#
# Home Slider
#-----------------------------------------------------------------#

add_action( 'manage_posts_custom_column',  'home_slider_custom_columns', 10, 2 );

function home_slider_custom_columns($portfolio_columns, $post_id){

    switch ($portfolio_columns) {
        case 'thumbnail':
            $thumbnail = get_post_meta($post_id, 'wbz_slider_image', true);

            if( !empty($thumbnail) ) {
                echo '<a href="'.get_admin_url() . 'post.php?post=' . $post_id.'&action=edit"><img class="slider-thumb" src="' . $thumbnail . '" /></a>';
            } else {
                echo '<a href="'.get_admin_url() . 'post.php?post=' . $post_id.'&action=edit"><img class="slider-thumb" src="' . get_template_directory_uri() . '/inc/meta/assets/img/slider-default-thumb.png" /></a>' .
                    '<strong><a class="row-title" href="'.get_admin_url() . 'post.php?post=' . $post_id.'&action=edit">No image added yet</a></strong>';
            }
            break;

        case 'caption':
            $caption = get_post_meta($post_id, 'wbz_slider_caption', true);
            echo $caption;
            break;


        default:
            break;
    }
}


add_action( 'admin_menu', 'webuza_home_slider_ordering' );

function webuza_home_slider_ordering() {
    add_submenu_page(
        'edit.php?post_type=home_slider',
        'Order Slides',
        'Order',
        'edit_pages', 'slide-order',
        'webuza_home_slider_order_page'
    );
}

function webuza_home_slider_order_page(){ ?>

    <div class="wrap">
        <h2>Sort Slides</h2>
        <p>Simply drag the slide up or down and they will be saved in that order.</p>
        <?php $slides = new WP_Query( array( 'post_type' => 'home_slider', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order' ) ); ?>
        <?php if( $slides->have_posts() ) : ?>

            <?php wp_nonce_field( basename(__FILE__), 'webuza_meta_box_nonce' ); ?>

            <table class="wp-list-table widefat fixed posts" id="sortable-table">
                <thead>
                <tr>
                    <th class="column-order">Order</th>
                    <th class="manage-column column-thumbnail">Image</th>
                    <th class="manage-column column-caption">Caption</th>
                </tr>
                </thead>
                <tbody data-post-type="home_slider">
                <?php while( $slides->have_posts() ) : $slides->the_post(); ?>
                    <tr id="post-<?php the_ID(); ?>">
                        <td class="column-order"><img src="<?php echo get_template_directory_uri() . '/inc/meta/assets/img/sortable.png'; ?>" title="" alt="Move Icon" width="25" height="25" class="" /></td>
                        <td class="thumbnail column-thumbnail">
                            <?php
                            global $post;
                            $thumbnail = get_post_meta( $post->ID, '_webuza_slider_image', true );

                            if( !empty( $thumbnail ) ) {
                                echo '<img class="slider-thumb" src="' . $thumbnail . '" />' ;
                            }
                            else {
                                echo '<img class="slider-thumb" src="' . get_template_directory_uri() . '/inc/meta/assets/img/slider-default-thumb.png" />' .
                                    '<strong>No image added yet</strong>';
                            } ?>

                        </td>
                        <td class="caption column-caption">
                            <?php
                            $caption = get_post_meta( $post->ID, '_webuza_slider_caption', true );
                            echo $caption; ?>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
                <tfoot>
                <tr>
                    <th class="column-order">Order</th>
                    <th class="manage-column column-thumbnail">Image</th>
                    <th class="manage-column column-caption">Caption</th>
                </tr>
                </tfoot>

            </table>

        <?php else: ?>

            <p>No slides found, why not <a href="post-new.php?post_type=home_slider">create one?</a></p>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

    </div>

<?php }


add_action( 'admin_enqueue_scripts', 'webuza_slider_enqueue_scripts' );

function webuza_slider_enqueue_scripts() {
    wp_enqueue_script( 'jquery-ui-sortable' );
    wp_enqueue_script( 'webuza-reorder', get_template_directory_uri() . '/js/webuza-reorder.js' );
}

add_action( 'wp_ajax_webuza_update_slide_order', 'webuza_update_slide_order' );

function webuza_update_slide_order() {
    global $wpdb;
    $post_type = $_POST['postType'];
    $order = $_POST['order'];

    if (  !isset( $_POST['webuza_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['webuza_meta_box_nonce'], basename( __FILE__ ) ) )
        return;
    foreach( $order as $menu_order => $post_id ) {
        $post_id        = intval( str_ireplace( 'post-', '', $post_id ) );
        $menu_order     = intval($menu_order);
        wp_update_post( array( 'ID' => stripslashes(htmlspecialchars($post_id)), 'menu_order' => stripslashes(htmlspecialchars($menu_order)) ) );
    }
    die( '1' );
}

function set_home_slider_admin_order($wp_query) {
    if (is_admin()) {
        $post_type = $wp_query->query['post_type'];
        if ( $post_type == 'home_slider') {
            $wp_query->set('orderby', 'menu_order');
            $wp_query->set('order', 'ASC');
        }
    }
}

add_filter('pre_get_posts', 'set_home_slider_admin_order');

#-----------------------------------------------------------------#
# Home slider meta
#-----------------------------------------------------------------#

include("inc/meta/home-slider-meta.php");

#-----------------------------------------------------------------#
# New category walker for portfolio filter
#-----------------------------------------------------------------#

class Walker_Portfolio_Filter extends Walker_Category {
    function start_el(&$output, $category, $depth, $args) {

        extract($args);
        $cat_slug = esc_attr( $category->slug );
        $cat_slug = apply_filters( 'list_cats', $cat_slug, $category );
        $link = '<li><a href="#" data-filter=".'.strtolower(preg_replace('/\s+/', '-', $cat_slug)).'">';
        $cat_name = esc_attr( $category->name );
        $cat_name = apply_filters( 'list_cats', $cat_name, $category );
        $link .= $cat_name;
        if(!empty($category->description)) {
            $link .= ' <span>'.$category->description.'</span>';
        }
        $link .= '</a>';
        $output .= $link;
    }
}


#-----------------------------------------------------------------#
# Function to get the page link back to all portfolio items
#-----------------------------------------------------------------#

function get_portfolio_page_link($post_id) {
    global $wpdb;

    $results = $wpdb->get_results("SELECT post_id FROM $wpdb->postmeta WHERE meta_key='_wp_page_template' AND meta_value='page-portfolio.php'");
    foreach ($results as $result) {
        $page_id = $result->post_id;
    }
    return get_page_link($page_id);
}

#-----------------------------------------------------------------#
# Widget areas
#-----------------------------------------------------------------#
function generateSlug($phrase, $maxLength) {
    $result = strtolower($phrase);

    $result = preg_replace("/[^a-z0-9\s-]/", "", $result);
    $result = trim(preg_replace("/[\s-]+/", " ", $result));
    $result = trim(substr($result, 0, $maxLength));
    $result = preg_replace("/\s/", "-", $result);

    return $result;
}
function webuza_widgets_init() {
    if( function_exists( 'register_sidebar' ) ) {
        register_sidebar( array(
            'name' => 'Blog Sidebar',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ) );
        register_sidebar( array(
            'name' => 'Page Sidebar',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>' ) );
    }

    $footer_options = get_option('wbz_footer_columns');
    if( isset( $footer_options ) || $footer_options != "" ) {
        for( $ii = 1; $ii <= $footer_options; $ii++ ) {
            register_sidebar(
                array(
                    'name' => 'Footer Area '.$ii,
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h4>',
                    'after_title'   => '</h4>'
                )
            );
        }
    }

    $custom_sidebars = get_option('wbz_custom_sidebar');
    if(isset($custom_sidebars) && sizeof($custom_sidebars) > 0) {
        foreach($custom_sidebars as $sidebar) {
            register_sidebar( array(
                'name' => __( $sidebar, WEBUZA_THEME_NAME ),
                'id' => generateSlug($sidebar, 45),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => "</div>",
                'before_title' => '<h4>',
                'after_title' => '</h4>',
            ) );
        }
    }
}
add_action( 'widgets_init', 'webuza_widgets_init' );


#-----------------------------------------------------------------#
# Custom Sidebars
#-----------------------------------------------------------------#

add_action( 'add_meta_boxes', 'add_sidebar_metabox' );
function add_sidebar_metabox() {
    add_meta_box(
        'custom_sidebar',
        __( 'Custom Sidebar', WEBUZA_THEME_NAME ),
        'custom_sidebar_callback',
        'page',
        'side'
    );
}

function custom_sidebar_callback( $post ) {
    global $wp_registered_sidebars;
    $custom = get_post_custom($post->ID);

    if(isset($custom['custom_sidebar'])) $val = $custom['custom_sidebar'][0];
    else $val = "default";
    wp_nonce_field( plugin_basename( __FILE__ ), 'custom_sidebar_nonce' );
    $output = '<p><label for="myplugin_new_field">'.__("Choose a sidebar to display", WEBUZA_THEME_NAME ).'</label></p>';
    $output .= "<select name='custom_sidebar'>";
    $output .= "<option";
    if($val == "default") $output .= " selected='selected'";
    $output .= " value='default'>".__('default', WEBUZA_THEME_NAME )."</option>";

    foreach($wp_registered_sidebars as $sidebar_id => $sidebar) {
        $output .= "<option";
        if($sidebar_id == $val) $output .= " selected='selected'";
        $output .= " value='".$sidebar_id."'>".$sidebar['name']."</option>";
    }
    $output .= "</select>";
    echo $output;
}


add_action( 'save_post', 'save_sidebar_postdata' );
function save_sidebar_postdata( $post_id )
{
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( !wp_verify_nonce( $_POST['custom_sidebar_nonce'], plugin_basename( __FILE__ ) ) ) return;
    if ( !current_user_can( 'edit_page', $post_id ) ) return;
    $data = $_POST['custom_sidebar'];
    update_post_meta($post_id, "custom_sidebar", $data);
}


#-----------------------------------------------------------------#
# Custom Widgets
#-----------------------------------------------------------------#
require_once("inc/widgets/shortcode-sidebar-widget.php");
require_once("inc/widgets/recent-comments-widget.php");
require_once("inc/widgets/tabs-widget.php");
require_once("inc/widgets/tweets-widget.php");

#-----------------------------------------------------------------#
# Webuza love
#-----------------------------------------------------------------#
require_once("inc/meta/love/webuza-love.php");

#-----------------------------------------------------------------#
# Webuza PlusOne
#-----------------------------------------------------------------#
function get_plusones($url) {
    $curl = curl_init();
    curl_setopt( $curl, CURLOPT_URL, "https://clients6.google.com/rpc" );
    curl_setopt( $curl, CURLOPT_POST, 1 );
    curl_setopt( $curl, CURLOPT_POSTFIELDS, '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"' . $url . '","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]' );
    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $curl, CURLOPT_HTTPHEADER, array('Content-type: application/json') );
    $curl_results = curl_exec ( $curl );
    curl_close ($curl);
    $json = json_decode($curl_results, true);
    return intval( $json[0]['result']['metadata']['globalCounts']['count'] );
}

#-----------------------------------------------------------------#
# Post Protected
#-----------------------------------------------------------------#
add_filter( 'the_password_form', 'custom_password_form' );
function custom_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $html = '<div style="width:100%;">';
    $html .= '<div class="protected-form">';
    $html .= '<h3>'. __( 'Password Protected', WEBUZA_THEME_NAME ) .'</h3>';
    $html .= '<span>'. __( 'Sorry content wath do you are wanted is protected. Input password, please.', WEBUZA_THEME_NAME ) .'</span>';
    $html .= '<form class="protected-post-form" action="'. get_option('siteurl') .'/wp-login.php?action=postpass" method="post">';
    $html .= '<input name="post_password" id="'. $label .'" class="post_password" type="password" placeholder="'. __( 'Password...', WEBUZA_THEME_NAME ) .'" />';
    $html .= '<input class="submit" type="submit" name ="Submit" value="Button" />';
    $html .= '</form>';
    $html .= '</div>';
    $html .= '</div>';
    return $html;
}

#-----------------------------------------------------------------#
# Page Wizard Meta
#-----------------------------------------------------------------#

function wizard_field_add_custom_box() {
    $screens = array( 'page' );
    foreach ( $screens as $screen ) {
        add_meta_box(
            'wizard_field',
            __( 'Wizard Full Width', WEBUZA_THEME_NAME ) .' <span style="color:#f7524a; font-size:13px; font-style: italic;"> '. __( '(Your prepared shortcode wizard to insert into this field.)', WEBUZA_THEME_NAME ).'</span>',
            'wizard_field_inner_custom_box',
            $screen
        );
    }
}
add_action( 'add_meta_boxes', 'wizard_field_add_custom_box' );

function wizard_field_inner_custom_box( $post ) {
    wp_nonce_field( 'wizard_field_inner_custom_box', 'wizard_field_inner_custom_box_nonce' );
    $value = get_post_meta( $post->ID, '_wizard_field', true );
    echo '<label for="_wizard_field">'. __( "Wizard ShortCode ", WEBUZA_THEME_NAME ) .'</label> ';
    echo '<input type="text" id="_wizard_field" name="_wizard_field" value="' . esc_attr( $value ) . '" size="40" />';
}

add_action( 'save_post', 'wizard_field_save_postdata' );

function wizard_field_save_postdata( $post_id ) {
    if ( ! isset( $_POST['wizard_field_inner_custom_box_nonce'] ) ) return $post_id;
    $nonce = $_POST['wizard_field_inner_custom_box_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wizard_field_inner_custom_box' ) ) return $post_id;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return $post_id;
    if ( 'page' == $_POST['post_type'] ) { if ( !current_user_can( 'edit_page', $post_id ) ) return $post_id;
    } else { if ( ! current_user_can( 'edit_post', $post_id ) ) return $post_id; }
    $mydata = sanitize_text_field( $_POST['_wizard_field'] );
    update_post_meta( $post_id, '_wizard_field', $mydata );
}

add_action( 'wp_ajax_repair', 'repair_callback' );

function repair_callback() {
    global $post, $wpdb;

    $chkArr = array(
        'select_slider',
        'bullets_alignment',
        'bullets_area_color',
        'bullets_text_size',
        'bullets_text_color',
        'bullets_text_hover_color',
        'title_slider',
        'select_slider',
        'revolution_selected',
        'tabs_selected'
    );

    $_args = array( 'post_type' => 'wizard', 'posts_per_page' => 20 );
    query_posts( $_args );
    if( have_posts() ): while( have_posts() ): the_post();

        $checkPostMeta = get_post_meta( $post->ID );

        foreach( $chkArr as $chk ){
            if( isset( $checkPostMeta[ $chk ][ 1 ] ) && $checkPostMeta[ $chk ][ 0 ] == '' ) {
                update_post_meta( $post->ID , $chk, $checkPostMeta[ $chk ][ 1 ] );
            }
        }


    endwhile; endif;
    echo 'All data has been successfully checked and corrected';
    exit;
}
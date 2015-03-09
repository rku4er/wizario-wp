<?php
/**
 * Enqueue scripts and stylesheets
 */
function shoestrap_scripts() {

	// Main stylesheet
	$stylesheet_url = apply_filters( 'shoestrap_main_stylesheet_url', SHOESTRAP_ASSETS_URL . '/css/style-default.css' );
	$stylesheet_ver = apply_filters( 'shoestrap_main_stylesheet_ver', null );
	wp_register_style( 'shoestrap_css', $stylesheet_url, false, $stylesheet_ver );

    // new stylesheets
	wp_register_style( 'font_awesome_css', SHOESTRAP_ASSETS_URL . '/css/font-awesome.css', false, '1.0.0', 'screen' );
    wp_register_style( 'bootstrap_css', SHOESTRAP_ASSETS_URL . '/css/bootstrap.css', false, '1.0.0', 'screen' );
    wp_register_style( 'revslider_css', SHOESTRAP_ASSETS_URL . '/css/revslider.css', false, '1.0.0', 'screen' );
    wp_register_style( 'flexslider_css', SHOESTRAP_ASSETS_URL . '/css/flexslider.css', false, '1.0.0', 'screen' );
	wp_register_style( 'waves_css', SHOESTRAP_ASSETS_URL . '/css/waves.css', false, '1.0.0' );

    wp_register_style( 'mobile_css', SHOESTRAP_ASSETS_URL . '/css/mobile.css', false, '1.0.0', 'screen and (max-width: 1179px)' );
    wp_register_style( 'tablet_css', SHOESTRAP_ASSETS_URL . '/css/tablet.css', false, '1.0.0', 'screen and (min-width: 1180px) and (max-width: 1350px)' );
    wp_register_style( 'desktop_css', SHOESTRAP_ASSETS_URL . '/css/desktop.css', false, '1.0.0', 'screen and (min-width: 1350px)' );
    wp_register_style( 'main_css', get_stylesheet_directory_uri() .'/style.css', false, '1.0.0' );

    // Enqueue main stylesheets
    wp_enqueue_style( 'shoestrap_css' );

    // Enqueue new stylesheets
    wp_enqueue_style( 'bootstrap_css' );
    wp_enqueue_style( 'revslider_css' );
    wp_enqueue_style( 'flexslider_css' );
    wp_enqueue_style( 'font_awesome_css' );
    wp_enqueue_style( 'waves_css' );
    wp_enqueue_style( 'main_css' );
    wp_enqueue_style( 'mobile_css' );
    wp_enqueue_style( 'tablet_css' );
    wp_enqueue_style( 'desktop_css' );

	// register default scripts
	wp_register_script( 'modernizr', SHOESTRAP_ASSETS_URL . '/js/vendor/modernizr-2.7.0.min.js', false, null, false );
	wp_register_script( 'fitvids', SHOESTRAP_ASSETS_URL . '/js/vendor/jquery.fitvids.js',false, null, true  );

	// new scripts
	wp_register_script( 'tweenmax', SHOESTRAP_ASSETS_URL . '/js/vendor/TweenMax.min.js', array('jquery'), '1.0.0', true  );
	wp_register_script( 'scrollmagic', SHOESTRAP_ASSETS_URL . '/js/vendor/jquery.scrollmagic.min.js', array('jquery'), '1.0.0', true  );
	wp_register_script( 'scrollmagic_debug', SHOESTRAP_ASSETS_URL . '/js/vendor/jquery.scrollmagic.debug.js', array('jquery'), '1.0.0', true  );
	wp_register_script( 'easing', SHOESTRAP_ASSETS_URL . '/js/vendor/jquery.easing.min.js', array('jquery'), '1.0.0', true  );
	wp_register_script( 'waves', SHOESTRAP_ASSETS_URL . '/js/vendor/waves.js', array('jquery'), '1.0.0', true  );
	wp_register_script( 'hoverintent', SHOESTRAP_ASSETS_URL . '/js/vendor/hoverIntent.js', array('jquery'), '1.0.0', true  );
	wp_register_script( 'superfish', SHOESTRAP_ASSETS_URL . '/js/vendor/superfish.js', array('jquery'), '1.0.0', true  );
	wp_register_script( 'smooth', SHOESTRAP_ASSETS_URL . '/js/vendor/smooth.js', array('jquery'), '1.0.0', true  );
	wp_register_script( 'themepunch_plugins', SHOESTRAP_ASSETS_URL . '/js/vendor/jquery.themepunch.plugins.min.js', array('jquery'), '1.0.0', true  );
	wp_register_script( 'themepunch_revolution', SHOESTRAP_ASSETS_URL . '/js/vendor/jquery.themepunch.revolution.min.js', array('jquery'), '1.0.0', true  );
	wp_register_script( 'flexslider', SHOESTRAP_ASSETS_URL . '/js/vendor/jquery.flexslider-min.js', array('jquery'), '1.0.0', true  );
    wp_register_script( 'piechart', SHOESTRAP_ASSETS_URL . '/js/vendor/jquery.easypiechart.min.js', array('jquery'), '1.0.0', true  );
	wp_register_script( 'isotope', SHOESTRAP_ASSETS_URL . '/js/vendor/isotope.min.js', array('jquery'), '1.0.0', true  );
    wp_register_script( 'main', SHOESTRAP_ASSETS_URL . '/js/vendor/main.js', array('jquery'), '1.0.0', true  );

	// enqueue default scripts
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'fitvids' );

	// enqueue new scripts
	wp_enqueue_script( 'tweenmax' );
	wp_enqueue_script( 'scrollmagic' );
	wp_enqueue_script( 'scrollmagic_debug' );
	wp_enqueue_script( 'easing' );
	wp_enqueue_script( 'waves' );
	wp_enqueue_script( 'hoverintent' );
	wp_enqueue_script( 'superfish' );
	wp_enqueue_script( 'smooth' );
	wp_enqueue_script( 'themepunch_plugins' );
	wp_enqueue_script( 'themepunch_revolution' );
    wp_enqueue_script( 'flexslider' );
	wp_enqueue_script( 'piechart' );
    wp_enqueue_script( 'isotope' );
	wp_enqueue_script( 'main' );


	if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Custom declaration
	$redux_custom = get_option( 'redux_custom' );
    $color = $redux_custom[ 'color_custom' ];
    $custom_css = "
        body{
                background-color: {$color} !important;
        }
    ";
	wp_add_inline_style( 'shoestrap_css', $custom_css );

}

add_action( 'wp_enqueue_scripts', 'shoestrap_scripts', 100 );

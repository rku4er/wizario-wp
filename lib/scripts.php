<?php
/**
 * Enqueue scripts and stylesheets
 */
function shoestrap_scripts() {

	// Main stylesheet
	$stylesheet_url = apply_filters( 'shoestrap_main_stylesheet_url', SHOESTRAP_ASSETS_URL . '/css/style-default.css' );
	$stylesheet_ver = apply_filters( 'shoestrap_main_stylesheet_ver', null );

	wp_enqueue_style( 'shoestrap_css', $stylesheet_url, false, $stylesheet_ver );

	// Fonts
	wp_enqueue_style( 'open_sans_font', 'http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600', false, '1.0.0' );
	wp_enqueue_style( 'montserrat_font', 'http://fonts.googleapis.com/css?family=Montserrat:400,700', false, '1.0.0' );

	// Additional stylesheets
	wp_enqueue_style( 'bootstrap_css', SHOESTRAP_ASSETS_URL . '/css/bootstrap.css', false, '1.0.0' );
	wp_enqueue_style( 'revslider_css', SHOESTRAP_ASSETS_URL . '/css/revslider.css', false, '1.0.0', 'screen' );
	wp_enqueue_style( 'flexslider_css', SHOESTRAP_ASSETS_URL . '/css/flexslider.css', false, '1.0.0' );
	wp_enqueue_style( 'font-awesome_css', SHOESTRAP_ASSETS_URL . '/css/font-awesome.css', false, '1.0.0' );
	wp_enqueue_style( 'waves_css', SHOESTRAP_ASSETS_URL . '/css/waves.css', false, '1.0.0' );
	wp_enqueue_style( 'main_css', SHOESTRAP_ASSETS_URL . '/css/main.css', false, '1.0.0' );
	wp_enqueue_style( 'desktop_css', SHOESTRAP_ASSETS_URL . '/css/desktop.css', false, '1.0.0', '(min-width: 1350px)' );
	wp_enqueue_style( 'tablet_css', SHOESTRAP_ASSETS_URL . '/css/tablet.css', false, '1.0.0', '(min-width: 1180px) and (max-width: 1350px)' );
	wp_enqueue_style( 'mobile_css', SHOESTRAP_ASSETS_URL . '/css/mobile.css', false, '1.0.0', '(max-width: 1179px)' );

	// register default scripts
	wp_register_script( 'modernizr', SHOESTRAP_ASSETS_URL . '/js/vendor/modernizr-2.7.0.min.js', false, null, false );
	wp_register_script( 'fitvids', SHOESTRAP_ASSETS_URL . '/js/vendor/jquery.fitvids.js',false, null, true  );

	// additional scripts
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
	wp_register_script( 'main', SHOESTRAP_ASSETS_URL . '/js/vendor/main.js', array('jquery', 'tweenmax', 'scrollmagic', 'scrollmagic_debug', 'easing', 'waves', 'hoverintent', 'superfish', 'smooth', 'themepunch_plugins', 'themepunch_revolution', 'flexslider'), '1.0.0', true  );

	// enqueue default scripts
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'fitvids' );

	// enqueue additional scripts
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
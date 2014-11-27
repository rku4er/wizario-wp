<?php
/**
 * Enqueue scripts and stylesheets
 */
function shoestrap_scripts() {

	// Main stylesheet
	$stylesheet_url = apply_filters( 'shoestrap_main_stylesheet_url', SHOESTRAP_ASSETS_URL . '/css/style-default.css' );
	$stylesheet_ver = apply_filters( 'shoestrap_main_stylesheet_ver', null );

	wp_enqueue_style( 'shoestrap_css', $stylesheet_url, false, $stylesheet_ver );

	// Additional stylesheets
	wp_enqueue_style( 'bootstrap_css', SHOESTRAP_ASSETS_URL . '/assets/css/bootstrap.css', false, '1.0.0' );
	wp_enqueue_style( 'revslider_css', SHOESTRAP_ASSETS_URL . '/assets/css/revslider.css', false, '1.0.0', 'screen' );
	wp_enqueue_style( 'flexslider_css', SHOESTRAP_ASSETS_URL . '/assets/css/flexslider.css', false, '1.0.0' );
	wp_enqueue_style( 'font-awesome_css', SHOESTRAP_ASSETS_URL . '/assets/css/font-awesome.css', false, '1.0.0' );
	wp_enqueue_style( 'waves_css', SHOESTRAP_ASSETS_URL . '/assets/css/waves.css', false, '1.0.0' );
	wp_enqueue_style( 'main_css', SHOESTRAP_ASSETS_URL . '/assets/css/main.css', false, '1.0.0' );
	wp_enqueue_style( 'main_css', SHOESTRAP_ASSETS_URL . '/assets/css/desktop.css', false, '1.0.0', '(min-width: 1350px)' );
	wp_enqueue_style( 'main_css', SHOESTRAP_ASSETS_URL . '/assets/css/tablet.css', false, '1.0.0', '(min-width: 1180px) and (max-width: 1350px)' );
	wp_enqueue_style( 'main_css', SHOESTRAP_ASSETS_URL . '/assets/css/mobile.css', false, '1.0.0', '(max-width: 1179px)' );

	// scripts

	wp_register_script( 'modernizr', SHOESTRAP_ASSETS_URL . '/js/vendor/modernizr-2.7.0.min.js', false, null, false );
	wp_register_script( 'fitvids', SHOESTRAP_ASSETS_URL . '/js/vendor/jquery.fitvids.js',false, null, true  );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'fitvids' );

	if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shoestrap_scripts', 100 );


<link rel="stylesheet" href="assets/css/desktop.css" media="(min-width: 1350px)">
	<link rel="stylesheet" href="assets/css/tablet.css" media="(min-width: 1180px) and (max-width: 1350px)">
	<link rel="stylesheet" href="assets/css/mobile.css" media="(max-width: 1179px)">
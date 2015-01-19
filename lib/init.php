<?php
/**
 * Shoestrap initial setup and constants
 */
function shoestrap_setup() {
	// Make theme available for translation
	load_theme_textdomain( 'shoestrap', get_template_directory() . '/lang' );

	// Register wp_nav_menu() menus ( http://codex.wordpress.org/Function_Reference/register_nav_menus )
	register_nav_menus( array(
		'primary_navigation'   => __( 'Primary Navigation', 'shoestrap' ),
		'secondary_navigation' => __( 'Secondary Navigation', 'shoestrap' ),
	 ) );

	// Add post thumbnails ( http://codex.wordpress.org/Post_Thumbnails )
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'portfolio-4x', 252, 161, true );
	add_image_size( 'portfolio-3x', 346, 221, true );
	add_image_size( 'portfolio-2x', 533, 341, true );
	//add_image_size( 'custom', 50, 50, true );

	// Add post formats ( http://codex.wordpress.org/Post_Formats )
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'html5', array( 'gallery', 'caption' ) );

	// Tell the TinyMCE editor to use a custom stylesheet
	add_editor_style( '/assets/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'shoestrap_setup' );
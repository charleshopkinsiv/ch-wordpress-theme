<?php
function charles_hopkins_setup() {

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'charles_hopkins_setup' );

// Scripts and styles
function charles_hopkins_scripts() {
	wp_enqueue_style( 'charles-hopkins-style', get_stylesheet_uri() );

	wp_enqueue_script( 'min-js', get_template_directory_uri() . '/js/app.js', array(), '1.1', true );

	// Remove wp-embed
	wp_deregister_script( 'wp-embed' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'charles_hopkins_scripts' );

// Custom excerpt length for blog feed
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
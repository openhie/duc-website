<?php
/**
 * DUC functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package duc
 */

if ( ! defined( 'DUC_THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'DUC_THEME_VERSION', wp_get_theme()->get('Version') );
}

function duc_setup() {
	load_theme_textdomain( 'duc', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'duc' ),
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// add_theme_support( 'customize-selective-refresh-widgets' );
	// add_theme_support(
	// 	'custom-logo',
	// 	array(
	// 		'height'      => 250,
	// 		'width'       => 250,
	// 		'flex-width'  => true,
	// 		'flex-height' => true,
	// 	)
	// );
}
add_action( 'after_setup_theme', 'duc_setup' );

/**
 * Enqueue scripts and styles.
 */
function duc_scripts() {
	wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', [], '2.3.1');
	wp_enqueue_style( 'duc-style', get_stylesheet_uri(), array(), DUC_THEME_VERSION );
	wp_enqueue_style( 'material', get_stylesheet_directory_uri() . '/material.min.css', [], '1.0');
	wp_enqueue_style( 'gfonts', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700|Open+Sans:300,400,600,700|Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900' );
	wp_enqueue_style( 'gicons', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
	wp_enqueue_script( 'rellax', get_stylesheet_directory_uri() . '/js/rellax.js', ['jquery'], '1.0', true );
	wp_enqueue_script( 'material', get_stylesheet_directory_uri() . '/js/material.min.js', ['jquery'], '1.0', true );
	wp_enqueue_script( 'discourse', get_stylesheet_directory_uri() . '/js/discourse.js', ['jquery'], '1.0', true );
	// wp_style_add_data( 'duc-style', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'duc_scripts' );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
// require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
// require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }


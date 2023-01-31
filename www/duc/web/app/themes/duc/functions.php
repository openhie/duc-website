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

add_shortcode('duc-add-to-cal', 'duc_add_to_cal');
function duc_add_to_cal($atts, $content) {
	// [add-to-gcal-link]<strong>Add to Google Calendar</strong>[/add-to-gcal-link]
	$options = "'Apple','Google','iCal','Outlook.com','Microsoft 365','Microsoft Teams'";
	$tz = 'UTC';
	$separator = '||';
	// Expected order of content:
	// name/title, location, startdate, enddate, starttime, endtime, timezone, description
	$data = explode($separator, strip_tags($content));
	$html = '';
	$html .= '<add-to-calendar-button ';
	$html .= 'options="' . $options . '" ';
	$html .= 'organizer="Data Use Community|info@datausecommunity.org", ';
	$html .= 'name="' . htmlspecialchars($data[0], ENT_QUOTES) . '" ';
	$html .= 'location="' . trim($data[1]) . '" ';
	$html .= 'startDate="' . htmlspecialchars($data[2], ENT_QUOTES) . '" ';
	$html .= 'endDate="' . htmlspecialchars($data[3], ENT_QUOTES) . '" ';
	$html .= 'startTime="' . htmlspecialchars($data[4], ENT_QUOTES) . '" ';
	$html .= 'endTime="' . htmlspecialchars($data[5], ENT_QUOTES) . '" ';
	$html .= 'timeZone="' . htmlspecialchars($data[6], ENT_QUOTES) . '" ';
	$html .= 'hideBackground="true" ';
	$html .= 'buttonStyle="custom" ';
	$html .= 'customCss="' . get_stylesheet_directory_uri() . '/atcb.css' . '" ';
	$html .= '></add-to-calendar-button>';
	return $html;
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
	wp_enqueue_script( 'add-to-calendar-button', 'https://cdn.jsdelivr.net/npm/add-to-calendar-button', [], '2.0.2' );
	wp_enqueue_script( 'rellax', get_stylesheet_directory_uri() . '/js/rellax.js', [], '1.0', true );
	wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', [], '2.3.1', true );
	wp_enqueue_script( 'aos_init', get_stylesheet_directory_uri() . '/js/aos_init.js', ['aos'], '1.0', true );
	wp_enqueue_script( 'mailerlite', get_stylesheet_directory_uri() . '/js/mailerlite.js', [], '1.0', true );
	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', ['jquery'], '1.14.3', true );
	wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', ['jquery'], '4.1.1', true );
	wp_enqueue_script( 'material', get_stylesheet_directory_uri() . '/js/material.min.js', ['jquery'], '1.0', true );
	wp_enqueue_script( 'discourse', get_stylesheet_directory_uri() . '/js/discourse.js', ['jquery'], '1.2', true );
	wp_enqueue_script( 'smoothscroll', get_stylesheet_directory_uri() . '/js/smoothscroll.js', ['jquery'], '1.0', true );
	// wp_style_add_data( 'duc-style', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'duc_scripts' );

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

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


<?php
/**
 * wp news Theme Customizer
 *
 * @package Trend_News
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
use WPTRT\Customize\Section\Button;

function trend_news_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'trend_news_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'trend_news_customize_partial_blogdescription',
			)
		);
	}

	//Upgrade to Pro
	$wp_customize->register_section_type( Button::class );

	// Register sections.
	$wp_customize->add_section(
		new Button(
			$wp_customize,
			'trend_news_pro',
			array(
				'title'    => esc_html__( 'Go Pro', 'trend-news' ),
				'button_text' => esc_html__( 'Buy Trend News Pro', 'trend-news' ),
				'button_url'  => 'https://wpnewstheme.com/items/trend-news-pro/',
				'priority' => 1,
			)
		)
	);
}
add_action( 'customize_register', 'trend_news_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function trend_news_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function trend_news_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function trend_news_customize_preview_js() {
	wp_enqueue_script( 'trend-news-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'trend_news_customize_preview_js' );



function trend_news_customize_backend_scripts() {
	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'trend-news-customize-section-button',
		get_theme_file_uri( 'include/upgrade-to-pro/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'trend-news-customize-section-button',
		get_theme_file_uri( 'include/upgrade-to-pro/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);
}
add_action( 'customize_controls_enqueue_scripts', 'trend_news_customize_backend_scripts', 10 );

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Load customizer required panels.
 */
require get_template_directory() . '/include/customizer/header-options.php';
require get_template_directory() . '/include/customizer/color/color-customizer.php';
require get_template_directory() . '/include/customizer/layout-options.php';
require get_template_directory() . '/include/customizer/color/customizer-css.php';

require get_template_directory() . '/include/customizer/sanitize.php';


// Autoloader
include get_theme_file_path( 'include/upgrade-to-pro/src/Loader.php' );

$social_charity_loader = new \WPTRT\Autoload\Loader();

$social_charity_loader->add( 'WPTRT\\Customize\\Section', get_theme_file_path( 'include/upgrade-to-pro/src' ) );

$social_charity_loader->register();
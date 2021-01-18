<?php
/**
 * WP News Header Options at Theme Customizer
 *
 * @package Trend_News
 * @since 1.0.0
 */

add_action( 'customize_register', 'trend_news_header_options_register' );

function trend_news_header_options_register( $wp_customize ) {
 
	/**
     * Add Header options Panel
     *
     * @since 1.0.0
     */
    $wp_customize->add_panel(
     'trend_news_header_options_panel',
     array(
         'priority'       => 10,
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __( 'Header Options', 'trend-news' ),
     )
    );

 
    require get_template_directory() . '/include/customizer/header/top-header-display-section.php';

    require get_template_directory() . '/include/customizer/header/middle-header.php';

    require get_template_directory() . '/include/customizer/header/bottom-header.php';
}
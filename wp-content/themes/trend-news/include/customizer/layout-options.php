<?php
/**
 * WP News Header Options at Theme Customizer
 *
 * @package Trend_News
 * @since 1.0.0
 */

add_action( 'customize_register', 'trend_news_layout_options_register' );

function trend_news_layout_options_register( $wp_customize ) {
 
	/**
     * Add Layout options Panel
     *
     * @since 1.0.0
     */
    $wp_customize->add_panel(
     'trend_news_layout_options_panel',
     array(
         'priority'       => 10,
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __( 'Theme Layout', 'trend-news' ),
     )
    );


    /**
     * Box and full width
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
    'trend_news_box_full_width_section',
    array(
        'priority'       => 1,
        'panel'          => 'trend_news_layout_options_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Box & Full width', 'trend-news' ),
    )
    );

    $wp_customize->add_setting( 'trend_news_select_bw_layout', array(
      'capability' => 'edit_theme_options',
      'default' => 'full',
      'sanitize_callback' => 'trend_news_sanitize_select',
    ) );

    $wp_customize->add_control( 'trend_news_select_bw_layout', array(
      'type' => 'radio',
      'section' => 'trend_news_box_full_width_section', // Add a default or your own section
      'label' => __( 'Select Layout','trend-news' ),
      'choices' => array(
        'full' => __( 'Full Width','trend-news' ),
        'box' => __( 'Boxed width','trend-news' ),
      ),
    ) );

    $wp_customize->add_setting( 'trend_news_select_bw_pixel', array(
        'capability'            => 'edit_theme_options',
        'default'               => 1200,
        'sanitize_callback'     => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'trend_news_select_bw_pixel', array(
        'label'                 =>  __( 'Boxed Width', 'trend-news' ),
        'section'               => 'trend_news_box_full_width_section',
        'settings'              => 'trend_news_select_bw_pixel',
        'type'                  => 'text',
    ) );
}
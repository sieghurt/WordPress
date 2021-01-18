<?php
/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Middle Header Ad
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'trend_news_middle_header',
    array(
        'priority'       => 5,
        'panel'          => 'trend_news_header_options_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Middle Header Setting', 'trend-news' )
    )
);


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 *Display Latest News Button
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'trend_news_middle_header_date_enable',
    array(
        'default'           => 1,
        'sanitize_callback' => 'trend_news_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'trend_news_middle_header_date_enable',
    array(
        'section'     => 'trend_news_middle_header',
        'label'       => __( 'Display Date & Time', 'trend-news' ),
        'type'        => 'checkbox'
    )       
);


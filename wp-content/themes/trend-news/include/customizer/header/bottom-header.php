<?php
/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Bottom Header Ad
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'trend_news_bottom_header',
    array(
        'priority'       => 5,
        'panel'          => 'trend_news_header_options_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Main Menu Right Buttons Setting', 'trend-news' ),
        'description'    => __( 'Managed the content display at Main Menu Right Buttons', 'trend-news' ),
    )
);


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 *Display Latest News Button
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'trend_news_bottom_header_latest_news',
    array(
        'default'           => 1,
        'sanitize_callback' => 'trend_news_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'trend_news_bottom_header_latest_news',
    array(
        'section'     => 'trend_news_bottom_header',
        'label'       => __( 'Display Latest News Button', 'trend-news' ),
        'type'        => 'checkbox'
    )       
);

$wp_customize->add_setting( 'trend_news_bottom_header_latest_news_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'trend_news_bottom_header_latest_news_title', array(
    'label'                 =>  __( 'Latest News Title', 'trend-news' ),
    'section'               => 'trend_news_bottom_header',
    'settings'              => 'trend_news_bottom_header_latest_news_title',
    'type'                  => 'text',
) );

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 *Display Latest News Button
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'trend_news_bottom_header_popular_news',
    array(
        'default'           => 1,
        'sanitize_callback' => 'trend_news_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'trend_news_bottom_header_popular_news',
    array(
        'section'     => 'trend_news_bottom_header',
        'label'       => __( 'Display Popular News Button', 'trend-news' ),
        'type'        => 'checkbox'
    )       
);

$wp_customize->add_setting( 'trend_news_bottom_header_popular_news_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'trend_news_bottom_header_popular_news_title', array(
    'label'                 =>  __( 'Popular News Title', 'trend-news' ),
    'section'               => 'trend_news_bottom_header',
    'settings'              => 'trend_news_bottom_header_popular_news_title',
    'type'                  => 'text',
) );
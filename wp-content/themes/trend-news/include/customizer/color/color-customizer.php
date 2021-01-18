<?php

add_action( 'customize_register', 'trend_news_color_settings_register' );

function trend_news_color_settings_register( $wp_customize ) {

   /**
   * Primary Theme Color
   */
   $wp_customize->add_setting( 'trend_news_primary_theme_color_setting', array(
      'capability'        => 'edit_theme_options',
      'default'           => '#F53D33',
      'sanitize_callback' => 'sanitize_hex_color'
  	) );

   	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'trend_news_primary_theme_color_setting',array(
          'label'                 =>  __( 'Primary Theme Color', 'trend-news' ),
          'section'               => 'colors',
          'type'                  => 'color',
          'priority'              => 0,
          'settings' 			  => 'trend_news_primary_theme_color_setting',
      ) )
   	);


    /**
    * Seconday Theme Color
    */
    $wp_customize->add_setting( 'trend_news_secondary_theme_color_setting', array(
      'capability'        => 'edit_theme_options',
      'default'           => '#040D34',
      'sanitize_callback' => 'sanitize_hex_color'
  	) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'trend_news_secondary_theme_color_setting',array(
      'label'                 =>  __( 'Secondary Theme Color', 'trend-news' ),
      'section'               => 'colors',
      'type'                  => 'color',
      'priority'              => 0,
      'settings' => 'trend_news_secondary_theme_color_setting',
  	) ));

}
<?php

function trend_news_scripts() {

	// <!-- Web Font -->
	wp_enqueue_style( 'trend-news-google-font', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900', array(), '' );

	// <!-- Bootstrap CSS -->
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/resources/css/bootstrap.min.css', array(), '4.0.0' );
		
	// <!-- Animate CSS -->
	wp_enqueue_style( 'animate', get_template_directory_uri() .'/resources/css/animate.css', array(), '4.0.0' );
	
	// <!-- Font Awesome CSS -->
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/resources/css/font-awesome.css', array(), '4.7.0' );

	// <!-- FancyBox CSS -->
	wp_enqueue_style( 'jquery-fancybox', get_template_directory_uri() .'/resources/css/jquery.fancybox.min.css', array(), '3.1.20' );

	// <!-- Magnipic Popup CSS -->
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() .'/resources/css/magnific-popup.min.css', array(), '1.1.0' );

	// <!-- owl Carousel CSS -->
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() .'/resources/css/owl-carousel.css', array(), '1.0.10' );	

	// <!-- TrendNews Stylesheet -->  
	wp_enqueue_style( 'trend-news-reset', get_template_directory_uri() .'/resources/css/reset.css', array(), '1.0.10' );	
	
	wp_enqueue_style( 'trend-news-style', get_stylesheet_uri(), array(), '1.0.0' );
	
	// responsive
	wp_enqueue_style( 'trend-news-responsive', get_template_directory_uri() .'/resources/css/responsive.css', array(), '1.0.10' );		
	
	// Popper Js
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/resources/js/popper.min.js', array('jquery'), '3.3.1', true ); 

	// <!-- Bootstrap JS -->
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/resources/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
	
	// <!-- Modernizr JS -->
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/resources/js/modernizr.min.js', array('jquery'), '4.0.0', true );
			
	// <!-- ScrollUp JS -->
	wp_enqueue_script( 'jquery-scrollup', get_template_directory_uri() . '/resources/js/jquery.scrollUp.min.js', array('jquery'), '2.4.1', true );
	
	// <!-- FacnyBox JS -->
	wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri() . '/resources/js/jquery-fancybox.min.js', array('jquery'), '3.1.20', true );
		
	// <!-- owl carousel JS -->
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/resources/js/owl-carousel.min.js', array('jquery'), '2.2.1', true );
	
	// <!-- Magnipic Popup JS -->
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/resources/js/magnific-popup.min.js', array('jquery'), '1.0.0', true );
		
	// <!-- Active JS -->
	wp_enqueue_script( 'trend-news-active', get_template_directory_uri() . '/resources/js/active.js', array('jquery'), '1.0.0', true );

	wp_enqueue_script( 'trend-news-sidenav', get_template_directory_uri() . '/resources/js/sidenav.js', array('jquery'), '1.0.0', true );
	
	wp_enqueue_script( 'trend-news-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'trend_news_scripts' );

add_action('elementor/editor/after_enqueue_scripts', function() {
    wp_enqueue_media();
    wp_enqueue_script('trend-news-widget', get_template_directory_uri() . '/resources/js/trend-news-widgets.js',array('jquery'), '1.0.0', true);
});
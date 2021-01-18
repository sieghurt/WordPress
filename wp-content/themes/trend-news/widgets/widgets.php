<?php
/**
* @package Trend_News
=========================
		WIDGET CLASS
=========================
*/

// widget Footer
require_once trailingslashit( get_template_directory() ) . '/widgets/footer-widgets/widget-footer-about.php';

// widget Common
require_once trailingslashit( get_template_directory() ) . '/widgets/common-widgets/widget-popular-posts.php';

// widget Frontpage
require_once trailingslashit( get_template_directory() ) . '/widgets/front-widgets/widget-front-layout1.php';
require_once trailingslashit( get_template_directory() ) . '/widgets/front-widgets/widget-front-layout2.php';
require_once trailingslashit( get_template_directory() ) . '/widgets/front-widgets/widget-front-layout3.php';
require_once trailingslashit( get_template_directory() ) . '/widgets/front-widgets/widget-front-layout4.php';
require_once trailingslashit( get_template_directory() ) . '/widgets/front-widgets/widget-front-layout5.php';
require_once trailingslashit( get_template_directory() ) . '/widgets/front-widgets/widget-front-layout6.php';
require_once trailingslashit( get_template_directory() ) . '/widgets/front-widgets/widget-front-layout7.php';
require_once trailingslashit( get_template_directory() ) . '/widgets/front-widgets/widget-front-layout8.php';
require_once trailingslashit( get_template_directory() ) . '/widgets/front-widgets/widget-front-layout9.php';

// Register Widget
if ( ! function_exists( 'trend_news_register_widget' ) ) {

    /**
     * Load widget.
     *
     * @since 1.0.0
    */
    function trend_news_register_widget() {

        // Footer Widgets
        register_widget( 'Trend_News_Footer_About_Widget' );

        // Commom WIdgets
        register_widget( 'Trend_News_Popular_Posts_Widget' );

        // Frontpage WIdgets
        register_widget( 'Trend_News_FrontLayout_One' );
        register_widget( 'Trend_News_FrontLayout_Two' );        
        register_widget( 'Trend_News_FrontLayout_Three' );
        register_widget( 'Trend_News_Block_Layout_Four' );
        register_widget( 'Trend_News_FrontLayout_Five' );
        register_widget( 'Trend_News_Block_Layout_Six' );
        register_widget( 'Trend_News_Block_Layout_Seven' );
        register_widget( 'Trend_News_Block_Layout_Eight' );
        register_widget( 'Trend_News_Block_Layout_Nine' );
    }
}

add_action( 'widgets_init', 'trend_news_register_widget' );
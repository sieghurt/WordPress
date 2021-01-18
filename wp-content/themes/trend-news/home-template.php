<?php
/**
 * Template Name: Fontpage
 *
 * This is page is used as front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Trend_News
 */
get_header();

if ( is_active_sidebar( 'frontpage-layout' ) ) {
	dynamic_sidebar( 'frontpage-layout' );
}

	while ( have_posts() ) : the_post();
			the_content();
 	endwhile; // End of the loop.

get_footer();
<?php
/**
 * Template Name: Full Width Page
 *
 * This is page is used as front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Trend_News
 */

get_header();
?>

<!-- News Single -->
<section class="blog-single section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-12">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );


				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();

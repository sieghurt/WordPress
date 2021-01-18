<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
			<div class="col-lg-8 col-12">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );


				endwhile; // End of the loop.
				?>
			</div>
			<div class="col-lg-4 col-12">
				<!-- Blog Sidebar -->
				<div class="blog-sidebar">
					<?php get_sidebar();?>
				</div>
				<!--/ End Blog Sidebar -->
			</div>
		</div>
	</div>
</section>


<?php
get_footer();

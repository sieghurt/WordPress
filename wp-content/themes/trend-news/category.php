<?php
/**
 * The template for displaying Category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Trend_News
 */

get_header();
?>

<!-- Start Blog Archives -->
<section class="category-archive section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-12">
				<div class="row">
					<?php
					if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'category' );

					endwhile;
					the_posts_navigation();
					?>
					<?php else :?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif;?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<!-- Blog Sidebar -->
				<div class="blog-sidebar">
					<?php get_sidebar();?>
				</div>
				<!--/ End Blog Sidebar -->
			</div>
			
		</div>
	</div>
</section>
<!--/ End Blog Archives -->

<?php
get_footer();

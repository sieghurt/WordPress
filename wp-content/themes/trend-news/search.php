<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Trend_News
 */

get_header();
?>
<!-- Start Blog Single -->
<section class="blog-page section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-12">
				
					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title">
								<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for: %s', 'trend-news' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h1>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation();?>

						<!-- End Blog Single -->
						<div class="row">
							<div class="col-12">
								<!-- Start Pagination -->
								<div class="pagination-main">
									<?php the_posts_pagination();?>
								</div>
								<!--/ End Pagination -->
							</div>
						</div>
					<?php else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>

		
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
<!--/ End Blog Single -->
<?php

get_footer();

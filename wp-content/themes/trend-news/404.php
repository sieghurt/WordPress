<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Trend_News
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-page section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Error Inner -->
						<div class="error-inner">
							<h2><?php esc_html_e( '404', 'trend-news' ); ?><span><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'trend-news' ); ?></span></h2>
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'trend-news' ); ?></p>
							<div class="button">
								<a href="<?php echo esc_url(home_url());?>" class="trendnews-btn"><?php esc_html_e( 'Go Home', 'trend-news' ); ?></a>
							</div>
						</div>
						<!--/ End Error Inner -->
					</div>
				</div>
			</div>
		</section>	
		
	</main><!-- #main -->

<?php
get_footer();

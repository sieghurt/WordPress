<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Trend_News
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Start Blog Single -->
	<div class="blog-single-main">
		<div class="row">
			<div class="col-12">
				<div class="blog-head">
					<?php trend_news_post_thumbnail(); ?>
				</div>
				<div class="blog-detail">
					<h2 class="blog-title"><?php the_title()?></h2>
					<div class="trendnews-content">
						<?php the_content();?>
					</div>
				</div>
				
			</div>
			
		</div>
	</div>
	<!-- End Blog Single -->
<div class="entry-content">
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'trend-news' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'trend-news' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
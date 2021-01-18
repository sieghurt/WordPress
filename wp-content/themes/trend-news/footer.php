<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Trend_News
 */

?>
</div><!-- Skip Link End-->

</div><!-- site boxed-layout End-->
<!-- Footer Area -->
<footer class="footer">
	<!-- Footer Top -->
	<?php if ( is_active_sidebar( 'footer-widget' ) ) : ?>
	<div class="footer-top">
		<div class="container">
			<div class="row">
					<?php dynamic_sidebar( 'footer-widget' ); ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<!-- End Footer Top -->
	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<div class="copyright-content text-left">
						<p><?php esc_html_e('&copy; All Right Reserved ','trend-news'); bloginfo('title');?> <?php echo  esc_html(date_i18n( __( 'Y' , 'trend-news' ) ));?></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<div class="copyright-content text-right">
						<p>
 						<?php
            				/* translators: 1: Theme name, 2: Theme author. */
            				printf( esc_html__( 'Theme %2$s  By  %1$s', 'trend-news' ), '<a href="https://wpnewstheme.com/" target="_blank" > WP News Theme </a>' , '<a href="https://wpnewstheme.com/items/trend-news/" target="_blank">Trend News</a>' );?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Copyright -->
</footer>
<!-- End Footer Area -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Trend_News
 */

?>

<div class="col-lg-6 col-md-6 col-12">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Single News -->
	<div class="single-news">
		<?php  if(has_post_thumbnail()):?>
		<div class="news-head">
			<?php the_post_thumbnail('trend-news-350X240-thumbnail'); ?>
		</div>
		<?php else:?>
		<div class="news-head">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="350" height="240">
		</div>
		<?php endif;?>	
		<?php 
			$categories = get_the_category(get_the_ID());
		?>
		<div class="trendnews-content">
			<?php if(isset($categories) && !empty($categories) ){?>
			<div class="cat-name">
				<a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>" class="music-cat">
					<?php echo esc_html($categories[0]->name); ?>
				</a>
			</div>
			<?php }?>
			<h3 class="news-title medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<!-- Trending Meta -->
			<div class="trendnews-meta">
				<span class="author"><?php trend_news_posted_by();?></span>
				<span><i class="fa fa-calendar"></i><?php trend_news_posted_on();?></span>
				<?php if(absint(get_comments_number()) > 0):?>
				<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
				<?php endif;?>
			</div>
			<?php the_excerpt();?>
		</div>
	</div>
	<!--/ End Single News -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>

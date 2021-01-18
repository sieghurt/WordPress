<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Trend_News
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Start Blog Single -->
	<div class="blog-single-main">
		<div class="single-inner">
			<?php 
				$categories = get_the_category(get_the_ID());
			?>
			<div class="blog-head">
				<?php if(isset($categories) && !empty($categories) ){?>
				<div class="cat-name"><a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>" class="default-cat"><?php echo esc_html($categories[0]->name); ?></a></div>
				<?php }?>
				<?php  if(has_post_thumbnail()):?>
				<?php the_post_thumbnail('trend-news-730X400-thumbnail'); ?>
				<?php else:?>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="730" height="400">
				<?php endif;?>
			</div>
			<div class="blog-detail">
				<!-- Trending Meta -->
				<div class="trendnews-meta">
					<span class="author"><?php trend_news_posted_by();?></span>
					<span><i class="fa fa-calendar"></i><?php trend_news_posted_on();?></span>
					<?php if(absint(get_comments_number()) > 0):?>
					<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
					<?php endif;?>
				</div>
				<h2 class="blog-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<div class="content">
					<?php the_excerpt();?>
					<a href="<?php the_permalink();?>" class="btn"><?php esc_html_e('Read More','trend-news');?></a>
				</div>
			</div>
		</div>		
	</div>
	<!-- End Blog Single -->
</article><!-- #post-<?php the_ID(); ?> -->

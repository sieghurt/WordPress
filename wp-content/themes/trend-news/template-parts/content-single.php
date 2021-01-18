<?php
/**
 * Template part for displaying posts
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
					<!-- Trending Meta -->
					<div class="trendnews-meta">
						<span class="author"><?php trend_news_posted_by();?></span>
						<span><i class="fa fa-calendar"></i><?php trend_news_posted_on();?> </span>
						<?php if(absint(get_comments_number()) > 0):?>
						<span class="comment"><i class="fa fa-comments"></i><?php esc_html_e('Comment', 'trend-news');?>  (<?php echo absint(get_comments_number());?>)</span>
						<?php endif;?>
					</div>
					<h2 class="blog-title"><?php the_title()?></h2>
					<div class="trendnews-content">
						<?php the_content();?>
					</div>
				</div>
				<!-- Tag and Share -->
				<div class="tag-share">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-xs-12">
							<div class="content-tags">
								<h4><?php esc_html_e('Tags:', 'trend-news');?></h4>
								<?php $trend_news_tags = get_the_tags(get_the_ID());?>
								<ul class="tag-inner">
									<?php
									if(!empty($tags)):
										foreach ($trend_news_tags as $trend_news_tag):?>
										<li><a href="<?php echo esc_url(get_tag_link($trend_news_tag->term_id));?>"><?php echo esc_html($trend_news_tag->name);?></a></li>
									<?php 
										endforeach;
									endif;
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Tag and Share -->
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
</article><!-- #post-<?php the_ID(); ?> -->

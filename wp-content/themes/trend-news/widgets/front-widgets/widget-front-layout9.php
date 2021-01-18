<?php
/**
* Widget - News Block Layouts Nine
*
* @package Trend_News
*/


/*-----------------------------------------------------
Front Page News Layout Nine Widgets
-----------------------------------------------------*/

	if ( ! class_exists( 'Trend_News_Block_Layout_Nine' ) ) :
/**
* News Block Layout Nine
*/
class Trend_News_Block_Layout_Nine extends WP_Widget
{

	function __construct()
	{
		$opts = array(
			'classname' => 'block-layout-a',
			'description'	=> esc_html__( 'Trend News Block Layout Nine. Place it within "Frontpage Layouts Area"', 'trend-news' )
		);

		parent::__construct( 'trend-news-block-layout-nine', esc_html__( 'TN: News Block Layout 9', 'trend-news' ), $opts );
	}

	function form( $instance ) {
		?>
	
		<?php
		$layout_enable = ! empty( $instance[ 'layout_enable' ] ) ? $instance[ 'layout_enable' ] : 'off';
		
		$title1 = ! empty( $instance[ 'title1' ] ) ? $instance[ 'title1' ] : '';
		$cat1 = ! empty( $instance[ 'cat1' ] ) ? $instance[ 'cat1' ] : 0;

		$title2 = ! empty( $instance[ 'title2' ] ) ? $instance[ 'title2' ] : '';
		$cat2 = ! empty( $instance[ 'cat2' ] ) ? $instance[ 'cat2' ] : 0;

		$title3 = ! empty( $instance[ 'title3' ] ) ? $instance[ 'title3' ] : '';
		$cat3 = ! empty( $instance[ 'cat3' ] ) ? $instance[ 'cat3' ] : 0;

		$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 3;
		

		?>
		<p>
			<input class="checkbox" type="checkbox" <?php checked( $layout_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'layout_enable' ) ); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>"><?php esc_html_e('Display News Block Layout 9', 'trend-news'); ?></label>
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title1' ) ); ?>"><strong><?php echo esc_html__( 'Title 1: ', 'trend-news' ); ?></strong></label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title1' ) ); ?>" value="<?php echo esc_attr( $title1 ); ?>" class="widefat">
		</p>
		
		
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'cat1' ) )?>"><strong><?php echo esc_html__( 'Select Category 1: ', 'trend-news' ); ?></strong></label>
			<?php
			$cat1_args = array(
				'orderby'	=> 'name',
				'hide_empty'	=> 1,
				'show_count'    => 1,
				'hierarchical'  => 1,
				'id'	=> esc_attr($this->get_field_id( 'cat1' )),
				'name'	=> esc_attr($this->get_field_name( 'cat1' )),
				'class'	=> 'widefat',
				'taxonomy'	=> 'category',
				'selected'	=> absint( $cat1 ),
				'show_option_all'	=> esc_html__( 'All category', 'trend-news' )
			);
			wp_dropdown_categories( $cat1_args );
			?>
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title2' ) ); ?>"><strong><?php echo esc_html__( 'Title 2: ', 'trend-news' ); ?></strong></label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title2' ) ); ?>" value="<?php echo esc_attr( $title2 ); ?>" class="widefat">
		</p>


		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'cat2' ) )?>"><strong><?php echo esc_html__( 'Select Category 2: ', 'trend-news' ); ?></strong></label>
			<?php
			$cat2_args = array(
				'orderby'	=> 'name',
				'hide_empty'	=> 1,
				'show_count'    => 1,
				'hierarchical'  => 1,
				'id'	=> esc_attr($this->get_field_id( 'cat2' )),
				'name'	=> esc_attr($this->get_field_name( 'cat2' )),
				'class'	=> 'widefat',
				'taxonomy'	=> 'category',
				'selected'	=> absint( $cat2 ),
				'show_option_all'	=> esc_html__( 'All category', 'trend-news' )
			);
			wp_dropdown_categories( $cat2_args );
			?>
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title3' ) ); ?>"><strong><?php echo esc_html__( 'Title 3: ', 'trend-news' ); ?></strong></label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title3' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title3' ) ); ?>" value="<?php echo esc_attr( $title3 ); ?>" class="widefat">
		</p>


		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'cat3' ) )?>"><strong><?php echo esc_html__( 'Select Category 3: ', 'trend-news' ); ?></strong></label>
			<?php
			$cat3_args = array(
				'orderby'	=> 'name',
				'hide_empty'	=> 1,
				'show_count'    => 1,
				'hierarchical'  => 1,
				'id'	=> esc_attr($this->get_field_id( 'cat3' )),
				'name'	=> esc_attr($this->get_field_name( 'cat3' )),
				'class'	=> 'widefat',
				'taxonomy'	=> 'category',
				'selected'	=> absint( $cat3 ),
				'show_option_all'	=> esc_html__( 'All category', 'trend-news' )
			);
			wp_dropdown_categories( $cat3_args );
			?>
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'post_no' ) )?>"><strong><?php echo esc_html__( 'Post No For Slider: ', 'trend-news' )?></strong></label>
			<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'post_no' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_no' ) ); ?>" value="<?php echo esc_attr( $post_no ); ?>" class="widefat">
		</p>

		<?php
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance[ 'layout_enable' ] = sanitize_text_field($new_instance[ 'layout_enable' ]);
		$instance[ 'title1' ]  = sanitize_text_field( $new_instance[ 'title1' ] );
		$instance[ 'cat1' ]    = absint( $new_instance[ 'cat1' ] );
		$instance[ 'title2' ]  = sanitize_text_field( $new_instance[ 'title2' ] );
		$instance[ 'cat2' ]    = absint( $new_instance[ 'cat2' ] );
		$instance[ 'title3' ]  = sanitize_text_field( $new_instance[ 'title3' ] );
		$instance[ 'cat3' ]    = absint( $new_instance[ 'cat3' ] );
		$instance[ 'post_no' ] = absint( $new_instance[ 'post_no' ] );
		
		return $instance;
	}
	function widget( $args, $instance ) {
		$layout_enable_check = isset( $instance['layout_enable'] ) ? esc_attr( $instance['layout_enable'] ) : '';

		$layout_enable = $layout_enable_check ? 'true' : 'false';
		
		$cat1 = ! empty( $instance[ 'cat1' ] ) ? $instance[ 'cat1' ] : 0;
		$title1 = apply_filters( 'widget_title', ! empty( $instance['title1'] ) ? $instance['title1'] : get_cat_name( $cat1 ), $instance, $this->id_base );
		
		$cat2 = ! empty( $instance[ 'cat2' ] ) ? $instance[ 'cat2' ] : 0;
		$title2 = apply_filters( 'widget_title', ! empty( $instance['title2'] ) ? $instance['title2'] : get_cat_name( $cat2 ), $instance, $this->id_base );

		$cat3 = ! empty( $instance[ 'cat3' ] ) ? $instance[ 'cat3' ] : 0;
		$title3 = apply_filters( 'widget_title', ! empty( $instance['title3'] ) ? $instance['title3'] : get_cat_name( $cat3 ), $instance, $this->id_base );

		$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 3;
		echo $args[ 'before_widget' ];
		if($layout_enable =='true'):
			?>
			<!-- Start Featured News -->
			<section class="featured-news section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="row">

								<div class="col-lg-4 col-md-4 col-12">
									<h3 class="grid-title"><?php echo esc_html($title1);?></h3>
									<!-- Single News -->
									<div class="post-one-thumbnail">
										<?php
										$t1_arguments = array(
											'cat'	=> absint( $cat1 ),
											'posts_per_page' => absint( $post_no ),						
											'orderby' => 'DESC',
										);
										$t1_query = new WP_Query( $t1_arguments );
										if( $t1_query->have_posts() ) :
											$count = 0;
											while( $t1_query->have_posts() ) :
												$t1_query->the_post();
												if( $count == 0 ) :
											?>
											<?php if( has_post_thumbnail() ) :?>
											<div class="news-head layout9-first">
												<?php the_post_thumbnail('trend-news-320X214-thumbnail');?>
											</div>
											<?php else:?>
											<div class="news-head layout9-first">
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="320" height="214">
											</div>
											<?php endif;?>
										<div class="content">
											<!-- Trending Meta -->
											<div class="trendnews-meta">
												<span class="author"><?php trend_news_posted_by();?></span>
												<span><i class="fa fa-calendar"></i><?php trend_news_posted_on();?></span>
												<?php if(absint(get_comments_number()) > 0):?>
												<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
												<?php endif;?>
											</div>
											<h3 class="title-medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
											<?php the_excerpt();?>
										</div>
										<?php
											endif;
											$count = $count + 1;
										endwhile;
										endif;
										wp_reset_postdata();
										?>
										<div class="post-one-small">
										<?php
										$t1_arguments = array(
											'cat'	=> absint( $cat1 ),
											'posts_per_page' => absint( $post_no ),						
											'orderby' => 'DESC',
										);
										$t1_query = new WP_Query( $t1_arguments );
										if( $t1_query->have_posts() ) :
											$count = 0;
											while( $t1_query->have_posts() ) :
												$t1_query->the_post();
												if( $count > 0 ) :
											?>
											<!-- Post Single -->
											<div class="post-one-single">
											<?php if( has_post_thumbnail() ) :?>
											<div class="news-head">
												<?php the_post_thumbnail();?>
											</div>
											<?php else:?>
											<div class="news-head">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg">
											</div>
											<?php endif;?>
												<div class="content">
													<!-- Trending Meta -->
													<div class="trendnews-meta">
														<span class="author"><?php trend_news_posted_by();?></span>
														<?php if(absint(get_comments_number()) > 0):?>
														<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
														<?php endif;?>
													</div>
													<h3 class="news-title small"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
												</div>
											</div>
											<?php
												endif;
												$count = $count + 1;
											endwhile;
											endif;
											wp_reset_postdata();
											?>
										</div>
									</div>
									<!--/ End Single News -->
								</div>
								
								<div class="col-lg-4 col-md-4 col-12">
									<h3 class="grid-title"><?php echo esc_html($title2);?></h3>
									<!-- Single News -->
									<div class="post-one-thumbnail">
										<?php
										$t2_arguments = array(
											'cat'	=> absint( $cat2 ),
											'posts_per_page' => absint( $post_no ),						
											'orderby' => 'DESC',
										);
										$t2_query = new WP_Query( $t2_arguments );
										if( $t2_query->have_posts() ) :
											$count = 0;
											while( $t2_query->have_posts() ) :
												$t2_query->the_post();
												if( $count == 0 ) :
											?>
										<?php if( has_post_thumbnail() ) :?>
											<div class="news-head layout9-first">
												<?php the_post_thumbnail('trend-news-320X214-thumbnail');?>
											</div>
										<?php else:?>
											<div class="news-head layout9-first">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="320" height="214">
											</div>
										<?php endif;?>
										<div class="content">
											<!-- Trending Meta -->
											<div class="trendnews-meta">
												<span class="author"><?php trend_news_posted_by();?></span>
												<span><i class="fa fa-calendar"></i><?php trend_news_posted_on();?></span>
												<?php if(absint(get_comments_number()) > 0):?>
												<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
												<?php endif;?>
											</div>
											<h3 class="title-medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
											<?php the_excerpt();?>
										</div>
										<?php
											endif;
											$count = $count + 1;
										endwhile;
										endif;
										wp_reset_postdata();
										?>
										<div class="post-one-small">
											<?php
										$t2_arguments = array(
											'cat'	=> absint( $cat2 ),
											'posts_per_page' => absint( $post_no ),						
											'orderby' => 'DESC',
										);
										$t2_query = new WP_Query( $t2_arguments );
										if( $t2_query->have_posts() ) :
											$count = 0;
											while( $t2_query->have_posts() ) :
												$t2_query->the_post();
												if( $count > 0 ) :
											?>
											<!-- Post Single -->
											<div class="post-one-single">
											<?php if( has_post_thumbnail() ) :?>
											<div class="news-head">
												<?php the_post_thumbnail();?>
											</div>
											<?php else:?>
											<div class="news-head">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg">
											</div>
											<?php endif;?>
												<div class="content">
													<!-- Trending Meta -->
													<div class="trendnews-meta">
														<span class="author"><?php trend_news_posted_by();?></span>
														<?php if(absint(get_comments_number()) > 0):?>
														<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
														<?php endif;?>
													</div>
													<h3 class="news-title small"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
												</div>
											</div>
											<?php
												endif;
												$count = $count + 1;
											endwhile;
											endif;
											wp_reset_postdata();
											?>
										</div>
									</div>
									<!--/ End Single News -->
								</div>

								<div class="col-lg-4 col-md-4 col-12">
									<h3 class="grid-title"><?php echo esc_html($title3);?></h3>
									<!-- Single News -->
									<div class="post-one-thumbnail">
										<?php
										$t3_arguments = array(
											'cat'	=> absint( $cat3 ),
											'posts_per_page' => absint( $post_no ),						
											'orderby' => 'DESC',
										);
										$t3_query = new WP_Query( $t3_arguments );
										if( $t3_query->have_posts() ) :
											$count = 0;
											while( $t3_query->have_posts() ) :
												$t3_query->the_post();
												if( $count == 0 ) :
											?>
										<?php if( has_post_thumbnail() ) :?>
											<div class="news-head layout9-first">
												<?php the_post_thumbnail('trend-news-320X214-thumbnail');?>
											</div>
										<?php else:?>
											<div class="news-head layout9-first">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="320" height="214">
											</div>
										<?php endif;?>
										<div class="content">
											<!-- Trending Meta -->
											<div class="trendnews-meta">
												<span class="author"><?php trend_news_posted_by();?></span>
												<span><i class="fa fa-calendar"></i><?php trend_news_posted_on();?></span>
												<?php if(absint(get_comments_number()) > 0):?>
												<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
												<?php endif;?>
											</div>
											<h3 class="title-medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
											<?php the_excerpt();?>
										</div>
										<?php
											endif;
											$count = $count + 1;
										endwhile;
										endif;
										wp_reset_postdata();
										?>
										<div class="post-one-small">
											<?php
										$t3_arguments = array(
											'cat'	=> absint( $cat3 ),
											'posts_per_page' => absint( $post_no ),						
											'orderby' => 'DESC',
										);
										$t3_query = new WP_Query( $t3_arguments );
										if( $t3_query->have_posts() ) :
											$count = 0;
											while( $t3_query->have_posts() ) :
												$t3_query->the_post();
												if( $count > 0 ) :
											?>
											<!-- Post Single -->
											<div class="post-one-single">
											<?php if( has_post_thumbnail() ) :?>
											<div class="news-head">
												<?php the_post_thumbnail();?>
											</div>
											<?php else:?>
											<div class="news-head">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg">
											</div>
											<?php endif;?>
												<div class="content">
													<!-- Trending Meta -->
													<div class="trendnews-meta">
														<span class="author"><?php trend_news_posted_by();?></span>
														<?php if(absint(get_comments_number()) > 0):?>
														<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
														<?php endif;?>
													</div>
													<h3 class="news-title small"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
												</div>
											</div>
											<?php
												endif;
												$count = $count + 1;
											endwhile;
											endif;
											wp_reset_postdata();
											?>
										</div>
									</div>
									<!--/ End Single News -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/ End Featured News -->	
			<?php
		endif;
		echo $args[ 'after_widget' ];
	}
}
endif;
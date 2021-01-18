<?php
/**
* Widget - News Block Layouts Four
*
* @package Trend_News
*/


/*-----------------------------------------------------
Front Page News Layout Four Widgets
-----------------------------------------------------*/

	if ( ! class_exists( 'Trend_News_Block_Layout_Four' ) ) :
/**
* News Block Layout Four
*/
class Trend_News_Block_Layout_Four extends WP_Widget
{

	function __construct()
	{
		$opts = array(
			'classname' => 'block-layout-a',
			'description'	=> esc_html__( 'Trend News Block Layout Four. Place it within "Frontpage Layouts Area"', 'trend-news' )
		);

		parent::__construct( 'trend-news-block-layout-four', esc_html__( 'TN: News Block Layout 4', 'trend-news' ), $opts );
	}

	function form( $instance ) {
		?>
	
		<?php
		$layout_enable = ! empty( $instance[ 'layout_enable' ] ) ? $instance[ 'layout_enable' ] : 'off';
		
		$title1 = ! empty( $instance[ 'title1' ] ) ? $instance[ 'title1' ] : '';
		$cat1 = ! empty( $instance[ 'cat1' ] ) ? $instance[ 'cat1' ] : 0;
		$post_no1 = ! empty( $instance[ 'post_no1' ] ) ? $instance[ 'post_no1' ] : 3;

		$title2 = ! empty( $instance[ 'title2' ] ) ? $instance[ 'title2' ] : '';
		$cat2 = ! empty( $instance[ 'cat2' ] ) ? $instance[ 'cat2' ] : 0;
		$post_no2 = ! empty( $instance[ 'post_no2' ] ) ? $instance[ 'post_no2' ] : 4;
		$slider_no 	  			  = ! empty( $instance[ 'slider_no' ] ) ? $instance[ 'slider_no' ] : 2;
		$post_no_per_slider 	  = ! empty( $instance[ 'post_no_per_slider' ] ) ? $instance[ 'post_no_per_slider' ] : 2;
		?>
		<p>
			<input class="checkbox" type="checkbox" <?php checked( $layout_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'layout_enable' ) ); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>"><?php esc_html_e('Display News Block Layout 4', 'trend-news'); ?></label>
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
			<label for="<?php echo esc_attr( $this->get_field_id( 'post_no1' ) )?>"><strong><?php echo esc_html__( 'Post No 1: ', 'trend-news' )?></strong></label>
			<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'post_no1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_no1' ) ); ?>" value="<?php echo esc_attr( $post_no1 ); ?>" class="widefat">
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
			<label for="<?php echo esc_attr( $this->get_field_id( 'post_no2' ) )?>"><strong><?php echo esc_html__( 'Post No 2: ', 'trend-news' )?></strong></label>
			<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'post_no2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_no2' ) ); ?>" value="<?php echo esc_attr( $post_no2 ); ?>" class="widefat">
		</p>
	
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'slider_no' ) )?>"><strong><?php echo esc_html__( 'Number of slider: ', 'trend-news' )?></strong></label>
			<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'slider_no' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'slider_no' ) ); ?>" value="<?php echo esc_attr( $slider_no ); ?>" class="widefat">
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'post_no_per_slider' ) )?>"><strong><?php echo esc_html__( 'Post Number Per Slider: ', 'trend-news' )?></strong></label>
			<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'post_no_per_slider' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_no_per_slider' ) ); ?>" value="<?php echo esc_attr( $post_no_per_slider ); ?>" class="widefat">
		</p>

		<?php
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance[ 'layout_enable' ] = sanitize_text_field($new_instance[ 'layout_enable' ]);
		$instance[ 'title1' ]  	= sanitize_text_field( $new_instance[ 'title1' ] );
		$instance[ 'cat1' ]    	= absint( $new_instance[ 'cat1' ] );
		$instance[ 'post_no1' ] = absint( $new_instance[ 'post_no1' ] );
		$instance[ 'title2' ]  	= sanitize_text_field( $new_instance[ 'title2' ] );
		$instance[ 'cat2' ]    	= absint( $new_instance[ 'cat2' ] );
		$instance[ 'post_no2' ] = absint( $new_instance[ 'post_no2' ] );
		$instance[ 'slider_no' ] = absint( $new_instance[ 'slider_no' ] );
		$instance[ 'post_no_per_slider' ] = absint( $new_instance[ 'post_no_per_slider' ] );
		return $instance;
	}
	function widget( $args, $instance ) {
		$layout_enable_check = isset( $instance['layout_enable'] ) ? esc_attr( $instance['layout_enable'] ) : '';

		$layout_enable = $layout_enable_check ? 'true' : 'false';
		
		$cat1 = ! empty( $instance[ 'cat1' ] ) ? $instance[ 'cat1' ] : 0;
		$title1 = apply_filters( 'widget_title', ! empty( $instance['title1'] ) ? $instance['title1'] : get_cat_name( $cat1 ), $instance, $this->id_base );
		$post_no1 = ! empty( $instance[ 'post_no1' ] ) ? $instance[ 'post_no1' ] : 3;

		$cat2 = ! empty( $instance[ 'cat2' ] ) ? $instance[ 'cat2' ] : 0;
		$title2 = apply_filters( 'widget_title', ! empty( $instance['title2'] ) ? $instance['title2'] : get_cat_name( $cat2 ), $instance, $this->id_base );

		$post_no2 = ! empty( $instance[ 'post_no2' ] ) ? $instance[ 'post_no2' ] : 4;
		$post_no_per_slider = ! empty( $instance[ 'post_no_per_slider' ] ) ? $instance[ 'post_no_per_slider' ] : 2;

		$slider_no = ! empty( $instance[ 'slider_no' ] ) ? $instance[ 'slider_no' ] : 2;
		echo $args[ 'before_widget' ];
		if($layout_enable =='true'):
			?>
			<!-- Featured & Newsletter -->
			<section class="section featured-newsletter">
				<div class="container">
					<div class="row">
						<!-- Single Grid -->
						<div class="col-lg-5 col-12">
							<!-- Top Featured News -->
							<div class="top-feature-news">
								<h3 class="grid-title"><i class="fa fa-globe"></i><?php echo esc_html($title1);?></span></h3>
								<div class="top-feature-slider layout4-first">
									<?php
									$t1_arguments = array(
										'cat'	=> absint( $cat1 ),
										'posts_per_page' => absint( $post_no1 ),						
										'orderby' => 'DESC',
									);
									$t1_query = new WP_Query( $t1_arguments );
									if( $t1_query->have_posts() ) :
									
										while( $t1_query->have_posts() ) :
											$t1_query->the_post();
											
										?>
										<!-- Single Feature News -->
										<div class="single-feature">
											<!-- Feature Head -->
											<?php if( has_post_thumbnail() ) :?>
											<div class="feature-head">
												<?php the_post_thumbnail('trend-news-445X290-thumbnail');?>
											</div>
											<?php else:?>
											<div class="feature-head">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="445" height="290">
											</div>
											<?php endif;?>
											<!-- End News Head -->			
											<!-- Feature Content -->
											<div class="trendnews-content">
												<div class="trendnews-meta">
													<span class="author"><?php trend_news_posted_by();?></span>
													<span><i class="fa fa-calendar"></i><?php trend_news_posted_on();?></span>
													<?php if(absint(get_comments_number()) > 0):?>
													<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
													<?php endif;?>
												</div>
												<h2 class="news-title medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
												<?php the_excerpt();?>
											</div>		
										</div>
										<!--/ End Single Feature News -->
									<?php
														
									endwhile;
									endif;
									wp_reset_postdata();
									?>
								</div>	
							</div>	
							<!--/ End Top Featured News -->
						</div>	
						<!--/ End Single Grid -->
						<!-- Post Small Thumbnail -->
						<div class="col-lg-4 col-md-6 col-12">
							<div class="post-thumbnail-feature">
								<h3 class="grid-title"><?php echo esc_html($title2);?></h3>
								<div class="post-thumbnail-slider">
									<!-- Single Slider -->
									<?php for($i=1;$i<=$slider_no;$i++):?>		
									<div class="single-slider">
										<!-- Single News -->	
										<?php
										$t2_arguments = array(
											'cat'	=> absint( $cat2 ),
											'posts_per_page' => absint( $post_no2 ),						
											'orderby' => 'DESC',
										);
										$t2_query = new WP_Query( $t2_arguments );
										$count = 0;
										if( $t2_query->have_posts() ) :
											$count = 0;
											while( $t2_query->have_posts() ) :
											$t2_query->the_post();
											if($i == 1):
											if( $count < $post_no_per_slider):
											$categories = get_the_category(get_the_ID());
										?>		
										<div class="single-news">
											<div class="news-head shadow">

											<?php if( has_post_thumbnail() ) :?>
											<?php the_post_thumbnail('trend-news-350X196-thumbnail');?>
											<?php else:?>
											
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="350" height="196">
										
											<?php endif;?>


												
												<div class="trendnews-content">
													<?php if(isset($categories) && !empty($categories) ){?>
													<div class="cat-name"><a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>" class="default-cat"><?php echo esc_html($categories[0]->name); ?></a></div>
													<?php }?>
													<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
												</div>
											</div>
										</div>
										<?php
										endif;
										endif;
										if($i > 1):
										if( $count >= (($i - 1) * $post_no_per_slider) && $count < ($i * $post_no_per_slider) ):?>
										<div class="single-news">
											<div class="news-head shadow">
												<?php the_post_thumbnail('trend-news-350X196-thumbnail');?>
												<div class="trendnews-content">
													<?php if( isset($categories) && !empty($categories) ){?>
													<div class="cat-name">
														<a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>" class="default-cat"><?php echo esc_html($categories[0]->name); ?></a>
													</div>
													<?php }?>
													<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
												</div>
											</div>
										</div>
										<?php 
										endif;
										endif;
										$count = $count + 1;
										endwhile;
										endif;
										wp_reset_postdata();
										?>
										<!-- End Single News -->		
									</div>
									<!-- End Single Slider -->		
									<?php endfor;?>
								</div>
							</div>	
						</div>	
						<!--/ End Post Small Thumbnail -->
						<!-- Strar Single Grid -->
						<div class="col-lg-3 col-md-6 col-12">
							<div class="trend-newsletter">
								<div class="content">
									<?php if ( is_active_sidebar( 'right-side-area' ) ) { ?>
											<?php dynamic_sidebar( 'right-side-area' );?>
										<?php } ?>
								</div>
							</div>
						</div>
						<!-- /End Single Grid -->
					</div>
				</div>
			</section>
			<!--/ Emd Featured & Newsletter -->
			<?php
		endif;
		echo $args[ 'after_widget' ];
	}
}
endif;
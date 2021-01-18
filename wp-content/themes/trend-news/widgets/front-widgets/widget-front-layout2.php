<?php
/**
* Widget - News Block Layouts Two
*
* @package Trend_News
*/


/*-----------------------------------------------------
Front Page News Layout Two Widgets
-----------------------------------------------------*/

if ( ! class_exists( 'Trend_News_FrontLayout_Two' ) ) :
/**
* News Block Layout Two
*/
class Trend_News_FrontLayout_Two extends WP_Widget
{

function __construct()
{
	$opts = array(
		'classname' => 'block-layout-a',
		'description'	=> esc_html__( 'Trend News Block Layout Two. Place it within "Frontpage Layouts Area"', 'trend-news' )
	);

	parent::__construct( 'trend-news-block-layout-two', esc_html__( 'TN: News Block Layout 2', 'trend-news' ), $opts );
}

function form( $instance ) {
	$layout_enable = ! empty( $instance[ 'layout_enable' ] ) ? $instance[ 'layout_enable' ] : 'off';
	$cat1 	 = ! empty( $instance[ 'cat1' ] ) ? $instance[ 'cat1' ] : 0;
	$post_no1 = ! empty( $instance[ 'post_no1' ] ) ? $instance[ 'post_no1' ] : 3;

	$cat2 	  = ! empty( $instance[ 'cat2' ] ) ? $instance[ 'cat2' ] : 0;
	$post_no2 = ! empty( $instance[ 'post_no2' ] ) ? $instance[ 'post_no2' ] : 4;

	?>

	<p>
		<input class="checkbox" type="checkbox" <?php checked( $layout_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'layout_enable' ) ); ?>" /> 
		<label for="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>"><?php esc_html_e('Display News Block Layout 2', 'trend-news'); ?></label>
	</p>

	
	
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'cat1' ) )?>"><strong><?php echo esc_html__( 'Select Category Option for left:', 'trend-news' ); ?></strong></label>
		<br>
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
		<label for="<?php echo esc_attr( $this->get_field_id( 'post_no1' ) )?>"><strong><?php echo esc_html__( 'Post No For left: ', 'trend-news' )?></strong></label>
		<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'post_no1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_no1' ) ); ?>" value="<?php echo esc_attr( $post_no1 ); ?>" class="widefat">
	</p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'cat2' ) )?>"><strong><?php echo esc_html__( 'Select Category Option for right:', 'trend-news' ); ?></strong></label>
		<br>
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
		<label for="<?php echo esc_attr( $this->get_field_id( 'post_no2' ) )?>"><strong><?php echo esc_html__( 'Post No For right: ', 'trend-news' )?></strong></label>
		<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'post_no2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_no2' ) ); ?>" value="<?php echo esc_attr( $post_no2 ); ?>" class="widefat">
	</p>
	<?php
}

function update( $new_instance, $old_instance ) {
	$instance = $old_instance;
		
	$instance[ 'layout_enable' ] = sanitize_text_field($new_instance[ 'layout_enable' ]);
	$instance[ 'cat1' ] 		 = absint( $new_instance[ 'cat1' ] );
	$instance[ 'post_no1' ] 	 = absint( $new_instance[ 'post_no1' ] );

	$instance[ 'cat2' ]	 	= absint( $new_instance[ 'cat2' ] );
	$instance[ 'post_no2' ] = absint( $new_instance[ 'post_no2' ] );
	
	return $instance;
}


function widget( $args, $instance ) {
	$layout_enable_check = isset( $instance['layout_enable'] ) ? esc_attr( $instance['layout_enable'] ) : '';
	$layout_enable = $layout_enable_check ? 'true' : 'false';
	$cat1 = ! empty( $instance[ 'cat1' ] ) ? $instance[ 'cat1' ] : 0;
	$post_no1 = ! empty( $instance[ 'post_no1' ] ) ? $instance[ 'post_no1' ] : 3;

	$cat2 = ! empty( $instance[ 'cat2' ] ) ? $instance[ 'cat2' ] : 0;
	$post_no2 = ! empty( $instance[ 'post_no2' ] ) ? $instance[ 'post_no2' ] : 4;
	
	
	if($layout_enable =='true'):
		 
		?>
		<!-- Main Layout -->
		<section class="main-layout">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="layout-inner">
							<div class="row">
								<div class="col-lg-6 col-12">
									<!-- News Slider -->
									<div class="hero-slider">
										<!-- News Slider -->
										<div class="hero-slider-active">
										<?php
										$arguments = array(
											'cat'	=> absint( $cat1 ),
											'posts_per_page' => absint( $post_no1 ),
											'orderby' => 'DESC',
										);
										$query = new WP_Query( $arguments );
										if( $query->have_posts() ) :
											while( $query->have_posts() ) :
										$query->the_post();
											?>
											<!-- Single Slider Loop-->
											<div class="single-slider">
												<!-- Slider Head -->
												<div class="slider-head shadow">
													<?php 
														$categories = get_the_category(get_the_ID());
													?>
													<?php if(isset($categories) && !empty($categories) ){?>
													<div class="cat-name"><a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>" class="default-cat"><?php echo esc_html($categories[0]->name); ?></a></div>
													<?php }?>
													<?php  if(has_post_thumbnail()):?>
													<?php the_post_thumbnail('trend-news-540X604-thumbnail');?>
													<?php else:?>
														<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" height="604">
													<?php endif;?>	
													<!-- Slider Content -->
													<div class="slider-content">
														<!-- Meta -->
														<div class="meta">
															<span class="date"><i class="fa fa-calendar"></i><?php trend_news_posted_on();?></span>
															<?php if(absint(get_comments_number()) > 0):?>
															<span class="views"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
															<?php endif;?>
														</div>
														<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
														<a href="<?php the_permalink();?>" class="read-more"><?php esc_html_e('Read more','trend-news');?> <i class="fa fa-long-arrow-right"></i></a>
													</div>	
												</div>
											</div>
											<!--/ End Single Slider -->
										<?php
											endwhile;
										endif;
											wp_reset_postdata();
										
										?>
										</div>
									</div>
									<!--/ End News Slider -->
								</div>
								<div class="col-lg-6 col-12">
									<div class="row">
										<?php
										$arguments = array(
											'cat'	=> absint( $cat2 ),
											'posts_per_page' => absint( $post_no2 ),
											'orderby' => 'DESC',
										);
										$query = new WP_Query( $arguments );
										if( $query->have_posts() ) :
											while( $query->have_posts() ) :
										$query->the_post();?>
										<div class="col-lg-6 col-md-6 col-12">
											<?php 
												$categories = get_the_category(get_the_ID());
											?>
											<!-- Top Post Thumbnail -->
											<div class="top-post-thumb">
												<!-- Post Head -->
												<?php 
												if(has_post_thumbnail()):?>
												<div class="post-thumb">
													<?php the_post_thumbnail('trend-news-255X180-thumbnail');?>
												</div>
												<?php else:?>
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="255" height="180">
												<?php endif;?>
												<!-- News Content -->
												<div class="post-content">
													<?php if(isset($categories) && !empty($categories) ){?>
													<div class="cat-name"><a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>" class="default-cat"><?php echo esc_html($categories[0]->name); ?></a></div>
													<?php }?>
													<div class="date"> <span><i class="fa fa-calendar"></i><?php trend_news_posted_on();?></span></div>
													<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
												</div>	
											</div>	
											<!--/ End Top Post Thumbnail -->
										</div>
									
						          <?php  endwhile; 
						          	wp_reset_postdata();
								endif; ?>		
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Main Layout -->
		<?php
	endif;
	
}


}
endif;
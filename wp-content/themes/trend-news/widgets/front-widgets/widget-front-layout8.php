<?php
/**
* Widget - News Block Layouts Eight
*
* @package Trend_News
*/


/*-----------------------------------------------------
Front Page News Layout Eight Widgets
-----------------------------------------------------*/

	if ( ! class_exists( 'Trend_News_Block_Layout_Eight' ) ) :
/**
* News Block Layout SevenEight
*/
class Trend_News_Block_Layout_Eight extends WP_Widget
{

	function __construct()
	{
		$opts = array(
			'classname' => 'block-layout-a',
			'description'	=> esc_html__( 'Trend News Block Layout Eight. Place it within "Frontpage Layouts Area"', 'trend-news' )
		);

		parent::__construct( 'trend-news-block-layout-eight', esc_html__( 'TN: News Block Layout 8', 'trend-news' ), $opts );
	}

	function form( $instance ) {
		?>
	
		<?php
		$layout_enable = ! empty( $instance[ 'layout_enable' ] ) ? $instance[ 'layout_enable' ] : 'off';
		$title = ! empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : __('Layout 8','trend-news');
		$cat = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
		$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 3;
		
		$cat1 = ! empty( $instance[ 'cat1' ] ) ? $instance[ 'cat1' ] : 0;
	
		?>
		<p>
			<input class="checkbox" type="checkbox" <?php checked( $layout_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'layout_enable' ) ); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>"><?php esc_html_e('Display News Block Layout 8', 'trend-news'); ?></label>
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><strong><?php echo esc_html__( 'Title: ', 'trend-news' ); ?></strong></label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat">
		</p>
		
		
		<p>	
			
			<label for="<?php echo esc_attr( $this->get_field_id( 'cat' ) )?>"><strong><?php echo esc_html__( 'Select Category For Slider: ', 'trend-news' ); ?></strong></label>
			<?php
			$cat_args = array(
				'orderby'	=> 'name',
				'hide_empty'	=> 1,
				'show_count'    => 1,
				'hierarchical'  => 1,
				'id'	=> esc_attr($this->get_field_id( 'cat' )),
				'name'	=> esc_attr($this->get_field_name( 'cat' )),
				'class'	=> 'widefat',
				'taxonomy'	=> 'category',
				'selected'	=> absint( $cat ),
				'show_option_all'	=> esc_html__( 'All category', 'trend-news' )
			);
			wp_dropdown_categories( $cat_args );
			?>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'post_no' ) )?>"><strong><?php echo esc_html__( 'Post No For Slider: ', 'trend-news' )?></strong></label>
			<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'post_no' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_no' ) ); ?>" value="<?php echo esc_attr( $post_no ); ?>" class="widefat">
		</p>

		<p>	
			<label for="<?php echo esc_attr( $this->get_field_id( 'cat1' ) )?>"><strong><?php echo esc_html__( 'Select Category For News: ', 'trend-news' ); ?></strong></label>
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
		<?php
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance[ 'layout_enable' ] = sanitize_text_field($new_instance[ 'layout_enable' ]);
		$instance[ 'title' ] = sanitize_text_field( $new_instance[ 'title' ] );
		$instance[ 'cat' ] = absint( $new_instance[ 'cat' ] );
		$instance[ 'post_no' ] = absint( $new_instance[ 'post_no' ] );
		$instance[ 'cat1' ] = absint( $new_instance[ 'cat1' ] );

		return $instance;
	}
	function widget( $args, $instance ) {
		$layout_enable_check = isset( $instance['layout_enable'] ) ? esc_attr( $instance['layout_enable'] ) : '';
		$title = apply_filters( 'widget_title', ! empty( $instance['title'] ) ? $instance['title'] : __('Layout 8','trend-news') );

		$layout_enable = $layout_enable_check ? 'true' : 'false';
		$cat = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
		
		$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 3;
		$cat1 = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat1' ] : 0;
		echo $args[ 'before_widget' ];
		if($layout_enable =='true'):
			?>
			<!-- Top News -->
		<section class="section top-news">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="grid-title"><?php echo esc_html($title);?></h3>
					</div>
				</div>
				<div class="row">
					<!-- Star Single News -->
					<div class="col-lg-4 col-12">
						<div class="top-slider-news">
							<div class="top-slider-news-active layout8-big-image">

								<?php
								$arguments = array(
									'cat'	=> absint( $cat ),
									'posts_per_page' => absint( $post_no ),
									'orderby' => 'DESC',
								);
								$query = new WP_Query( $arguments );
								if( $query->have_posts() ) :
									while( $query->have_posts() ) :$query->the_post();
									?>
								<!-- Single Slider News -->
								<div class="single-news shadow">
									<?php if( has_post_thumbnail() ) :?>
									<?php the_post_thumbnail('trend-news-350X510-thumbnail');?>
									<?php else:?>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="350" height="510">
									<?php endif;?>		
									<div class="trendnews-content">
										<div class="trendnews-meta">
											<span><i class="fa fa-calendar"></i><?php trend_news_posted_on();?></span>
											<?php if(absint(get_comments_number()) > 0):?>
											<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
											<?php endif;?>
										</div>
										<h2 class="news-title medium"><a href="<?php the_title();?>" class="title"><?php the_title();?></a></h2>
										<?php the_excerpt();?>
										<a href="<?php the_permalink();?>" class="trendnews-btn"><?php esc_html_e('Full Article','trend-news');?></a>
									</div>
								</div>
								<!--/ End Single Slider News -->
								<?php
									endwhile;
									endif;
									wp_reset_postdata();
								?>		
							</div>
						</div>
					</div>
					<!-- End Single News -->
					<div class="col-lg-8 col-12">	
						<div class="small-grid-thumbnail-main layout8-small-image">	
							<div class="row">	
								<?php
								$arguments = array(
									'cat'	=> absint( $cat1 ),
									'posts_per_page' => 4,
									'orderby' => 'DESC',
								);
								$query = new WP_Query( $arguments );
								if( $query->have_posts() ) :
									while( $query->have_posts() ) :$query->the_post();
										$categories = get_the_category(get_the_ID());
									?>
								<div class="col-lg-6 col-md-6 col-12">
									<!-- Small Grid News -->
									<div class="small-grid-thumbnail shadow">
										<?php if( has_post_thumbnail() ) :?>
										<?php the_post_thumbnail('trend-news-350X240-thumbnail');?>
										<?php else:?>
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="350" height="240">
										<?php endif;?>

										<div class="trendnews-content">
											<?php if( isset($categories) && !empty($categories) ){?>
											<div class="cat-name">
												<a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>" class="music-cat"><?php echo esc_html($categories[0]->name); ?></a>
											</div>
											<?php }?>
											<h4 class="news-title small"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
											<span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php trend_news_posted_on();?></span>
										</div>
									</div>
									<!--/ End Small Grid News -->
								</div>			
								<?php
									endwhile;
									endif;
									wp_reset_postdata();
								?>		
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Top News -->
			<?php
		endif;
		echo $args[ 'after_widget' ];
	}
}
endif;
<?php
/**
* Widget - News Block Layouts Seven
*
* @package Trend_News
*/


/*-----------------------------------------------------
Front Page News Layout Seven Widgets
-----------------------------------------------------*/

	if ( ! class_exists( 'Trend_News_Block_Layout_Seven' ) ) :
/**
* News Block Layout Seven
*/
class Trend_News_Block_Layout_Seven extends WP_Widget
{

	function __construct()
	{
		$opts = array(
			'classname' => 'block-layout-a',
			'description'	=> esc_html__( 'Trend News Block Layout Seven. Place it within "Frontpage Layouts Area"', 'trend-news' )
		);

		parent::__construct( 'trend-news-block-layout-seven', esc_html__( 'TN: News Block Layout 7', 'trend-news' ), $opts );
	}

	function form( $instance ) {
		?>
	
		<?php
		$layout_enable = ! empty( $instance[ 'layout_enable' ] ) ? $instance[ 'layout_enable' ] : 'off';
		$title = ! empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : __('Layout 7','trend-news');
		$cat = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
		$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 3;
		
		?>
		<p>
			<input class="checkbox" type="checkbox" <?php checked( $layout_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'layout_enable' ) ); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>"><?php esc_html_e('Display News Block Layout 7', 'trend-news'); ?></label>
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><strong><?php echo esc_html__( 'Title: ', 'trend-news' ); ?></strong></label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat">
		</p>
		
		
		<p>	
			
			<label for="<?php echo esc_attr( $this->get_field_id( 'cat' ) )?>"><strong><?php echo esc_html__( 'Select Category: ', 'trend-news' ); ?></strong></label>
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
			<label for="<?php echo esc_attr( $this->get_field_id( 'post_no' ) )?>"><strong><?php echo esc_html__( 'Post No: ', 'trend-news' )?></strong></label>
			<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'post_no' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_no' ) ); ?>" value="<?php echo esc_attr( $post_no ); ?>" class="widefat">
		</p>
		<?php
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance[ 'layout_enable' ] = sanitize_text_field($new_instance[ 'layout_enable' ]);
		$instance[ 'title' ] = sanitize_text_field( $new_instance[ 'title' ] );
		$instance[ 'cat' ] = absint( $new_instance[ 'cat' ] );
		$instance[ 'post_no' ] = absint( $new_instance[ 'post_no' ] );
		
		return $instance;
	}
	function widget( $args, $instance ) {
		$cat = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
		
		$title = apply_filters( 'widget_title', ! empty( $instance['title'] ) ? $instance['title'] : get_cat_name( $cat ), $instance, $this->id_base );
		$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 3;
		$layout_enable_check = isset( $instance['layout_enable'] ) ? esc_attr( $instance['layout_enable'] ) : '';
		$layout_enable = $layout_enable_check ? 'true' : 'false';
		
		echo $args[ 'before_widget' ];
		if($layout_enable =='true'):
			?>
			<section class="section news-grid-n-slider">
				<?php
				$arguments = array(
					'cat'	=> absint( $cat ),
					'posts_per_page' => absint( $post_no ),
					'orderby' => 'DESC',
				);
				$query = new WP_Query( $arguments );
				if( $query->have_posts() ) :
					?>
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h3 class="grid-title"><?php echo esc_html( $title ); ?></h3>
								<div class="popular-grid-head">
										<div class="layout7 news-grid-slider">
									<?php
									
										while( $query->have_posts() ) :
											$query->the_post();
											$categories = get_the_category(get_the_ID());
											?>
											<!-- Single Carousel -->
											<div class="single-slider">
											<!-- Single Grid -->
											<div class="single-grid">
												<?php if( has_post_thumbnail() ) :?>
													<div class="news-head">
														<?php the_post_thumbnail('trend-news-350X245-thumbnail');?>
													</div>
												<?php else:?>
													<div class="news-head">
														<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="350" height="245">
													</div>
												<?php endif;?>
												<div class="trendnews-content">
													
													<div class="date">
														<?php if( isset($categories) && !empty($categories) ){?>
														<a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>" class="default-cat">
															<?php echo esc_html($categories[0]->name); ?>		
														</a>
														<?php }?>
															<?php trend_news_posted_by();?> 
													</div>
													
													<h2 class="news-title medium"><a href="<?php the_permalink();?>" class="title-btn"><?php the_title();?></a></h2>
													<?php the_excerpt();?>
													<!-- Meta News -->
													<div class="trendnews-meta">
														<span><i class="fa fa-calendar"></i><?php trend_news_posted_on();?></span>
														<?php if(absint(get_comments_number()) > 0):?>
														<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
														<?php endif;?>
													</div>
												</div>
											</div>
											<!--/ End Single Grid -->
										</div>
											<!--/ End Single Carousel -->
											<?php
										endwhile;
										wp_reset_postdata();
									
									?>	
								</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				endif;?>
			</section>
			<?php
		endif;
		echo $args[ 'after_widget' ];
	}
}
endif;
<?php
/**
* Widget - News Block Layouts Three
*
* @package Trend_News
*/


/*-----------------------------------------------------
Front Page News Layout Three Widgets
-----------------------------------------------------*/

if( !class_exists('Trend_News_FrontLayout_Three')){
	class Trend_News_FrontLayout_Three extends WP_Widget{
	//setup the widget name, description, etc....
	public function __construct(){
		$opts = array(
		'classname' => 'block-layout-a',
		'description'	=> esc_html__( 'Trend News Block Layout Three. Place it within "Frontpage Layouts Area"', 'trend-news' )
	);

	parent::__construct( 'trend-news-block-layout-three', esc_html__( 'TN: News Block Layout 3', 'trend-news' ), $opts );
	}

		function form( $instance ) {
			$layout_enable 			  = ! empty( $instance[ 'layout_enable' ] ) ? $instance[ 'layout_enable' ] : 'off';
			$title1 				  = ! empty( $instance[ 'title1' ] ) ? $instance[ 'title1' ] : __('Latest News','trend-news');
			$cat1 	 				  = ! empty( $instance[ 'cat1' ] ) ? $instance[ 'cat1' ] : 0;
			$post_no1 				  = ! empty( $instance[ 'post_no1' ] ) ? $instance[ 'post_no1' ] : 2;

			$title2 				  = ! empty( $instance[ 'title2' ] ) ? $instance[ 'title2' ] : __('Popular News','trend-news');
			$cat2 	  				  = ! empty( $instance[ 'cat2' ] ) ? $instance[ 'cat2' ] : 0;
			$post_no2	 			  = ! empty( $instance[ 'post_no2' ] ) ? $instance[ 'post_no2' ] : 10;
			$slider_no 	  			  = ! empty( $instance[ 'slider_no' ] ) ? $instance[ 'slider_no' ] : 2;
			$post_no_per_slider 	  = ! empty( $instance[ 'post_no_per_slider' ] ) ? $instance[ 'post_no_per_slider' ] : 5;
			?>

			<p>
				<input class="checkbox" type="checkbox" <?php checked( $layout_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'layout_enable' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>"><?php esc_html_e('Display News Block Layout 3', 'trend-news'); ?></label>
			</p>

			
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title1' ) ); ?>"><strong><?php echo esc_html__( 'Latest News Title: ', 'trend-news' ); ?></strong></label>
				<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title1' ) ); ?>" value="<?php echo esc_attr( $title1 ); ?>" class="widefat">
			</p>
			
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'cat1' ) )?>"><strong><?php echo esc_html__( 'Select Category for latest post:', 'trend-news' ); ?></strong></label>
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
					'show_option_all'	=> esc_html__( 'Latest Posts', 'trend-news' )
				);
				wp_dropdown_categories( $cat1_args );
				?>
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'post_no1' ) )?>"><strong><?php echo esc_html__( 'Post No For Latest News: ', 'trend-news' )?></strong></label>
				<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'post_no1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_no1' ) ); ?>" value="<?php echo esc_attr( $post_no1 ); ?>" class="widefat">
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title2' ) ); ?>"><strong><?php echo esc_html__( 'Popular News Title: ', 'trend-news' ); ?></strong></label>
				<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title2' ) ); ?>" value="<?php echo esc_attr( $title2 ); ?>" class="widefat">
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'cat2' ) )?>"><strong><?php echo esc_html__( 'Select Category for popular post:', 'trend-news' ); ?></strong></label>
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
					'show_option_all'	=> esc_html__( 'Popular Posts', 'trend-news' )
				);
				wp_dropdown_categories( $cat2_args );
				?>
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'post_no2' ) )?>"><strong><?php echo esc_html__( 'Post No For Popular News: ', 'trend-news' )?></strong></label>
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
			$instance[ 'title1' ] = sanitize_text_field( $new_instance[ 'title1' ] );
			$instance[ 'cat1' ] 		 = absint( $new_instance[ 'cat1' ] );
			$instance[ 'post_no1' ] = absint( $new_instance[ 'post_no1' ] );

			$instance[ 'title2' ] = sanitize_text_field( $new_instance[ 'title2' ] );
			$instance[ 'cat2' ] 		 = absint( $new_instance[ 'cat2' ] );
			$instance[ 'post_no2' ] = absint( $new_instance[ 'post_no2' ] );
			$instance[ 'slider_no' ] 		 = absint( $new_instance[ 'slider_no' ] );
			$instance[ 'post_no_per_slider' ] 		 = absint( $new_instance[ 'post_no_per_slider' ] );
		
			return $instance;
		}

		function widget( $args, $instance ) {
			$layout_enable_check = isset( $instance['layout_enable'] ) ? esc_attr( $instance['layout_enable'] ) : '';
			$layout_enable = $layout_enable_check ? 'true' : 'false';

			$cat1 = ! empty( $instance[ 'cat1' ] ) ? $instance[ 'cat1' ] : 0;
			$title1 = apply_filters( 'widget_title', ! empty( $instance['title1'] ) ? $instance['title1'] : get_cat_name( $cat1 ), $instance, $this->id_base );
			$post_no1 = ! empty( $instance[ 'post_no1' ] ) ? $instance[ 'post_no1' ] : 2;

			$cat2 = ! empty( $instance[ 'cat2' ] ) ? $instance[ 'cat2' ] : 0;
			$title2 = apply_filters( 'widget_title', ! empty( $instance['title2'] ) ? $instance['title2'] : get_cat_name( $cat2 ), $instance, $this->id_base );
			$post_no2 = ! empty( $instance[ 'post_no2' ] ) ? $instance[ 'post_no2' ] : 10;

			$post_no_per_slider = ! empty( $instance[ 'post_no_per_slider' ] ) ? $instance[ 'post_no_per_slider' ] : 5;

			$slider_no = ! empty( $instance[ 'slider_no' ] ) ? $instance[ 'slider_no' ] : 2;

			if($layout_enable =='true'):?>
			<!-- Grid & Popular News -->
			<section class="section grid-popular-news">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-12">
							<h3 class="grid-title"><i class="fa fa-pencil"></i><?php echo esc_html($title1);?></h3>
							<div class="row">
								<?php if($cat1 == 0):?>
								<?php $the_query = new WP_Query('showposts='. absint($post_no1) .'&orderby=post_date&order=desc');
								$recent_post_num = 1;		
								while ($the_query->have_posts()) : $the_query->the_post(); 
								$categories = get_the_category(get_the_ID());?>
									<div class="col-lg-6 col-md-6 col-12">
										<!-- Single Grid News -->
										<div class="single-grid-news">
											<!-- News Head -->
											<div class="image-head">
												<a href="<?php the_permalink();?>">
												<?php 
												if(has_post_thumbnail()):?>
													<?php the_post_thumbnail('trend-news-350X247-thumbnail');?>
												<?php else:?>
													<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="350" height="247">
												<?php endif;?>
												</a>
												<span class="post-formet"><i class="fa fa-pencil"></i></span>
												<?php if(isset($categories) && !empty($categories) ){?>
												<a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>" class="default-cat"><?php echo esc_html($categories[0]->name); ?></a>
												<?php }?>
											</div>
											<!-- Trendnews Meta -->
											<div class="trendnews-meta">
												<span class="author"><?php trend_news_posted_by();?></span>
												<span><i class="fa fa-calendar"></i><?php trend_news_posted_on();?></span>
												<?php if(absint(get_comments_number()) > 0):?>
												<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
												<?php endif;?>
											</div>
											<!-- Trendnews Content -->
											<div class="trendnews-content">
												<h2 class="news-title medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
												<?php the_excerpt();?>
												<a href="<?php the_permalink();?>" class="trendnews-btn"><?php esc_html_e('Read More','trend-news');?></a>
											</div>
										</div>
										<!--/ End Single Grid News -->
									</div>
								<?php
								endwhile;
								else:?>
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
								$categories = get_the_category(get_the_ID());
									?>
									<div class="col-lg-6 col-md-6 col-12">
										<!-- Single Grid News -->
										<div class="single-grid-news">
											<!-- News Head -->
											<div class="image-head">
												<a href="<?php the_permalink();?>">
													<?php 
													if(has_post_thumbnail()):?>
														<?php the_post_thumbnail('trend-news-350X247-thumbnail');?>
													<?php else:?>
														<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="350" height="247">
													<?php endif;?>
												</a>
												<span class="post-formet"><i class="fa fa-pencil"></i></span>
												<?php if(isset($categories) && !empty($categories) ){?>
												<a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>" class="default-cat"><?php echo esc_html($categories[0]->name); ?></a> 
												<?php }?>
											</div>
											<!-- Trendnews Meta -->
											<div class="trendnews-meta">
												<span class="author"><?php trend_news_posted_by();?></span>
												<span><i class="fa fa-calendar"></i><?php trend_news_posted_on();?></span>
												<?php if(absint(get_comments_number()) > 0):?>
												<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
												<?php endif;?>
											</div>
											<!-- Trendnews Content -->
											<div class="trendnews-content">
												<h2 class="news-title medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
												<?php the_excerpt();?>
												<a href="<?php the_permalink();?>" class="trendnews-btn"><?php esc_html_e('Read More','trend-news');?></a>
											</div>
										</div>
										<!--/ End Single Grid News -->
									</div>
								<?php
									endwhile;
								endif;
									wp_reset_postdata();
								
								?>	
								<?php endif;?>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<!-- Popular List News -->
							<div class="popular-list-news">
								<h3 class="grid-title"><?php echo esc_html($title2);?></h3>
								<div class="popular-list-slider">
									<!-- Popular Single Slider -->
									<?php if($cat2 == 0):
										for($i=1;$i<=$slider_no;$i++):
									?>
									<div class="popular-single-slider">
										<?php $posts_args = array(
											'post_type'			=> 'post',
											'posts_per_page'	=> $post_no2,
										 	'orderby'       	=> 'comment_count',
											'order'				=> 'DESC'
										);
										$popular = new WP_Query( $posts_args );
										$count = 0;
										while ($popular->have_posts()) : $popular->the_post();
										if($i == 1):
										if( $count < $post_no_per_slider):
										?>
										<!-- Single Popular -->
										<div class="single-popular-list">
											<?php 
											if(has_post_thumbnail()):?>
												<?php the_post_thumbnail('trend-news-84X84-thumbnail');?>
											<?php else:?>
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="84" height="84">
											<?php endif;?>

											<div class="trendnews-content">
												<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
												<!-- Trendnews meta -->
												<div class="trendnews-meta">
													<span class="author"><?php trend_news_posted_by();?></span>
													<?php if(absint(get_comments_number()) > 0):?>
													<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
													<?php endif;?>
												</div>
											</div>
										</div>
										<!--/ End Single Popular -->
										<?php
										endif;
										endif;
										if($i > 1):
										if( $count >= (($i - 1) * $post_no_per_slider) && $count < ($i * $post_no_per_slider) ):?>
											<!-- Single Popular -->
										<div class="single-popular-list <?php echo ($i * $post_no_per_slider);?>">
											<?php 
											if(has_post_thumbnail()):?>
												<?php the_post_thumbnail('trend-news-84X84-thumbnail');?>
											<?php else:?>
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="84" height="84">
											<?php endif;?>
											<div class="trendnews-content">
												<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
												<!-- Trendnews meta -->
												<div class="trendnews-meta">
													<span class="author"><?php trend_news_posted_by();?></span>
													<?php if(absint(get_comments_number()) > 0):?>
													<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
													<?php endif;?>
												</div>
											</div>
										</div>
										<!--/ End Single Popular -->
										<?php endif;	
										endif;	
										$count = $count + 1;
										endwhile; ?>
									</div>
									<!--/ End Popular Single Slider -->
									<?php endfor;
									else:
										for($i=1;$i<=$slider_no;$i++):
										?>
									<div class="popular-single-slider">
										<?php $posts_args =array(
											'cat'	=> absint( $cat2 ),
											'posts_per_page' => absint( $post_no2 ),
											'orderby' => 'DESC',
										);
										$popular = new WP_Query( $posts_args );
										$count = 0;
										while ($popular->have_posts()) : $popular->the_post();
										if($i == 1):
										if( $count < $post_no_per_slider):
										?>
										<!-- Single Popular -->
										<div class="single-popular-list">
											<?php 
											if(has_post_thumbnail()):?>
												<?php the_post_thumbnail();?>
											<?php else:?>
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg">
											<?php endif;?>
											
											<div class="trendnews-content">
												<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
												<!-- Trendnews meta -->
												<div class="trendnews-meta">
													<span class="author"><?php trend_news_posted_by();?></span>
													<?php if(absint(get_comments_number()) > 0):?>
													<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
													<?php endif;?>
												</div>
											</div>
										</div>
										<!--/ End Single Popular -->
										<?php
										endif;
										endif;
										if($i > 1):
										if( $count >= (($i - 1) * $post_no_per_slider) && $count < ($i * $post_no_per_slider) ):?>
											<!-- Single Popular -->
										<div class="single-popular-list <?php echo ($i * $post_no_per_slider);?>">
											<?php 
											if(has_post_thumbnail()):?>
												<?php the_post_thumbnail();?>
											<?php else:?>
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg">
											<?php endif;?>
											
											<div class="trendnews-content">
												<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
												<!-- Trendnews meta -->
												<div class="trendnews-meta">
													<span class="author"><?php trend_news_posted_by();?></span>
													<?php if(absint(get_comments_number()) > 0):?>
													<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
													<?php endif;?>
												</div>
											</div>
										</div>
										<!--/ End Single Popular -->
										<?php endif;	
										endif;	
										$count = $count + 1;
										endwhile; ?>
									</div>
									<?php endfor;

									endif;?>
								</div>
							</div>
							<!--/ End Popular List News -->
						</div>
					</div>
				</div>
			</section>
			<!--/ End Grid & Popular News -->
			<?php
			endif;		
		}

	}
}
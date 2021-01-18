<?php
/**
* Widget - News Block Layouts Six
*
* @package Trend_News
*/


/*-----------------------------------------------------
Front Page News Layout Six Widgets
-----------------------------------------------------*/

if ( ! class_exists( 'Trend_News_Block_Layout_Six' ) ) :
	/**
	* News Block Layout Six
	*/
	class Trend_News_Block_Layout_Six extends WP_Widget
	{

		function __construct()
		{
			$opts = array(
			'classname' => 'block-layout-a',
			'description'	=> esc_html__( 'Trend News Block Layout Six. Place it within "Frontpage Layouts Area"', 'trend-news' )
			);

			parent::__construct( 'trend-news-block-layout-six', esc_html__( 'TN: News Block Layout 6', 'trend-news' ), $opts );
		}

		function form( $instance ) {

			$layout_enable = ! empty( $instance[ 'layout_enable' ] ) ? $instance[ 'layout_enable' ] : 'off';
			$title 				= ! empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : __('Hot News','trend-news');
			$all_categories = ! empty( $instance[ 'all_categories' ] ) ? $instance[ 'all_categories' ] : 0;
		
			$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 5;	
			?>
			<p>
				<input class="checkbox" type="checkbox" <?php checked( $layout_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'layout_enable' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>"><?php esc_html_e('Display News Block Layout 6', 'trend-news'); ?></label>
			
			</p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'all_categories' ) )?>"><strong><?php echo esc_html__( 'Select Category For Tabs:', 'trend-news' ); ?></strong></label>
			 <div class="category__widget_multicheck">

			 	<?php $all_categories = trend_news_all_categories();
			 	if(!empty($all_categories)):
			 		foreach ($all_categories as $key => $all_cat):?>
			 		<div class="category__widget-container">
			 			 <label for="<?php echo esc_attr( $this->get_field_id( 'all_categories' ) . $all_cat->term_id ); ?>">
                                <input id="<?php echo esc_attr( $this->get_field_id( 'all_categories' ) . $all_cat->term_id ); ?>" name="<?php echo esc_attr( $this->get_field_name('all_categories') ); ?>[]" type="checkbox" value="<?php echo esc_attr( $all_cat->term_id ); ?>" <?php if( !empty( $instance['all_categories'] ) ) { if( in_array( $all_cat->term_id, $instance['all_categories'] ) ) { ?>checked<?php } } ?>>
                                <strong><?php echo esc_html( $all_cat->name ); ?></strong>
                            </label>
			 		</div>
			 		<?php endforeach;
			 	endif;
			 ?>
			 </div>
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
			
			$instance['all_categories'] 	= isset( $new_instance['all_categories'] ) ? array_map( 'sanitize_text_field', $new_instance['all_categories'] ) : array();

			$instance[ 'post_no' ] = absint( $new_instance[ 'post_no' ] );
			
			return $instance;
		}
		function widget( $args, $instance ) {
			$layout_enable_check = isset( $instance['layout_enable'] ) ? esc_attr( $instance['layout_enable'] ) : '';
			$layout_enable = $layout_enable_check ? 'true' : 'false';

			$title = apply_filters( 'widget_title', ! empty( $instance['title'] ) ? $instance['title'] : '', $instance, $this->id_base );

			$all_categories = isset( $instance['all_categories'] ) ? $instance['all_categories'] : array();
				
			$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 5;

			echo $args[ 'before_widget' ];

	               
			  $all_caregories = trend_news_all_categories();
			if($layout_enable =='true'):
				
	         if( !empty( $all_categories ) ):?>
				
			<!-- News Tabs -->
			<section class="news-tabs section">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-md-9 col-12">
							<h3 class="grid-title"><i class="fa fa-globe"></i><?php echo esc_html($title);?></h3>
							<div class="tab-main">
								<div class="news-tab-nav">
									<!-- Tab Menu -->
									<ul class="nav nav-tabs" id="myTab-two" role="tablist">
									 <?php
                                    foreach( $all_categories as $index => $all_category ):

                                    $index++;

                                    $all_category_term = get_term_by( 'id', $all_category, 'category' );

                                    if( !empty( $all_category_term ) ) :?>
										<li class="nav-item">
											<a class="nav-link <?php if( $index == 1 ) { ?> active <?php } ?>" data-toggle="tab" href="#tab<?php echo esc_attr( $index ); ?>" role="tab<?php echo esc_attr( $index ); ?>"><i class="icofont-crown"></i><?php echo esc_html( $all_category_term->name ); ?>
											</a>
										</li>
									 <?php
	                                    endif;
	                                endforeach;
	                                
	                                ?>

									</ul>
									<!--/ End Tab Menu -->
								</div>
								<div class="tab-content" id="myTabContent-two">
								
									<?php

                                    foreach( $all_categories as $index => $all_category ):

                                    $index++;

                                    
                                    $all_query_args = array(
										'cat'	=> absint( $all_category ),
										'posts_per_page' => absint( $post_no ),			
										'orderby' => 'DESC',
									);
                                    
                                    $all_category_query = new WP_Query( $all_query_args );?>
									<!-- Single Tab -->
									<div class="tab-pane fade <?php if( $index == 1 ) { ?> show active <?php } ?>" id="tab<?php echo esc_attr( $index ); ?>" role="tabpanel">
										<div class="row">
											<?php $count1 = 0;
											  while( $all_category_query->have_posts() ): 
											  	$all_category_query->the_post();
											  	if( $count1 == 0 ):?>
												<div class="col-lg-7 col-md-7 col-12">
														<!-- Single News -->
														<div class="tab-first-news">
															<!-- News Head -->
															<?php if( has_post_thumbnail() ) :?>
															<div class="news-head">
																<?php the_post_thumbnail('trend-news-469X469-thumbnail');?>
															</div>
															<?php else:?>
															<div class="news-head">
																<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="469" height="469">
															</div>
															<?php endif;?>
															<div class="trendnews-content">
																<!-- Trendnews Meta -->
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
														<!--/ End Single News -->
												</div>
											<?php endif;	
												$count1 = $count1 + 1;
												endwhile;
												// wp_reset_postdata();
											?>
											<div class="col-lg-5 col-md-5 col-12">
												<div class="tab-news-right">
												<?php $count1 = 0;
												  while( $all_category_query->have_posts() ): 
												  	$all_category_query->the_post();
												  	if( $count1 > 0 ):
												  
												?>
												<div class="single-news">
													<!-- News Head -->
													<?php if( has_post_thumbnail() ) :?>
														<div class="news-head">
															<?php the_post_thumbnail();?>
														</div>
													<?php else:?>	
														<div class="news-head">
															<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg">
														</div>
													<?php endif;?>
													<div class="trendnews-content">
														<h4 class="news-title small"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
														<?php the_excerpt();?>
													</div>
												</div>
												<!--/ End Single News -->
												<?php 
												endif;	
												$count1 = $count1 + 1;
												endwhile;
												// wp_reset_postdata();
												?>
												</div>
											</div>
										</div>
									</div>
									<!--/ End Single Tab -->
									 <?php 
									 wp_reset_postdata();
									endforeach;?>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-12">
							<?php if ( is_active_sidebar( 'front-ad-area' ) ) { ?>
								<?php dynamic_sidebar( 'front-ad-area' );?>
							<?php } ?>
						</div>
					</div>
				</div>
			</section>
			<!-- End News Tabs -->

			<?php
			endif;
			endif;
			echo $args[ 'after_widget' ];
		}
	}
endif;
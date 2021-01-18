<?php
/**
* Widget - News Block Layouts Five
*
* @package Trend_News
*/


/*-----------------------------------------------------
Front Page News Layout Five Widgets
-----------------------------------------------------*/

if ( ! class_exists( 'Trend_News_FrontLayout_Five' ) ) :
/**
* News Block Layout Five
*/
class Trend_News_FrontLayout_Five extends WP_Widget
{

function __construct()
{
	$opts = array(
		'classname' => 'block-layout-a',
		'description'	=> esc_html__( 'Trend News Block Layout Five. Place it within "Frontpage Layouts Area"', 'trend-news' )
	);

	parent::__construct( 'trend-news-block-layout-five', esc_html__( 'TN: News Block Layout 5', 'trend-news' ), $opts );
}

function form( $instance ) {
	$layout_enable 		= ! empty( $instance[ 'layout_enable' ] ) ? $instance[ 'layout_enable' ] : 'off';
	$cat = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
	$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 5;
	?>

	<p>
		<input class="checkbox" type="checkbox" <?php checked( $layout_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'layout_enable' ) ); ?>" /> 
		<label for="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>"><?php esc_html_e('Display News Block Layout 5', 'trend-news'); ?></label>
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
	<?php
}

function update( $new_instance, $old_instance ) {
	$instance = $old_instance;
		
	$instance[ 'layout_enable' ] = sanitize_text_field($new_instance[ 'layout_enable' ]);
	$instance[ 'cat' ] = absint( $new_instance[ 'cat' ] );
	$instance[ 'post_no' ] = absint( $new_instance[ 'post_no' ] );

	return $instance;
}


function widget( $args, $instance ) {
	$layout_enable_check = isset( $instance['layout_enable'] ) ? esc_attr( $instance['layout_enable'] ) : '';
	$layout_enable = $layout_enable_check ? 'true' : 'false';
	$cat = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
	$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 5;
	
	if($layout_enable =='true'):
		 
		?>
		<!-- Start Video News -->
		<div class="video-news section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-12">
						<?php
						$t1_arguments = array(
							'cat'	=> absint( $cat ),
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
						<div class="video-big-news">
							<?php 
								$categories = get_the_category(get_the_ID());
							?>
							<?php if(isset($categories) && !empty($categories) ){?>
							<div class="video-cat">
								<a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>" class="default-cat"><?php echo esc_html( ($categories[0]->name) );?></a>
							</div>
							<?php }?>
							<?php  if(has_post_thumbnail()):?>
								<?php the_post_thumbnail('trend-news-635X530-thumbnail');?>
							<?php else:?>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="635" height="530">
							<?php endif;?>	
							
							<div class="trendnews-content">
								<div class="trendnews-meta">
									<span class="author"><?php trend_news_posted_by();?></span>
									<span><i class="fa fa-calendar"></i><?php trend_news_posted_on();?></span>
									<?php if(absint(get_comments_number()) > 0):?>
									<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
									<?php endif;?>
								</div>
								<h2 class="news-title large"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
								<?php the_excerpt();?>
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
					<div class="col-lg-5 col-12">
						<div class="small-video-list">
							<?php
							$count = 0;
							while( $t1_query->have_posts() ) :
								$t1_query->the_post();
								if( $count > 0 ) :
				
	                      		$categories = get_the_category(get_the_ID());
	                      	?>
							<!-- Single Video List -->
							<div class="single-video">
								<?php if( has_post_thumbnail() ) :?>
								<div class="video-head">
									<?php the_post_thumbnail('trend-news-130X105-thumbnail');?>
								</div>
								<?php else:?>
								<div class="video-head">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg" width="130" height="105">
								</div>
								<?php endif;?>

								<div class="trendnews-content">
									<?php if(isset($categories) && !empty($categories) ){?>
									<a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>" class="default-cat"><?php echo esc_html($categories[0]->name);?></a>
									<?php }?>
									<h4 class="news-title small"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
									<!-- Trendnews Meta -->
									<div class="trendnews-meta">
										<span><i class="fa fa-calendar"></i><?php trend_news_posted_on();?></span>
										<?php if(absint(get_comments_number()) > 0):?>
										<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
										<?php endif;?>
									</div>
								</div>
							</div>
							<!--/ End Single Video List -->
							<?php
							endif;
							$count = $count + 1;
						endwhile;
						wp_reset_postdata();
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Video News -->
		<?php
	endif;
	
}


}
endif;
<?php
/**
* Widget - News Block Layouts One
*
* @package Trend_News
*/


/*-----------------------------------------------------
Front Page News Layout One Widgets
-----------------------------------------------------*/

if ( ! class_exists( 'Trend_News_FrontLayout_One' ) ) :
/**
* News Block Layout One
*/
class Trend_News_FrontLayout_One extends WP_Widget
{

function __construct()
{
	$opts = array(
		'classname' => 'block-layout-a',
		'description'	=> esc_html__( 'Trend News Block Layout One. Place it within "Frontpage Layouts Area"', 'trend-news' )
	);

	parent::__construct( 'trend-news-block-layout-one', esc_html__( 'TN: News Block Layout 1', 'trend-news' ), $opts );
}

function form( $instance ) {
	$layout_enable = ! empty( $instance[ 'layout_enable' ] ) ? $instance[ 'layout_enable' ] : 'off';
	$cat 	  = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
	$post_no  = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 3;

	?>

	<p>
		<input class="checkbox" type="checkbox" <?php checked( $layout_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'layout_enable' ) ); ?>" /> 
		<label for="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>"><?php esc_html_e('Display News Block Layout 1', 'trend-news'); ?></label>
	</p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'cat' ) )?>"><strong><?php echo esc_html__( 'Select Category:', 'trend-news' ); ?></strong></label>
		<br>
		<?php
		$cat_args = array(
			'orderby'	=> 'name',
			'hide_empty'	=> 1,
			'show_count'    => 1,
			'hierarchical'  => 1,
			'id'	=>  esc_attr($this->get_field_id( 'cat' )),
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
	$instance[ 'cat' ] = absint( $new_instance[ 'cat' ] );
	$instance[ 'post_no' ] = absint( $new_instance[ 'post_no' ] );
	
	return $instance;
}


function widget( $args, $instance ) {
	$layout_enable_check = isset( $instance['layout_enable'] ) ? esc_attr( $instance['layout_enable'] ) : '';
	$layout_enable = $layout_enable_check ? 'true' : 'false';
	$cat = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
	$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 3;

	echo $args[ 'before_widget' ];
	if($layout_enable =='true'):
		 
		?>
		<!-- Breaking Post -->
		<div class="breaking-post">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="break-inner">
							<div class="row">
								<?php
								$arguments = array(
									'cat'	=> absint( $cat ),
									'posts_per_page' => absint( $post_no ),
									'orderby' => 'DESC',
								);
								$query = new WP_Query( $arguments );
								$i=0;
								if( $query->have_posts() ) :
									while( $query->have_posts() ) :
									$query->the_post();
								?>
								<div class="col-lg-4 col-md-4 col-12">
									<!-- Single breaking -->
									<div class="single-break">

										<span class="bg-num"><?php echo absint($i+1);?></span>
										<?php  if(has_post_thumbnail()):?>
										<div class="post-head">
											<?php the_post_thumbnail();	?>
										</div>
										<?php else:?>	
										<div class="post-head">
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg">
										</div>
										<?php endif;?>
										<div class="post-cotent">
											<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
											<?php the_excerpt();?>
										</div>
											
									</div>
									<!--/ End Single breaking -->
								</div>
									<?php
									$i++;
										endwhile;
									endif;
								wp_reset_postdata();
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Breaking News -->	
		<?php
	endif;
	echo $args[ 'after_widget' ];
}


}
endif;
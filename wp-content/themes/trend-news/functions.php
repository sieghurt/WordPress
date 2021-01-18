<?php
/**
 * wp news functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Trend_News
 */

if ( ! function_exists( 'trend_news_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function trend_news_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wp news, use a find and replace
		 * to change 'trend-news' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'trend-news', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// Image Size
		add_image_size('trend-news-540X604-thumbnail', 540, 604, true);
		add_image_size('trend-news-255X180-thumbnail', 255, 180, true);
		add_image_size('trend-news-350X247-thumbnail', 350, 247, true);
		add_image_size('trend-news-84X84-thumbnail', 84, 84, true);
		add_image_size('trend-news-445X290-thumbnail', 445, 290, true);
		add_image_size('trend-news-350X196-thumbnail', 350, 196, true);
		add_image_size('trend-news-635X530-thumbnail', 635, 530, true);
		add_image_size('trend-news-130X105-thumbnail', 130, 105, true);
		add_image_size('trend-news-469X469-thumbnail', 469, 469, true);
		add_image_size('trend-news-350X245-thumbnail', 350, 245, true);
		add_image_size('trend-news-350X510-thumbnail', 350, 510, true);
		add_image_size('trend-news-730X400-thumbnail', 730, 400, true);
		add_image_size('trend-news-350X240-thumbnail', 350, 240, true);
		add_image_size('trend-news-320X214-thumbnail', 320, 214, true);
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'trend-news' ),
				'sidemenu' => esc_html__( 'Sidemenu', 'trend-news' ),
				'topmenu' => esc_html__( 'Topmenu', 'trend-news' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'trend_news_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function trend_news_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'trend_news_content_width', 640 );
}
add_action( 'after_setup_theme', 'trend_news_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function trend_news_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'trend-news' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'trend-news' ),
			'before_widget' => '<div id="%1$s" class="single-widget  %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget_title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar( array(
		'name'          => esc_html__( 'Frontpage Layouts Area', 'trend-news' ),
		'id'            => 'frontpage-layout',
		'description'   => esc_html__( 'Add widgets here.', 'trend-news' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="cat-title"><span>',
		'after_title'   => '</span></h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer widget Area', 'trend-news' ),
		'id'            => 'footer-widget',
		'description'   => esc_html__( 'Add widgets here.', 'trend-news' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s col-lg-3 col-md-6 col-12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Front Advertise widget Area', 'trend-news' ),
		'id'            => 'front-ad-area',
		'description'   => esc_html__( 'Add widgets here.', 'trend-news' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s advertise">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Right Side widget Area', 'trend-news' ),
		'id'            => 'right-side-area',
		'description'   => esc_html__( 'Add widgets here.', 'trend-news' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s advertise">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Middle Head Ad Space Widget', 'trend-news' ),
		'id'            => 'middle-head-ad-space',
		'description'   => esc_html__( 'Add widgets here.', 'trend-news' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s advertise text-right">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Sidenav Widget Area', 'trend-news' ),
		'id'            => 'sidenav-widget-area',
		'description'   => esc_html__( 'Add widgets here.', 'trend-news' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s sidenav single-content">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}

add_action( 'widgets_init', 'trend_news_widgets_init' );


/**
 * Enqueue scripts and styles.
*/
require get_template_directory() . '/include/enqueues.php';

/**
 * Implement the Custom Header feature.
*/
require get_template_directory() . '/include/custom-header.php';

/**
 * Custom template tags for this theme.
*/
require get_template_directory() . '/include/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
*/
require get_template_directory() . '/include/template-functions.php';

/**
 * Customizer additions.
*/
require get_template_directory() . '/include/customizer.php';

/**
 * Navwalker for WP News
*/
require get_template_directory() . '/include/trend-news-walker.php';

/**
 * Load TGM plugins for required plugins.
 */
require get_template_directory() . '/include/tgm/required-plugins.php';

/**
 * Widgets for WP News
*/
require get_template_directory() . '/widgets/widgets.php';

/**
 * Load Jetpack compatibility file.
*/
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/include/jetpack.php';
}


/**
 * Admin Enqueue scripts
 */
if ( ! function_exists( 'trend_news_admin_scripts' ) ) {
    function trend_news_admin_scripts($hook) {
    	if ( 'widgets.php' != $hook ) {
        	return;
    	}
    	wp_enqueue_media();
        wp_enqueue_script('trend-news-widget', get_template_directory_uri() . '/resources/js/trend-news-widgets.js');

        wp_enqueue_style('trend-news-widget', get_template_directory_uri() . '/resources/css/trend-news-widget.css', array(), '1.0.0');

    }
}

add_action('admin_enqueue_scripts', 'trend_news_admin_scripts');

/*Method to load latest posts*/
function trend_news_latest_posts( $posts = 3 ) 
{
	$the_query = new WP_Query('showposts='. $posts .'&orderby=post_date&order=desc');
	$recent_post_num = 1;		
	while ($the_query->have_posts()) : $the_query->the_post(); 
	$categories = get_the_category(get_the_ID());
	?>
	<div class="single-menu-post">
		<?php  if(has_post_thumbnail()):?>
		<div class="post-img">
			<?php the_post_thumbnail();?>
		</div>
		<?php else:?>
		<div class="post-img">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg">
		</div>
		<?php endif;?>
		<div class="post-info">
			<?php if( isset($categories) && !empty($categories) ){?>
			<div class="cat-name"><i class="fa fa-list-alt"></i>
				<?php echo esc_html($categories[0]->name);?>
			</div>
			<?php }?>
			<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
		</div>
	</div>
	<?php
	endwhile; 
	wp_reset_postdata();
}

function trend_news_popular_posts( $posts = 3 ) {
	$posts_args = array(
		'post_type'			=> 'post',
		'posts_per_page'	=> $posts,
	 	'orderby'       	=> 'comment_count',
		'order'				=> 'DESC'
	);
	$popular = new WP_Query( $posts_args );
	$popular_post_num = 1;
	while ($popular->have_posts()) : $popular->the_post();
		$categories = get_the_category(get_the_ID());
	?>

	<div class="single-menu-post">
		<?php  if(has_post_thumbnail()):?>
		<div class="post-img">
			<?php the_post_thumbnail();?>
		</div>
		<?php else:?>
		<div class="post-img">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/images/placeholder.jpg">
		</div>
		<?php endif;?>
		<div class="post-info">
			<?php if(isset($categories) && !empty($categories)){?>
			<div class="cat-name"><i class="fa fa-list-alt"></i><?php echo esc_html($categories[0]->name); ?></div>
			<?php }?>
			<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
		</div>
	</div>

	<?php
	endwhile; 
	wp_reset_postdata();
}

function trend_news_excerpt_length( $length ) {
	if ( is_admin() ) return $length;
    return 10;
}
add_filter( 'excerpt_length', 'trend_news_excerpt_length', 999 );


if( ! function_exists( 'trend_news_all_categories' ) ) {
	
	function trend_news_all_categories() {

		
		$all_terms = get_terms( 'category', array(
			'number'     => '',
            'orderby'    => 'name',
            'order'      => 'ASC',
            'hide_empty' => true
		) );

		return $all_terms;
	}
}
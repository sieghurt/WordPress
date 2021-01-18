<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Trend_News
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'trend-news' ); ?></a>

<div id="page" class="site boxed-layout">

<!-- Start Header -->
<header class="header blog">
	<?php if(absint(get_theme_mod('trend_news_top_header_enable','0'))==1): ?>
	<!-- Topbar -->
	<div class="topbar">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-12">
					<!-- Topbar Nav -->
					<div class="topbar-nav">
						<!-- Language Nav -->
					
						<?php if(absint(get_theme_mod('trend_news_top_header_menu_enable','1'))==1): ?>
						<!-- Top Menu -->
						<div class="single-nav top-menu">
							<?php
							if ( has_nav_menu( 'topmenu' ) ) :
							wp_nav_menu( array(
								'theme_location'    => 'topmenu',
								'depth'             => 1,
								'menu_class'        => '',
							) );
							endif;?>
						
						</div>
						<?php endif;?>
					</div>
					<!--/ End Topbar Nav -->
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<!-- Topbar Right -->
					<div class="top-right">
						<!-- Topbar Social -->
						<?php if(absint(get_theme_mod('trend_news_top_header_social_media_enable','1'))==1): ?>
						<div class="top-social">
							<ul>
								
								<?php if(get_theme_mod('trend_news_top_header_fb_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('trend_news_top_header_fb_url'));?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
								<?php endif;?>

								<?php if(get_theme_mod('trend_news_top_header_twitter_url')):?>
								<li><a href="<?php echo esc_url(get_theme_mod('trend_news_top_header_twitter_url'));?>" class="twitter"><i class="fa fa-twitter"></i></a></li>
								<?php endif;?>

								<?php if(get_theme_mod('trend_news_top_header_instagram_url')):?>
								<li><a href="<?php echo esc_url(get_theme_mod('trend_news_top_header_instagram_url'));?>" class="instagram"><i class="fa fa-instagram"></i></a></li>
								<?php endif;?>

								<?php if(get_theme_mod('trend_news_top_header_youtube_url')):?>
								<li><a href="<?php echo esc_url(get_theme_mod('trend_news_top_header_youtube_url'));?>" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
								<?php endif;?>

								<?php if(get_theme_mod('trend_news_top_header_pinterest_url')):?>
								<li><a href="<?php echo esc_url(get_theme_mod('trend_news_top_header_pinterest_url'));?>" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
								<?php endif;?>

								<?php if(get_theme_mod('trend_news_top_header_linkedin_url')):?>
								<li><a href="<?php echo esc_url(get_theme_mod('trend_news_top_header_linkedin_url'));?>" class="dribble"><i class="fa fa-linkedin"></i></a></li>
								<?php endif;?>

							</ul>
						</div>
						<?php endif;?>
						<!-- Clickable Icon -->
						<ul class="side-icon">
							<?php if(absint(get_theme_mod('trend_news_top_header_search_icon_enable','1'))==1): ?>
							<li><a class="icon search" href="#"><i class="fa fa-search"></i></a></li>
							<?php endif;?>

							<?php if(absint(get_theme_mod('trend_news_top_header_burger_menu_icon_enable','1'))==1): ?>
							<li><a class="icon bars" href="#"><i class="fa fa-bars"></i></a></li>
							<?php endif;?>
						</ul>
						
						<!-- Search Form -->
						<div class="search-form">
							<?php get_search_form();?>
						</div>
					</div>
					<!--/ End Topbar Right -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Topbar -->
	<?php endif;?>
	<!-- Header Inner -->
	<div class="header-inner">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<!-- Logo -->
					<div class="logo">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
						else :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						endif;
						$trend_news_description = get_bloginfo( 'description', 'display' );
						if ( $trend_news_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $trend_news_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div>
					<?php if(absint(get_theme_mod('trend_news_middle_header_date_enable','0'))==1): ?>
					<!-- Date Forment -->
					<div class="time-date">
						<span><i class="fa fa-calendar"></i><?php echo esc_html(date_i18n(get_option('date_format'))); ?> <?php echo esc_html(date_i18n(get_option('time_format'))); ?></span>
					</div>
					<?php endif;?>
					<div class="trend-news-mobile-menu">
						<div class="menu-click"><a href="#"class="fa fa-bars"><span><?php esc_html_e('Menu','trend-news');?></span></a></div>
						<div class="menu-inner">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_id'        => 'side-menu',
									'menu_class'        => 'side-nav',
								) );
							?>
							<div class="close-menu"><a href="#"><i class="fa fa-remove"></i><?php esc_html_e('Close Menu','trend-news');?></a></div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-8 col-md-8 col-12">
					<?php if ( is_active_sidebar( 'middle-head-ad-space' ) ) { ?>
						<?php dynamic_sidebar( 'middle-head-ad-space' );?>
					<?php } ?>
					
				</div>
				
			</div>
		</div>
	</div>
	<!--/ End Header Inner -->
	<!-- Main Menu -->
	<div class="main-menu">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="menu-top">
						<!-- Main Menu -->
						  <nav class="navbar navbar-expand-lg">
				            <?php
				            if ( has_nav_menu( 'primary' ) ) :
				            wp_nav_menu(
				              array(
				                'theme_location' 	=> 'primary',
				                'menu_id'        	=> 'nav',
				                'menu_class'        => 'nav menu navbar-nav',
				                'container_class'   => 'navbar-collapse',
				                'container_id'      => 'navbarSupportedContent', 
				                'fallback_cb'       => 'Trend_News_Navwalker::fallback',
				                'walker'            => new Trend_News_Navwalker(),
				              )
				            );
				            else:?>
				            	<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">
										<ul class="nav menu navbar-nav">
											<li class="active"><a href="<?php echo esc_url(home_url());?>"><i class="fa fa-home"></i></a>
											</li>
											<?php 
											wp_list_pages(
													array(
														'match_menu_classes' => true,
														'show_sub_menu_icons' => false,
														'title_li' => false,
														'depth' => 1,
														)
													); 
											?>
										</ul>
									</div>
								</nav>
				            	<?php
				            endif;
				            ?>
				          </nav><!-- #site-navigation -->

						
						<!--/ End Main Menu -->
						<div class="menu-right">
							<div class="single-menu">
								<!-- Latest Trending -->
								<ul class="latest-trending">
									<?php if(absint(get_theme_mod('trend_news_bottom_header_latest_news','1'))==1): ?>
									<a class="icon latest" href="#0"><i class="fa fa-clock-o"></i><span><?php echo esc_html(get_theme_mod('trend_news_bottom_header_latest_news_title'));?></span></a>
									<?php endif;?>

									<?php if(absint(get_theme_mod('trend_news_bottom_header_popular_news','1'))==1): ?>
									<a class="icon trending" href="#0"><i class="fa fa-line-chart"></i><span><?php echo esc_html(get_theme_mod('trend_news_bottom_header_popular_news_title'));?></span></a>
									<?php endif;?>
								</ul>
								<?php if(absint(get_theme_mod('trend_news_bottom_header_latest_news','1'))==1): ?>
								<!-- Latest Posts -->
								<div class="menu-post latest">
									
									<h3><?php echo esc_html(get_theme_mod('trend_news_bottom_header_latest_news_title'));?></h3>
									<!-- Single Post -->

									<?php trend_news_latest_posts(3);?>
									<!--/ End Single Post -->
								
								</div>
								<!--/ End Latest Posts -->
								<?php endif;?>

								<?php if(absint(get_theme_mod('trend_news_bottom_header_popular_news','1'))==1): ?>
								<!-- Trending Posts -->
								<div class="menu-post trending">
									
									<h3><?php echo esc_html(get_theme_mod('trend_news_bottom_header_popular_news_title'));?></h3>
									<!-- Single Post -->
									<?php trend_news_popular_posts(3);?>
									<!--/ End Single Post -->
									
								</div>
								<!--/ End Trending Posts -->
								<?php endif;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Main Menu -->
	<!-- Sidebar Menu -->
	<div class="sidebar-menu">
		<a href="#0" class="cross"><i class="fa fa-times"></i></a>
		<div class="content">
			<div class="single-content">
				<!-- Logo -->
				<?php if(absint(get_theme_mod('trend_news_sidenav_logo_enable','1'))==1): ?>
				<div class="logo">
					<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$trend_news_description = get_bloginfo( 'description', 'display' );
						if ( $trend_news_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $trend_news_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
				</div>
				<!--/ End Logo -->
				<?php endif;?>
			</div>
			<?php if ( is_active_sidebar( 'sidenav-widget-area' ) ) { ?>
				<?php dynamic_sidebar( 'sidenav-widget-area' );?>
			<?php } ?>	
		</div>		
	</div>
	<!-- End Sidebar Menu -->
</header>
<!--/ End Header -->

<?php if( ! is_home() && !is_front_page() ):?>
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay" style="background-image:url(<?php if(has_header_image()):echo esc_url(get_header_image());endif;?>)">
	<div class="container">
		<div class="bread-inner">
			<div class="row">

				<div class="col-12">
					<h2>
						<?php if ( is_archive() || is_category()  ) {
							the_archive_title();	
						}
						else{
							the_title();
						} ?>
					</h2>
					
					<ul class="bread-list">
						<li><a href="<?php echo esc_url(home_url());?>"><?php esc_html_e('Home','trend-news');?><span class="middle-icon"><i class="fa fa-angle-double-right"></i></span></a></li>
						<li class="active"><?php if ( is_archive() || is_category() ) { 
							$catId = get_query_var('cat');
							?>
						<a href="<?php echo esc_url(get_category_link($catId));?>"><?php the_archive_title();?></a>
					<?php	}
					else{?>
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					<?php	
						
					} ?></li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->
<?php endif;?>
<div id="primary">

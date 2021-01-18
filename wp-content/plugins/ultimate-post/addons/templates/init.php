<?php
defined( 'ABSPATH' ) || exit;

add_filter('ultp_addons_config', 'ultp_templates_config');
function ultp_templates_config( $config ) {
	$configuration = array(
		'name' => __( 'Saved Templates', 'ultimate-post' ),
		'desc' => __( 'Create Short-codes and use them inside your page or page builder.', 'ultimate-post' ),
		'img' => ULTP_URL.'/assets/img/addons/saved-template.svg',
		'is_pro' => false
	);
	$config['ultp_templates'] = $configuration;
	return $config;
}

add_action('init', 'ultp_templates_init');
function ultp_templates_init(){
	$settings = ultimate_post()->get_setting();
	if ( isset($settings['ultp_templates']) ) {
		if ($settings['ultp_templates'] == 'true') {
			require_once ULTP_PATH.'/addons/templates/Saved_Templates.php';
			require_once ULTP_PATH.'/addons/templates/Shortcode.php';
			new \ULTP\Saved_Templates();
			new \ULTP\Shortcode();
		}
	}
}
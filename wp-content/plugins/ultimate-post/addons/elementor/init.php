<?php
defined( 'ABSPATH' ) || exit;

add_filter('ultp_addons_config', 'ultp_elementor_config');
function ultp_elementor_config( $config ) {
	$configuration = array(
		'name' => __( 'Elementor Addons', 'ultimate-post' ),
		'desc' => __( 'Enable Elementor Addons for Elementor Website Builder.', 'ultimate-post' ),
		'img' => ULTP_URL.'/assets/img/addons/saved-template.svg',
		'is_pro' => false
	);
	$config['ultp_elementor'] = $configuration;
	return $config;
}

add_action('plugins_loaded', 'ultp_elementor_init');
function ultp_elementor_init(){
	$settings = ultimate_post()->get_setting();
	if ( isset($settings['ultp_elementor']) ) {
		if ($settings['ultp_elementor'] == 'true') {
			if(did_action( 'elementor/loaded' )){
				require_once ULTP_PATH.'/addons/elementor/Elementor.php';
				Elementor_ULTP_Extension::instance();
			}
		}
	}
}
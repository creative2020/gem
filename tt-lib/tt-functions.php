<?php
/*
Author: 2020 Creative
URL: htp://2020creative.com
*/
//////////////////////////////////////////////////////// 2020 Functions
define( 'TEMPPATH', get_stylesheet_directory_uri());
define( 'IMAGES', TEMPPATH. "/imgages");

// Options framework
require_once ('plugins/options-framework/options-framework.php');

// Custom fields
require_once ('plugins/advanced-custom-fields/acf.php');

// Shortcodes
require_once ('tt-shortcodes.php');

// CPT's
require_once ('tt-cpt.php');

//////////////////////////////////////////////////////// Menus

register_nav_menus( array(
	'section_links_1' => 'Section Links 1',
	'section_links_2' => 'Section Links 2',
	'section_links_3' => 'Section Links 3',
	'section_links_4' => 'Section Links 4',
) );


//////////////////////////////////////////////////////////////////////////////////////////////////////////////// Sidebars

////////////////////////////////////////////////////////

$args = array(
	'name'          => __( 'Section - Gem Products - Home', 'theme_text_domain' ),
	'id'            => 'section-gem-product',
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebar( $args );

////////////////////////////////////////////////////////

////////////////////////////////////////////////////////

$args = array(
	'name'          => __( 'Gem Products - Main Sidebar', 'theme_text_domain' ),
	'id'            => 'products-main',
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebar( $args );

////////////////////////////////////////////////////////
////////////////////////////////////////////////////////

$args = array(
	'name'          => __( 'Join Us - Sidebar', 'theme_text_domain' ),
	'id'            => 'join-us',
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebar( $args );

////////////////////////////////////////////////////////

add_action('init', 'gem_setcookie');

// my_setcookie() set the cookie on the domain and directory WP is installed on
function gem_setcookie(){
  $path = parse_url(get_option('siteurl'), PHP_URL_PATH);
  $host = parse_url(get_option('siteurl'), PHP_URL_HOST);
  $expiry = strtotime('+1 month');
  setcookie('gem_party', '0', $expiry, $path, $host);
  /* more cookies */
  //setcookie('my_cookie_name_2', 'my_cookie_value_2', $expiry, $path, $host);
}
/**
 * Disable admin bar on the frontend of your website
 * for subscribers.
 */
function themeblvd_disable_admin_bar() { 
	if( ! current_user_can('edit_posts') )
		add_filter('show_admin_bar', '__return_false');	
}
add_action( 'after_setup_theme', 'themeblvd_disable_admin_bar' );
 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////// disable admin area
function tt_redirect_admin(){
	if ( ! current_user_can( 'edit_dashboard' ) ){
		wp_redirect( site_url() );
		exit;		
	}
}
add_action( 'admin_init', 'tt_redirect_admin' );

////////////////////////////////////////////////////////

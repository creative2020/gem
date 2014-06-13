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
//////////////////////////////////////////////////////////////////////////////////////////////////////////////// Admin area
////////////////////////////////////////////////////////

//function tt_block_wp_admin() {
//    if ( ! current_user_can( 'manage_options' )  && $_SERVER['PHP_SELF'] != '/wp-admin/admin-ajax.php' ) {
//        wp_redirect( home_url() );
//    }
//}
//add_action( 'admin_init', 'tt_block_wp_admin', 1 );
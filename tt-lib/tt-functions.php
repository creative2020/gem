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


//////////////////////////////////////////////////////////////////////////////////////////////////////////////// disable admin area

function tt_disable_admin_bar() { 
	if( ! current_user_can('edit_dashboard') )
		add_filter('show_admin_bar', '__return_false');	
}
add_action( 'after_setup_theme', 'tt_disable_admin_bar' );
 

function tt_redirect_admin(){
	if ( ! current_user_can( 'edit_dashboard' ) ){
		wp_redirect( site_url() . '/account' );
		exit;		
	}
}
add_action( 'admin_init', 'tt_redirect_admin' );

////////////////////////////////////////////////////////


function tt_gem_party_id() {
    
    //$post = get_post();
    //$post_type = get_post_type();
    
    //echo 'The post type is: ' . get_post_type( $post_id );
    //echo 'The post type is: ' . get_post_type( 79 );
    
    //print_r($post);
    setcookie('gem_party','4',time()+60*60*24*31);
    
//  if ($post_type == 'party'){
//    echo 'this is a party';
//        //$gem_party_id = $wp_query->post->ID;
//    setcookie('gem_party', get_the_ID(),time()+60*60*24*31);
//  }
}
add_action('init', 'tt_gem_party_id');


////////////////////////////////////////////////////////


function tt_print_acf() {
    
    $user_meta = get_user_meta(1);
    print_r($user_meta);
}
add_action('admin_print_footer_scripts', 'tt_print_acf');




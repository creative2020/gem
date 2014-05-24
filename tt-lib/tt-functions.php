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

<<<<<<< HEAD
//////////////////////////////////////////////////////////////////////////////////////////////////////////////// Sidebars

////////////////////////////////////////////////////////

$args = array(
	'name'          => __( 'Section - Gem Product', 'theme_text_domain' ),
=======
// sidebars

$args = array(
	'name'          => __( 'Section - Gem Products - Home', 'theme_text_domain' ),
>>>>>>> 70d3e66bf3871e0d076789aeb39e433477ef77f2
	'id'            => 'section-gem-product',
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

<<<<<<< HEAD
register_sidebar( $args );

////////////////////////////////////////////////////////
=======
register_sidebar( $args );
>>>>>>> 70d3e66bf3871e0d076789aeb39e433477ef77f2

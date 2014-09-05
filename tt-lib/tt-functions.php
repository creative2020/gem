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
    'social_media' => 'Social Media',
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
add_action( 'admin_head', 'tt_redirect_admin' );

////////////////////////////////////////////////////////

function tt_print_acf() {
    
    $user_meta = get_user_meta(1);
    //print_r($user_meta);
}
add_action('admin_print_footer_scripts', 'tt_print_acf');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// woocommerce custom fields

add_action('woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta');

function my_custom_checkout_field_update_order_meta( $order_id ) {
    
    $gpi = $_COOKIE['gem_party'];
    $gri = $_COOKIE['wp_affiliates'];
    
update_post_meta( $order_id, 'gem_party_id', $gpi);
update_post_meta( $order_id, 'gem_rep_id', $gri);
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// woocommerce custom fields on order edit page

add_action( 'woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );
 
function my_custom_checkout_field_display_admin_order_meta($order){
    echo '<p><strong>'.__('Gem Party ID').':</strong> ' . get_post_meta( $order->id, 'gem_party_id', true ) . '</p>';
    echo '<p><strong>'.__('Gem Rep ID').':</strong> ' . get_post_meta( $order->id, 'gem_rep_id', true ) . '</p>';
}
////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// woocommerce theme support

add_theme_support( 'woocommerce' );

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// taxonomy

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function create_topics_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Type' ),
    'all_items' => __( 'All Type' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Type' ),
  ); 	

// Now register the taxonomy

  register_taxonomy('marketing-type',array('marketing'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));

}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////// login

function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/tt-lib/img/site-login-logo.png);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// login

function tt_wooemail_header() { 
    
    echo '<img src="https://s3-us-west-2.amazonaws.com/rockdarling.com/email+tpl/email-header.png" width="100%">';
        
}
add_action( 'woocommerce_email_before_order_table', 'tt_wooemail_header' );

/////////////////////////////////////////////////////////



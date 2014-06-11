<?php
/*
Author: 2020 Creative
URL: htp://2020creative.com
Requirements: php5.5.*
*/
//////////////////////////////////////////////////////// 2020 CPT's

namespace TwentyTwenty\TTcpt;

////////////////////////////////////////////////////////


class RandomClass {
    
    public function create_content_type($options) {
        return "You just created a content type, with Traits called " . $options["type"];
    }

    
    public function __construct($options) {
        $this->content_type_message = $this->create_content_type($options);
    }
    
    
    public function print_message() {
        echo $this->content_type_message;
    }
}

$object = new RandomClass(array( "type" => "location" ));

//add_action('init', [ $object, "print_message" ]);

////////////////////////////////////////////////////////

class ContentType {
    public $type;
    public $options = array();
    public $labels = array();
    
    public function __construct($type, $options = array(), $labels = array()) {
        $this->type = $type;
        
        $default_options = array(
            'public' => true,
            'supports' => array('title', 'editor', 'revisions', 'custom-fields', 'thumbnail', 'author'),
        );
        $required_labels = array(
            'singular_name' => ucwords($this->type),
            'plural_name' => ucwords($this->type)
        );
        
        $this->options = $options + $default_options;
        $this->labels = $labels + $required_labels;
        
        $this->options['labels'] = $this->labels + $this->default_labels();
        
        add_action('init', array( $this, "register"));
    }
    public function register() {
        register_post_type($this->type, $this->options);
    }
    public function default_labels() {
        return array(
            'name' => $this->labels['plural_name'],
            'singular_name' => $this->labels['singular_name'],
            'add_new' => 'Add New ' . $this->labels['singular_name'],
            'add_new_item' => 'Add New ' . $this->labels['singular_name'],
            'edit' => 'Edit',
            'edit_item' => 'Edit ' . $this->labels['singular_name'],
            'view_item' => 'View ' . $this->labels['singular_name'],
            'search_items' => 'Search ' . $this->labels['plural_name'],
            'not_found' => 'No Matching ' . $this->labels['plural_name'],
            'not_found_in_trash' => 'No ' . strtolower($this->labels['plural_name']) . ' found',
            'parent_item_colon' => 'Parent ' . $this->labels['singular_name']
        );
    }
}
$gems = new ContentType('gem', array(), array('plural_name' => 'gems'));
$gems = new ContentType('host', array(), array('plural_name' => 'hosts'));
$gems = new ContentType('party', array(), array('plural_name' => 'parties'));
$gems = new ContentType('contact', array(), array('plural_name' => 'contacts'));
$gems = new ContentType('faq', array(), array('plural_name' => 'faqs'));
    
    
//////////////////////////////////////////////////////////// Taxonomies

/*
// Register Custom Taxonomy
function taxhelp() {

	$labels = array(
		'name'                       => 'Help and FAQ\'s',
		'singular_name'              => 'Help and FAQ',
		'menu_name'                  => 'Help and FAQ',
		'all_items'                  => 'All Items',
		'parent_item'                => 'Parent Item',
		'parent_item_colon'          => 'Parent Item:',
		'new_item_name'              => 'New Item Name',
		'add_new_item'               => 'Add New Item',
		'edit_item'                  => 'Edit Item',
		'update_item'                => 'Update Item',
		'separate_items_with_commas' => 'Separate items with commas',
		'search_items'               => 'Search Items',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used items',
		'not_found'                  => 'Not Found',
	);
	$rewrite = array(
		'slug'                       => 'help',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'taxhelp', array( 'faq' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'help', 0 );    
*/
    

// Roles
function role_gem_new () {
    
    $capabilities = array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => false,
        'delete_posts' => false, // Use false to explicitly deny
    );

add_role( 'gem_new', 'Gem New', $capabilities );
    
}   
role_gem_new ();    
    
    
<?php
/*
Author: 2020 Creative
URL: htp://2020creative.com
*/
//////////////////////////////////////////////////////// 2020 CPT's

namespace TwentyTwenty\TTcpt;

////////////////////////////////////////////////////////
trait CreatePosts {
    public function create_content_type($options) {
        return "You just created a content type, with Traits called " . $options["type"];
    }
}

class RandomClass {
    
    use \TwentyTwenty\TTcpt\CreatePosts;
    
    public function __construct($options) {
        $this->content_type_message = $this->create_content_type($options);
    }
    
    
    public function print_message() {
        echo $this->content_type_message;
    }
}

$object = new RandomClass([ "type" => "location" ]);

//add_action('init', [ $object, "print_message" ]);

////////////////////////////////////////////////////////

class ContentType {
    public $type;
    public $options = [];
    public $labels = [];
    
    public function __construct($type, $options = [], $labels = []) {
        $this->type = $type;
        
        $default_options = [
            'public' => true,
            'supports' => ['title', 'editor', 'revisions', 'custom-fields', 'thumbnail', 'author'],
        ];
        $required_labels = [
            'singular_name' => ucwords($this->type),
            'plural_name' => ucwords($this->type)
        ];
        
        $this->options = $options + $default_options;
        $this->labels = $labels + $required_labels;
        
        $this->options['labels'] = $this->labels + $this->default_labels();
        
        add_action('init', array( $this, "register"));
    }
    public function register() {
        register_post_type($this->type, $this->options);
    }
    public function default_labels() {
        return [
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
        ];
    }
}
$gems = new ContentType('gem', [], ['plural_name' => 'gems']);
$gems = new ContentType('party', [], ['plural_name' => 'parties']);
    
    
    
    
    
    
    
    
    
    
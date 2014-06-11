<?php
/*
Author: 2020 Creative
URL: htp://2020creative.com
*/
//////////////////////////////////////////////////////// 2020 Shortcodes


//////////////////////////////////////////////////////// TEST
add_shortcode( 'test', 'test1' );
function test1 ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
		), $atts )
	);
// code
return 'TEST Shortcode is working';    
}
////////////////////////////////////////////////////////////// Gem party list
add_shortcode( 'gem_party_list', 'gem_party_list' );
function gem_party_list ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => 'all',
            'gem_id' => '',
			'list' => 'n',
		), $atts )
	);

/////////////////////////////////////// Variables
$user_ID = get_current_user_id();
$user_data = get_user_meta( $user_ID );
$user_photo_id = $user_data[photo][0];
$user_photo_url = wp_get_attachment_url( $user_photo_id );
$user_photo_img = '<img src="' . $user_photo_url . '">';

/////////////////////////////////////// All Query    
if ($name == 'all') {
	// The Query
$args = array(
	'post_type' => 'party',
	'post_status' => 'publish',
	'order' => 'ASC',
	'posts_per_page'=> -1
);
$the_query = new WP_Query( $args );
} else { 
	//nothing
	}
    
/////////////////////////////////////// Current Author Query
if ($name == 'current') {
	// The Query
$args = array(
	'post_type' => 'party',
	'post_status' => 'publish',
    'author' => $user_ID,
	'order' => 'ASC',
	'posts_per_page'=> -1
);
$the_query = new WP_Query( $args );
} else { 
	//nothing
	}
    
    
global $post;
// top
    
// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// pull meta for each post
		$post_id = get_the_ID();
		$permalink = get_permalink( $id );
		$party_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail', false, '');
		$party_img_url = $party_img[0];
		$party_name = get_the_title();
        $gem_url = get_field( "party_url" );
		
		$edit_link_url = get_edit_post_link($post->ID);
		$edit_link = '<span class="edit-pencil-link"><a href="' . $edit_link_url . '"><i class="fa fa-pencil"></i></a></span>';
		
		// set variables
        if( empty( $business_img_url ) ) {
        	$business_img_url = "/wp-content/themes/Gem/images/gem-icon-pink-25.png";
				};
				
		if( empty( $edit_link_url ) ) {
        	$edit_link = "";
				};
//HTML
        
        $output .= '<li><a href="' . $permalink . '?mygem=' . $gem_url . '">' . $party_name . '</a></li>';


	}
} else {
	// no posts found
	echo '<h2>No Active Gem Parties found</h2>';
}
/* Restore original Post Data */
wp_reset_postdata();
return $output;
}
//////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////// FAQ list
add_shortcode( 'help', 'help' );
function help ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => 'all',
			'list' => 'n',
		), $atts )
	);

/////////////////////////////////////// Variables


/////////////////////////////////////// All Query    
if ($name == 'all') {
	// The Query
$args = array(
	'post_type' => 'faq',
	'post_status' => 'publish',
	'order' => 'ASC',
	'posts_per_page'=> -1
);
$the_query = new WP_Query( $args );
} else { 
	//nothing
	}
    
/////////////////////////////////////// loop
   
    
global $post;
// top
    
// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// pull meta for each post
		$post_id = get_the_ID();
		$permalink = get_permalink( $id );
		$question = get_the_title();
        $answer = get_field( "answer" );
		
		$edit_link_url = get_edit_post_link($post->ID);
		$edit_link = '<span class="edit-pencil-link"><a href="' . $edit_link_url . '"><i class="fa fa-pencil"></i></a></span>';
		
// set variables
        
//HTML
        
        $output .= '<ul>'.
        			'<li class="question">' . $question . '</li>'.
        			'<li class="answer">' . $answer . '</li>'.
        			'</ul>';


	}
} else {
	// no posts found
	echo '<h2>None found</h2>';
}
/* Restore original Post Data */
wp_reset_postdata();
return $output;
}

////////////////////////////////////////////////////// Shortcode: gem button
add_shortcode( 'gem_button', 'gem_button1' );
function gem_button1($atts, $content = null) {
    extract(shortcode_atts(array(
        'size'   => '', // (sizes are xs, sm or lg)
        'color'  => '#a50050',
        'text'  => '#ffffff',
        'link'    => '#',
        'float'    => 'left',
        'target'    => '',
        'class'    => '',
        'span' => 'y',
    ), $atts ) );

    $classes = 'btn btn-primary btn-' . $size . ' ' . $span_class;
    
    if( $span == 'y') {
        	$span_class = "btn-block";
				};

    return '<a class="' . $classes . '" href="' . $link . '" style="background:' . $color . ';float:' . $float . '" target="' . $target . '">' . $content . '</a>';
}

//////////////////////////////////////////////////////// Agreement text
add_shortcode( 'gem_agreement', 'gem_agreement' );
function gem_agreement ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
		), $atts )
	);
// code
    global $post;
    
    $legal_post = get_post( 274, ARRAY_A );
    $legal_content = $legal_post['post_content'];
    
    //print_r($legal_post);
    
return $legal_content;    
}
/////////////////////////////
//////////////////////////////////////////////////////// Policy text
add_shortcode( 'gem_policy', 'gem_policy' );
function gem_policy ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
		), $atts )
	);
// code
    global $post;
    
    $policy_post = get_post( 638, ARRAY_A );
    $policy_content = $policy_post['post_content'];
    
    //print_r($policy_content);
    
return $policy_content;    
}
/////////////////////////////
//////////////////////////////////////////////////////// Starter Kit Image
add_shortcode( 'gem_starter_kit', 'gem_starter_kit' );
function gem_starter_kit ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'width' => '600',
		), $atts )
	);
// code
    global $post;
    
    $gem_kit = get_field('starter_kit', 'option');
    
    //print_r($gem_kit);
    
    if( !empty($gem_kit) ) { 
 
	   return '<img src="' . $gem_kit['url'] . '" alt="' . $gem_kit['alt'] . '" width="' . $width . '" />';

    } else {
        
            return 'need starter kit image';
        }
    
}
/////////////////////////////

////////////////////////////////////////////////////////////// Gem Rep List
add_shortcode( 'gem_rep_list', 'gem_rep_list' );
function gem_rep_list ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => 'all',
			'list' => 'y',
		), $atts )
	);

$args = array(
    'role' => 'aamrole_532c6893daad0',
	
 );
    
// The Query
$user_query = new WP_User_Query( $args );
   
    
///
    
//testing


//print_r($user_query->results);
//print_r($user);
    
///    
//$wp_roles;
    //print_r($user_data);
    
    
// User Loop
if ( ! empty( $user_query->results ) ) {
	foreach ( $user_query->results as $user ) {
        
        $user_data = get_user_meta( $user->ID ); 
        //print_r($user_data);
        
		$output .= '<div class="user-name pull-left">' . $user->display_name . '</div>' .
            '<div class="user-state pull-left">' . $user_data['state'][0] . '</div>' .
            '<a href="/shop/?mygem=' . $user->user_login . '"><div class="user-store">Shop Now ' . $user_data['store_name'][0] . '</div></a>';
        
	}
} else {
	echo 'No Gem Reps found.';
}
/* Restore original Post Data */
//wp_reset_postdata();
return $output;
}

/////////////////////////////////

////////////////////////////////////////////////////////////// Cookie data
add_shortcode( 'gem_rep_cookie', 'gem_rep_cookie' );
function gem_rep_cookie ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
		), $atts )
	);

return 'Cookie is set as '.($_COOKIE['wp_affiliates']!='' ? $_COOKIE['wp_affiliates'] : 'Guest');
}
/////////////////////////////////













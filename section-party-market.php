<?php 
		// pull meta for each post
		$post_id = get_the_ID();
		$permalink = get_permalink();
		$party_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail', false, '');
		$party_img_url = $party_img[0];
		$party_name = get_the_title();
        $gem_url = get_field( "party_url" );
        $gem_id = get_the_author_meta('display_name');
        $gem_fname = get_the_author_meta('first_name');
        $gem_lname = get_the_author_meta('last_name');
        $gem_name = $gem_fname . ' ' . $gem_lname;
		
		$edit_link_url = get_edit_post_link($post->ID);
		$edit_link = '<span class="edit-pencil-link"><a href="' . $edit_link_url . '"><i class="fa fa-pencil"></i></a></span>';
		
		// set variables
        if( empty( $business_img_url ) ) {
        	$business_img_url = "/wp-content/themes/Gem/images/gem-icon-pink-25.png";
				};
				
		if( empty( $edit_link_url ) ) {
        	$edit_link = "";
				};
        // Author info
        $author_url = get_the_author_meta('user_url');
        $author_fname = get_the_author_meta('first_name'); 

        // get message from options tab
        $email_tmp_party = get_field('email_tmp', 'option');
        $party_invite_headline = get_field('party_invite_headline', 'option');
        $party_invite_offer = get_field('party_invite_offer', 'option');
        $party_invite_button = get_field('party_invite_button', 'option');
        

//HTML
        

//return $output;

?>

<div id="market-my-party" class="row">
    
    <div class="col-md-10 col-md-offset-1">
    
    <div class="hrule"></div>    
     <?php echo $author_fname; ?>'s Shop URL = <?php echo $author_url; ?>  
    <div class="hrule"></div>
        
<h4><?php echo $gem_fname; ?>, Market your party by sending the following email to your clients</h4>
<div class="hrule"></div>
        
        <?php
            echo '<h3>Party Link:</br></h3>';
            echo '<pre>' . $permalink . '?mygem=' . $gem_id . '</pre>';
        ?>
        <div class="hrule"></div>
        <div class="code-preview">
            
        <h3><?php echo $party_invite_headline; ?></h3>
        <p><?php echo $email_tmp_party; ?></p>
        <h5><?php echo $party_invite_offer; ?></h5></br></br>
        
        <p><a style="padding:8px 16px; color:white; background-color:#00b2a9; text-decoration:none;" href="<?php echo $permalink . '?mygem=' . $gem_id; ?>" target="_blank"><?php echo $party_invite_button; ?> <?php echo $party_name; ?></a></p></br></br>
        
        <h4>Your Gem,</h4>
        <h5 class="script lg"><?php echo $gem_name; ?></h5>
        </div>

<div class="hrule"></div>

        </div>
</div>
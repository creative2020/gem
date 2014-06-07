<?php 
		// pull meta for each post
		$post_id = get_the_ID();
		$permalink = get_permalink();
		//$party_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail', false, '');
		//$party_img_url = $party_img[0];
		//$party_name = get_the_title();
        $gem_id = get_the_author_meta('display_name');
        $gem_fname = get_the_author_meta('first_name');
        $gem_lname = get_the_author_meta('last_name');
        $gem_name = $gem_fname . ' ' . $gem_lname;
		
        // Author info
        $author_url = get_the_author_meta('user_url');
        $author_fname = get_the_author_meta('first_name');

        // user info
        $user_in = get_currentuserinfo();
        $user_info = get_userdata( $author_url);

        // get message from options tab
        $email_tmp_party = get_field('email_tmp', 'option');
        $party_invite_headline = get_field('party_invite_headline', 'option');
        $party_invite_offer = get_field('party_invite_offer', 'option');
        $party_invite_button = get_field('party_invite_button', 'option');

        //$author_link = get_author_posts_url( 1 );
        

//HTML
        

//return $output;

?>

<div id="market-my-party" class="row">
    
    <div class="col-md-10 col-md-offset-1">
    
    <div class="hrule"></div>
        
        
        
<?php  
    if ($user_in->user_nicename == $author_url) { 
      echo '<a href="/' . $user_info->user_login . '/?mygem=' . $user_info->display_name . '">www.rockdarling.com/' . $user_info->user_login . '</a></br>';
        
    echo 'User roles: ' . implode(', ', $user_info->roles) . '</br>';
    echo 'User ID: ' . $user_info->ID . '</br>';
    echo 'User Display name: ' . $user_info->display_name . '</br>';
        
        //print_r($user_info);
    }
?>
        
    <div class="hrule"></div>
        
<h4><?php echo $gem_fname; ?>, Market your party by sending the following email to your clients</h4>
<div class="hrule"></div>
        
        <div class="hrule"></div>
        <div class="code-preview">
            
        <h3><?php echo $party_invite_headline; ?></h3>
        <p><?php echo $email_tmp_party; ?></p>
        <h5><?php echo $party_invite_offer; ?></h5></br></br>
        
        <p><a style="padding:8px 16px; color:white; background-color:#00b2a9; text-decoration:none;" href="<?php echo $user_info->user_login . '?mygem=' . $user_info->display_name; ?>" target="_blank"><?php echo $user_info->display_name; ?></a></p></br></br>
        
        <h4>Your Gem,</h4>
        <h5 class="script lg"><?php echo $gem_name; ?></h5>
        </div>

<div class="hrule"></div>

        </div>
</div>
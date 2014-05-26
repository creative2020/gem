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
//HTML
        

//return $output;

?>

<div id="market-my-party" class="row">
    
    <div class="col-md-10 col-md-offset-1">
        
        <h4><?php echo $gem_fname; ?>, Market your party by sending the following email to your clients</h4>
        <div class="hrule"></div>
        
        <?php
            echo '<h3>Party Link:</br></h3>';
            echo '<pre>' . $permalink . '?mygem=' . $gem_id . '</pre>';
        ?>
        <div class="hrule"></div>
        <div class="code-preview">
        
        
        <h3>You are invited to this special online party</h3>
        
        <h2>Shop now and get special pricing and information through my party URL below</h2>
        
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed mattis fringilla eros. Integer tellus felis, bibendum in, rhoncus non, blandit non, libero. Integer ac enim vehicula lorem suscipit rutrum. Vestibulum varius. Duis odio eros, dignissim at, dapibus et, tincidunt iaculis, felis. Suspendisse neque. In in lorem vel velit aliquam congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras congue erat et neque tincidunt mattis. Nulla cursus sapien eget nibh. Maecenas at massa in metus ullamcorper commodo. Vivamus dignissim eros. Praesent vitae velit at libero malesuada semper. Vestibulum venenatis diam vitae augue. Aenean vel sem sit amet libero interdum aliquam.</p>
        
        <a class="btn btn-primary btn-lg" href="<?php echo $permalink . '?mygem=' . $gem_id; ?>" target="_blank">Shop: <?php echo $party_name; ?></a>
        
        <h4>Your Gem,</h4>
        <h5 class="script lg"><?php echo $gem_name; ?></h5>
        </div>
        
        <div class="hrule"></div>
        
        <div class="code-select">
            <h2>Copy the code below into your email</h2>
<pre>
&lt;h3&gt;Market your party by sending the following email to your clients&lt;/h3&gt;
        
&lt;h3&gt;You are invited to this special online party&lt;/h3&gt;
            
&lt;h2&gt;Shop now and get special pricing and information through my party URL below&lt;/h2&gt;
            
&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed mattis fringilla eros. Integer tellus felis, bibendum in, rhoncus non, blandit non, libero. Integer ac enim vehicula lorem suscipit rutrum. Vestibulum varius. Duis odio eros, dignissim at, dapibus et, tincidunt iaculis, felis. Suspendisse neque. In in lorem vel velit aliquam congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras congue erat et neque tincidunt mattis. Nulla cursus sapien eget nibh. Maecenas at massa in metus ullamcorper commodo. Vivamus dignissim eros. Praesent vitae velit at libero malesuada semper. Vestibulum venenatis diam vitae augue. Aenean vel sem sit amet libero interdum aliquam.&lt;/p&gt;
            
&lt;a class="btn btn-primary btn-lg" href="<?php echo $permalink . '?mygem=' . $gem_id; ?>" target="_blank"&gt;Shop: <?php echo $party_name; ?>&lt;/a&gt;
            
&lt;h4&gt;Your Gem,&lt;/h4&gt;
&lt;h5 class="script lg"&gt;<?php echo $gem_name; ?>&lt;h5&gt;
</pre>
        </div> 
        

        </div>
</div>
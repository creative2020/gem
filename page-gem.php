<?php get_header(); ?>

<div id="page-wrap" class="row">
    
    <div class="col-md-12">
    
    <div id="page-left" class="col-md-6 col-md-offset-1">
        
        
        
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            
        
        <?php 

if ( is_user_logged_in() ) {
    
    the_content();
    
    
}else{
    
   echo '<h1>Login</h1>',
        '<h2>Gems, please login below</h2>';
        wp_login_form(); 
    
        ?>
        <!-- modal -->
        <!-- Button trigger modal -->
<a data-toggle="modal" data-target="#myModal">
  Forgot Password?
</a>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Password reset</h4>
      </div>
      <div class="modal-body">
        <div id="lostpassword" class="lostpassword span12 hero-search">
				<form method="post" action="<?php echo site_url('wp-login.php?action=lostpassword', 'login_post') ?>" class="wp-user-form">
<div class="span12">
<h5>Enter your username or email and complete the captcha to reset your password.</h5>
</div>
<div class="span7">	

<div class="username">
<label for="user_login" class="hide"><?php _e('Username or Email'); ?>: </label>
<input type="text" class="search-query" name="user_login" value="" size="20" id="user_login" tabindex="1001" placeholder="Username or email address" />
</div>
</div>
<div class="span4 captcha ">
<?php if( function_exists( 'cptch_display_captcha_custom' ) ) { echo "<input type='hidden' name='cntctfrm_contact_action' value='true' />"; echo cptch_display_captcha_custom(); } ?><br/>
<?php if( function_exists( 'cptch_check_custom_form' ) && cptch_check_custom_form() !== true )?>
</div>
<div class="span4 offset4">
<?php do_action('login_form', 'resetpass'); ?>
<input type="submit" id="searchsubmit" name="user-submit " value="<?php _e('Reset my password'); ?>" class="user-submit btn" tabindex="1002" />
<?php $reset = $_GET['reset']; if($reset == true) { echo '<p>A message will be sent to your email address.</p>'; } ?>
<input type="hidden" name="redirect_to" value="/account/" />
<input type="hidden" name="user-cookie" value="1" />

</div>
</form>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        
        <!-- modal-->
        
        
        <?php
}        
        ?>
            
        </div>	<!-- end #main -->	
        
        <div id="sidebar" class="col-md-4">
                    
            <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    echo '<div class="page-feature-img">';
                  the_post_thumbnail('large');
                    echo '</div>';
                    echo do_shortcode( '[sidebar_img2]' );
                } 
            ?>
            
            <?php dynamic_sidebar('sidebar1 '); // main sidebar ?>			
                        
        </div> <!-- end #sidebar -->
        
        
        
        
            
            <?php endwhile; ?>	
            
            <?php else : ?>
            
            <?php endif; ?>
    
    </div> 
    
</div> <!-- end page wrap -->

<?php get_template_part( 'section', 'links' ); ?>


<?php get_footer(); ?>
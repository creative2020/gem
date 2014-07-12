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
}        
        ?>
            
        </div>	<!-- end #main -->	
        
        <div id="sidebar" class="col-md-4">
                    
            <div class="page-feature-img">
            <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  the_post_thumbnail('large');
                } 
            ?>
            </div>
            <div class="page-feature-img">
                <?php echo do_shortcode( '[sidebar_img2]' ) ?>
            </div>
            
            <?php dynamic_sidebar('sidebar1 '); // main sidebar ?>			
                        
        </div> <!-- end #sidebar -->
        
        
        
        
            
            <?php endwhile; ?>	
            
            <?php else : ?>
            
            <?php endif; ?>
    
    </div> 
    
</div> <!-- end page wrap -->

<?php get_template_part( 'section', 'links' ); ?>


<?php get_footer(); ?>
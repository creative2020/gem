<?php get_header(); ?>

<div id="page-wrap" class="row">
    
    <div class="col-md-12">
    
    <div id="page-left" class="col-md-6 col-md-offset-1">
        
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <?php the_content(); ?>
            
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
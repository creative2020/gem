<?php get_header(); ?>

<div id="page-wrap" class="row">
    
    <div class="col-md-12">
    
    <div id="page-left" class="col-md-6 col-md-offset-1">
        
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <?php the_content(); ?>
            
        </div>	<!-- end #main -->	
        
        <div id="sidebar" class="col-md-4">
                    
            <div class="pull-left">
                <img src="<?php echo of_get_option( 'gem_icon', 'no entry' ); ?>">
            </div>
            
            <?php get_sidebar('sidebar1'); // sidebar 2 ?>			
                        
        </div> <!-- end #sidebar -->
        
        
        
        
            
            <?php endwhile; ?>	
            
            <?php else : ?>
            
            <?php endif; ?>
    
    </div> 
    
</div> <!-- end page wrap -->

<?php get_template_part( 'section', 'links' ); ?>


<?php get_footer(); ?>
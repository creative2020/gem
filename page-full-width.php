<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>

<div id="page-wrap" class="row">
    
    <div class="col-md-12">
    
    <div id="page-full" class="col-md-10 col-md-offset-1">
        
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <?php the_content(); ?>
            
        </div>	<!-- end #main -->	
        
                    
            <?php endwhile; ?>	
            
            <?php else : ?>
            
            <?php endif; ?>
    
    </div> 
    
</div> <!-- end page wrap -->

<?php get_template_part( 'section', 'links' ); ?>


<?php get_footer(); ?>
<?php
/*
Template Name: Shop Main
*/
?>

<?php get_header(); ?>

<div id="page-wrap" class="row">
    
    <div class="col-md-12">
    
    <div id="page-left" class="col-md-10 col-md-offset-1">
        
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <?php the_content(); ?>
        
        Hello
            
        </div>	<!-- end #main -->	
        
        <div id="my-sidebar" class="col-md-3 hidden">
                             
            <div class="pull-left">
                <img src="<?php echo of_get_option( 'gem_icon', 'no entry' ); ?>">
            </div>
            
<!--            <?php get_sidebar('sidebar1'); // sidebar ?>			-->
                        
        </div> <!-- end #sidebar -->
        
        
        
        
            
            <?php endwhile; ?>	
            
            <?php else : ?>
            
            <?php endif; ?>
    
    </div> 
    
</div> <!-- end page wrap -->

<?php get_template_part( 'section', 'links' ); ?>


<?php get_footer(); ?>
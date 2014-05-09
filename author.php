<?php get_header(); ?>
			
<div id="slider" class="gem-slider">
            slider img
        </div> <!-- end #slider -->
<div class="container">
    <div id="content" class="row content clearfix col-md-12">
        
        <div id="main" class="row col-md-8 clearfix" role="main">
            
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <?php the_title(); ?>
            
        </div>	<!-- end #main -->			
        <div id="sidebar" class="row col-md-4 col-xs-12">	
            <div class="pull-left">
                <img src="<?php echo of_get_option( 'gem_icon', 'no entry' ); ?>">
            </div>
            <?php get_sidebar('sidebar2'); // sidebar 2 ?>			
                        
        </div> <!-- end #sidebar -->
            
            <?php endwhile; ?>	
            
            <?php else : ?>
            
            <?php endif; ?>
    
    </div> <!-- end #content -->

<?php get_footer(); ?>
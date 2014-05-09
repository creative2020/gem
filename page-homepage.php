<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<div id="slider" class="row">
    <div class="col-md-12">
        
            <div class="hidden-xs hidden-sm col-md-6 col-md-offset-1 slider-img">
                
            </div>
        
            <div class="col-sm-12 col-md-4 slider-info-container">
                <div class="row">
                    <a href="/gem-registration/">
                        <div class="col-sm-4 col-md-12 slider-info">
                            <h2>Beocme a GEM</h2>
                            <p>Earn an income</p>
                        </div>
                    </a>
                    <div class="col-sm-4 col-md-12 slider-info">
                        <h2>Host a Party</h2>
                        <p>Earn an income</p>
                    </div>
                    <div class="col-sm-4 col-md-12 slider-info slider-info-last">
                        <h2>Shop Now</h2>
                        <p>Earn an income</p>
                    </div>
                </div>
            </div> <!-- end #slider info container -->
   </div> 
</div> <!-- end #slider -->

<div id="videos" class="row">
    
    <div class="col-md-12">
    
        <div class="col-md-10 col-md-offset-1">
        
            <div class="row">
                
                    <div class="col-sm-12 col-md-4 video-box">
                        
                    </div>
                    <div class="col-md-4 hidden-xs hidden-sm video-box">
                        
                    </div>
                    <div class="col-md-4 hidden-xs hidden-sm video-box">
                        
                    </div>
                
            </div>
    
        </div>
        
    </div>    
</div>

<div id="product-home" class="row">
    
    <div class="col-md-12">

        <div class="col-sm-12 col-sm-5 col-md-2 col-md-offset-1 prod-box">
            
            <div class="prod-go"></div>
            
        </div>
        <div class="col-md-2 col-sm-5 prod-box">
            
            <div class="prod-go"></div>
            
        </div>
        <div class="col-md-2 hidden-xs hidden-sm prod-box">
            
            <div class="prod-go"></div>
            
        </div>
        <div class="col-md-2 hidden-xs hidden-sm prod-box">
            
            <div class="prod-go"></div>
            
        </div>
        <div class="col-md-2 hidden-xs hidden-sm prod-box">
            
            <div class="prod-go"></div>
            
        </div>

    </div>    
        
</div>
        
<?php get_template_part( 'section', 'links' ); ?>    
        

<div id="page-wrap" class="row">
    <div class="col-md-12 hidden">
    
    
    <div id="page-left" class="col-md-6 col-md-offset-1">
        
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <?php the_content(); ?>
            
        </div>	<!-- end #main -->	
        
        <div id="sidebar" class="col-md-4">
                    
            <div class="pull-left">
                <img src="<?php echo of_get_option( 'gem_icon', 'no entry' ); ?>">
            </div>
            
            <?php get_sidebar('sidebar2'); // sidebar 2 ?>			
                        
        </div> <!-- end #sidebar -->
        
        
        
        
            
            <?php endwhile; ?>	
            
            <?php else : ?>
            
            <?php endif; ?>
    
    </div> <!-- end #content -->
    
    </div>
    
<?php get_footer(); ?>
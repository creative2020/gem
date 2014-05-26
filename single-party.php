<?php get_header(); ?>

<div id="party-header-wrap" class="row">
    <div class="hidden-xs hidden-sm col-md-12">
        
        <?php
            //$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' );
            $party_img = get_field('party_image');

            if ($party_img == "Spring") {
                
                $bg_img = get_field('spring_bg_img', 'option');
                
            }
            if ($party_img == "Default") {
                
                $bg_img = get_field('default_bg_img', 'option');
                
            }
            if ($party_img == "Collegiate") {
                
                $bg_img = get_field('collegiate_bg_img', 'option');
                
            }

            
            //echo $party_img;
            //print_r($bg_img);

        ?>
        
        <div class="party-img" style="background: url('<?php echo $bg_img['url']; ?>') top right no-repeat;height:100px;">

            <div class="col-md-offset-1">
                
                <h1 class="party-title"><?php the_title(); ?></h1>
            
            </div>
            
        </div>
              
    </div>
</div>

<div id="page-wrap" class="row">
    
    <div class="col-md-12">
    
    <div id="page-left" class="col-md-7 col-md-offset-1">
        
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
        
            <?php the_content(); ?>
        
        <!-- start shopping items -->
        
        <?php echo do_shortcode('[recent_products per_page="12" columns="4"]'); ?>
        
        <!-- end shopping items -->
            
        </div>	<!-- end #main -->	
        
        <div id="sidebar" class="col-md-3">
                    
            <div class="pull-left">
                <img src="<?php echo of_get_option( 'gem_icon', 'no entry' ); ?>">
            </div>
            
            <?php dynamic_sidebar('products-main'); // Shop sidebar ?>			
                        
        </div> <!-- end #sidebar -->
        
        
        
        
            
            <?php endwhile; ?>	
            
            <?php else : ?>
            
            <?php endif; ?>
    
    </div> 
    
</div> <!-- end page wrap -->

<?php get_template_part( 'section', 'links' ); ?>


<?php get_footer(); ?>
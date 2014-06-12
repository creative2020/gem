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
                    <a href="/find-a-gem/">
                        <div class="col-sm-4 col-md-12 slider-info">
                            <h2>Find a Gem near you</h2>
                            <p>Shop</p>
                        </div>
                    </a>
                    <a href="/host-a-party/"><div class="col-sm-4 col-md-12 slider-info">
                        <h2>Host a Virtual Party</h2>
                        <p>Earn rewards</p>
                    </div></a>
                    <a href="/become-a-gem/"><div class="col-sm-4 col-md-12 slider-info slider-info-last">
                        <h2>Join Us</h2>
                        <p>Become a Gem</p>
                    </div></a>
                </div>
            </div> <!-- end #slider info container -->
   </div> 
</div> <!-- end #slider -->

<?php 

    $video_1_img = get_field('video_1_image','option');
    $video_2_img = get_field('video_2_image','option');
    $video_3_img = get_field('video_3_image','option');

    //print_r($video_1_img);
    

?>

<!-- Modal -->
<div class="modal fade" id="myModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog home-video">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?php echo the_field( 'video_1_headline', 'option' ); ?></h4>
      </div>
      <div class="modal-body">
        <?php echo the_field('video_1_code', 'option'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="#"><button type="button" class="btn btn-primary">More Videos</button></a>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog home-video">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?php echo the_field( 'video_2_headline', 'option' ); ?></h4>
      </div>
      <div class="modal-body">
        <?php echo the_field('video_2_code', 'option'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="#"><button type="button" class="btn btn-primary">More Videos</button></a>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog home-video">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?php echo the_field( 'video_3_headline', 'option' ); ?></h4>
      </div>
      <div class="modal-body">
        <?php echo the_field('video_3_code', 'option'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="#"><button type="button" class="btn btn-primary">More Videos</button></a>
      </div>
    </div>
  </div>
</div>


<div id="videos" class="row">
    
    <div class="col-md-12">
    
        <div class="col-md-10 col-md-offset-1">
        
            <div class="row">
                
                    <div class="col-sm-12 col-md-4 video-box" style="background-image:url(<?php echo $video_1_img['sizes']['medium']; ?>);">
                        
                        <a href="#" data-toggle="modal" data-target="#myModal-1" class="video-link">
                        
                        <div class="video-play">
                            <i class="fa fa-play-circle-o gem-play"></i>
                        </div>
                        
                        <div class="video-headline">
                            <h4><?php echo the_field( 'video_1_headline', 'option' ); ?></h4>
                            
                        </div></a>
                        
                    </div>
                    <div class="col-md-4 hidden-xs hidden-sm video-box" style="background-image:url(<?php echo $video_2_img['sizes']['medium']; ?>);">
                        
                        <a href="#" data-toggle="modal" data-target="#myModal-2" class="video-link">
                        
                        <div class="video-play">
                            <i class="fa fa-play-circle-o gem-play"></i>
                        </div>
                        
                        <div class="video-headline">
                            <h4><?php echo the_field( 'video_2_headline', 'option' ); ?></h4>
                        </div></a>
                    </div>
                    <div class="col-md-4 hidden-xs hidden-sm video-box" style="background-image:url(<?php echo $video_3_img['sizes']['medium']; ?>);">
                        <a href="#" data-toggle="modal" data-target="#myModal-3" class="video-link">
                            
                        <div class="video-play">
                            <i class="fa fa-play-circle-o gem-play"></i>
                        </div>
                        
                        <div class="video-headline">
                            <h4><?php echo the_field( 'video_3_headline', 'option' ); ?></h4>
                        </div></a>
                    </div>
                
            </div>
    
        </div>
        
    </div>    
</div>

<?php get_template_part( 'section', 'product' ); ?>
        
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
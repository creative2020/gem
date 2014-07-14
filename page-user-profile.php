<?php
/**
 * Template Name: User Profile
 *
 * Allow users to update their profiles from Frontend.
 *
 */

get_header(); ?>

<div id="page-wrap" class="row">
    
    <div class="col-md-12">
    
    <div id="page-left" class="col-md-6 col-md-offset-1">
        
        <h2><?php the_title(); ?></h2>
        
        <div>
            <?php 
                $user_ID = get_current_user_id();
                $user_data = get_user_meta( $user_ID );
                $user = get_userdata( $user_ID );
                $user_photo_id = $user_data[photo][0];
                $user_photo_url = wp_get_attachment_url( $user_photo_id );
                
                $user_photo_img = '<img src="' . $user_photo_url . '">';
                
                //classes
                $class = array(
                    'label' => 'data-label col-md-3',
                    'data' => 'data col-md-4',
                    'row' => 'row',
                );
                
                // TEST arrays
                //print_r($user_data) . '</br></br>';
                //print_r($class) . '</br></br>';
                ?>
                <style>
                    .data-label {color:#888888;}
                    .data {color:black;}
                </style>            
                
                </br>  
                </br>
                
                
                <div class="<?php echo $class[row] ?> pull-left">
                    <div class="<?php echo $class[data] ?> pull-left"><img src="<?php echo $user_data[profile_pic][0] ?>"></div>
                </div>        
                <div class="<?php echo $class[row] ?>">
                    <div class="<?php echo $class[label] ?>">Name: </div>
                    <div class="<?php echo $class[data] ?>"><?php echo $user_data[first_name][0] ?> <?php echo $user_data[last_name][0] ?></div>
                    <div class="<?php echo $class[label] ?>">Store URL: </div>
                    <div class="<?php echo $class[data] ?>">www.RockDarling.com/<?php echo $user->user_login ?></div>
                    <div class="<?php echo $class[label] ?>">Phone: </div>
                    <div class="<?php echo $class[data] ?>"><?php echo $user_data[gem_phone][0] ?></div>
                </div>
                <div class="<?php echo $class[row] ?>">
                    
                </div>
                       
                          </br>  
                          </br>
            
<!--
            <form>
        
                <input type="text" class="form-control" value="my form value">
        
            </form>
-->
        
        </div>
        
        <div>
            
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <?php the_content(); ?>
            
        </div>	<!-- end wp content -->

        </div>

        <div id="sidebar" class="col-md-4">
                    
            <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    echo '<div class="page-feature-img">';
                  the_post_thumbnail('large');
                    echo '</div>';
                    echo do_shortcode( '[sidebar_img2]' );
                } 
            ?>
            
            <?php get_sidebar('sidebar1'); // sidebar ?>			
                        
        </div> <!-- end #sidebar -->
        
        
            
            <?php endwhile; ?>	
            
            <?php else : ?>
            
            <?php endif; ?>
    
    </div> 
    
</div> <!-- end page wrap -->

<?php get_template_part( 'section', 'links' ); ?>


<?php get_footer(); ?>







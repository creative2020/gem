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
                //echo print_r($user_data) . '</br></br>';
                //echo print_r($class) . '</br></br>';
                ?>
                <style>
                    .data-label {color:#888888;}
                    .data {color:black;}
                </style>            
                
                </br>  
                </br>
                
                
                <div class="<?php echo $class[row] ?>">
                    <div class="<?php echo $class[label] ?>">Name: </div>
                    <div class="<?php echo $class[data] ?>"><?php echo $user_data[first_name][0] ?> <?php echo $user_data[last_name][0] ?></div>
                </div>
                <div class="<?php echo $class[row] ?>">
                    <div class="<?php echo $class[label] ?>">Store Name: </div>
                    <div class="<?php echo $class[data] ?>"><?php echo $user_data[store_name][0] ?></div>
                </div>
                <div class="<?php echo $class[row] ?>">
                    <div class="<?php echo $class[label] ?>">Store url: </div>
                    <div class="<?php echo $class[data] ?>"><?php echo $user_data[store_url][0] ?></div>
                </div>
                <div class="<?php echo $class[row] ?>">
                    <div class="<?php echo $class[label] ?>">My url: </div>
                    <div class="<?php echo $class[data] ?>"><?php echo $user_data[my_url][0] ?></div>
                </div>
                <div class="<?php echo $class[row] ?>">
                    <div class="<?php echo $class[label] ?>">My photo: </div>
                    <div class="<?php echo $class[data] ?>"><?php echo $user_photo_img ?></div>
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
                    
            <div class="pull-left">
                <img src="<?php echo of_get_option( 'gem_icon', 'no entry' ); ?>">
            </div>
            
            <?php get_sidebar('sidebar1'); // sidebar ?>			
                        
        </div> <!-- end #sidebar -->
        
        
            
            <?php endwhile; ?>	
            
            <?php else : ?>
            
            <?php endif; ?>
    
    </div> 
    
</div> <!-- end page wrap -->

<?php get_template_part( 'section', 'links' ); ?>


<?php get_footer(); ?>







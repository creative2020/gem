<?php 

$party_id = get_the_ID();

//setcookie("gem_party", $party_id, time()+3600*24*30, "/", "dev.rockdarling.com", 0, 0);
setcookie("gem_party", $party_id, time()+3600*24*30, "/", "rockdarling.com", 0, 0);

get_header(); ?>

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
    
// Check party start date

// dev or live site?
//$get_start = 20140607; //dev
$get_start = get_field('party_start_date'); //live

$today = getdate();
$party_start = DateTime::createFromFormat('Ymd', $get_start);
date_time_set($party_start, 23, 59);
$party_end = $party_start;
date_add($party_end, date_interval_create_from_date_string('7 days'));

if ( $today < $party_end ) {
    
    $party_active = 'y';
    $party_message = 'this party is rocking';
    
}
if ( $today > $party_end ) {
    
    $party_active = 'n';
    $party_message = 'party ended message';
    
}

//echo 'start: ' . date_format($party_start, 'l M j \@\ g:i a') . '</br>';
//echo 'end: ' . date_format($party_end, 'l M j \@\ g:i a') . '</br>';
            
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
        
        <?php echo the_date('Y/m/d'); ?>
        
       <?php //print_r($_COOKIE); ?>
        
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
        
            <div class="m2"><?php the_content(); ?></div>
        
        <!-- start shopping items -->
        
<?php 
if ($party_active == 'n') {

    echo do_shortcode('[post_info id="2558"]');
    
}
if ($party_active == 'y') {
    
    echo do_shortcode('[recent_products per_page="12" columns="4"]');
    
}

?>
        
        <!-- end shopping items -->
            
        </div>	<!-- end #main -->	
        
        <div id="sidebar" class="col-md-3">
                    
<?php   if ($party_active == 'y') {
    
?> <!-- html -->
        
    <div class="party-message-wrap">
        <span class="party-message"><?php echo 'Hurry, this party ends: </br><strong>' . date_format($party_end, 'l M j \@\ g:i a') ?></strong></span>
    </div>

<?php } ?> <!-- html -->
        
            
            <?php dynamic_sidebar('products-main'); // Shop sidebar ?>	
                        
        </div> <!-- end #sidebar -->
        
        
        
        
            
            <?php endwhile; ?>	
            
            <?php else : ?>
            
            <?php endif; ?>
    
    </div> 
    
</div> <!-- end page wrap -->

<?php 

    $current_user = wp_get_current_user();
    $party_author = get_the_author_meta('ID');

if ( $current_user->ID == $party_author ) {

    get_template_part( 'section', 'party-market' ); 

}

?>

<?php get_template_part( 'section', 'links' ); ?>


<?php get_footer(); ?>
<?php get_header(); ?>

<div id="party-header-wrap" class="row">
    <div class="hidden-xs hidden-sm col-md-12">
        
        <?php
            
    //$author_store = get_the_author_meta( 'user_nicename' );
 
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));

$auth_meta = get_the_author_meta( $author );

$store_link = '"/shop/?mygem=' . $curauth->display_name . '"';

//http_redirect( $store_link , array("name" => "value"), true, HTTP_REDIRECT_PERM);

wp_redirect( $store_link );
exit;

//$gem_profile_img = get_avatar( $curauth->ID );
$gem_profile_img = get_field( 'photo' );

        ?>
        
        <div class="party-img" style="background: url('<?php echo $bg_img['url']; ?>') top right no-repeat;height:100px;">

            <div class="col-md-offset-1">
                
                <div class="pull-left"><?php echo $gem_profile_img; ?></div>
                
                <h1 class="party-title pull-left">Shop <?php echo $curauth->display_name; ?></h1>
            
            </div>
            
        </div>
              
    </div>
</div>

<div id="page-wrap" class="row">
    
    <div class="col-md-12">
    
    <div id="page-left" class="col-md-7 col-md-offset-1">
        
        <?php print_r($auth_meta); ?>
         
        <div class="my-shop-area">
            <a href="/shop/?mygem=<?php echo $curauth->display_name; ?>"><div class="shop-my-store">Shop My Store</div></a>   
        </div>
        
        
        <!-- start shopping items -->
        
        <?php //echo do_shortcode('[recent_products per_page="12" columns="4"]'); ?>
        
        <!-- end shopping items -->
            
        </div>	<!-- end #main -->	
        
        <div id="sidebar" class="col-md-3">
                    
            <?php dynamic_sidebar('products-main'); // Shop sidebar ?>			
                        
        </div> <!-- end #sidebar -->
        
        
    
    </div> 
    
</div> <!-- end page wrap -->

<?php 

    $current_user = wp_get_current_user();
    $party_author = get_the_author_meta('ID');

if ( $current_user->ID == $party_author ) {

    get_template_part( 'section', 'gem-shop' ); 

}

?>

<?php get_template_part( 'section', 'links' ); ?>


<?php get_footer(); ?>
<?php 

setcookie("gem_test", 'test', time()+3600*24*30, "/", "local.gem.2020creative.net", 0, 0);
setcookie("gem_test", 'test', time()+3600*24*30, "/", "rockdarling.com", 0, 0);

$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));



//setcookie("wp_affiliates", $curauth, time()+3600*24*30, "/", "rockdarling.com", 0, 0);

//$auth_meta = get_the_author_meta( $author );

//$store_link = '/?mygem=' . $curauth->display_name . '';

//if (!empty($_COOKIE['wp_affiliates'])) {

//header("Location:  http://local.gem.2020creative.net/harperville/?mygem=harperville");
    
//}

//echo('<meta http-equiv="refresh" content="20">');

get_header(); 

$my_rep_id =  ($_COOKIE['wp_affiliates']!='' ? $_COOKIE['wp_affiliates'] : $curauth);
$my_rep_user_id = affiliates_get_affiliate_user($my_rep_id);

?>



<div id="party-header-wrap" class="row">
    <div class="hidden-xs hidden-sm col-md-12">
        
        <?php
            
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));

$auth_meta = get_the_author_meta( $author );

$store_link = '"/shop/?mygem=' . $curauth->display_name . '"';

//http_redirect( $store_link , array("name" => "value"), true, HTTP_REDIRECT_PERM);



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
        
        rid = <?php echo $my_rep_user_id; ?>
        
        <?php //print_r($store_link); ?>
        
        <h2>Welcome to my Gem Store, please use the link below to shop my personalized store.</h2>
        
        <a class="btn btn-primary btn-lg" href=<?php echo $store_link; ?>>Shop Now</a>
        
        <h2>Thank you!</h2>
        
        <?php 
                if ( !empty( $_COOKIE['wp_affiliates'] ) ) {
                    
                    $my_rep_id =  ($_COOKIE['wp_affiliates']!='' ? $_COOKIE['wp_affiliates'] : 'Guest');
                    $my_rep_user_id = affiliates_get_affiliate_user($my_rep_id);
                    $rep = get_userdata( $my_rep_user_id );
                    $rep_profile = get_user_meta($my_rep_user_id);
                    $rep_photo = wp_get_attachment_image_src( $rep_profile[photo][0], thumbnail );

                    echo $rep->user_nicename . '\'s Shop'; 
            
                } else {
                    
                    
    
                    
                };

                if ($_COOKIE['gem_test'] == 'test') {
                    
                    echo '';
                    
                    
                } else {
                    
                    echo '';
                    
                }
            
            ?>
        
       <?php //echo do_shortcode('[recent_products per_page="12" columns="4"]'); ?>
        
        <?php //print_r($auth_meta); ?>
         
        
        
        <!-- start shopping items -->
        
        
        
        <!-- end shopping items -->
            
        </div>	<!-- end #main -->	
        
        <div id="sidebar" class="col-md-3">
                    
            <?php dynamic_sidebar('products-main'); // shop sidebar main ?>			
                        
        </div> <!-- end #sidebar -->
        
        
    
    </div> 
    
</div> <!-- end page wrap -->



<?php get_template_part( 'section', 'links' ); ?>


<?php get_footer(); ?>
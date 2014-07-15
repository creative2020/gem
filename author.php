<?php

session_start();

$_SESSION['gemses'] = 'rd';

?>


<?php get_header(); ?>

<div id="party-header-wrap" class="row">
    <div class="hidden-xs hidden-sm col-md-12">
        
        <?php
            
function suGetClientCookiesEnabled() // Test if browser has cookies enabled
    {
      // Avoid overhead, if already tested, return it
      if( defined( 'SU_CLIENT_COOKIES_ENABLED' ))
       { return SU_CLIENT_COOKIES_ENABLED; }

      $bIni = ini_get( 'session.use_cookies' ); 
      ini_set( 'session.use_cookies', 1 ); 

      $a = session_id();
      $bWasStarted = ( is_string( $a ) && strlen( $a ));
      if( !$bWasStarted )
      {
        @session_start();
        $a = session_id();
      }

   // Make a copy of current session data
  $aSesDat = (isset( $_SESSION ))?$_SESSION:array();
   // Now we destroy the session and we lost the data but not the session id 
   // when cookies are enabled. We restore the data later. 
  @session_destroy(); 
   // Restart it
  @session_start();

   // Restore copy
  $_SESSION = $aSesDat;

   // If no cookies are enabled, the session differs from first session start
  $b = session_id();
  if( !$bWasStarted )
   { // If not was started, write data to the session container to avoid data loss
     @session_write_close(); 
   }

   // When no cookies are enabled, $a and $b are not the same
  $b = ($a === $b);
  define( 'SU_CLIENT_COOKIES_ENABLED', $b );

  if( !$bIni )
   { @ini_set( 'session.use_cookies', 0 ); }

  //echo $b?'1':'0';
  return $b;
    }


$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));

$auth_meta = get_the_author_meta( $author );

//$store_link = '"/shop/?mygem=' . $curauth->display_name . '"';

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
        
        <?php //echo $_SESSION['gem_ses']; ?>
        
<?php        if( suGetClientCookiesEnabled()) { 
            
            
            
    echo 'Your browsers cookies are enabled for the full shopping experience, let\'s go...';
         
         $_SESSION['gemses'] = $curauth->display_name;
            
       $store_link = '"/shop/?mygem=' . $curauth->display_name . '"';        
    wp_redirect( $store_link );
    exit; 
            
} else { 
    echo    '<h2>Your browsers cookies are NOT enabled!</h2>',
            '<p>This shop requires cookies for the shopping cart experience. Please turn on your cookies and refresh this page to get Rockin\'.</p>',
            '<p>If you have questions about how to enable your browsers cookies, we suggest the following link:</p>',
            '<h4><a href="https://support.google.com/accounts/answer/61416?hl=en"target="_blank">Google Chrome</a></h4>',
            '<h4><a href="http://support.apple.com/kb/PH17191" target="_blank">Safari</a></h4>',
            '<h4><a href="http://windows.microsoft.com/en-us/windows-vista/block-or-allow-cookies" target="_blank">Internet Explorer</a></h4></br>';
            
            
                     $_SESSION['gemses'] = $curauth->display_name;
            $gemses = $curauth->display_name;
            
       $store_link = '"/shop/?gemses=' . $gemses .'&mygem=' . $curauth->display_name . '"';        
    //wp_redirect( $store_link );
    //exit; 
            
            echo '<h2>Once your cookies are enabled, please proceed to shop</h2>',
                '<a href='. $store_link .'>Shop Now</a>';
            
            
  
            
            
} ?>
        
        <?php //print_r($auth_meta); ?>
         
        
        
        <!-- start shopping items -->
        
        
        
        <!-- end shopping items -->
            
        </div>	<!-- end #main -->	
        
        <div id="sidebar" class="col-md-3">
                    
            			
                        
        </div> <!-- end #sidebar -->
        
        
    
    </div> 
    
</div> <!-- end page wrap -->



<?php get_template_part( 'section', 'links' ); ?>


<?php get_footer(); ?>
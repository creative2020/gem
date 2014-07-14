<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
    <!-- media-queries.js (fallback) -->
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
    <![endif]-->

    <!-- html5.js -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- wordpress head functions -->
    <?php wp_head(); ?>
    <!-- end of wordpress head -->
    <link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Marck+Script' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/tt-lib/tt-user-meta.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52785317-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
	
<body <?php body_class(); ?>> <!-- open -- closes in footer -->
				
<header role="banner">
				
				<div class="container-fluid"> <!-- open -- closes in footer -->
                    <div class="row">
                        <div class="header-container">
                            
                            <div class="header col-md-12"></div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Fixed navbar -->
    <nav class="navbar navbar-default visible-xs" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Rock Darling</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
                    </div>
                    <div class="row">
					<div class="collapse navbar-collapse navbar-responsive-collapse nav-container container">
						<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
                        <?php

				$defaults = array(
					'theme_location'  => 'social_media',
					'menu'            => '',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'social-menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => '',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s pull-right">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				
				wp_nav_menu( $defaults );
				
				?>
						
                        </div>
					</div>
		
</header> <!-- end header -->


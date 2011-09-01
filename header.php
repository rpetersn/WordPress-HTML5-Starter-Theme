<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=1010" />
		
		<title><?php wp_title(''); ?></title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- default stylesheet -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/default.css">
        
		<!-- superfish -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/superfish.css">
		
		<!-- icons & favicons -->
		<!-- For iPhone 4 -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/h/apple-touch-icon.png">
		<!-- For iPad 1-->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/m/apple-touch-icon.png">
		<!-- For iPhone 3G, iPod Touch and Android -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon-precomposed.png">
		<!-- For Nokia -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon.png">
		<!-- For everything else -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		
		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script>window.jQuery || document.write(unescape('%3Cscript src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery-1.6.1.min.js"%3E%3C/script%3E'))</script>
		
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr-2.0.min.js"></script>
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		
		<!-- stylesheet is called after wp_head so you can overwrite plugin styles if needed -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		
	</head>
	
	<body <?php body_class(); ?>>
    
	<section>
	
		<div id="container">
			
			<header role="banner">
			
				<div id="header">
					<h1 id="logo"><a href="/">Site Name Here</a></h1>
					<p id="home"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
                    
                    
                    <nav role="navigation">

	            		<div id="nav">
                        
                                                    <?php wp_nav_menu( array(  
                                                     'menu' => 'Global Navigation',
                                                     'container'       => '', 
                                                     'menu_class' => 'sf-menu', 
                                                     'theme_location' => 'global' 
                                                     ) ); ?>
                        
                		</div><!-- end nav div -->
                
            		</nav> <!-- end nav -->
                    

			</div> <!-- end #header -->
			
			</header> <!-- end header -->
            
            <div id="content" class="clearfix">
            

            <div id="main" class="clearfix">
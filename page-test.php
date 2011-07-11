<?php
/*
Template Name: Test Template
*/
?>

<!doctype html>  

	<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=1010" />
		
		<title><?php wp_title(); ?></title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- default stylesheet -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/default.css">
        
		<!-- supefish -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/superfish.css">
		<link href='http://fonts.googleapis.com/css?family=Francois+One&v1' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Francois+One&v1' rel='stylesheet' type='text/css'>        
		
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
			
				<div id="inner-header">
				
					<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
					
					<nav role="navigation">
						
                        
                                                    <?php wp_nav_menu( array(  
                                                     'menu' => 'Global Navigation',
                                                     'container'       => '', 
                                                     'menu_class' => 'sf-menu sf-vertical', 
                                                     'theme_location' => 'global' 
                                                     ) ); ?>
                        
					</nav>
				
				</div> <!-- end #inner-header -->
			
			</header> <!-- end header -->

	</body>

<?php get_footer(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
	
		<!-- site-header -->
		<header>
			<div class="site-header">
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				<div class="search"><?php get_search_form(); ?></div>
			</div>
			<div class="topnav">
				<ul>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Tutorials</a></li>
					<li><a href="#">Projects</a></li>
					<li><a href="#">Discussions</a></li>
					<li><a href="#">HackerEarth</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>

			<img class="mySlides" src="http://localhost/wordpress/wp-content/uploads/2017/08/cropped-best-programming-language-sg1.jpg">
			<img class="mySlides" src="http://localhost/wordpress/wp-content/uploads/2017/06/best-programming-language-sg.jpg">
			<img class="mySlides" src="http://localhost/wordpress/wp-content/uploads/2017/06/83603-636216266356158373-16x9.jpg">
			<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
			<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
			<h5><?php bloginfo('description'); ?></h5>
			
		</header><!-- /site-header -->

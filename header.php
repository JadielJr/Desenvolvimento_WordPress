<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Industrious by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <!-- <link rel="stylesheet" href="assets/css/main.css	" /> -->
        
        <?php
            wp_head();
        ?>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<a class="logo" href="front-page.php">Cefas Cafés </a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>
			
			<?php
				$args = array(
				'theme_location'  => 'primary',
				'menu_class'      => 'menu_class',
				'container_class' => 'links',
				'menu'            => '',
				'container'       => 'nav',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => '',
				'menu_id'         => 'menu'
			);?>
			<?php wp_nav_menu( $args ); ?>
		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li> 
					<li><a href="elements.html">Elements</a></li>
					<li><a href="generic.html">Generic</a></li>
				</ul>
            </nav>

			
            
</html>
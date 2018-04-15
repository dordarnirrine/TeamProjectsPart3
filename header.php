<html>
	
	<head>
		<title><?php wp_title(); ?></title>

		<!--<link rel="stylesheet" type="text/css" href="style.css">-->

		<div id="myHeader">
			<a><?php bloginfo('name'); ?></a>
		</div>

		<div id="mySidenav" class="sidenav">
			<a>Navigation Bar</a>
			<div>
				<?php

				$defaults = array(
					'container' => false,
					'theme_location' => 'primary-menu',
					'menu_class' => 'no-bullet'

				);

				wp_nav_menu( $defaults );

				?>
			</div>
		</div>

		<?php wp_head(); ?>

	</head>
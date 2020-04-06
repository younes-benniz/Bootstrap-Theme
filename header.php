<!DOCTYPE html>
<html lang="en">
	  <head>
	  		<meta charset="utf-8">
	  		<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">

	    <title>
	        <?php wp_title(); ?><?php bloginfo( 'name' ); ?>
	    </title>

			<?php wp_head(); ?>
	  	</head>
<body <?php body_class(); ?>>
	


<header>
				
		<nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #e3f2fd; ">
			<a class="navbar-brand" href="#" ><?php if ( function_exists( 'the_custom_logo' ) ) {the_custom_logo();}?>	</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primaryNav" aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="primaryNav">
				<?php
				wp_nav_menu( array(
				'menu'          	=> 'Navigation menu',
				'theme_location'	=> 'Main menu',
				'depth'         	=> 2,
				'container'			=> false,
				'menu_class'    	=> 'navbar-nav mr-auto',
				'fallback_cb'   	=> 'bs4navwalker::fallback',
				'walker'         	=> new bs4navwalker())

				);
				?>
				<?php get_search_form();?>

			</div>
		</nav>

</header>


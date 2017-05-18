<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php wp_head(); ?>
</head>
<body>
	<h1><a href="<?php echo site_url(); ?>"><?php  ?><?php bloginfo('name') ?></a></h1>
	<?php wp_nav_menu(array(
		'theme_location' => 'header_menu',
	)); ?>
	<?php get_search_form(); ?>
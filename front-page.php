<?php get_header(); ?>
	<hr>
	<h1>This is our welcome page</h1>
	<?php
		wp_nav_menu(array(
			'theme_location' => 'front_page_menu',
		));
	?>
	<?php
		if ( !dynamic_sidebar('widget_two') ) {
			echo dynamic_sidebar('widget_one');
		}
	?>
	<hr>
<?php get_footer(); ?>
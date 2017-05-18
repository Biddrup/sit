<?php get_header(); ?>
	<hr>
	<h1>This is our welcome page</h1>
	<?php
		wp_nav_menu(array(
			'theme_location' => 'front_page_menu',
		));
	?>
	<hr>
<?php get_footer(); ?>
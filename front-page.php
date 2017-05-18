<?php get_header(); ?>
	<hr>
	<h1>This is our welcome page</h1>
	<?php
		wp_nav_menu(array(
			'theme_location' => 'front_page_menu',
		));
	?>
	<section class="search-form">
		<?php get_search_form(); ?>
	</section>
	<hr>
<?php get_footer(); ?>
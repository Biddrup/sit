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

	<section class="custom-post">
		<div class="all-post">
			<?php
				$sit_post = new WP_Query('post_type=sit_product');
				if ( have_posts()) {
					while ( have_posts()) {
						the_post(); ?>
						<div class="single-post">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php the_content(); ?>
						</div>
				<?php	}
				}else{
					echo "Dont have post";
				}
			?>
		</div>
	</section>
	<hr>
<?php get_footer(); ?>
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
				$sit_post = new WP_Query(array(
					'post_type'=>'sit_product',
					'posts_per_page'=>3,
				));
				if ( $sit_post->have_posts()) {
					while ( $sit_post->have_posts()) {
						$sit_post->the_post();
						$email = get_post_meta( get_the_ID(), 'Email', true);
						?>
						<div class="single-post">
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							<h3><?php echo $email; ?></h3>
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
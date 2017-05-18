<?php get_header(); ?>
	<h2>Here is your search result</h2>

	<?php
		if ( have_posts()) {
			while ( have_posts()) {
				the_post(); ?>
				<h2><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>
		<?php	}
		}else {
			echo "No search results";
		}

	?>
<?php get_footer(); ?>
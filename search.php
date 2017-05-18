<?php get_header(); ?>
	<h2><?php printf('Your Search result for: %s', get_search_query() ); ?></h2>
	<section class="search-result">
		<?php
			if ( have_posts()) {
				while ( have_posts()) {
					the_post(); ?>
					<div class="search-content">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_post_thumbnail('search-image-size'); ?>
						<?php the_excerpt(); ?>
					</div>
			<?php	}
			}else {
				echo "Doesn't match anything %s";
			}
		?>
	</section>
<?php get_footer(); ?>
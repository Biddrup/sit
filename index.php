<?php get_header(); ?>
	<article class="article-area">
		<div class="single-article">
			<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); ?>
						<h2><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h2>
						<?php the_post_thumbnail('excerpt-image-size'); ?>
						<?php the_excerpt(); ?>
				<?php	}
				}else{
					echo "Please, do some post";
				}
			?>
		</div><!-- /.single-article -->
	</article><!-- /.article-area -->
<?php get_footer(); ?>
<?php get_header(); ?>
	<article class="post-area">
		<?php
			if ( have_posts()) {
				while ( have_posts()) {
					the_post(); ?>
					<div class="single-page">
						<h2><?php the_title(); ?></h2>
						<?php the_post_thumbnail('content-iamge-size'); ?>
						<?php the_content(); ?>
					</div>
			<?php	}
			}else{
				echo " Dont'n have any post";
			}
		?>
	</article><!-- /.post-area -->
<?php get_footer(); ?>
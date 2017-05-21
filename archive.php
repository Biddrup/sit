<?php get_header(); ?>
	<?php
		if ( have_posts() ) {
			if ( is_day() ) {
				echo "Day archive";
			}elseif ( is_month() ) {
				echo "Monthly archive";
			}elseif ( is_year() ) {
				echo "Yearly archive";
			}
			while ( have_posts() ) {
				the_post();
				?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php	}
		}else{
			echo "Dont have post";
		}
	?>
<?php get_footer(); ?>
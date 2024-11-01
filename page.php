<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php echo get_the_content(); ?>
<?php endwhile; ?>

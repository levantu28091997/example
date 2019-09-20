<?php get_header(); ?>

<?php 

	while( have_posts() ) : the_post();
?>
		<div class="abcd"><?php the_content(); ?></div>
		<h2><?php the_title(); ?></h2>
<?php endwhile; ?>

<?php get_footer(); ?>

<?php get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>
	<div class="main-content detail-bg">
		<div class="container">
			<div class="page-detail">
				<h2 class="title"><?php the_title(); ?></h2>
				<div class="thumbnail"><?php the_post_thumbnail(); ?></div>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>

<?php get_footer(); ?>

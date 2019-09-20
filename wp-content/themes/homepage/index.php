<?php get_header(); ?>

<!-- Main content -->
    <div class="main-content">
        <!-- Slide -->
        <?php get_template_part('parts/home/content','slide'); ?>

        <!-- test loop -->
        <?php if( have_posts() ) : while( have_posts() ) : the_post(/*k.tra bài viết đã lặp để chuyển qua bài viết khác */); ?>
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
			<p><?php the_ID(); ?></p>

			<h5><?php echo $post->post_modified ?></h5>
			<a href="<?php echo get_post_permalink(); ?>"> <h5><?php echo get_the_title(); ?></h5> </a>
        <?php endwhile; endif; ?>

        <div class="nav-link"><?php posts_nav_link(); ?></div>
		

		<h1>Query custom</h1>
		
		<?php
		$ar = array(
			'post_type' => 'post',
			'order'=> 'ASC',
			'orderby' => 'ID',

		);

		$args = new WP_Query($ar);

		while ( $args->have_posts()) : $args->the_post()
		?>
			<h5><?php the_title(); ?></h5>
		<?php endwhile; ?>

        <?php
        echo "<pre>";
        print_r($wp_query ->posts);
        echo "</pre>";

        ?>


        <!-- Who we are -->
        <?php get_template_part('parts/home/content','info'); ?>

        <!-- Latest works -->
		<?php get_template_part('parts/home/content', 'lastwork'); ?>

        <!-- Get in touch -->
        <?php get_template_part('parts/home/content', 'touch'); ?>
    </div>

<?php get_footer(); ?>
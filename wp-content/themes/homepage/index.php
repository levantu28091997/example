<?php get_header(); ?>

<!-- Main content -->
    <div class="main-content">
        <!-- Slide -->
        <?php get_template_part('parts/home/content','slide'); ?>

        <!-- Who we are -->
        <?php get_template_part('parts/home/content','info'); ?>

        <!-- Latest works -->
		<?php get_template_part('parts/home/content', 'lastwork'); ?>

        <!-- Get in touch -->
        <?php get_template_part('parts/home/content', 'touch'); ?>
    </div>

<?php get_footer(); ?>
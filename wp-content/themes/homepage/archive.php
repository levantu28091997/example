<?php get_header(); ?>

	<div class="main-content">
		<div class="archive-title">
			<?php
                        if ( is_tag() ) :
                                printf( __('Posts Tagged: %1$s','tuti'), single_tag_title( '', false ) );
                        elseif ( is_category() ) :
                                printf( __('Posts Categorized: %1$s','tuti'), single_cat_title( '', false ) );
                        elseif ( is_day() ) :
                                printf( __('Daily Archives: %1$s','tuti'), get_the_time('l, F j, Y') );
                        elseif ( is_month() ) :
                                printf( __('Monthly Archives: %1$s','tuti'), get_the_time('F Y') );
                        elseif ( is_year() ) :
                                printf( __('Yearly Archives: %1$s','tuti'), get_the_time('Y') );
                        endif;
                ?>
		</div>
		<?php if ( is_tag() || is_category() ) : ?>
	        <div class="archive-description">
	                <?php echo term_description(); ?>
	        </div>
		<?php endif; ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <h2><?php the_title(); ?></h2>
        <?php endwhile; ?>
	</div>

<?php get_footer(); ?>
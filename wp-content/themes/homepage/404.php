<?php get_header(); ?>
	<div class="main-content">
		<?php
            _e('<h2>404 NOT FOUND</h2>', 'tuti');
            _e('<p>The article you were looking for was not found, but maybe try looking again!</p>', 'tuti');

            get_search_form();

            _e('<h3>Content categories</h3>', 'tuti');
            echo '<div class="404-catlist">';
            wp_list_categories( array( 'title_li' => '' ) );
            echo '</div>';

            _e('<h3>Tag Cloud</h3>', 'tuti');
            wp_tag_cloud();
	    ?>
	</div>
<?php get_footer(); ?>
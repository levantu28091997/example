<?php get_header(); ?>
	<div class="main-content">
		<div class="search-info">
		        <!--Sử dụng query để hiển thị số kết quả tìm kiếm được tìm thấy
		                Cũng như hiển thị từ khóa tìm kiếm. Từ khóa tìm kiếm cũng
		                có thể hiển thị được với hàm get_search_query()-->
		        <?php
		                $search_query = new WP_Query( 's='.$s.'&showposts=-1' );
		                $search_keyword = wp_specialchars( $s, 1);
		                $search_count = $search_query->post_count;
		                // var_dump( $search_query );
		                printf( __('Search results for <strong>%1$s</strong>. We found <strong>%2$s</strong> articles for you.', 'thachpham'), $search_keyword, $search_count );
		        ?>
		</div>
		<h2>Kết Quả Tìm</h2>
        <?php if(have_posts()) : while(have_posts()) : the_post() ?>
        <div class="search">
            <h1><?php the_title();?></h1>
                <?php the_post_thumbnail() ?>
                <?php the_content() ?>
            </p>
        </div>
            <?php endwhile; else: ?>
            <p>Tìm không ra! :(</p>
            <?php endif; ?>
       
	</div>
<?php get_footer(); ?>
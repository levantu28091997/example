<?php get_header(); ?>

    <div class="main-content">
        <div class="detail-bg page-container">
            <div class="container">
                <div class="list-post">
                    <div class="row">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="col-md-4">
                                <div class="post-item">
                                    <div class="post-thumb">
                                        <img src="<?php echo get_template_directory_uri().'/core/assets/'?>images/figure/img-figure1.png" alt="Img">
                                        <h3 class="post-title"><?php the_title(); ?></h3>
                                    </div>
                                    <div class="post-content">
                                        <p class="post-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a href="" class="link-more">Read more</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php else : ?>
                            <h3>Không có bài viết nào ..!</h3>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<?php get_footer(); ?>
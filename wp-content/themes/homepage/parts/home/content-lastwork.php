<section data-wow-delay="2s" class="latest-works wow slideInRight">
    <div class="latest-works-wrapper">
        <div class="latest-works-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="latest-works__title"><?php echo get_theme_mod('works_title') ?></h2>
                        <p class="latest-works__des"><?php echo get_theme_mod('works_des') ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="latest-works-figure">
            <div class="container">
                <div class="row">
                <?php 
                    $ar = array(
                        'post_type' => 'post',
                        'posts_per_page' =>2,
                        'oder' => 'DESC',
                        'orderby' => 'ID',
                    );

                    $agrc = new WP_Query($ar);
                    if( $agrc->have_posts() ) : while( $agrc->have_posts() ) : $agrc->the_post() ?>

                    <div class="col-md-6">
                        <div class="figure-item-box">
                            <a href="<?php the_permalink(); ?>">
                                <div class="figure-item">
                                    <div class="figure__box">
                                        <?php the_post_thumbnail(); ?>
                                        <div class="figure__overlay">
                                            <span class="figure__i-plus">
                                                <img src="<?php echo get_template_directory_uri().'/core/assets/'?>images/icon/icon-plus.png" alt="View more">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="figcaption">
                                    <h3 class="figcaption__title"><?php the_title(); ?></h3>
                                    <p class="figcaption__des">Identity</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>

                </div>
            </div>
        </div>
        <div class="latest-works-carousel">
            <div class="container">
                <div class="test">
                    <div class="js-lw-carousel owl-carousel owl-theme">
                        <div class="latest-works-carousel-item">
                            <div class="row">

                                <?php
                                $ar2 = array(
                                    'post-per-page' => '4',
                                    'post-type' => 'post',
                                    'oder' => 'ASC',
                                    'orderby' => 'ID'
                                );
                                $argc2 = new WP_Query($ar2);
                                if ( $argc2->have_posts() ) : while( $argc2->have_posts() ) : $argc2->the_post() 
                                ?>
                                <div class="col-md-3 lwc-box-item">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="lwc-item">
                                            <?php the_post_thumbnail(); ?>
                                            <div class="carousel-overlay">
                                                <div class="carousel-overlay-content">
                                                    <h2 class="carousel-overlay__title">Astor & Yancy</h2>
                                                    <p class="carousel-overlay__des">Identity</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php endwhile; endif; ?>

                            </div>
                        </div>
                        <div class="latest-works-carousel-item">
                            <div class="row">

                                <?php
                                $ar3 = array(
                                    'post-per-page' => '4',
                                    'post-type' => 'post',
                                    'oder' => 'ASC',
                                    'orderby' => 'ID'
                                );
                                $argc3 = new WP_Query($ar3);
                                if ( $argc3->have_posts() ) : while( $argc3->have_posts() ) : $argc3->the_post() 
                                ?>
                                <div class="col-md-3 lwc-box-item">
                                    <a href="">
                                        <div class="lwc-item">
                                            <?php the_post_thumbnail(); ?>
                                            <div class="carousel-overlay">
                                                <div class="carousel-overlay-content">
                                                    <h2 class="carousel-overlay__title">Astor & Yancy</h2>
                                                    <p class="carousel-overlay__des">Identity</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php endwhile; endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
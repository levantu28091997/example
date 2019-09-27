<section data-wow-delay="0.5s" class="slide wow rollIn">
    <div class="slide-wrapper">
        <div class="slide-btn">
            <a href="javascript:void(0);" class="js-prev-slide">
                <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-prev.png" alt="Prewiew" id="js-prev-slide">
            </a>
            <a href="javascript:void(0);" class="js-next-slide">
                <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-next.png" alt="Next" id="js-next-slide">
            </a>
        </div>
        <div class="js-slide owl-carousel">

            <?php
                $arc = array(
                    'post_type' => 'slide',
                    'order' => 'DESC',
                    'orderby' => 'ID'
                );

                $args = new WP_QUERY($arc);

                if ( $args->have_posts() ) : while( $args->have_posts() ) : $args->the_post()
            ?>
            <!-- item 1 -->
            <div class="slide-item">
                <?php the_post_thumbnail() ?>
                <div class="slide-content">
                    <div class="container">
                        <div class="slide-content-box">
                            <h2 class="slide-content__title"><?php the_title(); ?></h2>
                            <span class="slide-content__des"><?php the_content(); ?></span>
                            <a href="<?php $link = get_post_meta( $post->ID,'_link_btn' ,true );
                                    if($link){ echo $link; } ?>" class="slide-content__btn">
                                <?php
                                    $label = get_post_meta( $post->ID,'_label_btn' ,true );
                                    if($label){ echo $label; }
                                ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slide-overlay"></div>
            </div>
            <?php endwhile; endif; ?>

        </div>
    </div>
</section>
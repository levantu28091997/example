<section data-wow-delay="0.5s" class="who-we-are wow slideInRight">
    <div class="who-we-are-wrapper">
        <div class="container">
            
            <div class="who-we-are__bottom">
                <div class="row">

                    <?php 
                    $args = array(
                        'post_type'=> 'skill',
                        'areas'    => 'painting',
                        'order'    => 'ASC'
                        );              

                    $the_query = new WP_Query( $args );
                    if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

                    ?>
                            <div class="col-md-4">
                                <div class="wwa-box wwa-box-duo">
                                    <div class="wwa-box-icon">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="wwa-box-content">
                                        <h3 class="wwa-box-content__title"><?php the_title(); ?></h3>
                                        <p class="wwa-box-content__des">
                                            <?php the_content(); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>
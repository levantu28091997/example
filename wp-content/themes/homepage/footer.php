<!-- footer -->
    <footer>
        <div class="footer">
            <div class="footer-info">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-info__intro">
                                <h2 class="footer-info__title">Who we are</h2>
                                <div class="footer-info__intro-logo"><img src="<?php echo get_template_directory_uri().'/core/assets/'?>images/logo-footer.png" alt="Logo"></div>
                                <p class="footer-info__intro-des">
                                    Magnis modipsae voloratati andigen daepeditem quiate re porem que aut labor. Laceaque eictemperum quiae sitiorem rest non restibusaes maio es dem tumquam.
                                </p>
                                <a href="" class="footer-info__intro-link">More about us 
                                    <span class="icon-more"><img src="<?php echo get_template_directory_uri().'/core/assets/'?>images/icon/icon-right.png" alt="More about us"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-info__latest-work">
                                <h2 class="footer-info__title">Latest works</h2>
                                <div class="latest-work__list">

                                    <?php
                                        $args = array(
                                            'post-per-page' => 4,
                                            'post-type' => 'post',
                                            'order' => 'DESC',
                                            'orderby'=>'ID',
                                        );

                                        $work = new WP_Query($args);

                                        if( $work->have_posts() ) : while ( $work->have_posts() ) : $work->the_post()
                                    ?>
                                    <div class="latest-work__item">
                                        <div class="latest-work__box">
                                            <a href="">
                                                <?php the_post_thumbnail(); ?>
                                                <div class="latest-work__overlay">
                                                    <span class="latest-work__i-plus">
                                                        <img src="<?php echo get_template_directory_uri().'/core/assets/'?>images/icon/icon-plus.png" alt="View more">
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                     <?php endwhile; endif; ?>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-info__get-in-touch">
                                <h2 class="footer-info__title">Get in touch</h2>
                                <p class="f-get-in-touch__des">
                                    Doloreiur quia commolu ptatemp dolupta oreprerum tibusam eumenis et consent accullignis dentibea autem inisita.
                                </p>
                                <div class="f-get-in-touch__contact">
                                    <ul class="f__contact-list">
                                        <li class="f__contact-item">
                                            <span class="f__contact-icon"><img src="<?php echo get_template_directory_uri().'/core/assets/'?>images/icon/icon-f-location.png" alt="Location"></span>
                                            <span>84 Street, City, State 24813</span>
                                        </li>
                                        <li class="f__contact-item">
                                            <span class="f__contact-icon"><img src="<?php echo get_template_directory_uri().'/core/assets/'?>images/icon/icon-f-mobie.png" alt="Phone"></span>
                                            <span>+00 (123) 456 78 90</span>
                                        </li>
                                        <li class="f__contact-item">
                                            <span class="f__contact-icon"><img src="<?php echo get_template_directory_uri().'/core/assets/'?>images/icon/icon-f-email.png" alt="Email"></span>
                                            <span>info@reen.com</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-info__free-updates">
                                <h2 class="footer-info__title">Free updates</h2>
                                <p class="f-free-updates__des">Conecus iure posae volor remped modis aut lor volor accabora incim resto explabo.</p>
                                <div class="form-submit__box">
                                    <form action="/submit-email" class="form-submit">
                                        <input type="email" class="form-submit__input" placeholder="Enter your email address">
                                        <button type="submit" class="form-submit__btn">Subcribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-ending">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="footer-copyright">
                                <p>© <?php echo date('Y'); ?> REEN. All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="footer-menu">
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'footer-menu', //ten menu cần hiển thị
                                        'container' => 'div', // thẻ container của menu
                                        'container_class' => 'footer-menu', //class của container
                                        'menu_class' => 'footer-menu__list' // class của menu bên trong
                                    )
                                );

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll up -->
    <div class="scroll-to-top" id="scroll-to-top">
        <img src="<?php echo get_template_directory_uri().'/core/assets/'?>images/icon/icon-scroll-up.png" alt="Scroll to top" id="js-scroll-to-top">
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
<!-- footer -->
    <footer>
        <div class="footer">
            <div class="footer-info">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-info__intro">
                                <h2 class="footer-info__title"><?php echo get_theme_mod('footer_w_title'); ?></h2>
                                <div class="footer-info__intro-logo"><img src="<?php echo get_template_directory_uri().'/core/assets/'?>images/logo-footer.png" alt="Logo"></div>
                                <p class="footer-info__intro-des">
                                    <?php echo get_theme_mod('footer_w_info'); ?>
                                </p>
                                <a href="<?php echo get_theme_mod('footer_w_link'); ?>" class="footer-info__intro-link"><?php echo get_theme_mod('footer_w_label'); ?> 
                                    <span class="icon-more"><img src="<?php echo get_template_directory_uri().'/core/assets/'?>images/icon/icon-right.png" alt="More about us"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-info__latest-work">
                                <h2 class="footer-info__title"><?php echo get_theme_mod('footer_l_title'); ?></h2>
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
                                <h2 class="footer-info__title"><?php echo get_theme_mod('footer_g_title'); ?></h2>
                                <p class="f-get-in-touch__des">
                                    <?php echo get_theme_mod('footer_g_des'); ?>
                                </p>
                                <div class="f-get-in-touch__contact">
                                    <ul class="f__contact-list">
                                        <li class="f__contact-item">
                                            <span class="f__contact-icon"><img src="<?php echo get_template_directory_uri().'/core/assets/'?>images/icon/icon-f-location.png" alt="Location"></span>
                                            <span><?php echo get_theme_mod('footer_g_address'); ?></span>
                                        </li>
                                        <li class="f__contact-item">
                                            <span class="f__contact-icon"><img src="<?php echo get_template_directory_uri().'/core/assets/'?>images/icon/icon-f-mobie.png" alt="Phone"></span>
                                            <span><?php echo get_theme_mod('footer_g_phone'); ?></span>
                                        </li>
                                        <li class="f__contact-item">
                                            <span class="f__contact-icon"><img src="<?php echo get_template_directory_uri().'/core/assets/'?>images/icon/icon-f-email.png" alt="Email"></span>
                                            <span><?php echo get_theme_mod('footer_g_email'); ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-info__free-updates">
                                <h2 class="footer-info__title"><?php echo get_theme_mod('footer_f_title'); ?></h2>
                                <p class="f-free-updates__des"><?php echo get_theme_mod('footer_f_des'); ?></p>
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
                                <p><?php echo get_theme_mod('footer_c_copyright'); ?></p>
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
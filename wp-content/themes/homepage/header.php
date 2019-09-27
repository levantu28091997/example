<!doctype html>
<html lang="<?php echo get_bloginfo('language'); ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php echo get_bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Source+Sans+Pro:400,700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
  </head>
  <body>

    <!-- Header -->
    <header>
        <div class="header">
            <div class="navbar-header none-tablet">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact">
                                <ul class="contact-list">
                                    <li class="contact-item i-email">
                                        <span class="contact-icon"><img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-email.png" alt="Email" id="js-icon-email"></span>
                                        <span><?php echo get_theme_mod('top_left_email'); ?></span>
                                    </li>
                                    <li class="contact-item i-phone">
                                        <span class="contact-icon"><img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-phone.png" alt="Phone" id="js-icon-phone"></span>
                                        <span><?php echo get_theme_mod('top_left_phone'); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social">
                                <ul class="social-list">
                                    <?php if(get_theme_mod('top_right_facebook') != ''){ ?>
                                    <li class="social-item i-facebook"><a href="<?php echo get_theme_mod('top_right_facebook'); ?>" class="social-link"><img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-facebook.png" alt="facebook" id="js-social-fb"></a></li>
                                    <?php } ?>

                                    <?php if(get_theme_mod('top_right_google') != ''){ ?>
                                    <li class="social-item i-gplus"><a href="<?php echo get_theme_mod('top_right_google'); ?>" class="social-link"><img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-gplus.png" alt="google plus" id="js-social-gplus"></a></li>
                                    <?php } ?>

                                    <?php if(get_theme_mod('top_right_twitter') != ''){ ?>
                                    <li class="social-item i-twitter"><a href="<?php echo get_theme_mod('top_right_twitter'); ?>" class="social-link"><img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-twitter.png" alt="twitter" id="js-social-twitter"></a></li>
                                    <?php } ?>

                                    <?php if(get_theme_mod('top_right_pinterest') != ''){ ?>
                                    <li class="social-item i-pinterest"><a href="<?php echo get_theme_mod('top_right_pinterest'); ?>" class="social-link"><img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-pinterest.png" alt="pinterest" id="js-social-pinterest"></a></li>
                                    <?php } ?>

                                    <?php if(get_theme_mod('top_right_behance') != ''){ ?>
                                    <li class="social-item i-behance"><a href="<?php echo get_theme_mod('top_right_behance'); ?>" class="social-link"><img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-behance.png" alt="behance" id="js-social-behance"></a></li>
                                    <?php } ?>

                                    <?php if(get_theme_mod('top_right_dribbble') != ''){ ?>
                                    <li class="social-item i-dribbble"><a href="<?php echo get_theme_mod('top_right_dribbble'); ?>" class="social-link"><img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-dribbble.png" alt="dribbble" id="js-social-dribbble"></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-tablet-md-2 show-tablet i-menu-mobie">
                            <i class="fa fa-bars js-menu-mobie" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-2 col-tablet-md-8">
                            <div class="logo-header">
                                <?php the_custom_logo(); ?>
                                <!-- <img src="images/logo.png" alt="Logo"> -->
                            </div>
                        </div>
                        <div class="col-md-9 col-space">
                            <div class="menu-header">
                                <ul class="menu-list">
                                    <li class="menu-item"><a href="" class="menu-link">Home</a></li>
                                    <li class="menu-item"><a href="" class="menu-link">Portfolio</a></li>
                                    <li class="menu-item"><a href="" class="menu-link">Blog</a></li>
                                    <li class="menu-item"><a href="" class="menu-link">Pages</a></li>
                                    <li class="menu-item"><a href="" class="menu-link">Features</a></li>
                                    <li class="menu-item">
                                        <a href="" class="menu-link">Mega Menu</a>
                                        <span class="i-dropmenu-mobie"></span>
                                        <div class="megamenu js-megamenu js-drop-mobie">
                                            <div class="container js-widthc">
                                                <div class="megamenu-box">
                                                    <div class="row">
                                                        <div class="col-md-3 col-tablet-md-12">
                                                            <div class="megamenu-focuson">
                                                                <h2 class="megamenu__title">Focus on</h2>
                                                                <div class="focuson__box">
                                                                    <a href="">
                                                                        <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/megamenu/img-megamenu.png" alt="Thumb" class="img-width100">
                                                                        <div class="focuson__overlay">
                                                                            <span class="focuson__i-plus">
                                                                                <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-plus.png" alt="View more">
                                                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <p class="focuson__des">
                                                                    Consed quodips ameniat empernam que apid cust quas molor eatis numa estio.
                                                                </p>
                                                                <a href="" class="focuson__btn">View project</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-tablet-md-12">
                                                            <div class="megamenu-specialpages">
                                                                <h2 class="megamenu__title">Special pages</h2>
                                                                <ul class="specialpages__list">
                                                                    <li class="specialpages__item">
                                                                        <a href="" class="specialpages__link">3 Columns Details Grid Portfolio</a>
                                                                    </li>
                                                                    <li class="specialpages__item">
                                                                        <a href="" class="specialpages__link">Fullscreen Grid Portfolio</a>
                                                                    </li>
                                                                    <li class="specialpages__item">
                                                                        <a href="" class="specialpages__link">Portfolio Post with Video</a>
                                                                    </li>
                                                                    <li class="specialpages__item">
                                                                        <a href="" class="specialpages__link">2 Columns Grid Blog with Left Sidebar</a>
                                                                    </li>
                                                                    <li class="specialpages__item">
                                                                        <a href="" class="specialpages__link">3 Columns Grid Blog without Sidebar</a>
                                                                    </li>
                                                                    <li class="specialpages__item">
                                                                        <a href="" class="specialpages__link">Blog Post with Right Sidebar</a>
                                                                    </li>
                                                                    <li class="specialpages__item">
                                                                        <a href="" class="specialpages__link">Side Navigation Page</a>
                                                                    </li>
                                                                    <li class="specialpages__item">
                                                                        <a href="" class="specialpages__link">About Page II</a>
                                                                    </li>
                                                                    <li class="specialpages__item">
                                                                        <a href="" class="specialpages__link">Service Page I</a>
                                                                    </li>
                                                                    <li class="specialpages__item">
                                                                        <a href="" class="specialpages__link">Pricing Page I</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-tablet-md-12">
                                                            <div class="megamenu-latestworks">
                                                                <h2 class="megamenu__title">Latest works</h2>
                                                                <div class="latestwork__list">
                                                                    <div class="latest-work__item">
                                                                        <div class="latest-work__box">
                                                                            <a href="">
                                                                                <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/megamenu/latest-thumb1.png" alt="Thumb">
                                                                                <div class="latest-work__overlay">
                                                                                    <span class="latest-work__i-plus">
                                                                                        <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-plus.png" alt="View more">
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="latest-work__item">
                                                                        <div class="latest-work__box">
                                                                            <a href="">
                                                                                <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/megamenu/latest-thumb2.png" alt="Thumb">
                                                                                <div class="latest-work__overlay">
                                                                                    <span class="latest-work__i-plus">
                                                                                        <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-plus.png" alt="View more">
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="latest-work__item">
                                                                        <div class="latest-work__box">
                                                                            <a href="">
                                                                                <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/megamenu/latest-thumb3.png" alt="Thumb">
                                                                                <div class="latest-work__overlay">
                                                                                    <span class="latest-work__i-plus">
                                                                                        <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-plus.png" alt="View more">
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="latest-work__item">
                                                                        <div class="latest-work__box">
                                                                            <a href="">
                                                                                <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/megamenu/latest-thumb4.png" alt="Thumb">
                                                                                <div class="latest-work__overlay">
                                                                                    <span class="latest-work__i-plus">
                                                                                        <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-plus.png" alt="View more">
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="latest-work__item">
                                                                        <div class="latest-work__box">
                                                                            <a href="">
                                                                                <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/megamenu/latest-thumb5.png" alt="Thumb">
                                                                                <div class="latest-work__overlay">
                                                                                    <span class="latest-work__i-plus">
                                                                                        <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-plus.png" alt="View more">
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="latest-work__item">
                                                                        <div class="latest-work__box">
                                                                            <a href="">
                                                                                <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/megamenu/latest-thumb6.png" alt="Thumb">
                                                                                <div class="latest-work__overlay">
                                                                                    <span class="latest-work__i-plus">
                                                                                        <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/icon/icon-plus.png" alt="View more">
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-tablet-md-12">
                                                            <div class="megamenu-aboutus">
                                                                <h2 class="megamenu__title">About us</h2>
                                                                <p class="megamenu-aboutus__des">
                                                                    Voluptat ibusaped molorporro consequ idustibus. Reressi morum ut dolessiti tem nihicid ernatum, coria volore non pro officat ut autem accaborem conet. Omnis peribus qui dolent praeperrum coria.
                                                                </p>
                                                                <p class="megamenu-aboutus__des">
                                                                    Equam conesti occum dolorest, quae venderes quistius, comnitatur sae dinam nonseculpa cum fugit is verciam.
                                                                </p>
                                                                <a href="" class="megamenu-aboutus__btn">read more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item"><a href="" class="menu-link">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-1 col-tablet-md-2">
                            <div class="search-header">
                                <a href="javascript:void(0)" class="js-search"><img src="<?php echo get_template_directory_uri().'/core/assets/'?>images/icon/icon-search.png" alt="Search"></a>
                            </div>
                            <!-- Form search -->
                            <div class="h-search-box">
                                <div class="h-search-bg"></div>
                                <div class="search-box">
                                    <div class="search-box-content">
                                        <span class="ti-close js-search-close"></span>
                                        <form class="h-search-form" action="index.php" method="GET">
                                            <input type="text" name="s" placeholder="Search ...">
                                            <button type="submit"><i class="ti-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-overlay js-menu-overlay"></div>
            <div class="js-close-menumobie">
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
        </div>
    </header>
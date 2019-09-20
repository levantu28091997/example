<?php
    //get theme options
    $options = get_option( 'my_option_name' );
     
    if ( isset( $options[ 'title' ] ) ) {
        $title = $options[ 'title' ];
    }
     
    if ( isset( $options[ 'hrm_description' ] ) ) {
        $description = $options[ 'hrm_description' ];
    }
?>
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
            <!-- item 1 -->
            <div class="slide-item">
                <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/slide/slide-img1.png" alt="Slide" class="img-width100">
                <div class="slide-content">
                    <div class="container">
                        <div class="slide-content-box">
                            <h2 class="slide-content__title">
                                <?php
                                    if($title != ''){
                                        echo $title;
                                    }
                                ?>
                            </h2>
                            <p class="slide-content__des">
                                Create your online portfolio in minutes with the professionally and lovingly designed REEN website template. Customize your site with versatile and easy to use features.
                            </p>
                            <a href="" class="slide-content__btn">Get started now</a>
                        </div>
                    </div>
                </div>
                <div class="slide-overlay"></div>
            </div>

            <!-- item 2 -->
            <div class="slide-item">
                <img src="<?php echo get_template_directory_uri().'/core/assets/' ?>images/slide/slide-img1.png" alt="Slide" class="img-width100">
                <div class="slide-content">
                    <div class="container">
                        <div class="slide-content-box">
                            <h2 class="slide-content__title">
                                <?php
                                    if($title != ''){
                                        echo $title;
                                    }
                                ?>
                            </h2>
                            <p class="slide-content__des">
                                Create your online portfolio in minutes with the professionally and lovingly designed REEN website template. Customize your site with versatile and easy to use features.
                            </p>
                            <a href="" class="slide-content__btn">Get started now</a>
                        </div>
                    </div>
                </div>
                <div class="slide-overlay"></div>
            </div>
        </div>
    </div>
</section>
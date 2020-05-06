<?php

/* Template Name: Home Page Template */ 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<div class="main-content js-main-content">

    <?php
    while ( have_posts() ) : the_post();
        ?>

        <?php the_content(); ?>

        <?php
    endwhile;
    ?>

    <!-- elementor widget Hero -->
    <!-- <div class="hero hero--underlap">
        <div class="hero__text">
            <h1 class="t-hero">
                <span class="js-anim-in h-nowrap">A <em>different</em> approach to</span><span class="js-anim-in">buying and selling real estate.</span>
            </h1>
        </div>
    </div> -->


    <!-- elementor widget Info_Columns -->
    <!-- <div class="l-container l-container--medium">

        <div class="capsule-a js-anim-in">
            <a href="/selling" class="capsule-a__img-container"><span class="capsule-a__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bre-final-sellers.jpg');"></span></a>
            <h4 class="capsule-a__title t-title-b">Info for Sellers</h4>
            <div class="capsule-a__link">
                <a href="/selling" class="t-body link">Sell With Us</a>
            </div>
        </div>

        <div class="capsule-a js-anim-in">
            <a href="/buying" class="capsule-a__img-container"><span class="capsule-a__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bre-final-buyers.jpg');"></span></a>
            <h4 class="capsule-a__title t-title-b">Info for Buyers</h4>
            <div class="capsule-a__link">
                <a href="/buying" class="t-body link">Learn about Our Process</a>
            </div>
        </div>
    </div> -->


    <!-- elementor widget About_Us -->
    <!-- <div class="l-section l-section--w-spacing l-section--salmon">
        <div class="l-container l-container--medium">
            <div class="callout-a">
                <div class="callout-a__image js-anim-in">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bre-final-home--about.jpg" alt="">
                </div>
                <div class="callout-a__message">
                    <h3 class="t-hero">
                        <span class="js-anim-in h-nowrap">We’ve helped buy and</span>
                        <span class="js-anim-in h-nowrap">sell over $100 million </span>
                        <span class="js-anim-in h-nowrap">of real estate.</span>
                    </h3>
                    <div class="callout-a__button js-anim-in">
                        <a href="/about" class="btn btn--black-on-salmon">Learn More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

   <!--  <div class="l-container">

        <div class="t-hero-a heading-a">
            Featured Properties
        </div>





        <div class="photo-w-card photo-w-card--align-right js-anim-in">
            <div class="photo-w-card__card">

                <a href="http://berdanrealestate.com/properties/1435-n-fairfield-ave" class="card">
                    <div class="card__flex-inner">
                        <h6 class="card__eyebrow t-eyebrow">
                            FEATURED
                        </h6>
                        <h5 class="card__title t-title">
                            <span class="link">1435 N Fairfield Ave</span>
                        </h5>
                        <ul class="card__subtitle t-body">
                            <li>Active</li>
                            <li>$995,000</li>
                            <li>4 BR / 3.5 BA</li>
                        </ul>
                        <p class="card__body t-body">
                            Stunning 4BD/3.5BA SFH in East Humboldt Park!
                        </p>
                        <p class="card__link">
                            <span class="link t-body">View Property</span>
                        </p>
                    </div>
                </a>
            </div>
            <div class="photo-w-card__img">
                <div class="js-slider slider">
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1435-N-Fairfield-INTERNET-1_190828_183333.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1435-N-Fairfield-INTERNET-3.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1435-N-Fairfield-INTERNET-4-1.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1435-N-Fairfield-INTERNET-5-1.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1435-N-Fairfield-INTERNET-6.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1435-N-Fairfield-INTERNET-7.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1435-N-Fairfield-INTERNET-8.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1435-N-Fairfield-INTERNET-14.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1435-N-Fairfield-INTERNET-16.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1435-N-Fairfield-INTERNET-15.jpg');"></div>
                </div>
                <div class="photo-w-card__img-pagination js-slider-pagination">
                    <nav class="slider-paginate">
                        <div class="slider-paginate__left js-prev-slide">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10.75 18.68"><title>arrow-left</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon points="9.34 18.68 0 9.34 9.34 0 10.75 1.41 2.83 9.34 10.75 17.26 9.34 18.68" style="fill:#e7c952"/></g></g></svg>                                    </div>
                        <span class="js-current-slide">1</span>
                        <span class="slider-paginate__divider">/</span>
                        <span class="js-total-slides">10</span>
                        <div class="slider-paginate__right js-next-slide">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10.75 18.68"><title>arrow-right</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon points="1.41 0 10.75 9.34 1.41 18.68 0 17.26 7.92 9.34 0 1.41 1.41 0" style="fill:#e7c952"/></g></g></svg>                                    </div>
                    </nav>
                </div>
            </div>
        </div>





        <div class="photo-w-card photo-w-card--overlap-top js-anim-in">
            <div class="photo-w-card__card">

                <a href="http://berdanrealestate.com/properties/1850-n-california-ave-unit-2" class="card">
                    <div class="card__flex-inner">
                        <h6 class="card__eyebrow t-eyebrow">
                            FEATURED
                        </h6>
                        <h5 class="card__title t-title">
                            <span class="link">1850 N California Ave Unit 2</span>
                        </h5>
                        <ul class="card__subtitle t-body">
                            <li>Active</li>
                            <li>$449,900</li>
                            <li>2 BR / 2 BA</li>
                        </ul>
                        <p class="card__body t-body">
                            Incredible opportunity to own a beautiful light-filled 2BD/2BA condo in Logan Square!
                        </p>
                        <p class="card__link">
                            <span class="link t-body">View Property</span>
                        </p>
                    </div>
                </a>
            </div>
            <div class="photo-w-card__img">
                <div class="js-slider slider">
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1850-N-California-INTERNET-10.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1850-N-California-INTERNET-2.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1850-N-California-INTERNET-3.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1850-N-California-INTERNET-4.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1850-N-California-INTERNET-5.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1850-N-California-INTERNET-6.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1850-N-California-INTERNET-7.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1850-N-California-INTERNET-8.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1850-N-California-INTERNET-11.jpg');"></div>
                    <div class="slider__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/media/_full/1850-N-California-INTERNET-12.jpg');"></div>
                </div>
                <div class="photo-w-card__img-pagination js-slider-pagination">
                    <nav class="slider-paginate">
                        <div class="slider-paginate__left js-prev-slide">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10.75 18.68"><title>arrow-left</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon points="9.34 18.68 0 9.34 9.34 0 10.75 1.41 2.83 9.34 10.75 17.26 9.34 18.68" style="fill:#e7c952"/></g></g></svg>                                    </div>
                        <span class="js-current-slide">1</span>
                        <span class="slider-paginate__divider">/</span>
                        <span class="js-total-slides">10</span>
                        <div class="slider-paginate__right js-next-slide">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10.75 18.68"><title>arrow-right</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon points="1.41 0 10.75 9.34 1.41 18.68 0 17.26 7.92 9.34 0 1.41 1.41 0" style="fill:#e7c952"/></g></g></svg>                                    </div>
                    </nav>
                </div>
            </div>
        </div>

    </div> -->

    <!-- elementor widget Prefooter_CTA -->
    <!-- <div class="l-container">
        <div class="banner-a js-anim-in">
            <div class="banner-a__eyebrow">
                <h6 class="t-eyebrow">let&#039;s chat</h6>
            </div>
            <div class="banner-a__title">
                <h3>Ready to meet?</h3>
            </div>
            <div class="banner-a__link t-body">
                <a href="https://jackberdan.typeform.com/to/P6joD0" class="link" target="_blank">
                  Let us buy you a coffee.
                  </a>
            </div>
        </div>
    </div> -->


    <?php 
    get_footer();
    ?>


</div>

<?php
get_sidebar();
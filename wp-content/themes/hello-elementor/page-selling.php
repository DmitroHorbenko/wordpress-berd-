<?php 

/* Template Name: Selling Page Template */ 

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

    <div class="hero hero--salmon">
        <div class="hero__text">
            <h1 class="t-hero">
                <span class="js-anim-in">Selling your house can be</span><span class="js-anim-in"><em>a lot</em> easier than you think.</span>
            </h1>


        </div>

        <a class="hero__arrow" href="#next"></a>

    </div>
    <div class="l-container l-container--w-spacing">
        <div class="l-one-col" id="next">

            <div class="l-one-col__col">
                <div class="js-anim-in">
                    <h5 class="t-hero u-align-center">
                        Data-driven valuation and<br>top-notch marketing.
                    </h5>
                </div>
            </div>

            <div class="l-one-col__col">
                <p class="t-body js-anim-in u-align-center u-spacing-v-large">
                    Selling a home is more art than science. Have you ever noticed how two nearly identical properties in the same building can sell for drastically different prices? The reason is that <strong>the strategy makes all the difference.</strong>
                </p>
            </div>

        </div>
    </div>



    <div class="l-container">
        <div class="l-six-col-grid">

            <div class="l-six-col-grid__block">
                <div class="stat-block js-anim-in">
                    <h4 class="stat-block__stat t-hero">
                        Gather
                    </h4>
                    <p class="stat-block__description ">
                        We gather <span>key data points</span> to value your home correctly.
                    </p>
                </div>
            </div>

            <div class="l-six-col-grid__block">
                <div class="stat-block js-anim-in" style="background-image: url('/dist/images/bre-final-grid-01.jpg');">
                </div>
            </div>

            <div class="l-six-col-grid__block">
                <div class="stat-block js-anim-in">
                    <h4 class="stat-block__stat t-hero">
                        Strategize
                    </h4>
                    <p class="stat-block__description ">
                        We formulate a <span>custom-tailored marketing plan</span> for your home.
                    </p>
                </div>
            </div>

            <div class="l-six-col-grid__block">
                <div class="stat-block js-anim-in" style="background-image: url('/dist/images/bre-final-grid-02.jpg');">
                </div>
            </div>

            <div class="l-six-col-grid__block">
                <div class="stat-block js-anim-in">
                    <h4 class="stat-block__stat t-hero">
                        Promote
                    </h4>
                    <p class="stat-block__description ">
                        We <span>maximize exposure</span> to sell your home for top dollar.
                    </p>
                </div>
            </div>

            <div class="l-six-col-grid__block">
                <div class="stat-block js-anim-in" style="background-image: url('/dist/images/bre-final-grid-03.jpg');">
                </div>
            </div>

        </div>
    </div>
    <div class="testimonial-hero testimonial-hero--turquoise js-anim-in">
        <div class="testimonial-hero__inner">
            <div class="testimonial-hero__img js-anim-in" style="background-image: url('/dist/images/seller-01.jpg');">
            </div>
            <div class="testimonial-hero__testimonial js-anim-in">

                <p class="testimonial-hero__blurb t-title-b js-anim-in">
                    We are so happy to have found them and do not know how we could have made it through this process without them.
                </p>
                <div class="testimonial-hero__author">
                    <a href="https://www.yelp.com/biz/jack-berdan-chicago-4?hrid=Gv6Lm7N4gn8pMRgIJ3rxYQ&utm_campaign=www_review_share_popup&utm_medium=copy_link&utm_source=(direct)" target="_blank" class="t-body link">Nathan K.</a>
                </div>
                <div class="testimonial-hero__author-title">
                    <span class="t-body t-subtitle">Chicago, IL</span>
                </div>

            </div>
        </div>
    </div>

    <div class="l-container">


        <div class="banner-a js-anim-in">
            <div class="banner-a__eyebrow">
                <h6 class="t-eyebrow">Get in Touch</h6>
            </div>
            <div class="banner-a__title">
                <h3>Interested in learning<br> more about selling?</h3>
            </div>
            <div class="banner-a__link t-body">
                <a href="https://jackberdan.typeform.com/to/v91ZN4" class="link" target="_blank">
                  Get in touch.
                  </a>
            </div>

        </div>
    </div>



    <?php 
    get_footer();
    ?>



</div>

<?php
get_sidebar();
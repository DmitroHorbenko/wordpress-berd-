<?php 

/* Template Name: Buying Page Template */ 

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
<!--     <div class="hero hero--green hero--underlap">
        <div class="hero__text">
            <h1 class="t-hero">
                <span class="js-anim-in">We provide expert insight to</span><span class="js-anim-in">make buying a home <em>a breeze</em>.</span>
            </h1>
        </div>
    </div> -->

    <!-- elementor widget Hero Media -->
<!--     <div class="l-container l-container--medium anim-in-2" poster="/dist/images/buying-video-poster.jpg">
        <video autoplay loop><source src="/dist/videos/ph-video.mp4" type="video/mp4">Your browser does not support the video tag.</video>
    </div> -->

    <!-- elementor widget Buying_Details -->
    <!-- <div class="l-container">
        <div class="l-two-col">
            <div class="l-two-col__col">
                <div class="anim--first js-anim-in">
                    <h5 class="t-hero">
                        Helping you buy <em>smart</em>.
                    </h5>
                </div>

                <ul class="stat-list">
                    <li class="stat-list__stat js-anim-in">
                        <h6 class="stat-list__stat-number">
                            $90M+
                        </h6>
                        <p class="stat-list__stat-description">
                            Amount of property sold. In 2016 &amp; 2017 the BRE Team was acknowledged in the Top 1% of the 15,000+ Realtors in Chicago.
                        </p>
                    </li>
                    <li class="stat-list__stat js-anim-in">
                        <h6 class="stat-list__stat-number">
                            69
                        </h6>
                        <p class="stat-list__stat-description">
                            Deals Sold/Pending in 2018.
                        </p>
                    </li>
                    <li class="stat-list__stat js-anim-in">
                        <h6 class="stat-list__stat-number">
                            300+
                        </h6>
                        <p class="stat-list__stat-description">
                            Happy clients we’ve helped.
                        </p>
                    </li>
                </ul>

            </div>

            <div class="l-two-col__col">
                <p class="t-body js-anim-in">
                    Buying a home can be overwhelming. We believe that it doesn’t have to be. We have spent the last 4 years crafting a purposeful process to help our clients navigate buying a home with&nbsp;ease.
                </p>
                <p class="t-body js-anim-in">
                    When purchasing a home the two most important things to consider are value and construction quality. In regards to value - we go to great lengths to understand a property’s value by analyzing significant amounts of data to arrive at a fair market value.
                    We consistently tell client’s to walk away from deals where we can’t get the price down to what we believe is a fair value. This is in line with our core philosophy of giving the advice we’d want to be&nbsp;given.
                </p>
                <p class="t-body js-anim-in">
                    We also make a considerable effort to educate on the construction quality in regards to how it affects the value as well as the long term maintenance costs of the property. We also help you understand how various aspects of the property will affect you
                    on re-sale value. We’ve thought of everything so you don’t have&nbsp;to.
                </p>

            </div>
        </div>
    </div> -->

    <!-- elementor widget Testimonial_Single -->
    <!-- <div class="testimonial-hero testimonial-hero--turquoise js-anim-in">
        <div class="testimonial-hero__inner">
            <div class="testimonial-hero__img js-anim-in" style="background-image: url('');">
            </div>
            <div class="testimonial-hero__testimonial js-anim-in">

                <div class="testimonial-hero__blurb t-title-b js-anim-in">
                    <p>To say we were truly impressed by their professionalism with a human touch, would be an understatement. They made us feel like family!</p>
                </div>
                <div class="testimonial-hero__author">
                    <a href="https://www.yelp.com/biz/jack-berdan-chicago-4?hrid=JLZQQIDIeKjnJdmWlh72yw" target="_blank" class="t-body link">Mimi M.</a>
                </div>
                <div class="testimonial-hero__author-title">
                    <span class="t-body t-subtitle">Chicago, IL</span>
                </div>

            </div>
        </div>
    </div> -->

    <!-- elementor widget Prefooter_CTA -->
    <div class="l-container">
        <div class="banner-a js-anim-in">
            <div class="banner-a__eyebrow">
                <h6 class="t-eyebrow">Get in Touch</h6>
            </div>
            <div class="banner-a__title">
                <h3>Interested in learning<br>more about buying?</h3>
            </div>
            <div class="banner-a__link t-body">
                <a href="https://jackberdan.typeform.com/to/u9ON3y" class="link" target="_blank">
                  Get in touch
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
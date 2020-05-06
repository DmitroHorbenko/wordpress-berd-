<?php 

/* Template Name: About Page Template */ 

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
    <div class="hero hero--blue hero--underlap">
        <div class="hero__text">
            <h1 class="t-hero">
                <span class="js-anim-in h-nowrap">A young, nimble team that’s</span><span class="js-anim-in h-nowrap">making real estate <em>personal</em>.</span>
            </h1>
        </div>
    </div>

    <!-- elementor widget Hero Media -->
    <div class="l-container l-container--medium">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bre-final-office-01.jpg" alt="" class="anim-in-2">
    </div>

    <!-- elementor widget About_Description -->
    <div class="l-container">
        <div class="l-two-col">
            <div class="l-two-col__col">
                <div class="anim--first js-anim-in">
                    <h5 class="t-hero-b">
                        <span class="js-anim-in h-nowrap">Aligning your goals</span><br><span class="js-anim-in h-nowrap">with <em>optimal outcomes</em></span><br><span class="js-anim-in h-nowrap">since 2013.</span>
                    </h5>
                </div>
            </div>

            <div class="l-two-col__col">
                <div class="t-body js-anim-in">
                    <p>In this day and age everyone has access to the same information &amp; listings. Distribution is no longer a major value component that a real estate professional brings to the table. Without a doubt the most valuable thing
                        in today’s real estate environment is proper counsel and representation. We are painstaking in our attention to detail when it comes to valuation, negotiation, and the marketing process.</p>
                    <p>It is very easy to overpay or overlook details that seem insignificant but actually can dramatically affect the value of your property in the long run. It’s also easy to miss opportunities to maximize the value of your home
                        on a sale without the right marketing and pricing strategy. If you are a buyer we are going to help you understand the fair value of the home and will never be afraid to tell you to walk away if we can’t get the price right.
                        If you are a seller we are going to assist in being as analytical as possible to justify the highest value for your home. We have a proprietary marketing process with proven results to position your property ahead of the
                        competitors in the marketplace. Our philosophy is simple: we believe our primary responsibility is educating our clients by providing the advice and representation we’d provide our own family. We’ve sold over $100M in real
                        estate and have helped hundreds of people buy and sell property in the Chicagoland area.</p>
                </div>

                <div>


                    <div class="bio-capsule js-bio-toggle-on js-anim-in" data-bio-for="jack-berdan">
                        <div class="bio-capsule__img" style="background-image: url('/uploads/media/JBProfile.JPG');">
                        </div>
                        <h6 class="bio-capsule__name t-body">
                            Jack Berdan
                        </h6>
                        <h6 class="bio-capsule__title t-subtitle">
                            Team Lead
                        </h6>
                    </div>

                    <div class="bio-capsule js-bio-toggle-on js-anim-in" data-bio-for="leah-gronsman">
                        <div class="bio-capsule__img" style="background-image: url('/uploads/media/Leah-2.jpg');">
                        </div>
                        <h6 class="bio-capsule__name t-body">
                            Leah Gronsman
                        </h6>
                        <h6 class="bio-capsule__title t-subtitle">
                            Real Estate Broker
                        </h6>
                    </div>

                    <div class="bio-capsule js-bio-toggle-on js-anim-in" data-bio-for="catherine-nearpass">
                        <div class="bio-capsule__img" style="background-image: url('/uploads/media/Catherine-2.jpg');">
                        </div>
                        <h6 class="bio-capsule__name t-body">
                            Catherine Nearpass
                        </h6>
                        <h6 class="bio-capsule__title t-subtitle">
                            Lead Listing Agent
                        </h6>
                    </div>

                    <div class="bio-capsule js-bio-toggle-on js-anim-in" data-bio-for="zack-redden">
                        <div class="bio-capsule__img" style="background-image: url('/uploads/media/Screen-Shot-2018-08-27-at-1.54.53-PM-copy-2.jpg');">
                        </div>
                        <h6 class="bio-capsule__name t-body">
                            Zack Redden
                        </h6>
                        <h6 class="bio-capsule__title t-subtitle">
                            Lead Buyer Agent
                        </h6>
                    </div>

                    <div class="bio-capsule js-bio-toggle-on js-anim-in" data-bio-for="chase-mcdaniel">
                        <div class="bio-capsule__img" style="background-image: url('/uploads/media/Chase-2.jpg');">
                        </div>
                        <h6 class="bio-capsule__name t-body">
                            Chase McDaniel
                        </h6>
                        <h6 class="bio-capsule__title t-subtitle">
                            Real Estate Broker
                        </h6>
                    </div>

                    <div class="bio-page js-bio-panel">
                        <div class="bio-page__close js-bio-toggle-off"></div>
                        <div class="bio-page__inner js-bio-panel-inner">

                            <div class="bio-page__bio js-bio-page jack-berdan" data-bio-for="jack-berdan">
                                <div class="bio-page__img"><img src="/uploads/media/_bioBanner/JBProfile.JPG" alt=""></div>
                                <div class="bio-page__name t-title-c">
                                    Jack Berdan
                                </div>
                                <div class="bio-page__title t-title-d">
                                    Team Lead
                                </div>
                                <div class="bio-page__bio-body t-body">
                                    <p>Jack grew up in the suburbs of Detroit, MI and moved to Chicago in 2005. He studied to be a minister and completed his bachelor's degree from Moody Bible Institute in 2009. While taking a year off from school
                                        and planning to go to grad school, he accepted a job at Chicago's largest leasing company. It was there that he fell in love with real estate and discovered his passion for serving others through business.
                                        In the first year, he became the agent of the year in the largest branch of the company and after 18 months he was the top producing agent in the company.</p>

                                    <p>In 2013, Jack acquired his managing brokers license and opened Berdan Real Estate with a focus on helping clients buy and sell real estate. Since then, Jack has grown the team to 6 people and has been acknowledged
                                        as a Top 1% producing team in 2016-2018 amongst the entire Chicago Association of Realtors. He now leads the Berdan Real Estate Team's strategy and growth efforts. In his spare time, he has a passion for
                                        acquiring old properties and turning them around.</p>

                                    <p>Since 2013, he has developed apartment buildings and commercial properties throughout the midwest. Jack lives the West Loop neighborhood. When not thinking about real estate, he enjoys sailing on Lake Michigan
                                        in the summer and traveling in the winter.</p>

                                </div>
                            </div>
                            <div class="bio-page__bio js-bio-page leah-gronsman" data-bio-for="leah-gronsman">
                                <div class="bio-page__img"><img src="/uploads/media/_bioBanner/Leah-2.jpg" alt=""></div>
                                <div class="bio-page__name t-title-c">
                                    Leah Gronsman
                                </div>
                                <div class="bio-page__title t-title-d">
                                    Real Estate Broker
                                </div>
                                <div class="bio-page__bio-body t-body">
                                    <p>Leah is a Grand Rapids, MI native and stumbled into real estate by chance after graduating from college here in Chicago. She quickly learned she loved the industry and all of its twists &amp; turns. She is a
                                        broker with Berdan Real Estate and loves being a part of the team. Leah will never say no to any kind of Asian food and can be found thrift shopping or drinking coffee at all hours of the day. </p>

                                </div>
                            </div>
                            <div class="bio-page__bio js-bio-page catherine-nearpass" data-bio-for="catherine-nearpass">
                                <div class="bio-page__img"><img src="/uploads/media/_bioBanner/Catherine-2.jpg" alt=""></div>
                                <div class="bio-page__name t-title-c">
                                    Catherine Nearpass
                                </div>
                                <div class="bio-page__title t-title-d">
                                    Lead Listing Agent
                                </div>
                                <div class="bio-page__bio-body t-body">
                                    <p>Catherine is originally from Charleston, South Carolina and went to college with Jack Berdan right here in Chicago. She had the unique opportunity of being Jack's first hire and was instrumental in establishing
                                        smooth and efficient processes enabling Berdan Real Estate to grow into what it is today. She immediately took on the responsibility of property management and has been able to establish connections with
                                        reliable contractors.</p>

                                    <p>As a broker, Catherine works primarily with our listings and offers guidance through her knowledge of interior design, staging, and upgrade projects. Catherine owns a condo in Tri-Taylor, is an avid bubble tea
                                        drinker, and loves traveling the world with her husband. </p>

                                </div>
                            </div>
                            <div class="bio-page__bio js-bio-page zack-redden" data-bio-for="zack-redden">
                                <div class="bio-page__img"><img src="/uploads/media/_bioBanner/Screen-Shot-2018-08-27-at-1.54.53-PM-copy-2.jpg" alt=""></div>
                                <div class="bio-page__name t-title-c">
                                    Zack Redden
                                </div>
                                <div class="bio-page__title t-title-d">
                                    Lead Buyer Agent
                                </div>
                                <div class="bio-page__bio-body t-body">
                                    <p>Zack is originally from St. Charles, Illinois and went to college at DePaul University, where he studied History and then carried on to Robert Morris College to earn his Culinary Arts Degree. His mother has
                                        worked in residential real estate lending for over 30 years and his father was a developer in the suburbs. With his knowledge of Chicago's vibrant neighborhoods and core understanding of the construction
                                        process and local building styles, he has proved to be a valuable asset to any novice or expert home buyer. Zack has a strong passion for bringing deteriorating properties back to life and has personally
                                        been involved in multiple rehabs in the Logan Square neighborhood as well as his personal dwelling in West Town where he lives with his girlfriend. Zack enjoys the early life in Chicago history and strives
                                        to retire to a cabin in the woods of Wisconsin. </p>

                                </div>
                            </div>
                            <div class="bio-page__bio js-bio-page chase-mcdaniel" data-bio-for="chase-mcdaniel">
                                <div class="bio-page__img"><img src="/uploads/media/_bioBanner/Chase-2.jpg" alt=""></div>
                                <div class="bio-page__name t-title-c">
                                    Chase McDaniel
                                </div>
                                <div class="bio-page__title t-title-d">
                                    Real Estate Broker
                                </div>
                                <div class="bio-page__bio-body t-body">
                                    <p>Chase is originally from North Carolina. He grew up working for his dad, where he was exposed to many new construction and rehab projects. His interest in real estate led him and two of his friends to flip a
                                        property during his freshman year of college. He then moved to Chicago and started a window cleaning business while completing his undergraduate degree. He is now a broker for Berdan Real Estate, and he
                                        absolutely loves his job! Chase enjoys living in Logan Square and obsessing over Mod Pizza and Collectivo.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bio-page__off-click js-bio-toggle-off"></div>


                </div>

            </div>
        </div>
    </div>

    <!-- elementor widget Testimonials_Slider -->
    <div class="l-container">


        <div class="banner-a js-anim-in banner-a--smaller-type banner-a--quote">
            <div class="banner-a__eyebrow">
                <h6 class="t-eyebrow">what people are saying</h6>
            </div>
            <div class="js-text-slider banner-a__slider">
                <div class="banner-a__slider-cell">
                    <div class="banner-a__title">
                        <h3>
                            <p>Berdan Real Estate was <em>exactly</em> what we were looking for — the entire team was responsive and fun, but also very professional and provided us with excellent advice throughout our search.</p>
                        </h3>
                    </div>
                    <div class="banner-a__link t-body">
                        Nathan &amp; Gretchen
                    </div>
                    <div class="banner-a__subtitle t-subtitle">Purchased with BRE</div>

                </div>
                <div class="banner-a__slider-cell">
                    <div class="banner-a__title">
                        <h3>
                            <p>I recommend Jack Berdan to anyone who is looking to purchase a Chicago home/condo. Three words come to mind which describes Jack: Integrity, Prompt, and Professional.</p>
                        </h3>
                    </div>
                    <div class="banner-a__link t-body">
                        Karen &amp; Jim
                    </div>
                    <div class="banner-a__subtitle t-subtitle">Purchased with BRE</div>

                </div>
                <div class="banner-a__slider-cell">
                    <div class="banner-a__title">
                        <h3>
                            <p>Jack worked with the highest level of integrity and I always felt he was doing what was best for me and my family throughout the process.</p>
                        </h3>
                    </div>
                    <div class="banner-a__link t-body">
                        Ben &amp; Sam
                    </div>
                    <div class="banner-a__subtitle t-subtitle">Sold with BRE</div>

                </div>
                <div class="banner-a__slider-cell">
                    <div class="banner-a__title">
                        <h3>
                            <p>Jack and his team are <em>phenomenal</em>. They far exceeded any and all expectations, out-shining every other agent we had dealt with in the past.</p>
                        </h3>
                    </div>
                    <div class="banner-a__link t-body">
                        Narissa and Ashish
                    </div>
                    <div class="banner-a__subtitle t-subtitle">Sold &amp; Purchased with BRE</div>

                </div>
            </div>
        </div>
    </div>


    <div class="hero hero--banner hero--green hero--location js-anim-in">
        <div class="hero__text">
            <h1 class="t-hero">
                <span class="js-anim-in h-nowrap">Located on beautiful</span><span class="js-anim-in h-nowrap">Goose Island in the</span><span class="js-anim-in h-nowrap">heart of Chicago</span>
            </h1>


        </div>


    </div>
    <div class="l-container l-container--location">
        <div class="l-two-col l-two-col--location">
            <div class="l-two-col__col">
                <div class="js-anim-in">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bre-final-office-02.jpg" alt="">
                </div>
            </div>
            <div class="l-two-col__col js-anim-in">
                <div class="t-eyebrow">visit us</div>
                <a href="https://www.google.com/maps?q=1229+N+Branch+St+%23219+Chicago,+IL+60642&um=1&ie=UTF-8&sa=X&ved=0ahUKEwiMjNuHuNvXAhXD54MKHWUPBjMQ_AUICigB" target="_blank">
  <address class="t-body address">
    1229 N Branch St<br>
    #219<br>
    Chicago, IL 60642<br>
  </address></a>
            </div>
        </div>
    </div>

    <!-- elementor widget Prefooter_CTA -->
    <div class="l-container">
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
    </div>



    <?php 
    get_footer();
    ?>



</div>

<?php
get_sidebar();
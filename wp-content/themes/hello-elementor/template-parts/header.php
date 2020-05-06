<?php
/**
 * The template for displaying header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$site_name = get_bloginfo( 'name' );
$tagline   = get_bloginfo( 'description', 'display' );
?>


<?php if(false){ ?>
<header class="site-header" role="banner">

	<div class="site-branding">
		<?php
		if ( has_custom_logo() ) {
			the_custom_logo();
		} elseif ( $site_name ) {
			?>
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( 'Home', 'hello-elementor' ); ?>" rel="home">
					<?php echo esc_html( $site_name ); ?>
				</a>
			</h1>
			<p class="site-description">
				<?php
				if ( $tagline ) {
					echo esc_html( $tagline );
				}
				?>
			</p>
		<?php } ?>
	</div>

	<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
	<nav class="site-navigation" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
	</nav>
	<?php endif; ?>
</header>
<?php } ?>



<div class="site-header js-site-header">

	<?php if ( has_custom_logo() ) { ?>
    <!-- <a href="<?php echo site_url(); ?>" class="site-header__logo js-logo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 87.96 87.96"><title>logo-square</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M0,0V88H88V0ZM66.8,57.06c0,9.62-8.22,15.71-20.64,15.71h-25V68.82h0V51.75h4V68.82H46.33c9.87,0,16.12-4.52,16.12-11.76v-.17c0-7.07-6.17-11.19-17.52-11.19H21.16v-4H44.43c8.64,0,14.8-4.19,14.8-11.84v-.16c0-6.33-5.18-10.61-14.39-10.61H25.14v17h-4V19h0V15.19H44.93c6.5,0,11.76,1.89,15,5.1a12.39,12.39,0,0,1,3.7,9v.17c0,7.81-5.1,11.76-9.79,13.65,6.91,1.81,13,5.76,13,13.73Z" style="fill:#000902"/></g></g></svg>  </a> -->
    	<a href="<?php echo site_url(); ?>" class="site-header__logo js-logo"><?php the_custom_logo(); ?></a>
	<?php }else{ ?>
		<a href="<?php echo site_url(); ?>" class="site-header__logo js-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg"></a> 
	<?php } ?>

    <div class="site-header__inner">

        <div class="site-header__nav js-site-nav">
            <nav class="site-nav">

            	<?php 
            	wp_nav_menu( array( 
            		'theme_location' => 'menu-1', 
            		'items_wrap' => '%3$s', 
            		'container' => '' 
            	) );
            	?>
                <!-- <a href="<?php echo site_url(); ?>/about">About</a> -->
                <!-- <a href="<?php echo site_url(); ?>/buying">Buying</a> -->
                <!-- <a href="<?php echo site_url(); ?>/selling">Selling</a> -->
                <!-- <a href="/properties" class="js-sidebar-toggle-on js-properties-toggle">Properties</a> -->
                <!-- <a href="/journal" class="js-sidebar-toggle-on js-journal-toggle">Journal</a> -->
                <a href="/contact" class="js-sidebar-toggle-on js-contact-toggle">Contact</a>
            </nav>
            <div class="site-nav__hover-indicator js-nav-toggle">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 21"><title>icon-hamburger</title><rect y="10" width="34" height="1" style="fill:#231f20"/><rect y="2" width="34" height="1" style="fill:#231f20"/><rect y="18" width="34" height="1" style="fill:#231f20"/></svg></div>
        </div>

    </div>
    <div class="site-header__nav-overlay js-nav-overlay"></div>
</div>
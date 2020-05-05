<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php $viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' ); ?>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<meta http-equiv="Accept-CH" content="DPR, Width, Viewport-Width">
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

    <style>
        .js-anim-in {
            transform: translateY(6rem) translateZ(0);
            transition: transform cubic-bezier(0.19, 1, 0.22, 1) 2s, opacity cubic-bezier(0.19, 1, 0.22, 1) 2s;
            opacity: 0 !important;
        }

        .js-anim-in.is-changed {
            transform: translateY(0rem) translateZ(0);
            opacity: 1 !important;
        }

        .sidebar {
            transform: translateX(100%);
        }
    </style>

    <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/styles/main.css" /> -->
</head>


<body <?php body_class(); ?>>

    <div id="site-container">

        <div class="js-page-top"></div>
        
        <?php
        hello_elementor_body_open();

        if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
        	get_template_part( 'template-parts/header' );
        }

        ?>
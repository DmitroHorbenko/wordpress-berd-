<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	get_template_part( 'template-parts/footer' );
}
?>

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/scripts/main.min.js"></script>

</body>
</html>

<?php
namespace ElementorHelloWorld;

/**
 * Class Plugin
 *
 * Main Plugin class
 * @since 1.2.0
 */
class Plugin {

	/**
	 * Instance
	 *
	 * @since 1.2.0
	 * @access private
	 * @static
	 *
	 * @var Plugin The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.2.0
	 * @access public
	 *
	 * @return Plugin An instance of the class.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * widget_scripts
	 *
	 * Load required plugin core files.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function widget_scripts() {
		wp_register_script( 'elementor-hello-world', plugins_url( '/assets/js/hello-world.js', __FILE__ ), [ 'jquery' ], false, true );
	}

	/**
	 * Include Widgets files
	 *
	 * Load widgets files
	 *
	 * @since 1.2.0
	 * @access private
	 */
	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/hello-world.php' );
		require_once( __DIR__ . '/widgets/inline-editing.php' );

		require_once( __DIR__ . '/widgets/hero.php' );
		require_once( __DIR__ . '/widgets/info-columns.php' );
		require_once( __DIR__ . '/widgets/about-us.php' );
		require_once( __DIR__ . '/widgets/prefooter-cta.php' );
		require_once( __DIR__ . '/widgets/hero-media.php' );
		require_once( __DIR__ . '/widgets/buying-details.php' );
		require_once( __DIR__ . '/widgets/testimonial-single.php' );
	}

	/**
	 * Register Widgets
	 *
	 * Register new Elementor widgets.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Hello_World() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Inline_Editing() );

		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Hero() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Info_Columns() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\About_Us() ); // About_Lead
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Prefooter_CTA() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Hero_Media() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Buying_Details() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Testimonial_Single() );

		// Prefooter_CTA
		
		// Hero_Media
		// Buying_Details
		// Testimonial_Single
		// About_Description
		// Testimonials_Slider
		// About_Loacation
		// Buying_Details
		// Testimonial_Single
		// Selling_Gallery

	}

	/**
	 *  Plugin class constructor
	 *
	 * Register plugin action hooks and filters
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function __construct() {

		// Register widget scripts
		add_action( 'elementor/frontend/after_register_scripts', [ $this, 'widget_scripts' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );

	}



}

// Instantiate Plugin Class
Plugin::instance();

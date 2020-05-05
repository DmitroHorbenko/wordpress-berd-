<?php
namespace ElementorHelloWorld\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class About_Us extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'about-us';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'About Us', 'elementor-hello-world' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-single-post';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'general' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	/*public function get_script_depends() {
		return [ 'elementor-hello-world' ];
	}*/

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Content', 'elementor-hello-world' ),
			]
		);

		/* Headline */
		$this->add_control(
			'title_first_sentence',
			[
				'label' => __( 'Title First Sentence', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'We’ve helped buy and',
			]
		);
		$this->add_control(
			'title_second_sentence',
			[
				'label' => __( 'Title Second Sentence', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'sell over $100 million',
			]
		);
		$this->add_control(
			'title_third_sentence',
			[
				'label' => __( 'Title Third Sentence', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'of real estate.',
			]
		);

		/* Link */
		$this->add_control(
			'link_title',
			[
				'label' => __( 'Link Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'Learn More About Us',
			]
		);
		$this->add_control(
			'link',
			[
				'label' => __( 'Link', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'plugin-domain' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);

		/* Image */
		$this->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Style', 'elementor-hello-world' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'text_transform',
			[
				'label' => __( 'Text Transform', 'elementor-hello-world' ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => __( 'None', 'elementor-hello-world' ),
					'uppercase' => __( 'UPPERCASE', 'elementor-hello-world' ),
					'lowercase' => __( 'lowercase', 'elementor-hello-world' ),
					'capitalize' => __( 'Capitalize', 'elementor-hello-world' ),
				],
				'selectors' => [
					'{{WRAPPER}} .title' => 'text-transform: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

		/*echo '<div class="title">';
		echo $settings['title'];
		echo '</div>';*/

		$target = $settings['website_link']['is_external'] ? ' target="_blank"' : '';
		$nofollow = $settings['website_link']['nofollow'] ? ' rel="nofollow"' : '';
		
		?>
		<div class="l-section l-section--w-spacing l-section--salmon">
			<div class="l-container l-container--medium">
				<div class="callout-a">
					<div class="callout-a__image js-anim-in">
						<?php echo '<img src="' . $settings['image']['url'] . '">'; ?>
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bre-final-home--about.jpg" alt=""> -->
					</div>
					<div class="callout-a__message">
						<h3 class="t-hero">
							<span class="js-anim-in h-nowrap"><?php echo $settings['title_first_sentence']; ?></span>
							<span class="js-anim-in h-nowrap"><?php echo $settings['title_second_sentence']; ?></span>
							<span class="js-anim-in h-nowrap"><?php echo $settings['title_third_sentence']; ?></span>
						</h3>
						<div class="callout-a__button js-anim-in">
							<?php echo '<a href="' . $settings['website_link']['url'] . '"' . $target . $nofollow . ' class="btn btn--black-on-salmon"> ' . $settings['link_title'] .' </a>'; ?> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			if( elementor ){
				setTimeout(function(){
					document.querySelectorAll('.js-anim-in').forEach(function(e){
						e.classList.add('is-changed');
					});
				}, 0);
			}
		</script>
		<?php
	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	/*protected function _content_template() {
		?>
		<div class="title">
			{{{ settings.title }}}
		</div>
		<?php
	}*/
}

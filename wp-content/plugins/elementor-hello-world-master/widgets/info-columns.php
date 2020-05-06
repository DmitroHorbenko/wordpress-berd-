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
class Info_Columns extends Widget_Base {

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
		return 'info-columns';
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
		return __( 'Info Columns', 'elementor-hello-world' );
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
		return 'eicon-posts-ticker';
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
	public function get_script_depends() {
		//return [ 'elementor-hello-world' ];
	}

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

		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
			]
		);



		$repeater = new \Elementor\Repeater();

				$repeater->add_control(
					'list_title', [
						'label' => __( 'Title', 'plugin-domain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => __( 'List Title' , 'plugin-domain' ),
						'label_block' => true,
					]
				);

				$repeater->add_control(
					'list_content', [
						'label' => __( 'Content', 'plugin-domain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => __( 'List Content' , 'plugin-domain' ),
						'show_label' => false,
					]
				);

				$repeater->add_control(
					'list_color',
					[
						'label' => __( 'Color', 'plugin-domain' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
						],
					]
				);

				$this->add_control(
					'list',
					[
						'label' => __( 'Repeater List', 'plugin-domain' ),
						'type' => \Elementor\Controls_Manager::REPEATER,
						'fields' => $repeater->get_controls(),
						'default' => [
							[
								'list_title' => __( 'Title #1', 'plugin-domain' ),
								'list_content' => __( 'Item content. Click the edit button to change this text.', 'plugin-domain' ),
							],
							[
								'list_title' => __( 'Title #2', 'plugin-domain' ),
								'list_content' => __( 'Item content. Click the edit button to change this text.', 'plugin-domain' ),
							],
						],
						'title_field' => '{{{ list_title }}}',
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

		if ( $settings['list'] ) {
			echo '<div class="l-container l-container--medium info-columns">';
			foreach (  $settings['list'] as $item ) {

				?>


			    <div class="capsule-a js-anim-in">
			        <a href="/selling" class="capsule-a__img-container"><span class="capsule-a__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bre-final-sellers.jpg');"></span></a>
			        <h4 class="capsule-a__title t-title-b"><?php echo $item['list_title']; ?></h4>
			        <div class="capsule-a__link">
			            <a href="/selling" class="t-body link">Sell With Us</a>
			        </div>
			    </div>


				<?php

				//echo '<dt class="elementor-repeater-item-' . $item['_id'] . '">' . $item['list_title'] . '</dt>';
				//echo '<dd>' . $item['list_content'] . '</dd>';
			}
			echo '</div>';
		}

		?>

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
	protected function _content_template() {
	}
	protected function _content_template2() {
		?>
		<!-- <div class="title"> -->
			<!-- {{{ settings.title }}} -->
		<!-- </div> -->

<div class="l-container l-container--medium">

    <div class="capsule-a">
        <a href="/selling" class="capsule-a__img-container"><span class="capsule-a__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bre-final-sellers.jpg');"></span></a>
        <h4 class="capsule-a__title t-title-b">Info for Sellers</h4>
        <div class="capsule-a__link">
            <a href="/selling" class="t-body link">Sell With Us</a>
        </div>
    </div>

    <div class="capsule-a">
        <a href="/buying" class="capsule-a__img-container"><span class="capsule-a__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bre-final-buyers.jpg');"></span></a>
        <h4 class="capsule-a__title t-title-b">Info for Buyers</h4>
        <div class="capsule-a__link">
            <a href="/buying" class="t-body link">Learn about Our Process</a>
        </div>
    </div>

    <div class="capsule-a">
        <a href="/buying" class="capsule-a__img-container"><span class="capsule-a__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bre-final-buyers.jpg');"></span></a>
        <h4 class="capsule-a__title t-title-b">Info for Buyers 2</h4>
        <div class="capsule-a__link">
            <a href="/buying" class="t-body link">Learn about Our Process 2</a>
        </div>
    </div>
</div>
		<?php
	}
}

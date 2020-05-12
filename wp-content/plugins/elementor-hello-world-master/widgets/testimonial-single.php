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
class Testimonial_Single extends Widget_Base {

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
		return 'testimonial-single';
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
		return __( 'Testimonial_Single', 'elementor-hello-world' );
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
			'content_section',
			[
				'label' => __( 'Content', 'elementor-hello-world' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => __( 'Background', 'plugin-domain' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .testimonial-hero',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
					'content_section',
					[
						'label' => __( 'Content', 'elementor-hello-world' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);

				$this->add_control(
					'website_link',
					[
						'label' => __( 'Link', 'plugin-domain' ),
						'type' => \Elementor\Controls_Manager::URL,
						'placeholder' => __( 'https://your-link.com', 'plugin-domain' ),
						'description' => __( 'Link to the author' ),
						'show_external' => true,
						'default' => [
							'url' => '',
							'is_external' => true,
							'nofollow' => true,
						],
					]
				);

				$this->end_controls_section();

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'elementor-hello-world' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'item_description1',
			[
				'label' => __( 'Description', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 15,
				'default' => __( 'To say we were truly impressed by their professionalism with a human touch, would be an understatement. They made us feel like family!', 'plugin-domain' ),
				'placeholder' => __( 'Type your description here', 'plugin-domain' ),
			]
		);
		$this->add_control(
			'item_description2',
			[
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => 15,
				'default' => __( 'Mimi M.', 'plugin-domain' ),
				'placeholder' => __( 'Type your description here', 'plugin-domain' ),
			]
		);
		$this->add_control(
			'item_description3',
			[
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => 15,
				'default' => __( 'Chicago, IL', 'plugin-domain' ),
				'placeholder' => __( 'Type your description here', 'plugin-domain' ),
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
		$target = $settings['website_link']['is_external'] ? ' target="_blank"' : '';
		$nofollow = $settings['website_link']['nofollow'] ? ' rel="nofollow"' : '';

		?>

		<div class="testimonial-hero testimonial-hero--turquoise js-anim-in">
		    <div class="testimonial-hero__inner">
		        <div class="testimonial-hero__img js-anim-in" style="background-image: url('');">
		        </div>
		        <div class="testimonial-hero__testimonial js-anim-in">

		            <div class="testimonial-hero__blurb t-title-b js-anim-in">
		                <p>
							<?php
								echo $settings['item_description1'];
							?>
		                </p>
		            </div>

								

		            <div class="testimonial-hero__author">
		            	<?php 
		            		echo '<a class="t-body link" href="' . $settings['website_link']['url'] . '"' . $target . $nofollow . '>' . $settings['item_description2'] . '</a>';
		            	?>
<!-- 		                <a href="https://www.yelp.com/biz/jack-berdan-chicago-4?hrid=JLZQQIDIeKjnJdmWlh72yw" target="_blank" class="t-body link">Mimi M.</a> -->
		            </div>
		            <div class="testimonial-hero__author-title">
		                <span class="t-body t-subtitle">
						<?php echo $settings['item_description3']; ?>	
		                </span>
		            </div>

		        </div>
		    </div>
		</div>

<!-- <div class="hero hero--underlap">
    <div class="hero__text">
        <h1 class="t-hero">
        	<span class="js-anim-in h-nowrap"><?php echo $settings['title']; ?></span> -->
            <!-- <span class="js-anim-in h-nowrap">A <em>different</em> approach to</span><span class="js-anim-in">buying and selling real estate.</span> -->
<!--         </h1>
    </div>
</div> -->
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
}

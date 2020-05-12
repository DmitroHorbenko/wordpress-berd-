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
class Buying_Details extends Widget_Base {

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
		return 'buying-details';
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
		return __( 'Buying Details', 'elementor-hello-world' );
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
				'label' => __( 'Content', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'item_description1',
			[
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => 15,
				'default' => __( 'Helping you <br> buy <em>smart</em>', 'plugin-domain' ),
				'placeholder' => __( 'Type your description here', 'plugin-domain' ),
			]
		);

		$this->add_control(
			'item_description2',
			[
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => 15,
				'default' => __( '$90M+', 'plugin-domain' ),
				'placeholder' => __( 'Type your description here', 'plugin-domain' ),
			]
		);
		
		$this->add_control(
			'item_description3',
			[
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => 15,
				'default' => __( 'Amount of property sold. In 2016 &amp; 2017 the BRE Team was acknowledged in the Top 1% of the 15,000+ Realtors in Chicago.', 'plugin-domain' ),
				'placeholder' => __( 'Type your description here', 'plugin-domain' ),
			]
		);
		$this->add_control(
			'item_description4',
			[
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => 15,
				'default' => __( '69', 'plugin-domain' ),
				'placeholder' => __( 'Type your description here', 'plugin-domain' ),
			]
		);
		$this->add_control(
			'item_description5',
			[
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => 15,
				'default' => __( 'Deals Sold/Pending in 2018.', 'plugin-domain' ),
				'placeholder' => __( 'Type your description here', 'plugin-domain' ),
			]
		);
		$this->add_control(
			'item_description6',
			[
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => 15,
				'default' => __( '300+', 'plugin-domain' ),
				'placeholder' => __( 'Type your description here', 'plugin-domain' ),
			]
		);
		$this->add_control(
			'item_description7',
			[
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => 15,
				'default' => __( 'Happy clients we’ve helped.', 'plugin-domain' ),
				'placeholder' => __( 'Type your description here', 'plugin-domain' ),
			]
		);
		$this->add_control(
			'item_description8',
			[
				'label' => __( 'Description', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 15,
				'default' => __( 'Buying a home can be overwhelming. We believe that it doesn’t have to be. We have spent the last 4 years crafting a purposeful process to help our clients navigate buying a home with&nbsp;ease!.', 'plugin-domain' ),
				'placeholder' => __( 'Type your description here', 'plugin-domain' ),
			]
		);
		$this->add_control(
			'item_description9',
			[
				'label' => __( 'Description', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 15,
				'default' => __( 'When purchasing a home the two most important things to consider are value and construction quality. In regards to value - we go to great lengths to understand a property’s value by analyzing significant amounts of data to arrive at a fair market value.
            We consistently tell client’s to walk away from deals where we can’t get the price down to what we believe is a fair value. This is in line with our core philosophy of giving the advice we’d want to be&nbsp;given.', 'plugin-domain' ),
				'placeholder' => __( 'Type your description here', 'plugin-domain' ),
			]
		);
		$this->add_control(
			'item_description10',
			[
				'label' => __( 'Description', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 15,
				'default' => __( 'We also make a considerable effort to educate on the construction quality in regards to how it affects the value as well as the long term maintenance costs of the property. We also help you understand how various aspects of the property will affect you
            on re-sale value. We’ve thought of everything so you don’t have&nbsp;to.', 'plugin-domain' ),
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

		?>

		<div class="l-container">
		    <div class="l-two-col">
		        <div class="l-two-col__col">
		            <div class="anim--first js-anim-in">
		                <h5 class="t-hero">
		                	<?php
		                		echo $settings['item_description1'];
		                	?>
		                    <!-- Helping you <br> buy <em>smart</em>. -->
		                </h5>
		            </div>
		            <ul class="stat-list">
		                <li class="stat-list__stat js-anim-in">
		                    <h6 class="stat-list__stat-number">
		                    	<?php
		                    		echo $settings['item_description2'];
		                    	?>
		                    </h6>
		                    <p class="stat-list__stat-description">
		                    	<?php
		                    		echo $settings['item_description3'];
		                    	?>
		                    </p>
		                </li>
		                <li class="stat-list__stat js-anim-in">
		                    <h6 class="stat-list__stat-number">
		                        <?php
		                    		echo $settings['item_description4'];
		                    	?>
		                    </h6>
		                    <p class="stat-list__stat-description">
		                        <?php
		                    		echo $settings['item_description5'];
		                    	?>
		                    </p>
		                </li>
		                <li class="stat-list__stat js-anim-in">
		                    <h6 class="stat-list__stat-number">
		                        <?php
		                    		echo $settings['item_description6'];
		                    	?>
		                    </h6>
		                    <p class="stat-list__stat-description">
		                        <?php
		                    		echo $settings['item_description7'];
		                    	?>
		                    </p>
		                </li>
		            </ul>
		        </div>

		        <div class="l-two-col__col">
		            <p class="t-body js-anim-in">
		            	<?php
		                	echo $settings['item_description8'];
		                ?>	
		            </p>
		            <p class="t-body js-anim-in">
		                <?php
		                	echo $settings['item_description9'];
		                ?>
		            </p>
		            <p class="t-body js-anim-in">
		                <?php
		                	echo $settings['item_description10'];
		                ?>
		            </p>
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

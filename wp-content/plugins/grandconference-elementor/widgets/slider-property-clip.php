<?php
namespace GrandConferenceElementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Blog Posts
 *
 * Elementor widget for blog posts
 *
 * @since 1.0.0
 */
class GrandConference_Slider_Property_Clip extends Widget_Base {

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
		return 'grandconference-slider-property-clip';
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
		return __( 'Property Clip Slider', 'grandconference-elementor' );
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
		return 'eicon-post-excerpt';
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
		return [ 'grandconference-theme-widgets-category' ];
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
		return [ 'grandconference-elementor' ];
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
	protected function register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Content', 'grandconference-elementor' ),
			]
		);
		
		$this->add_control(
			'gallery',
			  [
			    'label' => __( 'Add Images', 'grandconference-elementor' ),
				'type' => Controls_Manager::GALLERY,
				'default' => [],
			]
		);
		
		$this->add_control(
			'image_size',
			[
				'label' => __( 'Image Size', 'grandconference-elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'large',
			    'options' => [
			     	'medium_large' => __( 'Medium (default 768px x 768px max)', 'grandconference-elementor' ),
			     	'large' => __( 'Large (default 1024px x 1024px max)', 'grandconference-elementor' ),
			     	'full' => __( 'Original image resolution', 'grandconference-elementor' ),
			    ],
			]
		);
		
		$this->add_control(
			'image_align',
			[
				'label' => __( 'Image Alignment', 'grandconference-elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'left',
			    'options' => [
			     	'left' => __( 'Left', 'grandconference-elementor' ),
			     	'right' => __( 'Right', 'grandconference-elementor' ),
			    ],
			]
		);
		
		$this->add_responsive_control(
		    'width',
		    [
		        'label' => __( 'Width', 'grandconference-elementor' ),
		        'type' => Controls_Manager::SLIDER,
		        'default' => [
		            'size' => 100,
		            'unit' => '%',
		        ],
		        'range' => [
		            'px' => [
		                'min' => 5,
		                'max' => 2000,
		                'step' => 5,
		            ]
		        ],
		        'size_units' => [ 'px' ],
		        'selectors' => [
		            '{{WRAPPER}} .slider-property-clip-wrapper' => 'width: {{SIZE}}{{UNIT}}',
		        ],
		    ]
		);
		
		$this->add_responsive_control(
		    'height',
		    [
		        'label' => __( 'Height', 'grandconference-elementor' ),
		        'type' => Controls_Manager::SLIDER,
		        'default' => [
		            'size' => 500,
		            'unit' => 'px',
		        ],
		        'range' => [
		            'px' => [
		                'min' => 5,
		                'max' => 2000,
		                'step' => 5,
		            ]
		        ],
		        'size_units' => [ 'px' ],
		        'selectors' => [
		            '{{WRAPPER}} .slider-property-clip-wrapper' => 'height: {{SIZE}}{{UNIT}}',
		        ],
		    ]
		);
		
		$this->add_control(
		  'title',
		  [
		     'label'       => __( 'Title', 'grandconference-elementor' ),
		     'type'        => Controls_Manager::TEXT,
		     'placeholder' => __( 'Title', 'grandconference-elementor' ),
		  ]
		);
		
		$this->add_control(
		  'subtitle',
		  [
		     'label'       => __( 'Sub Title', 'grandconference-elementor' ),
		     'type'        => Controls_Manager::TEXT,
		     'placeholder' => __( 'Sub Title', 'grandconference-elementor' ),
		  ]
		);
		
		$this->add_control(
		  'description',
		  [
		     'label'   => __( 'Description', 'grandconference-elementor' ),
		     'type'    => Controls_Manager::WYSIWYG,
		     'default' => __( 'Default description', 'grandconference-elementor' ),
		  ]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'section_title_style',
			array(
				'label'      => esc_html__( 'Title', 'grandconference-elementor' ),
				'tab'        => Controls_Manager::TAB_STYLE,
				'show_label' => false,
			)
		);
		
		$this->add_control(
		    'content_background',
		    [
		        'label' => __( 'Content Background', 'grandconference-elementor' ),
		        'type' => Controls_Manager::COLOR,
		        'default' => '#f0f0f0',
		        'selectors' => [
		            '{{WRAPPER}} .slider-property-clip-wrapper.intro .content' => 'background: {{VALUE}}',
		        ],
		    ]
		);
		
		$this->add_control(
		    'title_color',
		    [
		        'label' => __( 'Title Color', 'grandconference-elementor' ),
		        'type' => Controls_Manager::COLOR,
		        'default' => '#222222',
		        'selectors' => [
		            '{{WRAPPER}} .slider-property-clip-wrapper.intro .content > div h1' => 'color: {{VALUE}}',
		        ],
		    ]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => __( 'Title Typography', 'grandconference-elementor' ),
				'selector' => '{{WRAPPER}} .slider-property-clip-wrapper.intro .content div h1',
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'section_subtitle_style',
			array(
				'label'      => esc_html__( 'Sub Title', 'grandconference-elementor' ),
				'tab'        => Controls_Manager::TAB_STYLE,
				'show_label' => false,
			)
		);
		
		$this->add_control(
		    'subtitle_color',
		    [
		        'label' => __( 'Sub Title Color', 'grandconference-elementor' ),
		        'type' => Controls_Manager::COLOR,
		        'default' => '#222222',
		        'selectors' => [
		            '{{WRAPPER}} .slider-property-clip-wrapper.intro .content span' => 'color: {{VALUE}}',
		        ],
		    ]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'subtitle_typography',
				'label' => __( 'Sub Title Typography', 'grandconference-elementor' ),
				'selector' => '{{WRAPPER}} .slider-property-clip-wrapper .content span',
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'section_content_style',
			array(
				'label'      => esc_html__( 'Content', 'grandconference-elementor' ),
				'tab'        => Controls_Manager::TAB_STYLE,
				'show_label' => false,
			)
		);
		
		$this->add_control(
		    'description_color',
		    [
		        'label' => __( 'Description Color', 'grandconference-elementor' ),
		        'type' => Controls_Manager::COLOR,
		        'default' => '#222222',
		        'selectors' => [
		            '{{WRAPPER}} .slider-property-clip-wrapper.intro .content > div p' => 'color: {{VALUE}}',
		        ],
		    ]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'label' => __( 'Description Typography', 'grandconference-elementor' ),
				'selector' => '{{WRAPPER}} .slider-property-clip-wrapper.intro .content > div',
			]
		);
		
		$this->add_control(
		    'link_color',
		    [
		        'label' => __( 'Link Color', 'grandconference-elementor' ),
		        'type' => Controls_Manager::COLOR,
		        'default' => '#222222',
		        'selectors' => [
		            '{{WRAPPER}} .slider-property-clip-wrapper.intro .content > div a' => 'color: {{VALUE}}',
		            '{{WRAPPER}} .slider-property-clip-wrapper.intro div.content a' => 'border-color: {{VALUE}}',
		        ],
		    ]
		);
		
		$this->add_control(
		    'pagination_color',
		    [
		        'label' => __( 'Pagination Background Color', 'grandconference-elementor' ),
		        'type' => Controls_Manager::COLOR,
		        'default' => '#ffffff',
		        'selectors' => [
		            '{{WRAPPER}} .slider-property-clip-wrapper.intro nav a' => 'background: {{VALUE}}',
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
		include(GRANDCONFERENCE_ELEMENTOR_PATH.'templates/slider-property-clip/index.php');
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
	protected function content_template() {
		return '';
	}
}

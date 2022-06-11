<?php
/**
* Register breadcrumb Options
*
* @return void
* @since 1.0.0
*
* @package BizSmart WordPress theme
*/
function bizsmart_color_options(){	
	BizSmart_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > color options
		'section' => array(
		    'id'       => 'color-section',
		    'title'    => esc_html__( 'Color Options' ,'bizsmart' ),
		    'priority' => 5
		),
		'fields'  =>array(
			array(
				'id'      => 'primary-color',
				'label'   => esc_html__( 'Primary Color', 'bizsmart' ),
				'default' => '#008b9e',
				'type'    => 'bizsmart-color-picker',
			),
			array(
				'id'      => 'body-paragraph-color',
				'label'   => esc_html__( 'Body Text Color', 'bizsmart' ),
				'default' => '#5f5f5f',
				'type'    => 'bizsmart-color-picker',
			),
			array(
				'id'      => 'primary-menu-item-color',
				'label'   => esc_html__( 'Primary Menu Item color', 'bizsmart' ),
				'default' => '#737373',
				'type'    => 'bizsmart-color-picker',
			),
			array(
				'id'   => 'line-2',
				'type' => 'bizsmart-horizontal-line',
			),
			array(
				'id'      => 'sb-widget-title-color',
				'label'   => esc_html__( 'Sidebar Widget Title Color', 'bizsmart' ),
				'default' => '#000000',
				'type'    => 'bizsmart-color-picker',
			),
			array(
				'id'      => 'sb-widget-content-color',
				'label'   => esc_html__( 'Sidebar Widget Content Color', 'bizsmart' ),
				'default' => '#282835',
				'type'    => 'bizsmart-color-picker',
			),
			array(
				'id'   => 'line-3',
				'type' => 'bizsmart-horizontal-line',
			),
			array(
				'id'      => 'footer-title-color',
				'label'   => esc_html__( 'Footer Widget Title Color', 'bizsmart' ),
				'default' => '#fff',
				'type'    => 'bizsmart-color-picker',
			),
			array(
				'id'      => 'footer-content-color',
				'label'   => esc_html__( 'Footer Widget Content Color', 'bizsmart' ),
				'default' => '#a8a8a8',
				'type'    => 'bizsmart-color-picker',
			),
			array(
				'id'   => 'line-4',
				'type' => 'bizsmart-horizontal-line',
			),
			array(
				'id'      => 'footer-top-background-color',
				'label'   => esc_html__( 'Footer Background Color', 'bizsmart' ),
				'default' => '#28292a',
				'type'    => 'bizsmart-color-picker',
			),
			array(
				'id'      => 'footer-copyright-background-color',
				'label'   => esc_html__( 'Footer Copyright Background Color', 'bizsmart' ),
				'default' => '#0c0808',
				'type'    => 'bizsmart-color-picker',
			),
			array(
				'id'      => 'footer-copyright-text-color',
				'label'   => esc_html__( 'Footer Copyright Text Color', 'bizsmart' ),
				'default' => '#ffffff',
				'type'    => 'bizsmart-color-picker',
			),
		),			
	));
}
add_action( 'init', 'bizsmart_color_options' );
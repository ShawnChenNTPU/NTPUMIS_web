<?php
/**
* Register Scroll to top options
*
* @return void
* @since 1.0.0
*
* @package BizSmart WordPress theme
*/
function bizsmart_scroll_to_top_options(){
	BizSmart_Customizer::set(array(
		# Theme Options
		'panel'   => 'panel',
		# Theme Options >Sidebar Layout > Settings
		'section' => array(
			'id'     => 'scroll-to-top-options',
			'title'  => esc_html__( 'Scroll To Top Options','bizsmart' ),
		),
		'fields' => array(
			array(
				'id'      => 'enable-scroll-to-top',
				'label'   => esc_html__( 'Enable', 'bizsmart' ),
				'default' => true,
				'type'    => 'bizsmart-toggle'
			),
		),
	) );
}
add_action( 'init', 'bizsmart_scroll_to_top_options' );
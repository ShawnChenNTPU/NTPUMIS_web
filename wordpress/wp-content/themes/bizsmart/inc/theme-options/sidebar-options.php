<?php
/**
* Register sidebar Options
*
* @return void
* @since 1.0.0
*
* @package BizSmart WordPress theme
*/
function bizsmart_sidebar_options(){
	BizSmart_Customizer::set(array(
		# Theme Options
		'panel'   => 'panel',
		# Theme Options >Sidebar Layout > Settings
		'section' => array(
			'id'     => 'sidebar-options',
			'title'  => esc_html__( 'Sidebar Options','bizsmart' ),
		),
		'fields' => array(
			# sb - Sidebar
			array(
			    'id'      => 'sidebar-position',
			    'label'   => esc_html__( 'Sidebar Position' , 'bizsmart' ),
			    'type'    => 'bizsmart-buttonset',
			    'default' => 'right-sidebar',
			    'choices' => array(
			        'left-sidebar'  => esc_html__( 'Left' , 'bizsmart' ),
			        'right-sidebar' => esc_html__( 'Right' , 'bizsmart' ),
			        'no-sidebar'    => esc_html__( 'None', 'bizsmart' ),
			     )
			),
		),
	) );
}
add_action( 'init', 'bizsmart_sidebar_options' );
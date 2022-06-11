<?php
if( !function_exists( 'bizsmart_acb_custom_header_one' ) ):
	/**
	* Active callback function of header top bar
	*
	* @static
	* @access public
	* @return boolen
	* @since 1.0.0
	*
	* @package BizSmart WordPress theme
	*/
	function bizsmart_acb_custom_header_one( $control ){
		$value = $control->manager->get_setting( BizSmart_Helper::with_prefix( 'container-width' ) )->value();
		return 'default' == $value;
	}
endif;

/**
* Register Advanced Options
*
* @return void
* @since 1.0.0
*
* @package BizSmart WordPress theme
*/
function bizsmart_advanced_options(){

	BizSmart_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Header
		'section' => array(
		    'id'    => 'advance-options',
		    'title' => esc_html__( 'Advanced Options', 'bizsmart' ),
		),
		# Theme Option > Header > settings
		'fields' => array(
			array(
				'id'	=> 'pre-loader',
				'label' => esc_html__( 'Show Preloader', 'bizsmart' ),
				'default' => false,
				'type'  => 'bizsmart-toggle',
			),
			array(
			    'id'      =>  'container-width',
			    'label'   => esc_html__( 'Site Layout', 'bizsmart' ),
			    'type'    => 'bizsmart-buttonset',
			    'default' => 'default',
			    'choices' => array(
			        'default' => esc_html__( 'Default', 'bizsmart' ),
			        'box'	  => esc_html__( 'Boxed', 'bizsmart' ),
			    )
			),
		    array(
		        'id'          	  => 'container-custom-width',
		        'label'   	  	  => esc_html__( 'Container Width', 'bizsmart' ),
		        'active_callback' => 'acb_custom_header_one',
		        'type'        	  => 'bizsmart-range',
		        'default'     	  => '1140',
	    		'input_attrs' 	  =>  array(
	                'min'   => 400,
	                'max'   => 2000,
	                'step'  => 5,
	            ),
		    ),
		)
	));
}
add_action( 'init', 'bizsmart_advanced_options' );
<?php
/**
 * Resets all the value of customizer
 *
 * @since 1.0.0
 *
 * @package BizSmart WordPress Theme
 */

if( !function_exists( 'bizsmart_get_setting_id' ) ):
	add_action( 
		BizSmart_Helper::fn_prefix( 'customize_register_start' ), 
		'bizsmart_get_setting_id', 30, 2 );
	/**
	* Get all the setting id to bizsmart-reset the data.
	*
	* @return array
	* @since 1.0.0
	*
	* @package BizSmart WordPress theme
	*/
	function bizsmart_get_setting_id( $instance, $wp_customize ) {
		
		BizSmart_Customizer::set(array(
			# Theme option
			'panel' => 'panel',
			# Theme Option > Reset options
			'section' => array(
			    'id'    => 'bizsmart-reset-section',
			    'title' => esc_html__( 'Reset Options' ,'bizsmart' ),
			),
			'fields' => array(
				array(
				    'id' 	      => 'bizsmart-reset-options',
				    'type'        => 'bizsmart-reset',
				    'settings'    => array_keys( $instance::$settings ),
				    'label'       => esc_html__( 'Reset', 'bizsmart' ),
				    'description' => esc_html__( 'Reseting will delete all the data. Once bizsmart-reset, you will not be able to get back those data.', 'bizsmart' ),
				),
			),
		) );
	}
endif;

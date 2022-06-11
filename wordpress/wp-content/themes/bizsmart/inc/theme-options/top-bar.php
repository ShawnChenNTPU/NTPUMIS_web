<?php
/**
 * Breadcrumb options in customizer 
 *
 * @since 1.0.0
 *
 * @package BizSmart WordPress Theme
 */

if( !function_exists( 'bizsmart_acb_topbar' ) ):
    /**
    * Active callback function for Author
    *
    * @return boolen
    * @since 1.0.0
    *
    * @package BizSmart WordPress theme
    */
    function bizsmart_acb_topbar( $control ) {
        $value = $control->manager->get_setting( BizSmart_Helper::with_prefix( 'enable-top-bar' ) )->value();
        return $value == 1 ? true : false;
    }
endif;

/**
* Register TOp Bar
* @since 1.0.0
*
* @package BizSmart WordPress Theme
*/
function bizsmart_top_bar_options(){
	BizSmart_Customizer::set(array(
		# Theme Options
		'panel' => array(
		    'id'       => 'panel',
		    'priority' => 1,
		),
		# Theme Options >Sidebar Layout > Settings
		'section' => array(
			'id'     => 'top-bar-options',
			'title'  => esc_html__( 'Top Bar Options','bizsmart' ),
			'priority' => 1
		),
		'fields' => array(
			array(
				'id'      => 'enable-top-bar',
				'label'   => esc_html__( 'Enable', 'bizsmart' ),
				'default' => true,
				'type'    => 'bizsmart-toggle'
			),
			array(
				'id' => 'availability-text',
				'label' => esc_html__( 'Availability', 'bizsmart' ),
				'type' => 'text',
				'default' => esc_html__( 'Monday - Friday, 8AM to 10PM', 'bizsmart' ),
				'active_callback' => 'acb_topbar'
			),
			array(
				'id' => 'contact-text',
				'label' => esc_html__( 'Contact', 'bizsmart' ),
				'type' => 'text',
				'description' => esc_html__( 'Please use number within parenthesis to use direct call feature. For example: `Call Us Now {+1 5589 55488 55}` Parenthesis will not be displayed.', 'bizsmart' ),
				'default' => esc_html__( 'Call Us Now {+1 5589 55488 55}', 'bizsmart' ),
				'active_callback' => 'acb_topbar'
			),
			array(
				'id'      => 'topbar-bg-color',
				'label'   => esc_html__( 'Background Color', 'bizsmart' ),
				'default' => '#008b9e',
				'type'    => 'bizsmart-color-picker',
			),
			array(
				'id'      => 'topbar-text-color',
				'label'   => esc_html__( 'Text Color', 'bizsmart' ),
				'default' => '#ffffff',
				'type'    => 'bizsmart-color-picker',
			),
		) 
	));
}
add_action( 'init', 'bizsmart_top_bar_options' );
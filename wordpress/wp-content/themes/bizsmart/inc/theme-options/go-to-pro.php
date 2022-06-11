<?php
/**
* Register Go to pro button
*
* @since 1.0.1
*
* @package BizSmart WordPress Theme
*/
function bizsmart_go_to_pro(){
	BizSmart_Customizer::set(array(
		'section' => array(
			'id'       => 'go-to-pro', 
			'type'     => 'bizsmart-anchor',
			'title'    => esc_html__( 'BizSmart Pro', 'bizsmart' ),
			'url'      => esc_url( 'https://wpactivethemes.com/downloads/bizsmart-pro/' ),
			'priority' => 0
		)
	));
}
add_action( 'init', 'bizsmart_go_to_pro' );
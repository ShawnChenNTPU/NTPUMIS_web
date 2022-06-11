<?php
/**
* Register blog Options
*
* @return void
* @since 1.0.0
*
* @package BizSmart WordPress theme
*/
function bizsmart_blog_options(){	
	BizSmart_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > color options
		'section' => array(
		    'id'       => 'blog-section',
		    'title'    => esc_html__( 'Blog Options' ,'bizsmart' ),
		    'priority' => 25
		),
		'fields'  => array(
			array(
				'id'	=> 'meta-sections-order',
				'label' => esc_html__( 'Archive Meta Order', 'bizsmart' ),
				'description' => esc_html__( 'Please make sure that you have enabled all sections under "Post Options"', 'bizsmart' ),
				'type'  => 'bizsmart-section-order',
				'default' =>json_encode(array(
					'title', 'date', 'category', 'excerpt', 'comment'
				)),
				'choices' => array(
					'title' => esc_html__( 'Title', 'bizsmart' ),
					'date' => esc_html__( 'Date', 'bizsmart' ),
					'category' => esc_html( 'Category', 'bizsmart' ),
					'excerpt' => esc_html__( 'Excerpt', 'bizsmart' ),
					'comment' => esc_html__( 'Comment', 'bizsmart' )
				),
				'transport'   => 'refresh'
			),
		),			
	));
}
add_action( 'init', 'bizsmart_blog_options' );

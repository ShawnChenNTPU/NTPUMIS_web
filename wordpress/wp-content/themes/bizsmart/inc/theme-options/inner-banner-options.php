<?php
/**
 * Inner banner options in customizer
 *
 * @return void
 * @since 1.0.0
 *
 * @package BizSmart WordPress Theme
 */

function bizsmart_inner_banner_options(){ 
	BizSmart_Customizer::set(array(
		# Theme Option > color options
		'section' => array(
		    'id'       => 'header_image',
		    'priority' => 27,
		    'prefix' => false,
		),
		'fields'  => array(
			array(
				'id'      	  => 'ib-blog-title',
				'label'   	  => esc_html__( 'Title' , 'bizsmart' ),
				'description' => esc_html__( 'It is displayed when home page is latest posts.' , 'bizsmart' ),
				'default' 	  => esc_html__( 'Recent Posts', 'bizsmart' ),
				'type'	  	  => 'text',
				'priority'    => 10,
			),
		    array(
		        'id'	  	  => 'ib-title-size',
		        'label'   	  => esc_html__( 'Font Size', 'bizsmart' ),
		        'default' => array(
		    		'desktop' => 30,
		    		'tablet'  => 22,
		    		'mobile'  => 22,
		    	),
				'input_attrs' =>  array(
		            'min'   => 1,
		            'max'   => 60,
		            'step'  => 1,
		        ),
		        'type' => 'bizsmart-slider',
		        'priority' => 20
		    ),
		    array(
		        'id'      => 'ib-title-color',
		        'label'   => esc_html__( 'Text Color' , 'bizsmart' ),
		        'type'    => 'bizsmart-color-picker',
		        'default' => '#ffffff',
		        'priority' => 30
		    ),
		    array(
		    	'id' 	   => 'ib-background-color',
		    	'label'    => esc_html__( 'Overlay Color', 'bizsmart' ),
		    	'default'  => 'rgba(0,0,0,0.27)',
		    	'type' 	   => 'bizsmart-color-picker',
		    	'priority' => 40,
		    ),
		    array(
		        'id'      => 'ib-text-align',
		        'label'   => esc_html__( 'Alignment' , 'bizsmart' ),
		        'type'    => 'bizsmart-buttonset',
		        'default' => 'banner-content-center',
		        'choices' => array(
		        	'banner-content-left'   => esc_html__( 'Left' , 'bizsmart'   ),
		        	'banner-content-center' => esc_html__( 'Center' , 'bizsmart' ),
		        	'banner-content-right'  => esc_html__( 'Right' , 'bizsmart'  ),
		         ),
		        'priority' => 50
		    ),
			array(
			    'id'      => 'ib-image-attachment', 
			    'label'   => esc_html__( 'Image Attachment' , 'bizsmart' ),
			    'type'    => 'bizsmart-buttonset',
			    'default' => 'banner-background-scroll',
			    'choices' => array(
			    	'banner-background-scroll'           => esc_html__( 'Scroll' , 'bizsmart' ),
			    	'banner-background-attachment-fixed' => esc_html__( 'Fixed' , 'bizsmart' ),
			    ),
		        'priority' => 60
			),
			array(
			    'id'      	=> 'ib-height',
			    'label'   	=> esc_html__( 'Height (px)', 'bizsmart' ),
			    'type'    	=> 'bizsmart-slider',
	            'default' => array(
	        		'desktop' => 300,
	        		'tablet'  => 300,
	        		'mobile'  => 300,
	        	),
	    		'input_attrs' =>  array(
	                'min'   => 1,
	                'max'   => 1000,
	                'step'  => 1,
	            ),
			),
		    'priority' => 70
		),
	) );
}
add_action( 'init', 'bizsmart_inner_banner_options' );
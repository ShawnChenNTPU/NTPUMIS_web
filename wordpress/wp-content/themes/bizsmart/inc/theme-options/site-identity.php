<?php
/**
 * Register font size and choice to display logo or title.
 *
 * @since 1.0.0
 *
 * @package BizSmart WordPress theme
 */

/**
* Register Site Identity Options
*
* @return void
* @since 1.0.0
*
* @package BizSmart WordPress theme
*/
function bizsmart_site_identity(){
	BizSmart_Customizer::set(array(
		# Site Identity > title size || title or logo
		'section' => array(
			'id' => 'title_tagline',
			'prefix' => false,
		),
		'fields'  => array(
		    array(
		        'id'	  	  => 'title-size',
		        'label'   	  => esc_html__( 'Title Size', 'bizsmart' ),
		        'description' => esc_html__( 'The value is in px.' , 'bizsmart' ),
		        'default' => array(
		    		'desktop' => 30,
		    		'tablet'  => 30,
		    		'mobile'  => 30,
		    	),
				'input_attrs' =>  array(
		            'min'   => 1,
		            'max'   => 60,
		            'step'  => 1,
		        ),
		        'type'    => 'bizsmart-slider',
		    ),
	        array(
	            'id'	  	  => 'tagline-size',
	            'label'   	  => esc_html__( 'Tagline Size', 'bizsmart' ),
	            'description' => esc_html__( 'The value is in px.' , 'bizsmart' ),
	            'default' => array(
	        		'desktop' => 14,
	        		'tablet'  => 14,
	        		'mobile'  => 14,
	        	),
	    		'input_attrs' =>  array(
	                'min'   => 1,
	                'max'   => 35,
	                'step'  => 1,
	            ),
	            'type'    => 'bizsmart-slider',
	        ),
            array(
    	        'id'	  	  => 'logo-size',
    	        'label'   	  => esc_html__( 'Logo Size', 'bizsmart' ),
    	        'description' => esc_html__( 'The value is in px.' , 'bizsmart' ),
    	        'default' => array(
    	    		'desktop' => 200,
    	    		'tablet'  => 200,
    	    		'mobile'  => 200,
    	    	),
    			'input_attrs' =>  array(
    	            'min'   => 1,
    	            'max'   => 500,
    	            'step'  => 1,
    	        ),
    	        'type'    => 'bizsmart-slider',
    	    )
		)	
	));
}
add_action( 'init', 'bizsmart_site_identity' );
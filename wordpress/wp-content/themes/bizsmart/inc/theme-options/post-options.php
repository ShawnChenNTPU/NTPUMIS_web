<?php
if( !function_exists( 'bizsmart_acb_author_position' ) ):
    /**
    * Active callback function for Author
    *
    * @return boolen
    * @since 1.0.0
    *
    * @package BizSmart WordPress theme
    */
    function bizsmart_acb_author_position( $control ) {
        $value = $control->manager->get_setting( BizSmart_Helper::with_prefix( 'post-author' ) )->value();
        return $value == 1 ? true : false;
    }
endif;


/**
 * Create options for posts.
 *
 * @since 1.0.0
 *
 * @package BizSmart WordPress theme
 */

function bizsmart_post_options(){  
    BizSmart_Customizer::set(array(
    	# Theme Options
    	'panel'   => 'panel',
    	# Theme Options > Page Options > Settings
    	'section' => array(
    		'id'    => 'post-options',
    		'title' => esc_html__( 'Post Options','bizsmart' ),
    	),
    	'fields' => array(
            array(
                'id'      => 'post-category',
                'label'   =>  esc_html__( 'Show Categories', 'bizsmart' ),
                'default' => 1,
                'type'    => 'bizsmart-toggle',
            ),
            array(
                'id'      => 'post-date',
                'label'   => esc_html__( 'Show Date', 'bizsmart' ),
                'default' => 1,
                'type'    => 'bizsmart-toggle',
            ),
            array(
                'id'      => 'post-author',
                'label'   =>  esc_html__( 'Show Author', 'bizsmart' ),
                'default' => 1,
                'type'    => 'bizsmart-toggle',
            ),
            array(
                'id' => 'author-position',
                'label' => esc_html__( 'Author Image Position', 'bizsmart' ),
                'type' => 'bizsmart-buttonset',
                'default' => 'author-right',
                'active_callback' => 'acb_author_position',
                'choices' => array(
                    'author-left' => esc_html__( 'Left', 'bizsmart' ),
                    'author-right' => esc_html__( 'Right', 'bizsmart' ),
                )
            ),
            array(
                'id'      => 'excerpt_length',
                'label'   => esc_html__( 'Excerpt Length', 'bizsmart' ),
                'default' => 15,
                'type'    => 'number',
            ),
            array(
                'id'      => 'read-more-text',
                'label'   => esc_html__( 'Read More Text', 'bizsmart' ),
                'default' => esc_html__( 'Continue Reading', 'bizsmart' ),
                'type'    => 'text'
            ),
            array(
                'id' => 'post-per-row',
                'label' => esc_html__( 'Post Per Row', 'bizsmart' ),
                'type' => 'bizsmart-buttonset',
                'default' => '2',
                'choices' => array(
                    '1' => esc_html__( '1', 'bizsmart' ),
                    '2' => esc_html__( '2', 'bizsmart' ),
                    '3' => esc_html__( '3', 'bizsmart' ),
                    '4' => esc_html__( '4', 'bizsmart' )
                )
            ),
     	),
    ) );
}
add_action( 'init', 'bizsmart_post_options' );
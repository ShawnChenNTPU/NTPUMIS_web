<?php
/**
* Register typography Options
*
* @return void
* @since 1.0.0
*
* @package BizSmart WordPress theme
*/
function bizsmart_typography_options(){ 

    $message = esc_html__( 'The value is in px.', 'bizsmart' );
    BizSmart_Customizer::set(array(
        # Theme option
        'panel' => array(
            'id'       => 'panel',
            'title'    => esc_html__( 'BizSmart Options', 'bizsmart' ),
            'priority' => 10,
        ),
        # Theme Option > Header
        'section' => array(
            'id'    => 'typography',
            'title' => esc_html__( 'Typography','bizsmart' ),
            'priority' => 5
        ),
        # Theme Option > Header > settings
        'fields' => array(
            array(
                'id'          => 'site-info-font',
                'label'       => esc_html__( 'Site Identity Font Family', 'bizsmart' ),
                'description' => esc_html__( 'Font family for site title and tagline. Defaults to Poppins', 'bizsmart' ),
                'default'     => 'font-11',
                'type'        => 'select',
                'choices'     => BizSmart_Theme::get_font_family(),
            ),
            array(
                'id'      => 'body-font',
                'label'   =>  esc_html__( 'Body Font Family.', 'bizsmart' ),
                'description' => esc_html__( 'Defaults to Poppins.', 'bizsmart' ),
                'default' => 'font-11',
                'type'    => 'select',
                'choices' => BizSmart_Theme::get_font_family(),
            ),
            array(
                'id'          => 'heading-font',
                'label'       =>  esc_html__( 'Headings Font Family.', 'bizsmart' ),
                'description' =>  esc_html__( 'h1 to h6. Defaults to Poppins.', 'bizsmart' ),
                'default'     => 'font-11',
                'type'        => 'select',
                'choices'     => BizSmart_Theme::get_font_family(),
            ),
            array(
                'id'          => 'body-font-size',
                'label'       => esc_html__( 'Body Font Size.', 'bizsmart' ),
                'description' => $message . ' ' . esc_html__( 'Defaults to 15px.', 'bizsmart' ),
                'type'        => 'bizsmart-slider',
                'default' => array(
                    'desktop' => 15,
                    'tablet'  => 15,
                    'mobile'  => 15,
                ),
                'input_attrs' =>  array(
                    'min'   => 1,
                    'max'   => 40,
                    'step'  => 1,
                ),
            ),
            array(
                'id'          => 'post-title-size',
                'label'       => esc_html__( 'Post Title Font Size', 'bizsmart' ),
                'description' => $message . ' ' . esc_html__( 'Defaults to 21px.' , 'bizsmart' ),
                'default' => array(
                    'desktop' => 21,
                    'tablet'  => 21,
                    'mobile'  => 21,
                ),
                'input_attrs' =>  array(
                    'min'   => 1,
                    'max'   => 60,
                    'step'  => 1,
                ),
                'type' => 'bizsmart-slider',
            ),
            array(
                'id'          => 'primary-menu-font-size',
                'label'       => esc_html__( 'Primary Menu Font Size', 'bizsmart' ),
                'description' => $message . ' ' . esc_html( 'Defaults to 15px.', 'bizsmart' ),
                'type'        => 'bizsmart-slider',
                'default' => array(
                    'desktop' => 15,
                    'tablet'  => 15,
                    'mobile'  => 15,
                ),
                'input_attrs' =>  array(
                    'min'   => 1,
                    'max'   => 40,
                    'step'  => 1,
                ),
            ),
            array(
                'id'          => 'widget-title-font-size',
                'label'       => esc_html__( 'Widget Title Font Size', 'bizsmart' ),
                'description' => $message . ' ' . esc_html( 'Defaults to 18px.', 'bizsmart' ),
                'type'        => 'bizsmart-slider',
                'default' => array(
                    'desktop' => 18,
                    'tablet'  => 18,
                    'mobile'  => 18,
                ),
                'input_attrs' =>  array(
                    'min'   => 1,
                    'max'   => 60,
                    'step'  => 1,
                ),
            ),
            array(
                'id'          => 'widget-content-font-size',
                'label'       => esc_html__( 'Widget Content Font Size', 'bizsmart' ),
                'description' => $message . ' ' . esc_html( 'Defaults to 16px.', 'bizsmart' ),
                'type'        => 'bizsmart-slider',
                'default' => array(
                    'desktop' => 16,
                    'tablet'  => 16,
                    'mobile'  => 16,
                ),
                'input_attrs' =>  array(
                    'min'   => 1,
                    'max'   => 40,
                    'step'  => 1,
                ),
            ),
        )
    ));
}
add_action( 'init', 'bizsmart_typography_options' );
<?php
/** 
 * Customizer Control: bizsmart-category-dropdown
 *
 * @since 1.0.0
 * @package BizSmart WordPress Theme
 */

# Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( class_exists( 'WP_Customize_Control' ) ) {
    class BizSmart_Category_Dropdown extends WP_Customize_Control {
        /**
         * Declare the control type.
         *
         * @access public
         * @var string
         */
        public $type = 'bizsmart-category-dropdown';

        /**
         * Function to  render the content on the theme customizer page
         *
         * @access public
         * @since 1.0.0
         *
         * @param null
         * @return void
         * @package BizSmart WordPress Theme
         *
         */
        public function render_content() {
            $dropdown_categories = wp_dropdown_categories(
                array(
                    'name' => $this->id,
                    'show_option_all'  => esc_html__( 'All', 'bizsmart' ),
                    'echo'              => 0,
                    'order'             => 'DESC',
                    'selected'          => $this->value()
                )
            );
            $dropdown_final = str_replace( '<select', '<select ' . $this->get_link(), $dropdown_categories );
            printf(
                '<label>
                    <span class="customize-control-title">%s</span>
                    <span class="customize-control-description">%s</span>
                    %s
                </label>',
                $this->label,
                $this->description,
                $dropdown_final
            );
        }
    }
}

BizSmart_Customizer::add_custom_control( array(
    'type'     => 'bizsmart-category-dropdown',
    'class'    => 'BizSmart_Category_Dropdown',
    'sanitize' =>  'absint',
    'register_control_type' => false
));
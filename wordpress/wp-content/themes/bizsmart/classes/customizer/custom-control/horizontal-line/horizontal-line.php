<?php
/**
*
* A Custom control for post dropdown
*
* @since 1.0.0
*
* @package BizSmart WordPress theme
*
* @uses  Class WP_Customize_Control
* 
*/
if ( class_exists( 'WP_Customize_Control' ) ) :

	class BizSmart_Horizontal_Line extends WP_Customize_Control {

		public $type = 'bizsmart-horizontal-line';

		/**
		*    
		* Adds the horizontal line
		* @since  1.0.0
		* @access public
		* @return void   
		*  
		* @package BizSmart WordPress Theme
		*/ 
		public function render_content() { ?>
			<style>
				hr{
					border-top: 7px solid #c1c1c1;
					border-bottom: 0;
				}
				.bizsmart-horizontal-line span.customize-control-title{
					margin-top: -7px;
					font-weight: 500;
					background: #2271b1;
					color: #ffffff;
					text-align: center;
				}
			</style>
			<div class="bizsmart-horizontal-line">
				<hr>
				<span class="customize-control-title"><?php echo esc_html( $this->label ) ?></span>
				<span class="description customize-control-description"><?php echo esc_html( $this->description ) ?></span>
			</div>
		<?php }

	}

endif;

BizSmart_Customizer::add_custom_control( array(
    'type'     => 'bizsmart-horizontal-line',
    'class'    => 'BizSmart_Horizontal_Line',
    'sanitize' => false,
    'register_control_type' => false
));
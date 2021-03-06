<?php
/**
 * Customizer Control: bizsmart-icon.
 *
 * @since 1.0.0
 *
 * @package BizSmart WordPress theme
 */

# Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'WP_Customize_Control' ) ) {
	class BizSmart_Customizer_Icon_Select_Control extends WP_Customize_Control {

		/**
		 * The control type.
		 *
		 * @since  1.0.0
		 * @access public
		 * @var    string
		 *
		 * @package BizSmart WordPress Theme
		 */
		public $type = 'bizsmart-icon';

		/**
		 * Enqueue control related scripts/styles.
		 *
		 * @since  1.0.0
		 * @access public
		 *
		 * @package BizSmart WordPress Theme
		 */
		public function enqueue() {

			wp_register_style( 'font-awesome', 
				BizSmart_Helper::get_theme_uri( 'assets/css/vendor/font-awesome/css/font-awesome.css' ), 
				array(), '4.7.0' 
			);
			wp_enqueue_style( 'font-awesome' );
		}

		/**
		 * Refresh the parameters passed to the JavaScript via JSON.
		 *
		 * @see WP_Customize_Control::to_json()
		 *
		 * @since  1.0.0
		 * @access public
		 *
		 * @package BizSmart WordPress Theme
		 */
		public function to_json() {
			parent::to_json();

			if ( isset( $this->default ) ) {
				$this->json['default'] = $this->default;
			} else {
				$this->json['default'] = $this->setting->default;
			}
			$this->json['value']       = $this->value();
			$this->json['choices']     = $this->choices;
			$this->json['link']        = $this->get_link();
			$this->json['id']          = $this->id;

		}

		/**
		 * An Underscore (JS) template for this control's content (but not its container).
		 *
		 * Class variables for this control class are available in the `data` JS object;
		 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
		 *
		 * @access protected
		 * @since 1.0.0
		 *
		 * @package BizSmart WordPress Theme
		 */
		protected function content_template() {
			?>
			<label class="customizer-text">
				<# if ( data.label ) { #>
					<span class="customize-control-title">{{{ data.label }}}</span>
				<# } #>
				<# if ( data.description ) { #>
					<span class="description customize-control-description">{{{ data.description }}}</span>
				<# } #>
			</label>
			<div id="input_{{ data.id }}" class="bizsmart-icon-select clr">
				<# _.each( data.choices, function( label, choice ) { #>
					<label>
						<input class="bizsmart-icon-select-input" type="radio" value="{{ choice }}" name="_customize-bizsmart-icon-select-{{ data.id }}" {{{ data.link }}}<# if ( data.value === choice ) { #> checked<# } #> />
						<span class="bizsmart-icon-select-label"><i class="{{ label }}"></i></span>
					</label>
				<# } ) #>
			</div>
			<?php
		}
	}
}

BizSmart_Customizer::add_custom_control( array(
    'type'     => 'bizsmart-icon',
    'class'    => 'BizSmart_Customizer_Icon_Select_Control',
    'sanitize' =>  array( 'BizSmart_Customizer', 'sanitize_choice' )
));
<?php
/**
 * Template part for displaying inner banner in pages
 *
 * @since 1.0.0
 * 
 * @package BizSmart WordPress Theme
 */
?>
<div class="<?php echo esc_attr( BizSmart_Helper::get_inner_banner_class() ); ?>" <?php BizSmart_Helper::the_header_image(); ?>> 
	<div class="container">
		<?php
			BizSmart_Helper::the_inner_banner();
			BizSmart_Helper::the_breadcrumb();
		?>
	</div>
</div>

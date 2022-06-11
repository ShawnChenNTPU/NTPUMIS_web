<?php
// defaults
$vars = array(
	'auth_url' => '',
	'token'    => '',
);
/** @var array $template_vars */
foreach ( $template_vars as $key => $val ) {
	$vars[ $key ] = $val;
}
?>
<div class="integration-header">
	<h3 class="sui-box-title" id="dialogTitle2"></h3>
	<p class="" aria-label="Loading content">
		<i class="sui-icon-loader sui-loading" aria-hidden="true"></i>
	</p>
	<p><?php esc_html_e( 'We are waiting for authorization from Google...', 'forminator' ); ?></p>
</div>
<div class="sui-block-content-center">
	<a href="<?php echo esc_attr( $vars['auth_url'] ); ?>" target="_blank" class="sui-button"><?php esc_html_e( 'Retry', 'forminator' ); ?></a>
</div>


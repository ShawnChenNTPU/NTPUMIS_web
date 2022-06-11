<?php
/**
 * Content for header topbar
 *
 * @since 1.0.0
 *
 * @package BizSmart WordPress Theme
 */ 

$contact = bizsmart_get( 'contact-text' );
$start = strpos( $contact, '{' );
$end = strpos( $contact, '}' );
$final_text = str_replace( array( '{', '}' ), '', $contact );
$number = false;
if( $start && $end ){
	for( $i = $start + 1 ; $i <= $end -1 ; $i++ ){
		$number .= substr( $contact, $i, 1 );
	}
}?>
 <div class="bizsmart-topbar-wrapper">
 	<div class="container bizsmart-topbar-inner">
	 	<div class="bizsmart-topbar-left">
	 		<?php if( '' != bizsmart_get( 'availability-text' ) ){ ?>
	 			<p>
	 				<i class="fa fa-clock-o" aria-hidden="true"></i>
	 				<?php echo bizsmart_get( 'availability-text' ); ?>
	 			</p>
	 		<?php } ?>
	 	</div>
	 	<div class="bizsmart-topbar-right">
	 		<?php if( '' != $contact ){ ?>
	 			<p>
	 				<a href="<?php echo esc_attr( $number ? 'tel:' . $number : '' ); ?>">	 					
		 				<i class="fa fa-mobile" aria-hidden="true"></i>
		 				<?php echo $final_text; ?>
	 				</a>
	 			</p>
	 		<?php } ?>
	 	</div>
	 </div>
 </div>
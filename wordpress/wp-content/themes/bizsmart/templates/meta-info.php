<?php
/**
 * Displays the meta information
 *
 * @since 1.0.0
 *
 * @package Guternbiz WordPress Theme
 */?>

<?php if ( 'post' === get_post_type() ) : ?>
	<?php 
		$author   = bizsmart_get( 'post-author' );
		$date     = bizsmart_get( 'post-date' );
	if( $author || $date ) : ?>
		<div class="entry-meta 
			<?php 
				if( is_single() ){
					echo esc_attr( 'single' );
				} 
			?>"
		>
			<?php BizSmart_Helper::get_author_image(); ?>
			<?php if( $author || $date ) : ?>
				<div class="author-info">
					<?php
						BizSmart_Helper::the_date();			
						BizSmart_Helper::posted_by();
					?>
				</div>
			<?php endif; ?>
		</div>	
	<?php endif; ?>
<?php endif; ?>
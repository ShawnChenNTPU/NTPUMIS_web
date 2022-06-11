<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @since 1.0.0
 *
 * @package BizSmart WordPress Theme
 */

if ( is_active_sidebar( 'bizsmart_sidebar' ) ) { ?>
	<aside id="secondary" class="widget-area">
		<?php 
			$sidebar = apply_filters( BizSmart_Theme::fn_prefix( 'sidebar' ), 'bizsmart_sidebar' );
			dynamic_sidebar( $sidebar ); ?>
	</aside><!-- #secondary -->
<?php }else{ ?>
    <aside id="secondary" class="widget-area">	    	
       <?php 
	       BizSmart_Theme::the_default_search();
	       BizSmart_Theme::the_default_recent_post();
	       BizSmart_Theme::the_default_archive();
       ?>
    </aside>
<?php }?>


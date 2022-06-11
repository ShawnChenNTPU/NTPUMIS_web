<?php
/**
 * Content for footer widget
 *
 * @since 1.0.0
 *
 * @package BizSmart WordPress Theme
 */
 if( !apply_filters( BizSmart_Helper::fn_prefix( 'disable_footer_widget' ), false ) ): ?>
    <footer <?php BizSmart_Helper::schema_body( 'footer' ); ?> class="footer-top-section">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                 	<?php
                    if( is_active_sidebar( BizSmart_Helper::fn_prefix( 'footer_sidebar_1' ) ) ||
                        is_active_sidebar( BizSmart_Helper::fn_prefix( 'footer_sidebar_2' ) ) ||
                        is_active_sidebar( BizSmart_Helper::fn_prefix( 'footer_sidebar_3' ) ) ||
                        is_active_sidebar( BizSmart_Helper::fn_prefix( 'footer_sidebar_4' ) ) ){
                            $num_footer = bizsmart_get( 'layout-footer' );
                            for( $i = 1; $i <= $num_footer ; $i++ ){
                                if ( is_active_sidebar( BizSmart_Helper::fn_prefix( 'footer_sidebar' ) . '_' . $i ) ){ ?>
                                    <aside class="col footer-widget-wrapper py-5">
                                        <?php dynamic_sidebar( BizSmart_Helper::fn_prefix( 'footer_sidebar' ) . '_' . $i ); ?>
                                    </aside>
                                <?php }
                            }
                    }else{?>
                        <aside class="col footer-widget-wrapper py-5">
                            <?php BizSmart_Theme::the_default_search(); ?>
                        </aside>
                        <aside class="col footer-widget-wrapper py-5">
                            <?php BizSmart_Theme::the_default_recent_post(); ?>
                        </aside>
                        <aside class="col footer-widget-wrapper py-5">
                            <?php BizSmart_Theme::the_default_archive(); ?>
                        </aside>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php $footer_menu = BizSmart_Helper::get_menu( 'footer-menu', false );
            if( $footer_menu ){ ?>
                <div class="bizsmart-footer-menu-wrapper">
                    <?php BizSmart_Helper::get_menu( 'footer-menu', true ); ?>
                </div>
        <?php } ?>
    </footer>
<?php endif;

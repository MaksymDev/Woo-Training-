<?php

// Conditionally load JS on plugin setting page only
function ad_manager_admin_scripts( $hook ) {

    wp_register_script(
        'ad-manager-admin',
        WPPLUGIN_URL . 'admin/js/ad-manager-admin.js',
        ['jquery'],
        time()
    );

    wp_localize_script( 'ad-manager-admin', 'ad-manager', [
        'hook' => $hook
    ]);

    if( 'toplevel_page_ad-manager' == $hook ) {
        wp_enqueue_script( 'ad-manager-admin' );
    }

}
add_action( 'admin_enqueue_scripts', 'ad_manager_admin_scripts' );

// Conditionally load JS on single post pages
function ad_manager_frontend_scripts() {

    wp_register_script(
        'ad-manager-frontend',
        WPPLUGIN_URL . 'frontend/js/ad-manager-frontend.js',
        [],
        time()
    );

    if( is_single() ) {
        wp_enqueue_script( 'ad-manager-frontend' );
    }
}
add_action( 'wp_enqueue_scripts', 'ad_manager_frontend_scripts', 100 );
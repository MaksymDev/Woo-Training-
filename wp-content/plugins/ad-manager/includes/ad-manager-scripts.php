<?php

// Conditionally load JS on plugin setting page only
function admanager_admin_scripts( $hook ) {

    wp_register_script(
        'admanager-admin',
        WPPLUGIN_URL . 'admin/js/ad-manager-admin.js',
        ['jquery'],
        time()
    );

    wp_localize_script( 'admanager-admin', 'admanager', [
        'hook' => $hook
    ]);

    if( 'toplevel_page_admanager' == $hook ) {
        wp_enqueue_script( 'admanager-admin' );
    }

}
add_action( 'admin_enqueue_scripts', 'admanager_admin_scripts' );

// Conditionally load JS on single post pages
function admanager_frontend_scripts() {

    wp_register_script(
        'admng-frontend',
        WPPLUGIN_URL . 'frontend/js/admanager-frontend.js',
        [],
        time()
    );

    if( is_single() ) {
        wp_enqueue_script( 'admanager-frontend' );
    }
}
add_action( 'wp_enqueue_scripts', 'admanager_frontend_scripts', 100 );
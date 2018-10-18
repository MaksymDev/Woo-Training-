<?php

//Load JS on all admin pages
function admanager_admin_styles( $hook ) {

    wp_register_style(
        'admanager-admin',
        WPPLUGIN_URL . 'admin/css/ad-manager-admin.css',
        [],
        time()
    );

    if( 'toplevel_page_admanager'  == $hook ) {
        wp_enqueue_style( 'admanager-admin');
    }

}
add_action( 'admin_enqueue_scripts', 'admanager_admin_styles');

// Load CSS on the frontend
function admanager_frontend_styles() {

    wp_register_style(
        'admng-frontend',
        WPPLUGIN_URL . 'frontend/css/admanager-frontend-styles.css',
        [],
        time()
    );

    if( is_single() ) {
        wp_enqueue_style( 'admanager-frontend' );
    }

}
add_action( 'wp_enqueue_scripts', 'admanager_fronted_styles', 100 );
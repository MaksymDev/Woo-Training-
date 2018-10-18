<?php

// Load CSS on all admin pages
function ad_manager_admin_styles() {

    wp_enqueue_style(
        'ad-manager-admin',
        WPPLUGIN_URL . 'admin/css/ad-manager-admin.css',
        [],
        time()
        );
}
add_action( 'admin_enqueue_scripts', 'ad_manager_admin_styles' );


// Load CSS on the frontend
function ad_manager_frontend_styles(){

    wp_enqueue_style(
        'ad-manager-frontend',
        WPPLUGIN_URL . 'frontend/css/ad-manager-frontend-styles.css',
        [],
        time()
    );
}
add_action( 'wp_enqueue_scripts', 'ad_manager_frontend_styles', 100 );
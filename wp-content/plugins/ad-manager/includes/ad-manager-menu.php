<?php

function admanagment_setting_page()
{
    add_menu_page(
        'Plugin Name',
        'Ad Settings',
        'manage_options',
        'admanagment',
        'admanagment_setting_page_markup',
        'dashicons-admin-settings',
        100
    );
}
add_action( 'admin_menu', 'admanagment_setting_page' );

function admanagment_setting_page_markup(){
    if( !current_user_can('manage_options') ) {
        return;
    }
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
        <p><?php esc_html_e( 'Some content.', 'admanagment' ); ?></p>
    </div>
    <?php
}
?>
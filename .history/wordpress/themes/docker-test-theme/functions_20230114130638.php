<?php

add_action( 'after_setup_theme', function() {
    add_action('admin_footer', function() {
        echo 'Hello from Docker theme!';
    });
} );

add_action('admin_menu', function () {
    add_submenu_page('edit.php',
        __('Error Logs', 'mgt_core'),
        __('Error Logs', 'mgt_core'),
        'manage_options',
        'logs',
        array( __CLASS__, 'logs_data_html'));
});
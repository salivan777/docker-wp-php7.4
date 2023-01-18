<?php 


add_action( 'after_setup_theme', function() {
    add_action('admin_footer', function() {
        echo 'Hello from Docker theme!';
    });
} );
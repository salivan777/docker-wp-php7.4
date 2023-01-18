<?php 
add_action( 'plugi', function() {
    add_action('admin_footer', function() {
        echo 'Hello from Docker theme!';
    });
} );
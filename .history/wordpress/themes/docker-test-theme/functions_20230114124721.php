<?php 
add_action( 'after_setup_theme', function() {
    add_action('admin_footer', 'action_admin_footer' )
}

/**
 * Prints scripts or data before the default footer scripts.
 *
 * @param string $data The data to print.
 */
function action_admin_footer(string $data) : void {
} );
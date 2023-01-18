<?php
/**
 * Plugin Name: Task Management Plugin
 * Description: The core plugin for Task Management Theme
 * Author:      Starchenko Irina
 * Version:     1.3.2
 *
 * Text Domain: mgt_core
 * Domain Path: /languages
 * Requires at least: 6.0
 * Requires PHP: 7.4
 *
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html

 */ 



add_action( 'plugins_loaded', function() {
    add_action('admin_footer', function() {
        echo 'Hello from Docker plugin!';
    });
} );
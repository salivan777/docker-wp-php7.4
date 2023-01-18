<?php
/**
 * Plugin Name: Docker Test Plugin
 * Description: This is a plugin from docker container
 * Author:      Starchenko Irina
 * Version:     1.0
 *
 * Text Domain: mgt_core
 * Domain Path: /languages
 * Requires at least: 6.1.1
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
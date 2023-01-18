<?php 

add_action('admin_menu', function(){
	add_menu_page( 'Docker Plugin Page', 
    'Docker Plugin Page', 
    'manage_options', 
    'site-options', 
    'page_plugin_settings', 
    '',
    5 );
} );

function page_plugin_settings(){
	?>
	<div class="wrap">
		<h2><?php echo get_admin_page_title() ?></h2>
        <p>Hello from Docker Plugin!</p>
	</div>
	<?php

}
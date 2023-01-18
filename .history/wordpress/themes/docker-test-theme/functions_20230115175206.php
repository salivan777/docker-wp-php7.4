<?php

add_action('admin_menu', function(){
	add_menu_page( 'Docker Theme Page', 
    'Docker Theme Page', 
    'manage_options', 
    'docker-theme-page', 
    'page_theme_settings', 
    '',
    2 );
} );

function page_theme_settings(){
	?>
	<div class="wrap">
		<h2><?php echo get_admin_page_title() ?></h2>
        <p>Hello from Docker Theme!</p>
	</div>
	<?php

}
?>
<html
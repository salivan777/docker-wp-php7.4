<?php

add_action('admin_menu', function(){
	add_menu_page( 'Docker Theme Page', 
    'Docker Theme Page', 
    'manage_options', 
    'site-options', 
    'page_settings', 
    '',
    4 );
} );

function page_settings(){
	?>
	<div class="wrap">
		<h2><?php echo get_admin_page_title() ?></h2>

		<?php
		// settings_errors() не срабатывает автоматом на страницах отличных от опций
		if( get_current_screen()->parent_base !== 'options-general' )
			settings_errors('название_опции');
		?>

		<form action="options.php" method="POST">
			<?php
				settings_fields("opt_group");     // скрытые защитные поля
				do_settings_sections("opt_page"); // секции с настройками (опциями).
				submit_button();
			?>
		</form>
	</div>
	<?php

}
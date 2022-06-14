<?php

// Register menus
function powercellution_register_nav_menu(){
	register_nav_menu('header_menu', 'Header Menu');
}
add_action('after_setup_theme', 'powercellution_register_nav_menu');

?>

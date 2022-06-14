<?php
/**
 * PowerCellution functions and definitions
 *
 * @package PowerCellution
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

$powercellution_inc_dir = get_template_directory() . '/inc';

// Array of files to include
$powercellution_includes = array(
	'/setup.php',
	'/widgets.php',
	'/menus.php',
	'/blocks.php',
	'/menu.php',
	'/sidebar.php',
	'/post_types.php',
	'/gutenberg.php',
	'/past-events.php',
);

// Include files
foreach($powercellution_includes as $file){
	require_once $powercellution_inc_dir . $file;
}

?>

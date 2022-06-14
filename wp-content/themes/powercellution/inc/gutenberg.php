<?php

function my_dynamic_editor_styles()
{
wp_register_style( 'dummy-handle', false );
wp_enqueue_style( 'dummy-handle' );
wp_add_inline_style( 'dummy-handle', '.marjini img {  }' );
}

add_action( 'enqueue_block_editor_assets', 'my_dynamic_editor_styles', 100 );

//'.get_theme_mod( 'text_colour', '#00FF00' ).'

// Disable for certain pages.
//add_filter( 'use_block_editor_for_post', 'disable_gutenberg', 10, 2 );
//
//function disable_gutenberg( $can_edit, $post ) {
//	if( $post->post_type == 'page' && $post->ID == '223' ) {
//		return true;
//	}
//	return false;
//}


?>

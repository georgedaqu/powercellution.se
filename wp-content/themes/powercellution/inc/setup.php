<?php

// Theme support
add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Remove Wordpres Emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// Remove default image sizes
add_image_size('thumbnail', false);
add_image_size('medium', false);
add_image_size('medium_large', false);
add_image_size('large', false);
remove_image_size('1536x1536');
remove_image_size('2048x2048');
// Add custom image sizes
add_image_size('hero-image', 1920, 1080, true);
add_image_size('featured-story-image', 1920, 1000, true);
add_image_size('key-features-image', 1920, 480, true);
add_image_size('banner-background-image', 1920, 410, true);
add_image_size('bullet-points-background-image', 1920, 410, true);
add_image_size('grid-images', 1460, 1400, true);
add_image_size('single-image', 1460, 820, true);
add_image_size('image-text-image', 960, 900, true);
add_image_size('configuration-list-image', 970, 650, true);
add_image_size('intro-desc-image', 700, 700, true);
add_image_size('archive-products-image', 700, 700, true);
add_image_size('stories-listing-image', 700, 350, true);
add_image_size('sub-menu-images', 380, 480, true);
add_image_size('video-post-archive-images', 325, 245, true);
add_image_size('contact-person-image', 220, 330, true);

// Excerpt length
function powercellution_custom_excerpt_length($length){
	return 15;
}
add_filter('excerpt_length', 'powercellution_custom_excerpt_length', 999);
function powercellution_excerpt_more($more){
	return '';
}
add_filter('excerpt_more', 'powercellution_excerpt_more');

// Pagination
function pagination_bar($custom_query){
	$total_pages = $custom_query->max_num_pages;
	$big = 999999999;
	if ($total_pages > 1){
		$current_page = max(1, get_query_var('paged'));
		echo paginate_links(array(
			'base'			=> str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format'		=> '?paged=%#%',
			'current'		=> $current_page,
			'total'			=> $total_pages,
			'prev_text'		=> __('<em class="fal fa-angle-left"></em>'),
			'next_text'		=> __('<em class="fal fa-angle-right"></em>')
		));
	}
}

// Options page
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

?>

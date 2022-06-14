<?php

// Events post type
// function events_post_type(){
// 	register_post_type('events', [
// 		'label'  => null,
// 		'labels' => [
// 			'name'				=> 'Events',
// 			'singular_name'		=> 'Event',
// 			'add_new'			=> 'Add Event',
// 			'add_new_item'		=> 'Add Event',
// 			'edit_item'			=> 'Edit Event',
// 			'new_item'			=> 'New Event',
// 			'view_item'			=> 'Watch Event',
// 			'search_items'		=> 'Search Event',
// 			'not_found'			=> 'Not found',
// 		],
// 		'description'		=> 'Post for Event',
// 		'public'			=> true,
// 		'show_in_menu'		=> true,
// 		'show_in_rest'		=> true,
// 		'rest_base'			=> true,
// 		'menu_position'		=> true,
// 		'menu_icon'			=> 'dashicons-megaphone',
// 		'hierarchical'		=> true,
// 		'supports'			=> ['title', 'thumbnail', 'editor'],
// 		'taxonomies'		=> [],
// 		'has_archive'		=> true,
// 		'rewrite'			=> true,
// 		'query_var'			=> true,
// 	]);
// }
// add_action('init', 'events_post_type');

// custom post types
 function custom_post_types(){
	register_post_type('segments', [
	    'label'  => null,
	    'labels' => [
	        'name'				=> 'Segments',
	        'singular_name'		=> 'segment',
	        'add_new'			=> 'Add segment',
	        'add_new_item'		=> 'Add segment',
	        'edit_item'			=> 'Edit segment',
	        'new_item'			=> 'New segment',
	        'view_item'			=> 'Watch segment',
	        'search_items'		=> 'Search segment',
	        'not_found'			=> 'Not found',
	    ],
	    'description'		=> 'Post for segment',
	    'public'			=> true,
	    'has_archive'		=> true,
	    'hierarchical'		=> false,
	    'menu_icon'			=> 'dashicons-schedule',
	    'show_in_rest'		=> true,
	    'supports'			=> ['title', 'thumbnail', 'editor'],
	]);

	 register_post_type('events', [
		 'label'  => null,
		 'labels' => [
			 'name'				=> 'Events',
			 'singular_name'	=> 'event',
			 'add_new'			=> 'Add event',
			 'add_new_item'		=> 'Add event',
			 'edit_item'		=> 'Edit event',
			 'new_item'			=> 'New event',
			 'view_item'		=> 'Watch event',
			 'search_items'		=> 'Search event',
			 'not_found'		=> 'Not found',
		 ],
		 'description'		=> 'Post for event',
		 'public'			=> true,
		 'has_archive'		=> true,
		 'hierarchical'		=> false,
		 'menu_icon'		=> 'dashicons-calendar',
		 'show_in_rest'		=> true,
		 'supports'			=> ['title', 'thumbnail', 'editor'],
	 ]);

	register_post_type('services', [
		 'label'  => null,
		 'labels' => [
			 'name'				=> 'Services',
			 'singular_name'	=> 'services',
			 'add_new'			=> 'Add services',
			 'add_new_item'		=> 'Add services',
			 'edit_item'		=> 'Edit services',
			 'new_item'			=> 'New services',
			 'view_item'		=> 'Watch services',
			 'search_items'		=> 'Search services',
			 'not_found'		=> 'Not found',
		 ],
		 'description'		=> 'Post for services',
		 'public'			=> true,
		 'has_archive'		=> true,
		 'hierarchical'		=> true,
		 'menu_icon'		=> 'dashicons-insert',
		 'show_in_rest'		=> true,
		 'supports'			=> ['title', 'thumbnail', 'editor'],
	]);

	 register_post_type('video', [
		 'label'  => null,
		 'labels' => [
			 'name'				=> 'Videos',
			 'singular_name'	=> 'video',
			 'add_new'			=> 'Add video',
			 'add_new_item'		=> 'Add video',
			 'edit_item'		=> 'Edit video',
			 'new_item'			=> 'New video',
			 'view_item'		=> 'Watch video',
			 'search_items'		=> 'Search video',
			 'not_found'		=> 'Not found',
		 ],
		 'description'		=> 'Post for video',
		 'public'			=> true,
		 'has_archive'		=> true,
		 'hierarchical'		=> true,
		 'menu_icon'		=> 'dashicons-format-video',
		 'show_in_rest'		=> true,
		 'supports'			=> ['title', 'thumbnail', 'editor'],
	 ]);

	 register_post_type('product', [
		 'label'  => null,
		 'labels' => [
			 'name'				=> 'Products',
			 'singular_name'	=> 'product',
			 'add_new'			=> 'Add product',
			 'add_new_item'		=> 'Add product',
			 'edit_item'		=> 'Edit product',
			 'new_item'			=> 'New product',
			 'view_item'		=> 'Watch product',
			 'search_items'		=> 'Search product',
			 'not_found'		=> 'Not found',
		 ],
		 'description'		=> 'Post for product',
		 'public'			=> true,
		 'has_archive'		=> true,
		 'hierarchical'		=> true,
		 'menu_icon'		=> 'dashicons-products',
		 'show_in_rest'		=> true,
		 'supports'			=> ['title', 'thumbnail', 'editor'],
	 ]);
 }
 add_action('init', 'custom_post_types');


function custom_taxonomy(){
	register_taxonomy('services-category', array('services'), array(
		'labels' 		=> array(
			'name'				=> 'Categories',
			'singular_name'		=> 'Category',
		),
		'public'		=> true,
		'hierarchical'	=> true,
		'show_in_rest'	=> true,
	));

	register_taxonomy('products-category', array('product'), array(
		'labels' 		=> array(
			'name'				=> 'Categories',
			'singular_name'		=> 'Category',
		),
		'public'		=> true,
		'hierarchical'	=> true,
		'show_in_rest'	=> true,
	));
}
add_action('init', 'custom_taxonomy');

?>

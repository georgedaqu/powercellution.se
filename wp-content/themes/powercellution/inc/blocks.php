<?php

// Block Css
function enqueue_foundation_in_admin() {
	$current_screen = get_current_screen();
	if ( method_exists( $current_screen, 'is_block_editor' ) && $current_screen->is_block_editor() ) {
		//Check if we're on a Gutenberg Page
		wp_enqueue_style( 'foundation', home_url() . '/wp-content/admin-style/css/gutenberg.min.css' );
	}
}
add_action( 'admin_enqueue_scripts', 'enqueue_foundation_in_admin' );

// Unregistered Block types
add_filter( 'allowed_block_types', 'all_allowed_block_types' );
function all_allowed_block_types( $allowed_blocks ) {
	return array(
		'core/paragraph',
		'core/heading',
		'core/list',
		'core/quote',
		'core/code',
		'core/block',
		'acf/hero',
		'acf/banner',
		'acf/block-icons',
		'acf/quote',
		'acf/bullet-points',
		'acf/button-section',
		'acf/contact-person',
		'acf/cover-image',
		'acf/grid-images',
		'acf/image-text',
		'acf/information-columns',
		'acf/information-icons',
		'acf/intro-desc',
		'acf/key-features',
		'acf/plain-text',
		'acf/process-steps',
		'acf/single-image',
		'acf/standalone-list',
		'acf/text-video',
		'acf/video',
		'acf/double-text',
		'acf/menu',
		'acf/featured-story',
		'acf/stories-listing',
		'acf/contact-info',
	);
}

add_action('acf/init', 'powercellution_acf_blocks_init');
function powercellution_acf_blocks_init(){
	if(function_exists('acf_register_block_type')){

		// Hero block type
		acf_register_block_type(array(
			'name' 				=> 'hero',
			'title' 			=> __('Hero'),
			'description' 		=> __('A custom hero block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/hero.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'hero', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Banner block type
		acf_register_block_type(array(
			'name' 				=> 'banner',
			'title' 			=> __('Banner'),
			'description' 		=> __('A custom banner block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/banner.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'banner', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Block Icons block type
		acf_register_block_type(array(
			'name' 				=> 'block-icons',
			'title' 			=> __('Block Icons'),
			'description' 		=> __('A custom block icons block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/block-icons.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'block-icons', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Quote Icons block type
		acf_register_block_type(array(
			'name' 				=> 'quote',
			'title' 			=> __('Quote'),
			'description' 		=> __('A custom quote block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/quote.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'quote', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Bullet Points Icons block type
		acf_register_block_type(array(
			'name' 				=> 'bullet-points',
			'title' 			=> __('Bullet Points'),
			'description' 		=> __('A custom bullet-points block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/bullet-points.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'bullet-points', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Button Section Points Icons block type
		acf_register_block_type(array(
			'name' 				=> 'button-section',
			'title' 			=> __('Button Section'),
			'description' 		=> __('A custom button-section block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/button-section.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'button-section', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Contact Person Points Icons block type
		acf_register_block_type(array(
			'name' 				=> 'contact-person',
			'title' 			=> __('Contact Person'),
			'description' 		=> __('A custom contact-person block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/contact-person.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'contact-person', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Cover Image Points Icons block type
		acf_register_block_type(array(
			'name' 				=> 'cover-image',
			'title' 			=> __('Cover Image'),
			'description' 		=> __('A custom cover-image block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/cover-image.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'cover-image', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Grid Images Points Icons block type
		acf_register_block_type(array(
			'name' 				=> 'grid-images',
			'title' 			=> __('Grid Images'),
			'description' 		=> __('A custom grid-images block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/grid-images.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'grid-images', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Image Text Points Icons block type
		acf_register_block_type(array(
			'name' 				=> 'image-text',
			'title' 			=> __('Image Text'),
			'description' 		=> __('A custom image-text block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/image-text.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'image-text', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Information Columns Points Icons block type
		acf_register_block_type(array(
			'name' 				=> 'information-columns',
			'title' 			=> __('Information Columns'),
			'description' 		=> __('A custom information-columns block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/information-columns.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'information-columns', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Information Icons Points Icons block type
		acf_register_block_type(array(
			'name' 				=> 'information-icons',
			'title' 			=> __('Information Icons'),
			'description' 		=> __('A custom information-icons block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/information-icons.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'information-icons', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Intro Desc Points Icons block type
		acf_register_block_type(array(
			'name' 				=> 'intro-desc',
			'title' 			=> __('Intro Desc'),
			'description' 		=> __('A custom intro-desc block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/intro-desc.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'intro-desc', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Key Features Points Icons block type
		acf_register_block_type(array(
			'name' 				=> 'key-features',
			'title' 			=> __('Key Features'),
			'description' 		=> __('A custom key-features block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/key-features.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'key-features', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Plain text block type
		acf_register_block_type(array(
			'name' 				=> 'plain-text',
			'title' 			=> __('Plain Text'),
			'description' 		=> __('A custom plain-text block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/plain-text.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'plain-text', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M21 8v12.993A1 1 0 0 1 20.007 22H3.993A.993.993 0 0 1 3 21.008V2.992C3 2.455 3.449 2 4.002 2h10.995L21 8zm-2 1h-5V4H5v16h14V9zM8 7h3v2H8V7zm0 4h8v2H8v-2zm0 4h8v2H8v-2z"/></svg>',
		));

		// Process Steps block type
		acf_register_block_type(array(
			'name' 				=> 'process-steps',
			'title' 			=> __('Process Steps'),
			'description' 		=> __('A custom process-steps block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/process-steps.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'process-steps', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Single Image block type
		acf_register_block_type(array(
			'name' 				=> 'single-image',
			'title' 			=> __('Single Image'),
			'description' 		=> __('A custom single-image block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/single-image.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'single-image', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Standalone List block type
		acf_register_block_type(array(
			'name' 				=> 'standalone-list',
			'title' 			=> __('Standalone List'),
			'description' 		=> __('A custom standalone-list block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/standalone-list.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'standalone-list', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Text Video block type
		acf_register_block_type(array(
			'name' 				=> 'text-video',
			'title' 			=> __('Text Video'),
			'description' 		=> __('A custom text-video block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/text-video.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'text-video', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Video block type
		acf_register_block_type(array(
			'name' 				=> 'video',
			'title' 			=> __('Video'),
			'description' 		=> __('A custom video block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/video.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'video', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Double Text block type
		acf_register_block_type(array(
			'name' 				=> 'double-text',
			'title' 			=> __('Double Text'),
			'description' 		=> __('A custom double-text block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/double-text.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'double-text', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Menu block type
		acf_register_block_type(array(
			'name' 				=> 'menu',
			'title' 			=> __('Menu'),
			'description' 		=> __('A custom menu block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/menu.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'double-text', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Featured Story block type
		acf_register_block_type(array(
			'name' 				=> 'featured-story',
			'title' 			=> __('Featured Story'),
			'description' 		=> __('A custom featured-story block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/featured-story.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'double-text', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Stories Listing block type
		acf_register_block_type(array(
			'name' 				=> 'stories-listing',
			'title' 			=> __('Stories Listing'),
			'description' 		=> __('A custom stories-listing block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/stories-listing.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'double-text', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

		// Contact Info block type
		acf_register_block_type(array(
			'name' 				=> 'contact-info',
			'title' 			=> __('Contact Info'),
			'description' 		=> __('A custom contact-info block.'),
			'mode'				=> 'preview',
			'example'  			=> array(
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			),
			'render_template' 	=> 'template-parts/blocks/contact-info.php',
			'category' 			=> 'layout',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'double-text', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Sora:wght@400;700&display=swap' );
			},
			'supports'			=> [
				'jsx' => true,
			],
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));
	}
}

?>

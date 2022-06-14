<?php

$parameters = get_field( 'parameters' );
$menu = get_field('menu');
$menu_size = get_field('menu_size');

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-menu-big.jpg"
		     alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="<?php echo ($menu_size == 'large') ? 'segments' : 'services small'; ?> trans-all-2 <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<?php
			wp_nav_menu( [
				'menu'           => $menu,
				'container'      => '',
			]);
		?>
	</section>
<?php endif; ?>

<?php

$parameters = get_field( 'parameters' );
$gallery = get_field('gallery');
$caption = get_field('caption');
$style = get_field('style');

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-grid-images.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="grid_images <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<div class="container">
			<div class="image_items <?php echo ($style) ? $style : ''; ?>">
				<?php foreach ($gallery as $image_array) : ?>
				<?php
					$image = $image_array['sizes']['grid-images'];
				?>
					<figure>
						<img src="<?php echo $image; ?>" alt="">
					</figure>
				<?php endforeach; ?>
			</div>
			<div class="caption"><?php echo $caption; ?></div>
		</div>
	</section>
<?php endif; ?>

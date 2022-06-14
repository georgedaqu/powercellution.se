<?php

$image_array = get_field('image');
$image 		 = $image_array['sizes']['hero-image'];
$parameters  = get_field( 'parameters' );

if ($block['data']['is_example']) :
	?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-cover-image.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="cover_image <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<div class="container">
			<figure>
				<img src="<?php echo $image; ?>" alt="">
			</figure>
		</div>
	</section>
<?php endif; ?>

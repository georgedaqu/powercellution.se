<?php

$parameters = get_field( 'parameters' );
$image_array = get_field('image');
$image = $image_array['sizes']['single-image'];

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-single-image.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="single_image <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<div class="container">
			<img src="<?php echo $image; ?>" alt="">
		</div>
	</section>
<?php endif; ?>

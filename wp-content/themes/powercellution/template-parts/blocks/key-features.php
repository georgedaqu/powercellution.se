<?php

$parameters = get_field( 'parameters' );
$caption = get_field('caption');
$image_array = get_field('background_image');
$image = $image_array['sizes']['key-features-image'];
$key_feature_items = get_field('key_features_item');

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-key-features.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="key_features <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<figure>
			<img src="<?php echo $image; ?>" alt="">
		</figure>
		<div class="container">
			<?php if ($caption) : ?>
				<h3><?php echo $caption; ?></h3>
			<?php endif; ?>
			<div class="key_feature_items">
				<ul>
					<?php foreach ($key_feature_items as $key_feature_item) : ?>
					<?php
						$title = $key_feature_item['title'];
						$description = $key_feature_item['description'];
					?>
						<li>
							<h2><?php echo $title; ?></h2>
							<div class="feature_desc"><?php echo $description; ?></div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</section>
<?php endif; ?>

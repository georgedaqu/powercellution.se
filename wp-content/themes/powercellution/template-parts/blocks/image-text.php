<?php

$parameters = get_field( 'parameters' );
$title = get_field('title');
$text = get_field('text');
$button = get_field('button');
$image_array = get_field('image');
$image = $image_array['sizes']['image-text-image'];
$image_reverse = get_field('image_reverse');
if($image_reverse) {
	$left = $image_reverse[0];
}

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-image-text.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="image_text trans-all-2 <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }}; echo ($left) ? $left : ''; ?>">
		<div class="image_text_texts">
			<h3><?php echo $title; ?></h3>
			<div class="text">
				<?php echo $text; ?>
			</div>
			<?php if ($button) : ?>
			<?php
				$button_link = $button['url'];
				$button_label = $button['title'];
				$button_target = $button['target'];
			?>
				<div class="more dark">
					<a href="<?php echo $button_link; ?>" title="<?php echo $button_label; ?>" target="<?php echo $button_target; ?>">
						<span><?php echo $button_label; ?></span>
						<em class="ri-arrow-right-line"></em>
					</a>
				</div>
			<?php endif; ?>
		</div>
		<figure>
			<img src="<?php echo $image; ?>" alt="">
		</figure>
	</section>
<?php endif; ?>

<?php

$parameters = get_field( 'parameters' );
$title = get_field('title');
$text = get_field('text');
$button = get_field('button');
$image_array = get_field('image');
$image = $image_array['sizes']['intro-desc-image'];
$classes = get_field('block_parameters');

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-intro-desc.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="intro_desc trans-all-2 <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?><?php if ( $classes ) { foreach ( $classes as $class ) { echo $class . ' '; }}?>">
		<div class="container">
			<div class="intro_desc_left">
				<h3><?php echo $title; ?></h3>
				<div class="text">
					<?php echo $text; ?>
				</div>
				<?php if ($button) : ?>
				<?php
					$button_link   = $button['url'];
					$button_label  = $button['title'];
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
		</div>
	</section>
<?php endif; ?>

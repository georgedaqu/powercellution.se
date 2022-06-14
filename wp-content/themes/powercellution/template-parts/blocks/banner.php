<?php

$background_image_array = get_field( 'background_image' );
if ( $background_image_array ) {
	$background_image = $background_image_array['sizes']['banner-background-image'];
}
$subtitle   = get_field( 'subtitle' );
$title      = get_field( 'title' );
$text       = get_field( 'text' );
$button     = get_field( 'button' );
$parameters = get_field( 'parameters' );

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-banner.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section
			 class="banner trans-all-2 <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<?php if ( $background_image ) : ?>
		<figure>
			<img src="<?php echo $background_image; ?>" alt="">
		</figure>
		<?php endif; ?>
		<div class="container">
			<?php if ( $subtitle ) : ?>
			<h3><?php echo $subtitle; ?></h3>
			<?php endif; ?>
			<h2><?php echo $title; ?></h2>
			<?php if ( $text ) : ?>
			<div class="text">
				<?php echo $text; ?>
			</div>
			<?php endif; ?>
			<?php if ( $button ) : ?>
			<?php
					$button_link   = $button['url'];
					$button_label  = $button['title'];
					$button_target = $button['target'];
					?>
			<div class="more">
				<a href="<?php echo $button_link; ?>" title="<?php echo $button_label; ?>"
				   target="<?php echo $button_target; ?>">
					<span><?php echo $button_label; ?></span>
					<em class="ri-arrow-right-line"></em>
				</a>
			</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>

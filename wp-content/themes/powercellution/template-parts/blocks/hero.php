<?php

	$id = 'hero-' . $block['id'];
	if ( ! empty( $block['anchor'] ) ) {
		$id = $block['anchor'];
	}
	$background_opacity = get_field( 'background_opacity' );
	$media_type         = get_field( 'media_type' );
	$image              = get_field( 'image' );
	$picture            = $image['url'];
	$video              = get_field( 'video' );
	$video_file         = $video['url'];
	$description        = get_field( 'description' );
	$classes          	= get_field('classes');
	$button            	= get_field( 'button' );
	$hero_title     	= get_field( 'hero_title' );
	$parameters 		= get_field('parameters');
	( ! empty( $hero_title ) ) ? $title = $hero_title : $title = get_the_title();

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-hero.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="hero trans-all-4 <?php if ($classes) { foreach ($classes as $class) { echo $class.' '; }} ?><?php if ($parameters) { foreach ($parameters as $parameter) { echo $parameter.' '; }} ?>">
		<?php if ( $media_type == 'image' ) : ?>
			<figure>
				<?php echo ( $background_opacity ) ? '<span class="' . $background_opacity . '"></span>' : ''; ?>
				<img src="<?php echo $picture; ?>" alt="">
			</figure>
		<?php elseif ( $media_type == 'video' ) : ?>
			<figure>
				<?php echo ( $background_opacity ) ? '<span class="' . $background_opacity . '"></span>' : ''; ?>
				<video autoplay muted loop playsinline>
					<source src="<?php echo $video_file; ?>" type="video/mp4">
				</video>
			</figure>
		<?php endif; ?>
		<div class="container">
			<h1><?php echo $title; ?></h1>
			<?php if ( $description ) : ?>
				<div class="text">
					<p><?php echo $description; ?></p>
				</div>
			<?php endif; ?>
			<?php if ( $button ) : ?>
			<?php
				$button_link  		= $button['url'];
				$button_label 		= $button['title'];
				$button_target		= $button['target'];
			?>
				<div class="more center">
					<a href="<?php echo $button_link; ?>" title="<?php echo $button_label; ?>" target="<?php echo $button_target; ?>">
						<span><?php echo $button_label; ?></span>
						<em class="ri-arrow-right-line"></em>
					</a>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>

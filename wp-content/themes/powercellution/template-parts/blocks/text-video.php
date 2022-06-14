<?php

$parameters = get_field( 'parameters' );
$title = get_field('title');
$text = get_field('text');
$video = get_field('video');

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-text-video.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="text_video <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<div class="container">
			<div class="text_video_left">
				<h3><?php echo $title; ?></h3>
				<div class="text_video_text">
					<?php echo $text; ?>
				</div>
			</div>
			<div class="text_video_right">
				<div class="video_wrap">
					<?php echo $video; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

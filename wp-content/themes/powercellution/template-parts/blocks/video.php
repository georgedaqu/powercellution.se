<?php

$parameters = get_field( 'parameters' );
$video = get_field('video');

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-video.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="video_wrap <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<div class="container">
			<figure>
				<?php echo $video ?>
			</figure>
		</div>
	</section>
<?php endif; ?>

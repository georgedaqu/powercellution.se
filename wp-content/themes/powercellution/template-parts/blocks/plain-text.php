<?php

$parameters = get_field( 'parameters' );
$text = get_field('text');
$center_text_array = get_field('center_text');
$center_text = $center_text_array[0];

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-plain-text.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="plain_text center <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }}; echo ($center_text) ? $center_text : ''; ?>">
		<div class="container">
			<?php echo $text; ?>
		</div>
	</section>
<?php endif; ?>

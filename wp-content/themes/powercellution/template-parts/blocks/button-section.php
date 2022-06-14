<?php

$title         = get_field( 'title' );
$button        = get_field( 'button' );
$button_link   = $button['url'];
$button_label  = $button['title'];
$button_target = $button['target'];
$parameters    = get_field( 'parameters' );

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-button-section.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="button_section trans-all-2 <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<div class="container">
			<h2><?php echo $title; ?></h2>
			<div class="download">
				<a href="<?php echo $button_link; ?>" title="Download" class="gilaki" target="<?php echo $button_target; ?>"><?php echo $button_label; ?></a>
			</div>
		</div>
	</section>
<?php endif; ?>

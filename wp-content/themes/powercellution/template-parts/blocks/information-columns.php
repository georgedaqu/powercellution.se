<?php

$parameters = get_field( 'parameters' );
$information_column_items = get_field('information_column_item');

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-information-columns.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="information_columns <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<div class="container">
			<?php foreach ($information_column_items as $information_column_item) : ?>
			<?php
				$title = $information_column_item['title'];
				$text = $information_column_item['text'];
			?>
				<div class="information_column">
					<h3><?php echo $title; ?></h3>
					<div class="text">
						<?php echo $text; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
<?php endif; ?>

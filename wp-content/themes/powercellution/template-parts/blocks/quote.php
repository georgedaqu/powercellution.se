<?php

$text       = get_field( 'text' );
$author     = get_field( 'author' );
$position   = get_field( 'position' );
$parameters = get_field( 'parameters' );

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-blockquote.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="quote <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<div class="container">
			<blockquote>
				<div class="desc">
					<?php echo $text; ?>
				</div>
				<div class="author">
					<strong><?php echo $author; ?></strong>
					<span><?php echo $position; ?></span>
				</div>
			</blockquote>
		</div>
	</section>
<?php endif; ?>

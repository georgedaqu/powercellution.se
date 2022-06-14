<?php
$block_icon_items = get_field( 'block_icon_item' );
$parameters       = get_field( 'parameters' );

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-block-icons.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section
			 class="block_icons <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<div class="container">
			<?php foreach ( $block_icon_items as $block_icon_item ) : ?>
			<?php
				$image_array = $block_icon_item['image'];
				$image       = $image_array['url'];
				$title       = $block_icon_item['title'];
				$text        = $block_icon_item['text'];
			?>
			<article>
				<figure>
					<img src="<?php echo $image; ?>" alt="">
				</figure>
				<h3><?php echo $title; ?></h3>
				<?php if ( $text ) : ?>
				<div class="text">
					<?php echo $text; ?>
				</div>
				<?php endif; ?>
			</article>
			<?php endforeach; ?>
		</div>
	</section>
<?php endif; ?>

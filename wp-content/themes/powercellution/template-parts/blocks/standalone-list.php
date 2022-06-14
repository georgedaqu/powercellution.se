<?php

$parameters = get_field( 'parameters' );
$standalone_list_items = get_field('standalone_list_item');
$count = 1;

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-standalone-list.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="stand_alone_list <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<div class="container">
			<div class="list_wrapper">
				<ul>
					<?php foreach ($standalone_list_items as $standalone_list_item) : ?>
					<?php
						$title = $standalone_list_item['title'];
						$text = $standalone_list_item['text'];
					?>
						<li>
							<h3><?php echo str_pad($count, 2, '0', STR_PAD_LEFT); ?></h3>
							<div class="list_content">
								<h4><?php echo $title; ?></h4>
								<?php echo $text; ?>
							</div>
						</li>
					<?php $count++; ?>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</section>
<?php endif; ?>

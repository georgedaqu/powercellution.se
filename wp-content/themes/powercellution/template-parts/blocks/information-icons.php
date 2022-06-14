<?php

$parameters = get_field( 'parameters' );
$caption = get_field('caption');
$information_icons_divisions = get_field('information_icons_division');

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-information-icons.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="information_icons <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<div class="container">
			<h2><?php echo $caption; ?></h2>
			<div class="information_icon_items">
				<?php foreach ($information_icons_divisions as $information_icons_division) : ?>
				<?php
					$title = $information_icons_division['title'];
					$division_items = $information_icons_division['division_items'];
				?>
				<h3><?php echo $title; ?></h3>
				<ul>
					<?php foreach ($division_items as $division_item) : ?>
					<?php
						$icon_array = $division_item['icon'];
						$icon = $icon_array['url'];
						$title = $division_item['title'];
					?>
						<li>
							<figure>
								<img src="<?php echo $icon; ?>" alt="">
							</figure>
							<h4><?php echo $title; ?></h4>
						</li>
					<?php endforeach; ?>
				</ul>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

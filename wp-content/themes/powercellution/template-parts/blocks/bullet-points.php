<?php

$image_array         = get_field( 'background_image' );
$image               = $image_array['sizes']['bullet-points-background-image'];
$caption             = get_field( 'caption' );
$bullet_points_items = get_field( 'bullet_points_item' );
$parameters          = get_field( 'parameters' );

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-bullet-points.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="bullet_points trans-all-2 <?php if ( $parameters ) { foreach ( $parameters as $parameter ) {echo $parameter . ' '; }} ?>">
		<img src="<?php echo $image; ?>" alt="">
		<div class="container">
			<?php if ( $caption ) : ?>
				<h3><?php echo $caption; ?></h3>
			<?php endif; ?>
			<div class="bullet_points_columns">
				<?php foreach ( $bullet_points_items as $bullet_points_item ) : ?>
					<?php
					$title         = $bullet_points_item['title'];
					$bullet_points = $bullet_points_item['bullet_point'];
					?>
					<div class="bullet_points_column">
						<h2><?php echo $title; ?></h2>
						<ul>
							<?php foreach ( $bullet_points as $bullet_point ) : ?>
								<?php
								$bullet_point_title = $bullet_point['title'];
								?>
								<li><?php echo $bullet_point_title; ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

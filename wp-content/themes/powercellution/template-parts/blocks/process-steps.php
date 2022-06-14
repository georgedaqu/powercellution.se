<?php

$parameters = get_field( 'parameters' );
$process_step_items = get_field('process_step_item');

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-progress-steps.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="proccess_steps <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<div class="container">
			<ul>
				<?php foreach ($process_step_items as $process_step_item) : ?>
				<?php $title = $process_step_item['title']; ?>
					<li><span><?php echo $title; ?></span></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>

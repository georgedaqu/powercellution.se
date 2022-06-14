<?php

$parameters           = get_field( 'parameters' );
$contact_person_items = get_field('contact_person_item');

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-persons.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="author_block <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<div class="container">
			<h3>For Stationary inquiries please contact:</h3>
			<div class="author_items">
				<?php foreach ($contact_person_items as $contact_person_item) : ?>
				<?php

					$image_array = $contact_person_item['image'];
					$image = $image_array['sizes']['contact-person-image'];
					$title = $contact_person_item['title'];
					$text = $contact_person_item['text'];

				?>
					<div class="author">
						<figure>
							<img src="<?php echo $image; ?>" alt="">
						</figure>
						<div class="author_texts">
							<h4><?php echo $title; ?></h4>
							<?php if ($text) : ?>
								<?php echo $text; ?>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php

$story = get_field('featured_story');
$title = get_the_title($story->ID);
$description_intro = get_field('description_intro', $story->ID);
$image = get_the_post_thumbnail_url($story->ID, 'featured-story-image');
$link = get_the_permalink($story->ID);
$parameters = get_field('parameters');

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-featured-story.jpg"
		     alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="featured_story trans-all-2 <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<figure>
			<img src="<?php echo $image; ?>" alt="">
		</figure>
		<div class="container">
			<h3>Stories</h3>
			<h2><?php echo $title; ?></h2>
			<div class="text">
				<?php echo $description_intro; ?>
			</div>
			<div class="more">
				<a href="<?php echo $link; ?>" title="Read stories">
					<span>Read stories</span>
					<em class="ri-arrow-right-line"></em>
				</a>
			</div>
		</div>
	</section>
<?php endif; ?>

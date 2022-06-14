<?php

$stories = new WP_Query([
	'post_type' => 'post',
	'posts_per_page' => 2
]);
$parameters = get_field('parameters');

if ($block['data']['is_example']) :
?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-stories-listing.jpg"
		     alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="stories_listing_block margin-top margin-bottom">
		<div class="container">
			<div class="stories_listing trans-all-2">
				<?php while ($stories->have_posts()) : $stories->the_post(); ?>
				<?php
					$postID = get_the_ID();
					$image = get_the_post_thumbnail_url($postID, 'stories-listing-image');
					$title = get_the_title();
					$link = get_the_permalink();
					$category = get_field('category', $postID);
					$reading_duration = get_field('reading_duration', $postID);
				?>
					<article>
						<a href="<?php echo $link; ?>" title="<?php echo $title; ?>">
							<span class="image">
								<img src="<?php echo $image; ?>"
									 alt="<?php echo $title; ?>">
							</span>
							<span class="story_texts">
								<strong><?php echo $title; ?></strong>
								<span class="story_bot">
									<em><?php echo $category; ?></em>
									<u><?php echo $reading_duration; ?> minute read</u>
								</span>
							</span>
						</a>
					</article>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

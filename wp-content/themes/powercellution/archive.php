<?php get_header('', array('white' => false)); ?>

<section class="hero small trans-all-4">
	<figure>
		<img src="<?php echo get_template_directory_uri(); ?>/images/hero-stories.jpg" alt="">
	</figure>
	<div class="container">
		<h1>Stories</h1>
	</div>
</section>

<section class="articles_wrap">
	<div class="container">
		<div class="text">
			<p>You can find our latest stories and in-depth articles here. Read about how we help our customers reach their zero emission goals.</p>
		</div>
		<div class="stories_listing trans-all-2">
			<?php while(have_posts()) : the_post(); ?>
			<?php
				$link = get_the_permalink();
				$image = get_the_post_thumbnail_url($post, 'stories-listing-image');
				$title = get_the_title();
				$category = get_field('category');
				$reading_duration = get_field('reading_duration');
			?>
				<article>
					<a href="<?php echo $link; ?>" title="A game-changer for marine applications">
						<span class="image">
							<img src="<?php echo $image; ?>" alt="A game-changer for marine applications">
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

<?php get_footer(); ?>

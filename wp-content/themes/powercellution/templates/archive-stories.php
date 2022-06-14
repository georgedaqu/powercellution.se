<?php

// Template Name: Archive Stories

get_header('', array('white' => false)); ?>

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
			<article>
				<a href="#" title="A game-changer for marine applications">
					<span class="image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/story-image-1.jpg" alt="A game-changer for marine applications">
					</span>
					<span class="story_texts">
						<strong>A game-changer for marine applications</strong>
						<span class="story_bot">
							<em>Marine</em>
							<u>3 minute read</u>
						</span>
					</span>
				</a>
			</article>
			<article>
				<a href="#" title="Fuel cells powers Covid-hospital in South Africa">
					<span class="image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/story-africa.jpg" alt="Fuel cells powers Covid-hospital in South Africa">
					</span>
					<span class="story_texts">
						<strong>Fuel cells powers Covid-hospital in South Africa</strong>
						<span class="story_bot">
							<em>Stationary</em>
							<u>3 minute read</u>
						</span>
					</span>
				</a>
			</article>
		</div>
	</div>
</section>

<?php get_footer(); ?>
<?php

// Template Name: Archive Events

get_header('', array('white' => false)); ?>

<section class="hero small trans-all-4">
	<figure>
		<img src="<?php echo get_template_directory_uri(); ?>/images/hero-events.jpg" alt="">
	</figure>
	<div class="container">
		<h1>Events</h1>
	</div>
</section>

<section class="events_top margin-top margin-bottom">
	<div class="container">
		<h2>Events calendar</h2>
		<div class="text">
			<p>Follow our calendar for digital and physical events. You can find the latest webinars and at what conference and trade fairs we will attend</p>
		</div>
	</div>
</section>

<section class="events_listing margin-bottom trans-all-2">
	<div class="container">
		<div class="no_events">No upcoming events</div>
		<div class="events_listing_items">
			<article>
				<a href="#" title="Nor-Shipping 2022">
					<span class="event_image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/event-1.png" alt="">
					</span>
					<span class="event_texts">
						<time>2022.04.04</time>
						<span class="event_title">Nor-Shipping 2022</span>
						<span class="event_excerpt"><strong>Conference</strong> Nor-Shipping 2022 Oslo</span>
					</span>
					<em class="ri-arrow-right-line"></em>
				</a>
			</article>
			<article>
				<a href="#" title="Morning Coffee with PowerCell">
					<span class="event_image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/event-2.png" alt="">
					</span>
					<span class="event_texts">
						<time>2022.03.29</time>
						<span class="event_title">Morning Coffee with PowerCell</span>
						<span class="event_excerpt"><strong>Webinar</strong> Morning Coffee with PowerCell</span>
					</span>
					<em class="ri-arrow-right-line"></em>
				</a>
			</article>
			<article>
				<a href="#" title="Part Three of the webinar series:">
					<span class="event_image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/event-3.png" alt="">
					</span>
					<span class="event_texts">
						<time>2022.01.13</time>
						<span class="event_title">Part Three of the webinar series:</span>
						<span class="event_excerpt"><strong>Webinar</strong> Your guide to a true zero emission marine project</span>
					</span>
					<em class="ri-arrow-right-line"></em>
				</a>
			</article>
			<article>
				<a href="#" title="Part Three of the webinar series:">
					<span class="event_image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/event-3.png" alt="">
					</span>
					<span class="event_texts">
						<time>2022.01.12</time>
						<span class="event_title">Part Three of the webinar series:</span>
						<span class="event_excerpt"><strong>Webinar</strong> Your guide to a true zero emission marine project</span>
					</span>
					<em class="ri-arrow-right-line"></em>
				</a>
			</article>
			<article>
				<a href="#" title="Part Three of the webinar series:">
					<span class="event_image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/event-3.png" alt="">
					</span>
					<span class="event_texts">
						<time>2022.01.11</time>
						<span class="event_title">Part Three of the webinar series:</span>
						<span class="event_excerpt"><strong>Webinar</strong> Your guide to a true zero emission marine project</span>
					</span>
					<em class="ri-arrow-right-line"></em>
				</a>
			</article>
			<article>
				<a href="#" title="MarinTec China">
					<span class="event_image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/event-4.jpg" alt="">
					</span>
					<span class="event_texts">
						<time>2021.12.07</time>
						<span class="event_title">MarinTec China</span>
						<span class="event_excerpt"><strong>Conference</strong> MarinTec China</span>
					</span>
					<em class="ri-arrow-right-line"></em>
				</a>
			</article>
			<article>
				<a href="#" title="Hydrogen Technolgoy Expo">
					<span class="event_image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/event-5.png" alt="">
					</span>
					<span class="event_texts">
						<time>2021.10.20</time>
						<span class="event_title">Hydrogen Technolgoy Expo</span>
						<span class="event_excerpt"><strong>Conference</strong> Expo, Messe Bremen, Germany</span>
					</span>
					<em class="ri-arrow-right-line"></em>
				</a>
			</article>
		</div>
		<div class="more dark">
			<a href="javascript:void(0);" title="Show past events">
				<span>Show past events</span>
				<em class="ri-arrow-right-line"></em>
			</a>
		</div>
	</div>
</section>

<section class="video_archive">
	<div class="container">
		<div class="video_archive_intro">
			<h2>Video archive</h2>
			<div class="video_archive_intro_description">
				<p>Archived webinars and other videos</p>
			</div>
		</div>
		<div class="vide_cards">
			<a href="#">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/videoCardBg.jpg" alt="">
				</figure>
				<span>Your guide to a true zero emission marine project</span>
				<strong>Part Three of the webinar series:</strong>
			</a>
			<a href="#">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/videoCardBg.jpg" alt="">
				</figure>
				<span>Your guide to a true zero emission marine project</span>
				<strong>Part Three of the webinar series:</strong>
			</a>
			<a href="#">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/videoCardBg.jpg" alt="">
				</figure>
				<span>Your guide to a true zero emission marine project</span>
				<strong>Part Three of the webinar series:</strong>
			</a>
			<a href="#">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/videoCardBg.jpg" alt="">
				</figure>
				<span>Your guide to a true zero emission marine project</span>
				<strong>Part Three of the webinar series:</strong>
			</a>
			<a href="#">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/videoCardBg.jpg" alt="">
				</figure>
				<span>Your guide to a true zero emission marine project</span>
				<strong>Part Three of the webinar series:</strong>
			</a>
		</div>
	</div>
</section>

<?php while(have_posts()) : the_post(); ?>
<?php echo get_the_title(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>

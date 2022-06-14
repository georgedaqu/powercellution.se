<?php

get_header('', array('white' => false));

$date_now = date('Y-m-d H:i:s');

$posts = get_posts( array(
	'post_type' 	 => 'events',
	'order'          => 'DESC',
	'orderby'        => 'meta_value',
	'meta_key'       => 'event_date',
	'meta_type'      => 'DATETIME',
	'meta_query' 	 => array(
		array(
			'key'           => 'event_date',
			'compare'       => '>=',
			'value'         => $date_now,
			'type'          => 'DATETIME',
		),
	),
));
?>

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
		<?php if( $posts ) : ?>
			<div class="events_listing_items" id="events_listing_space_id">
				<?php foreach( $posts as $post ) : ?>
					<?php
						$event_date = get_field( 'event_date' );
						$event_year = DateTime::createFromFormat('Y.m.d', $event_date);
					?>
					<article>
						<a href="<?php echo get_the_permalink(); ?>" title="Nor-Shipping 2022">
						<span class="event_image">
							<img src="<?php echo get_template_directory_uri(); ?>/images/event-1.png" alt="">
						</span>
							<span class="event_texts">
							<time><?php echo $event_date; ?></time>
							<span class="event_title"><?php echo get_the_title(); ?> <?php echo $event_year->format('Y'); ?></span>
							<span class="event_excerpt"><strong>Conference</strong> Nor-Shipping 2022 Oslo</span>
						</span>
							<em class="ri-arrow-right-line"></em>
						</a>
					</article>
				<?php endforeach; ?>
			</div>
		<?php else : ?>
			<div class="no_events">No upcoming events</div>
		<?php endif; ?>
		<div class="more dark">
			<a href="javascript:void(0);" title="Show past events" id="load-button">
				<span>Show past events</span>
				<em class="ri-arrow-right-line"></em>
			</a>
		</div>
	</div>
</section>
<?php
wp_reset_postdata();
$video_post = get_posts( array(
	'post_type' 	 => 'video',
));
?>
<section class="video_archive">
	<div class="container">
		<div class="video_archive_intro">
			<h2>Video archive</h2>
			<div class="video_archive_intro_description">
				<p>Archived webinars and other videos</p>
			</div>
		</div>
		<div class="vide_cards">
			<?php if( $video_post ) : ?>
				<div class="events_listing_items" id="events_listing_space_id">
					<?php foreach( $video_post as $post ) : ?>
					<?php
						$link = get_the_permalink();
						$image = get_the_post_thumbnail_url($post, 'video-post-archive-images');
						$title = get_the_title();
						$subtitle = get_field('subtitle');
					?>
						<a href="<?php echo $link; ?>">
							<figure>
								<img src="<?php echo $image; ?>" alt="">
							</figure>
							<span><?php echo $title; ?></span>
							<strong><?php echo $subtitle; ?></strong>
						</a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>

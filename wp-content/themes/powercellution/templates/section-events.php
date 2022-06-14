<?php

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
			'compare'       => '<=',
			'value'         => $date_now,
			'type'          => 'DATETIME',
		),
	),
));

foreach( $posts as $post ) :
	$event_date = get_field( 'event_date' );
	$event_year = DateTime::createFromFormat('Y.m.d', $event_date);
?>
	<article class="past_event_class_ajax">
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

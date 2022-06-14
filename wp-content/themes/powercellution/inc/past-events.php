<?php

function past_events() {

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

	if( $posts ) {
		echo get_template_part( 'templates/section', 'events' );
	} else {
		echo '<div id="noresult-js"><h1>No Results!</h1></div>';
	}
	exit;
}

add_action( 'wp_ajax_past_events', 'past_events' );
add_action( 'wp_ajax_nopriv_past_events', 'past_events' );

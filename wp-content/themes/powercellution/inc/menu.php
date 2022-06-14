<?php

add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2 );

function my_wp_nav_menu_objects( $items, $args ) {
		foreach ( $items as $item ) {
			$html          = '';
			$title         = $item->title;
			$image         = get_the_post_thumbnail_url( $item->object_id, 'sub-menu-images' );
			$segment_intro = get_field( 'segment_intro', $item->object_id );
			$subtitle      = get_field( 'subtitle', $item) ?? $title;
			$menu_size     = get_field( 'menu_size');

			if($menu_size == 'large' || $args->menu == 'header_menu') {
				if ( $segment_intro ) {
					$html .= '<span>';
					$html .= '<strong>' . $title . '</strong>';
					$html .= '<u>' . $segment_intro . '</u>';
					$html .= '<em class="ri-arrow-right-line"></em></span>';
				}
				if ( $image ) {
					$html .= '<img src="' . $image . '" alt="">';
				}
				if ( ! empty( $html ) ) {
					$item->title = $html;
				}
			}elseif($menu_size == 'small'){
				$html .= '<span class="services_texts">';
				$html .= '<span class="service_category">' . $subtitle . '</span>';
				$html .= '<strong>' . $title . '</strong>';
				$html .= '<em class="ri-arrow-right-line"></em></span>';
				$item->title = $html;
			}
		}

	return $items;
}

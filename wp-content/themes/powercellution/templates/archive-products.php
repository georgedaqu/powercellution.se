<?php

// Template Name: Archive Products

get_header('', array('white' => false));

$args = [
	'taxonomy' => 'products-category',
];
$cats = get_terms($args);

?>

<section class="hero small trans-all-4">
	<figure>
		<img src="<?php echo get_template_directory_uri(); ?>/images/hero-products.jpg" alt="">
	</figure>
	<div class="container">
		<h1>Fuel Cell Products & Solutions</h1>
	</div>
</section>

<section class="plain_text center border-bottom margin-top margin-bottom">
	<div class="container">
		<p>PowerCellution offers extraordinary solutions that positively impact our environment. Together with the most compact and robust fuel cell systems on the market, we offer world class engineering and integration services. Our systems span from 5 kW to MegaWatts with the ability to be connected in parallel to suit specific power needs.</p>
	</div>
</section>

<section class="products_listing margin-top margin-bottom trans-all-2">
	<div class="container">
		<div class="products_listing_top margin-bottom">
			<h2>Our products</h2>
			<div class="text">
				<p>From 2021-02-01 we have changed our product names, please visit <a href="#">translation chart.</a></p>
			</div>
		</div>
		<div class="products_listing_categories">
			<?php foreach ($cats as $cat) : ?>
			<?php
				$catID = $cat->term_id;
				$cat_name = $cat->name;
				$args = [
					'post_type' => 'product',
					'tax_query' => [
						[
							'taxonomy' => 'products-category',
							'field'    => 'term_id',
							'terms'    => $catID,
						]
					],
				];
				$post_marine = query_posts($args);
			?>
				<div class="products_listing_category">
					<h3><?php echo $cat_name; ?></h3>
					<div class="products_listing_items">
						<?php if(have_posts()) : ?>
							<?php while(have_posts()) : the_post(); ?>
							<?php
								$link = get_the_permalink();
								$image = get_the_post_thumbnail_url($post, 'archive-products-image');
								$title = get_the_title();
								$intro_fields = get_field('intro_fields');
								unset($subtitle, $power);
								if($intro_fields == 'subtitle'){
									$subtitle = get_field('subtitle');
								}elseif($intro_fields == 'power'){
									$power = get_field('power');
								}
							?>
								<article>
									<a href="<?php echo $link; ?>" title="Marine MW Solutions">
										<span class="product_image">
											<img src="<?php echo $image; ?>" alt="">
										</span>
										<span class="product_texts">
											<span class="product_title"><?php echo $title; ?></span>
											<span class="product_texts_bot">
												<span class="product_value"><?php echo $subtitle ?? $power; ?></span>
												<span class="product_property"><?php echo ($power) ? 'Max net power' : ''?></span>
											</span>
										</span>
									</a>
								</article>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php the_content(); ?>

<?php get_footer(); ?>

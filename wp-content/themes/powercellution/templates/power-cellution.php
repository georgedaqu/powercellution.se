<?php

// Template Name: Power Cellution

get_header('', array('white' => false)); ?>

<section class="hero small trans-all-4">
	<figure>
		<img src="<?php echo get_template_directory_uri(); ?>/images/hero-stories.jpg" alt="">
	</figure>
	<div class="container">
		<h1>Get in contact with a fuel cell expert</h1>
	</div>
</section>

<section class="contact_cell_expert">
    <div class="container">
		<div class="contact_cell_expert_wrapper">
			<h3>We are ready to support you</h3>
			<div class="contact_cell_expert_form">
				<p>For the last decade, PowerCell has developed fuel cells for the very demanding automotive industry. Today our experience stretches over many fields of operation and we have systems ­developed for marine applications, as well as off-road and ­stationary power. It is scalable from kW to MW, fuel efficient and high performing at low cost. We pride ­ourselves for working close to our clients, forming relevant partnerships and delivering a value-adding, complete solution.</p>
				<?php echo do_shortcode('[wpforms id="476"]') ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
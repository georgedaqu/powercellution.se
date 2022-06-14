<?php get_header(); ?>

<section class="hero small trans-all-4">
	<figure>
		<img src="<?php echo get_template_directory_uri(); ?>/images/404.jpg" alt="">
	</figure>
	<div class="container">
		<h1>Page not found</h1>
		<div class="text">
			<p>It looks like you’re lost. Our apologies, but this url eithergot moved or doesn’t exist.</p>
		</div>
		<div class="more center">
			<a href="<?php echo home_url(); ?>" title="Back home">
				<span>Back home</span>
				<em class="ri-arrow-right-line"></em>
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
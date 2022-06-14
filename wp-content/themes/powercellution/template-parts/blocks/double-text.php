<?php

$parameters = get_field( 'parameters' );
$text = get_field('text');
$flex_container = get_field('flex_container');

if ($block['data']['is_example']) :
	?>
	<figure class="marjini">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/previews/preview-double-text.jpg"
			 alt="Preview of what the Accordion custom block appears minimized">
	</figure>
<?php else : ?>
	<section class="double_text <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<div class="container">
			<div class="text_left">
				<?php echo $text; ?>
			</div>
			<div class="text_right">
				<?php foreach ($flex_container as $container) : ?>
				<?php
					$layout = $container['acf_fc_layout'];
					$text = $container['text'] ?? false;
					$video = $container['video'] ?? false;
					$configuration_list = $container['configuration_list'] ?? false;
					$download_title = $container['download_title'];
					$download_link = $container['download_link'];
				?>
					<?php if ($layout == 'text') : ?>
						<div class="accardion_content">
							<?php echo $text; ?>
						</div>
					<?php elseif ($layout == 'video') : ?>
						<div class="video_wrapper">
							<?php echo $video; ?>
						</div>
					<?php elseif ($layout == 'configuration_list') : ?>
						<div class="accardion configuration_list">
							<ul>
								<?php foreach ($configuration_list as $configuration) : ?>
								<?php
									$fields = $configuration['fields'];
									$title = $configuration['title'] ?? false;
									$image_array = $configuration['image'] ?? false;
									if($image_array['sizes']['configuration-list-image']){
										$image = $image_array['sizes']['configuration-list-image'];
									}
									$text = $configuration['text'] ?? false;
									$table = $configuration['table'] ?? false;
									$text_or_table = $configuration['text_or_table'] ?? false;
									$features = $configuration['features'] ?? false;
								?>
									<li>
										<div class="accardion_header">
											<a href="javascript:void(0);">
												<span><?php echo $title; ?></span>
												<em class="ri-add-fill acc_plus_icon"></em>
											</a>
										</div>
										<div class="accardion_content">
										<?php if (in_array( 'image', $fields )) : ?>
											<figure>
												<img src="<?php echo $image; ?>" alt="">
											</figure>
										<?php endif; ?>
										<?php if (in_array( 'text', $fields )) : ?>
											<?php echo $text; ?>
										<?php endif; ?>
										<?php if (in_array( 'features', $fields )) : ?>
											<dl class="gg">
												<?php foreach ($features as $feature) : ?>
													<dt><span><?php echo $feature['title']; ?></span></dt>
													<dd><span><?php echo $feature['description']; ?></span></dd>
												<?php endforeach; ?>
											</dl>
										<?php endif; ?>
										</div>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php elseif ($layout == 'download') : ?>
						<div class="datasheets_list">
							<ul>
								<li>
									<a href="<?php echo $download_link; ?>" download><?php echo $download_title; ?><svg viewBox="0 0 20 20" fill="none">
											<path d="M14 6H10V0H4V6H0L7 13L14 6ZM0 15V17H14V15H0Z"></path>
										</svg></a>
								</li>
							</ul>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

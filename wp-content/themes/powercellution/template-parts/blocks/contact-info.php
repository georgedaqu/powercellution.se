<?php

$parameters = get_field( 'parameters' );
$contact_sections = get_field('contact_sections');

if ($block['data']['is_example']) :
?>
	<section class="contancts <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<div class="container">
			<div class="contact_wrapper">
				<h3>Business Contacts</h3>
				<div class="contact_items">
					<div class="contact_item">
						<h4>Business Manager Stationary</h4>
						<h4>Åse Bye</h4>
						<ul>
							<li class="contact_info active">
								<a href="mailto:ase.bye@powercell.se">ase.bye@powercell.se</a>
							</li>
							<li class="contact_info active">
								<a href="tel:+46 (0) 70 325 23 83">+46 (0) 70 325 23 83</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php else : ?>
	<section class="contancts <?php if ( $parameters ) { foreach ( $parameters as $parameter ) { echo $parameter . ' '; }} ?>">
		<div class="container">
			<?php foreach ($contact_sections as $contact_section) : ?>
			<?php
				$section_title = $contact_section['section_title'];
				$contact_items = $contact_section['contact_items'];
			?>
				<div class="contact_wrapper">
					<h3><?php echo $section_title; ?></h3>
					<div class="contact_items">
						<?php foreach ($contact_items as $contact_item) : ?>
						<?php
							$title = $contact_item['title'];
							$name = $contact_item['name'] ?? false;
							$address = $contact_item['address'] ?? false;
							$active = $contact_item['active'] ?? false;
							$email = $contact_item['email'] ?? false;
							$mobile_number = $contact_item['mobile_number'] ?? false;
							$website = $contact_item['website'] ?? false;
						?>
							<div class="contact_item">
								<h4><?php echo $title; ?></h4>
								<?php if ($name) : ?>
									<h4><?php echo $name; ?></h4>
								<?php elseif ($address) : ?>
									<address>
										<?php echo $address; ?>
									</address>
								<?php endif; ?>
								<ul>
									<?php if ($email) : ?>
										<li class="contact_info <?php echo ($active) ? 'active' : ''; ?>">
											<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
										</li>
									<?php endif; ?>
									<?php if ($mobile_number) : ?>
										<li class="contact_info <?php echo ($active) ? 'active' : ''; ?>">
											<a href="tel:<?php echo $mobile_number; ?>"><?php echo $mobile_number; ?></a>
										</li>
									<?php endif; ?>
									<?php if ($website) : ?>
										<li class="contact_info <?php echo ($active) ? 'active' : ''; ?>">
											<a href="<?php echo $website; ?>"><?php echo $website; ?></a>
										</li>
									<?php endif; ?>
								</ul>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
<?php endif; ?>

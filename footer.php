		<section class="home-page__subscribe subscribe">
			<div class="subscribe__container">
				<div class="subscribe__body">
					<div class="subscribe__content">
						<h2 class="subscribe__title title title_m">
							<?php esc_html(the_field( 'subscribe_title', 14 )) ?>
						</h2>
						<div class="subscribe__descr">
							<?php esc_html(the_field( 'subscribe_descr', 14 )) ?>
						</div>
					</div>					
					<form class="subscribe__form">
						<input autocomplete="off" type="text" name="home_subscribe" placeholder="Your email address here" class="input" />
						<button type="submit" class="button button_subscribe">
							Subscribe
						</button>
					</form>
				</div>
			</div>
		</section>
		<section class="home-page__insta insta">
			<div class="insta__container">
				<h2 class="insta__title title title_m">
					<?php esc_html(the_field( 'insta_title', 14 )) ?>
				</h2>
				<div class="insta__items">

					<?php
					for ( $i = 1; $i <= 5; $i++ ) :
						$postlink = get_field( "post-{$i}_link-{$i}", 14 );
						$postimage = get_field( "post-{$i}_image-{$i}", 14 );
						if ( ! empty( $postimage ) && ! empty( $postlink ) ) :
						?>
							<div class="insta__item-ibg">
								<a href="<?php echo esc_url($postlink) ?>">
									<?php echo wp_get_attachment_image( $postimage, 'ministore_insta' ); ?>									
									<svg width="30" height="32" class="item-insta__icon">
										<use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/icons.svg#insta"></use>
									</svg>
								</a>
							</div>
						<?php
						endif;
					endfor;
					?>
					
				</div>
			</div>			
		</section>
	</main>
	<footer class="footer">
		<div class="footer__container">
			<div class="footer__body">
				<div class="footer__about">
					<div class="footer__logo">
						<?php 
						$logo_img = '';
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						
						if ( $custom_logo_id ) :
							$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
								'class'    => 'custom-logo',
								'itemprop' => 'logo',
							) );
						endif;
						
						echo $logo_img;
						?>
					</div>

					<?php if ( get_field( 'footer_descr', 14 ) ) : ?>
						<div class="footer__text">
							<?php esc_html(the_field( 'footer_descr', 14 )); ?>
						</div>
					<?php
					endif;

					$sm = false;
					$social = get_field( 'social_links', 14 );
					foreach ( $social as $namesocial => $linksocial) :
						if ( $linksocial ) :
							if ( !$sm ) :
								echo '<div class="footer__social">';
							endif;
							?>
							<a href="<?php esc_attr(the_field( 'social_links_' . $namesocial, 14 )); ?>" target="_blank">
									<svg width="20" height="20">										
										<use xlink:href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/icons.svg#' . $namesocial) ?>"></use>
									</svg>
								</a>
							<?php
							
							$sm = true;
						endif;
					endforeach;
					if ( $sm ) :
						echo '</div>';
					endif;
					?>				
				</div>

				<?php
				$locations = get_nav_menu_locations();
				if ( isset( $locations['footer-menu_1'] ) && $locations['footer-menu_1'] != 0 ) :
					$menu_object = wp_get_nav_menu_object( $locations['footer-menu_1'] );
					?>
						<div class="footer__menu menu-footer">
							<div class="menu-footer__title title title_s"><?php echo esc_html__($menu_object->name) ?></div>
							<nav class="menu-footer__body">

								<?php
								wp_nav_menu( [
									'theme_location'  => 'footer-menu_1',
									'container'       => false,
									'menu_class'      => 'menu-footer__list',
									'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
									'depth'           => 1,
									'fallback_cb'     => '',
									'walker'          => new Ministore_Walker_Nav_Menu(),
								] );
								?>						
								
							</nav>
						</div>
					<?php
				endif;
				
				if ( isset( $locations['footer-menu_2'] ) && $locations['footer-menu_2'] != 0 ) :
					$menu_object = wp_get_nav_menu_object( $locations['footer-menu_2'] );
					?>
						<div class="footer__menu menu-footer">
							<div class="menu-footer__title title title_s"><?php echo esc_html__($menu_object->name) ?></div>
							<nav class="menu-footer__body">

								<?php
								wp_nav_menu( [
									'theme_location'  => 'footer-menu_2',
									'container'       => false,
									'menu_class'      => 'menu-footer__list',
									'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
									'depth'           => 1,
									'fallback_cb'     => '',
									'walker'          => new Ministore_Walker_Nav_Menu(),
								] );
								?>
								
							</nav>
						</div>
					<?php
				endif;
				?>				
					
				<div class="footer__contacts">
					<div class="menu-footer__title title title_s"><?php esc_html(the_field( 'footer_contacts_title', 14 )); ?></div>
					<p>
						<?php esc_html(the_field( 'footer_contacts_info-1_descr-1', 14 )); ?>
						<a target="_blank" href="mailto:<?php esc_attr(the_field( 'footer_contacts_info-1_contact-1', 14 )); ?>"><?php esc_html(the_field( 'footer_contacts_info-1_contact-1', 14 )); ?></a>
					</p>
					<?php if ( get_field( 'footer_contacts_info-2' ) ) : ?>
						<p>
							<?php esc_html(the_field( 'footer_contacts_info-2_descr-2', 14 )); ?>
							<a href="tel:<?php esc_attr(the_field( 'footer_contacts_info-2_contact-2', 14 )); ?>"><?php esc_html(the_field( 'footer_contacts_info-2_contact-2', 14 )); ?></a>
						</p>
					<?php endif; ?>					
				</div>
			</div>
		</div>
		<div class="footer__bottom bottom-footer">
			<div class="bottom-footer__container">
				<div class="bottom-footer__wrap">
					<div class="bottom-footer__ship">
						<div class="bottom-footer__ship-text">We ship with:</div>
						<svg width="60" height="24">
							<use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/icons.svg#partner1"></use>
						</svg>
						<svg width="60" height="24">
							<use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/icons.svg#partner2"></use>
						</svg>
					</div>
					<div class="bottom-footer__pay">
						<div class="bottom-footer__pay-text">Payment options:</div>
						<svg width="30" height="24">
							<use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/icons.svg#visa"></use>
						</svg>
						<svg width="30" height="24">
							<use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/icons.svg#mastercard"></use>
						</svg>
						<svg width="30" height="24">
							<use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/icons.svg#paypal"></use>
						</svg>
					</div>
				</div>
				<div class="bottom-footer__copy">
					© <?php esc_html(the_field( 'copyright', 14 )) ?> Design by
					<a href="#">Taras Samoilov</a>
				</div>
			</div>
		</div>
	</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
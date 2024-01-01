		<section class="home-page__subscribe subscribe">
			<div class="subscribe__container">
				<div class="subscribe__body">
					<div class="subscribe__content">
						<h2 class="subscribe__title title title_m">
							Subscribe Us now
						</h2>
						<div class="subscribe__descr">
							Get latest news, updates and deals directly
							mailed to your inbox.
						</div>
					</div>
					<form action="#" class="subscribe__form">
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
					Shop our insta
				</h2>
				<div class="insta__items">
					<div class="insta__item-ibg">
						<a href="#"><picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/insta/image_1.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/insta/image_1.jpg" alt="The post in Instagramm" /></picture>
							<svg width="30" height="32" class="item-insta__icon">
								<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#insta"></use>
							</svg>
						</a>
					</div>
					<div class="insta__item-ibg item-insta">
						<a href="#"><picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/insta/image_2.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/insta/image_2.jpg" alt="The post in Instagramm" /></picture>
							<svg width="30" height="32" class="item-insta__icon">
								<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#insta"></use>
							</svg>
						</a>
					</div>
					<div class="insta__item-ibg item-insta">
						<a href="#"><picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/insta/image_3.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/insta/image_3.jpg" alt="The post in Instagramm" /></picture>
							<svg width="30" height="32" class="item-insta__icon">
								<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#insta"></use>
							</svg>
						</a>
					</div>
					<div class="insta__item-ibg item-insta">
						<a href="#"><picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/insta/image_4.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/insta/image_4.jpg" alt="The post in Instagramm" /></picture>
							<svg width="30" height="32" class="item-insta__icon">
								<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#insta"></use>
							</svg>
						</a>
					</div>
					<div class="insta__item-ibg item-insta">
						<a href="#"><picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/insta/image_5.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/insta/image_5.jpg" alt="The post in Instagramm" /></picture>
							<svg width="30" height="32" class="item-insta__icon">
								<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#insta"></use>
							</svg>
						</a>
					</div>
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
						
						if( $custom_logo_id ){
							$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
								'class'    => 'custom-logo',
								'itemprop' => 'logo',
							) );
						}
						
						echo $logo_img;
						?>
					</div>

					<?php
					if ( get_field( 'footer_descr', 14 ) ) {
						?>
							<div class="footer__text">
								<?php the_field( 'footer_descr', 14 ) ?>
							</div>						
						<?php
					}
					print_r(get_field('social_links'));
					the_field( 'social_links_facebook_link' );
					the_field( 'footer_descr-site' );
					// if ( get_post_meta( 14, 'footer_descr-site', true ) ) {

					// }
					?>





					<div class="footer__social">
						<a href="#">
							<svg width="20" height="20">
								<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#facebook"></use>
							</svg>
						</a>
						<a href="#">
							<svg width="20" height="20">
								<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#insta"></use>
							</svg>
						</a>
						<a href="#">
							<svg width="20" height="20">
								<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#twitter"></use>
							</svg>
						</a>
						<a href="#">
							<svg width="20" height="20">
								<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#linkedin"></use>
							</svg>
						</a>
						<a href="#">
							<svg width="20" height="20">
								<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#youtube"></use>
							</svg>
						</a>
					</div>
				</div>

				<?php
				$locations = get_nav_menu_locations();
				if ( isset( $locations['footer-menu_1'] ) && $locations['footer-menu_1'] != 0 ) {
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
				}
				
				if ( isset( $locations['footer-menu_2'] ) && $locations['footer-menu_2'] != 0 ) {
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
				}
				?>				
					
				<div class="footer__contacts">
					<div class="menu-footer__title title title_s">Contact us</div>
					<p>
						Do you have any queries or suggestions?
						<a target="_blank" href="mailto:yourinfo@gmail.com">yourinfo@gmail.com</a>
					</p>
					<p>
						If you need support? Just give us a call.
						<a href="tel:+5511122233344">+55 111 222 333 44</a>
					</p>
				</div>
			</div>
		</div>
		<div class="footer__bottom bottom-footer">
			<div class="bottom-footer__container">
				<div class="bottom-footer__wrap">
					<div class="bottom-footer__ship">
						<div class="bottom-footer__ship-text">We ship with:</div>
						<svg width="60" height="24">
							<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#partner1"></use>
						</svg>
						<svg width="60" height="24">
							<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#partner2"></use>
						</svg>
					</div>
					<div class="bottom-footer__pay">
						<div class="bottom-footer__pay-text">Payment options:</div>
						<svg width="30" height="24">
							<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#visa"></use>
						</svg>
						<svg width="30" height="24">
							<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#mastercard"></use>
						</svg>
						<svg width="30" height="24">
							<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#paypal"></use>
						</svg>
					</div>
				</div>
				<div class="bottom-footer__copy">
					© Copyright 2023 MiniStore. Design by
					<a href="#">TemplatesJungle</a>
				</div>
			</div>
		</div>
	</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
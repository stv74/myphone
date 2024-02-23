<?php
/** 
 * Template Name: Homepage
 */

get_header();
?>

	<div class="home-page__advantages advantages">
		<div class="advantages__container">
			<?php
			for ( $i = 1; $i <= 4; $i++ ) :
				$advantage = get_field( "advantage-{$i}", 14 );
				if ( $advantage['title'] && $advantage['descr'] && $advantage['icon'] ) :
				?>
					<div class="advantages__item item-advantage">
						<div class="item-advantage__icon">
							<img src="<?php echo $advantage['icon'] ?>">
						</div>
						<div class="item-advantage__body">
							<div class="item-advantage__title title title_s">
								<?php echo $advantage['title']; ?>
						</div>
							<div class="item-advantage__text">
							<?php echo $advantage['descr']; ?>
							</div>
						</div>
					</div>
				<?php
				endif;
			endfor;
			?>						
		</div>
	</div>
	<section class="home-page__products products">
		<div class="products__container">
			<div class="products__head head-section">
				<h2 class="head-section__title title title_m">
					Mobile Products
				</h2>
				<a href="#" class="head-section__link">Go to Shop</a>
			</div>
			<div class="products__slider swiper">
				<div class="products__wrapper swiper-wrapper">
					<div class="products__slide product-item swiper-slide">
						<div class="product-item__img">
							<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/products/iPhone10.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/products/iPhone10.jpg" alt="iPhone 10" /></picture>
							<button class="product-item__button button button_card">
								<span>Add to cart</span>
								<svg width="16" height="16">
									<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#cart"></use>
								</svg>
							</button>
						</div>
						<div class="product-item__wrapper">
							<a href="#" class="product-item__title title title_s">
								Iphone 10
							</a>
							<div class="product-item__price">
								$980
							</div>
						</div>
					</div>
					<div class="products__slide product-item swiper-slide">
						<div class="product-item__img">
							<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/products/iPhone11.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/products/iPhone11.jpg" alt="iPhone 11" /></picture>
							<button class="product-item__button button button_card">
								<span>Add to cart</span>
								<svg width="16" height="16">
									<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#cart"></use>
								</svg>
							</button>
						</div>
						<div class="product-item__wrapper">
							<a href="#" class="product-item__title title title_s">
								Iphone 11
							</a>
							<div class="product-item__price">
								$1100
							</div>
						</div>
					</div>
					<div class="products__slide product-item swiper-slide">
						<div class="product-item__img">
							<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/products/iPhone8.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/products/iPhone8.jpg" alt="iPhone 8" /></picture>
							<button class="product-item__button button button_card">
								<span>Add to cart</span>
								<svg width="16" height="16">
									<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#cart"></use>
								</svg>
							</button>
						</div>
						<div class="product-item__wrapper">
							<a href="#" class="product-item__title title title_s">
								Iphone 8
							</a>
							<div class="product-item__price">
								$780
							</div>
						</div>
					</div>
					<div class="products__slide product-item swiper-slide">
						<div class="product-item__img">
							<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/products/iPhone13.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/products/iPhone13.jpg" alt="iPhone 13" /></picture>
							<button class="product-item__button button button_card">
								<span>Add to cart</span>
								<svg width="16" height="16">
									<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#cart"></use>
								</svg>
							</button>
						</div>
						<div class="product-item__wrapper">
							<a href="#" class="product-item__title title title_s">
								Iphone 13
							</a>
							<div class="product-item__price">
								$1500
							</div>
						</div>
					</div>
					<div class="products__slide product-item swiper-slide">
						<div class="product-item__img">
							<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/products/iPhone12Pro.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/products/iPhone12Pro.jpg" alt="iPhone 12 Pro" /></picture>
							<button class="product-item__button button button_card">
								<span>Add to cart</span>
								<svg width="16" height="16">
									<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#cart"></use>
								</svg>
							</button>
						</div>
						<div class="product-item__wrapper">
							<a href="#" class="product-item__title title title_s">
								Iphone 12 Pro
							</a>
							<div class="product-item__price">
								$1500
							</div>
						</div>
					</div>
					<div class="products__slide product-item swiper-slide">
						<div class="product-item__img">
							<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/products/iPhone14Pro.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/products/iPhone14Pro.jpg" alt="iPhone 14 Pro" /></picture>
							<button class="product-item__button button button_card">
								<span>Add to cart</span>
								<svg width="16" height="16">
									<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#cart"></use>
								</svg>
							</button>
						</div>
						<div class="product-item__wrapper">
							<a href="#" class="product-item__title title title_s">
								Iphone 14 Pro
							</a>
							<div class="product-item__price">
								$1500
							</div>
						</div>
					</div>
				</div>
				<div class="products__pagination swiper-pagination"></div>
			</div>
		</div>
	</section>
	<section class="home-page__products products">
		<div class="products__container">
			<div class="products__head head-section">
				<h2 class="head-section__title title title_m">
					Smart Watches
				</h2>
				<a href="#" class="head-section__link">Go to Shop</a>
			</div>
			<div class="products__slider swiper">
				<div class="products__wrapper swiper-wrapper">
					<div class="products__slide product-item swiper-slide">
						<div class="product-item__img">
							<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/products/sw_1.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/products/sw_1.jpg" alt="Pink watch" /></picture>
							<button class="product-item__button button button_card">
								<span>Add to cart</span>
								<svg width="16" height="16">
									<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#cart"></use>
								</svg>
							</button>
						</div>
						<div class="product-item__wrapper">
							<a href="#" class="product-item__title title title_s">
								Pink watch
							</a>
							<div class="product-item__price">
								$870
							</div>
						</div>
					</div>
					<div class="products__slide product-item swiper-slide">
						<div class="product-item__img">
							<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/products/sw_2.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/products/sw_2.jpg" alt="Heavy watch" /></picture>
							<button class="product-item__button button button_card">
								<span>Add to cart</span>
								<svg width="16" height="16">
									<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#cart"></use>
								</svg>
							</button>
						</div>
						<div class="product-item__wrapper">
							<a href="#" class="product-item__title title title_s">
								Heavy watch
							</a>
							<div class="product-item__price">
								$680
							</div>
						</div>
					</div>
					<div class="products__slide product-item swiper-slide">
						<div class="product-item__img">
							<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/products/sw_3.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/products/sw_3.jpg" alt="Spotted watch" /></picture>
							<button class="product-item__button button button_card">
								<span>Add to cart</span>
								<svg width="16" height="16">
									<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#cart"></use>
								</svg>
							</button>
						</div>
						<div class="product-item__wrapper">
							<a href="#" class="product-item__title title title_s">
								Spotted watch
							</a>
							<div class="product-item__price">
								$750
							</div>
						</div>
					</div>
					<div class="products__slide product-item swiper-slide">
						<div class="product-item__img">
							<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/products/sw_4.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/products/sw_4.jpg" alt="Black watch" /></picture>
							<button class="product-item__button button button_card">
								<span>Add to cart</span>
								<svg width="16" height="16">
									<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#cart"></use>
								</svg>
							</button>
						</div>
						<div class="product-item__wrapper">
							<a href="#" class="product-item__title title title_s">
								Black watch
							</a>
							<div class="product-item__price">
								$650
							</div>
						</div>
					</div>
					<div class="products__slide product-item swiper-slide">
						<div class="product-item__img">
							<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/products/sw_5.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/products/sw_5.jpg" alt="Apple watch" /></picture>
							<button class="product-item__button button button_card">
								<span>Add to cart</span>
								<svg width="16" height="16">
									<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#cart"></use>
								</svg>
							</button>
						</div>
						<div class="product-item__wrapper">
							<a href="#" class="product-item__title title title_s">
								Apple watch
							</a>
							<div class="product-item__price">
								$710
							</div>
						</div>
					</div>
					<div class="products__slide product-item swiper-slide">
						<div class="product-item__img">
							<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/products/sw_6.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/products/sw_6.jpg" alt="Black&white watch" /></picture>
							<button class="product-item__button button button_card">
								<span>Add to cart</span>
								<svg width="16" height="16">
									<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#cart"></use>
								</svg>
							</button>
						</div>
						<div class="product-item__wrapper">
							<a href="#" class="product-item__title title title_s">
								Black&white watch
							</a>
							<div class="product-item__price">
								$670
							</div>
						</div>
					</div>
				</div>
				<div class="products__pagination swiper-pagination"></div>
			</div>
		</div>
	</section>
	<section class="home-page__discount discount">
		<div class="discount__container">
			<div class="discount__content">
				<div class="discount__subtitle"><?php the_field( 'discount_size' ); ?></div>
				<h2 class="discount__title title">
					<?php the_field( 'discount_name' ); ?>
				</h2>
				<a href="<?php the_field( 'discount_link' ); ?>" class="discount__button button"><?php the_field( 'discount_button' ); ?></a>
			</div>
			<div class="discount__img">
				<div class="discount__wrapp-ibg">
					<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/discount/image_1.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/discount/image_1.png" alt="Discount" /></picture>
				</div>
			</div>
		</div>
	</section>
	<section class="home-page__posts posts">
		<div class="posts__container">
			<div class="posts__head head-section">
				<h2 class="head-section__title title title_m">
					Latest Posts
				</h2>
				<a href="#" class="head-section__link">Read blog</a>
			</div>
			<div class="posts__items">
				<div class="posts__item post-item">
					<div class="post-item__img">
						<a href="#">
							<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/posts/image_1.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/posts/image_1.jpg" alt="Post 1" /></picture>
						</a>
					</div>
					<div class="post-item__info">
						feb 22, 2023 - Gadgets
					</div>
					<a href="#" class="post-item__title title title_s">
						Get some cool gadgets in 2023
					</a>
				</div>
				<div class="posts__item post-item">
					<div class="post-item__img">
						<a href="#">
							<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/posts/image_2.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/posts/image_2.jpg" alt="Post 2" /></picture>
						</a>
					</div>
					<div class="post-item__info">
						feb 22, 2023 - technology
					</div>
					<a href="#" class="post-item__title title title_s">
						Technology hack you won’t get
					</a>
				</div>
				<div class="posts__item post-item">
					<div class="post-item__img">
						<a href="#">
							<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/posts/image_3.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/posts/image_3.jpg" alt="Post 3" /></picture>
						</a>
					</div>
					<div class="post-item__info">
						feb 22, 2023 - camera
					</div>
					<a href="#" class="post-item__title title title_s">
						Top 10 small camera in the world
					</a>
				</div>
			</div>
		</div>
	</section>
	<?php
	$slides = get_posts( array(
		'numberposts' => -1,
		'post_type'   => 'review-slider',
		'suppress_filters' => true,
	) );
	if ( $slides ) :
	?>
	<div class="home-page__reviews reviews">
		<div class="reviews__container">
			<div class="reviews__slider swiper">
				<div class="reviews__wrapper swiper-wrapper">
					<?php
					foreach ( $slides as $post ) : 
						setup_postdata( $post );
						?>
							<div class="reviews__slide slide-review swiper-slide">
								<div class="slide-review__icon">
									<svg width="91" height="65">
										<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#quotes"></use>
									</svg>
								</div>
								<div class="slide-review__text">
									<?php echo '“' . get_field( 'review_text' ) . '”' ?>
								</div>
								<?php 
								$stars = get_field( 'review_rating' );
								if ( $stars > 0 ) :
								?>
								<div class="slide-review__rating">
									<?php for ( $i = 0; $i < $stars; $i++ ) : ?>
										<svg width="17" height="17">
											<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#star"></use>
										</svg>
									<?php endfor; ?>
								</div>
								<?php endif; ?>
								<div class="slide-review__name">
									<?php the_field( 'review_author' ) ?>
								</div>
							</div>									
						<?php
					endforeach;
					wp_reset_postdata(); 
					?>					
				</div>
				<button type="button" class="swiper-button-prev"></button>
				<button type="button" class="swiper-button-next"></button>
			</div>
		</div>
	</div>			
	<?php endif;
get_footer();
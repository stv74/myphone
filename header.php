<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div class="wrapper">

		<header class="header">
			<div class="header__container">
				<div class="header__logo">
					<?php the_custom_logo(); ?> 
				</div>
				<div class="header__menu menu">
					<nav class="menu__body">
						<?php
						wp_nav_menu( [
							'theme_location'  => 'header-menu',
							'container'       => false,
							'menu_class'      => 'menu__list',
							'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
							'depth'           => 2,
							'walker'          => new Ministore_Walker_Nav_Menu(),
						] );
						?>												
					</nav>
				</div>
				<div data-da=".menu__body,479,98" class="header__buttons">
					<button class="header__button button-search">
						<svg width="18" height="18">
							<use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/icons.svg#search"></use>
						</svg>
					</button>
					<a href="#" class="header__button">
						<svg width="18" height="18">
							<use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/icons.svg#person"></use>
						</svg>
					</a>
					<a href="cart.html" class="header__button">
						<svg width="18" height="18">
							<use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/icons.svg#cart"></use>
						</svg>
						<span>(0)</span>
					</a>
				</div>
				<button type="button" class="menu__icon icon-menu">
					<span></span>
				</button>
				<div class="header__search search">
					<button class="search__close"></button>
					<div class="search__body">

						<?php get_search_form(); ?>
						
						<div class="search__links category-links">
							<div class="category-links__title">Browse categories</div>
							<div class="category-links__wrapp">
								<a href="#" class="category-links__link">Mobile Phone</a>
								/
								<a href="#" class="category-links__link">Smart Watches</a>
								/
								<a href="#" class="category-links__link">Headphones</a>
								/
								<a href="#" class="category-links__link">Accessories</a>
								/
								<a href="#" class="category-links__link">Monitors</a> /
								<a href="#" class="category-links__link">Speacers</a> /
								<a href="#" class="category-links__link">Memory Cards</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<main class="page">

			<?php if ( is_front_page() ) : ?>
				<section class="page__promo promo">
					<h1 class="visually-hidden"><?php bloginfo('name'); echo " - "; bloginfo('description'); ?></h1>
					<div class="promo__slider swiper">
						<div class="promo__wrapper swiper-wrapper">
							<?php
							$slides = get_posts( array(
								'numberposts' => -1,
								'post_type'   => 'main-slider',
								'suppress_filters' => true,
							) );
							global $post;
							foreach ( $slides as $post ) : 
								setup_postdata( $post );
								?>
									<div class="promo__slide slide-promo swiper-slide">
										<div class="slide-promo__container">
											<div class="slide-promo__content">
												<div class="slide-promo__title title">
													<?php the_title(); ?>
												</div>
												<a href="<?php esc_attr(the_field( 'slide_url' )) ?>" class="slide-promo__button button"><?php esc_html(the_field( 'slide_btn' )) ?></a>
											</div>
											<div class="slide-promo__img">
												<?php echo wp_get_attachment_image( get_field( 'slide_img' ), 'ministore_slider' ); ?>
											</div>
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
				</section>
			<?php elseif ( is_home() || is_page() ) : ?>
				<section class="page__head head-page">
					<div class="head-page__container">
						<h1 class="head-page__title title">
							<?php
							if ( is_home() ) {
								echo get_the_title( get_option('page_for_posts', true) );
							} else {
								the_title();
							}
							?>
						</h1>
						<div class="head-page__breadcrumbs breadcrumbs">
							<?php get_breadcrumbs(); ?>
						</div>
					</div>
				</section>				
			<?php endif; ?>


<?php
/** 
 * Template Name: About
 */

get_header();
?>

    <div class="about-page__advantages advantages">
		<div class="advantages__container">
			<?php
			for ( $i = 1; $i <= 4; $i++ ) :
				$advantage = get_field( "advantage-{$i}", 14 );
				if ( $advantage['title'] && $advantage['descr'] && $advantage['icon'] ) :
				?>
					<div class="advantages__item item-advantage">
						<div class="item-advantage__icon">
							<img src="<?php echo esc_url($advantage['icon']) ?>">
						</div>
						<div class="item-advantage__body">
							<div class="item-advantage__title title title_s">
								<?php echo esc_html($advantage['title']); ?>
						</div>
							<div class="item-advantage__text">
							<?php echo esc_html($advantage['descr']); ?>
							</div>
						</div>
					</div>
				<?php
				endif;
			endfor;
			?>						
		</div>
	</div>
    <section class="about-page__aboutus aboutus">
        <div class="aboutus__container">
            <div class="aboutus__img">
                <?php echo wp_get_attachment_image( get_field( 'about_image' ), 'full'); ?>
            </div>
            <div class="aboutus__content">
                <h2 class="aboutus__title title title_m">
                    <?php esc_html( the_field( 'about_title' ) ) ?>
                </h2>
				<?php esc_html( the_field( 'about_text' ) ) ?>
                <a href="<?php esc_attr( the_field( 'about_button' ) ) ?>" class="aboutus__button button">Shop Our store</a>
            </div>
        </div>
    </section>

    <!-- Section Reviews -->
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
										<use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/icons.svg#quotes"></use>
									</svg>
								</div>
								<div class="slide-review__text">
									<?php echo '“' . esc_html(get_field( 'review_text' )) . '”' ?>
								</div>
								<?php 
								$stars = get_field( 'review_rating' );
								if ( $stars > 0 ) :
								?>
								<div class="slide-review__rating">
									<?php for ( $i = 0; $i < $stars; $i++ ) : ?>
										<svg width="17" height="17">
											<use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/icons.svg#star"></use>
										</svg>
									<?php endfor; ?>
								</div>
								<?php endif; ?>
								<div class="slide-review__name">
									<?php esc_html(the_field( 'review_author' )) ?>
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
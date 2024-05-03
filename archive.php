<?php get_header(); ?>

<section class="blog-page__catalog catalog">
	<div class="catalog__container catalog__container_l">
		<h2 class="visually-hidden">Articles</h2>
		<aside class="catalog__sidebar sidebar">
			<form action="#" class="sidebar__search search-form">
				<input autocomplete="off" type="text" name="blog_search" placeholder="Search" class="input" />
				<button type="submit" class="search-form__button">
					<svg width="21" height="21">
						<use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/icons.svg#search"></use>
					</svg>
				</button>
			</form>
			<?php dynamic_sidebar( 'blogsidebar' ); ?>			
		</aside>
		<div class="catalog__body">
			<?php if ( have_posts() ) : ?>
				<div class="catalog__list">					
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="catalog__item post-item">
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="post-item__img">
									<a href="<?php the_permalink(); ?>">
										<img src="<?php the_post_thumbnail_url( 'ministore_blogpost-prev' ); ?>" alt="<?php echo esc_attr( get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ) ) ?>">									
									</a>
								</div>
							<?php else : ?>
								<div class="post-item__img">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/noimage.jpg" alt="Not Image">							
								</div>
							<?php endif; ?>
							<div class="post-item__info">
								<?php 
								the_date( 'F j, Y', '', ' - ' );
								the_category( ', ' );
								?>
							</div>
							<a href="<?php the_permalink(); ?>" class="post-item__title title title_s"><?php the_title(); ?></a>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>				
			
			<div class="catalog__pagination pagination">
				<?php
				$url_img = esc_url( get_template_directory_uri() );
				$args = [
					'prev_text' => '<svg width="22" height="45"><use xlink:href="' . $url_img . '/assets/img/icons/icons.svg#arrow-sl"></use></svg>',
					'next_text' => '<svg width="22" height="45"><use xlink:href="' . $url_img . '/assets/img/icons/icons.svg#arrow-sr"></use></svg>',
				];
				echo paginate_links( $args ); 
				?>	
							
			</div>
		</div>
	</div>
</section>

<?php
get_footer();

<?php get_header(); ?>

<article class="blog-post-page__post post">
	<div class="post__container">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="post__subtitle">
				<?php the_date() . ' - ' . the_category( ', ' ) ?>
			</div>
			<h1 class="post__title title title_m">
				<?php the_title(); ?>
			</h1>
			<div class="post__img">
				<?php the_post_thumbnail( 'ministore_blogpost-full' ); ?>
			</div>
			
			<?php the_content(); ?>

			<div class="post__links">
				<div class="post__categories">
					<a href="#">Tech</a>
					<a href="#">Tips</a>
					<a href="#">Gadgets</a>
				</div>
				<div class="post__social social-post">
					<div class="social-post__title">Share:</div>
					<div class="social-post__body">
						<a href="#">
							<svg width="20" height="20">
								<use xlink:href="img/icons/icons.svg#facebook"></use>
							</svg>
						</a>
						<a href="#">
							<svg width="20" height="20">
								<use xlink:href="img/icons/icons.svg#insta"></use>
							</svg>
						</a>
						<a href="#">
							<svg width="20" height="20">
								<use xlink:href="img/icons/icons.svg#twitter"></use>
							</svg>
						</a>
						<a href="#">
							<svg width="20" height="20">
								<use xlink:href="img/icons/icons.svg#linkedin"></use>
							</svg>
						</a>
						<a href="#">
							<svg width="20" height="20">
								<use xlink:href="img/icons/icons.svg#youtube"></use>
							</svg>
						</a>
					</div>
				</div>
			</div>
			<div class="post__slider slider-post">
				<a href="#" class="slider-post__link title title_s">
					<svg width="22" height="45">
						<use xlink:href="img/icons/icons.svg#arrow-sl"></use>
					</svg>
					Get some cool gadgets in 2023
				</a>
				<a href="#" class="slider-post__link slider-post__next title title_s">
					Top 10 small camera in the world
					<svg width="22" height="45">
						<use xlink:href="img/icons/icons.svg#arrow-sr"></use>
					</svg>
				</a>
			</div>



		<?php endwhile; ?>
		


		
	</div>
</article>









	
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'ministore' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'ministore' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	

<?php
get_sidebar();
get_footer();

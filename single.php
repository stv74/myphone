<?php get_header(); ?>

<article class="blog-post-page__post post">
	<div class="post__container">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="post__subtitle">
				<?php
				the_date(); 
				echo ' - '; 
				the_category( ', ' );
				?>
			</div>
			<h1 class="post__title title title_m">
				<?php the_title(); ?>
			</h1>
			<div class="post__img">
				<?php the_post_thumbnail( 'ministore_blogpost-full' ); ?>
			</div>
			
			<?php the_content(); ?>

			<div class="post__links">
				<?php the_category(); ?>				
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
				<?php
				next_post_link( 
					'<span class="slider-post__link title title_s">
						<svg width="22" height="45">
							<use xlink:href="' . esc_url(get_template_directory_uri()) . '/assets/img/icons/icons.svg#arrow-sl"></use>
						</svg>
						%link											
					</span>'
				);
				previous_post_link( 
					'<span class="slider-post__link slider-post__prev title title_s">						
						%link
						<svg width="22" height="45">
							<use xlink:href="' . esc_url(get_template_directory_uri()) . '/assets/img/icons/icons.svg#arrow-sr"></use>
						</svg>	
					</span>' 
				); 				
				?>				
			</div>

		<?php endwhile; ?>		
	</div>
</article>

<?php comments_template(); ?>
<!-- <section class="blog-post-page__comments comments">
	<div class="comments__container">
		<div class="comments__body">
			<h2 class="comments__title title title_m">
				3 Comments
			</h2>
			<div class="comments__item item-comments">
				<div class="item-comments__img">
					<picture><source srcset="img/customers/image_1.webp" type="image/webp"><img src="img/customers/image_1.jpg" alt="Person" /></picture>
				</div>
				<div class="item-comments__body">
					<div class="item-comments__head">
						<span>Sam smith</span>Jul 10
					</div>
					<div class="item-comments__text">
						Mattis pulvinar non viverra donec
						pellentesque. Odio mi consequat libero
						dolor. Porta ut diam lobortis eget leo,
						lectus. Tortor diam dignissim amet, in
						interdum aliquet. Nascetur libero
						elementum adipiscing mauris maecenas et
						magna. Etiam nec, rutrum a diam lacus,
						nunc integer etiam.
					</div>
					<a href="#" class="item-comments__link">Reply now</a>
				</div>
			</div>
			<div class="comments__item item-comments item-comments_reply">
				<div class="item-comments__img">
					<picture><source srcset="img/customers/image_2.webp" type="image/webp"><img src="img/customers/image_2.jpg" alt="Person" /></picture>
				</div>
				<div class="item-comments__body">
					<div class="item-comments__head">
						<span>Santie Mary</span>Jul 10
					</div>
					<div class="item-comments__text">
						Mattis pulvinar non viverra donec
						pellentesque. Odio mi consequat libero
						dolor. Porta ut diam lobortis eget leo,
						lectus. Tortor diam dignissim amet, in
						interdum aliquet. Nascetur libero
						elementum adipiscing mauris maecenas et
						magna. Etiam nec, rutrum a diam lacus,
						nunc integer etiam.
					</div>
					<a href="#" class="item-comments__link">Reply now</a>
				</div>
			</div>
			<div class="comments__item item-comments">
				<div class="item-comments__img">
					<picture><source srcset="img/customers/image_3.webp" type="image/webp"><img src="img/customers/image_3.jpg" alt="Person" /></picture>
				</div>
				<div class="item-comments__body">
					<div class="item-comments__head">
						<span>Analisa Nora</span>Jul 10
					</div>
					<div class="item-comments__text">
						Mattis pulvinar non viverra donec
						pellentesque. Odio mi consequat libero
						dolor. Porta ut diam lobortis eget leo,
						lectus. Tortor diam dignissim amet, in
						interdum aliquet. Nascetur libero
						elementum adipiscing mauris maecenas et
						magna. Etiam nec, rutrum a diam lacus,
						nunc integer etiam.
					</div>
					<a href="#" class="item-comments__link">Reply now</a>
				</div>
			</div>
		</div>
		<div class="comments__form form-comments">
			<div class="form-comments__title title title_m">
				Leave a comments
			</div>
			<div class="form-comments__descr">
				Your email address will not be published.
				Required fields are marked *
			</div>
			<form action="#">
				<div class="form-comments__wrap">
					<input autocomplete="off" type="text" name="user_name" placeholder="Write your name here *" class="input" />
					<input autocomplete="off" type="text" name="email" placeholder="Write your email here *" class="input" />
				</div>
				<textarea name="comment_text" cols="30" rows="8" class="input">
Write your comment here *</textarea>
				<button type="submit" class="form-comments__button button">
					Send comment
				</button>
			</form>
		</div>
	</div>
</section> -->
<section class="blog-post-page__posts posts">
	<div class="posts__container">
		<div class="posts__head head-section">
			<h2 class="head-section__title title title_m">
				Latest Posts
			</h2>
			<a href="<?php echo esc_url( home_url( 'blog' ) ); ?>" class="head-section__link">Read blog</a>
		</div>
		<div class="posts__items">
			<?php 
			$my_posts = get_posts( array(
				'numberposts' => 3,
				'post_type'   => 'post',
				'suppress_filters' => true,
			) );

			foreach( $my_posts as $post ) {
				setup_postdata( $post );
				?>
				<div class="posts__item post-item">
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
				<?php
			}
			wp_reset_postdata(); 
			?>				
		</div>
	</div>
</section>

<?php
get_footer();

<?php get_header(); ?>

<section class="row">
	<div>
		<div>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class = "mypost">
				<h1><?php the_title(); ?></h1>

				<p><?php the_content(); ?></p>
			</div>

			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>
			<?php endif; ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>
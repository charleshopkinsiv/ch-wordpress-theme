<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation( array(
				'prev_text' => __( '<i class="fas fa-arrow-left"></i> Prev Article: %title'),
				'next_text' => __( 'Next Article: %title <i class="fas fa-arrow-right"></i>'),
			));

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

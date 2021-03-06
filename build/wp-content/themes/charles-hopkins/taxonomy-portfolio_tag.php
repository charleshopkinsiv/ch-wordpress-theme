<?php
get_header();
?>

<div id="primary" class="content-area portfolio-archive">
		<main id="main" class="site-main container">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			<?php
				the_archive_title( '<h1>', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
				<div class="container-fluid px-0 py-5">
					<div class="row no-gutter no-gutters">
			<?php
			/* Start the Loop */
			
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'project-archive' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

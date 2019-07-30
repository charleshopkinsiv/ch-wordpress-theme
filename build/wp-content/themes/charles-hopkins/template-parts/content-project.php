<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content portfolio-content">
		
		<div class="container">
			<div class="row">
			<div id="portfolio-content" class="w-75">
			<h2><a href="<?php echo get_post_meta($post->ID, '_portfolio_link', true) ?>" target="_blank" ><?php echo get_post_meta($post->ID, '_portfolio_link_title', true) ?></a></h2>
				<div>
				<?php echo get_the_term_list( $post->ID, 'portfolio_tag', '', ', ' ); ?> 
				</div><br>
				
			<?php the_content(); ?>

			</div>
			<div id="portfolio-image" class="w-25">
				<a href="<?php echo get_post_meta($post->ID, '_portfolio_link', true) ?>" target="_blank" rel="noopener">
					<img class="alignnone size-large wp-image-32" src="<?php echo get_post_meta($post->ID, '_portfolio_image_link', true) ?>" alt="" width="640" height="983" />
				</a>
				</div>
			</div>
		</div>
	</div><br><br><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'charles-hopkins' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

		<div class="w-25">
			<a href="<?php the_permalink() ?>" class="color-link">
			
				<?php $len = 27;
				echo substr(get_the_title(), 0, $len);
				if(strlen(get_the_title()) > $len) {echo "...";} ?>

				<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
      </a>
		</div>
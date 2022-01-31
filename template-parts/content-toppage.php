<a class="content-toppage" href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-meta">
		<?php
		hamahome_posted_on();
		hamahome_new_badge();
		?>
	</div><!-- .entry-meta -->
	<p class="entry-title"><?php the_title(); ?></p>
</a><!-- #post-<?php the_ID(); ?> -->

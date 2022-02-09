<?php
get_header();
?>
	
<main id="primary" class="single_post">

	<?php
	get_template_part( 'inc/_breadcrumb' );
	?>

		<div class="container flex flex-around">

			<article class="col-lg8">
				<?php
				while ( have_posts() ) :
					the_post();

					if (has_post_thumbnail()) :
				?>
					<figure class="post_item_image">
						<?php the_post_thumbnail('large'); ?>
					</figure>
				<?php
					endif;
				?>
					<h2 class="post_item_heading">
						<?php the_title(); ?>
					</h2>
				<?php
					the_content();

				endwhile; // End of the loop.
				?>
			</article>

			<aside class="col-lg3">
				<?php
				if (is_singular('construction')) :
					$tags = get_terms( [ 'taxonomy' => 'construction_cat' ] );
          if ( $tags ): ?>
						<div class="widget_block">
							<h2>カテゴリー</h2>
							<ul>
								<?php foreach ( $tags as $tag ) : ?>
									<li>
										<a href="<?php echo get_tag_link( $tag->term_id ); ?>">
											<?php echo $tag->name; ?>
										</a>
									</li> 
								<?php endforeach; ?>
							</ul>
						</div>
				<?php 
					endif;
				else:
					dynamic_sidebar( 'sidebar-1' );
				endif;
				?>
			</aside>
				
		</div>

	</main><!-- #main -->

<?php
get_footer();

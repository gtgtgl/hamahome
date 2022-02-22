<?php
get_header();
?>

<?php
$title = get_my_archive_title();
$slug  = get_my_archive_slug();
?>
	
<main id="primary" class="<?php echo $slug; ?>">
		
	<div id="page_topimg" class="<?php echo 'page_' . $slug; ?>">
		<h1>
			<?php echo $title; ?>
		</h1>
	</div>

	<?php
	get_template_part( 'inc/_breadcrumb' );
	?>

    <section>
      <div class="container">

				<ul class="post_items">

					<?php
					while ( have_posts() ) :
						the_post();
					?>

						<li class="post_item">
							<header class="post_item_header">
								<div class="post_item_date"><?php the_time( 'Y.m.d' ); ?></div>
									<?php $tags = get_the_tags($post->ID); ?>
                	<?php if ( $tags ): ?>
                    <ul class="post_item_cats">
                      <?php foreach ( $tags as $tag ) : ?>
												<li class="post_item_cat">
													<a href="<?php echo get_tag_link( $tag->term_id ); ?>">
														<?php echo $tag->name; ?>
													</a>
												</li> 
											<?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
							</header>
							<div class="post_item_content">
								<figure class="post_item_image">
									<a href="<?php the_permalink(); ?>">
										<?php if (has_post_thumbnail()) : ?>
											<?php the_post_thumbnail('medium'); ?>
										<?php else : ?>
											<img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="<?php the_title(); ?>">
										<?php endif; ?>
									</a>
								</figure>
								<h2 class="post_item_heading">
									<?php echo the_title(); ?>
								</h2>
								<div class="post_item_excerpt">
									<?php echo the_excerpt(); ?>
									<p class="post_item_more"><a href="<?php the_permalink(); ?>">続きを読む</a></p>
								</div>
							</div>
						</li>

					<?php
					endwhile; // End of the loop.
					?>
				
				</ul>
				
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();

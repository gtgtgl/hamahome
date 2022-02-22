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

					if ( has_post_thumbnail() ) :
				?>
					<figure class="post_item_image">
						<?php the_post_thumbnail('large'); ?>
					</figure>
				<?php
					endif;
				?>
				<?php
					if ( is_singular( 'construction' ) ) :
				?>
					<div class="construction_info">
						<p class="construction_name"><?php echo get_post_meta($post->ID, '_key_for_field_1', true);; ?></p>
						<?php $tags = get_the_terms($post->ID, 'construction_cat'); ?>
							<?php if ( $tags ): ?>
								<ul class="construction_cats">
									<?php foreach ( $tags as $tag ) : ?>
										<li class="construction_cat">
											<a href="<?php echo get_tag_link( $tag->term_id ); ?>">
												<?php echo $tag->name; ?>
											</a>
										</li> 
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
					</div>
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

				<?php
				$wp_obj = get_queried_object();
				if ( is_singular( 'construction' ) ) :
					$post_type = 'construction';
					$text = get_post_type_object( $post_type )->label;
					$link = get_post_type_archive_link( $post_type );
				else :
					$categories = get_the_category( $wp_obj->ID );
					$cat = $categories[ 0 ]->term_id;
					$text = get_cat_name( $cat );
					$link = get_category_link( $cat );

				endif;
				?>
				
				<div class="back_btn_wrap">
					<a class="back_btn btn-02" href="<?php echo $link; ?>"><?php echo $text; ?> 一覧へ戻る</a>
				</div>

			</article>

			<aside class="col-lg3">
				<?php
				if (is_singular( 'construction' )) :
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

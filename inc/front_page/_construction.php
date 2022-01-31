

	<section id="top_construction">
		<div class="container">
			<h2><span class="orange">施</span>工事例</h2>
			<a href="<?php echo get_post_type_archive_link( 'construction' ); ?>" class="btn_list">一覧へ<img src="<?php echo get_template_directory_uri(); ?>/img/dot_icon.svg" alt="一覧へ"></a>

			<div class="construction_wrap">
				<button href="#" class="arrow rightbutton"></button>
				<button href="#" class="arrow leftbutton"></button>

				<div class="construction_inner scroll-wpp">

				<div class="construction_item_container">

					<?php
						$args = array(
							'post_type' => 'construction',
							'posts_per_page' => 4 //表示件数（-1で全ての記事を表示）
						);
						$the_query = get_posts( $args );
						if ( $the_query ) :
						foreach ( $the_query as $post ) :
							setup_postdata( $post );
					?>
					
					<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" class="construction_item">
						<div class="img">
							<?php
							hamahome_new_badge();
							if (has_post_thumbnail()) :
							?>
							<img src="<?php echo get_the_post_thumbnail_url('', 'full'); ?>" alt="<?php the_title(); ?>">
							<?php else : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="<?php the_title(); ?>">
							<?php endif; ?>
						</div>
						<div class="text">
							<p class="title"><?php the_title(); ?></p>
							<span class="construction_name">
								<?php 
								echo get_post_meta(get_the_ID(),'_key_for_field_1',true);
								?>
							</span>

							<?php
								if ($terms = get_the_terms(get_the_ID(), 'construction_cat')) {
								foreach ( $terms as $term ) {
									echo ('<span class="construction_category">');
									echo esc_html($term->name);
									echo ('</span>');
								}
								}
								?>
						</div>
					</a>

					<?php
						endforeach;
						wp_reset_postdata();
						else:
							echo 'データがありません。';
						endif;

					?>					

				</div>

				</div>
			</div>
		</div>
	</section>
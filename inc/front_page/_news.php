
	<section id="top_news">
		<div class="container">
			<h2>お<span class="orange">知</span>らせ</h2>
	
			<div class="news_wrap">
				<div class="tabs">
					<button id="tab_news" class="tab tab_news is-active">新着情報</button>
					<button id="tab_president" class="tab tab_president">社長ブログ</button>
					<button id="tab_staff" class="tab tab_staff">スタッフブログ</button>
				</div>
				<div class="content">

					<div id="content_news" class="panel content_news is-show">
						<div class="panel_header">
							<p class="title">お知らせ</p>
							<a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="btn_list">一覧へ<img src="<?php echo get_template_directory_uri(); ?>/img/dot_icon.svg" alt="一覧へ"></a>
						</div>
						
						<?php
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => 3 //表示件数（-1で全ての記事を表示）
							);
							$the_query = get_posts( $args );
							if ( $the_query ) :
							foreach ( $the_query as $post ) :
								setup_postdata( $post );
								get_template_part( 'template-parts/content', 'toppage' );
							endforeach;
							wp_reset_postdata();
							else:
								echo 'データがありません。';
							endif;
						?>
					</div>

					<div id="content_president" class="panel content_president">
						<div class="panel_header">
							<p class="title">
							<img src="<?php echo get_template_directory_uri(); ?>/img/note.svg" alt="社長ブログ">社長ブログ
							</p>
							<a href="<?php echo get_post_type_archive_link( 'president_blog' ); ?>" class="btn_list">一覧へ<img src="<?php echo get_template_directory_uri(); ?>/img/dot_icon.svg" alt="一覧へ"></a>
						</div>

						<?php
							$args = array(
								'post_type' => 'president_blog',
								'posts_per_page' => 3 //表示件数（-1で全ての記事を表示）
							);
							$the_query = get_posts( $args );
							if ( $the_query ) :
							foreach ( $the_query as $post ) :
								setup_postdata( $post );
								get_template_part( 'template-parts/content', 'toppage' );
							endforeach;
							wp_reset_postdata();
							else:
								echo 'データがありません。';
							endif;
						?>
						
					</div>

					<div id="content_staff" class="panel content_staff">
						<div class="panel_header">
							<p class="title">
							<img src="<?php echo get_template_directory_uri(); ?>/img/note.svg" alt="スタッフブログ">スタッフブログ
							</p>
							<a href="<?php echo get_post_type_archive_link( 'staff_blog' ); ?>" class="btn_list">一覧へ<img src="<?php echo get_template_directory_uri(); ?>/img/dot_icon.svg" alt="一覧へ"></a>
						</div>
						

					<?php
						$args = array(
							'post_type' => 'staff_blog',
							'posts_per_page' => 3 //表示件数（-1で全ての記事を表示）
						);
						$the_query = get_posts( $args );
						if ( $the_query ) :
						foreach ( $the_query as $post ) :
							setup_postdata( $post );
							get_template_part( 'template-parts/content', 'toppage' );
						endforeach;
						wp_reset_postdata();
						else:
							echo 'データがありません。';
						endif;
					?>

					</div>

				</div>
				<!-- end of .content -->
			</div>
		</div>
	</section>

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
							<?php 
								$category_id_news = get_cat_ID( 'お知らせ' );
								$category_link_news = get_category_link( $category_id_news );
								 ?>
							<a href="<?php echo esc_url( $category_link_news ); ?>" class="btn_list">一覧へ<img src="<?php echo get_template_directory_uri(); ?>/img/dot_icon.svg" alt="一覧へ"></a>
						</div>
						
						<?php
							$args = array(
								'post_type' => 'post',
								'category_name'    => 'news',
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
							<?php 
								$category_id_president = get_cat_ID( '社長ブログ' );
								$category_link_president = get_category_link( $category_id_president );
								 ?>
							<a href="<?php echo esc_url( $category_link_president ); ?>" class="btn_list">一覧へ<img src="<?php echo get_template_directory_uri(); ?>/img/dot_icon.svg" alt="一覧へ"></a>
						</div>

						<?php
							$args = array(
								'post_type' => 'post',
								'category_name'    => 'president',
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
							<?php 
								$category_id_staff = get_cat_ID( 'スタッフブログ' );
								$category_link_staff = get_category_link( $category_id_staff );
								 ?>
							<a href="<?php echo esc_url( $category_link_staff ); ?>" class="btn_list">一覧へ<img src="<?php echo get_template_directory_uri(); ?>/img/dot_icon.svg" alt="一覧へ"></a>
						</div>
						

					<?php
						$args = array(
							'post_type' => 'post',
							'category_name'    => 'staff',
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
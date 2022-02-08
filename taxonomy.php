<?php
get_header();
?>

<?php
$title = '施工事例';
$slug  = 'construction';
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

        <div class="select_wrap">
          <select id="select_category">
            <option value="" selected>カテゴリーを選択</option>
            <?php
            $terms = get_terms('construction_cat');
            foreach ( $terms as $term ) {
              echo '<option value="'.get_term_link($term).'">'.$term->name.'</option>';
            }
            ?>
          </select>
        </div>

				<ul class="post_items">

					<?php
					while ( have_posts() ) :
						the_post();
					?>

            <li><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" class="construction_item">
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
            </a></li>

					<?php
					endwhile; // End of the loop.
					?>
				
				</ul>
				
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();

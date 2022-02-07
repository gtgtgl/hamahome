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

					<?php
					while ( have_posts() ) :
						the_post();
					?>

						

					<?php
					endwhile; // End of the loop.
					?>
				
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();

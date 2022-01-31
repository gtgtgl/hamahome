<?php
get_header();
?>

	<main id="primary" class="site-main">
		
	<div id="top_image">
		<div class="text">
			<p class="title">
				一棟一棟心のこもった家づくり
			</p>
			<p>
			テキストがはいります。テキストがはいります。<br>
			テキストがはいります。テキストがはいります。<br>
			テキストがはいります。
			</p>
		</div>
	</div>
	
	<?php 
	get_template_part( 'inc/front_page/_news' );
	get_template_part( 'inc/front_page/_construction' );
	get_template_part( 'inc/front_page/_fuudo' );
	get_template_part( 'inc/front_page/_iedukuri' );
	get_template_part( 'inc/front_page/_photo' );
	get_template_part( 'inc/front_page/_aboutcompany' );
	?>

	</main><!-- #main -->

<?php
get_footer();

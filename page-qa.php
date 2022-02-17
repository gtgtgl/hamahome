<?php
get_header();
?>

<?php
$page = get_post( get_the_ID() );
$slug = $page->post_name;
?>
	
<main id="primary" class="<?php echo $slug ?>">
		
	<div id="page_topimg" class="page_<?php echo $slug ?>">
		<h1>
			<?php the_title(); ?>
		</h1>
	</div>

	<?php
	get_template_part( 'inc/_breadcrumb' );
	?>

<section class="mb80">
    <div class="container">

    <p class="center">
        お家のことでお困りのこと、ございませんか？<br>
        ハマホームならそのお困りごとを解決できるかもしれません！
    </p>
    
        <div class="acbox acbox-qa mt60">
            <input id="qa01" type="checkbox">
            <label for="qa01">お困りごとの内容が入ります。</label>
            <div class="acbox-under">
                <p>お困りごとの回答が入ります。お困りごとの回答が入ります。</p>
            </div>
        </div>
    
        <div class="acbox acbox-qa">
            <input id="qa02" type="checkbox">
            <label for="qa02">お困りごとの内容が入ります。</label>
            <div class="acbox-under">
                <p>お困りごとの回答が入ります。お困りごとの回答が入ります。</p>
            </div>
        </div>
    
        <div class="acbox acbox-qa">
            <input id="qa03" type="checkbox">
            <label for="qa03">お困りごとの内容が入ります。</label>
            <div class="acbox-under">
                <p>お困りごとの回答が入ります。お困りごとの回答が入ります。</p>
            </div>
        </div>
    
        <div class="acbox acbox-qa">
            <input id="qa04" type="checkbox">
            <label for="qa04">お困りごとの内容が入ります。</label>
            <div class="acbox-under">
                <p>お困りごとの回答が入ります。お困りごとの回答が入ります。</p>
            </div>
        </div>
    
        <div class="acbox acbox-qa">
            <input id="qa05" type="checkbox">
            <label for="qa05">お困りごとの内容が入ります。</label>
            <div class="acbox-under">
                <p>お困りごとの回答が入ります。お困りごとの回答が入ります。</p>
            </div>
        </div>

    </div>
</section>

	</main><!-- #main -->

<?php
get_footer();

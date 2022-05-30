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

    <section>
        <div class="container">
            <h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/warranty/img01.jpg" alt="住宅あんしん保証" width="100">
            </h2>

            <p class="left-center">
            浜本建設では、お客様の不安を少しでも取り除けるよう、瑕疵保険・完成保証・地盤調査などの<br>
            安心な住まいづくりのために必要な保証を整えております。
            </p>
        </div>
    </section>
	
<section class="bg_purple">
    <div class="container">

    <h2>あんしん住宅瑕疵保険</h2>

    <div class="flex mt40">
        <div class="col-lg4 center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/warranty/img02.jpg" alt="住宅あんしん保証" width="300">
        </div>
        <div class="col-lg8">
            <h3>
            住宅の発注者や買主を保護する<br>
            「住宅瑕疵担保責任保険法人」が運営する保険制度です。
            </h3>
            <p>
            住宅あんしん保証のあんしん住宅瑕疵保険は、第三者機関による検査を行うことで、住宅が確かな品質である事を確認し、保険証券を発行する｢技術力｣の証です。申込された住宅に万が一、品確法上の瑕疵が発生した場合に、保険金が支払われるしくみです。<br>
            工事中は鉄筋検査、金物検査、防水検査の3回検査が行われます。
            </p>
        </div>
    </div>

    <a href="https://www.j-anshin.co.jp/service/kashihoken/" target="_blank" class="btn-01">あんしん住宅瑕疵保険のサイトへ</a>
    </div>
</section>
	
<section>
    <div class="container">

    <h2>完成保証</h2>

    <div class="flex mt40">
        <div class="col-lg4 center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/warranty/img03.jpg" alt="完成保証" width="300">
        </div>
        <div class="col-lg8">
            <h3>
            安心してお任せください！<br>
            万が一、建設中に建設会社が倒産した時など、<br>
            もしもの場合にも建設中の住宅を完成まで保証します。
            </h3>
            <p>
            住宅建設は、完成引渡し前に代金を支払う必要があります。<br>
            万が一、建設中に建築会社が倒産してしまったら…。そんな時でも、完成保証に入っている弊社なら安心です。また、住宅あんしんの完成保証制度の届出事業者は、健全経営の優良な建設会社なので安心してお任せください。
            </p>
        </div>
    </div>

    <a href="https://www.j-anshin.co.jp/service/kanseihosho/" target="_blank" class="btn-01">完成保証制度のサイトへ</a>
    </div>
</section>
	
<section class="bg_purple">
    <div class="container">

    <h2>地盤調査・保証</h2>

    <div class="flex mt40">
        <div class="col-lg4 center">
            <div class="has-circle">
                <img src="<?php echo get_template_directory_uri(); ?>/img/warranty/img02.jpg" alt="住宅あんしん保証" width="300">
                <div class="circle">
                    <p>最先端技術<br>の<br>地盤調査</p>
                </div>

            </div>
        </div>
        <div class="col-lg8">
            <h3>
            マイホームづくりは、地盤の調査から始めましょう。<br>
            地盤の『調査』『対策』『保証』をワンセット！
            </h3>
            <p>
            家が傾く、壁がはがれる、ドアが開かない・・・。<br>
            住宅に関するトラブルの 7 割近くが地盤に関係したこと。<br>
            住宅あんしん保証の地盤調査・保証制度は、選ばれた地盤調査会社による調査（改良工事が必要な場合は対策工事）を行ったうえで、不同沈下に起因する損害が発生した場合は、建物の修復費用、地盤の修復費用を「完成お引渡し日より 10 年間、最高 5,000 万円（地盤の修復費用は最高 500 万円）まで」保証します。
            </p>
        </div>
    </div>
    </div>
</section>

	</main><!-- #main -->

<?php
get_footer();

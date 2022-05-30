<?php
get_header();
?>


<?php
$page = get_post( get_the_ID() );
$slug = $page->post_name;
?>
	
<main id="primary" class="<?php echo $slug ?>">
		
	<div id="page_topimg" class="page_company">
		<h1>
			<?php the_title(); ?>
		</h1>
	</div>

	<?php
	get_template_part( 'inc/_breadcrumb' );
	?>

	<section>
		<div class="container">
			<div class="flex">
				<div class="col-lg8">
					
				<table>
					<tr>
						<th>社名</th>
						<td>浜本建設株式会社</td>
					</tr>
					<tr>
						<th>本社</th>
						<td>〒910-0001　福井県福井市大願寺 1-4-16</td>
					</tr>
					<tr>
						<th>連絡先</th>
						<td>TEL.0776-26-3183　FAX.0776-22-2374</td>
					</tr>
					<tr>
						<th>資本金</th>
						<td>1,000万円</td>
					</tr>
					<tr>
						<th>役員</th>
						<td>会長　浜本 功一<br>社長　浜本 憲一</td>
					</tr>
					<tr>
						<th>許可・登録</th>
						<td>
						建築業許可　　　　福井県知事登録　 （般-2）第2556号<br>
						一級建築士事務所　福井県知事登録　 第い -1139 号<br>
						宅地建物取引業者　福井県知事登録　 （4）第1292号<br>
						住宅瑕疵担保責任　住宅保証機構　　 10004159 号<br>
						　　　　　　　　　住宅あんしん保証　0010008<br>
						完成保証　　　　　住宅あんしん保証　0010008<br>
						産業廃棄物　　　　収集運搬業　　　 1801128032<br>
						木材業者　　　　　福井県木材業者　 福木連南越 56 号<br>
						</td>
					</tr>
				</table>

				</div>

				<div class="col-lg4 center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/company/img01.jpg" alt="浜本建設株式会社" class="company_img01">
				</div>
			</div>

			<div class="flex mt80">
				<div class="col-md4 flex">
					<div class="company_card">
						<p class="title">経営ビジョン</p>
						<p>
						「日本一福井にあった家づくり」「一棟一棟心のこもった家づくり」を通じ、お客様に喜んでいただく事を我々の喜びとする会社を目指す。
						</p>
					</div>
				</div>
				
				<div class="col-md4 flex">
					<div class="company_card">
						<p class="title">経営理念</p>
						<p>
						お客様、仲間、協力業者、会社に感謝し、一つ一つ小さな事に手を抜かず、常に本物を追求します。
						</p>
					</div>
				</div>
				
				<div class="col-md4 flex">
					<div class="company_card">
						<p class="title">社是社訓</p>
						<p>
						技術・品質・価格を追求し、本物を提供する。問題がある事を嘆かず、問題に挑戦する。
						</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="googlemap">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.461246913389!2d136.22971231526984!3d36.08224278010256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff8be4c9c123ef7%3A0xf11341dce39b141d!2z5rWc5pys5bu66Kit!5e0!3m2!1sja!2sjp!4v1643179271364!5m2!1sja!2sjp" id="googlemap" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</section>

	</main><!-- #main -->

<?php
get_footer();

<?php
	get_template_part( 'inc/front_page/_contactus' );
?>

<footer id="colophon" class="site-footer">

	<div class="site-info">
		<div class="container">

		<div class="flex">

			<div class="col-6 col-md5 col-xl4">
				<div class="menu_company">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo_t.png" alt="ハマホーム" class="site_logo">
					<p class="company_name">
					ハマホーム 浜本建設株式会社
					</p>
					<p>
					〒910-0001 福井市大願寺 1-4-16<br>
					TEL.0776-26-3183　FAX.0776-22-2374
					</p>
					<p>
					【事業内容】新築 リフォーム 不動産 店舗改装 製炭
					</p>
				</div>
			</div>

			<div class="col-6 col-md3 col-xl2">
				<h4>会社情報</h4>
				<ul class="footer-sitemap">
					<li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>">会社案内</a></li>
					<li><a href="<?php echo esc_url( home_url( '/staff' ) ); ?>">スタッフ紹介</a></li>
				</ul>
			</div>

			<div class="col-6 col-md4 col-xl2">
				<h4>お知らせ</h4>
				<ul class="footer-sitemap">
					<li><a href="<?php echo get_post_type_archive_link( 'post' ); ?>">お知らせ一覧</a></li>
					<li><a href="<?php echo get_post_type_archive_link( 'president_blog' ); ?>">社長ブログ</a></li>
					<li><a href="<?php echo get_post_type_archive_link( 'staff_blog' ); ?>">スタッフブログ</a></li>
				</ul>
			</div>

			<div class="col-6 col-md4 col-xl2">
				<h4>事例紹介</h4>
				<ul class="footer-sitemap">
					<li><a href="#">施工事例</a></li>
					<li><a href="#">目で見る写真</a></li>
				</ul>
			</div>

			<div class="col-6 col-md4 col-xl3">
				<h4>家づくりについて</h4>
				<ul class="footer-sitemap">
					<li><a href="#">家づくりの流れ</a></li>
					<li><a href="#">リフォーム</a></li>
					<li><a href="#">住宅あんしん保証</a></li>
					<li><a href="#">お困りごと</a></li>
				</ul>
			</div>

			<div class="col-6 col-md4 col-xl3">
				<h4>福井の風土に合う家</h4>
				<ul class="footer-sitemap">
					<li><a href="#">パネル工法</a></li>
					<li><a href="#">炭の力</a></li>
					<li><a href="#">省エネの断熱</a></li>
					<li><a href="#">木へのこだわり</a></li>
				</ul>
			</div>
		</div>
		</div>
	</div><!-- .site-info -->

	<div id="copyright">
		<div class="container flex">
			<ul class="menu-footer">
				<li>
					<a href="#">プライバシーポリシー</a>
				</li>
			</ul>
			<p>Copyright © 2021 Hama Home.</p>
		</div>
	</div>

</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>

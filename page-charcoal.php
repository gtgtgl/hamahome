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
            <h2>ハマホームの床下敷き炭</h2>

            <p class="left-center">
            当社は床下に炭を吊るす敷き炭を推奨しております。炭を床下に吊るすことで、<br>
            大切な家を湿気やシロアリ、カビから守ってくれます。
            </p>

            <div class="flex flex-center mt60">
                <div class="col-sm6 col-lg4 center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/charcoal/img01.jpg" alt="浜本建設株式会社" class="company_img01" width="300">
                </div>
                <div class="col-sm6 col-lg4 center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/charcoal/img02.jpg" alt="浜本建設株式会社" class="company_img01" width="300">
                </div>
            </div>

        </div>

    </section>

    <section id="charcoal-sec01">
        <div class="container">
            <h2>炭の主な特徴</h2>

            <ul class="ul_charcoal">
                <li>木材が腐るのを防ぎます。</li>
                <li>遠赤外線効果があります。</li>
                <li>空気を清浄します。</li>
                <li>湿度を調整します。</li>
                <li>消臭効果があります。</li>
                <li>磁場を調整し、体に与える悪影響を軽減します。</li>
                <li>マイナスイオンを発生します。</li>
            </ul>

            <p class="center mt40">
            人にとって有益な事ばかりです。健康、快適にはかかせないですね！
            </p>
        </div>
    </section>

    <section id="charcoal-sec02">
        <div class="container">
            <h2>炭の主な特徴</h2>

            <div class="flex flex-center mt60">
                <div class="col-md6 col-lg4 center img img03">
                    <div class="circle">
                        <p>料理や<br>飲料用に<br>最適！</p>
                    </div>

					<img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/charcoal/img03.jpg" alt="浜本建設株式会社" class="company_img01" width="300">

                    <p class="big center">
                    白炭
                    </p>
                    <p class="p">
                    代表格は備長炭。硬く焼き締まっていて、表面が白っぽいのが特徴です。火持ちがよいので焼き鳥やうなぎなどの焼き物料理に珍重されています。最近では飲料水に入れたり、炊飯時に使ったり、用途も多様化してきました。
                    </p>
                </div>
                <div class="col-md6 col-lg4 center img img04">
                    <div class="circle">
                        <p>除湿や<br>消臭に<br>最適！</p>
                    </div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/charcoal/img04.jpg" alt="浜本建設株式会社" class="company_img01" width="300">

                    <p class="big center">
                        黒炭
                    </p>
                    <p class="p">
                    比較的柔らかい炭で、表面が黒く、樹皮が残っているのが特徴。黒い粉が多いので、飲料・料理にはあまり向きません。除湿や消臭などにおすすめです。<span class="text-blue">当社では、この黒炭を袋詰めにして床下に吊るしています。</span>
                    </p>
                </div>
            </div>

        </div>
    </section>

<section id="charcoal-sec03">
    <div class="container">
        <h2>炭が除湿や消臭に優れている理由</h2>

        <div class="flex flex-center mt60 max900">
            <div class="col-md4 center">

                <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/charcoal/img05.jpg" alt="浜本建設株式会社" class="company_img01" width="300">

                <p class="center" style="font-size:13px;">
                杉の断面 黒炭 140倍拡大
                </p>
            </div>
            <div class="col-md8">
                <p class="p">
                炭の原料は植物。植物には導管と呼ばれる水や栄養素を送る管があります。これは植物の種類によって数も状態も違います。広葉樹は導管がまばらで少ないのが特徴です。一方針葉樹は、導管が規則正しく並んで間の壁が薄いのが特徴。竹は針葉樹に似ていますが、導管が肉厚です。炭にした場合、この導管と導管の間の壁に微細な穴が出来、表面積が増えます。針葉樹(杉･松･桧材等)の木炭は、他の炭に比べて調湿・脱臭能力や空気を濾過する能力が優れており、住宅に使用するのに適しています。
                </p>
            </div>
        </div>

    </div>
</section>

	</main><!-- #main -->

<?php
get_footer();

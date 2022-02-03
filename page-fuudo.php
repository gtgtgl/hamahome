<?php
get_header();
?>

<?php
$page = get_post( get_the_ID() );
$slug = $page->post_name;
?>
	
<main id="primary" class="<?php echo $slug ?>">
		
	<div id="page_topimg" class="page_fuudo">
		<h1>
			<?php the_title(); ?>
		</h1>
	</div>

	<?php
	get_template_part( 'inc/_breadcrumb' );
	?>

    <section>
        <div class="container">
            <h2>夏の家</h2>

            <p class="big center">
            暑い屋根裏の空気を外に追い出し、地表の涼しい空気を家の周りに循環させます。
            </p>

            <p class="left-center">
            夏の強い日差しを浴びて屋根裏の温度は急上昇、家の中は蒸し風呂状態。<br>
            ハマホームの家は「暖かい空気は上昇する」という自然の働きから、<br>
            断熱材と天井・内壁・床板の間に出来た通気路に絶えず上昇気流を起こして、<br>
            暑い屋根裏の空気を外に追い出し、地表の涼しい空気を家の周りに循環させます。<br>
            この空気が熱と湿気を家の外に放出してくれるのです。<br>
            そしてこの働きに一役買っているのが、<br>
            床下に数箇所設けられる床下換気孔と屋根裏につけられた自動温度設定で開閉する換気扇。<br>
            設定した気温以上になると自動で働き、室温を上手にコントロールしてくれます。
            </p>

            <div class="summer_wrap mt40">
                a
            </div>

            <div class="flex mt60">
                <div class="col-lg6 flex">
                    <div class="col-sm4 mb0">a</div>
                    <div class="col-sm8 mb0">
                        <p>
                        福井県の夏の外気温とハマホームの家の気温と在来木造住宅の気温の変化を表したグラフです。外気温の低い6月は、室内温度が一般在来木造住宅よりも高く、外気温の高い7～8月は、室内温度が外気温よりも高い一般在来木造住宅と比べて、PS工法では外気温よりも低く住みやすい温度を保ちます。人にも家にも地球にも優しい家なのです。
                        </p>
                    </div>
                    <div class="col-12">
                        <p class="big center">
                        福井の夏の外気温とハマホームの家の気温の変化
                        </p>
                    </div>
                </div>
                <div class="col-lg6 flex">
                    <div class="col-sm4 mb0">a</div>
                    <div class="col-sm8 mb0">
                        <p>
                        ハマホームの家では、6～8月を通して、外湿度が一般在来木造住宅より低くなっています。ハマホームの家では絶え上昇している空気が、熱を放出するだけでは なく湿 度 も外 へ 放 出しているからです。湿度が低いという事は、この時期に多い木の腐りやシロアリの発生が抑えられるという事です！つまり、健康長寿命の家という訳ですね！！
                        </p>
                    </div>
                    <div class="col-12">
                        <p class="big center">
                        福井の夏の外湿度とハマホームの家の湿度の変化
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
    <section id="fuudo">
    <div class="container">
        <h2>ハマホームのここがすごい！</h2>

        <div class="flex flex-center season02">

            <div class="col-7 col-md6 col-lg3">
                    <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/title01.png" alt="パネル工法" width="200">
                    </div>
                <div class="img">
                    <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon01.png" alt="パネル工法" width="130">
                    </div>
                </div>
                <p class="s">テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <a href="#" class="btn-01">もっと詳しく</a>
            </div>

            <div class="col-7 col-md6 col-lg3">
                    <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/title02.png" alt="炭の力" width="200">
                    </div>
                <div class="img">
                    <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon02.png" alt="炭の力" width="130">
                    </div>
                </div>
                <p class="s">床下に炭を吊るすことで、大切な家を湿気やシロアリ、カビから守ってくれます。</p>
                <a href="#" class="btn-01">もっと詳しく</a>
            </div>

            <div class="col-7 col-md6 col-lg3">
                    <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/title03.png" alt="省エネ断熱" width="200">
                    </div>
                <div class="img">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon03.png" alt="省エネ断熱" width="130">
                    </div>
                </div>
                <p class="s">柱の外側から断熱材を貼付ける外断熱工法です。</p>
                <a href="#" class="btn-01">もっと詳しく</a>
            </div>

            <div class="col-7 col-md6 col-lg3">
                    <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/title04.png" alt="木へのこだわり！" width="200">
                    </div>
                <div class="img">
                    <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon04.png" alt="木へのこだわり！" width="130">
                    </div>
                </div>
                <p class="s">柱材は１本の木から１本しかとれない柱（芯持ち材）を使っています。</p>
                <a href="#" class="btn-01">もっと詳しく</a>
            </div>

        </div>

    </div>
</section>

	</main><!-- #main -->

<?php
get_footer();

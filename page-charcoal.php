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
					<img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/charcoal/img01.jpg" alt="ハマホームの床下敷き炭" class="company_img01" width="300">
                </div>
                <div class="col-sm6 col-lg4 center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/charcoal/img02.jpg" alt="ハマホームの床下敷き炭" class="company_img01" width="300">
                </div>
            </div>

        </div>

    </section>

    <section id="charcoal-sec01">
        <div class="container">
            <h2>炭の主な特徴</h2>

            <ul class="ul_check">
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

					<img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/charcoal/img03.jpg" alt="白炭" class="company_img01" width="300">

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
					<img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/charcoal/img04.jpg" alt="黒炭" class="company_img01" width="300">

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

<section class="charcoal-gray">
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

        <p class="center big">
        炭の材料ごとの表面積比較
        </p>

        <p class="center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/charcoal/img06.png" alt="炭の材料ごとの表面積比較" width="700">
        </p>

    </div>
</section>

<section>
    <div class="container">

        <h2>ハマホームの「敷き炭」って？</h2>
    
        <div class="acbox acbox-qa">
            <input id="qa01" type="checkbox">
            <label for="qa01">ハマホームの炭ってどんなの？</label>
            <div class="acbox-under">
                <p>工事中に出た木材の切れ端を自社製炭所で、炭にしています。<br>ハマホームの炭は、除湿、消臭の効果の高い「<strong>黒炭</strong>」を使用しています。</p>
            </div>
        </div>
    
        <div class="acbox acbox-qa">
            <input id="qa02" type="checkbox">
            <label for="qa02">燃えないの？</label>
            <div class="acbox-under">
                <p>製炭機にて木材の揮発成分を燃焼除去しているため燃えにくく、<strong>着火源となる心配はありません</strong>。</p>
            </div>
        </div>
    
        <div class="acbox acbox-qa">
            <input id="qa03" type="checkbox">
            <label for="qa03">どのくらいの期間使えるの？</label>
            <div class="acbox-under">
                <p>
                炭には<strong>吸湿性</strong>と<strong>放湿性</strong>の両方があります。<br>
                春〜夏は、じめじめした空気を吸い込みます。秋〜冬になるとまわりの空気が乾燥してくるので、持っている水分を放出します。このサイクルが<strong>半永久的に持続します</strong>。ですから、一度施工してしまえば、<strong>メンテナンスフリーで家を快適に保ってくれます</strong>。
                </p>
            </div>
        </div>
    
        <div class="acbox acbox-qa">
            <input id="qa04" type="checkbox">
            <label for="qa04">どうして床下にいれるの？</label>
            <div class="acbox-under">
                <p>
                一番湿気のたまりやすい所が床下なのです。<br>
                ハマホームの家は、床下から空気を入れて、壁の中を通して小屋裏から外に出しています。ですから、最初に入ってくる床下で空気を変えているのです。きれいで快適な空気が家の中を通っているんですね！
                </p>
            </div>
        </div>
    
        <div class="acbox acbox-qa">
            <input id="qa05" type="checkbox">
            <label for="qa05">どれくらいの量を入れるの？</label>
            <div class="acbox-under">
                <p>
                <strong>1坪あたり6袋</strong>を目安に、床の下地材の乗木に炭袋を吊るします。1袋約1kgなので、<strong>1坪（畳2帖分）あたり6kg</strong>も入っているんですね！
                </p>
            </div>
        </div>

        <p class="max700 mt50">
            「敷き炭」は昔からある木炭の利用法の一つ。家の床下に木炭を敷き詰める、大胆かつ画期的な方法です。特に福井県は湿気の多い県。梅雨時や冬の湿気で不快な思いをした経験がある方も多いのでは。<br>
            炭は非常に吸湿力が高い。それだけでなく、湿度の高いところでは水分を吸着し、反対に湿度の低いところでは中に閉じ込めた水分を吐き出します。つまり炭は呼吸するのです。<br>
            この炭の呼吸は半永久的に続くので、一度床下に炭を敷けばその調湿効果はずっと続きます。表面積の大きい炭は湿気ばかりでなく、人体に有害な物質も吸着してくれます。<br>
            また、家の最大の敵であるシロアリ。シロアリの好物は、ずばり湿気。気密性の高い住宅では、床下に湿気がたまりやすく、シロアリの大量発生につながります。通気性がよく、湿気のない住宅にはシロアリは発生しないのです。もちろん湿気がない、敷き炭が施された床下ではカビやダニの発生も抑制出来ます。
        </p>

        <p class="center mt30">
            <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/charcoal/img07.jpg" alt="自社オリジナルの炭を使用！" width="500">
        </p>

    </div>
</section>

<section class="charcoal-gray">
    <div class="container">

    <h2>
        まだまだある！炭の活用術！
    </h2>

    <div class="max700 mt40">
        <div class="flex">
            <div class="col-12 mb60">

            <p class="center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/charcoal/img08.jpg" alt="リビング（調湿・消臭効果）">
        </p>

        <h3>
        リビング（調湿・消臭効果）
        </h3>

        <p>
        家族みんなが集まるリビングなどは、そのにおいがこもりやすく、キッチンなどから流れる湿気もたまりがちです。この空間を、爽やかで快適なものにするためには、炭を部屋の四隅に置くのが効果的。<br>
        炭には小さい孔がびっしりあいていて、においのもとを吸着します。また、水分をほとんど含んでいないので、湿気を吸って周囲の湿度を下げ、湿気が少ない時は放出して湿度を調整します。だから調湿、消臭に効果的。<br>
        炭の量は多いほどいいのですが、最初から大量に用意するのは大変なので、まずは無理のない量から。サイドボードなどの家具があれば、その上に鉢やカゴを置いて炭を4～5本飾ってもステキです。または、四隅の床に大きめのカゴや壷を置き、炭を10本ぐらい入れるのもいいでしょう。<br>
        いずれにしても、炭の効果で空気が爽やかになり、家族みんながよりくつろげる空間になること間違いなしです。
        </p>
            </div>
            <div class="col-md7">
                <h3 class="mt0">
                灰皿（タバコのにおい消し）
                </h3>
                <p>
                スモーカーがいると、部屋にタバコのにおいがしみつき、空気も汚れがち。炭の強力な消臭効果を利用してにおいを消し、クリーンな空気を保つようにします。<br>
                部屋の中に炭をたくさん置いてあれば、それだけで消臭効果がありますが、灰皿の風下に炭1～2本を小さいカゴなどに入れて置いたり、同量の炭を直接灰皿の中に入れると、さらに効力を発揮。灰皿に入れた炭も洗って乾かせば、何回でも使えます。予備を用意しておきましょう。
                </p>
            </div>
            <div class="col-md5 center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/charcoal/img09.jpg" alt="灰皿（タバコのにおい消し）" width="270">
            </div>
        </div>

    </div>

</div>
</section>

<section>
    <h2>もっと炭のことを知りたい！</h2>

    <p class="center">
    テキストが入りますテキストが入りますテキストが入りますテキストが入ります
    </p>

    <?php 
        $category_id_charcoal = get_cat_ID( '炭のこと' );
        $category_link_charcoal = get_category_link( $category_id_charcoal );
    ?>

    <a href="<?php echo esc_url( $category_link_charcoal ); ?>" class="btn-01">スタッフブログへ</a>
</section>

	
<section id="fuudo">
    <div class="container">

        <div class="flex flex-center season02">

            <div class="col-7 col-md4">
                    <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/title03.png" alt="省エネ断熱" width="200">
                    </div>
                <div class="img">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon03.png" alt="省エネ断熱" width="130">
                    </div>
                </div>
                <p class="s">柱の外側から断熱材を貼付ける外断熱工法です。</p>
                <a href="<?php echo esc_url( home_url( '/fuudo/eco' ) ); ?>" class="btn-01">もっと詳しく</a>
            </div>

            <div class="col-7 col-md4">
                    <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/title04.png" alt="木へのこだわり！" width="200">
                    </div>
                <div class="img">
                    <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon04.png" alt="木へのこだわり！" width="130">
                    </div>
                </div>
                <p class="s">柱材は１本の木から１本しかとれない柱（芯持ち材）を使っています。</p>
                <a href="<?php echo esc_url( home_url( '/fuudo/wood' ) ); ?>" class="btn-01">もっと詳しく</a>
            </div>

        </div>

    </div>
</section>

	</main><!-- #main -->

<?php
get_footer();

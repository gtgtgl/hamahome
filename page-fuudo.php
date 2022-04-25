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

            <p>
            夏の強い日差しを浴びて屋根裏の温度は急上昇、家の中は蒸し風呂状態。ハマホームの家は「暖かい空気は上昇する」という自然の働きから、断熱材と天井・内壁・床板の間に出来た通気路に絶えず上昇気流を起こして、暑い屋根裏の空気を外に追い出し、地表の涼しい空気を家の周りに循環させます。この空気が熱と湿気を家の外に放出してくれるのです。そしてこの働きに一役買っているのが、床下に数箇所設けられる床下換気孔と屋根裏につけられた自動温度設定で開閉する換気扇。設定した気温以上になると自動で働き、室温を上手にコントロールしてくれます。
            </p>

            <div class="summer_wrap mt40">

            <p class="center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/img01.png" alt="夏の家" width="550">
            </p>

            <!-- Slider main container -->
            <div class="swiper swiper-summer mt40">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="swiper_card">
                        <p class="title">土壌木酢液散布・土台木酢液塗布</p>
                        <div class="flex">
                            <div class="col-lg6 center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/swiper1.jpg" alt="土壌木酢液散布・土台木酢液塗布" width="200">
                            </div>
                            <div class="col-lg6">
                                <p>
                                シロアリ駆除には、有害物質石油製品を使わず自然素材の木酢液を使用。ハマホームでは基礎工事中に土壌に木酢液を散布。また、土台にも塗布しています。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper_card">
                        <p class="title">高機能断熱材</p>
                        <div class="flex">
                            <div class="col-lg6 center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/swiper2.jpg" alt="高機能断熱材" width="200">
                            </div>
                            <div class="col-lg6">
                                <p>
                                ハマホームの断熱は、建物をすっぽり包む外断熱を採用。夏期、熱くなる屋根裏にも屋根直下断熱を施工します。断熱材には、高性能フェノールフォーム保温板「ネオマフォーム」を使っています。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="swiper_card">
                        <p class="title">床下木炭</p>
                        <div class="flex">
                            <div class="col-lg6 center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/swiper3.jpg" alt="床下木炭" width="200">
                            </div>
                            <div class="col-lg6">
                                <p>
                                床下で半永久的に休むことなく湿度を調整したり、悪臭、化学物質を吸着し、きれいな空気を出します。また、腐ることがありません。ハマホームでは床下に袋詰めにした炭を吊るします。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- If we need pagination -->
            <!-- <div class="swiper-pagination"></div> -->

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            </div>
            </div>

            <div class="flex mt40">
                <div class="col-lg6 flex">
                    <div class="col-sm3 col-lg4 mb20 center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/summer01.png" alt="夏の気温" width="100">
                    </div>
                    <div class="col-sm9 col-lg8 mb20">
                        <p>
                        福井県の夏の外気温とハマホームの家の気温と在来木造住宅の気温の変化を表したグラフです。外気温の低い6月は、室内温度が一般在来木造住宅よりも高く、外気温の高い7～8月は、室内温度が外気温よりも高い一般在来木造住宅と比べて、PS工法では外気温よりも低く住みやすい温度を保ちます。人にも家にも地球にも優しい家なのです。
                        </p>
                    </div>
                    <div class="col-12">
                        <p class="big center">
                        福井の夏の外気温とハマホームの家の気温の変化<br>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/summer03.jpg" alt="福井の夏の外気温とハマホームの家の気温の変化" width="380">
                        </p>
                    </div>
                </div>
                <div class="col-lg6 flex">
                    <div class="col-sm3 col-lg4 mb20 center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/summer02.png" alt="夏の湿度" width="100">
                    </div>
                    <div class="col-sm9 col-lg8 mb20">
                        <p>
                        ハマホームの家では、6～8月を通して、外湿度が一般在来木造住宅より低くなっています。ハマホームの家では絶え上昇している空気が、熱を放出するだけでは なく湿 度 も外 へ 放 出しているからです。湿度が低いという事は、この時期に多い木の腐りやシロアリの発生が抑えられるという事です！つまり、健康長寿命の家という訳ですね！！
                        </p>
                    </div>
                    <div class="col-12">
                        <p class="big center">
                        福井の夏の外湿度とハマホームの家の湿度の変化<br>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/summer04.jpg" alt="福井の夏の外湿度とハマホームの家の湿度の変化" width="380">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2>冬の家</h2>

            <p class="big center">
            福井の冬は『雪・湿気』とのたたかい
            </p>

            <p>
            断熱材と、天井・内壁・床板の間に出来た通気路に、絶えず上昇気流を起こすハマホームの家では、暖房をつけた部屋の暖かさをこの通気路で家中に伝達します。また、夏は開放する屋根裏換気扇を、冬の間は閉じることで暖まった空気を外に逃がすことなく循環させます。だから暖房を入れた部屋と入れてない部屋の温度差の少ない、快適な環境になるんです。冬の朝、その暖かさを実感してください。そしてもう一つの大敵、湿気。昼夜の温度差が少ないハマホームの家は、湿度も一定に保ちます。詳しくは温度と湿度のグラフでご確認ください。
            </p>

            <div class="winter_wrap mt40">

            <p class="center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/img02.png" alt="冬の家" width="550">
            </p>

            <!-- Slider main container -->
            <div class="swiper swiper-winter mt40">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="swiper_card">
                        <p class="title">土壌木酢液散布・土台木酢液塗布</p>
                        <div class="flex">
                            <div class="col-lg6 center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/swiper1.jpg" alt="土壌木酢液散布・土台木酢液塗布" width="200">
                            </div>
                            <div class="col-lg6">
                                <p>
                                シロアリ駆除には、有害物質石油製品を使わず自然素材の木酢液を使用。ハマホームでは基礎工事中に土壌に木酢液を散布。また、土台にも塗布しています。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper_card">
                        <p class="title">高機能断熱材</p>
                        <div class="flex">
                            <div class="col-lg6 center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/swiper2.jpg" alt="高機能断熱材" width="200">
                            </div>
                            <div class="col-lg6">
                                <p>
                                ハマホームの断熱は、建物をすっぽり包む外断熱を採用。夏期、熱くなる屋根裏にも屋根直下断熱を施工します。断熱材には、高性能フェノールフォーム保温板「ネオマフォーム」を使っています。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="swiper_card">
                        <p class="title">床下木炭</p>
                        <div class="flex">
                            <div class="col-lg6 center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/swiper3.jpg" alt="床下木炭" width="200">
                            </div>
                            <div class="col-lg6">
                                <p>
                                床下で半永久的に休むことなく湿度を調整したり、悪臭、化学物質を吸着し、きれいな空気を出します。また、腐ることがありません。ハマホームでは床下に袋詰めにした炭を吊るします。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- If we need pagination -->
            <!-- <div class="swiper-pagination"></div> -->

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            </div>
            </div>

            <div class="flex mt40">
                <div class="col-lg6 flex">
                    <div class="col-sm3 col-lg4 mb20 center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/winter01.png" alt="冬の気温" width="100">
                    </div>
                    <div class="col-sm9 col-lg8 mb20">
                        <p>
                        福井県の冬の外気温とハマホームの家の気温と在来木造住宅の気温の変化を表したグラフです。PS工法と一般在来木造住宅との室内温度差は……見ての通り歴然です！　外気温と共に下がる一般在来木造住宅に比べ、PS工法は、室内の熱を外にださないので20度前後を保っています。暖房のない部屋や冬の早朝でも一定の気温を保つハマホームの家は、年配の方やお子様にも安心な家なのです。
                        </p>
                    </div>
                    <div class="col-12">
                        <p class="big center">
                        福井の冬の外気温とハマホームの家の気温の変化<br>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/winter03.jpg" alt="福井の冬の外気温とハマホームの家の気温の変化" width="380">
                        </p>
                    </div>
                </div>
                <div class="col-lg6 flex">
                    <div class="col-sm3 col-lg4 mb20 center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/winter02.png" alt="夏の湿度" width="100">
                    </div>
                    <div class="col-sm9 col-lg8 mb20">
                        <p>
                        冬の室内は、洗濯物を干したり、ストーブをつけたりで湿度も高くなりがちです。しかしPS工法では、家の中の湿度は50％前後！　この湿度は人にとって一番過ごしやすい湿度なんです。もちろん家にとってもいい環境です！　ハマホームの家は、温度も湿度も快適に保ってくれます。
                        </p>
                    </div>
                    <div class="col-12">
                        <p class="big center">
                        福井の冬の外湿度とハマホームの家の湿度の変化<br>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/winter04.jpg" alt="福井の冬の外湿度とハマホームの家の湿度の変化" width="380">
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

            <div class="col-7 col-md4 col-lg3">
                    <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/title02.png" alt="炭の力" width="200">
                    </div>
                <div class="img">
                    <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon02.png" alt="炭の力" width="130">
                    </div>
                </div>
                <p class="s">床下に炭を吊るすことで、大切な家を湿気やシロアリ、カビから守ってくれます。</p>
                <a href="<?php echo esc_url( home_url( '/fuudo/charcoal' ) ); ?>" class="btn-01">もっと詳しく</a>
            </div>

            <div class="col-7 col-md4 col-lg3">
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

            <div class="col-7 col-md4 col-lg3">
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

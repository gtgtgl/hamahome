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

            <div class="flex flex-center max900">
                
                <div class="col-md6">
                    <div class="staff_card">
                        <div class="staff_wrap">
                            <div class="flex">
                                <div class="col-lg4 img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="">
                                </div>
                                <div class="col-lg8 text">
                                    <p class="position">会長</p>
                                    <p class="name">浜本 功一</p>
                                </div>
                                <div class="col-12">
                                    <p class="h4">
                                        <span>仕事について</span>
                                    </p>
                                    <p class="p">
                                        炭と木材のことなら私におまかせください！本物の素材にとことんこだわり、より良い物をお安く提供出来るように頑張ってます。当社の倉庫にはたくさんの良い材料が揃っています。
                                    </p>
                                    <p class="h4">
                                        <span>プライベートについて</span>
                                    </p>
                                    <p class="p">
                                    自社製木炭と木酢液を使って、畑で野菜を育てるのが楽しみです。スポーツジムで汗を流したり、旅行に出掛けるのが好きです。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md6">
                    <div class="staff_card">
                        <div class="staff_wrap">
                            <div class="flex">
                                <div class="col-lg4 img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="">
                                </div>
                                <div class="col-lg8 text">
                                    <p class="position">社長</p>
                                    <p class="name">浜本 憲一</p>
                                    <p class="license">
                                    一級建築士、一級建築施工管理技士、宅地建物取引主任者、二級造園施工管理士、インテリアコーディネーター、二級福祉住環境コーディネーター、シックハウス診断士補、県産材コーディネーター、木造住宅耐震診断士、給水装置工事主任技術者、住宅断熱施工技術者
                                    </p>
                                </div>
                                <div class="col-12">
                                    <p class="h4">
                                        <span>仕事について</span>
                                    </p>
                                    <p class="p">
                                    理念にあるように「本物の追求」「お客様の喜び」「問題への挑戦」をスタッフ、業者様と一緒に目指し、「いい家」をつくりたい。訪問販売や住宅メーカー、ビルダーさんの様な「数」を求めての家造りではなく、一生に一度の家創りをスタッフと力をあわせてお客様に喜んでいただけることを一番大切にしてがんばりたいと思います。
                                    </p>
                                    <p class="h4">
                                        <span>プライベートについて</span>
                                    </p>
                                    <p class="p">
                                    犬を飼い出しました。シーズーです。お客様にも多くの方がペットを飼われておりいろんな相談にのってきましたが、これからはより経験に基づいたアドバイスが出来るようになったと思っています。毎朝の散歩にはじまり、トイレ、食事、床材、お風呂・・・ペットを飼うことはいい勉強になっています。もっともっとお客様に喜んでもらえるいい家つくりに生かしたいです。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md6">
                    <div class="staff_card">
                        <div class="staff_wrap">
                            <div class="flex">
                                <div class="col-lg4 img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="">
                                </div>
                                <div class="col-lg8 text">
                                    <p class="position">設計部</p>
                                    <p class="name">河村 美穂</p>
                                    <p class="license">
                                    インテリアコーディネーター<br>二級福祉住環境コーディネーター
                                    </p>
                                </div>
                                <div class="col-12">
                                    <p class="h4">
                                        <span>仕事について</span>
                                    </p>
                                    <p class="p">
                                    この度産休を経て復帰をさせて頂きました。常に初心を忘れずに、また新しい知識の習得にも励んで行きたいと思っております。お客様には、ハマホームの良さ、ハマホームらしさのご提案をさせて頂きたいと思っております。宜しくお願い致します！
                                    </p>
                                    <p class="h4">
                                        <span>プライベートについて</span>
                                    </p>
                                    <p class="p">
                                    子供が一人増え、二人の子育てを自分なりに頑張っています！『ものより思い出♪』をモットーに、仕事とプライベート、メリハリをつけて毎日を楽しく過ごしていきたいです！！
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md6">
                    <div class="staff_card">
                        <div class="staff_wrap">
                            <div class="flex">
                                <div class="col-lg4 img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="">
                                </div>
                                <div class="col-lg8 text">
                                    <p class="position">工事部　課長</p>
                                    <p class="name">定兼 広喜</p>
                                </div>
                                <div class="col-12">
                                    <p class="h4">
                                        <span>仕事について</span>
                                    </p>
                                    <p class="p">
                                    毎日が勉強！！まだまだ分からない事も多いのですが、今までに経験した事を精一杯出して、現場をスムーズかつスピーディーに安全第一でがんばります。
                                    </p>
                                    <p class="h4">
                                        <span>プライベートについて</span>
                                    </p>
                                    <p class="p">
                                    芝刈りをしたいですが、なかなか時間がとれないです。最近は、町内の行事に参加しています。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md6">
                    <div class="staff_card">
                        <div class="staff_wrap">
                            <div class="flex">
                                <div class="col-lg4 img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="">
                                </div>
                                <div class="col-lg8 text">
                                    <p class="position">工事部</p>
                                    <p class="name">鰐渕 泰成</p>
                                </div>
                                <div class="col-12">
                                    <p class="h4">
                                        <span>仕事について</span>
                                    </p>
                                    <p class="p">
                                    入社したばかりで分からない事ばかりですが、お客様に喜んでもらえるように、材料を選んで加工することにやりがいを感じます。良いものを仕入れて加工できるよう、知識を深めていきたいです。
                                    </p>
                                    <p class="h4">
                                        <span>プライベートについて</span>
                                    </p>
                                    <p class="p">
                                    休日は子供と、公園や、山や、海など自然の中で遊んで過ごしています。子供の視点で一緒に遊んでいると新しい発見もあり、楽しくリフレッシュできます。キャンプなんかにも行きたいと思っています。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md6">
                    <div class="staff_card">
                        <div class="staff_wrap">
                            <div class="flex">
                                <div class="col-lg4 img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="">
                                </div>
                                <div class="col-lg8 text">
                                    <p class="position">工事部</p>
                                    <p class="name">髙嶋 淳二</p>
                                    <p class="license">
                                    二級建築士、小型移動式クレーン、英検二級、簿記二級
                                    </p>
                                </div>
                                <div class="col-12">
                                    <p class="h4">
                                        <span>仕事について</span>
                                    </p>
                                    <p class="p">
                                    自分がした仕事に対して、お客様が喜んでくれる事がとてもやりがいがあります。一つの事ばかりにとらわれるのではなく、新しい事を見つけて少しでもお客様に喜んでもらえる大工になりたいです。
                                    </p>
                                    <p class="h4">
                                        <span>プライベートについて</span>
                                    </p>
                                    <p class="p">
                                    休日にはなるべく子供をいろいろな所に連れて行ったり、夏場だと友人とバーベキューや素潜りに行きます。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md6">
                    <div class="staff_card">
                        <div class="staff_wrap">
                            <div class="flex">
                                <div class="col-lg4 img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="">
                                </div>
                                <div class="col-lg8 text">
                                    <p class="position">企画管理部　部長</p>
                                    <p class="name">浜本 澄子</p>
                                </div>
                                <div class="col-12">
                                    <p class="h4">
                                        <span>仕事について</span>
                                    </p>
                                    <p class="p">
                                    ハマホームのホームページを開いて見てもらいありがとうございます。<br>営業年数は 36 年になります。木炭を使った福井の風土にあった家づくりをスタッフ一同目指しております。何もない土地に建物が出来上がる事の喜びと物を作り上げる喜びをやりがいのある仕事と思っております。感動と感謝を与えて下さる施主様に感謝いたします。
                                    </p>
                                    <p class="h4">
                                        <span>プライベートについて</span>
                                    </p>
                                    <p class="p">
                                    休日は、のんびりと自分なりにショッピングに出かけたり、ちょっと足をのばしてお風呂に入りに行きます。孫と花壇の花の手入れなどをして、健康で過ごせることを喜んでおります。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md6">
                    <div class="staff_card">
                        <div class="staff_wrap">
                            <div class="flex">
                                <div class="col-lg4 img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="">
                                </div>
                                <div class="col-lg8 text">
                                    <p class="position">企画管理部　課長</p>
                                    <p class="name">浜本 希美</p>
                                    <p class="license">
                                    未生流華道師範、秘書検定二級
                                    </p>
                                </div>
                                <div class="col-12">
                                    <p class="h4">
                                        <span>仕事について</span>
                                    </p>
                                    <p class="p">
                                    他の社員のみなさんに助けていただきながら仕事をしています。知らない事、分からない事と聞いてもイヤな顔をせず答えてくれるみんなに感謝しています。浜本建設のみんなの暖かい気持ちを力にして、お客様にもこのハートが伝わるように努力したいです。
                                    </p>
                                    <p class="h4">
                                        <span>プライベートについて</span>
                                    </p>
                                    <p class="p">
                                    仕事や子供を通して、様々な方と巡り合えることが幸せです。その人の生き方や考え方、お料理や趣味など真似したいなぁ…と勉強できる機会があることが幸せです。行動派ではありませんが、自分のできる範囲で、やりたい！と思ったことは実践していきたいです。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        
        </div>
    </section>

	</main><!-- #main -->

<?php
get_footer();

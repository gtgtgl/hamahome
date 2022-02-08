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
            <h2>お客様の大切な家を<br>より永く使っていただくために…</h2>

            <p class="left-center">
            浜本建設では、リフォームも新築と同じく大切な家造りだと考え、多くのお仕事をさせていただいております。<br>
            例えば、キッチンやお風呂が古くなったのでリフォームをするというケースから、<br class="only-pc">
            ハマホームでは生活スタイルに合わせた使い勝手の良いプランをご提案までいたします。<br>
            その他、増改築や介護改修・エクステリア・外壁の貼替えや塗装・太陽光発電、<br class="only-pc">
            ちょっとした蛇口の交換や水漏れの補修なども行なっております。<br>
            住宅に関する事なら、何でもお気軽にご相談下さい。もちろん、相談・見積りは無料です！
            </p>
            
            <p class="center mt40">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reform/img01.jpg" alt="浜本建設のリフォーム" width="400" class="img01">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reform/img02.jpg" alt="浜本建設のリフォーム" width="700" class="img02">

            </p>

            <div class="comment_wrap">
                <p>リフォームしたい箇所の番号を下記よりタップしてください</p>
            </div>

            <div class="reform_buttons">

                <button class="reform_button tab reform_button01 is-active">
                    <span>１</span>屋根
                </button>

                <button class="reform_button tab reform_button02">
                    <span>２</span>雨樋
                </button>

                <button class="reform_button tab reform_button03">
                    <span>３</span>外壁
                </button>

                <button class="reform_button tab reform_button04">
                    <span>４</span>サッシ
                </button>

                <button class="reform_button tab reform_button05">
                    <span>５</span>外部木部
                </button>

                <button class="reform_button tab reform_button06">
                    <span>６</span>ベランダ
                </button>

                <button class="reform_button tab reform_button07">
                    <span>７</span>キッチン廻り
                </button>

                <button class="reform_button tab reform_button08">
                    <span>８</span>浴室
                </button>

                <button class="reform_button tab reform_button09">
                    <span>９</span>トイレ
                </button>

                <button class="reform_button tab reform_button10">
                    <span>10</span>クロス張替え
                </button>

                <button class="reform_button tab reform_button11">
                    <span>11</span>タタミ
                </button>

                <button class="reform_button tab reform_button12">
                    <span>12</span>障子・ふすま
                </button>

            </div>

        </div>

    </section>

    <section id="reform_content">

    <?php 
    // コンテンツデータ
    $array = array (
        '01' => array(
            'name' => '<span>１</span>屋根',
            'advice' => '屋根は、普段目につきにくい部分ですが<br>家にとっては一番大切なところです。<br>定期的に点検が必要です。',
            'tenken' => array (
                '雨（強い雨）の時、雨がもりませんか？',
                '天井にしみがありませんか？',
                'コンクリート製の瓦が葺かれていませんか？'
            ),
            'tenken_comment' => '瓦がずれてたり、割れてたりしている可能性があります！<br>また、古い家だと防水紙がない場合もあります！',
            'tenken2' => array (
                '屋根が錆びていませんか？（鉄板屋根の場合）'
            ),
            'tenken2_comment' => '屋根の塗装をお勧めします。放っておくと穴が空いて雨漏りの原因に！ 状態によっては葺き替えになる場合もあります！',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','古瓦めくり','防水紙貼り（下地補修）','瓦葺き','棟瓦積み・仕上げ','完了・ご集金'
            )
        ),
        '02' => array(
            'name' => '<span>２</span>雨樋',
            'advice' => '樹脂製のため、劣化が早い部分です。',
            'tenken' => array (
                '色が褪せていませんか？',
                '割れていませんか？'
            ),
            'tenken_comment' => '交換をお勧めします。',
            'tenken2' => array (
                'うまく雨水が流れていますか？'
            ),
            'tenken2_comment' => '落ち葉などが詰まっている可能性があります。<br>放っておくと雨水がたまって樋が外れることがあります。',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','足場組立て','古雨樋撤去','雨樋取付け','足場解体','完了・ご集金'
            )
        ),
        '03' => array(
            'name' => '<span>３</span>外壁',
            'advice' => '屋根と同じく家にとっては大切なところ。普段あまり見ない家の裏側も点検しましょう。',
            'tenken' => array (
                '外壁材を手で触ると、手が白く汚れませんか？',
                '外壁が割れていませんか？',
                '外壁に木材を使用していませんか？'
            ),
            'tenken_comment' => '塗替え、外壁材の張替えをお勧めします。<br>（吹き付け仕上の場合、目安ですが、約10年で吹きなおしになります）',
            'tenken2' => array (
                '外壁のコーキング（シリコン材）が切れていませんか？'
            ),
            'tenken2_comment' => 'コーキングの切れは意外と早いものです。（目安約5年）<br>補修でOKですのでこまめにチェックしましょう。',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','足場組立て・工事着工','高圧洗浄','シーリング工事','塗装工事','足場解体','完了・ご集金'
            )
        ),
        '04' => array(
            'name' => '<span>４</span>サッシ',
            'advice' => '家の中で一番熱が伝わりやすい部分です。（知っていましたか？）',
            'tenken' => array (
                '木製のサッシが入っていませんか？',
                '一重のサッシで冬場寒いことがありませんか？',
                '窓枠が結露で傷んでいませんか？',
                '防犯性をUPしたい',
                '夜間、車の音（物音）がうるさい'
            ),
            'tenken_comment' => 'サッシの交換（複層ガラスサッシ等）やインナーサッシの取付（既存のサッシを取り外さず、内側にもうひとつサッシをつけます）をお勧めします。（エコポイントの対象になります）',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','足場組立て','古雨樋撤去','雨樋取付け','足場解体','完了・ご集金'
            )
        ),
        '05' => array(
            'name' => '<span>５</span>外部木部',
            'advice' => '面格子、ウッドデッキ、破風鼻隠し等はいたみやすい部分です。こまめな補修が必要です。',
            'tenken' => array (
                '今まで一度も塗装をしていない',
                '木材が白く（灰色）に変色していませんか？'
            ),
            'tenken_comment' => '塗り替え、交換が必要です。放っておくと木が腐り、シロアリの原因にも……',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','足場組立て・工事着工','塗装工事','完了・ご集金'
            )
        ),
        '06' => array(
            'name' => '<span>６</span>ベランダ',
            'advice' => '作ったはいいけど、使ってないベランダになっていませんか？',
            'tenken' => array (
                '荷物置きになっている'
            ),
            'tenken_comment' => 'ベランダサッシをつけてサンルームにしませんか。雨の日や冬場の洗濯物干し場として生まれ変わります。',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','サッシ取り付け','シーリング工事','完了・ご集金'
            )
        ),
        '07' => array(
            'name' => '<span>７</span>キッチン廻り',
            'advice' => '毎日使う所です。使いやすく掃除が簡単で、たっぷり収納の出来るシステムキッチンにしませんか？',
            'tenken' => array (
                'キッチンが低くて洗い物が辛い',
                '暗いところで作業していませんか？',
                'お掃除は簡単ですか？',
                '調理機器はガスを使っていませんか？'
            ),
            'tenken_comment' => 'ハマホームではキッチンの入れ替えだけでなく使いやすい間取りを提案させていただきます。',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','既存キッチン撤去','大工工事','キッチン取り付け','内装工事','完了・ご集金'
            )
        ),
        '08' => array(
            'name' => '<span>８</span>浴室',
            'advice' => '毎日使う所です。暖かく快適で、お手入れも楽なお風呂にしませんか？',
            'tenken' => array (
                '浴室が寒くないですか？',
                'タイルや仕上げ材がはがれたり欠けていませんか？',
                '浴槽と洗い場のまたぎが高くないですか？',
                '浴室と脱衣場に段差がありませんか？'
            ),
            'tenken_comment' => 'ハマホームでは、浴室のまたぎの低い商品や暖房機器等の提案をさせていただきます。また浴室との段差等も解消させていただきます。',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','解体工事','大工工事','仕上げ工事','完了・ご集金'
            )
        ),
        '09' => array(
            'name' => '<span>９</span>トイレ',
            'advice' => 'こちらも毎日使う所です。段差解消やひざに負担の少ない洋式便器にしませんか？',
            'tenken' => array (
                '洋式便器にしたい',
                '便所に段差がありませんか？',
                '狭い。手摺りがほしい',
                '収納がほしい'
            ),
            'tenken_comment' => 'ハマホームでは、便器の交換はもちろん、収納を作ったり、バリアフリー対応のトイレを提案させていただきます。',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','解体工事','大工工事','仕上げ工事','完了・ご集金'
            )
        ),
        '10' => array(
            'name' => '<span>10</span>クロス張替え',
            'advice' => 'よく見ると汚れや破れがあります。お部屋の模様替えには効果は抜群です。',
            'tenken' => array (
                '天井と壁にしわや隙間がありませんか？',
                'クロスが汚れていませんか？',
                'クロスに色むらはありませんか？'
            ),
            'tenken_comment' => '一部屋だけでなく壁一面からでも貼替えさせていただきます。（同じ色・柄のものが無い場合があります）',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','照明器具等外し','パテ処理・既存クロスめくり','クロス貼り','照明器具等取り付け','完了・ご集金'
            )
        ),
        '11' => array(
            'name' => '<span>11</span>タタミ',
            'advice' => '最近では、色の変わりにくい畳や、汚れの付きにくい畳もあります。',
            'tenken' => array (
                'ふかふかしませんか？',
                'タタミ表が傷んでいませんか？'
            ),
            'tenken_comment' => '新しい畳は気持ちいいですね。気分を変えて半帖畳というのもあります。',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','畳寸法計測・新規畳制作','古畳撤去','新規畳設置','完了・ご集金'
            )
        ),
        '12' => array(
            'name' => '<span>12</span>障子・ふすま',
            'advice' => '障子は、シミや破れなど結構外からも見えるので、早めに貼り替えしたほうがいいですね。',
            'tenken' => array (
                'たるみがありませんか？',
                'シミや破れはありませんか？'
            ),
            'tenken_comment' => '時期によって、たるみが出る場合があります。破れにくい障子紙で、ワーロン紙というものもあります。',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','ふすま引き取り','納入・ふすま張替え','完了・ご集金'
            )
        ),
    );

    foreach ($array as $key => $value)  {
        ?>
<div class="reform_content_wrap panel reform_button<?php echo $key; ?><?php if($key === '01'): echo ' is-show'; endif; ?>">

    <div class="title">
        <div class="container">
            <p>
                <?php echo $value['name']; ?>
            </p>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="flex">
                <div class="col-lg7 flex flex-center">
                    <div class="col-sm3 col-md4 col-lg3 advice">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/reform/img03.png" alt="アドバイス" width="120">
                    </div>
                    <div class="col-sm9 col-md8 col-lg9 whitecomment_wrap">
                        <div class="whitecomment">
                            <p>
                            <?php echo $value['advice']; ?>
                            </p>
                        </div>
                    </div>
    
                    <div class="col-12">
                        <h3>点検してみて下さい！</h3>
    
                        <ul class="ul_check">
                            <?php 
                            foreach ($value['tenken'] as $item) {
                                ?>
                                <li><?php echo $item; ?></li>
                            <?php
                            }
                            ?>
                        </ul>
    
                        <div class="box_blue">
                            <p><?php echo $value['tenken_comment']; ?></p>
                        </div>

                        <?php
                        if(array_key_exists('tenken2', $value)):
                        ?>
    
                        <ul class="ul_check">
                            <?php 
                            foreach ($value['tenken2'] as $item2) {
                                ?>
                                <li><?php echo $item2; ?></li>
                            <?php
                            }
                            ?>
                        </ul>
    
                        <div class="box_blue">
                            <p><?php echo $value['tenken2_comment']; ?></p>
                        </div>

                        <?php endif; ?>
                    </div>
                </div>
    
                <div class="col-lg5">
                    <div class="box_white">
                        <h3>工事工程例 
                            <?php
                            if($key === '01'):
                            ?>
                            <small>（瓦の場合）</small>
                            <?php endif; ?>
                        </h3>
    
                        <ul>
                            <?php 
                            foreach ($value['example'] as $item3) {
                                ?>
                                <li><?php echo $item3; ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <?php 
    }

    ?>

    </section>
	
	</main><!-- #main -->

<?php
get_footer();

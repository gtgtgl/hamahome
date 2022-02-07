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
            'advice' => '外壁',
            'tenken' => array (
                '外壁',
                '外壁'
            ),
            'tenken_comment' => '外壁',
            'tenken2' => array (
                '外壁'
            ),
            'tenken2_comment' => '外壁',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','足場組立て','古雨樋撤去','雨樋取付け','足場解体','完了・ご集金'
            )
        ),
        '04' => array(
            'name' => '<span>４</span>サッシ',
            'advice' => 'サッシ',
            'tenken' => array (
                'サッシ',
                'サッシ'
            ),
            'tenken_comment' => 'サッシ',
            'tenken2' => array (
                'サッシ'
            ),
            'tenken2_comment' => 'サッシ',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','足場組立て','古雨樋撤去','雨樋取付け','足場解体','完了・ご集金'
            )
        ),
        '05' => array(
            'name' => '<span>５</span>外部木部',
            'advice' => '外部木部',
            'tenken' => array (
                '外部木部',
                '外部木部'
            ),
            'tenken_comment' => '外部木部',
            'tenken2' => array (
                '外部木部'
            ),
            'tenken2_comment' => '外部木部',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','足場組立て','古雨樋撤去','雨樋取付け','足場解体','完了・ご集金'
            )
        ),
        '06' => array(
            'name' => '<span>６</span>ベランダ',
            'advice' => 'ベランダ',
            'tenken' => array (
                'ベランダ',
                'ベランダ'
            ),
            'tenken_comment' => 'ベランダ',
            'tenken2' => array (
                'ベランダ'
            ),
            'tenken2_comment' => 'ベランダ',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','足場組立て','古雨樋撤去','雨樋取付け','足場解体','完了・ご集金'
            )
        ),
        '07' => array(
            'name' => '<span>７</span>キッチン廻り',
            'advice' => 'キッチン廻り',
            'tenken' => array (
                'キッチン廻り',
                'キッチン廻り'
            ),
            'tenken_comment' => 'キッチン廻り',
            'tenken2' => array (
                'キッチン廻り'
            ),
            'tenken2_comment' => 'キッチン廻り',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','足場組立て','古雨樋撤去','雨樋取付け','足場解体','完了・ご集金'
            )
        ),
        '08' => array(
            'name' => '<span>８</span>浴室',
            'advice' => '浴室',
            'tenken' => array (
                '浴室',
                '浴室'
            ),
            'tenken_comment' => '浴室',
            'tenken2' => array (
                '浴室'
            ),
            'tenken2_comment' => '浴室',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','足場組立て','古雨樋撤去','雨樋取付け','足場解体','完了・ご集金'
            )
        ),
        '09' => array(
            'name' => '<span>９</span>トイレ',
            'advice' => 'トイレ',
            'tenken' => array (
                'トイレ',
                'トイレ'
            ),
            'tenken_comment' => 'トイレ',
            'tenken2' => array (
                'トイレ'
            ),
            'tenken2_comment' => 'トイレ',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','足場組立て','古雨樋撤去','雨樋取付け','足場解体','完了・ご集金'
            )
        ),
        '10' => array(
            'name' => '<span>10</span>クロス張替え',
            'advice' => 'クロス張替え',
            'tenken' => array (
                'クロス張替え',
                'クロス張替え'
            ),
            'tenken_comment' => 'クロス張替え',
            'tenken2' => array (
                'クロス張替え'
            ),
            'tenken2_comment' => 'クロス張替え',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','足場組立て','古雨樋撤去','雨樋取付け','足場解体','完了・ご集金'
            )
        ),
        '11' => array(
            'name' => '<span>11</span>タタミ',
            'advice' => 'タタミ',
            'tenken' => array (
                'タタミ',
                'タタミ'
            ),
            'tenken_comment' => 'タタミ',
            'tenken2' => array (
                'タタミ'
            ),
            'tenken2_comment' => 'タタミ',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','足場組立て','古雨樋撤去','雨樋取付け','足場解体','完了・ご集金'
            )
        ),
        '12' => array(
            'name' => '<span>12</span>障子・ふすま',
            'advice' => '障子・ふすま',
            'tenken' => array (
                '障子・ふすま',
                '障子・ふすま'
            ),
            'tenken_comment' => '障子・ふすま',
            'tenken2' => array (
                '障子・ふすま'
            ),
            'tenken2_comment' => '障子・ふすま',
            'example' => array (
                'お打ち合わせ・現場調査','見積り提出','ご契約','足場組立て','古雨樋撤去','雨樋取付け','足場解体','完了・ご集金'
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

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

    <section id="flow">
        <div class="container">

            <p class="left-center">
                一般的な家づくりの流れです。大体の目安ですので、お客様によって多少異なります。
            </p>

            <div class="flow_wrap mt60">

            <?php 

            $flow_items = array(
                '01' => array(
                    'title' => 'ヒアリング・プランニング',
                    'content' => '大切な家づくりの最初の作業です。満足のいくまでじっくりと話し合いをします。気に入ったデザインなどあれば雑誌の切り抜きなどお持ちいただくのも良い方法です。'
                ),
                '02' => array(
                    'title' => '設計図の制作',
                    'content' => '設計図を確認。変更はこの時点で。後になると変更できにくくなる場合も。'
                ),
                '03' => array(
                    'title' => 'お見積り書の作成',
                    'content' => 'そろそろ借り入れ先の選定をします。建て替えの場合は仮住まい探しもお早めに。'
                ),
                '04' => array(
                    'title' => '請負契約',
                    'orange' => '￥契約金のお支払い',
                    'content' => '「工事請負契約書」「契約約款」「工事費内訳明細書」「仕様書・仕上表」「設計図書」が用意されます。'
                ),
                '05' => array(
                    'title' => '各種申請手続き',
                    'content' => '確認申請、瑕疵担保保険の加入をします。'
                ),
                '06' => array(
                    'title' => '解体や仮住宅へのお引越し',
                    'content' => '建て替えの場合には解体作業に入ります。'
                ),
                '07' => array(
                    'title' => '地盤調査',
                    'content' => '地盤が弱い場合には、地盤改良工事が必要となります。'
                ),
                '08' => array(
                    'title' => '地鎮祭',
                    'orange' => '￥着工後のお支払い',
                    'content' => '地鎮祭は地主神を鎮めるとともに家の繁栄と工事の無事を祈る儀式。施主様、建築士、工事関係者が出席して行います。'
                ),
                );
             
                foreach ($flow_items as $key => $item) {

                ?>

                <div class="flow_card">
                    <div class="icon">
                        <div class="icon_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/flow/icon<?php echo $key; ?>.svg" alt="<?php echo $item['title']; ?>">
                        </div>
                    </div>
                    <div class="text">
                        <p class="title">
                            <span class="number"><?php echo $key; ?></span>
                            <?php echo $item['title']; 
                            if(array_key_exists('orange', $item)) :
                            ?>
                            <span class="orange"><?php echo $item['orange']; ?></span>
                            <?php endif; ?>
                        </p>
                        <p class="content">
                        <?php echo $item['content']; ?>
                        </p>
                    </div>
                </div>

                <?php
                }
                ?>

            </div>

            <div class="flow_wrap month month01">

            <?php 

            $flow_items = array(
                '09' => array(
                    'title' => '基礎工事開始',
                    'content' => 'ハマホームの基礎は安心の「ベタ基礎」。地震、地盤沈下にも強く安心です。'
                ),
                '10' => array(
                    'title' => '鉄筋検査（瑕疵担保）',
                    'content' => '設計図を確認。変更はこの時点で。後になると変更できにくくなる場合も。'
                ),
                '11' => array(
                    'title' => '詳細打ち合わせ',
                    'content' => '一番最初に決定しなければならないのは屋根の色です。その他、急ぐ順番にサッシ、外壁、雨どい、外周りの塗装部、キッチン、バス、トイレなど機器や設備、色などを決めます。できるだけショールームで実物を確認して決定される方が良いでしょう。'
                )
                );
             
                foreach ($flow_items as $key => $item) {

                ?>

                <div class="flow_card">
                    <div class="icon">
                        <div class="icon_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/flow/icon<?php echo $key; ?>.svg" alt="<?php echo $item['title']; ?>" width="80">
                        </div>
                    </div>
                    <div class="text">
                        <p class="title">
                            <span class="number"><?php echo $key; ?></span>
                            <?php echo $item['title']; 
                            if(array_key_exists('orange', $item)) :
                            ?>
                            <span class="orange"><?php echo $item['orange']; ?></span>
                            <?php endif; ?>
                        </p>
                        <p class="content">
                        <?php echo $item['content']; ?>
                        </p>
                    </div>
                </div>

                <?php
                }
                ?>

            </div>

            <div class="flow_wrap month month02">

            <?php 

            $flow_items = array(
                '12' => array(
                    'title' => '上棟式（建前）',
                    'orange' => '￥上棟後のお支払い',
                    'content' => '家の骨組みを一気に建て上げる作業を｢上棟｣といいます。もともと工事の無事を祈る儀式でしたが、今では大工さんたちの労をねぎらう意味が強くなりました。この日までに窓の位置、高さを決定します。'
                ),
                '13' => array(
                    'title' => '金物検査（瑕疵担保）',
                    'content' => '構造用金物がしっかり入っているか、検査員がチェックします。'
                ),
                '14' => array(
                    'title' => '断熱・外壁工事',
                    'content' => '大切な外壁工事になります。これが貼られると家がより家らしくなりますよ。'
                ),
                '15' => array(
                    'title' => '防水検査（瑕疵担保）',
                    'content' => '外部から水が入ってこないか、防水の立ち上りなど自主検査をします。'
                ),
                '16' => array(
                    'title' => '木炭敷き',
                    'content' => '床下に木炭を吊るします。'
                ),
                '17' => array(
                    'title' => '設備工事（電気・ガス・水道等）',
                    'orange' => '￥中間金のお支払い',
                    'content' => '一番大切なのはコンセントの位置と数、そして照明。実際の生活をイメージして考えるのは、なかなか難しいことですが、がんばりましょう。'
                ),
                '18' => array(
                    'title' => '水周り機器の設置',
                    'content' => 'キッチン・バス・トイレなどが運び込まれてきます。さあ、そろそろ内装を考えましょう。クロスの場合、種類が多いのでとても迷われる方が多いです。プレゼンボードを提出いたしますので、参考に色を決定していきます。'
                ),
                '19' => array(
                    'title' => '内装工事',
                    'content' => '工事は仕上げの段階に入っていきます。'
                ),
                '20' => array(
                    'title' => '室内清掃',
                    'content' => '施主様へお引渡しの前に、社内検査・クリーニングを行います'
                ),
                '21' => array(
                    'title' => '完了検査',
                    'content' => '図面通りの建物になっているか、検査員がきびしくチェックします。'
                ),
                '22' => array(
                    'title' => 'お引渡し',
                    'title' => '￥ご精算',
                    'content' => '工事の内容が予定通りに行われているかを、ハマホームと施主様で確認します。このとき工事期間中に使用された鍵は破棄され、正規の鍵が施主様に渡されます。'
                )
                );
             
                foreach ($flow_items as $key => $item) {

                ?>

                <div class="flow_card">
                    <div class="icon">
                        <div class="icon_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/flow/icon<?php echo $key; ?>.svg" alt="<?php echo $item['title']; ?>" width="80">
                        </div>
                    </div>
                    <div class="text">
                        <p class="title">
                            <span class="number"><?php echo $key; ?></span>
                            <?php echo $item['title']; 
                            if(array_key_exists('orange', $item)) :
                            ?>
                            <span class="orange"><?php echo $item['orange']; ?></span>
                            <?php endif; ?>
                        </p>
                        <p class="content">
                        <?php echo $item['content']; ?>
                        </p>
                    </div>
                </div>

                <?php
                }
                ?>

            </div>
            <div class="flow_wrap">

            <?php 

            $flow_items = array(
                '23' => array(
                    'title' => 'お引越し',
                    'content' => '施主様の方で、電話局、ケーブルテレビ、インターネット、火災保険等のお申し込みをお願いいたします。'
                )
                );
             
                foreach ($flow_items as $key => $item) {

                ?>

                <div class="flow_card">
                    <div class="icon">
                        <div class="icon_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/flow/icon<?php echo $key; ?>.svg" alt="<?php echo $item['title']; ?>" width="80">
                        </div>
                    </div>
                    <div class="text">
                        <p class="title">
                            <span class="number"><?php echo $key; ?></span>
                            <?php echo $item['title']; 
                            if(array_key_exists('orange', $item)) :
                            ?>
                            <span class="orange"><?php echo $item['orange']; ?></span>
                            <?php endif; ?>
                        </p>
                        <p class="content">
                        <?php echo $item['content']; ?>
                        </p>
                    </div>
                </div>

                <?php
                }
                ?>

            </div>

        </div>
    </section>
	
	</main><!-- #main -->

<?php
get_footer();

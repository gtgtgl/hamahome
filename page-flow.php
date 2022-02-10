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

            <p class="left-center">
                一般的な家づくりの流れです。大体の目安ですので、お客様によって多少異なります。
            </p>

            <div class="flow_wrap">

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

            <div class="flow_wrap month month01">

            <?php 

            $flow_items = array(
                '09' => array(
                    'title' => 'ヒアリング・プランニング',
                    'content' => '大切な家づくりの最初の作業です。満足のいくまでじっくりと話し合いをします。気に入ったデザインなどあれば雑誌の切り抜きなどお持ちいただくのも良い方法です。'
                ),
                '10' => array(
                    'title' => '設計図の制作',
                    'content' => '設計図を確認。変更はこの時点で。後になると変更できにくくなる場合も。'
                ),
                '11' => array(
                    'title' => 'お見積り書の作成',
                    'content' => 'そろそろ借り入れ先の選定をします。建て替えの場合は仮住まい探しもお早めに。'
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

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
            <h2>
            丈夫な構造
            </h2>

            <p class="left-center">
            ハマホームでは、柱材は1本の木から1本しかとれない柱（芯持ち材）を使っています。<br>
            芯を持っているので強くて丈夫な柱です。<br>
            4寸角を使用しますが（通し柱は5寸）時には6寸、7寸といった太い柱を使用する時もあります。<br>
            また、梁材では基準よりも太く大きな材料を使用しています。耐震補強金物との組み合わせで、頑丈な構造にしています。<br>
            さらに、特長である丸太を加工して、構造材としているので文句なしです！
            </p>
            
            <div class="flex mt40 max700">
                <div class="col-md4 center">
                    <div class="has-circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="丸太・梁材" width="250">
                        <div class="circle">
                            <p>丸太・梁材</p>
                        </div>
        
                    </div>
                </div>
                <div class="col-md4 center">
                    <div class="has-circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="建方時の丸太組" width="250">
                        <div class="circle">
                            <p>建方時の<br>丸太組</p>
                        </div>
        
                    </div>
                </div>
                <div class="col-md4 center">
                    <div class="has-circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="耐震補強金物" width="250">
                        <div class="circle">
                            <p>耐震<br>補強金物</p>
                        </div>
        
                    </div>
                </div>
            </div>

        </div>
    </section>
	
<section class="bg_blue">
    <div class="container">

        <h2>健康素材</h2>

        <p class="left-center">
        ハマホームでは、小さな木材を接着剤で張り合わせた集成材は一切使用しておりません！<br>
        本物の木材を使用しているので体にやさしい自然素材の家です。<br>
        また、土台の防腐措置や土壌改良にも薬剤を使わず、炭を作る時に出る木酢液を使用します。<br>
        木酢液には、殺菌・消炎・消毒・消臭などの効果があって、<br>
        昆虫・害虫を寄せ付けない成分を含んでいます。<br>
        自然のものを使用した健康住宅で、家を住まう人を守ります。
        </p>
                
        <div class="flex mt40 max700">
            <div class="col-md6 center">
                <div class="has-circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="土台の防腐措置" width="300">
                    <div class="circle">
                        <p>土台の<br>防腐措置</p>
                    </div>
                </div>
            </div>
            <div class="col-md6 center">
                <div class="has-circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="木酢液散布" width="300">
                    <div class="circle">
                        <p>木酢液<br>散布</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
	
<section>
    <div class="container">

        <h2>銘木材・床柱</h2>

        <p class="left-center">
        ハマホームでは、自社倉庫にてたくさんの銘木材・板材を保管してあります。<br>
        天然のものなので世界に1つしかありません。お客様の目で見て触ってお好きな物を選んで頂きます。<br>
        造作家具も扱っております。
        </p>
                
        <div class="flex flex-center mt40 max700">
            <div class="col-md4 center">
                <div class="has-circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="床柱" width="300">
                    <div class="circle circle--small">
                        <p>床柱</p>
                    </div>
                </div>
            </div>
            <div class="col-md4 center">
                <div class="has-circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="木酢液板材散布" width="300">
                    <div class="circle circle--small">
                        <p>板材</p>
                    </div>
                </div>
            </div>
        </div>
                
        <div class="flex max700">
            <div class="col-md4 center">
                <div class="has-circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="造作家具（杉）" width="300">
                    <div class="circle circle--small">
                        <p>造作家具<br><small>（杉）</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md4 center">
                <div class="has-circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="造作家具（スプルス）" width="300">
                    <div class="circle circle--small">
                        <p>造作家具<br><small>（スプルス）</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md4 center">
                <div class="has-circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="造作家具（ポプラ）" width="300">
                    <div class="circle circle--small">
                        <p>造作家具<br><small>（ポプラ）</small></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
	
<section class="bg_blue">
    <div class="container">

    <h2>馬にも優しい オガクズ再利用</h2>

    <div class="flex mt40">
        <div class="col-lg4 center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/warranty/img02.jpg" alt="馬にも優しい オガクズ再利用" width="300">
        </div>
        <div class="col-lg8">
            <p>
            無垢材のみを使っているハマホームの家づくりの際に出てくる“オガクズ”が、福井県馬術競技場でリサイクルされることになりました。“オガクズ”は馬たちの寝床に使われます。馬の健康のために、さまざまな種類の木材を接着剤などで接合して作る集成材での“オガクズ”は使えないそうです。健康に優しいハマホームの家は、馬にも優しい素材の安心住宅なのです。
            </p>
        </div>
    </div>
    </div>
</section>

<section id="fuudo">
    <div class="container">

        <div class="flex flex-center season02">

            <div class="col-7 col-md4">
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/title01.png" alt="パネル工法" width="200">
                    </div>
                <div class="img">
                    <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon01.png" alt="パネル工法" width="130">
                    </div>
                </div>
                <p class="s">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                <a href="<?php echo esc_url( home_url( '/fuudo/panel' ) ); ?>" class="btn-01">もっと詳しく</a>
            </div>

        </div>

    </div>
</section>

	</main><!-- #main -->

<?php
get_footer();

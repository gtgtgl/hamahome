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
            <h2>省エネ断熱工法</h2>

            <p>
            ハマホームの省エネ断熱工法は壁断熱材をパネル化してはめ込み、屋根裏、床下断熱材で覆うので、断熱材が途切れることなく家中をすっぽり包み込みます。そして、床下に入れる炭で調湿することで家中の湿度を快適に保ちます。木炭できれいになった空気が家中をまわるので心地よい空気で過ごすことが出来ます。
            </p>

            <p>
            壁パネル断熱工法は地震などの揺れに対してモノコック構造と断熱強化を一体にして福井の家を快適、安全にしてくれます。ハマホームの壁パネルは一般的にみられる外から面材を釘で打ち付ける物ではなく、柱の中に面材が配置されているので何度も起きる余震でも強度が落ちることもありません。
            </p>

            <p>
            長く住む家だからこそ、大事にしておきたいところです。
            </p>
            
            <div class="flex mt40 max700">
                <div class="col-md4 center">
                    <div class="has-circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/eco/img01.jpg" alt="断熱材" width="250">
                        <div class="circle">
                            <p>断熱材</p>
                        </div>
        
                    </div>
                </div>
                <div class="col-md4 center">
                    <div class="has-circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/eco/img02.jpg" alt="床下換気孔" width="250">
                        <div class="circle">
                            <p>床下換気孔</p>
                        </div>
        
                    </div>
                </div>
                <div class="col-md4 center">
                    <div class="has-circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fuudo/eco/img03.jpg" alt="屋根裏換気扇" width="250">
                        <div class="circle">
                            <p>屋根裏<br>換気扇</p>
                        </div>
        
                    </div>
                </div>
            </div>

        </div>

    </section>
	
<section id="fuudo">
    <div class="container">

        <div class="flex flex-center season02">

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
                <a href="<?php echo esc_url( home_url( '/fuudo/chacoal' ) ); ?>" class="btn-01">もっと詳しく</a>
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

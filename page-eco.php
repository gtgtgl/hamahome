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
            ハマホームのPS高断熱工法とは、柱の外側から断熱材を貼付ける外断熱工法。<br>
            壁はもちろん、基礎、屋根まで断熱材で覆うので、断熱材が途切れることなく家中をすっぽり包み込みます。<br>
            そして、床下に入れる炭。調湿性にすぐれ、家の湿度を快適に保ってくれます。<br>
            さらにその炭にふれた空気が家中を回るように通気路を設けています。<br>
            「外断熱工法」と「炭パワー」と「通気路」の3つを合わせることで、年中の冷暖房費が節約でき、<br>
            健康で快適な生活をおくれる。それが「省エネ断熱工法」なのです。
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

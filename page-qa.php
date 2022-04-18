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

<section class="mb80">
    <div class="container">

    <p class="center">
        お家のことでお困りのこと、ございませんか？<br>
        ハマホームならそのお困りごとを解決できるかもしれません！
    </p>

    <h2>建具のお悩み</h2>

    <?php
        $tategu_array = array(
            array(
                'サッシまわりが結露で濡れてしまいます。',
                '外と室内の温度差が原因となり結露は発生してしまいます。ペアガラスへの交換やインナーサッシを取り付けると結露の軽減となりますのでご相談下さい。'
            ),
            array(
                '窓の近くの温度差がある。',
                '古いタイプのアルミサッシやガラスですとすき間があったり、温度差が発生やすくなっています。サッシの交換やインナーサッシの取付や、カーテンを交換したりすき間が少なくなるカーテンレールへの交換も温度差が少なくなります。'
            )
            );

            foreach ($tategu_array as $key => $value) {

                if($key == 0): ?>
                <div class="acbox acbox-qa mt60">
                <?php else: ?>
                <div class="acbox acbox-qa">
                <?php endif; ?>

                <input id="qa_tategu<?php echo $key; ?>" type="checkbox">
                <label for="qa_tategu<?php echo $key; ?>"><?php echo $value[0]; ?></label>
                <div class="acbox-under">
                    <p><?php echo $value[1]; ?></p>
                </div>
            </div>
            <?php } ?>
            
    <h2 class="mt80">トイレのお悩み</h2>

    <?php
        $toilet_array = array(
            array(
                '臭いがする。',
                '床がタイルですと排水口からの臭い上がりが考えられます。それ以外には、男性が立って小便をするときにどうしても飛沫や跳ね返りが周囲に飛び付着して臭いを発生している可能性があります。タイル張りの場合は床材を変えたり、跳ね返りが防げる便器もありますのでご相談ください。'
            ),
            array(
                '黄ばむ。',
                '古いタイプの便器ですと、長年の汚れが取れなくなってきてしまっているのかもしれません。現在の便器は汚れが付きにくくなっていたり、お掃除がしやすくなっています。新しいタイプの便器への交換もご相談ください。'
            )
            );

            foreach ($toilet_array as $key => $value) {

                if($key == 0): ?>
                <div class="acbox acbox-qa mt60">
                <?php else: ?>
                <div class="acbox acbox-qa">
                <?php endif; ?>

                <input id="qa_toilet<?php echo $key; ?>" type="checkbox">
                <label for="qa_toilet<?php echo $key; ?>"><?php echo $value[0]; ?></label>
                <div class="acbox-under">
                    <p><?php echo $value[1]; ?></p>
                </div>
            </div>
            <?php } ?>
            
    <h2 class="mt80">浴室のお悩み</h2>

    <?php
        $bath_array = array(
            array(
                'お風呂場が寒い。',
                'タイル貼りのお風呂や、以前のユニットバスですと断熱材が施工されていなかったり薄かったりします。お風呂場での事故で亡くなってしまう方の人数は交通事故で亡くなってしまう方より多くなってきてしまいました。新しいタイプのユニットバスへの交換や、お風呂場専用の暖房機の設置をして暖かく安全なお風呂をお勧めします。'
            )
            );

            foreach ($bath_array as $key => $value) {

                if($key == 0): ?>
                <div class="acbox acbox-qa mt60">
                <?php else: ?>
                <div class="acbox acbox-qa">
                <?php endif; ?>

                <input id="qa_bath<?php echo $key; ?>" type="checkbox">
                <label for="qa_bath<?php echo $key; ?>"><?php echo $value[0]; ?></label>
                <div class="acbox-under">
                    <p><?php echo $value[1]; ?></p>
                </div>
            </div>
            <?php } ?>
            
    <h2 class="mt80">キッチンのお悩み</h2>

    <?php
        $bath_array = array(
            array(
                'キッチン周りをきれいに片付けたい。',
                '最近のキッチンの下の部分は引出しが主流となっており収納力が以前の物より大きくなっています。天袋を電動昇降のものに交換したりすることで物が片付きキッチンをスッキリすることが出来ます。'
            )
            );

            foreach ($bath_array as $key => $value) {

                if($key == 0): ?>
                <div class="acbox acbox-qa mt60">
                <?php else: ?>
                <div class="acbox acbox-qa">
                <?php endif; ?>

                <input id="qa_kitchen<?php echo $key; ?>" type="checkbox">
                <label for="qa_kitchen<?php echo $key; ?>"><?php echo $value[0]; ?></label>
                <div class="acbox-under">
                    <p><?php echo $value[1]; ?></p>
                </div>
            </div>
            <?php } ?>
            
    <h2 class="mt80">外壁のお悩み</h2>

    <?php
        $outerwall_array = array(
            array(
                '傷みが出てきている。',
                'サイディングやモルタルでしたら白い粉がでているようですと塗装が必要となります。鉄板でしたら錆がひどくなる前に塗装したほうがいいですね。'
            ),
            array(
                '汚れが気になる。',
                '泥などの場合は高圧洗浄などをするときれいになります。カビですと薬品を使ってきれいにすることが出来るときがあります。'
            ),
            array(
                '雨漏れがする。',
                'コーキングが切れていたり、痛みにより水が進入することがあります。早めに点検したほうがいいでしょう。'
            ),
            );

            foreach ($outerwall_array as $key => $value) {

                if($key == 0): ?>
                <div class="acbox acbox-qa mt60">
                <?php else: ?>
                <div class="acbox acbox-qa">
                <?php endif; ?>

                <input id="qa_outerwall<?php echo $key; ?>" type="checkbox">
                <label for="qa_outerwall<?php echo $key; ?>"><?php echo $value[0]; ?></label>
                <div class="acbox-under">
                    <p><?php echo $value[1]; ?></p>
                </div>
            </div>
            <?php } ?>
            
    <h2 class="mt80">屋根のお悩み</h2>

    <?php
        $loof_array = array(
            array(
                '雨漏れがする。',
                '瓦の場合、風や雪によりズレや割れが起きているかもしれません。板金やコロニアルの場合は穴が開いていたり欠損していることもありますので点検が必要です。'
            )
            );

            foreach ($loof_array as $key => $value) {

                if($key == 0): ?>
                <div class="acbox acbox-qa mt60">
                <?php else: ?>
                <div class="acbox acbox-qa">
                <?php endif; ?>

                <input id="qa_loof<?php echo $key; ?>" type="checkbox">
                <label for="qa_loof<?php echo $key; ?>"><?php echo $value[0]; ?></label>
                <div class="acbox-under">
                    <p><?php echo $value[1]; ?></p>
                </div>
            </div>
            <?php } ?>
            
    <h2 class="mt80">建築時のお悩み</h2>

    <?php
        $construction_array = array(
            array(
                '建てるときにかかる出費ってなにがあるのですか？',
                '地鎮祭、引っ越し、ケーブルテレビ、電話など工事には含まれていない出費がありますので準備しておいた方がいいでしょう。'
            ),
            array(
                '税金ってどんなものがかかるのですか？',
                '住宅の新築の場合は、住宅取得税、固定資産税がかかります。また、登記の際に登録免許税なども必要となります。'
            ),
            array(
                '補償やアフターサービスはどんなものがあるのですか？',
                '住宅を新築した場合は、躯体などには１０年間のかし保証が建築会社に義務付けられています。機器類は各メーカーの保証がついています。'
            ),
            array(
                '工事中の引っ越し先ってどんなところがあるのですか？',
                'アパート、マンションの短期契約や、一戸建てを借りられる方もおられます。'
            ),
            array(
                '工事期間ってどれくらいかかるのですか？',
                '半年から１年程度が新築工事の場合の工事期間となります。'
            ),
            array(
                '工事への支払いはどのようにしたらいいのでしょうか？',
                '当社の場合は、契約時から最終まで工事の進捗に合わせて４回にわけてお支払いいただいております。'
            ),
            array(
                '地鎮祭、上棟式は必要なのですか？',
                'お客様のご希望にて執り行わさせていただいておりますので、必ずしなくてはいけないものではありません。'
            ),
            );

            foreach ($construction_array as $key => $value) {

                if($key == 0): ?>
                <div class="acbox acbox-qa mt60">
                <?php else: ?>
                <div class="acbox acbox-qa">
                <?php endif; ?>

                <input id="qa_construction<?php echo $key; ?>" type="checkbox">
                <label for="qa_construction<?php echo $key; ?>"><?php echo $value[0]; ?></label>
                <div class="acbox-under">
                    <p><?php echo $value[1]; ?></p>
                </div>
            </div>
            <?php } ?>
            
    <h2 class="mt80">工事前のお悩み</h2>

    <?php
        $before_array = array(
            array(
                '家を建てたいのですがなにから始めたらいいのでしょうか？',
                '土地が決まっている場合は、プランの作成と資金計画から始められるといいと思います。'
            ),
            array(
                '土地をさがしているのですが、どこに相談したらいいのでしょうか？',
                '不動産屋さんのホームページや雑誌などを参考にしたりして探すといいと思います。当社でもご紹介させていただいております。'
            ),
            array(
                '新築、リフォームのローンの種類を教えてください。',
                '新築の場合は銀行での住宅ローンや、固定金利でのフラット３５などがあります。リフォームの場合は銀行でのリフォームローンが一般的です。'
            ),
            array(
                '住んでいる家の耐震や補強について教えてください。',
                '耐震補強をお考えでしたら、まずは耐震診断から始められるといいかと思います。自治体からの補助金もありますのでそれを活用して計画をたてるのがいいでしょう。'
            ),
            array(
                '古民家の再生ってどんなことなのでしょうか？',
                '長く住まれていて愛着があるお住まいを、きれいにして耐震や災害に強くしてこれからも長く住める家にしてきます。'
            ),
            array(
                'キッチンなどのショールームに行ってみたいです。',
                '様々な水回りメーカーやサッシメーカーなどのショールームがあります。ほとんどのメーカーがホームページからの予約が可能となっております。当社にご相談いただければご予約させていただきます。新築の場合はプランやリフォームの場合は寸法のわかる図面や写真があるとスムーズに案内してもらえます。'
            ),
            );

            foreach ($before_array as $key => $value) {

                if($key == 0): ?>
                <div class="acbox acbox-qa mt60">
                <?php else: ?>
                <div class="acbox acbox-qa">
                <?php endif; ?>

                <input id="qa_before<?php echo $key; ?>" type="checkbox">
                <label for="qa_before<?php echo $key; ?>"><?php echo $value[0]; ?></label>
                <div class="acbox-under">
                    <p><?php echo $value[1]; ?></p>
                </div>
            </div>
            <?php } ?>
            
    <h2 class="mt80">プランのお悩み</h2>

    <?php
        $plan_array = array(
            array(
                '二世帯住宅でうまくいくポイントって？',
                '最近は水まわり部分（キッチン、トイレ、お風呂）を別々にしたり、入口を２か所にすることが増えています。生活時間の違いなどを考慮して生活音が伝わりにくいプランが必要になってきています。'
            ),
            array(
                'ペットがいるのですが、ペットに優しい家ってどんなのでしょうか？',
                '床材を滑りにくいものにして滑るのを防いだり、壁クロスを強化されたものにすると傷がつきにくくなります。ドアにペット用の入口を取り付けたり、玄関まわりにお散歩帰りの洗い場を設けたりもいいですね。お風呂に一緒に入る場合は床材が傷のつきにくいものを採用するのもいいと思います。'
            ),
            array(
                '将来、子どもが巣だった後を考えた家づくりを知りたいです。',
                '子育てを考えるとついつい家が大きくなってしまいます。将来、趣味の部屋などに利用したり、間仕切り壁が取れるような工夫をしておくといいでしょう。'
            ),
            array(
                '風水を考えた家づくりってどうなのでしょうか？',
                '風水や家相をとりいれた家づくりもあります。実は風水や家相も流派などがありなにもかもが同じというわけではありません。きちんと調べてから取り入れたほうがいいですね。'
            ),
            array(
                '住んでいる家の一部屋を防音室にしたい。',
                'ピアノやカラオケやAVルームなどに防音工事をさせていただいております。壁、天井に防音材、吸音材を入れ、入口や窓を強化して外に音が漏れにくくなるように工事します。音が外に出ないように音を反射するような工事をしてしまうと、反射音で中で音を楽しめなくなるので注意が必要です。'
            ),
            );

            foreach ($plan_array as $key => $value) {

                if($key == 0): ?>
                <div class="acbox acbox-qa mt60">
                <?php else: ?>
                <div class="acbox acbox-qa">
                <?php endif; ?>

                <input id="qa_plan<?php echo $key; ?>" type="checkbox">
                <label for="qa_plan<?php echo $key; ?>"><?php echo $value[0]; ?></label>
                <div class="acbox-under">
                    <p><?php echo $value[1]; ?></p>
                </div>
            </div>
            <?php } ?>
            
            
    <h2 class="mt80">介護のお悩み</h2>

    <?php
        $nursing_array = array(
            array(
                '介護が必要になったのですが、手すりなどどうしたらいいのでしょうか？',
                '介護保険を利用されたい場合は、介護認定などの手続きが必要となりますので自治体、地区の包括支援センターなどに相談した後、当社で取付工事やリフォームをさせていただきます。ご利用されない場合は、当社で適切な位置や使いやすい手すりの取付をさせていただきますのでご相談ください。'
            ),
            );

            foreach ($nursing_array as $key => $value) {

                if($key == 0): ?>
                <div class="acbox acbox-qa mt60">
                <?php else: ?>
                <div class="acbox acbox-qa">
                <?php endif; ?>

                <input id="qa_nursing<?php echo $key; ?>" type="checkbox">
                <label for="qa_nursing<?php echo $key; ?>"><?php echo $value[0]; ?></label>
                <div class="acbox-under">
                    <p><?php echo $value[1]; ?></p>
                </div>
            </div>
            <?php } ?>
            
    </div>
</section>

	</main><!-- #main -->

<?php
get_footer();

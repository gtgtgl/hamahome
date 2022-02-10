<ul>
      <li class="has-child"><a>会社情報</a>
        <ul>
            <li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>">会社案内</a></li>
            <li><a href="<?php echo esc_url( home_url( '/staff' ) ); ?>">スタッフ紹介</a></li>
        </ul>
      </li>
      <li class="has-child"><a href="#">お知らせ</a>
        <ul>
							<?php 
								$category_id_news = get_cat_ID( 'お知らせ' );
								$category_link_news = get_category_link( $category_id_news );
								$category_id_president = get_cat_ID( '社長ブログ' );
								$category_link_president = get_category_link( $category_id_president );
								$category_id_staff = get_cat_ID( 'スタッフブログ' );
								$category_link_staff = get_category_link( $category_id_staff );
								 ?>
            <li><a href="<?php echo esc_url( $category_link_news ); ?>">お知らせ一覧</a></li>
            <li><a href="<?php echo esc_url( $category_link_president ); ?>">社長ブログ</a></li>
            <li><a href="<?php echo esc_url( $category_link_staff ); ?>">スタッフブログ</a></li>
        </ul>
      </li>
      <li class="has-child"><a href="#">事例紹介</a>
        <ul>
            <li><a href="<?php echo get_post_type_archive_link( 'construction' ); ?>">施工事例</a></li>
            <li><a href="https://www.instagram.com/hamahome.fukui/?hl=ja" target="_blank">目で見る写真</a></li>
        </ul>
      </li>
      <li class="has-child"><a href="#">家づくりについて</a>
        <ul>
            <li><a href="#">家づくりの流れ</a></li>
            <li><a href="<?php echo esc_url( home_url( '/reform' ) ); ?>">リフォーム</a></li>
            <li><a href="<?php echo esc_url( home_url( '/warranty' ) ); ?>">住宅あんしん保証</a></li>
            <li><a href="#">お困りごと</a></li>
        </ul>
      </li>
      <li class="has-child"><a href="<?php echo esc_url( home_url( '/fuudo' ) ); ?>">福井の風土に合う家</a>
        <ul>
            <li><a href="<?php echo esc_url( home_url( '/fuudo/panel' ) ); ?>">パネル工法</a></li>
            <li><a href="<?php echo esc_url( home_url( '/fuudo/charcoal' ) ); ?>">炭の力</a></li>
            <li><a href="<?php echo esc_url( home_url( '/fuudo/eco' ) ); ?>">省エネの断熱</a></li>
            <li><a href="<?php echo esc_url( home_url( '/fuudo/wood' ) ); ?>">木へのこだわり</a></li>
        </ul>
      </li>
    </ul>
<ul>
      <li class="has-child"><a>会社情報</a>
        <ul>
            <li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>">会社案内</a></li>
            <li><a href="<?php echo esc_url( home_url( '/staff' ) ); ?>">スタッフ紹介</a></li>
        </ul>
      </li>
      <li class="has-child"><a href="#">お知らせ</a>
        <ul>
            <li><a href="<?php echo get_post_type_archive_link( 'post' ); ?>">お知らせ一覧</a></li>
            <li><a href="<?php echo get_post_type_archive_link( 'president_blog' ); ?>">社長ブログ</a></li>
            <li><a href="<?php echo get_post_type_archive_link( 'staff_blog' ); ?>">スタッフブログ</a></li>
        </ul>
      </li>
      <li class="has-child"><a href="#">事例紹介</a>
        <ul>
            <li><a href="<?php echo get_post_type_archive_link( 'construction' ); ?>">施工事例</a></li>
            <li><a href="#">目で見る写真</a></li>
        </ul>
      </li>
      <li class="has-child"><a href="#">家づくりについて</a>
        <ul>
            <li><a href="#">家づくりの流れ</a></li>
            <li><a href="#">リフォーム</a></li>
            <li><a href="#">住宅あんしん保証</a></li>
            <li><a href="#">お困りごと</a></li>
        </ul>
      </li>
      <li class="has-child"><a href="<?php echo esc_url( home_url( '/fuudo' ) ); ?>">福井の風土に合う家</a>
        <ul>
            <li><a href="#">パネル工法</a></li>
            <li><a href="#">炭の力</a></li>
            <li><a href="#">省エネの断熱</a></li>
            <li><a href="#">木へのこだわり</a></li>
        </ul>
      </li>
    </ul>
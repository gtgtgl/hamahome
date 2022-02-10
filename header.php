<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
  <div class="container">

    <div class="site-branding">
      <?php
      the_custom_logo();
      if ( is_front_page() && is_home() ) :
        ?>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_t.png" alt="ハマホーム"></a></h1>
        <?php
      else :
        ?>
        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_t.png" alt="ハマホーム"></a></p>
        <?php
      endif; ?>
    </div><!-- .site-branding -->
    
    <div id="mobile_menu">
  
      <button id="close_mobile_menu">×</button>
  
      <nav id="site-navigation" class="main-navigation">
        <?php include('inc/_headernav.php') ?>
      </nav>
  
      <div class="menu_company">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_t.png" alt="ハマホーム" class="site_logo">
        <p class="company_name">
          ハマホーム 浜本建設株式会社
        </p>
        <p>
          〒910-0001 福井市大願寺 1-4-16<br>
          TEL.0776-26-3183　FAX.0776-22-2374
        </p>
        <p>
          【事業内容】新築 リフォーム 不動産 店舗改装 製炭
        </p>

        <div class="copyright">
          <div class="container flex">
            <ul class="menu-footer">
              <li>
                <a href="#">プライバシーポリシー</a>
              </li>
            </ul>
            <p>Copyright © 2021 Hama Home.</p>
          </div>
      </div>
        
      </div>
  
    </div>
  
    <button id="open_mobile_menu">
        <img src="<?php echo get_template_directory_uri(); ?>/img/menu-line.svg" alt="menu">
    
    </button>

  </div>
  <!-- end of .container -->
  
</header><!-- #masthead -->

<div id="flow_btn">
  <div class="flowbtn_wrap">

  <a href="tel:0776263831" class="tel">
    <div class="img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" alt="電話で問い合わせ">
    </div>
    <div class="text">
      <p class="small"><span>受付時間 </span>00:00～00:00（平日のみ）</p>
      <p class="number">0776-26-3831</p>
    </div>
  </a>

  <a href="#" class="mail">
    <img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg" alt="メールで問い合わせ">
    <span>お問い合わせ</span>
  </a>
  </div>

</div>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="robots" content="noindex">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />

  <!-- ogp -->
  <!-- <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:
  " content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" /> -->

  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/common/favicon.ico" />

  <?php wp_head(); ?>

</head>

<body>
  <!-- ヘッダー -->
  <?php
  $home = esc_url(home_url('/'));
  $campaign = esc_url(home_url('/campaign/'));
  $about = esc_url(home_url('/about/'));
  $info = esc_url(home_url('/info/'));
  $blog = esc_url(home_url('/blog/'));
  $voice = esc_url(home_url('/voice/'));
  $price = esc_url(home_url('/price/'));
  $faq = esc_url(home_url('/faq/'));
  $privacy = esc_url(home_url('/privacypolicy/'));
  $terms = esc_url(home_url('/termsofservice/'));
  $contact = esc_url(home_url('/contact/'));
  ?>

  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo $home; ?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-white.svg" alt="CodeUpsのロゴ"></a>
      </h1>
      <div class="header__hamburger-button hamburger-button js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <!-- PCナビゲーション -->
      <nav class="header__pc-navi pc-navi">
        <ul class="pc-navi__container">
          <li class="pc-navi__items">
            <a href="<?php echo $campaign; ?>" class="pc-navi__title">
              <p class="pc-navi__english-title">Campaign</p>
              <p class="pc-navi__japanese-title">キャンペーン</p>
            </a>
          </li>
          <li class="pc-navi__items">
            <a href="<?php echo $about; ?>" class="pc-navi__title">
              <p class="pc-navi__english-title">About us</p>
              <p class="pc-navi__japanese-title">私たちについて</p>
            </a>
          </li>
          <li class="pc-navi__items">
            <a href="<?php echo $info; ?>" class="pc-navi__title">
              <p class="pc-navi__english-title">Information</p>
              <p class="pc-navi__japanese-title">ダイビング情報</p>
            </a>
          </li>
          <li class="pc-navi__items">
            <a href="<?php echo $blog; ?>" class="pc-navi__title">
              <p class="pc-navi__english-title">Blog</p>
              <p class="pc-navi__japanese-title">ブログ</p>
            </a>
          </li>
          <li class="pc-navi__items">
            <a href="<?php echo $voice; ?>" class="pc-navi__title">
              <p class="pc-navi__english-title">Voice</p>
              <p class="pc-navi__japanese-title">お客様の声</p>
            </a>
          </li>
          <li class="pc-navi__items">
            <a href="<?php echo $price; ?>" class="pc-navi__title">
              <p class="pc-navi__english-title">Price</p>
              <p class="pc-navi__japanese-title">料金一覧</p>
            </a>
          </li>
          <li class="pc-navi__items">
            <a href="<?php echo $faq; ?>" class="pc-navi__title">
              <p class="pc-navi__english-title">FAQ</p>
              <p class="pc-navi__japanese-title">よくある質問</p>
            </a>
          </li>
          <li class="pc-navi__items">
            <a href="<?php echo $contact; ?>" class="pc-navi__title">
              <p class="pc-navi__english-title">Contact</p>
              <p class="pc-navi__japanese-title">お問い合わせ</p>
            </a>
          </li>
        </ul>
      </nav>

      <!-- SPナビゲーション -->
      <nav class="header__sp-nav sp-nav">
        <div class="sp-navi__container">
          <ul class="sp-navi__left">
            <li class="sp-navi__items">
              <a href="<?php echo $campaign; ?>" class="sp-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">キャンペーン</a>
              <ul class="sp-navi__item">
                <li><a href="<?php echo $campaign; ?>#tab02">ライセンス取得</a></li>
                <li><a href="<?php echo $campaign; ?>#tab03">貸切体験ダイビング</a></li>
                <li><a href="<?php echo $campaign; ?>#tab04">ナイトダイビング</a></li>
              </ul>
            </li>
            <li class="sp-navi__items">
              <a href="<?php echo $about; ?>" class="sp-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">私たちについて</a>
            </li>
            <li class="sp-navi__items">
              <a href="<?php echo $info; ?>" class="sp-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">ダイビング情報</a>
              <ul class="sp-navi__item">
                <li><a href="<?php echo $info; ?>#tab01">ライセンス講習</a></li>
                <li><a href="<?php echo $info; ?>#tab03">体験ダイビング</a></li>
                <li><a href="<?php echo $info; ?>#tab02">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="sp-navi__items">
              <a href="<?php echo $blog; ?>" class="sp-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">ブログ</a>
            </li>
          </ul>

          <!-- SPナビ右側 -->
          <ul class="sp-navi__right">
            <li class="sp-navi__items">
              <a href="<?php echo $voice; ?>" class="sp-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">お客様の声</a>
            </li>
            <li class="sp-navi__items">
              <a href="<?php echo $price; ?>" class="sp-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">料金一覧</a>
              <ul class="sp-navi__item">
                <li><a href="<?php echo $price; ?>#license">ライセンス講習</a></li>
                <li><a href="<?php echo $price; ?>#trial">体験ダイビング</a></li>
                <li><a href="<?php echo $price; ?>#fun">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="sp-navi__items">
              <a href="<?php echo $faq; ?>" class="sp-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">よくある質問</a>
            </li>
            <li class="sp-navi__items">
              <a href="<?php echo $privacy; ?>" class="sp-navi__title sp-navi__title--line-height"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">プライバシー
                <br>ポリシー</a>
            </li>
            <li class="sp-navi__items">
              <a href="<?php echo $terms; ?>" class="sp-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">利用規約</a>
            </li>
            <li class="sp-navi__items">
              <a href="<?php echo $contact; ?>" class="sp-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
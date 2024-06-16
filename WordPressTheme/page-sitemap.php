<?php get_header(); ?>

<main>
  <!-- 下層メインビュー -->
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-mv-sp.jpg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-mv-pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-mv-pc.jpg" alt="サンゴと熱帯魚の画像">
        </picture>
      </div>
      <!-- セクションタイトル -->
      <div class="sub-mv__title section-title">
        <h1 class="section-title__english section-title__english--white section-title__english--sub">site MAP</h1>
      </div>
    </div>
  </div>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

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

  <!-- site MAP -->
  <section class="site-map lower-site-map">
    <div class="site-map__inner inner">
      <div class="site-map__contents">

        <!-- フッターナビゲーション -->
        <div class="site-map__navi footer-navi footer-navi--black">
          <nav class="footer-navi__container">
            <ul class="footer-navi__list">
              <li class="footer-navi__items footer-navi__items--width">
                <h2>
                  <a href="<?php echo $campaign; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-darkgreen.png" alt="ヒトデ">キャンペーン</a>
                </h2>
                <ul class="footer-navi__item">
                  <li><a href="<?php echo $campaign; ?>/?category=license">ライセンス取得</a></li>
                  <li><a href="<?php echo $campaign; ?>/?category=trial">貸切体験ダイビング</a></li>
                  <li><a href="<?php echo $campaign; ?>/?category=fun">ナイトダイビング</a></li>
                </ul>
              </li>
              <li class="footer-navi__items footer-navi__items--width">
                <h2>
                  <a href="<?php echo $about; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-darkgreen.png" alt="ヒトデ">私たちについて</a>
                </h2>
              </li>
            </ul>

            <ul class="footer-navi__list">
              <li class="footer-navi__items">
                <h2>
                  <a href="<?php echo $info; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-darkgreen.png" alt="ヒトデ">ダイビング情報</a>
                </h2>
                <ul class="footer-navi__item">
                  <li><a href="<?php echo get_theme_file_uri(); ?>/info.html">ライセンス講習</a></li>
                  <li><a href="<?php echo get_theme_file_uri(); ?>/info-trial.html">体験ダイビング</a></li>
                  <li><a href="<?php echo get_theme_file_uri(); ?>/info-fun.html">ファンダイビング</a></li>
                </ul>
              </li>
              <li class="footer-navi__items">
                <h2>
                  <a href="<?php echo $blog; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-darkgreen.png" alt="ヒトデ">ブログ</a>
                </h2>
              </li>
            </ul>

            <ul class="footer-navi__list">
              <li class="footer-navi__items">
                <h2>
                  <a href="<?php echo $voice; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-darkgreen.png" alt="ヒトデ">お客様の声</a>
                </h2>
              </li>
              <li class="footer-navi__items">
                <h2>
                  <a href="<?php echo $price; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-darkgreen.png" alt="ヒトデ">料金一覧</a>
                </h2>
                <ul class="footer-navi__item">
                  <li><a href="<?php echo $price; ?>#license">ライセンス講習</a></li>
                  <li><a href="<?php echo $price; ?>#trial">体験ダイビング</a></li>
                  <li><a href="<?php echo $price; ?>#fun">ファンダイビング</a></li>
                </ul>
              </li>
            </ul>

            <ul class="footer-navi__list">
              <li class="footer-navi__items">
                <h2>
                  <a href="<?php echo $faq; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-darkgreen.png" alt="ヒトデ">よくある質問</a>
                </h2>
              </li>
              <li class="footer-navi__items footer-navi__items--line-height">
                <h2>
                  <a href="<?php echo $privacy; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-darkgreen.png" alt="ヒトデ">プライバシー
                    <br class="u-mobile">ポリシー</a>
                </h2>
              </li>
              <li class="footer-navi__items">
                <h2>
                  <a href="<?php echo $terms; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-darkgreen.png" alt="ヒトデ">利用規約</a>
                </h2>
              </li>
              <li class="footer-navi__items">
                <h2>
                  <a href="<?php echo $contact; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-darkgreen.png" alt="ヒトデ">お問い合わせ</a>
                </h2>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>


  <?php get_footer(); ?>
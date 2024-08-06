    <!-- Contact -->
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
    $sitemap = esc_url(home_url('/sitemap/'));
    ?>

    <?php if (!is_404() && !is_page('contact')) : ?>
      <!-- 404 ページでも contact ページでもない場合に contact セクションを表示 -->

      <section class="contact top-contact">
        <div class="contact__inner inner">
          <div class="contact__flex">
            <!-- アクセス -->
            <div class="contact__access">
              <p class="contact__logo"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-green.svg" alt="CodeUps"></p>
              <div class="contact__address">
                <ul>
                  <li>沖縄県那覇市1-1</li>
                  <li>TEL:0120-000-0000</li>
                  <li>営業時間:8:30-19:00</li>
                  <li>定休日:毎週火曜日</li>
                </ul>
                <div class="contact__map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57273.02319562232!2d127.64350225655136!3d26.210859430268528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5697141a6b58b%3A0x2cd8aff616585e98!2z5rKW57iE55yM6YKj6KaH5biC!5e0!3m2!1sja!2sjp!4v1692710541228!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>

            <div class="contact__contents">
              <div class="contact__title section-title">
                <h2 class="section-title__english section-title__english--large">contact</h2>
                <div class="section-title__japanese section-title__japanese--small">お問い合わせ</div>
              </div>
              <p>ご予約・お問い合わせはコチラ</p>
              <!-- ボタン -->
              <div class="contact__button">
                <a href="<?php echo $contact; ?>" class="button">
                  <span>View more</span>
                </a>
              </div>
            </div>
            <div class="contact__illust"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-green2.png" alt="魚の群れのイラスト"></div>
          </div>
        </div>
      </section>
      </main>
    <?php endif; ?>

    <!-- 上へボタン -->
    <?php if (!is_404()) : ?>
      <div class="to-top">
        <a href="#top"><span></span></a>
      </div>
    <?php endif; ?>

    <!-- フッター -->
    <?php if (is_404()) : ?>
      <footer class="footer top-footer--error">
      <?php else : ?>
        <footer class="footer top-footer">
        <?php endif; ?>

        <div class="footer__inner inner">
          <div class="footer__wrapper">
            <div class="footer__top">
              <a href="<?php echo $home; ?>" class="footer__logo"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-white.svg" alt="CodeUpsのロゴ"></a>
              <div class="footer__sns">
                <a href="https://www.facebook.com/?locale=ja_JP" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.png" alt="Facebookのロゴ"></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/InstagramLogo.png" alt="instagramのロゴ"></a>
              </div>
            </div>
            <!-- フッターナビゲーション -->
            <div class="footer__navi footer-navi">
              <nav class="footer-navi__container">

                <ul class="footer-navi__list">
                  <li class="footer-navi__items footer-navi__items--width">
                    <a href="<?php echo $campaign; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">キャンペーン</a>
                    <ul class="footer-navi__item">
                      <li><a href="<?php echo $campaign; ?>/?category=license">ライセンス取得</a></li>
                      <li><a href="<?php echo $campaign; ?>/?category=trial">貸切体験ダイビング</a></li>
                      <li><a href="<?php echo $campaign; ?>/?category=fun">ナイトダイビング</a></li>
                    </ul>
                  </li>
                  <li class="footer-navi__items footer-navi__items--width">
                    <a href="<?php echo $about; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">私たちについて</a>
                  </li>
                </ul>

                <ul class="footer-navi__list">
                  <li class="footer-navi__items">
                    <a href="<?php echo $info; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">ダイビング情報</a>
                    <ul class="footer-navi__item">
                      <li><a href="<?php echo $info; ?>#tab01">ライセンス講習</a></li>
                      <li><a href="<?php echo $info; ?>#tab03">体験ダイビング</a></li>
                      <li><a href="<?php echo $info; ?>#tab02">ファンダイビング</a></li>
                    </ul>
                  </li>
                  <li class="footer-navi__items">
                    <a href="<?php echo $blog; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">ブログ</a>
                  </li>
                </ul>

                <ul class="footer-navi__list">
                  <li class="footer-navi__items">
                    <a href="<?php echo $voice; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">お客様の声</a>
                  </li>
                  <li class="footer-navi__items">
                    <a href="<?php echo $price; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">料金一覧</a>
                    <ul class="footer-navi__item">
                      <li><a href="<?php echo $price; ?>#license">ライセンス講習</a></li>
                      <li><a href="<?php echo $price; ?>#trial">体験ダイビング</a></li>
                      <li><a href="<?php echo $price; ?>#fun">ファンダイビング</a></li>
                    </ul>
                  </li>
                </ul>

                <ul class="footer-navi__list">
                  <li class="footer-navi__items">
                    <a href="<?php echo $faq; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">よくある質問</a>
                  </li>
                  <li class="footer-navi__items footer-navi__items--line-height">
                    <a href="<?php echo $privacy; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">プライバシー
                      <br class="u-mobile">ポリシー</a>
                  </li>
                  <li class="footer-navi__items">
                    <a href="<?php echo $terms; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">利用規約</a>
                  </li>
                  <li class="footer-navi__items">
                    <a href="<?php echo $contact; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">お問い合わせ</a>
                  </li>
                  <li class="footer-navi__items">
                    <a href="<?php echo $sitemap; ?>" class="footer-navi__title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデ">サイトマップ</a>
                  </li>

                </ul>

              </nav>
            </div>
            <p class="footer__copyright">Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.</p>
          </div>
        </div>
        </footer>

        <?php wp_footer(); ?>

        </body>

        </html>
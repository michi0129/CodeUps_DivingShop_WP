
<?php get_header(); ?>

  <main>
    <!-- メインビュー -->
    <div class="mv">
      <div class="mv__inner">
        <div class="mv__images">
          <!-- Swiper -->
          <div class="swiper js-mv-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <picture>
                  <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv1-sp.jpg">
                  <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv1-pc.jpg">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv1-pc.jpg" alt="ウミガメの写真">
                </picture>
              </div>
              <div class="swiper-slide">
                <picture>
                  <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv2-sp.jpg">
                  <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv2-pc.jpg">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv2-pc.jpg" alt="下からのウミガメの写真">
                </picture>
              </div>
              <div class="swiper-slide">
                <picture>
                  <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv3-sp.jpg">
                  <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv3-pc.jpg">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv3-pc.jpg" alt="海上の写真">
                </picture>
              </div>
              <div class="swiper-slide">
                <picture>
                  <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv4-sp.jpg">
                  <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv4-pc.jpg">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv4-pc.jpg" alt="砂浜の写真">
                </picture>
              </div>
            </div>
          </div>
        </div>
        <div class="mv__catch">
          <p class="mv__main-catch">diving</p>
          <p class="mv__second-catch">into the ocean</p>
        </div>
      </div>

    </div>

    <!-- キャンペーン -->
    <section class="campaign top-campaign">
      <div class="campaign__inner inner">
        <!-- セクションタイトル -->
        <div class="campaign__title section-title">
          <h2 class="section-title__english">campaign</h2>
          <div class="section-title__japanese">キャンペーン</div>
        </div>
        <div class="campaign__contents">
          <!-- Swiper -->
          <div class="swiper js-campaign-swiper">
            <div class="swiper-wrapper">
              <!-- カード1個目 -->
              <div class="swiper-slide">
                <div class="campaign__card campaign-card">
                  <div class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg" alt="海中の画像">
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__tag">ライセンス講習</div>
                    <h3 class="campaign-card__title">ライセンス取得</h3>
                    <span class="campaign-card__bar"></span>
                    <div class="campaign-card__contents">
                      <p class="campaign-card__contents-title">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__contents-content">
                        <p>¥56,000<span></span></p>
                        <p>¥46,000</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- カード2個目 -->
              <div class="swiper-slide">
                <div class="campaign__card campaign-card">
                  <div class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg" alt="海上の写真">
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__tag">体験ダイビング</div>
                    <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                    <span class="campaign-card__bar"></span>
                    <div class="campaign-card__contents">
                      <p class="campaign-card__contents-title">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__contents-content">
                        <p>¥24,000<span></span></p>
                        <p>¥18,000</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- カード3個目 -->
              <div class="swiper-slide">
                <div class="campaign__card campaign-card">
                  <div class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3.jpg" alt="クラゲの画像">
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__tag">体験ダイビング</div>
                    <h3 class="campaign-card__title">ナイトダイビング</h3>
                    <span class="campaign-card__bar"></span>
                    <div class="campaign-card__contents">
                      <p class="campaign-card__contents-title">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__contents-content">
                        <p>¥10,000<span></span></p>
                        <p>¥8,000</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- カード4個目 -->
              <div class="swiper-slide">
                <div class="campaign__card campaign-card">
                  <div class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign4.jpg" alt="ダイバーの画像">
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__tag">ファンダイビング</div>
                    <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                    <span class="campaign-card__bar"></span>
                    <div class="campaign-card__contents">
                      <p class="campaign-card__contents-title">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__contents-content">
                        <p>¥20,000<span></span></p>
                        <p>¥16,000</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- カード1個目 -->
              <div class="swiper-slide">
                <div class="campaign__card campaign-card">
                  <div class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg" alt="海中の画像">
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__tag">ライセンス講習</div>
                    <h3 class="campaign-card__title">ライセンス取得</h3>
                    <span class="campaign-card__bar"></span>
                    <div class="campaign-card__contents">
                      <p class="campaign-card__contents-title">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__contents-content">
                        <p>¥56,000<span></span></p>
                        <p>¥46,000</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- カード2個目 -->
              <div class="swiper-slide">
                <div class="campaign__card campaign-card">
                  <div class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg" alt="海上の写真">
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__tag">体験ダイビング</div>
                    <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                    <span class="campaign-card__bar"></span>
                    <div class="campaign-card__contents">
                      <p class="campaign-card__contents-title">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__contents-content">
                        <p>¥24,000<span></span></p>
                        <p>¥18,000</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- カード3個目 -->
              <div class="swiper-slide">
                <div class="campaign__card campaign-card">
                  <div class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3.jpg" alt="クラゲの画像">
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__tag">体験ダイビング</div>
                    <h3 class="campaign-card__title">ナイトダイビング</h3>
                    <span class="campaign-card__bar"></span>
                    <div class="campaign-card__contents">
                      <p class="campaign-card__contents-title">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__contents-content">
                        <p>¥10,000<span></span></p>
                        <p>¥8,000</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- カード4個目 -->
              <div class="swiper-slide">
                <div class="campaign__card campaign-card">
                  <div class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign4.jpg" alt="ダイバーの画像">
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__tag">ファンダイビング</div>
                    <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                    <span class="campaign-card__bar"></span>
                    <div class="campaign-card__contents">
                      <p class="campaign-card__contents-title">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__contents-content">
                        <p>¥20,000<span></span></p>
                        <p>¥16,000</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- 前後の矢印 -->
        <div class="campaign__swiper-button">
          <div class="campaign__swiper-button-prev"><span></span></div>
          <div class="campaign__swiper-button-next"><span></span></div>
        </div>
        <!-- ボタン -->
        <div class="campaign__button">
          <a href="./campaign.html" class="button">
            <span>View more</span>
          </a>
        </div>
      </div>

    </section>

    <!-- About -->
    <section class="about top-about">
      <div class="about__inner inner">
        <!-- セクションタイトル -->
        <div class="about__title section-title">
          <h2 class="section-title__english">about us</h2>
          <div class="section-title__japanese">私たちについて</div>
        </div>
        <div class="about__contents">
          <div class="about__images">
            <div class="about__images-left">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-left.jpg" alt="シーサーと屋根の画像">
            </div>
            <div class="about__images-right">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-right.jpg" alt="海中の魚の画像">
            </div>
          </div>
          <div class="about__flex">
            <div class="about__catch">
              <p>Dive into<br>the Ocean</p>
            </div>
            <div class="about__content">
              <p class="about__text">
                当店は、美しい沖縄の海で楽しいダイビング体験を提供するプロフェッショナルなガイドとインストラクターで構成されています。<br>安全と楽しさを重視し、あらゆるスキルレベルに合わせたプログラムをご用意。私たちと一緒に素晴らしい海底世界を探索し、<!--楽しい冒険を共有しましょう。-->
              </p>
              <!-- ボタン -->
              <div class="about__button">
                <a href="./about.html" class="button">
                  <span>View more</span>
                </a>
              </div>
            </div>
          </div>
          <div class="about__coral"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/coral.png" alt="イソギンチャクのイラスト"></div>
        </div>
      </div>
    </section>

    <!-- Information -->
    <section class="info top-info">
      <div class="info__inner inner">
        <!-- セクションタイトル -->
        <div class="info__title section-title">
          <h2 class="section-title__english">information</h2>
          <div class="section-title__japanese">ダイビング情報</div>
        </div>
        <div class="info__contents">
          <div class="info__flex">
            <div class="info__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-pc.jpg" alt="熱帯魚の画像">
            </div>
            <div class="info__content">
              <div class="info__content-title">ライセンス講習</div>
              <p class="info__content-text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
                正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
              <!-- ボタン -->
              <div class="info__button">
                <a href="./info.html" class="button">
                  <span>View more</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog -->
    <section class="blog top-blog">
      <div class="blog__inner inner">
        <!-- セクションタイトル -->
        <div class="blog__title section-title section-title--white">
          <h2 class="section-title__english">blog</h2>
          <div class="section-title__japanese">ブログ</div>
        </div>
        <!-- グリッドレイアウト -->
        <div class="blog__cards blog-cards">
          <!-- カード1個目 -->
          <a href="./blog-page.html" class="blog-cards__card blog-card">
            <div class="blog-card__inner">
              <div class="blog-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog1.jpg" alt="珊瑚の画像">
              </div>
              <div class="blog-card__text-block">
                <time datetime="2023-11-17" class="blog-card__date">2023.11/17</time>
                <div class="blog-card__title">ライセンス取得</div>
                <span class="blog-card__bar"></span>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
              </div>
            </div>
          </a>
          <!-- カード2個目 -->
          <a href="#" class="blog-cards__card blog-card">
            <div class="blog-card__inner">
              <div class="blog-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog2.jpg" alt="ウミガメの画像">
              </div>
              <div class="blog-card__text-block">
                <time datetime="2023-11-17" class="blog-card__date">2023.11/17</time>
                <div class="blog-card__title">ウミガメと泳ぐ</div>
                <span class="blog-card__bar"></span>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </div>
          </a>
          <!-- カード3個目 -->
          <a href="#" class="blog-cards__card blog-card">
            <div class="blog-card__inner">
              <div class="blog-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog3.jpg" alt="カクレクマノミの画像">
              </div>
              <div class="blog-card__text-block">
                <time datetime="2023-11-17" class="blog-card__date">2023.11/17</time>
                <div class="blog-card__card-title">カクレクマノミ</div>
                <span class="blog-card__bar"></span>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </div>
          </a>
        </div>

        <!-- ボタン -->
        <div class="blog__button">
          <a href="./blog.html" class="button">
            <span>View more</span>
          </a>
        </div>
        <div class="blog__illust"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-white.png" alt="魚
            のイラスト"></div>
      </div>
    </section>

    <!-- Voice -->
    <section class="voice top-voice">
      <div class="voice__inner inner">
        <!-- セクションタイトル -->
        <div class="voice__title section-title">
          <h2 class="section-title__english">voice</h2>
          <div class="section-title__japanese">お客様の声</div>
        </div>
        <div class="voice__cards voice-cards">
          <!-- カード1個目 -->
          <div class="voice-cards__card voice-card">
            <div class="voice-card__inner">
              <div class="voice-card__flex">
                <div class="voice-card__title-block">
                  <div class="voice-card__subtitle">
                    <p>20代(女性)</p>
                    <span>ライセンス講習</span>
                  </div>
                  <div class="voice-card__title">ここにタイトルが入ります。ここにタイトル</div>
                </div>
                <div class="voice-card__image">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice1.jpg" alt="女性の画像">
                </div>
              </div>
              <div class="voice-card__text-block">
                <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。</p>
              </div>
            </div>
          </div>
          <!-- カード2個目 -->
          <div class="voice-cards__card voice-card">
            <div class="voice-card__inner">
              <div class="voice-card__flex">
                <div class="voice-card__title-block">
                  <div class="voice-card__subtitle">
                    <p>20代(男性)</p>
                    <span>ファンダイビング</span>
                  </div>
                  <div class="voice-card__title">ここにタイトルが入ります。ここにタイトル</div>
                </div>
                <div class="voice-card__image">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice2.jpg" alt="男性の画像">
                </div>
              </div>
              <div class="voice-card__text-block">
                <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。</p>
              </div>
            </div>
          </div>
        </div>
        <!-- ボタン -->
        <div class="voice__button">
          <a href="./voice.html" class="button">
            <span>View more</span>
          </a>
        </div>
        <div class="voice__illust"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-green1.png" alt="魚のイラスト"></div>
        <div class="voice__illust2"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/seahourse.png" alt="タツノオトシゴのイラスト"></div>
      </div>
    </section>

    <!-- Price -->
    <section class="price top-price">
      <div class="price__inner inner">
        <!-- セクションタイトル -->
        <div class="price__title section-title">
          <h2 class="section-title__english">price</h2>
          <div class="section-title__japanese">料金一覧</div>
        </div>
        <div class="price__flex">
          <div class="price__image">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp.jpg">
              <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc.jpg">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc.jpg" alt="海中の写真">
            </picture>
          </div>
          <div class="price__contents">
            <!-- 1個目 -->
            <div class="price__content">
              <div class="price__subtitle">ライセンス講習</div>

              <!-- 説明リスト -->
              <div class="price__list">
                <dl>
                  <dt>オープンウォーターダイバーコース</dt>
                  <dd>¥50,000</dd>
                </dl>
                <dl>
                  <dt>アドバンスドオープンウォーターコース</dt>
                  <dd>¥60,000</dd>
                </dl>
                <dl>
                  <dt>レスキュー＋EFRコース</dt>
                  <dd>¥70,000</dd>
                </dl>
              </div>

            </div>
            <!-- 2個目 -->
            <div class="price__content">
              <div class="price__subtitle">体験ダイビング</div>

              <!-- 説明リスト -->
              <div class="price__list">
                <dl>
                  <dt>ビーチ体験ダイビング(半日)</dt>
                  <dd>¥7,000</dd>
                </dl>
                <dl>
                  <dt>ビーチ体験ダイビング(1日)</dt>
                  <dd>¥14,000</dd>
                </dl>
                <dl>
                  <dt>ボート体験ダイビング(半日)</dt>
                  <dd>¥18,000</dd>
                </dl>
                <dl>
                  <dt>ボート体験ダイビング(1日)</dt>
                  <dd>¥18,000</dd>
                </dl>
              </div>

            </div>
            <!-- 3個目 -->
            <div class="price__content">
              <div class="price__subtitle">ファンダイビング</div>

              <!-- 説明リスト -->
              <div class="price__list">
                <dl>
                  <dt>ビーチダイビング(2ダイブ)</dt>
                  <dd>¥14,000</dd>
                </dl>
                <dl>
                  <dt>ボートダイビング(2ダイブ)</dt>
                  <dd>¥18,000</dd>
                </dl>
                <dl>
                  <dt>スペシャルダイビング(2ダイブ)</dt>
                  <dd>¥24,000</dd>
                </dl>
                <dl>
                  <dt>ナイトダイビング(1ダイブ)</dt>
                  <dd>¥10,000</dd>
                </dl>
              </div>
            </div>
            <!-- 4個目 -->
            <div class="price__content">
              <div class="price__subtitle">スペシャルダイビング</div>

              <!-- 説明リスト -->
              <div class="price__list">
                <dl>
                  <dt>貸切ダイビング(2ダイブ)</dt>
                  <dd>¥24,000</dd>
                </dl>
                <dl>
                  <dt>1日ダイビング(3ダイブ)</dt>
                  <dd>¥32,000</dd>
                </dl>
              </div>
            </div>
          </div>
        </div>
        <!-- ボタン -->
        <div class="price__button">
          <a href="./price.html" class="button">
            <span>View more</span>
          </a>
        </div>
        <div class="price__illust"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-green2.png" alt="魚の群れのイラスト"></div>
      </div>
    </section>

    <?php get_footer(); ?>
<?php get_header(); ?>

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
$terms = esc_url(home_url('/terms-of-service/'));
$contact = esc_url(home_url('/contact/'));
?>



<main>
  <!-- メインビュー -->
  <div class="mv">
    <div class="mv__inner">
      <div class="mv__images">
        <!-- Swiper -->
        <div class="swiper js-mv-swiper">
          <div class="swiper-wrapper">
            <?php if (have_posts()) :
              while (have_posts()) : the_post(); ?>
                <div class="swiper-slide">
                  <picture>
                    <source media="(max-width: 767px)" srcset="<?php esc_url(the_field('mv-sp_1')); ?>">
                    <source media="(min-width: 768px)" srcset="<?php esc_url(the_field('mv-pc_1')); ?>">
                    <img src="<?php esc_url(the_field('mv-pc_1')); ?>" alt="">
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source media="(max-width: 767px)" srcset="<?php esc_url(the_field('mv-sp_2')); ?>">
                    <source media="(min-width: 768px)" srcset="<?php esc_url(the_field('mv-pc_2')); ?>">
                    <img src="<?php esc_url(the_field('mv-pc_2')); ?>" alt="">
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source media="(max-width: 767px)" srcset="<?php esc_url(the_field('mv-sp_3')); ?>">
                    <source media="(min-width: 768px)" srcset="<?php esc_url(the_field('mv-pc_3')); ?>">
                    <img src="<?php esc_url(the_field('mv-pc_3')); ?>" alt="">
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source media="(max-width: 767px)" srcset="<?php esc_url(the_field('mv-sp_4')); ?>">
                    <source media="(min-width: 768px)" srcset="<?php esc_url(the_field('mv-pc_4')); ?>">
                    <img src="<?php esc_url(the_field('mv-pc_5')); ?>" alt="">
                  </picture>
                </div>
            <?php endwhile;
            endif; ?>

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
  <?php
  $news_query = new WP_Query(
    array(
      'post_type'      => 'campaign',
      'posts_per_page' => -1,
    )
  );
  ?>

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
            <?php if ($news_query->have_posts()) : ?>
              <?php while ($news_query->have_posts()) : ?>
                <?php $news_query->the_post(); ?>

                <div class="swiper-slide">
                  <div class="campaign__card campaign-card">
                    <div class="campaign-card__image">
                      <?php if (get_the_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="海中の画像">
                      <?php endif; ?>
                    </div>
                    <div class="campaign-card__body">
                      <div class="campaign-card__tag">ライセンス講習</div>
                      <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                      <span class="campaign-card__bar"></span>
                      <div class="campaign-card__contents">
                        <p class="campaign-card__contents-title">全部コミコミ(お一人様)</p>
                        <div class="campaign-card__contents-content">
                          <?php if (get_field('normal-price')) : ?>
                            <p>¥<?php the_field('normal-price') ?><span></span></p>
                          <?php endif; ?>
                          <?php if (get_field('campaign-price')) : ?>
                            <p>¥<?php the_field('campaign-price') ?></p>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>


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
        <a href="<?php echo $campaign; ?>" class="button">
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
              <a href="<?php echo $about; ?>" class="button">
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
              <a href="<?php echo $info; ?>" class="button">
                <span>View more</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Blog -->
  <?php
  $posts_query = new WP_Query(
    array(
      'post_type'      => 'post',
      'posts_per_page' => 3,
    )
  );
  ?>

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
        <?php if ($posts_query->have_posts()) : ?>
          <?php while ($posts_query->have_posts()) : ?>
            <?php $posts_query->the_post(); ?>

            <a href="<?php the_permalink(); ?>" class="blog-cards__card blog-card blog-card--sub">
              <div class="blog-card__inner">
                <div class="blog-card__image blog-card__image-sub">
                  <!-- <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog1.jpg" alt="珊瑚の画像"> -->
                  <?php if (get_the_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="画像がありません">
                  <?php endif; ?>
                </div>
                <div class="blog-card__text-block">
                  <time datetime="<?php the_time('c'); ?>" class="blog-card__date"><?php the_time('Y/m/d'); ?></time>
                  <h2 class="blog-card__title"><?php the_title(); ?></h2>
                  <span class="blog-card__bar"></span>
                  <p class="blog-card__text"><?php the_excerpt(); ?>
                  </p>
                </div>
              </div>
            </a>

          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

      </div>

      <!-- ボタン -->
      <div class="blog__button">
        <a href="<?php echo $blog; ?>" class="button">
          <span>View more</span>
        </a>
      </div>
      <div class="blog__illust"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-white.png" alt="魚
            のイラスト"></div>
    </div>
  </section>

  <!-- Voice -->
  <?php
  $voice_query = new WP_Query(
    array(
      'post_type'      => 'voice',
      'posts_per_page' => 2,
    )
  );
  ?>
  <section class="voice top-voice">
    <div class="voice__inner inner">
      <!-- セクションタイトル -->
      <div class="voice__title section-title">
        <h2 class="section-title__english">voice</h2>
        <div class="section-title__japanese">お客様の声</div>
      </div>
      <div class="voice__cards voice-cards">
        <!-- カード1個目 -->
        <?php if ($voice_query->have_posts()) : ?>
          <?php while ($voice_query->have_posts()) : ?>
            <?php $voice_query->the_post(); ?>
            <div class="voice-cards__card voice-card">
              <div class="voice-card__inner">
                <div class="voice-card__flex">
                  <div class="voice-card__title-block">
                    <div class="voice-card__subtitle">
                      <p><?php the_field('demographic') ?></p>
                      <?php
                      $voice_category = get_the_terms(get_the_ID(), 'voice_category'); // カスタム投稿のカテゴリーを取得
                      if ($voice_category && !is_wp_error($voice_category)) {
                        $cat_name = $voice_category[0]->name; // 最初のカテゴリーの名前を取得
                      }
                      ?>
                      <span><?php echo $cat_name ?></span>
                    </div>
                    <div class="voice-card__title"><?php the_title(); ?></div>
                  </div>
                  <div class="voice-card__image">
                    <?php if (get_the_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
                    <?php endif; ?>
                  </div>
                </div>
                <div class="voice-card__text-block">
                  <p class="voice-card__text"><?php the_content(); ?></p>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <!-- ボタン -->
      <div class="voice__button">
        <a href="<?php echo $voice; ?>" class="button">
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
              <?php
              if (have_posts()) :
                while (have_posts()) : the_post(); ?>

                  <?php
                  $page_id = get_page_by_path('price');
                  $page_id = $page_id->ID;
                  ?>

                  <?php
                  $licenses = SCF::get('license-group', $page_id); // 繰り返しフィールドのデータを取得
                  if (!empty($licenses)) {
                    foreach ($licenses as $license) {
                      $menu = esc_html($license['license-menu']); // フィールド 'license-menu' の値を取得
                      $price_item = esc_html($license['license-price']); // フィールド 'trial-price' の値を取得
                  ?>

                      <dl>
                        <dt data-field="license-menu"><?php echo nl2br($menu); ?></dt>
                        <dd data-field="license-price"><?php echo $price_item; ?></dd>
                      </dl>

                  <?php
                    }
                  }
                  ?>

              <?php
                endwhile;
              endif;
              ?>

            </div>
          </div>
          <!-- 2個目 -->
          <div class="price__content">
            <div class="price__subtitle">体験ダイビング</div>

            <!-- 説明リスト -->
            <div class="price__list">
              <?php
              if (have_posts()) :
                while (have_posts()) : the_post(); ?>

                  <?php
                  $page_id = get_page_by_path('price');
                  $page_id = $page_id->ID;
                  ?>
                  <?php
                  $trials = SCF::get('trial-group', $page_id); // 繰り返しフィールドのデータを取得
                  if (!empty($trials)) {
                    foreach ($trials as $trial) {
                      $menu = esc_html($trial['trial-menu']); // フィールド 'trial-menu' の値を取得
                      $price_item = esc_html($trial['trial-price']); // フィールド 'trial-price' の値を取得
                  ?>
                      <dl>
                        <dt data-field="trial-menu"><?php echo nl2br($menu); ?></dt>
                        <dd data-field="trial-menu"><?php echo $price_item; ?></dd>
                      </dl>
                  <?php
                    }
                  }
                  ?>

              <?php
                endwhile;
              endif;
              ?>
            </div>
          </div>
          <!-- 3個目 -->
          <div class="price__content">
            <div class="price__subtitle">ファンダイビング</div>

            <!-- 説明リスト -->
            <div class="price__list">
              <?php
              if (have_posts()) :
                while (have_posts()) : the_post(); ?>

                  <?php
                  $page_id = get_page_by_path('price');
                  $page_id = $page_id->ID;
                  ?>
                  <?php
                  $funs = SCF::get('fun-group', $page_id); // 繰り返しフィールドのデータを取得
                  if (!empty($funs)) {
                    foreach ($funs as $fun) {
                      $menu = esc_html($fun['fun-menu']); // フィールド 'fun-menu' の値を取得
                      $price_item = esc_html($fun['fun-price']); // フィールド 'fun-price' の値を取得
                  ?>
                      <dl>
                        <dt data-field="fun-menu"><?php echo nl2br($menu); ?></dt>
                        <dd data-field="fun-menu"><?php echo $price_item; ?></dd>
                      </dl>
                  <?php
                    }
                  }
                  ?>

              <?php
                endwhile;
              endif;
              ?>
            </div>
          </div>
          <!-- 4個目 -->
          <div class="price__content">
            <div class="price__subtitle">スペシャルダイビング</div>

            <!-- 説明リスト -->
            <div class="price__list">
              <?php
              if (have_posts()) :
                while (have_posts()) : the_post(); ?>

                  <?php
                  $page_id = get_page_by_path('price');
                  $page_id = $page_id->ID;
                  ?>
                  <?php
                  $specials = SCF::get('special-group', $page_id); // 繰り返しフィールドのデータを取得
                  if (!empty($specials)) {
                    foreach ($specials as $special) {
                      $menu = esc_html($special['special-menu']); // フィールド 'special-menu' の値を取得
                      $price_item = esc_html($special['special-price']); // フィールド 'special-price' の値を取得
                  ?>
                      <dl>
                        <dt data-field="special-menu"><?php echo nl2br($menu); ?></dt>
                        <dd data-field="special-menu"><?php echo $price_item; ?></dd>
                      </dl>
                  <?php
                    }
                  }
                  ?>

              <?php
                endwhile;
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
      <!-- ボタン -->
      <div class="price__button">
        <a href="<?php echo $price; ?>" class="button">
          <span>View more</span>
        </a>
      </div>
      <div class="price__illust"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-green2.png" alt="魚の群れのイラスト"></div>
    </div>
  </section>

  <?php get_footer(); ?>
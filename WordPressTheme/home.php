<?php get_header(); ?>

<main>
  <!-- 下層メインビュー -->
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv-sp.jpg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv-pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv-pc.jpg" alt="ダイビングの写真">
        </picture>
      </div>
      <!-- セクションタイトル -->
      <div class="sub-mv__title section-title">
        <h1 class="section-title__english section-title__english--white section-title__english--sub">blog</h1>
      </div>
    </div>
  </div>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- Blog -->
  <section class="sub-blog lower-blog">
    <div class="sub-blog__inner inner">

      <!-- グリッドレイアウト -->
      <div class="sub-blog__contents">
        <!-- メインコンテンツ -->


        <section class="sub-blog__main-content">
          <div class="sub-blog__cards blog-cards blog-cards--sub">
            <!-- ループ開始 -->

            <?php if (have_posts()) :
              while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="blog-cards__card blog-card blog-card--sub">
                  <div class="blog-card__inner">
                    <div class="blog-card__image blog-card__image-sub">
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
            <?php endwhile;
            endif; ?>
            <!-- ループ終了 -->


          </div>

          <!-- ページナビ -->

          <div class="sub-blog__page-navi page-navi">
            <?php custom_page_navi(); ?>
          </div>

        </section>




        <aside class="sub-blog__sub-content">

          <!-- 人気記事 -->
          <?php
          $popular_query = new WP_Query(
            array(
              // 'post_type'      => 'post',
              // 'posts_per_page' => 3,
              'meta_key' => 'cf_popular_posts',
              'orderby' => 'meta_value_num',
              'order' => 'DESC',
              'showposts' => 3,
            )
          );
          ?>
          <section class="sub-blog__popular">
            <h2 class="sub-blog__popular-title sub-title"><span></span>人気記事</h2>
            <div class="sub-blog__popular-cards popular-cards">

              <?php if ($popular_query->have_posts()) : ?>
                <?php while ($popular_query->have_posts()) : ?>
                  <?php $popular_query->the_post(); ?>

                  <a href="<?php the_permalink(); ?>" class="popular-cards__card popular-card">
                    <div class="popular-card__img">
                      <?php if (get_the_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
                      <?php else : ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="画像がありません">
                      <?php endif; ?>
                    </div>
                    <div class="popular-card__text-block">
                      <time datetime="<?php the_time('c'); ?>" class="popular-card__date"><?php the_time('Y/m/d'); ?></time>
                      <h3 class="popular-card__title"><?php the_title(); ?></h3>
                    </div>
                  </a>

                <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>

            </div>
          </section>

          <!-- 口コミ -->
          <?php
          $voice_query = new WP_Query(
            array(
              'post_type'      => 'voice',
              'posts_per_page' =>  1, // 1つの投稿を取得
            )
          );
          ?>
          <section class="sub-blog__voice">
            <h2 class="sub-blog__voice-title sub-title"><span></span>口コミ</h2>
            <div class="sub-blog__voice-cards sub-voice-cards">
              <?php if ($voice_query->have_posts()) : ?>
                <?php $count = 0; ?>
                <?php while ($voice_query->have_posts()) : ?>
                  <?php $voice_query->the_post(); ?>
                  <?php $count++; ?>
                  <?php if ($count == 1) : // 1番目の投稿を表示 
                  ?>
                    <a href="<?php the_permalink(); ?>" class="sub-voice-cards__card sub-voice-card">
                      <div class="sub-voice-card__img">
                        <?php if (get_the_post_thumbnail()) : ?>
                          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="女性の画像">
                        <?php endif; ?>
                      </div>
                      <div class="sub-voice-card__text-block">
                        <p class="sub-voice-card__age"><?php the_field('demographic') ?></p>
                        <h3 class="sub-voice-card__title"><?php the_title(); ?></h3>
                      </div>
                      <div class="sub-blog__voice-button">
                        <a href="<?php echo get_theme_file_uri(); ?>/voice.html" class="button">
                          <span>View more</span>
                        </a>
                      </div>
                    </a>
                  <?php endif; ?>
                <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>
          </section>


          <!-- キャンペーン -->
          <?php
          $campaign_query = new WP_Query(
            array(
              'post_type'      => 'campaign',
              'posts_per_page' => 2,
            )
          );
          ?>
          <section class="sub-blog__campaign">
            <h2 class="sub-blog__campaign-title sub-title"><span></span>キャンペーン</h2>
            <div class="sub-blog__campaign-cards campaign-cards">

              <?php if ($campaign_query->have_posts()) : ?>
                <?php $count = 0; ?>
                <?php while ($campaign_query->have_posts()) : ?>
                  <?php $campaign_query->the_post(); ?>
                  <?php $count++; ?>
                  <?php if ($count == 1 || $count == 2) : // 1番目と2番目の投稿を表示 
                  ?>

                    <a href="<?php the_permalink(); ?>" class="sub-blog__campaign-card campaign-card">
                      <div class="campaign-card__image campaign-card__image--sub">
                        <?php if (get_the_post_thumbnail()) : ?>
                          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
                        <?php endif; ?>
                      </div>
                      <div class="campaign-card__body campaign-card__body--sub">
                        <h2 class="campaign-card__title campaign-card__title--sub"><?php the_title(); ?></h2>
                        <span class="campaign-card__bar"></span>
                        <div class="campaign-card__contents campaign-card__contents--sub">
                          <p class="campaign-card__contents-title campaign-card__contents-title--sub">全部コミコミ(お一人様)</p>
                          <div class="campaign-card__contents-content campaign-card__contents-content--sub">
                            <?php if (get_field('normal-price')) : ?>
                              <p>¥<?php the_field('normal-price'); ?><span></span></p>
                            <?php endif; ?>
                            <?php if (get_field('campaign-price')) : ?>
                              <p>¥<?php the_field('campaign-price'); ?></p>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    </a>
                  <?php endif; ?>
                <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>

            </div>
            <div class="sub-blog__campaign-button">
              <a href="./campaign.html" class="button">
                <span>View more</span>
              </a>
            </div>
          </section>

          <!-- アーカイブ -->
          <section class="sub-blog__archive">
            <h2 class="sub-blog__archive-title sub-title"><span></span>アーカイブ</h2>
            <ul class="sub-blog__archive-lists">
              <?php
              // 年ごとに投稿がある年のリストを取得する
              $years = get_years_with_posts();

              // 各年ごとにループ処理を行う
              foreach ($years as $year) {
              ?>
                <li class="sub-blog__archive-list js-archive-accordion"><span></span><?php echo $year; ?></li>
                <ul class="sub-blog__archive-months">
                  <?php
                  // 各年の12ヶ月分についてループ処理を行う
                  for ($month = 12; $month >= 1; $month--) {
                    // 特定の年と月に投稿が存在するかを確認するクエリを作成
                    $args = array(
                      'year' => $year,
                      'monthnum' => $month,
                      'post_type' => 'post',
                      'post_status' => 'publish',
                    );
                    $query = new WP_Query($args);
                    // 投稿が存在する場合のみリンクを生成する
                    if ($query->have_posts()) {
                      $month_link = get_month_link($year, $month);
                  ?>
                      <li class="sub-blog__archive-month">
                        <a href="<?php echo esc_url($month_link); ?>"><?php echo date_i18n('n月', mktime(0, 0, 0, $month, 1, $year)); ?><span></span></a>
                      </li>
                  <?php
                    }
                    // クエリをリセットする
                    wp_reset_postdata();
                  }
                  ?>
                </ul>
              <?php } ?>
            </ul>
          </section>
        </aside>

      </div>
    </div>
  </section>


  <?php get_footer(); ?>
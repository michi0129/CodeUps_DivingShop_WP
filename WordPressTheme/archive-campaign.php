<?php get_header(); ?>

<main>
  <!-- 下層メインビュー -->
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-mv-sp.jpg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-mv-pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-mv-pc.jpg" alt="2匹の魚の写真">
        </picture>
      </div>
      <!-- セクションタイトル -->
      <div class="sub-mv__title section-title">
        <h1 class="section-title__english section-title__english--white section-title__english--sub">campaign</h1>
      </div>
    </div>
  </div>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- キャンペーン -->
  <section class="sub-campaign lower-campaign">
    <div class="sub-campaign__inner inner">
      <!-- タブ -->
      <ul class="sub-campaign__tabs tabs">
        <li class="tabs__tab active"><a href="<?php echo (esc_url(home_url('/campaign/'))) ?>">ALL</a></li>
        <li class="tabs__tab"><a href="<?php echo get_term_link('license', 'campaign_category'); ?>">ライセンス講習</a></li>
        <li class="tabs__tab"><a href="<?php echo get_term_link('fun', 'campaign_category'); ?>">ファンダイビング</a></li>
        <li class="tabs__tab"><a href="<?php echo get_term_link('trial', 'campaign_category'); ?>">体験ダイビング</a></li>

      </ul>

      <!-- コンテンツ -->
      <div class="sub-campaign__contents js-tab-content is-active">
        <div class="sub-campaign__cards">

          <?php
          // クエリパラメータからカテゴリーを取得
          $category = isset($_GET['category']) ? $_GET['category'] : 'all';

          // クエリパラメータからページ番号を取得
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

          $args = array(
            'post_type' => 'campaign', // カスタム投稿タイプを指定
            'posts_per_page' => 4, // 1ページあたりの表示件数を4件に設定
            'paged' => $paged, // 現在のページ番号
          );

          // カテゴリーが 'all' でない場合は、特定のカテゴリーに関連する投稿のみを取得
          if ($category !== 'all') {
            $args['tax_query'] = array(
              array(
                'taxonomy' => 'campaign_category', // カスタムタクソノミーを指定
                'field'    => 'slug', // フィールド名、'name' か 'slug'
                'terms'    => $category, //フィルタリングしたいカテゴリー名またはスラッグ
              ),
            );
          }

          $campaign_query = new WP_Query($args);

          if ($campaign_query->have_posts()) :
            while ($campaign_query->have_posts()) : $campaign_query->the_post();
          ?>
              <div class="sub-campaign__card campaign-card">
                <div class="campaign-card__image">
                  <?php if (get_the_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="海中の画像">
                  <?php endif; ?>
                </div>
                <div class="campaign-card__body campaign-card__body--campaign">
                  <?php
                  $campaign_cat = get_the_terms(get_the_ID(), 'campaign_category'); // カスタム投稿のカテゴリーを取得
                  if ($campaign_cat && !is_wp_error($campaign_cat)) {
                    $cat_name = $campaign_cat[0]->name; // 最初のカテゴリーの名前を取得
                  }
                  ?>
                  <div class="campaign-card__tag"><?php echo $cat_name; ?></div>
                  <h2 class="campaign-card__title campaign-card__title--campaign"><?php the_title(); ?></h2>
                  <span class="campaign-card__bar campaign-card__bar--campaign"></span>
                  <div class="campaign-card__contents campaign-card__contents--campaign">
                    <p class="campaign-card__contents-title campaign-card__contents-title--campaign">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__contents-content campaign-card__contents-content--campaign">
                      <?php if (get_field('normal-price')) : ?>
                        <p>¥<?php the_field('normal-price'); ?><span></span></p>
                      <?php endif; ?>
                      <?php if (get_field('campaign-price')) : ?>
                        <p>¥<?php the_field('campaign-price'); ?></p>
                      <?php endif; ?>
                    </div>
                  </div>
                  <p class="campaign-card__contents-description campaign-card__contents-description--campaign">
                    <?php the_content(); ?>
                  </p>
                  <p class="campaign-card__contents-date">2023/6/1-9/30</p>
                  <p class="campaign-card__caption">ご予約・お問い合わせはコチラ</p>
                  <div class="campaign-card__button">
                    <a href="<?php echo (esc_url(home_url('/contact/'))); ?>" class="button">
                      <span>contact us</span>
                    </a>
                  </div>
                </div>
              </div>
          <?php
            endwhile;
          endif;

          // ループ後、リセット
          wp_reset_postdata();
          ?>

        </div>
      </div>

      <!-- ページナビ -->
      <div class="sub-campaign__page-navi page-navi">
        <?php custom_page_navi($campaign_query); ?>
      </div>


    </div>


  </section>


  <?php get_footer(); ?>
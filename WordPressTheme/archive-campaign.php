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

      <?php
      // 現在のクエリオブジェクトを取得
      $term = get_queried_object();
      $taxonomy = 'campaign_category';

      // オブジェクトの詳細を確認
      if ($term && isset($term->taxonomy) && $term->taxonomy === $taxonomy) {
        $current_term_slug = $term->slug;
      } else {
        // デフォルトのスラッグを設定（例：すべての投稿を表示するためのデフォルトスラッグ）
        $current_term_slug = '';
      }

      // 全てのタームを取得
      $terms = get_terms(array(
        'taxonomy' => $taxonomy,
        'hide_empty' => false,
      ));

      // メインループのクエリを作成
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'campaign',
        'posts_per_page' => 4,
        'paged' => $paged,
        'tax_query' => array(),
      );

      // タクソノミークエリを追加
      if ($current_term_slug) {
        $args['tax_query'][] = array(
          'taxonomy' => $taxonomy,
          'field' => 'slug',
          'terms' => $current_term_slug,
        );
      }

      $query = new WP_Query($args);
      ?>

      <!-- タブ -->
      <ul class="sub-campaign__tabs tabs">
        <li class="tabs__tab"><a href="<?php echo esc_url(home_url('/campaign/')); ?>">ALL</a></li>
        <?php foreach ($terms as $term) : ?>
          <li class="tabs__tab <?php echo $term->slug === $current_term_slug ? 'active' : ''; ?>">
            <a href="<?php echo get_term_link($term); ?>">
              <?php echo $term->name; ?>
            </a>
          </li>
        <?php endforeach; ?>

      </ul>

      <!-- コンテンツ -->
      <div class="sub-campaign__contents js-tab-content is-active">
        <div class="sub-campaign__cards">

          <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>

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
                      <?php if (get_field('normal-amount')) : ?>
                        <p>¥<?php the_field('normal-amount'); ?><span></span></p>
                      <?php endif; ?>
                      <?php if (get_field('campaign-amount')) : ?>
                        <p>¥<?php the_field('campaign-amount'); ?></p>
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

            <?php endwhile;
          else : ?>
            <p>準備中です</p>
          <?php endif; ?>

        </div>
      </div>

      <!-- ページナビ -->
      <div class="sub-campaign__page-navi page-navi">
        <?php wp_pagenavi(); ?>
      </div>


    </div>


  </section>


  <?php get_footer(); ?>
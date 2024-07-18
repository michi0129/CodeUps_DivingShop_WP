<?php get_header(); ?>

<main>
  <!-- 下層メインビュー -->
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-mv-sp.jpg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-mv-pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-mv-pc.jpg" alt="ダイビング上空からの写真">
        </picture>
      </div>
      <!-- セクションタイトル -->
      <div class="sub-mv__title section-title">
        <h1 class="section-title__english section-title__english--white section-title__english--sub">voice</h1>
      </div>
    </div>
  </div>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>


  <!-- Voice -->
  <section class="sub-voice lower-voice">
    <div class="sub-voice__inner inner">

      <?php
      // 現在のクエリオブジェクトを取得
      $term = get_queried_object();
      $taxonomy = 'voice_category';

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
        'post_type' => 'voice',
        'posts_per_page' => 6,
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

      <ul class="sub-voice__tabs tabs">
        <li class="tabs__tab"><a href="<?php echo (esc_url(home_url('/voice/'))) ?>">ALL</a></li>
        <?php foreach ($terms as $term) : ?>
          <li class="tabs__tab <?php echo $term->slug === $current_term_slug ? 'active' : ''; ?>">
            <a href="<?php echo get_term_link($term); ?>">
              <?php echo $term->name; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>



      <!-- タブ　ALL -->
      <div class="sub-voice__contents js-tab-content is-active">
        <!-- カード -->
        <?php if (have_posts()) :
          while (have_posts()) : the_post(); ?>

            <div class="sub-voice__content voice-card">
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
                    <h2 class="voice-card__title"><?php the_title(); ?></h2>
                  </div>
                  <div class="voice-card__image">
                    <?php if (get_the_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="女性の画像">
                    <?php endif; ?>
                  </div>
                </div>
                <div class="voice-card__text-block">
                  <p class="voice-card__text"><?php the_content(); ?></p>
                </div>
              </div>
            </div>

        <?php
          endwhile;
        endif;
        ?>

      </div>

      <!-- ページナビ -->
      <div class="sub-voice__page-navi page-navi">
        <?php wp_pagenavi(); ?>
      </div>
    </div>


  </section>


  <?php get_footer(); ?>
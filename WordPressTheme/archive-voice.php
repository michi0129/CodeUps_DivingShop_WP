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
      <ul class="sub-voice__tabs tabs">
        <li class="tabs__tab"><a href="?category=all">ALL</a></li>
        <li class="tabs__tab"><a href="?category=license">ライセンス講習</a></li>
        <li class="tabs__tab"><a href="?category=fun">ファンダイビング</a></li>
        <li class="tabs__tab"><a href="?category=trial">体験ダイビング</a></li>
      </ul>



      <!-- タブ　ALL -->
      <div class="sub-voice__contents js-tab-content is-active">
        <!-- カード -->
        <?php
        // クエリパラメータからカテゴリーを取得
        $category = isset($_GET['category']) ? $_GET['category'] : 'all';

        // クエリパラメータからページ番号を取得
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
          'post_type' => 'voice', // カスタム投稿タイプを指定
          'posts_per_page' => 6, // すべての投稿を取得
          'paged' => $paged, // 現在のページ番号
        );

        // カテゴリーが 'all' でない場合は、特定のカテゴリーに関連する投稿のみを取得
        if ($category !== 'all') {
          $args['tax_query'] = array(
            array(
              'taxonomy' => 'voice_category', // カスタムタクソノミーを指定
              'field'    => 'slug',
              'terms'    => $category,
            ),
          );
        }

        $voice_query = new WP_Query($args);

        if ($voice_query->have_posts()) :
          while ($voice_query->have_posts()) : $voice_query->the_post();
        ?>

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

        // ループ後、リセット
        wp_reset_postdata();
        ?>

      </div>

      <!-- ページナビ -->
      <div class="sub-voice__page-navi page-navi">
        <?php custom_page_navi($voice_query); ?>
      </div>
    </div>


  </section>


  <?php get_footer(); ?>
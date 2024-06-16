<?php get_header(); ?>

<main>
  <!-- 下層メインビュー -->
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv-sp.jpg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv-pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv-pc.jpg" alt="浜辺の写真">
        </picture>
      </div>
      <!-- セクションタイトル -->
      <div class="sub-mv__title section-title">
        <h1 class="section-title__english section-title__english--white section-title__english--sub">FAQ</h1>
      </div>
    </div>
  </div>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- FAQ -->
  <section class="sub-faq lower-faq">
    <div class="sub-faq__inner inner">

      <!-- アコーディオン -->
      <ul class="sub-faq__accordion">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <?php
            $faqs = SCF::get('faq-group'); // 繰り返しフィールドのデータを取得
            if (!empty($faqs)) {
              foreach ($faqs as $faq) {
                $question = esc_html($faq['faq-question']); // フィールド 'faq-question' の値を取得
                $answer = esc_html($faq['faq-answer']); // フィールド 'faq-answer' の値を取得
            ?>
                <li class="sub-faq__list">
                  <div class="sub-faq__contents">

                    <h2 data-field="faq-question" class="sub-faq__title js-accordion"><?php echo nl2br($question); ?></h2>
                    <div data-field="faq-answer" class="sub-faq__text">
                      <p>
                        <?php echo $answer; ?>
                      </p>
                    </div>
                  </div>
                </li>
            <?php
              }
            }
            ?>
        <?php
          endwhile;
        endif;
        ?>

      </ul>
    </div>
  </section>


  <?php get_footer(); ?>
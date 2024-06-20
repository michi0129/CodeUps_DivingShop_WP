<?php get_header(); ?>

<main>
  <!-- 下層メインビュー -->
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/thanks-mv-sp.jpg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/thanks-mv-pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/thanks-mv-pc.jpg" alt="浜辺の写真">
        </picture>
      </div>
      <!-- セクションタイトル -->
      <div class="sub-mv__title section-title">
        <h1 class="section-title__english section-title__english--white section-title__english--sub">contact</h1>
      </div>
    </div>
  </div>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <div class="sub-form form lower-form">
    <div class="sub-form__inner inner">

      <?php echo do_shortcode('[contact-form-7 id="7c46d58" title="お問い合わせ"]'); ?>

    </div>
  </div>

</main>


<?php get_footer(); ?>
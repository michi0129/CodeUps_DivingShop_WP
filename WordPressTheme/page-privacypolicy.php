<?php get_header(); ?>

<main>
  <!-- 下層メインビュー -->
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-mv-sp.jpg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-mv-pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-mv-pc.jpg" alt="サンゴと熱帯魚の画像">
        </picture>
      </div>
      <!-- セクションタイトル -->
      <div class="sub-mv__title section-title">
        <h1 class="section-title__english section-title__english--white section-title__english--sub">privacy Policy
        </h1>
      </div>
    </div>
  </div>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- Privacy Policy -->
  <section class="privacy lower-privacy">
    <div class="privacy__inner inner">
      <h2 class="privacy__title">プライバシーポリシー</h2>
      <div class="privacy__contents">
        <?php if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </section>


  <?php get_footer(); ?>
<?php get_header(); ?>

<main>
  <!-- 下層メインビュー -->
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-mv-sp.jpg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-mv-pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-mv-pc.jpg" alt="2匹の魚の写真">
        </picture>
      </div>
      <!-- セクションタイトル -->
      <div class="sub-mv__title section-title">
        <h1 class="section-title__english section-title__english--white section-title__english--sub">about us</h1>
      </div>
    </div>
  </div>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- About -->
  <div class="sub-about lower-about">
    <div class="sub-about__inner inner">

      <div class="sub-about__contents">
        <div class="sub-about__images">
          <div class="sub-about__images-left">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-left.jpg" alt="シーサーと屋根の画像">
          </div>
          <div class="sub-about__images-right">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-right.jpg" alt="海中の魚の画像">
          </div>
        </div>

        <div class="sub-about__flex">
          <div class="sub-about__catch">
            <p>Dive into<br>the Ocean</p>
          </div>
          <div class="sub-about__content">
            <p class="sub-about__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
        </div>


        <div class="sub-about__coral"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-green2.png" alt="イソギンチャクのイラスト"></div>
      </div>
    </div>
  </div>

  <!-- Gallery -->

  <section class="gallery lower-gallery">
    <div class="gallery__inner inner">
      <!-- セクションタイトル -->
      <div class="gallery__title section-title">
        <h2 class="section-title__english section-title__english--about">gallery</h2>
        <div class="section-title__japanese">フォト</div>
      </div>
      <div class="gallery__items">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php
            // 'gallery-group'という繰り返しフィールドの値を取得
            $gallery_items = SCF::get('gallery-group', get_the_ID());
            ?>

            <?php if (!empty($gallery_items) && is_array($gallery_items)) : ?>
              <?php foreach ($gallery_items as $gallery_item) : ?>
                <?php
                // 画像フィールド 'gallery-item' のIDを取得
                $image_id = $gallery_item['gallery-item'];

                if ($image_id) :
                  // 画像のURL、幅、高さを取得
                  $image_url = wp_get_attachment_image_src($image_id, 'full');

                  if ($image_url) :
                    // 画像のURLを取得
                    $image_src = esc_url($image_url[0]);
                ?>
                    <div class="gallery__item">
                      <a href="<?php echo $image_src; ?>" class="js-gallery" data-group="js-gallery-1">
                        <img src="<?php echo $image_src; ?>" alt="ギャラリー画像">
                      </a>
                    </div>
                  <?php endif; ?>
                <?php endif; ?>
              <?php endforeach; ?>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>


  <?php get_footer(); ?>
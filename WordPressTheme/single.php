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
    <div class="sub-blog__inner sub-blog__inner--page inner">


      <!-- グリッドレイアウト -->
      <div class="sub-blog__contents">
        <!-- メインコンテンツ -->

        <?php if (have_posts()) :
          while (have_posts()) : the_post(); ?>

            <section class="sub-blog__main-content">
              <article class="sub-blog__article blog-article">
                <time datetime="<?php the_time('c'); ?>" class="blog-article__date"><?php the_time('Y/m/d'); ?></time>
                <h2 class="blog-article__title"><?php the_title(); ?></h2>
                <div class="blog-article__contents">

                  <div class="blog-article__img">
                    <?php if (get_the_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="珊瑚礁の画像">
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="画像がありません">
                    <?php endif; ?>
                  </div>

                  <p class="blog-article__text">
                    <?php the_content(); ?>
                  </p>
                </div>
              </article>

              <!-- ページナビ -->
              <?php
              $prev = get_previous_post();
              $prev_url = get_permalink($prev->ID);
              $next = get_next_post();
              $next_url = get_permalink($next->ID);
              ?>

              <div class="sub-blog__page-navi sub-blog__page-navi--page page-navi page-navi--page">

                <?php if ($prev) : ?>
                  <a href="<?php echo esc_url($prev_url); ?>" class="page-navi__prev"><span></span></a>
                <?php endif; ?>

                <?php if ($next) : ?>
                  <a href="<?php echo esc_url($next_url); ?>" class="page-navi__next"><span></span></a>
                <?php endif; ?>

              </div>
            </section>

        <?php endwhile;
        endif; ?>

        <aside class="sub-blog__sub-content">

          <!-- 人気記事 -->
          <?php
          $news_query = new WP_Query(
            array(
              'post_type'      => 'post',
              'posts_per_page' => 3,
            )
          );
          ?>
          <section class="sub-blog__popular">
            <h2 class="sub-blog__popular-title sub-title"><span></span>人気記事</h2>
            <div class="sub-blog__popular-cards popular-cards">

              <?php if ($news_query->have_posts()) : ?>
                <?php while ($news_query->have_posts()) : ?>
                  <?php $news_query->the_post(); ?>

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
          $news_query = new WP_Query(
            array(
              'post_type'      => 'voice',
              'posts_per_page' => 1,
            )
          );
          ?>
          <section class="sub-blog__voice">
            <h2 class="sub-blog__voice-title sub-title"><span></span>口コミ</h2>
            <div class="sub-blog__voice-cards sub-voice-cards">


              <?php if ($news_query->have_posts()) : ?>
                <?php while ($news_query->have_posts()) : ?>
                  <?php $news_query->the_post(); ?>

                  <a href="#" class="sub-voice-cards__card sub-voice-card">
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

                    <?php endwhile; ?>
                  <?php endif; ?>
                  <?php wp_reset_postdata(); ?>

                    </div>
                  </a>
            </div>
          </section>

          <!-- キャンペーン -->
          <?php
          $news_query = new WP_Query(
            array(
              'post_type'      => 'campaign',
              'posts_per_page' => 2,
            )
          );
          ?>
          <section class="sub-blog__campaign">
            <h2 class="sub-blog__campaign-title sub-title"><span></span>キャンペーン</h2>
            <div class="sub-blog__campaign-cards campaign-cards">
              <?php if ($news_query->have_posts()) : ?>
                <?php while ($news_query->have_posts()) : ?>

                  <?php $news_query->the_post(); ?>
                  <a href="#" class="sub-blog__campaign-card campaign-card">
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
              <li class="sub-blog__archive-list js-archive-accordion"><span></span>2023</li>
              <ul class="sub-blog__archive-months">
                <li class="sub-blog__archive-month"><a href="#"><span></span>3月</a></li>
                <li class="sub-blog__archive-month"><a href="#"><span></span>2月</a></li>
                <li class="sub-blog__archive-month"><a href="#"><span></span>1月</a></li>
              </ul>

              <li class="sub-blog__archive-list js-archive-accordion"><span></span>2022</li>
              <ul class="sub-blog__archive-months">
                <li class="sub-blog__archive-month"><a href="#"><span></span>3月</a></li>
                <li class="sub-blog__archive-month"><a href="#"><span></span>2月</a></li>
                <li class="sub-blog__archive-month"><a href="#"><span></span>1月</a></li>
              </ul>
            </ul>
          </section>
        </aside>

      </div>
    </div>
  </section>


  <?php get_footer(); ?>
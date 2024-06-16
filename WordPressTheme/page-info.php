<?php get_header(); ?>

<main>
    <!-- 下層メインビュー -->
    <div class="sub-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__image">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-mv-sp.jpg">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-mv-pc.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-mv-pc.jpg" alt="ダイビングの写真">
          </picture>
        </div>
        <!-- セクションタイトル -->
        <div class="sub-mv__title section-title">
          <h1 class="section-title__english section-title__english--white section-title__english--sub">information</h1>
        </div>
      </div>
    </div>

    <!-- パンくずリスト -->
    <?php get_template_part('parts/breadcrumb') ?>

    <!-- Info -->
    <section class="sub-info lower-info">
      <div class="sub-info__inner inner">
          <div class="sub-info__tabs">
            <button id="tab01" class="sub-info__tab sub-info__tab-license js-tab-button is-active">ライセンス<br class="u-mobile">講習</button>
            <button id="tab02" class="sub-info__tab sub-info__tab-fun js-tab-button">ファン<br class="u-mobile">ダイビング</button>
            <button id="tab03" class="sub-info__tab sub-info__tab-trial js-tab-button">体験<br class="u-mobile">ダイビング</button>
          </div>

          <div class="sub-info__tab-content sub-info__tab-content-license js-tab-content is-active">
            <div class="sub-info__tab-content-description">
              <h2 class="sub-info__tab-content-title">ライセンス講習</h2>
              <p class="sub-info__tab-content-text">
                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
              </p>
            </div>
            <div class="sub-info__tab-content-img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-license.jpg" alt="魚の群れの画像">
            </div>
          </div>

          <div class="sub-info__tab-content sub-info__tab-content-fun js-tab-content">
            <div class="sub-info__tab-content-description">
              <h2 class="sub-info__tab-content-title">ファンダイビング</h2>
              <p class="sub-info__tab-content-text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
            </div>
            <div class="sub-info__tab-content-img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-fun.jpg" alt="魚の群れの画像">
            </div>
          </div>

          <div class="sub-info__tab-content sub-info__tab-content-trial js-tab-content" >
            <div class="sub-info__tab-content-description">
              <h2 class="sub-info__tab-content-title">体験ダイビング</h2>
              <p class="sub-info__tab-content-text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
            </div>
            <div class="sub-info__tab-content-img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-trial.jpg" alt="魚の群れの画像">
            </div>
          </div>

        </div>
    </section>


<?php get_footer(); ?>
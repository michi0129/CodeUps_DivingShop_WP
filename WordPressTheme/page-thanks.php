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

    <!-- Thanks -->
    <div class="sub-thanks lower-thanks">
      <div class="sub-thanks__inner inner">
        <div class="sub-thanks__contents">
          <p>お問い合わせ内容を送信完了しました。</p>
          <p class="sub-thanks__text">このたびは、お問い合わせ頂き<br class="sub-thanks__none">
            誠にありがとうございます。<br>
            お送り頂きました内容を確認の上、<br class="sub-thanks__none">
            3営業日以内に折り返しご連絡させて頂きます。<br>
            また、ご記入頂いたメールアドレスへ、<br class="sub-thanks__none">
            自動返信の確認メールをお送りしております。</p>
        </div>
      </div>
    </div>

  </main>


<?php get_footer(); ?>
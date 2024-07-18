<?php get_header(); ?>

<main>
  <!-- 下層メインビュー -->
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-mv-sp.jpg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-mv-pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-mv-pc.jpg" alt="水面からシュノーケルが出ている写真">
        </picture>
      </div>
      <!-- セクションタイトル -->
      <div class="sub-mv__title section-title">
        <h1 class="section-title__english section-title__english--white section-title__english--sub">price</h1>
      </div>
    </div>
  </div>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- Price -->
  <section class="sub-price lower-price">
    <div class="sub-price__inner inner">

      <div id="license" class="sub-price__contents">
        <!-- <h2 class="sub-price__title"><span>ライセンス講習</span></h2> -->
        <h2 class="sub-price__title"><span>ライセンス講習</span></h2>

        <table class="sub-price__table">
          <tbody>
            <?php
            $licenses = SCF::get('license-group'); // 繰り返しフィールドのデータを取得
            if (!empty($licenses)) :
              foreach ($licenses as $license) :
                $menu = esc_html($license['license-menu']); // フィールド 'license-menu' の値を取得
                $price = esc_html($license['license-price']); // フィールド 'license-price' の値を取得
            ?>
                <tr>
                  <th data-field="license-menu"><?php echo nl2br($menu); ?></th>
                  <td data-field="license-price"><?php echo $price; ?></td>
                </tr>
            <?php
              endforeach;
            endif;
            ?>
          </tbody>
        </table>
      </div>

      <div id="trial" class="sub-price__contents">
        <h2 class="sub-price__title sub-price__title--trial"><span>体験ダイビング</span></h2>
        <table class="sub-price__table">
          <?php
          $trials = SCF::get('trial-group'); // 繰り返しフィールドのデータを取得
          if (!empty($trials)) :
            foreach ($trials as $trial) :
              $menu = esc_html($trial['trial-menu']); // フィールド 'trial-menu' の値を取得
              $price = esc_html($trial['trial-price']); // フィールド 'trial-price' の値を取得
          ?>

              <tr>
                <th data-field="trial-menu"><?php echo nl2br($menu); ?></th>
                <td data-field="trial-menu"><?php echo $price; ?></td>
              </tr>
          <?php
            endforeach;
          endif;
          ?>

        </table>
      </div>

      <div id="fun" class="sub-price__contents">
        <h2 class="sub-price__title sub-price__title--fun"><span>ファンダイビング</span></h2>
        <table class="sub-price__table">
          <?php
          $funs = SCF::get('fun-group'); // 繰り返しフィールドのデータを取得
          if (!empty($funs)) :
            foreach ($funs as $fun) :
              $menu = esc_html($fun['fun-menu']); // フィールド 'fun-menu' の値を取得
              $price = esc_html($fun['fun-price']); // フィールド 'fun-price' の値を取得
          ?>

              <tr>
                <th data-field="fun-menu"><?php echo nl2br($menu); ?></th>
                <td data-field="fun-menu"><?php echo $price; ?></td>
              </tr>
          <?php
            endforeach;
          endif;
          ?>

        </table>
      </div>

      <div class="sub-price__contents">
        <h2 class="sub-price__title"><span>スペシャルダイビング</span></h2>
        <table class="sub-price__table">
          <?php
          $specials = SCF::get('special-group'); // 繰り返しフィールドのデータを取得
          if (!empty($specials)) :
            foreach ($specials as $special) :
              $menu = esc_html($special['special-menu']); // フィールド 'special-menu' の値を取得
              $price = esc_html($special['special-price']); // フィールド 'special-price' の値を取得
          ?>
              <tr>
                <th data-field="special-menu"><?php echo nl2br($menu); ?></th>
                <td data-field="special-menu"><?php echo $price; ?></td>

              </tr>
          <?php
            endforeach;
          endif;
          ?>

        </table>
      </div>


    </div>

  </section>


  <?php get_footer(); ?>
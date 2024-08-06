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

      <!-- ライセンス講習 -->
      <?php
      $licenses = SCF::get('license-group'); // 繰り返しフィールドのデータを取得
      $has_license = !empty($licenses) && is_array($licenses) && count(array_filter($licenses, fn ($license) => !empty($license['license-menu']) && !empty($license['license-price']))) > 0;

      if ($has_license) :
      ?>
        <div id="license" class="sub-price__contents">
          <h2 class="sub-price__title"><span>ライセンス講習</span></h2>

          <table class="sub-price__table">
            <tbody>
              <?php
              foreach ($licenses as $license) :
                $menu = esc_html($license['license-menu']); // フィールド 'license-menu' の値を取得
                $price = esc_html($license['license-price']); // フィールド 'license-price' の値を取得

                if (!empty($menu) && !empty($price)) : // データが空でないか確認
              ?>
                  <tr>
                    <th data-field="license-menu"><?php echo nl2br($menu); ?></th>
                    <td data-field="license-price"><?php echo $price; ?></td>
                  </tr>
                <?php endif; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>

      <!-- 体験ダイビング -->
      <?php
      $trials = SCF::get('trial-group'); // 繰り返しフィールドのデータを取得
      $has_trial = !empty($trials) && is_array($trials) && count(array_filter($trials, fn ($trial) => !empty($trial['trial-menu']) && !empty($trial['trial-price']))) > 0;

      if ($has_trial) :
      ?>
        <div id="trial" class="sub-price__contents">
          <h2 class="sub-price__title"><span>体験ダイビング</span></h2>

          <table class="sub-price__table">
            <tbody>
              <?php
              foreach ($trials as $trial) :
                $menu = esc_html($trial['trial-menu']); // フィールド 'trial-menu' の値を取得
                $price = esc_html($trial['trial-price']); // フィールド 'trial-price' の値を取得

                if (!empty($menu) && !empty($price)) : // データが空でないか確認
              ?>
                  <tr>
                    <th data-field="trial-menu"><?php echo nl2br($menu); ?></th>
                    <td data-field="trial-price"><?php echo $price; ?></td>
                  </tr>
                <?php endif; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>

      <!-- ファンダイビング -->
      <?php
      $funs = SCF::get('fun-group'); // 繰り返しフィールドのデータを取得
      $has_fun = !empty($funs) && is_array($funs) && count(array_filter($funs, fn ($fun) => !empty($fun['fun-menu']) && !empty($fun['fun-price']))) > 0;

      if ($has_fun) :
      ?>
        <div id="fun" class="sub-price__contents">
          <h2 class="sub-price__title"><span>ファンダイビング</span></h2>

          <table class="sub-price__table">
            <tbody>
              <?php
              foreach ($funs as $fun) :
                $menu = esc_html($fun['fun-menu']); // フィールド 'fun-menu' の値を取得
                $price = esc_html($fun['fun-price']); // フィールド 'fun-price' の値を取得

                if (!empty($menu) && !empty($price)) : // データが空でないか確認
              ?>
                  <tr>
                    <th data-field="fun-menu"><?php echo nl2br($menu); ?></th>
                    <td data-field="fun-price"><?php echo $price; ?></td>
                  </tr>
                <?php endif; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>

      <!-- スペシャルダイビング -->
      <?php
      $specials = SCF::get('special-group'); // 繰り返しフィールドのデータを取得
      $has_special = !empty($specials) && is_array($specials) && count(array_filter($specials, fn ($special) => !empty($special['special-menu']) && !empty($special['special-price']))) > 0;

      if ($has_special) :
      ?>
        <div id="special" class="sub-price__contents">
          <h2 class="sub-price__title"><span>スペシャルダイビング</span></h2>

          <table class="sub-price__table">
            <tbody>
              <?php
              foreach ($specials as $special) :
                $menu = esc_html($special['special-menu']); // フィールド 'special-menu' の値を取得
                $price = esc_html($special['special-price']); // フィールド 'special-price' の値を取得

                if (!empty($menu) && !empty($price)) : // データが空でないか確認
              ?>
                  <tr>
                    <th data-field="special-menu"><?php echo nl2br($menu); ?></th>
                    <td data-field="special-price"><?php echo $price; ?></td>
                  </tr>
                <?php endif; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>

    </div>
  </section>

  <?php get_footer(); ?>
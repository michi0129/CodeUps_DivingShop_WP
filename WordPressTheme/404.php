<?php get_header(); ?>

<main>

    <!-- 404error -->
    <section class="error lower-error">
        <div class="error__inner inner">
            <!-- パンくずリスト -->
            <?php get_template_part('parts/breadcrumb') ?>
            <h2 class="error__title">404</h2>
            <div class="error__contents">
                <p>申し訳ありません。<br>
                    お探しのページが見つかりません。</p>
                <!-- ボタン -->
                <div class="error__button">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="button button--white">
                        <span>Page TOP</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <?php get_footer(); ?>
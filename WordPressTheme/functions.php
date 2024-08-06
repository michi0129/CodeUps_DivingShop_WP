<?php

function enqueue_custom_scripts()
{
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts-preconnect-1', 'https://fonts.googleapis.com', array(), null);
    wp_enqueue_style('google-fonts-preconnect-2', 'https://fonts.gstatic.com', array(), null);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@300;400;500&display=swap', array(), null);

    // Enqueue CSS
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), null);
    wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'), array(), null);

    // Enqueue JavaScript
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), null, true);
    wp_enqueue_script('theme-script', get_theme_file_uri('/assets/js/script.js'), array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// アイキャッチ画像の設定
function my_setup()
{
    add_theme_support('post-thumbnails'); /* アイキャッチ */
    add_theme_support('automatic-feed-links'); /* RSSフィード */
    add_theme_support('title-tag'); /* タイトルタグ自動生成 */
    add_theme_support(
        'html5',
        array( /* HTML5のタグで出力 */
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}
add_action('after_setup_theme', 'my_setup');

// PageNaviの指定
// function custom_page_navi()
// {
//     global $wp_query;
//     // var_dump($wp_query); // クエリの内容を確認
//     $big = 999999999; // 必要なほど大きな整数

//     $pages = paginate_links(array(
//         'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
//         'format' => '?paged=%#%',
//         'current' => max(1, get_query_var('paged')),
//         'total' => $wp_query->max_num_pages,
//         'type' => 'array',
//         'before_page_number' => '',
//         'after_page_number' => '',
//         'prev_next' => false, // 次・前のリンクを生成しない
//     ));

//     if (is_array($pages)) {
//         $prev_link = get_previous_posts_page_link();
//         $next_link = get_next_posts_page_link();

//         echo '<div class="sub-blog__page-navi page-navi">';

//         if ($prev_link) {
//             echo '<a href="' . esc_url($prev_link) . '" class="page-navi__prev"><span></span></a>';
//         }

//         foreach ($pages as $page) {
//             echo $page;
//         }

//         if ($next_link) {
//             echo '<a href="' . esc_url($next_link) . '" class="page-navi__next"><span></span></a>';
//         }

//         echo '</div>';
//     }
// }

//アーカイブの表示件数変更
function change_posts_per_page($query)
{
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    // カスタム投稿タイプごとの表示件数を設定
    $custom_post_types = array(
        'voice' => 6,
        'campaign'  => 4
    );

    foreach ($custom_post_types as $post_type => $posts_per_page) {
        if ($query->is_post_type_archive($post_type)) {
            $query->set('posts_per_page', $posts_per_page);
            break;
        }
    }
}
add_action('pre_get_posts', 'change_posts_per_page');

//wpcf7 自動挿入されるpタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}

function remove_wysiwyg_for_specific_pages()
{
    // 管理画面かどうかを確認
    if (is_admin()) {
        global $pagenow;

        // 固定ページの編集画面であることを確認
        if ($pagenow == 'post.php' && isset($_GET['post'])) {
            $post_id = intval($_GET['post']);
            $post = get_post($post_id);

            // エディターを除外したいスラッグを定義
            $slugs_to_remove_editor = array('faq', 'top', 'contact', 'thanks', 'sitemap', 'info', 'blog', 'price', 'about'); // ここに除外したいスラッグを追加

            // 特定のスラッグの場合、エディターを削除
            if ($post->post_type == 'page' && in_array($post->post_name, $slugs_to_remove_editor)) {
                remove_post_type_support('page', 'editor');
            }
        }
    }
}
add_action('admin_init', 'remove_wysiwyg_for_specific_pages');

// 「投稿」ラベル変更
function change_post_menu_label()
{
    global $menu;
    global $submenu;
    $name = 'ブログ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name . '一覧';
    $submenu['edit.php'][10][0] = '新しい' . $name;
}
function change_post_object_label()
{
    global $wp_post_types;
    $name = 'ブログ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name . 'の新規追加';
    $labels->edit_item = $name . 'の編集';
    $labels->new_item = '新規' . $name;
    $labels->view_item = $name . 'を表示';
    $labels->search_items = $name . 'を検索';
    $labels->not_found = $name . 'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'change_post_object_label');
add_action('admin_menu', 'change_post_menu_label');

// WPCF7のドロップダウンメニューをカスタム投稿タイプのタイトルから取得して表示
function dynamic_field_values($tag, $unused)
{
    if ($tag['name'] != 'campaign-select')  // Contact Form 7内に記入するフィールド名（独自のフォームタグ名）
        return $tag;

    $args = array(
        'posts_per_page' => -1, // 全件取得（制限が必要な場合は数値を指定）
        'post_type'      => 'campaign', // カスタム投稿タイプ名（投稿タイプスラッグ）
        'orderby'        => 'title', // タイトルでソート
        'order'          => 'ASC', // 昇順
    );

    $custom_posts = get_posts($args);

    if (!$custom_posts)
        return $tag;

    // 最初の選択肢を追加
    $tag['raw_values'][] = 'キャンペーン内容を選択';
    $tag['values'][] = '';
    $tag['labels'][] = 'キャンペーン内容を選択';

    foreach ($custom_posts as $custom_post) {
        $tag['raw_values'][] = $custom_post->post_title;
        $tag['values'][] = $custom_post->post_title;
        $tag['labels'][] = $custom_post->post_title;
    }

    return $tag;
}

add_filter('wpcf7_form_tag', 'dynamic_field_values', 30, 2);

// ページの表示回数をカウント
function my_custom_popular_posts($post_id)
{
    $count_key = 'cf_popular_posts';
    $count = get_post_meta($post_id, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($post_id, $count_key);
        add_post_meta($post_id, $count_key, '0');
    } else {
        $count++;
        update_post_meta($post_id, $count_key, $count);
    }
}
function my_custom_track_posts($post_id)
{
    if (!is_single()) return;
    if (empty($post_id)) {
        global $post;
        $post_id = $post->ID;
    }
    my_custom_popular_posts($post_id);
}
add_action('wp_head', 'my_custom_track_posts');

// カスタムタクソノミーアーカイブページの表示件数を設定
function custom_posts_per_page($query)
{
    if (!is_admin() && $query->is_main_query()) {
        if (is_tax('campaign_category')) {
            $query->set('posts_per_page', 4); // campaign_category の表示件数を4件に設定
        } elseif (is_tax('voice_category')) {
            $query->set('posts_per_page', 6); // voice_category の表示件数を6件に設定
        }
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');

// 年ごとの投稿数を取得
function get_years_with_posts()
{
    global $wpdb;

    // SQLクエリを作成して実行する
    $query = "
        SELECT DISTINCT YEAR(post_date) AS year
        FROM $wpdb->posts
        WHERE post_type = 'post' AND post_status = 'publish'
        ORDER BY year DESC
    ";

    $results = $wpdb->get_results($query);

    // 結果があれば年の配列を返す
    if ($results) {
        $years = array();
        foreach ($results as $result) {
            $years[] = $result->year;
        }
        return $years;
    } else {
        return array();
    }
}

// アーカイブタイトルをカスタマイズ
function custom_archive_title($title)
{
    if (is_date()) {
        if (is_month()) {
            $title = get_the_date('Y年n月');
        } elseif (is_year()) {
            $title = get_the_date('Y年');
        } elseif (is_day()) {
            $title = get_the_date('Y年n月j日');
        }
    }
    return $title;
}
add_filter('get_the_archive_title', 'custom_archive_title');

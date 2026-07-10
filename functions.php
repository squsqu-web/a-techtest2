<?php
/*====================================
 * CSS読み込み
 *====================================*/
function mysass_temp_enqueue_styles()
{
  wp_enqueue_style(
    'mysass-temp-style',
    get_template_directory_uri() . '/assets/css/style.css',
    array(),
    '1.0.0'
  );

  // reserveページだけ flatpickr CSS
  if (is_page('reserve')) {
    wp_enqueue_style(
      'flatpickr-css',
      'https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css',
      array(),
      null
    );
  }

  // フロントページ限定で Slick CSS
  if (is_front_page()) {
    wp_enqueue_style(
      'slick-css',
      'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
      array(),
      '1.8.1'
    );
    wp_enqueue_style(
      'slick-theme-css',
      'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css',
      array('slick-css'),
      '1.8.1'
    );

    // Swiper CSS
    wp_enqueue_style(
      'swiper-css',
      'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
      array(),
      null
    );
  }
}
add_action('wp_enqueue_scripts', 'mysass_temp_enqueue_styles');


/*====================================
 * JS読み込み
 *====================================*/
function mysass_temp_enqueue_scripts()
{
  wp_enqueue_script('jquery');

  // AOS
  wp_enqueue_style(
    'aos-css',
    'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css',
    array(),
    null
  );
  wp_enqueue_script(
    'aos-js',
    'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js',
    array(),
    null,
    true
  );

  // inview
  wp_enqueue_script(
    'inview-js',
    get_template_directory_uri() . '/js/jquery.inview.js',
    array('jquery'),
    null,
    true
  );

  // Rellax.js
  wp_enqueue_script(
    'rellax-js',
    'https://cdn.jsdelivr.net/npm/rellax@1.12.1/rellax.min.js',
    array(),
    null,
    true
  );

  // Stickyfill.js
  wp_enqueue_script(
    'stickyfill-js',
    'https://cdn.jsdelivr.net/npm/stickyfilljs@2.1.0/dist/stickyfill.min.js',
    array('jquery'),
    null,
    true
  );

  // 共通JS
  wp_enqueue_script(
    'common-js',
    get_template_directory_uri() . '/js/common.js',
    array(
      'jquery',
      'aos-js',
      'inview-js',
    ),
    null,
    true
  );

  // フロントページ限定
  if (is_front_page()) {
    // Swiper JS
    wp_enqueue_script(
      'swiper-js',
      'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
      array(),
      null,
      true
    );

    // Slick JS
    wp_enqueue_script(
      'slick-js',
      'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
      array('jquery'),
      '1.8.1',
      true
    );

    // front-page.js（Slick の後に読み込む）
    wp_enqueue_script(
      'front-page-js',
      get_template_directory_uri() . '/js/front-page.js',
      array('jquery', 'slick-js', 'swiper-js'),
      null,
      true
    );
  }

  // reserve flatpickr form.js
  if (is_page('reserve')) {
    wp_enqueue_script(
      'flatpickr-js',
      'https://cdn.jsdelivr.net/npm/flatpickr',
      array(),
      null,
      true
    );

    // flatpickr 日本語化
    wp_enqueue_script(
      'flatpickr-ja',
      'https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js',
      array('flatpickr-js'),
      null,
      true
    );

    // form.js（flatpickr初期化）
    wp_enqueue_script(
      'reserve-form-js',
      get_template_directory_uri() . '/js/form.js',
      array('jquery', 'flatpickr-js', 'flatpickr-ja'),
      null,
      true
    );
  }
}
add_action('wp_enqueue_scripts', 'mysass_temp_enqueue_scripts');


/*====================================
 * サムネイル機能
 *====================================*/
add_theme_support('post-thumbnails');


/*====================================
 * カスタム投稿タイプ登録
 *====================================*/
function create_post_types()
{
  register_post_type('news', array(
    'labels' => array(
      'name' => 'ニュース',
      'singular_name' => 'ニュース',
    ),
    'public' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'excerpt'),
    'taxonomies'  => array('category'),
    'rewrite' => array('slug' => 'news'),
    'show_in_rest' => true,
  ));

  register_post_type('salons', array(
    'labels' => array(
      'name' => 'サロン',
      'singular_name' => 'サロン'
    ),
    'public' => true,
    'has_archive' => true,
    'menu_position' => 6,
    'supports' => array('title', 'editor', 'thumbnail'),
    'rewrite' => array('slug' => 'salons')
  ));
}
add_action('init', 'create_post_types');


/*====================================
 * アーカイブページで投稿数を端末で切り替え
 *====================================*/
function set_custom_posts_per_page_by_device($query)
{
  if (!is_admin() && $query->is_main_query()) {
    if ($query->is_post_type_archive('news') || $query->is_post_type_archive('salons')) {
      $query->set('posts_per_page', 9);
    }
  }
}
add_action('pre_get_posts', 'set_custom_posts_per_page_by_device');


/*====================================
 * 投稿＋ニュースをカテゴリーアーカイブに表示
 *====================================*/
function add_news_to_category_archive($query)
{
  if (!is_admin() && $query->is_main_query() && $query->is_category()) {
    $query->set('post_type', array('post', 'news'));
  }
}
add_action('pre_get_posts', 'add_news_to_category_archive');


/*====================================
 * Breadcrumb NavXT パンくずリスト
 *====================================*/
function my_breadcrumb()
{
  if (function_exists('bcn_display') && !is_front_page()) {
    echo '<nav class="breadcrumb" aria-label="breadcrumb">';
    bcn_display();
    echo '</nav>';
  }
}


/*====================================
 * 都道府県タクソノミー登録
 *====================================*/
function register_prefecture_taxonomy()
{
  $labels = array(
    'name' => '都道府県',
    'singular_name' => '都道府県',
    'search_items' => '都道府県を検索',
    'all_items' => 'すべての都道府県',
    'edit_item' => '都道府県を編集',
    'update_item' => '都道府県を更新',
    'add_new_item' => '新しい都道府県を追加',
    'new_item_name' => '新しい都道府県名',
    'menu_name' => '都道府県',
  );

  register_taxonomy(
    'prefecture',
    array('salons'),
    array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_rest' => true,
      'public' => true,
      'rewrite' => array('slug' => 'prefecture'),
    )
  );
}
add_action('init', 'register_prefecture_taxonomy');


/*====================================
 * ニュースサイドバー用カテゴリ取得
 *====================================*/
function get_news_sidebar_categories()
{
  $fixed_slugs = array('all', 'campaign', 'news', 'column');
  $fixed = array();

  foreach ($fixed_slugs as $slug) {
    if ($slug === 'all') {
      $fixed[] = array(
        'slug' => 'all',
        'name' => 'すべて'
      );
    } else {
      $cat = get_category_by_slug($slug);
      if ($cat) {
        $fixed[] = array(
          'slug' => $cat->slug,
          'name' => $cat->name
        );
      }
    }
  }

  $all_cats = get_categories(array(
    'hide_empty' => true,
    'exclude' => get_cat_ID('Uncategorized')
  ));

  $dynamic = array();
  foreach ($all_cats as $cat) {
    if (!in_array($cat->slug, $fixed_slugs)) {
      $dynamic[] = array(
        'slug' => $cat->slug,
        'name' => $cat->name
      );
    }
  }

  return array_merge($fixed, $dynamic);
}


// NEWS投稿タイプにカテゴリーを紐付け
function add_category_to_news()
{
  register_taxonomy_for_object_type('category', 'news');
}
add_action('init', 'add_category_to_news');


// フォームのバリデーション
add_filter('wpcf7_validate_text*', 'validate_hiragana_kana', 20, 2);
function validate_hiragana_kana($result, $tag)
{
  if ($tag->name === 'your-kana') {
    $value = isset($_POST['your-kana']) ? $_POST['your-kana'] : '';

    // ひらがなのみ（長音ー含む）
    if (!preg_match('/^[ぁ-んー]+$/u', $value)) {
      $result->invalidate($tag, 'ふりがなは「ひらがな」で入力してください。');
    }
  }

  return $result;
}


// 一括でほぼ全てのサイズ生成を停止
add_filter('intermediate_image_sizes_advanced', function ($sizes) {
  return array();
});

// og:title表示の為
add_theme_support('title-tag');


/*====================================
 * ニュースカスタムパーマリンク設定（全角対策版）
 *====================================*/
function news_permalink($post_link, $post)
{
  if ($post->post_type !== 'news') {
    return $post_link;
  }

  $cats = get_the_category($post->ID);

  // カテゴリが存在し、かつスラッグに全角文字（マルチバイト）が含まれていないかチェック
  if (!empty($cats)) {
    $category_slug = $cats[0]->slug;
    // スラッグに全角文字が含まれている場合は安全な代替スラッグにフォールバック
    if (preg_match('/[^%a-zA-Z0-9_-]/', $category_slug)) {
      $category_slug = 'news-cat';
    }
  } else {
    $category_slug = 'news';
  }

  return home_url(
    "/news/{$category_slug}/{$post->ID}/"
  );
}
add_filter(
  'post_type_link',
  'news_permalink',
  10,
  2
);

function news_rewrite_rules()
{
  add_rewrite_rule(
    '^news/([^/]+)/([0-9]+)/?$',
    'index.php?post_type=news&p=$matches[2]',
    'top'
  );
}
add_action(
  'init',
  'news_rewrite_rules'
);


/*====================================
 * パーマリンクは仕様に合わせて設定してあるか(全角文字がないかどうか) 
 *====================================*/
function auto_slug_to_ascii($data, $postarr)
{
  // ニュース(news) と サロン(salons) を対象にする
  if (in_array($data['post_type'], array('news', 'salons'), true)) {
    if (empty($data['post_name']) || $data['post_name'] === sanitize_title($data['post_title'])) {

      if ($data['post_type'] === 'salons') {
        $data['post_name'] = 'salon-' . uniqid();
      } else {
        $data['post_name'] = 'post-' . uniqid();
      }
    }
  }
  return $data;
}
add_filter('wp_insert_post_data', 'auto_slug_to_ascii', 10, 2);

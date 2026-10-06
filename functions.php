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



  // カレンダー用
  if (is_page('recruit')) {
    wp_enqueue_style(
      'flatpickr-css',
      'https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css',
      array(),
      null
    );

    wp_enqueue_script(
      'flatpickr-js',
      'https://cdn.jsdelivr.net/npm/flatpickr',
      array(),
      null,
      true
    );

    wp_enqueue_script(
      'flatpickr-ja',
      'https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js',
      array('flatpickr-js'),
      null,
      true
    );

    wp_enqueue_script(
      'form-js',
      get_template_directory_uri() . '/js/form.js',
      array('flatpickr-js', 'flatpickr-ja'),
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
  register_post_type('introduction', array(
    'labels' => array(
      'name' => '各園のご紹介',
      'singular_name' => '各園のご紹介',
    ),
    'public' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array('slug' => 'introduction'),
    'show_in_rest' => true,
  ));


  register_post_type('letter', array(
    'labels' => array(
      'name' => 'こもれびだより',
      'singular_name' => 'こもれびだより',
    ),
    'public' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail'
    ),
    'rewrite' => array('slug' => 'letter'),
    'show_in_rest' => true,
  ));




  register_post_type('info', array(
    'labels' => array(
      'name' => 'お知らせ',
      'singular_name' => 'お知らせ',
    ),
    'public' => true,
    'has_archive' => true,
    'menu_position' => 7,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array('slug' => 'info'),
    'show_in_rest' => true,
  ));
}
add_action('init', 'create_post_types');



/*====================================
 * カスタムタクソノミー
 *====================================*/
function create_custom_taxonomies()
{

  // こもれびだよりカテゴリー
  register_taxonomy(
    'letter_category',
    'letter',
    array(
      'label' => 'こもれびだよりカテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
      'rewrite' => array(
        'slug' => 'letter-category'
      ),
    )
  );


  // お知らせカテゴリー
  register_taxonomy(
    'info_category',
    'info',
    array(
      'label' => 'お知らせカテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
      'rewrite' => array(
        'slug' => 'info-category'
      ),
    )
  );


  // 各園のご紹介 園の都道府県
  register_taxonomy(
    'introduction_area',
    'introduction',
    array(
      'label' => '園の都道府県',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
      'rewrite' => array(
        'slug' => 'area'
      ),
    )
  );

  // 各園のご紹介 園の種類
  register_taxonomy(
    'introduction_type',
    'introduction',
    array(
      'label' => '園の種類',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
      'rewrite' => array(
        'slug' => 'introduction-type'
      ),
    )
  );
}

add_action(
  'init',
  'create_custom_taxonomies'
);




/*====================================
 * アーカイブページで投稿数を9件に設定
 *====================================*/
function set_custom_posts_per_page_by_device($query)
{
  if (is_admin()) {
    return;
  }

  if (!$query->is_main_query()) {
    return;
  }

  if (
    $query->is_post_type_archive('introduction') ||
    $query->is_tax('introduction_type') ||
    $query->is_tax('introduction_area')
  ) {
    $query->set('posts_per_page', 9);
    return;
  }

  if ($query->is_post_type_archive('letter')) {
    $query->set('posts_per_page', 9);
    return;
  }

  if ($query->is_post_type_archive('info')) {
    $query->set('posts_per_page', 9);
    return;
  }
}

add_action('pre_get_posts', 'set_custom_posts_per_page_by_device');





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



// フォームのバリデーション
add_filter('wpcf7_validate_text*', 'validate_hiragana_kana', 20, 2);
function validate_hiragana_kana($result, $tag)
{
  if ($tag->name === 'recruit_kana') {
    $value = isset($_POST['recruit_kana']) ? $_POST['recruit_kana'] : '';

    // ふりがな：ひらがな・長音・全角/半角スペースを許可
    if (!preg_match('/^[ぁ-んー 　]+$/u', $value)) {
      $result->invalidate(
        $tag,
        'ふりがなは「ひらがな」で入力してください。'
      );
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


// Contact Form 7 の自動整形を無効化
// add_filter('wpcf7_autop_or_not', '__return_false');


/*====================================
 * ニュースカスタムパーマリンク設定（全角対策版）
 *====================================*/
function letter_permalink($post_link, $post)
{
  if ($post->post_type !== 'letter') {
    return $post_link;
  }

  $cats = get_the_terms(
    $post->ID,
    'letter_category'
  );

  // こもれびだよりカテゴリーを取得
  if (!empty($cats)) {
    $category_slug = $cats[0]->slug;
    // スラッグに全角文字が含まれている場合は安全な代替スラッグにフォールバック
    if (preg_match('/[^%a-zA-Z0-9_-]/', $category_slug)) {
      $category_slug = 'letter-cat';
    }
  } else {
    $category_slug = 'letter';
  }

  return home_url(
    "/letter/{$category_slug}/{$post->ID}/"
  );
}
add_filter(
  'post_type_link',
  'letter_permalink',
  10,
  2
);

function letter_rewrite_rules()
{
  add_rewrite_rule(
    '^letter/([^/]+)/([0-9]+)/?$',
    'index.php?post_type=letter&p=$matches[2]',
    'top'
  );
}
add_action(
  'init',
  'letter_rewrite_rules'
);


/*====================================
 * パーマリンクは仕様に合わせて設定してあるか(全角文字がないかどうか) 
 *====================================*/
function auto_slug_to_ascii($data, $postarr)
{
  if (in_array($data['post_type'], array(
    'introduction',
    'letter',
    'info'
  ), true)) {

    if (
      empty($data['post_name']) ||
      $data['post_name'] === sanitize_title($data['post_title'])
    ) {

      switch ($data['post_type']) {

        case 'introduction':
          $data['post_name'] = 'introduction-' . uniqid();
          break;

        case 'letter':
          $data['post_name'] = 'letter-' . uniqid();
          break;

        case 'info':
          $data['post_name'] = 'info-' . uniqid();
          break;
      }
    }
  }

  return $data;
}

add_filter('wp_insert_post_data', 'auto_slug_to_ascii', 10, 2);





/**
 * こもれびだより検索
 */
function letter_search_query($query)
{
  // 管理画面・メインクエリ以外は対象外
  if (is_admin() || !$query->is_main_query()) {
    return;
  }

  // こもれびだよりアーカイブのみ
  if (!$query->is_post_type_archive('letter')) {
    return;
  }


  /*====================================
   * 検索条件を取得
   *====================================*/

  // 都道府県スラッグ
  $area = isset($_GET['area'])
    ? sanitize_text_field($_GET['area'])
    : '';

  // 園名スラッグ
  $school = isset($_GET['school'])
    ? sanitize_text_field($_GET['school'])
    : '';

  // 年
  $year = isset($_GET['letter_year'])
    ? absint($_GET['letter_year'])
    : 0;

  // 月
  $month = isset($_GET['letter_month'])
    ? absint($_GET['letter_month'])
    : 0;


  /*====================================
   * タクソノミー検索
   *====================================*/

  $tax_query = array(
    'relation' => 'AND',
  );


  /*====================================
   * 都道府県が選択されている場合
   *====================================*/

  if ($area !== '') {

    $tax_query[] = array(
      'taxonomy' => 'letter_prefecture',
      'field'    => 'slug',
      'terms'    => $area,
    );
  }


  /*====================================
   * 園名が選択されている場合
   *====================================*/

  if ($school !== '') {

    $tax_query[] = array(
      'taxonomy' => 'letter_school',
      'field'    => 'slug',
      'terms'    => $school,
    );
  }


  /*====================================
   * タクソノミー条件を設定
   *====================================*/

  if (count($tax_query) > 1) {
    $query->set('tax_query', $tax_query);
  }


  /*====================================
   * 年月アーカイブ
   *====================================*/

  if ($year > 0) {

    $date_query = array(
      array(
        'year' => $year,
      ),
    );

    if ($month > 0) {
      $date_query[0]['month'] = $month;
    }

    $query->set('date_query', $date_query);
  }
}

add_action('pre_get_posts', 'letter_search_query');





// 各園の様子：画像を6枚以上必須にする
add_filter('acf/validate_value/name=introduction_gallery', function ($valid, $value, $field, $input) {

  if ($valid !== true) {
    return $valid;
  }

  if (empty($value) || !is_array($value)) {
    return '「園の様子」の画像は6枚以上登録してください。';
  }

  if (count($value) < 6) {
    return sprintf(
      '「園の様子」の画像は6枚以上登録してください。（現在%d枚）',
      count($value)
    );
  }

  return $valid;
}, 10, 4);


/**
 * ============================================
 * AIOSEO：こもれびだよりのmeta description
 * ============================================
 *
 */
function my_letter_aioseo_description($description)
{
  if (!is_singular('letter')) {
    return $description;
  }

  $sections = get_field('letter_sections');

  if (empty($sections) || !is_array($sections)) {
    return $description;
  }

  $texts = array();

  foreach ($sections as $section) {

    if (
      !isset($section['text']) ||
      empty($section['text'])
    ) {
      continue;
    }

    $text = $section['text'];
    $text = wp_strip_all_tags($text);
    $text = html_entity_decode(
      $text,
      ENT_QUOTES,
      'UTF-8'
    );

    $text = preg_replace(
      '/\s+/u',
      ' ',
      $text
    );

    $text = trim($text);

    if ($text !== '') {
      $texts[] = $text;
    }
  }

  if (empty($texts)) {
    return $description;
  }

  $description = implode(' ', $texts);

  // 160文字以内にする
  if (mb_strlen($description, 'UTF-8') > 160) {
    $description = mb_substr(
      $description,
      0,
      157,
      'UTF-8'
    ) . '…';
  }

  return $description;
}

add_filter(
  'aioseo_description',
  'my_letter_aioseo_description',
  9999
);




/**
 * ============================================
 * AIOSEO：お知らせのmeta description
 * ACFの繰り返しフィールド news_sections から生成
 * ============================================
 */
function my_info_aioseo_description($description)
{
  // お知らせの個別記事だけを対象にする
  if (!is_singular('info')) {
    return $description;
  }

  // ACFの繰り返しフィールドを取得
  $sections = get_field('news_sections');

  if (empty($sections) || !is_array($sections)) {
    return $description;
  }

  $texts = array();

  foreach ($sections as $section) {
    if (empty($section['text'])) {
      continue;
    }

    $text = wp_strip_all_tags($section['text']);

    $text = html_entity_decode(
      $text,
      ENT_QUOTES,
      'UTF-8'
    );

    $text = preg_replace('/\s+/u', ' ', $text);
    $text = trim($text);

    if ($text !== '') {
      $texts[] = $text;
    }
  }

  if (empty($texts)) {
    return $description;
  }

  $description = implode(' ', $texts);

  if (mb_strlen($description, 'UTF-8') > 160) {
    $description = mb_substr(
      $description,
      0,
      157,
      'UTF-8'
    ) . '…';
  }

  return $description;
}

add_filter(
  'aioseo_description',
  'my_info_aioseo_description',
  9999
);
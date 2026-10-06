<?php get_header(); ?>

<main class="l-info-page">

  <!-- Main Visual -->
  <section class="l-main-visual">

    <div class="l-main-visual__title">
      <h1 class="l-main-visual__title-ja" data-aos="fade-up">
        お知らせ
      </h1>
      <p class="l-main-visual__title-en">
        info
      </p>
    </div>

    <!-- パンくず -->
    <div class="breadcrumb-container u-hover" data-aos="fade-up">
      <nav class="breadcrumb">

        <a href="<?php echo esc_url(home_url('/')); ?>">
          TOP
        </a>

        <span class="sep">&gt;</span>

        <a href="<?php echo esc_url(get_post_type_archive_link('info')); ?>">
          お知らせ一覧
        </a>

        <span class="sep">&gt;</span>

        <span>
          <?php single_term_title(); ?>
        </span>

      </nav>
    </div>

  </section>

  <!-- 記事セクション -->
  <section class="p-info">

    <div class="l-info__inner">

      <!-- カテゴリタブ -->
      <div class="p-info-tab" data-aos="fade-up">

        <a href="<?php echo esc_url(get_post_type_archive_link('info')); ?>">
          すべて
        </a>

        <?php
        $terms = get_terms(array(
          'taxonomy'   => 'info_category',
          'hide_empty' => true,
        ));

        if (!empty($terms) && !is_wp_error($terms)) :
          foreach ($terms as $term) :
        ?>

            <a
              href="<?php echo esc_url(get_term_link($term)); ?>"
              class="<?php echo is_tax('info_category', $term->term_id) ? 'is-active' : ''; ?>">
              <?php echo esc_html($term->name); ?>
            </a>

        <?php
          endforeach;
        endif;
        ?>

      </div>

      <!-- 記事一覧 -->
      <?php if (have_posts()) : ?>

        <div class="p-info-list">

          <?php while (have_posts()) : the_post(); ?>

            <article class="p-info-list__item" data-aos="fade-up">

              <a
                class="p-info-card"
                href="<?php the_permalink(); ?>">

                <?php
                // 現在表示しているカテゴリーを取得
                $badge_term = get_queried_object();

                // 念のため、カテゴリー情報が取得できない場合に備える
                if (
                  !($badge_term instanceof WP_Term) ||
                  $badge_term->taxonomy !== 'info_category'
                ) {
                  $badge_term = null;
                }

                // カテゴリーごとのクラスとアイコンを設定
                $category_class = '';
                $icon_file = '';

                if ($badge_term instanceof WP_Term) {

                  switch ($badge_term->slug) {

                    // お知らせ：ピンク＋ベル
                    case 'news':
                      $category_class = 'is-news';
                      $icon_file = 'info-bell-white.svg';
                      break;

                    // 活動情報：青＋吹き出し
                    case 'active-news':
                      $category_class = 'is-active-news';
                      $icon_file = 'info-news-white.svg';
                      break;

                    // メディア情報：オレンジ＋PC
                    case 'media-info':
                      $category_class = 'is-media-info';
                      $icon_file = 'info-media-white.svg';
                      break;
                  }
                }
                ?>

                <!-- カテゴリバッジ -->
                <div class="p-info-card__badge <?php echo esc_attr($category_class); ?>">

                  <?php if ($icon_file !== '') : ?>

                    <img
                      src="<?php echo esc_url(get_theme_file_uri('img/svg/' . $icon_file)); ?>"
                      alt=""
                      class="p-info-card__icon">

                  <?php endif; ?>

                  <?php if ($badge_term instanceof WP_Term) : ?>

                    <span>
                      <?php echo esc_html($badge_term->name); ?>
                    </span>

                  <?php endif; ?>

                </div>

                <!-- 日付 -->
                <time
                  class="p-info-card__date"
                  datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                  <?php echo esc_html(get_the_date('Y. m. d')); ?>
                </time>

                <!-- タイトル -->
                <h2 class="p-info-card__title">
                  <?php the_title(); ?>
                </h2>

                <!-- リード文 -->
                <p class="p-info-card__lead">
                  <?php
                  $content = get_the_content();
                  $content = strip_shortcodes($content);
                  $content = wp_strip_all_tags($content);

                  echo esc_html(
                    wp_trim_words($content, 50, '...')
                  );
                  ?>
                </p>
              </a>
            </article>

          <?php endwhile; ?>

        </div>

      <?php else : ?>

        <p class="c-no-post">
          投稿が見つかりませんでした。
        </p>

      <?php endif; ?>

      <!-- ページネーション -->
      <div class="c-pagination js-stagger" data-aos="fade-up">

        <?php
        the_posts_pagination(array(
          'mid_size'  => 2,
          'prev_text' => '<i class="fa-solid fa-chevron-left boby-fa info-arrow"></i>',
          'next_text' => '<i class="fa-solid fa-chevron-right boby-fa info-arrow"></i>',
        ));
        ?>

      </div>

    </div>

  </section>

</main>

<?php get_footer(); ?>
<?php get_header(); ?>

<main class="l-info-page">

  <!-- Main Visual -->
  <section class="l-main-visual">
    <div class="l-main-visual__title">
      <h1 class="l-main-visual__title-ja inview">お知らせ</h1>
      <p class="l-main-visual__title-en inview">info</p>
    </div>

    <!-- カスタムパンくずリスト -->
    <div class="breadcrumb-container inview">
      <nav class="breadcrumb u-hover">
        <a href="<?php echo home_url('/'); ?>">ホーム</a>
        <span class="sep" data-aos="fade-up">&gt;</span>
        <span>お知らせ</span>
      </nav>
    </div>
  </section>

  <!-- 記事セクション全体 -->
  <section class="l-info">
    <div class="l-info__inner">

      <!-- カテゴリタブ -->
      <div class="p-info-filter inview">

        <a href="<?php echo get_post_type_archive_link('info'); ?>"
          class="p-info-filter__button is-active u-hover">
          すべて
        </a>

        <?php
        $terms = get_terms(array(
          'taxonomy' => 'info_category',
          'hide_empty' => true,
        ));
        if (!empty($terms) && !is_wp_error($terms)) :
          foreach ($terms as $term) :
        ?>
            <a href="<?php echo get_term_link($term); ?>"
              class="p-info-filter__button u-hover">
              <?php echo esc_html($term->name); ?>
            </a>
        <?php
          endforeach;
        endif;
        ?>
      </div>

      <!-- 記事一覧 -->
      <?php if (have_posts()) : ?>
        <div class="p-info-list inview">
          <?php while (have_posts()) : the_post(); ?>
            <article class="p-info-list__item">
              <a class="p-info-card u-hover" href="<?php the_permalink(); ?>">

                <!-- カテゴリバッジ -->
                <?php
                $terms = get_the_terms(
                  get_the_ID(),
                  'info_category'
                );

                $category_class = '';

                if ($terms && !is_wp_error($terms)) {
                  $category_class = 'is-' . $terms[0]->slug;
                }
                ?>

                <div class="p-info-card__badge <?php echo esc_attr($category_class); ?>">
                  <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8">
                    <path d="M18 8a6 6 0 10-12 0c0 7-3 9-3 9h18s-3-2-3-9" />
                    <path d="M13.7 21a2 2 0 01-3.4 0" />
                  </svg>

                  <?php if ($terms && !is_wp_error($terms)): ?>
                    <span><?php echo esc_html($terms[0]->name); ?></span>
                  <?php endif; ?>
                </div>

                <!-- 日付 -->
                <time class="p-info-card__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                  <?php echo get_the_date('Y. m. d'); ?>
                </time>

                <!-- タイトル -->
                <h2 class="p-info-card__title">
                  <?php the_title(); ?>
                </h2>

                <!-- リード文 -->
                <p class="p-info-card__lead"><?php the_field('info_lead'); ?></p>
              </a>
            </article>
          <?php endwhile; ?>
        </div>
      <?php else : ?>

        <p class="c-no-post" data-aos="fade-up">
          投稿が見つかりませんでした。
        </p>

      <?php endif; ?>

      <!-- ページネーション -->
      <div class="c-pagination js-stagger inview" id="info-pagi">
        <?php the_posts_pagination(array(
          'mid_size'  => 2,
          'prev_text' => '<i class="fa-solid fa-chevron-left boby-fa info-arrow"></i>',
          'next_text' => '<i class="fa-solid fa-chevron-right boby-fa info-arrow"></i>',
        )); ?>
      </div>

    </div>
  </section>

</main>
<?php get_footer(); ?>
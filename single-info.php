<?php get_header(); ?>

<main class="l-info-page">

  <!-- Main Visual -->
  <section class="l-main-visual">
    <div class="l-main-visual__title">
      <h2 class="l-main-visual__title-ja inview">お知らせ</h2>
      <p class="l-main-visual__title-en inview">info</p>
    </div>

    <!-- カスタムパンくずリスト -->
    <div class="breadcrumb-container inview">
      <nav class="breadcrumb u-hover">
        <a href="<?php echo home_url('/'); ?>">ホーム</a>
        <span class="sep">&gt;</span>
        <a href="<?php echo get_post_type_archive_link('info'); ?>">お知らせ一覧</a>
        <span class="sep">&gt;</span>
        <span><?php the_title(); ?></span>
      </nav>
    </div>


    <section class="l-info-single">
      <div class="l-info-single__inner">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <!-- 日付 -->
            <div class="p-info-article__date inview">
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date('Y.m.d'); ?>
              </time>
            </div>

            <!-- 記事タイトル・カテゴリ・日付 -->
            <h1 class="p-info-article__title inview"><?php the_title(); ?></h1>

            <!-- アイキャッチ -->
            <div class="p-info-article__thumbnail inview">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img
                  src="<?php echo esc_url(get_template_directory_uri() . '/img/no-image.webp'); ?>"
                  alt="No Image">
              <?php endif; ?>
            </div>

            <!-- ACFリピーターフィールド -->
            <section class="p-news-article__body">
              <?php if (have_rows('news_sections')) : ?>
                <?php while (have_rows('news_sections')) : the_row(); ?>
                  <article class="p-news-article__section">
                    <h5 class="p-news-article__subtitle inview">
                      <?php the_sub_field('subtitle'); ?>
                    </h5>
                    <div class="p-news-article__text inview">
                      <?php the_sub_field('text'); ?>
                    </div>
                  </article>
                <?php endwhile; ?>
              <?php endif; ?>
            </section>

        <?php endwhile;
        endif; ?>

        <!-- 戻るボタン -->
        <div class="single__back-btn-wrap inview">
          <div class="single__back-btn u-hover">
            <a href="<?php echo get_post_type_archive_link('info'); ?>" class="single__back-linkbtn c-button">
              お知らせ一覧へ
            </a>
          </div>
        </div>

      </div>
    </section>

  </section>
</main>

<?php get_footer(); ?>
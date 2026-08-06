<?php get_header(); ?>

<main class="l-single-news-single">

  <!-- Main Visual -->
  <section class="l-main-visual">
    <h1 class="l-main-visual__title" data-aos="fade-up">各園のご紹介</h1>

    <!-- カスタムパンくずリスト -->
    <div class="breadcrumb-container">
      <nav class="breadcrumb  u-hover" data-aos="fade-up">
        <a href="<?php echo home_url('/'); ?>">ホーム</a>
        <span class="sep" data-aos="fade-up">｜</span>
        <a href="<?php echo home_url('/news'); ?>">各園のご紹介</a>
        <span class="sep" data-aos="fade-up">｜</span>
        <span data-aos="fade-up"><?php the_title(); ?></span>
      </nav>
    </div>


    <div class="l-single-news-single__wrapper single__wrapper" data-aos="fade-up">
      <section class="p-news-article">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>





            <!-- こもれびのパーツ -->
            <p>こもれびのパーツ</p>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php the_post_thumbnail(); ?>
            <time datetime="<?php echo get_the_date('Y-m-d'); ?>" data-aos="fade-up">
              <?php echo get_the_date('Y.m.d'); ?>
            </time>




            <!-- 記事タイトル -->
            <header class="p-news-article__header">
              <h2 class="p-news-article__title" data-aos="fade-up"><?php the_title(); ?></h2>
              <div class="category-date">
                <div class="p-news-article__category" data-aos="fade-up">
                  <?php
                  $categories = get_the_category();

                  if (!empty($categories)) {
                    $slugs = wp_list_pluck($categories, 'slug');
                    echo esc_html(implode(' ', $slugs));
                  }
                  ?>
                </div>
                <div class="p-news-article__date">
                  <time datetime="<?php echo get_the_date('Y-m-d'); ?>" data-aos="fade-up">
                    <?php echo get_the_date('Y.m.d'); ?>
                  </time>
                </div>
              </div>
            </header>


            <!-- ACFリピーターフィールド -->
            <section class="p-news-article__body">
              <?php if (have_rows('news_sections')) : ?>
                <?php while (have_rows('news_sections')) : the_row(); ?>
                  <article class="p-news-article__section">
                    <h5 class="p-news-article__subtitle" data-aos="fade-up">
                      <?php the_sub_field('subtitle'); ?>
                    </h5>
                    <div class="p-news-article__text" data-aos="fade-up">
                      <?php the_sub_field('text'); ?>
                    </div>
                  </article>
                <?php endwhile; ?>
              <?php endif; ?>
            </section>

        <?php endwhile;
        endif; ?>

        <!-- 戻るボタン -->
        <div class="single__back-btn-wrap u-hover">
          <div class="single__back-btn inview">
            <a href="<?php echo home_url('/news'); ?>" class="single__back-linkbtn">
              お知らせ一覧へ
            </a>
          </div>
        </div>

      </section>


    </div>


  </section>

</main>




<?php get_footer(); ?>
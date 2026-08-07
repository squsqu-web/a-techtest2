<?php get_header(); ?>

<main class="l-info-page">

  <!-- Main Visual -->
  <section class="l-main-visual">
    <div class="l-main-visual__title">
      <h1 class="l-main-visual__title-ja" data-aos="fade-up">お知らせ</h1>
      <p class="l-main-visual__title-en">info</p>
    </div>

    <!-- カスタムパンくずリスト -->
    <div class="breadcrumb-container u-hover" data-aos="fade-up">
      <nav class="breadcrumb">

        <a href="<?php echo home_url('/'); ?>">
          ホーム
        </a>

        <span class="sep">&gt;</span>

        <a href="<?php echo get_post_type_archive_link('info'); ?>">
          お知らせ一覧
        </a>

        <span class="sep">&gt;</span>

        <span>
          <?php the_title(); ?>
        </span>

      </nav>
    </div>


    <section class="l-info">

      <div class="l-info__inner">



        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


            <!-- 記事タイトル・カテゴリ・日付 -->
            <header class="p-info-article__header">

              <h1 class="p-info-article__title" data-aos="fade-up">
                <?php the_title(); ?>
              </h1>


              <div class="category-date">

                <div class="p-info-article__category" data-aos="fade-up">

                  <?php
                  $terms = get_the_terms(
                    get_the_ID(),
                    'info_category'
                  );

                  if ($terms && !is_wp_error($terms)) {
                    echo esc_html($terms[0]->name);
                  }
                  ?>

                </div>


                <div class="p-info-article__date">

                  <time datetime="<?php echo get_the_date('Y-m-d'); ?>" data-aos="fade-up">

                    <?php echo get_the_date('Y.m.d'); ?>

                  </time>

                </div>


              </div>

            </header>




            <!-- アイキャッチ -->
            <?php if (has_post_thumbnail()) : ?>

              <div class="p-info-article__thumbnail">
                <?php the_post_thumbnail(); ?>
              </div>

            <?php endif; ?>


            <!-- 本文 -->
            <div class="p-info-article__body">

              <?php the_content(); ?>

            </div>


        <?php endwhile;
        endif; ?>


        <!-- 戻るボタン -->
        <div class="single__back-btn-wrap u-hover">
          <div class="single__back-btn inview">
            <a href="<?php echo get_post_type_archive_link('info'); ?>" class="single__back-linkbtn">
              お知らせ一覧へ
            </a>
          </div>
        </div>

      </div>

    </section>

  </section>

</main>




<?php get_footer(); ?>
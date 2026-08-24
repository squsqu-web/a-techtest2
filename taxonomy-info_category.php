<?php get_header(); ?>


<main class="l-info-page">


  <!-- Main Visual -->
  <section class="l-main-visual">
    <div class="l-main-visual__title">
      <h1 class="l-main-visual__title-ja" data-aos="fade-up">お知らせ</h1>
      <p class="l-main-visual__title-en">info</p>
    </div>

    <!-- パンくず -->
    <div class="breadcrumb-container u-hover" data-aos="fade-up">
      <nav class="breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">TOP</a>
        <span class="sep">&gt;</span>
        <a href="<?php echo get_post_type_archive_link('info'); ?>">
          お知らせ一覧
        </a>
        <span class="sep">&gt;</span>
        <span>
          <?php single_term_title(); ?>
        </span>
      </nav>
    </div>

  </section>




  <section class="p-info">

    <div class="l-info__inner">
      <!-- カテゴリタブ -->
      <div class="p-info-tab" data-aos="fade-up">

        <a href="<?php echo get_post_type_archive_link('info'); ?>">
          すべて
        </a>


        <?php
        $terms = get_terms(array(
          'taxonomy' => 'info_category',
          'hide_empty' => true,
        ));
        ?>


        <?php foreach ($terms as $term): ?>

          <a
            href="<?php echo get_term_link($term); ?>"
            class="<?php echo is_tax('info_category', $term->term_id) ? 'is-active' : ''; ?>">

            <?php echo esc_html($term->name); ?>

          </a>

        <?php endforeach; ?>


      </div>




      <!-- 記事一覧 -->
      <?php if (have_posts()) : ?>

        <div class="p-info-list">


          <?php while (have_posts()) : the_post(); ?>


            <article class="p-info-list__item" data-aos="fade-up">


              <a class="p-info-card" href="<?php the_permalink(); ?>">



                <!-- カテゴリ -->
                <div class="p-info-card__badge">


                  <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8">
                    <path d="M18 8a6 6 0 10-12 0c0 7-3 9-3 9h18s-3-2-3-9" />
                    <path d="M13.7 21a2 2 0 01-3.4 0" />
                  </svg>


                  <?php
                  $terms = get_the_terms(
                    get_the_ID(),
                    'info_category'
                  );
                  ?>


                  <?php if ($terms && !is_wp_error($terms)): ?>

                    <span>
                      <?php echo esc_html($terms[0]->name); ?>
                    </span>

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




                <!-- リード -->
                <p class="p-info-card__lead">

                  <?php the_field('info_lead'); ?>

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
          'mid_size' => 2,
          'prev_text' => '<i class="fa-solid fa-chevron-left boby-fa info-arrow"></i>',
          'next_text' => '<i class="fa-solid fa-chevron-right boby-fa info-arrow"></i>',
        ));
        ?>

      </div>
    </div>




  </section>


</main>


<?php get_footer(); ?>
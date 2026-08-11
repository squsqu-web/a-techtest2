<?php get_header(); ?>


<main class="l-single-letter">

  <!-- Main Visual -->
  <section class="l-main-visual">
    <div class="l-main-visual__title">
      <h1 class="l-main-visual__title-ja" data-aos="fade-up">こもれびだより</h1>
      <p class="l-main-visual__title-en">letter</p>
    </div>
  </section>

  <!-- カスタムパンくずリスト -->
  <div class="breadcrumb-container">
    <nav class="breadcrumb  u-hover" data-aos="fade-up">
      <a href="<?php echo home_url('/'); ?>">TOP</a>
      <span class="sep" data-aos="fade-up">&gt;</span>
      <a href="<?php echo home_url('/letter'); ?>">こもれびだより一覧</a>
      <span class="sep" data-aos="fade-up">&gt;</span>
      <span data-aos="fade-up"><?php the_title(); ?>『<?php echo esc_html(get_field('letter_title')); ?>』</span>
    </nav>
  </div>


  <!-- 記事リスト -->
  <div class="l-letter__wrapper">
    <div class="l-letter__wrapper-inner">

      <div class="p-letter-archive">

        <!-- 検索フォームと記事一覧　👇不要か確認する -->
        <div class="p-letter-archive__content">


          <!-- 一覧リスト　👇不要か確認する -->
          <section class="p-letter-archive__list ">



            <!-- これからここにコンテンツ -->
            <!-- 記事本体 -->
            <article class="letter-contents">

              <!-- 記事ヘッダー -->
              <div class="letter-contents__inner">

                <header class="letter-contents__letter-heading">

                  <h2 class="letter-contents__title">
                    <?php the_title(); ?>
                  </h2>

                  <time
                    class="letter-contents__date"
                    datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                    <?php echo esc_html(get_the_date('Y年n月j日')); ?>
                  </time>

                </header>


                <!-- 記事タイトル -->
                <h3 class="letter-contents__heading">
                  <?php echo esc_html(get_field('letter_title')); ?>
                </h3>

                <!-- アイキャッチ -->
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full', array(
                    'class' => 'letter-contents__thumbnail'
                  )); ?>
                <?php endif; ?>

              </div>


              <!-- ACF繰り返しフィールド -->
              <?php if (have_rows('letter_sections')) : ?>

                <?php while (have_rows('letter_sections')) : the_row(); ?>

                  <section class="letter-contents__section">

                    <?php if (get_sub_field('subtitle')) : ?>
                      <h4 class="letter-contents__section-heading">
                        <?php echo esc_html(get_sub_field('subtitle')); ?>
                      </h4>
                    <?php endif; ?>


                    <?php if (get_sub_field('text')) : ?>
                      <p class="letter-contents__section-text">
                        <?php echo wp_kses_post(get_sub_field('text')); ?>
                      </p>
                    <?php endif; ?>

                  </section>

                <?php endwhile; ?>

              <?php endif; ?>


              <!-- 戻るボタン -->
              <div class="single__back-btn-wrap u-hover">
                <div class="single__back-btn inview">
                  <a href="<?php echo get_post_type_archive_link('letter'); ?>" class="single__back-linkbtn c-button letter-single-back-btn">
                    こもれびだより一覧へ
                  </a>
                </div>
              </div>

            </article>




















          </section>

        </div>


        <!-- サイドバー -->
        <aside class="p-letter-archive__sidebar">
          <h4 class="p-letter-archive__sidebar-title" id="letter-cat" data-aos="fade-up">アーカイブ</h4>

          <?php
          // こもれびだよりの投稿日をすべて取得
          $letter_dates = get_posts(array(
            'post_type'      => 'letter',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
            'fields'         => 'ids',
          ));

          $archives = array();
          if (!empty($letter_dates)) :
            foreach ($letter_dates as $letter_id) :
              $year  = get_the_date('Y', $letter_id);
              $month = get_the_date('n', $letter_id);

              if (!isset($archives[$year])) {
                $archives[$year] = array();
              }

              if (!in_array($month, $archives[$year])) {
                $archives[$year][] = $month;
              }
            endforeach;

            krsort($archives);

            foreach ($archives as $year => $months) :
              rsort($months);
          ?>

              <h5 class="p-letter-archive__archive-year"><?php echo esc_html($year); ?>年</h5>

              <ul class="p-letter-archive__archive-list">
                <?php foreach ($months as $month) : ?>

                  <?php
                  $is_active =
                    isset($_GET['letter_year'], $_GET['letter_month']) &&
                    (int) $_GET['letter_year'] === (int) $year &&
                    (int) $_GET['letter_month'] === (int) $month;
                  ?>

                  <li class="p-letter-archive__archive-item u-hover inview<?php echo $is_active ? ' is-active' : ''; ?>">
                    <a
                      href="<?php echo esc_url(
                              add_query_arg(
                                array(
                                  'letter_year'  => $year,
                                  'letter_month' => $month,
                                ),
                                get_post_type_archive_link('letter')
                              )
                            ); ?>">

                      <?php echo esc_html($month); ?>月
                    </a>
                  </li>

                <?php endforeach; ?>
              </ul>
            <?php
            endforeach;
          else :
            ?>

            <p class="p-letter-archive__no-archive">
              アーカイブはありません。
            </p>

          <?php endif; ?>
        </aside>


      </div>
    </div>
  </div>





</main>




<?php get_footer(); ?>
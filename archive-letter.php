<?php get_header(); ?>

<main class="l-letter-archive">

  <!-- Main Visual -->
  <section class="l-main-visual">
    <div class="l-main-visual__title">
      <h1 class="l-main-visual__title-ja inview">こもれびだより</h1>
      <p class="l-main-visual__title-en inview">letter</p>
    </div>
  </section>

  <!-- カスタムパンくずリスト -->
  <div class="breadcrumb-container inview">
    <nav class="breadcrumb u-hover">
      <a href="<?php echo home_url('/'); ?>">TOP</a>
      <span class="sep" data-aos="fade-up">&gt;</span>
      <span>こもれびだより</span>
    </nav>
  </div>



  <!-- 記事リスト -->
  <div class="l-letter__wrapper">
    <div class="l-letter__wrapper-inner">

      <div class="p-letter-archive">
        <!-- 検索フォームと記事一覧 -->
        <div class="p-letter-archive__content">

          <!-- 園をさがす -->
          <section class="p-letter-archive__search">
            <form
              class="p-letter-archive__search-form"
              action="<?php echo esc_url(get_post_type_archive_link('letter')); ?>"
              method="get">

              <h3 class="p-letter-archive__search-title inview">園をさがす</h3>
              <div class="p-letter-archive__search-select-wrap">

                <!-- 都道府県 -->
                <div class="p-letter-archive__search-select p-letter-archive__search-select--area inview">
                  <select name="area">
                    <option value="">都道府県をえらぶ</option>

                    <?php
                    $areas = get_terms(array(
                      'taxonomy'   => 'introduction_area',
                      'hide_empty' => true,
                    ));

                    if (!is_wp_error($areas)) :
                      foreach ($areas as $area) :
                    ?>

                        <option
                          value="<?php echo esc_attr($area->slug); ?>"
                          <?php selected(
                            isset($_GET['area']) ? $_GET['area'] : '',
                            $area->slug
                          ); ?>>
                          <?php echo esc_html($area->name); ?>
                        </option>

                    <?php
                      endforeach;
                    endif;
                    ?>

                  </select>
                </div>


                <!-- 園 -->
                <div class="p-letter-archive__search-school-wrap">
                  <div class="p-letter-archive__search-select p-letter-archive__search-select--school inview">
                    <select name="school">
                      <option value="">園をえらぶ</option>

                      <?php
                      $schools = get_posts(array(
                        'post_type'      => 'introduction',
                        'posts_per_page' => -1,
                        'post_status'    => 'publish',
                        'orderby'        => 'title',
                        'order'          => 'ASC',
                      ));

                      foreach ($schools as $school) :
                      ?>

                        <option
                          value="<?php echo esc_attr($school->ID); ?>"
                          <?php selected(
                            isset($_GET['school']) ? $_GET['school'] : '',
                            $school->ID
                          ); ?>>
                          <?php echo esc_html(get_the_title($school->ID)); ?>
                        </option>

                      <?php endforeach; ?>
                    </select>
                  </div>

                  <!-- 検索ボタン -->
                  <div class="p-letter-archive__search-button inview">
                    <button type="submit">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/img/search.webp"
                        alt="検索開始">
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </section>


          <!-- 一覧リスト -->
          <section class="p-letter-archive__list inview">

            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <article class="p-letter-archive__item">
                  <div class="p-letter-archive__card u-hover">
                    <a href="<?php the_permalink(); ?>" class="p-letter-archive__link">

                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', [
                          'class' => 'p-letter-archive__image'
                        ]); ?>
                      <?php else : ?>
                        <img
                          src="<?php echo esc_url(get_template_directory_uri() . '/img/no-image.webp'); ?>"
                          alt="<?php echo esc_attr(get_the_title()); ?>"
                          class="p-letter-archive__image">
                      <?php endif; ?>

                      <div class="p-letter-archive__card-wrap">
                        <h2 class="p-letter-archive__card-title"><?php the_title(); ?></h2>
                        <p class="p-letter-archive__text"><?php echo esc_html(get_field('letter_title')); ?></p>
                        <time
                          class="p-letter-archive__date"
                          datetime="<?php echo get_the_date('c'); ?>">
                          <?php echo get_the_date('Y'); ?>ねん<?php echo get_the_date('n'); ?>がつ<?php echo get_the_date('j'); ?>にち
                        </time>
                      </div>
                    </a>
                  </div>
                </article>
              <?php endwhile; ?>

            <?php else : ?>
              <p class="p-letter-archive__no-post">該当するこもれびだよりは<br class="sp_only">まだありません。</p>
            <?php endif; ?>

          </section>

          <!-- ページネーション -->
          <div class="c-pagination ">
            <?php
            the_posts_pagination(array(
              'mid_size'  => 2,
              'prev_text' => '&lt;',
              'next_text' => '&gt;',
            ));
            ?>
          </div>

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

              <h5 class="p-letter-archive__archive-year inview"><?php echo esc_html($year); ?>年</h5>

              <ul class="p-letter-archive__archive-list">
                <?php foreach ($months as $month) : ?>

                  <?php
                  $is_active =
                    isset($_GET['letter_year'], $_GET['letter_month']) &&
                    (int) $_GET['letter_year'] === (int) $year &&
                    (int) $_GET['letter_month'] === (int) $month;
                  ?>

                  <li class="p-letter-archive__archive-item inview<?php echo $is_active ? ' is-active' : ''; ?>">
                    <a class="u-hover"
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
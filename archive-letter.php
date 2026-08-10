<?php get_header(); ?>

<main class="l-letter-archive">

  <!-- Main Visual -->
  <section class="l-main-visual">
    <div class="l-main-visual__title">
      <h1 class="l-main-visual__title-ja" data-aos="fade-up">こもれびだより</h1>
      <p class="l-main-visual__title-en">letter</p>
    </div>
  </section>


  <!-- カスタムパンくずリスト -->
  <div class="breadcrumb-container u-hover" data-aos="fade-up">
    <nav class="breadcrumb">
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
            <form class="p-letter-archive__search-form" action="">

              <h3 class="p-letter-archive__search-title">
                園をさがす
              </h3>

              <div class="p-letter-archive__search-select-wrap">

                <div class="p-letter-archive__search-select p-letter-archive__search-select--area">
                  <select name="area">
                    <option value="">都道府県をえらぶ</option>
                    <option value="tokyo">東京都</option>
                    <option value="fukuoka">福岡県</option>
                    <option value="osaka">大阪府</option>
                  </select>
                </div>


                <div class="p-letter-archive__search-school-wrap">

                  <div class="p-letter-archive__search-select p-letter-archive__search-select--school">
                    <select name="school">
                      <option value="">園をえらぶ</option>
                      <option value="school-a">〇〇保育園</option>
                      <option value="school-b">△△こども園</option>
                      <option value="school-c">□□保育園</option>
                    </select>
                  </div>

                  <div class="p-letter-archive__search-button">
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
          <section class="p-letter-archive__list ">

            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>

                <article class="p-letter-archive__item">

                  <div class="p-letter-archive__card">

                    <a href="<?php the_permalink(); ?>" class="p-letter-archive__link">

                      <?php if (has_post_thumbnail()) : ?>

                        <?php the_post_thumbnail('large', [
                          'class' => 'p-letter-archive__image'
                        ]); ?>

                      <?php else : ?>

                        <img
                          src="<?php echo get_template_directory_uri(); ?>/img/letter_top-pc.jpg"
                          alt="<?php the_title_attribute(); ?>"
                          class="p-letter-archive__image">

                      <?php endif; ?>


                      <div class="p-letter-archive__card-wrap">

                        <h2 class="p-letter-archive__card-title">
                          <?php the_title(); ?>
                        </h2>

                        <p class="p-letter-archive__text">
                          <?php the_excerpt(); ?>
                        </p>

                        <time
                          class="p-letter-archive__date"
                          datetime="<?php echo get_the_date('c'); ?>">
                          <?php echo get_the_date('Y年nがつj日'); ?>
                        </time>

                      </div>

                    </a>

                  </div>

                </article>

              <?php endwhile; ?>

            <?php else : ?>

              <p class="p-letter-archive__no-post">
                こもれびだよりはまだありません。
              </p>

            <?php endif; ?>


            <!-- ページネーション -->
            <div class="c-pagination">
              <?php
              the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => '&lt;',
                'next_text' => '&gt;',
              ));
              ?>
            </div>

          </section>

        </div>


        <!-- サイドバー -->
        <aside class="p-letter-archive__sidebar">

          <h4 class="p-letter-archive__sidebar-title" id="letter-cat" data-aos="fade-up">
            アーカイブ
          </h4>

          <h5 class="p-letter-archive__archive-year">2023年</h5>

          <ul class="p-letter-archive__archive-list">
            <li class="p-letter-archive__archive-item u-hover inview">4がつ</li>
            <li class="p-letter-archive__archive-item u-hover inview">5がつ</li>
            <li class="p-letter-archive__archive-item u-hover inview">6がつ</li>
            <li class="p-letter-archive__archive-item u-hover inview">7がつ</li>
            <li class="p-letter-archive__archive-item u-hover inview">8がつ</li>
            <li class="p-letter-archive__archive-item u-hover inview">9がつ</li>
            <li class="p-letter-archive__archive-item u-hover inview">10がつ</li>
            <li class="p-letter-archive__archive-item u-hover inview">11がつ</li>
            <li class="p-letter-archive__archive-item u-hover inview">12がつ</li>
          </ul>


          <h5 class="p-letter-archive__archive-year">2024年</h5>

          <ul class="p-letter-archive__archive-list">
            <li class="p-letter-archive__archive-item u-hover inview">4がつ</li>
          </ul>

        </aside>


      </div>
    </div>
  </div>
</main>



<?php get_footer(); ?>
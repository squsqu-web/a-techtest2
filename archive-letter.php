<?php get_header(); ?>

<main class="l-news">
  <div class="sticky-area">
    <!-- Main Visual -->
    <section class="l-main-visual">
      <h1 class="l-main-visual__title" data-aos="fade-up">こもれびだより</h1>
      <div class="sticky-wrapper"></div>


      <div class="contents-overlap-wrapper">
        <!-- カスタムパンくずリスト -->
        <div class="breadcrumb-container u-hover" data-aos="fade-up">
          <nav class="breadcrumb">
            <a href="<?php echo home_url('/'); ?>">TOP</a>
            <span class="sep" data-aos="fade-up">｜</span>
            <span href="<?php echo home_url('/news'); ?>">こもれびだより</span>
          </nav>
        </div>


        <!-- 園をさがす -->
        <section>
          <form action="">
            <h3>園をさがす</h3>
            <input type="text">
            <input type="text">
          </form>
        </section>


        <!-- 記事リスト -->
        <div class="l-letter__wrapper">
          <div class="l-letter__wrapper-innner">
            <section class="letter-list">

              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                  <article class="letter-list__item">
                    <a href="<?php the_permalink(); ?>" class="letter-list__link">

                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', ['class' => 'letter-list__image']); ?>
                      <?php else : ?>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/img/news_top-pc.jpg"
                          alt="<?php the_title_attribute(); ?>"
                          class="letter-list__image">
                      <?php endif; ?>

                      <h2 class="letter-list__title">
                        <?php the_title(); ?>
                      </h2>

                      <p class="letter-list__text">
                        <?php the_excerpt(); ?>
                      </p>

                      <time
                        class="letter-list__date"
                        datetime="<?php echo get_the_date('c'); ?>">
                        <?php echo get_the_date('Y年n月j日'); ?>
                      </time>





                      <!-- こもれびのパーツ -->
                      <p>こもれびのパーツ</p>
                      <h2><?php the_title(); ?></h2>
                      <?php the_content(); ?>
                      <?php the_post_thumbnail(); ?>
                      <time datetime="<?php echo get_the_date('Y-m-d'); ?>" data-aos="fade-up">
                        <?php echo get_the_date('Y.m.d'); ?>
                      </time>



                    </a>
                  </article>

                <?php endwhile; ?>

              <?php else : ?>

                <p class="letter-list__no-post">
                  お知らせはまだありません。
                </p>

              <?php endif; ?>

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

            <!-- サイドバー -->
            <aside class="l-news__sidebar">
              <h5 class="l-news__sidebar-title" id="news-cat" data-aos="fade-up">アーカイブ</h5>

              <ul class="l-news__category-list">
                <li class="l-news__category-item u-hover inview" data-cat="all">すべて</li>
                <li class="l-news__category-item u-hover inview" data-cat="campaign">キャンペーン</li>
                <li class="l-news__category-item u-hover inview" data-cat="news">お知らせ</li>
                <li class="l-news__category-item u-hover inview" data-cat="column">コラム</li>
              </ul>

            </aside>
          </div>


          <!--カテゴリー絞り込み -->
          <script>
            document.addEventListener('DOMContentLoaded', function() {
              const categoryItems = document.querySelectorAll('.l-news__category-item');
              const newsItems = document.querySelectorAll('.news-item');

              categoryItems.forEach(item => {
                item.addEventListener('click', () => {
                  const cat = item.getAttribute('data-cat');

                  categoryItems.forEach(i => i.classList.remove('active'));
                  item.classList.add('active');

                  newsItems.forEach(news => {
                    if (cat === 'all') {
                      news.style.display = 'block';
                    } else {
                      news.style.display = news.classList.contains(cat) ? 'block' : 'none';
                    }
                  });
                });
              });
            });
          </script>

        </div>
      </div>

    </section>
  </div>
</main>


<?php get_footer(); ?>
<?php get_header(); ?>

<main class="l-news">
  <div class="sticky-area">
    <!-- Main Visual -->
    <section class="l-main-visual">
      <h1 class="l-main-visual__title" data-aos="fade-up">news</h1>
      <div class="sticky-wrapper">
        <picture class="">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/news_top-sp.webp" media="(max-width: 767px)" type="image/webp">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/news_top-sp.jpg" media="(max-width: 767px)" type="image/jpeg">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/news_top-pc.webp" media="(min-width: 768px)" type="image/webp">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/news_top-pc.jpg" media="(min-width: 768px)" type="image/jpeg">
          <img src="<?php echo get_template_directory_uri(); ?>/img/news_top-pc.jpg" alt="清潔感のあるサロンの雰囲気を表す様子" class="l-main-visual__img">
        </picture>
      </div>


      <div class="contents-overlap-wrapper">
        <!-- カスタムパンくずリスト -->
        <div class="breadcrumb-container u-hover" data-aos="fade-up">
          <nav class="breadcrumb">
            <a href="<?php echo home_url('/'); ?>">ホーム</a>
            <span class="sep" data-aos="fade-up">｜</span>
            <span href="<?php echo home_url('/news'); ?>">ニュース一覧</span>
          </nav>
        </div>

        <!-- 記事リスト -->
        <div class="l-news__wrapper">
          <section class="l-news__content">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post();
                $post_categories = wp_get_post_categories(get_the_ID(), array('fields' => 'slugs'));
                $classes = implode(' ', $post_categories);
              ?>
                <div data-aos="fade-up">
                  <a href="<?php the_permalink(); ?>" class="section__item-link">
                    <div class="p-news-card news-item u-hover <?php echo esc_attr($classes); ?>">
                      <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="p-news-card__date">
                        <?php echo get_the_date('Y.m.d'); ?>
                      </time>

                      <h4 class="p-news-card__title"><?php the_title(); ?></h4>

                      <p class="p-news-card__category">
                        <?php
                        if (!empty($post_categories)) {
                          $cat_objects = get_the_category();
                          echo esc_html($cat_objects[0]->slug);
                        } else {
                          echo 'news';
                        }
                        ?>
                      </p>
                    </div>
                  </a>
                </div>

              <?php endwhile; ?>
            <?php else : ?>
              <p class="section__no-post" data-aos="fade-up">投稿が見つかりませんでした。</p>
            <?php endif; ?>

            <!-- ページネーション -->
            <div class="c-pagination js-stagger" id="news-pagi">
              <?php the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => '<i class="fa-solid fa-chevron-left boby-fa news-arrow"></i>',
                'next_text' => '<i class="fa-solid fa-chevron-right boby-fa news-arrow"></i>',
              )); ?>
            </div>
          </section>

          <!-- サイドバー -->
          <aside class="l-news__sidebar">
            <h5 class="l-news__sidebar-title" id="news-cat" data-aos="fade-up">category</h5>

            <ul class="l-news__category-list">
              <li class="l-news__category-item u-hover inview" data-cat="all">すべて</li>
              <li class="l-news__category-item u-hover inview" data-cat="campaign">キャンペーン</li>
              <li class="l-news__category-item u-hover inview" data-cat="news">お知らせ</li>
              <li class="l-news__category-item u-hover inview" data-cat="column">コラム</li>
            </ul>

          </aside>

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
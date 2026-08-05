<?php get_header(); ?>

<main class="l-news">
  <div class="sticky-area">
    <!-- Main Visual -->
    <section class="l-main-visual">
      <h1 class="l-main-visual__title" data-aos="fade-up">お知らせ</h1>
      <div class="sticky-wrapper"></div>



      <div class="contents-overlap-wrapper">
        <!-- カスタムパンくずリスト -->
        <div class="breadcrumb-container u-hover" data-aos="fade-up">
          <nav class="breadcrumb">
            <a href="<?php echo home_url('/'); ?>">ホーム</a>
            <span class="sep" data-aos="fade-up">&gt;</span>
            <span href="<?php echo home_url('/info'); ?>">ニュース一覧</span>
          </nav>
        </div>


        <!-- カテゴリタブ -->
        <section class="category-tabs">
          <button type="button" class="tab-btn active">すべて</button>
          <button type="button" class="tab-btn">お知らせ</button>
          <button type="button" class="tab-btn">活動紹介</button>
          <button type="button" class="tab-btn">メディア情報</button>
        </section>



        <!-- 記事リスト -->
        <div class="l-news__wrapper">
          <section class="l-news__content">


            <!-- 記事リスト -->
            <div class="l-news__wrapper">
              <section class="l-news__content">
                <?php if (have_posts()) : ?>
                  <div class="list">
                    <?php while (have_posts()) : the_post();
                      $post_categories = wp_get_post_categories(get_the_ID(), array('fields' => 'slugs'));
                      $classes = implode(' ', $post_categories);

                      // カテゴリのスラッグと日本語名を取得
                      $cat_slug = 'info';
                      $cat_name = 'お知らせ';
                      if (!empty($post_categories)) {
                        $cat_objects = get_the_category();
                        if (!empty($cat_objects)) {
                          $cat_slug = $cat_objects[0]->slug;
                          $cat_name = $cat_objects[0]->name;
                        }
                      }
                    ?>
                      <div data-aos="fade-up">
                        <a class="item <?php echo esc_attr($classes); ?>" href="<?php the_permalink(); ?>">

                          <!-- カテゴリバッジ -->
                          <span class="badge cat-<?php echo esc_attr($cat_slug); ?>">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8">
                              <path d="M18 8a6 6 0 10-12 0c0 7-3 9-3 9h18s-3-2-3-9" />
                              <path d="M13.7 21a2 2 0 01-3.4 0" />
                            </svg>
                            <?php echo esc_html($cat_name); ?>
                          </span>

                          <!-- 日付 -->
                          <div class="item-date">
                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                              <?php echo get_the_date('Y. m. d'); ?>
                            </time>
                          </div>

                          <!-- タイトル -->
                          <p class="item-title"><?php the_title(); ?></p>


                          <!-- 本文抜粋 -->
                          <p class="item-excerpt">
                            <?php echo esc_html(get_the_excerpt()); ?>
                            <p>👇これは今回用に作った５０文字制限</p>
                            <h2 class="p-news-article__title" data-aos="fade-up"><?php the_field('news_lead'); ?></h2>
                          </p>



                          <!-- こもれびのパーツ -->
                          <p>こもれびのパーツ</p>
                          <h2><?php the_title(); ?></h2>
                          <?php the_content(); ?>
                          <?php the_post_thumbnail(); ?>
                          <time datetime="<?php echo get_the_date('Y-m-d'); ?>" data-aos="fade-up">
                            <?php echo get_the_date('Y.m.d'); ?>
                          </time>



                        </a>
                      </div>
                    <?php endwhile; ?>
                  </div>
                <?php else : ?>
                  <p class="section__no-post" data-aos="fade-up">投稿が見つかりませんでした。</p>
                <?php endif; ?>
              </section>
            </div>
            <!-- ここまでループ -->


            <!-- ページネーション -->
            <div class="c-pagination js-stagger" id="news-pagi">
              <?php the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => '<i class="fa-solid fa-chevron-left boby-fa news-arrow"></i>',
                'next_text' => '<i class="fa-solid fa-chevron-right boby-fa news-arrow"></i>',
              )); ?>
            </div>
          </section>


        </div>
      </div>

    </section>
  </div>
</main>


<?php get_footer(); ?>
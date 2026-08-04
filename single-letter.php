<?php get_header(); ?>

<main class="l-single-news-single">
  <div class="sticky-area">
    <!-- Main Visual -->
    <section class="l-main-visual">
      <h1 class="l-main-visual__title" data-aos="fade-up">こもれびだより</h1>
      <div class="sticky-wrapper"></div>


      <div class="contents-overlap-wrapper">
        <!-- カスタムパンくずリスト -->
        <div class="breadcrumb-container">
          <nav class="breadcrumb  u-hover" data-aos="fade-up">
            <a href="<?php echo home_url('/'); ?>">ホーム</a>
            <span class="sep" data-aos="fade-up">｜</span>
            <a href="<?php echo home_url('/news'); ?>">こもれびだより一覧</a>
            <span class="sep" data-aos="fade-up">｜</span>
            <span data-aos="fade-up"><?php the_title(); ?></span>
          </nav>
        </div>


        <div class="l-single-news-single__wrapper single__wrapper" data-aos="fade-up">
          <section class="p-news-article">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

                <!-- アイキャッチ -->
                <div class="p-news-article__img" data-aos="fade-up">

                  <?php
                  $pc = get_field('news_image_pc');
                  $sp = get_field('news_image_sp');
                  ?>

                  <?php if (!empty($pc)) : ?>
                    <picture class="newsContents-img">
                      <?php if (!empty($sp)) : ?>
                        <source srcset="<?php echo esc_url($sp['url']); ?>" media="(max-width: 767px)">
                      <?php endif; ?>

                      <img
                        src="<?php echo esc_url($pc['url']); ?>"
                        alt="<?php echo esc_attr($pc['alt'] ?: get_the_title()); ?>"
                        class="p-news-article__img"
                        loading="lazy"
                        width="691" height="250">
                    </picture>

                  <?php else : ?>
                    <picture class="newsContents-img">
                      <source
                        srcset="<?php echo get_template_directory_uri(); ?>/img/no-image.webp"
                        type="image/webp">

                      <img
                        src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg"
                        alt=""
                        class="p-news-article__img"
                        loading="lazy"
                        width="691"
                        height="250">
                    </picture>
                  <?php endif; ?>

                </div>

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

          <!-- サイドバー -->
          <aside class="l-news__sidebar single__sidebar">
            <h5 class="l-news__sidebar-title" id="news-cat" data-aos="fade-up">category</h5>

            <ul class="l-news__category-list">

              <!-- すべて -->
              <li class="l-news__category-item u-hover <?php if (!is_category()) echo 'active'; ?>">
                <a href="<?php echo home_url('/news'); ?>">すべて</a>
              </li>

              <?php
              // 未分類を非表示
              $uncat = get_category_by_slug('uncategorized');

              $categories = get_categories([
                'exclude' => $uncat ? $uncat->term_id : ''
              ]);

              // 現在の記事のカテゴリ取得
              $current_cats = wp_get_post_categories(get_the_ID());

              foreach ($categories as $cat) :
                $is_active = in_array($cat->term_id, $current_cats) ? 'active' : '';
              ?>
                <li class="l-news__category-item u-hover <?php echo $is_active; ?>">
                  <a href="<?php echo get_category_link($cat->term_id); ?>">
                    <?php echo esc_html($cat->name); ?>
                  </a>
                </li>
              <?php endforeach; ?>

            </ul>
          </aside>


        </div>
      </div>

    </section>
  </div>
</main>




<?php get_footer(); ?>
<?php get_header(); ?>

<main class="l-single-news-single">
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
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/news_top-pc.jpg"
            alt="清潔感のあるサロンの雰囲気を表す様子"
            class="l-main-visual__img">
        </picture>
      </div>


      <div class="contents-overlap-wrapper">
        <!-- カスタムパンくずリスト -->
        <div class="breadcrumb-container">
          <nav class="breadcrumb  u-hover" data-aos="fade-up">
            <a href="<?php echo home_url('/'); ?>">ホーム</a>
            <span class="sep" data-aos="fade-up">｜</span>
            <a href="<?php echo home_url('/news'); ?>">ニュース一覧</a>
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










<!-- ==========================
     Smart Custom Fields
========================== -->


<main class="l-single-news-single">
  <div class="sticky-area">
    <!-- Main Visual -->
    <section class="l-main-visual">
      <h1 class="l-main-visual__title" data-aos="fade-up">Smart Custom Fields</h1>
      <div class="sticky-wrapper">
        <picture class="">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/news_top-sp.webp" media="(max-width: 767px)" type="image/webp">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/news_top-sp.jpg" media="(max-width: 767px)" type="image/jpeg">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/news_top-pc.webp" media="(min-width: 768px)" type="image/webp">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/news_top-pc.jpg" media="(min-width: 768px)" type="image/jpeg">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/news_top-pc.jpg"
            alt="清潔感のあるサロンの雰囲気を表す様子"
            class="l-main-visual__img">
        </picture>
      </div>


      <div class="contents-overlap-wrapper">
        <!-- カスタムパンくずリスト -->
        <div class="breadcrumb-container">
          <nav class="breadcrumb  u-hover" data-aos="fade-up">
            <a href="<?php echo home_url('/'); ?>">ホーム</a>
            <span class="sep" data-aos="fade-up">｜</span>
            <a href="<?php echo home_url('/news'); ?>">ニュース一覧</a>
            <span class="sep" data-aos="fade-up">｜</span>
            <span data-aos="fade-up"><?php the_title(); ?></span>
          </nav>
        </div>


        <div class="l-single-news-single__wrapper single__wrapper" data-aos="fade-up">
          <section class="p-news-article">

            <!-- ここに繰り返しフィールドのコンテンツ張り付ける -->
            <!-- ここに繰り返しフィールドのコンテンツ張り付ける -->
            <?php
            // 1つ目のACFブロックでループを使い切っているのでリセット💡
            rewind_posts();
            ?>

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
                  // SCFの画像フィールドは設定によって「添付ファイルID」か「URL文字列」が返る
                  $pc_raw = SCF::get('news_image_pc');
                  $sp_raw = SCF::get('news_image_sp');

                  $pc_url = is_numeric($pc_raw) ? wp_get_attachment_image_url($pc_raw, 'full') : $pc_raw;
                  $sp_url = is_numeric($sp_raw) ? wp_get_attachment_image_url($sp_raw, 'full') : $sp_raw;
                  $pc_alt = is_numeric($pc_raw) ? get_post_meta($pc_raw, '_wp_attachment_image_alt', true) : '';
                  ?>

                  <?php if (!empty($pc_url)) : ?>
                    <picture class="newsContents-img">
                      <?php if (!empty($sp_url)) : ?>
                        <source srcset="<?php echo esc_url($sp_url); ?>" media="(max-width: 767px)">
                      <?php endif; ?>

                      <img
                        src="<?php echo esc_url($pc_url); ?>"
                        alt="<?php echo esc_attr($pc_alt ?: get_the_title()); ?>"
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

                <!-- SCF繰り返し（グループ）フィールド -->
                <section class="p-news-article__body">

                  <!-- SCFに保存されている「news_sections」というデータをください -->
                   <p>SCFに保存されている「news_sections」というデータをください</p>
                   <p>リピーターフィールドとforeachはセット</p>
                  <?php
                  $news_sections = SCF::get('news_sections');

                  if (!empty($news_sections) && is_array($news_sections)) :
                    foreach ($news_sections as $row) :
                  ?>
                      <article class="p-news-article__section">
                        <?php if (!empty($row['subtitle'])) : ?>
                          <h5 class="p-news-article__subtitle" data-aos="fade-up">
                            <?php echo esc_html($row['subtitle']); ?>
                          </h5>
                        <?php endif; ?>

                        <?php if (!empty($row['text'])) : ?>
                          <div class="p-news-article__text" data-aos="fade-up">
                            <?php echo wp_kses_post($row['text']); ?>
                          </div>
                        <?php endif; ?>

                        <?php
                        // section_image はSCFの設定次第でID or URLが返る
                        $sec_img_raw = isset($row['section_image']) ? $row['section_image'] : '';
                        $sec_img_url = is_numeric($sec_img_raw) ? wp_get_attachment_image_url($sec_img_raw, 'large') : $sec_img_raw;
                        if (!empty($sec_img_url)) :
                        ?>
                          <div class="p-news-article__section-img" data-aos="fade-up">
                            <img
                              src="<?php echo esc_url($sec_img_url); ?>"
                              alt="<?php echo esc_attr($row['subtitle'] ?? ''); ?>"
                              loading="lazy">
                          </div>
                        <?php endif; ?>
                      </article>
                  <?php
                    endforeach;
                  endif;
                  ?>
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

          <!-- サイドバー貼るならここ -->



        </div>
      </div>

    </section>
  </div>
</main>











<?php get_footer(); ?>
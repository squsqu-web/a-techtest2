<?php get_header(); ?>

<main class="l-single-news-single">

  <!-- Main Visual -->
  <section class="l-main-visual">
    <h1 class="l-main-visual__title" data-aos="fade-up">news</h1>
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
  </section>


  <!-- カスタムパンくずリスト -->
  <div class="breadcrumb-container">
    <nav class="breadcrumb  u-hover" data-aos="fade-up">
      <a href="<?php echo home_url('/'); ?>">ホーム</a>
      <span class="sep" data-aos="fade-up">｜</span>
      <a href="<?php echo home_url('/news'); ?>">ニュース一覧</a>
      <span class="sep" data-aos="fade-up">｜</span>
      <span><?php single_cat_title(); ?></span>
    </nav>
  </div>

  <div class="l-single-news-single__wrapper single__wrapper" data-aos="fade-up">
    <section class="l-news__content">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

          <a href="<?php the_permalink(); ?>" class="section__item-link u-hover">
            <div class="p-news-card news-item ctgr-item" data-aos="fade-up">

              <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="p-news-card__date">
                <?php echo get_the_date('Y.m.d'); ?>
              </time>

              <h4 class="p-news-card__title">
                <?php the_title(); ?>
              </h4>

              <p class="p-news-card__category">
                <?php
                $cats = get_the_category();
                if (!empty($cats)) {
                  echo esc_html(ucfirst($cats[0]->slug));
                } else {
                  echo 'News';
                }
                ?>
              </p>

            </div>
          </a>

        <?php endwhile; ?>
      <?php else : ?>
        <p>投稿が見つかりませんでした。</p>
      <?php endif; ?>

      <!-- ページネーション -->
      <div class="c-pagination js-stagger" id="news-pagi">
        <?php the_posts_pagination(array(
          'mid_size'  => 2,
          'prev_text' => '<i class="fa-solid fa-chevron-left boby-fa news-arrow"></i>',
          'next_text' => '<i class="fa-solid fa-chevron-right boby-fa news-arrow"></i>',
        )); ?>
      </div>

      <!-- 戻るボタン -->
      <div class="single__back-btn-wrap" data-aos="fade-up">
        <div class="single__back-btn ctgt-back-btn">
          <a href="<?php echo home_url('/news'); ?>" class="single__back-linkbtn u-hover">
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
        <li class="l-news__category-item u-hover <?php if (!is_category()) echo 'active'; ?>" data-aos="fade-up">
          <a href="<?php echo home_url('/news'); ?>">すべて</a>
        </li>

        <?php
        $uncat = get_category_by_slug('uncategorized');

        $categories = get_categories([
          'exclude' => $uncat ? $uncat->term_id : ''
        ]);

        $current_cat_id = get_queried_object_id();

        foreach ($categories as $cat) :
          $is_active = ($cat->term_id == $current_cat_id) ? 'active' : '';
        ?>
          <li class="l-news__category-item u-hover <?php echo $is_active; ?>" data-aos="fade-up">
            <a href="<?php echo get_category_link($cat->term_id); ?>">
              <?php echo esc_html($cat->name); ?>
            </a>
          </li>
        <?php endforeach; ?>

      </ul>
    </aside>







  </div>


</main>

<?php get_footer(); ?>
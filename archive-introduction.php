<?php get_header(); ?>

<main class="l-news">

  <!-- Main Visual -->
  <section class="l-main-visual">
    <h1 class="l-main-visual__title" data-aos="fade-up">各園のご紹介</h1>


    <div class="contents-overlap-wrapper">
      <!-- カスタムパンくずリスト -->
      <div class="breadcrumb-container u-hover" data-aos="fade-up">
        <nav class="breadcrumb">
          <a href="<?php echo home_url('/'); ?>">ホーム</a>
          <span class="sep" data-aos="fade-up">｜</span>
          <span href="<?php echo home_url('/news'); ?>">各園のご紹介</span>
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


      </div>
    </div>

  </section>

</main>



<?php get_footer(); ?>
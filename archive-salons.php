<?php get_header(); ?>

<main class="l-salons">
  <div class="sticky-area">
    <!-- Main Visual -->
    <section class="l-main-visual">
      <h1 class="l-main-visual__title" data-aos="fade-up">salons</h1>
      <div class="sticky-wrapper">
        <picture class="">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/archive-salons_top-sp.webp" media="(max-width: 767px)" type="image/webp">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/archive-salons_top-sp.jpg" media="(max-width: 767px)" type="image/jpeg">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/archive-salons_top-pc.webp" media="(min-width: 768px)" type="image/webp">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/archive-salons_top-pc.jpg" media="(min-width: 768px)" type="image/jpeg">
          <img src="<?php echo get_template_directory_uri(); ?>/img/archive-salons_top-pc.jpg" alt="地図の画像" class="l-main-visual__img">
        </picture>
      </div>


      <div class="contents-overlap-wrapper">
        <!-- Breadcrumb -->
        <div class="breadcrumb-container inview">
          <nav class="breadcrumb u-hover">
            <a href="<?php echo home_url('/'); ?>">ホーム</a>
            <span class="sep">｜</span>
            <span href="<?php echo home_url('/salons'); ?>">店舗一覧</span>
          </nav>
        </div>

        <?php
        $prefectures = get_terms([
          'taxonomy'   => 'prefecture',
          'hide_empty' => false,
          'orderby'    => 'term_order',
          'order'      => 'ASC',
        ]);
        ?>

        <div class="prefectures-wrapper">
          <?php if (!empty($prefectures) && !is_wp_error($prefectures)) : ?>

            <!-- 都道府県ナビ -->
            <section class="p-prefectures">
              <h2 class="p-prefectures__title" data-aos="fade-up">prefectures</h2>
              <p class="p-prefectures__desc" data-aos="fade-up">都道府県</p>

              <div class="p-prefectures__list">
                <ul class="p-prefectures-list">
                  <?php foreach ($prefectures as $pref) : ?>

                    <?php
                    // 日本語名（ACF タクソノミーフィールド）
                    $pref_ja = get_field('prefecture_ja', 'prefecture_' . $pref->term_id);
                    ?>
                    <div class="inview">
                      <li class="p-prefectures-list__item u-hover">
                        <a href="#<?php echo esc_attr($pref->slug); ?>">
                          <span class="pref-en"><?php echo esc_html($pref->name); ?></span>
                          <?php if ($pref_ja) : ?>
                            <span class="pref-ja"><?php echo esc_html($pref_ja); ?></span>
                          <?php endif; ?>
                        </a>
                      </li>
                    </div>


                  <?php endforeach; ?>
                </ul>
              </div>
            </section>

            <!-- 都道府県ごとの店舗一覧 -->
            <?php foreach ($prefectures as $pref) : ?>

              <?php
              $args = [
                'post_type'      => 'salons',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
                'tax_query'      => [
                  [
                    'taxonomy' => 'prefecture',
                    'field'    => 'slug',
                    'terms'    => $pref->slug,
                  ],
                ],
              ];
              $salon_query = new WP_Query($args);
              ?>

              <?php if ($salon_query->have_posts()) : ?>
                <section id="<?php echo esc_attr($pref->slug); ?>" class="p-area" data-prefecture="<?php echo esc_attr($pref->name); ?>">
                  <h3 class="p-area__heading" data-aos="fade-up"><?php echo esc_html($pref->name); ?></h3>

                  <div class="p-area__list">
                    <?php while ($salon_query->have_posts()) : $salon_query->the_post(); ?>
                      <article class="area-info inview">
                        <a href="<?php the_permalink(); ?>" class="p-shop-card u-hover">

                          <!-- Google Map -->
                          <?php if (get_field('store_map')) : ?>
                            <div class="p-shop-card__map">
                              <?php the_field('store_map'); ?>
                            </div>
                          <?php endif; ?>

                          <!-- 店舗情報 -->
                          <div class="p-shop-card__info">
                            <?php if (get_field('store_name_en')) : ?>
                              <h4 class="p-shop-card__title"><?php the_field('store_name_en'); ?></h4>
                            <?php endif; ?>
                            <p class="p-shop-card__name"><?php the_field('store_name'); ?></p>
                            <address class="p-shop-card__address"><?php the_field('address'); ?></address>
                          </div>

                        </a>
                      </article>
                    <?php endwhile; ?>
                  </div>

                </section>
                <?php wp_reset_postdata(); ?>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>

    </section>
  </div>
</main>


<!-- スムーススクロール -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (!href || href === '#') return;
        const target = document.querySelector(href);
        if (!target) return;

        e.preventDefault();
        const headerOffset = 80;
        const position = target.getBoundingClientRect().top + window.pageYOffset - headerOffset;
        window.scrollTo({
          top: position,
          behavior: 'smooth'
        });
      });
    });
  });
</script>

<?php get_footer(); ?>
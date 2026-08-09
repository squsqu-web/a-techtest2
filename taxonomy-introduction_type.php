```php
<?php get_header(); ?>


<!-- メインビジュアル -->
<section class="l-main-visual">
  <div class="l-main-visual__title">
    <h1 class="l-main-visual__title-ja" data-aos="fade-up">各園のご紹介</h1>
    <p class="l-main-visual__title-en">introduction</p>
  </div>
</section>


<!-- カスタムパンくずリスト -->
<div
  class="breadcrumb-container u-hover"
  data-aos="fade-up">

  <nav class="breadcrumb">
    <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
    <span class="sep">&gt;</span>
    <a href="<?php echo esc_url(get_post_type_archive_link('introduction')); ?>">各園のご紹介</a>
    <span class="sep">&gt;</span>
    <span><?php single_term_title(); ?></span>
  </nav>
</div>


<!-- メインコンテンツ -->
<div class="contents-overlap-wrapper">
  <div class="l-introduction__inner">
    <section class="p-introduction-sec">

      <!-- タブ -->
      <div class="p-introduction-tab">
        <button
          type="button"
          class="p-introduction-tab__button is-active-introduction"
          data-tab="type">
          園の種類<br>から探す
        </button>

        <button
          type="button"
          class="p-introduction-tab__button"
          data-tab="area">
          都道府県<br>から探す
        </button>
      </div>


      <!-- 検索・園一覧 -->
      <div class="l-introduction__contents-wrap">
        <!-- 園の種類 -->
        <div
          class="p-introduction-filter is-active-introduction"
          data-panel="type">
          <?php
          $terms = get_terms(array(
            'taxonomy'   => 'introduction_type',
            'hide_empty' => true,
          ));

          if (!empty($terms) && !is_wp_error($terms)) :
            foreach ($terms as $term) :
          ?>

              <a href="<?php echo esc_url(get_term_link($term)); ?>"
                class="p-introduction-filter__button">
                <?php echo esc_html($term->name); ?>
              </a>
          <?php endforeach;
          endif; ?>
        </div>


        <!-- 都道府県 -->
        <div class="p-introduction-filter" data-panel="area">
          <?php
          $terms = get_terms(array(
            'taxonomy'   => 'introduction_area',
            'hide_empty' => true,
          ));

          if (!empty($terms) && !is_wp_error($terms)) :
            foreach ($terms as $term) :
          ?>

              <a href="<?php echo esc_url(get_term_link($term)); ?>"
                class="p-introduction-filter__button">
                <?php echo esc_html($term->name); ?>
              </a>
          <?php endforeach;
          endif; ?>
        </div>


        <!-- 園一覧 -->
        <?php if (have_posts()) : ?>
          <div class="p-introduction-list">
            <?php while (have_posts()) : the_post(); ?>
              <article
                class="p-introduction-list__item"
                data-aos="fade-up">
                <a class="p-introduction-card" href="<?php the_permalink(); ?>">

                  <!-- アイキャッチ -->
                  <div class="p-introduction-card__thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>

                      <img src="<?php echo esc_url(get_template_directory_uri() . '/img/no-image.webp'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                    <?php endif; ?>
                  </div>

                  <!-- カテゴリーボタンの箱 -->
                  <div class="p-introduction-card__wrap">

                    <!-- 園の種類 -->
                    <div class="p-introduction-card__type">
                      <?php
                      $types = get_the_terms(
                        get_the_ID(),
                        'introduction_type'
                      );
                      if ($types && !is_wp_error($types)) :
                      ?>

                        <span><?php echo esc_html($types[0]->name); ?></span>
                      <?php endif; ?>
                    </div>

                    <!-- 都道府県 -->
                    <div class="p-introduction-card__area">
                      <?php
                      $areas = get_the_terms(
                        get_the_ID(),
                        'introduction_area'
                      );

                      if ($areas && !is_wp_error($areas)) :
                      ?>

                        <span>
                          <?php echo esc_html($areas[0]->name); ?>
                        </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <!-- 園名 -->
                  <h2 class="p-introduction-card__title"><?php the_title(); ?></h2>
                </a>
              </article>
            <?php endwhile; ?>
          </div>
        <?php else : ?>

          <p class="c-no-post" data-aos="fade-up">投稿が見つかりませんでした。</p>
        <?php endif; ?>

        <!-- ページネーション -->
        <div class="c-pagination js-stagger" id="introduction-pagi" data-aos="fade-up">
          <?php
          the_posts_pagination(array(
            'mid_size'  => 2,
            'prev_text' => '<i class="fa-solid fa-chevron-left boby-fa introduction-arrow"></i>',
            'next_text' => '<i class="fa-solid fa-chevron-right boby-fa introduction-arrow"></i>',
          ));
          ?>
        </div>
      </div>
    </section>
  </div>
</div>


<!-- 採用情報セクション -->
<section class="p-recruit">
  <div class="p-recruit__inner">
    <div class="p-recruit__inner-wrap">

      <!-- アイコン -->
      <div class="p-recruit__icon-wrap">
        <img
          src="<?php echo esc_url(
                  get_template_directory_uri() . '/img/svg/recruit.svg'
                ); ?>"
          alt=""
          class="p-recruit__icon"
          loading="lazy"
          data-aos="fade-up">
      </div>


      <!-- 見出し -->
      <div class="p-recruit__heading">
        <h2 class="p-recruit__title">採用情報</h2>
        <p class="p-recruit__subtitle">recruit</p>
      </div>

      <!-- テキスト -->
      <p class="p-recruit__text">桜のこもれびキッズランドで働いてみませんか？</p>

    </div>


    <!-- リンクボタン -->
    <div class="p-recruit__link-wrap inview">
      <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="p-recruit__link-info c-button u-hover">採用情報</a>
      <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="p-recruit__link-entry c-button u-hover">エントリー</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
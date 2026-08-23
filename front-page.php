<?php get_header(); ?>

<main class="l-main__front">

  <!-- Hero -->
  <section class="p-hero inview">
    <picture class="p-hero__picture">
      <source media="(max-width: 767.98px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fv_bg-sp.webp" type="image/webp">
      <source media="(max-width: 767.98px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fv_bg-sp.png">
      <source srcset="<?php echo get_template_directory_uri(); ?>/img/fv_bg.webp" type="image/webp">
      <img class="p-hero__img" src="<?php echo get_template_directory_uri(); ?>/img/fv_bg.png" alt="園児が楽しく遊んでいる様子" fetchpriority="high">
    </picture>

    <div class="p-hero__text" data-aos="fade-up">
      <img src="<?php echo get_template_directory_uri(); ?>/img/svg/Vector.svg" alt="" class="l-header__icon" loading="lazy" data-aos="fade-up">
      <p class="p-hero__text-comment">一人ひとりの輝きが、<br>未来を彩る</p>
    </div>

  </section>

  <!-- お知らせボタン -->
  <?php
  $info_query = new WP_Query(array(
    'post_type'      => 'info',
    'posts_per_page' => 1,
    'orderby'        => 'date',
    'order'          => 'DESC',
  ));

  if ($info_query->have_posts()) :
    $info_query->the_post();
  ?>

    <!-- お知らせボタン -->
    <div class="p-hero-news inview">
      <a href="<?php the_permalink(); ?>" class="p-hero-news__link u-hover">
        <span class="p-hero-news__category">お知らせ</span>

        <h2 class="p-hero-news__title">
          <?php the_title(); ?>
        </h2>

        <time
          class="p-hero-news__date"
          datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
          <?php echo esc_html(get_the_date('Y年n月j日')); ?>
        </time>
      </a>
    </div>

  <?php
  endif;

  wp_reset_postdata();
  ?>


  <!-- Aboutセクション -->
  <section class="p-about">
    <div class="p-about__icon-wrap inview">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/svg/cherry-tree.svg"
        alt=""
        class="p-about__icon"
        loading="lazy">
    </div>

    <div class="p-about__heading">
      <h2 class="p-about__title inview">
        桜のこもれびキッズランドへ<br>
        ようこそ
      </h2>
      <p class="p-about__subtitle inview">welcome</p>
    </div>

    <div class="p-about__text-wrap">
      <p class="p-about__text inview">
        「こもれび」とは<br>
        風に揺れる木の葉によって生み出される光と影の揺らめきを表すことばです。<br>
        それはその瞬間に一度だけ存在します。
      </p>
      <p class="p-about__text inview">
        桜のこもれびキッズランドは、<br>
        子どもたち一人ひとりが独自の輝きを放つように、<br>
        大切な個性を伸ばす場所です。<br>
        温かく包み込むような雰囲気の中で、安心して成長できる環境を提供し、<br>
        笑顔あふれる毎日をお約束します。
      </p>
    </div>

  </section>


  <!-- 各園のご紹介セクション -->
  <section class="p-introduction">
    <div class="p-introduction__icon-wrap inview">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/svg/introduction-tree.svg"
        alt=""
        class="p-introduction__icon"
        loading="lazy">
    </div>

    <div class="p-introduction__heading">
      <h2 class="p-introduction__title inview">各園のご紹介</h2>
      <p class="p-introduction__subtitle inview">introduction</p>
    </div>


    <!-- 各都道府県へのリンク -->
    <?php
    $prefectures = [
      '東京都',
      '神奈川県',
      '埼玉県',
      '千葉県',
      '大阪府',
      '京都府',
    ];
    ?>

    <ul class="p-introduction__prefectures-list inview">
      <?php foreach ($prefectures as $prefecture) : ?>
        <?php
        $term = get_term_by('name', $prefecture, 'introduction_area');

        if ($term) :
        ?>
          <li class="p-introduction__prefectures-item u-hover">
            <a href="<?php echo esc_url(get_term_link($term)); ?>">
              <?php echo esc_html($prefecture); ?>
            </a>
          </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>






    <!-- リンクボタン -->
    <div class="inview">
      <a href="<?php echo home_url('/introduction'); ?>" class="p-introduction__link c-button u-hover">
        一覧ページへ
      </a>
    </div>
  </section>

  <!-- こもれびだよりセクション -->
  <section class="p-letter">
    <div class="p-letter__inner">
      <div class="p-letter__icon-wrap">
        <img
          src="<?php echo get_template_directory_uri(); ?>/img/svg/letter.svg"
          alt=""
          class="p-letter__icon inview"
          loading="lazy">
      </div>

      <div class="p-letter__heading">
        <h2 class="p-letter__title inview">こもれびだより</h2>
        <p class="p-letter__subtitle inview">letter</p>
      </div>

      <ul class="p-letter__list inview">
        <?php
        $args = array(
          'post_type' => 'letter',
          'posts_per_page' => 6,
          'orderby' => 'date',
          'order' => 'DESC',
        );

        $letter_query = new WP_Query($args);

        if ($letter_query->have_posts()) :
          while ($letter_query->have_posts()) :
            $letter_query->the_post();
        ?>
            <li class="p-letter__item u-hover">
              <a href="<?php the_permalink(); ?>" class="p-letter__card">

                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('large', array(
                    'class' => 'p-letter__image',
                    'alt' => get_the_title()
                  )); ?>
                <?php else : ?>
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/no-image.png"
                    alt=""
                    class="p-letter__image">
                <?php endif; ?>

                <div class="p-letter__card-wrap">
                  <h3 class="p-letter__card-title">
                    <?php the_title(); ?>
                    <!-- <?php the_field('title'); ?> -->
                  </h3>

                  <!-- テキスト -->
                  <div class="p-letter__card-text">
                    <?php the_field('letter_title'); ?>
                  </div>

                  <time class="p-letter__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                    <?php echo get_the_date('Y'); ?>ねん<?php echo get_the_date('n'); ?>がつ<?php echo get_the_date('j'); ?>にち
                  </time>
                </div>
              </a>
            </li>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </ul>

      <!-- リンクボタン -->
      <div class="inview p-letter__link-wrap">
        <a href="<?php echo home_url('/letter'); ?>" class="p-letter__link c-button u-hover">
          もっとみる
        </a>
      </div>
    </div>
  </section>


  <!-- 採用情報セクション -->
  <section class="p-recruit">
    <div class="p-recruit__inner">
      <div class="p-recruit__inner-wrap">
        <div class="p-recruit__icon-wrap">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/svg/recruit.svg"
            alt=""
            class="p-recruit__icon"
            loading="lazy"
            data-aos="fade-up">
        </div>

        <div class="p-recruit__heading">
          <h2 class="p-recruit__title inview">採用情報</h2>
          <p class="p-recruit__subtitle inview">recruit</p>
        </div>
        <p class="p-recruit__text inview">桜のこもれびキッズランドで<br class="sp_only">働いてみませんか？</p>
      </div>

      <!-- リンクボタン -->
      <div class="p-recruit__link-wrap inview">
        <a href="<?php echo home_url('/recruit'); ?>" class="p-recruit__link-info c-button u-hover">
          採用情報
        </a>
        <a href="<?php echo home_url('/recruit#recruit-entry'); ?>" class="p-recruit__link-entry c-button u-hover">
          エントリー
        </a>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>
<?php get_header(); ?>

<main class="l-main__front">

  <!-- Hero -->
  <section class="p-hero">
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


  <!-- Aboutセクション -->
  <section class="p-about">
    <div class="p-about__icon-wrap">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/svg/cherry-tree.svg"
        alt=""
        class="p-about__icon"
        loading="lazy"
        data-aos="fade-up">
    </div>

    <div class="p-about__heading">
      <h2 class="p-about__title">
        桜のこもれびキッズランドへ<br>
        ようこそ
      </h2>
      <p class="p-about__subtitle">welcome</p>
    </div>

    <div class="p-about__text-wrap">
      <p class="p-about__text">
        「こもれび」とは<br>
        風に揺れる木の葉によって生み出される光と影の揺らめきを表すことばです。<br>
        それはその瞬間に一度だけ存在します。
      </p>
      <p class="p-about__text">
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
    <div class="p-introduction__icon-wrap">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/svg/introduction-tree.svg"
        alt=""
        class="p-introduction__icon"
        loading="lazy"
        data-aos="fade-up">
    </div>

    <div class="p-introduction__heading">
      <h2 class="p-introduction__title">各園のご紹介</h2>
      <p class="p-introduction__subtitle">introduction</p>
    </div>

    <ul class="p-introduction__prefectures-list">
      <li class="p-introduction__prefectures-item">東京都</li>
      <li class="p-introduction__prefectures-item">神奈川県</li>
      <li class="p-introduction__prefectures-item">埼玉県</li>
      <li class="p-introduction__prefectures-item">千葉県</li>
      <li class="p-introduction__prefectures-item">大阪府</li>
      <li class="p-introduction__prefectures-item">京都府</li>
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
          class="p-letter__icon"
          loading="lazy"
          data-aos="fade-up">
      </div>

      <div class="p-letter__heading">
        <h2 class="p-letter__title">こもれびだより</h2>
        <p class="p-letter__subtitle">letter</p>
      </div>

      <ul class="p-letter__list">
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
            <li class="p-letter__item">
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
                  <time class="p-letter__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                    <?php echo get_the_date('Y.m.d'); ?>
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
          <h2 class="p-recruit__title">採用情報</h2>
          <p class="p-recruit__subtitle">recruit</p>
        </div>
        <p class="p-recruit__text">桜のこもれびキッズランドで働いてみませんか？</p>
      </div>

      <!-- リンクボタン -->
      <div class="p-recruit__link-wrap inview">
        <a href="<?php echo home_url('/recruit'); ?>" class="p-recruit__link-info c-button u-hover">
          採用情報
        </a>
        <a href="<?php echo home_url('/recruit'); ?>" class="p-recruit__link-entry c-button u-hover">
          エントリー
        </a>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>
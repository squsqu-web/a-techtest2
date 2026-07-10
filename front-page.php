<?php get_header(); ?>

<main class="l-main">

  <!-- Hero -->
  <section class="p-hero">
    <picture class="p-hero__picture">

      <source
        srcset="<?php echo get_template_directory_uri(); ?>/img/fv_bg-sp.webp"
        media="(max-width:767.98px)"
        type="image/webp">

      <source
        srcset="<?php echo get_template_directory_uri(); ?>/img/fv_bg-sp.jpg"
        media="(max-width:767.98px)"
        type="image/jpeg">

      <source
        srcset="<?php echo get_template_directory_uri(); ?>/img/fv_bg-pc.webp"
        media="(min-width: 768px)"
        type="image/webp">

      <source
        srcset="<?php echo get_template_directory_uri(); ?>/img/fv_bg-pc.jpg"
        media="(min-width: 768px)"
        type="image/jpeg">

      <img
        src="<?php echo get_template_directory_uri(); ?>/img/fv_bg-pc.jpg"
        alt="綺麗な女性の様子"
        width="865"
        height="680"
        class="p-hero__img"
        fetchpriority="high">
    </picture>

    <p class="p-hero__text" data-aos="fade-up">
      a-tech_test2<br class="sp_only">美しい。a-tech_test2
    </p>

  </section>

  <!-- News -->
  <section class="p-news">
    <div class="p-news__header">
      <h2 class="c-heading-en" data-aos="fade-up">news</h2>
      <p class="c-heading-ja" data-aos="fade-up">お知らせ</p>
    </div>

    <ul class="o-list-reset p-news__list">
      <?php
      $args = array(
        'post_type' => 'news',
        'posts_per_page' => 3,
      );
      $the_query = new WP_Query($args);
      ?>

      <?php if ($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li class="p-news__item">
            <a href="<?php the_permalink(); ?>" class="u-hover">
              <div data-aos="fade-up">
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="p-news__date">
                  <?php echo get_the_date('Y.m.d'); ?>
                </time>
              </div>


              <h3 class="p-news__heading" data-aos="fade-up"><?php the_title(); ?></h3>

              <?php
              // カテゴリーを取得
              $terms = get_the_terms(get_the_ID(), 'category');

              if ($terms && !is_wp_error($terms)) :

                $term_slugs = wp_list_pluck($terms, 'slug');
                $term_list = implode(', ', $term_slugs);
              ?>
                <p class="p-news__category inview">
                  <?php echo esc_html($term_list); ?>
                </p>
              <?php endif; ?>

            </a>
          </li>
        <?php endwhile; ?>
      <?php else: ?>
        <p>投稿がまだありません</p>
      <?php endif;
      wp_reset_postdata(); ?>
    </ul>

    <div class="p-news__action" data-aos="fade-up">
      <a href="<?php echo home_url('/news'); ?>" class="c-button c-button--sm u-hover">
        View All
      </a>
    </div>

  </section>

  <!-- Concept -->
  <section class="p-concept-sec">
    <div class="concept-picture">
      <picture class="p-concept__picture">

        <source
          srcset="<?php echo get_template_directory_uri(); ?>/img/top-concept_01-sp.webp"
          media="(max-width:767.98px)"
          type="image/webp">

        <source
          srcset="<?php echo get_template_directory_uri(); ?>/img/top-concept_01-sp.jpg"
          media="(max-width:767.98px)"
          type="image/jpeg">

        <source
          srcset="<?php echo get_template_directory_uri(); ?>/img/top-concept_01-pc.webp"
          media="(min-width: 768px)"
          type="image/webp">

        <source
          srcset="<?php echo get_template_directory_uri(); ?>/img/top-concept_01-pc.jpg"
          media="(min-width: 768px)"
          type="image/jpeg">

        <img
          src="<?php echo get_template_directory_uri(); ?>/img/top-concept_01-pc.jpg"
          alt="">
      </picture>
    </div>
    <div class="p-concept__header">
      <h2 class="p-concept__title" data-aos="fade-up">concept</h2>
      <p class="p-concept__subtitle" data-aos="fade-up">コンセプト</p>
      <p class="p-concept__lead pc_only" data-aos="fade-up">洗練されたワンランク上の女性を目指す</p>
      <p class="p-concept__lead sp_only" data-aos="fade-up">洗練された<br>ワンランク上の<br>女性を目指す</p>
    </div>
    <div class="p-concept__body">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/top-concept_02-sp.webp" media="(max-width:767.98px)" type="image/webp">
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/top-concept_02-sp.jpg" media="(max-width:767.98px)" type="image/jpeg">
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/top-concept_02-pc.webp" media="(min-width: 768px)" type="image/webp">
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/top-concept_02-pc.jpg" media="(min-width: 768px)" type="image/jpeg">
        <!-- フォールバック -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/top-concept_02-pc.jpg" alt="受付をしている様子" class="p-concept__body__img" loading="lazy" width="540" height="211" data-aos="fade-up">
      </picture>
      <p class="p-concept__text  pc_only" data-aos="fade-up">バレンタインローズでは脱毛の完了はゴールではなく、<br>あくまでもお客様がワンランク上の女性に近づくための<br>第一歩と考えています。<br>「洗練されたワンランク上の女性を目指す」<br>というコンセプトのもと、<br>スタッフが徹底したホスピタリティによりお客様をもてなし、<br>脱毛を通してお客様が理想とする女性像に導きます。</p>
      <p class="p-concept__text  sp_only" data-aos="fade-up">バレンタインローズでは脱毛の完了は<br>ゴールではなく、あくまでもお客様が<br>ワンランク上の女性に近づくための<br>第一歩と考えています。<br>「洗練されたワンランク上の女性を目指す」というコンセプトのもと、<br>スタッフが徹底したホスピタリティによりお客様をもてなし、脱毛を通してお客様が理想とする女性像に導きます。</p>
    </div>

    <div class="parent-viewmore" data-aos="fade-up">
      <a href="<?php echo home_url('/concept'); ?>" class="viewmore-down u-hover">
        <span class="viewmore-down__text">View More</span>
        <span class="viewmore-down__arrow"></span>
      </a>
    </div>

  </section>


  <!-- Feature -->
  <section class="p-feature" data-aos="fade-up">
    <h2 class="p-feature__title">feature</h2>
    <div class="swiper p-feature__swiper">
      <div class="swiper-wrapper">

        <!-- スライド3 -->
        <!-- <div class="swiper-slide p-feature__slide">
          <ul class="p-feature__list-inner">
            <li class="p-feature__item">
              <div class="p-feature__item-inner">
                <ul class="p-feature__sub-list">
                  <li data-aos="fade-up" class="item-text">高性能の機械を導入</li>
                  <li data-aos="fade-up" class="item-text">痛みを最小限まで抑えた施術</li>
                  <li data-aos="fade-up" class="item-text">1回の施術は<br>入店～退店まで約30分</li>
                </ul>
              </div>
            </li>
            <li class="p-feature__item">
              <picture class="p-feature__picture">
                <img src="<?php echo get_template_directory_uri(); ?>/img/feature_02-pc.jpg" alt="テスト3画像" class="p-feature__img" width="450" height="630" loading="lazy" data-aos="fade-up">
              </picture>
            </li>
            <li class="p-feature__item">
              <h3 class="p-feature__item__sm-title" data-aos="fade-up">feature Ⅲ</h3>
              <h4 class="p-feature__item__title" data-aos="fade-up">1回の施術は入店～退店まで約30分</h4>
              <p class="p-feature__text" data-aos="fade-up">
                施術自体は15分程度。初回はカウンセリングもあるので多少お時間をいただきますが、2回目以降は薄化粧で来ていただくと、入店から退店まで30分弱で済みます。
              </p>
            </li>
          </ul>
        </div> -->

        <!-- スライド1 -->
        <div class="swiper-slide p-feature__slide">
          <ul class="p-feature__list-inner">
            <li class="p-feature__item">
              <div class="p-feature__item-inner">
                <ul class="p-feature__sub-list">
                  <li data-aos="fade-up" class="item-text">高性能の機械を導入</li>
                  <li data-aos="fade-up" class="item-text">痛みを最小限まで抑えた施術</li>
                  <li data-aos="fade-up" class="item-text">1回の施術は<br>入店～退店まで約30分</li>
                </ul>
              </div>

            </li>
            <li class="p-feature__item">
              <picture class="p-feature__picture">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_03-sp.webp"
                  media="(max-width:767.98px)"
                  type="image/webp">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_03-sp.jpg"
                  media="(max-width:767.98px)"
                  type="image/jpeg">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_03-pc.webp"
                  media="(min-width: 768px)"
                  type="image/webp">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_03-pc.jpg"
                  media="(min-width: 768px)"
                  type="image/jpeg">

                <img
                  src="<?php echo get_template_directory_uri(); ?>/img/feature_03-pc.jpg"
                  alt="背景画像"
                  width="450"
                  height="630"
                  class="p-feature__img"
                  loading="lazy">
              </picture>
            </li>
            <li class="p-feature__item">
              <h3 class="p-feature__item__sm-title" data-aos="fade-up">feature I</h3>
              <h4 class="p-feature__item__title" data-aos="fade-up">高性能の機械を導入</h4>
              <p class="p-feature__text" data-aos="fade-up">
                美肌に特化したフィルターを使用し<br>
                真皮層に働きかけることで<br>
                コラーゲンの生成を促進させます。<br>
                また、むくみの原因である溜まった<br>
                リンパを流すことで顔のむくみを取り、<br>
                若々しいお肌と小顔効果が期待できます。
              </p>
            </li>
          </ul>
        </div>

        <!-- スライド2 -->
        <div class="swiper-slide p-feature__slide">
          <ul class="p-feature__list-inner">
            <li class="p-feature__item">
              <div class="p-feature__item-inner">
                <ul class="p-feature__sub-list">
                  <li data-aos="fade-up" class="item-text">高性能の機械を導入</li>
                  <li data-aos="fade-up" class="item-text">痛みを最小限まで抑えた施術</li>
                  <li data-aos="fade-up" class="item-text">1回の施術は<br>入店～退店まで約30分</li>
                </ul>
              </div>
            </li>
            <li class="p-feature__item">
              <picture class="p-feature__picture">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_01-sp.webp"
                  media="(max-width:767.98px)"
                  type="image/webp">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_01-sp.jpg"
                  media="(max-width:767.98px)"
                  type="image/jpeg">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_01-pc.webp"
                  media="(min-width: 768px)"
                  type="image/webp">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_01-pc.jpg"
                  media="(min-width: 768px)"
                  type="image/jpeg">

                <img
                  src="<?php echo get_template_directory_uri(); ?>/img/feature_01-pc.jpg"
                  alt="テスト2画像"
                  class="p-feature__img"
                  width="450"
                  height="630"
                  loading="lazy">
              </picture>
            </li>
            <li class="p-feature__item">
              <h3 class="p-feature__item__sm-title" data-aos="fade-up">feature Ⅱ</h3>
              <h4 class="p-feature__item__title" data-aos="fade-up">痛みを最小限まで抑えた施術</h4>
              <p class="p-feature__text" data-aos="fade-up">
                毛質・毛量や脱毛箇所などに合わせて<br>オーダーメイドの脱毛プランを作成し、<br>メンズ専用の脱毛器を使用して施術します。
              </p>
            </li>
          </ul>
        </div>

        <!-- スライド3 -->
        <div class="swiper-slide p-feature__slide">
          <ul class="p-feature__list-inner">
            <li class="p-feature__item">
              <div class="p-feature__item-inner">
                <ul class="p-feature__sub-list">
                  <li data-aos="fade-up" class="item-text">高性能の機械を導入</li>
                  <li data-aos="fade-up" class="item-text">痛みを最小限まで抑えた施術</li>
                  <li data-aos="fade-up" class="item-text">1回の施術は<br>入店～退店まで約30分</li>
                </ul>
              </div>
            </li>
            <li class="p-feature__item">
              <picture class="p-feature__picture">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_02-sp.webp"
                  media="(max-width:767.98px)"
                  type="image/webp">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_02-sp.jpg"
                  media="(max-width:767.98px)"
                  type="image/jpeg">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_02-pc.webp"
                  media="(min-width: 768px)"
                  type="image/webp">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_02-pc.jpg"
                  media="(min-width: 768px)"
                  type="image/jpeg">

                <img
                  src="<?php echo get_template_directory_uri(); ?>/img/feature_02-pc.jpg"
                  alt="テスト3画像"
                  class="p-feature__img"
                  width="450"
                  height="630"
                  loading="lazy">
              </picture>
            </li>
            <li class="p-feature__item">
              <h3 class="p-feature__item__sm-title" data-aos="fade-up">feature Ⅲ</h3>
              <h4 class="p-feature__item__title" data-aos="fade-up">1回の施術は入店～退店まで約30分</h4>
              <p class="p-feature__text" data-aos="fade-up">
                施術自体は15分程度。<br>初回はカウンセリングもあるので<br>多少お時間をいただきますが、<br>2回目以降は薄化粧で来ていただくと、<br>入店から退店まで30分弱で済みます。
              </p>
            </li>
          </ul>
        </div>

        <!-- スライド1 -->
        <div class="swiper-slide p-feature__slide">
          <ul class="p-feature__list-inner">
            <li class="p-feature__item">
              <div class="p-feature__item-inner">
                <ul class="p-feature__sub-list">
                  <li data-aos="fade-up" class="item-text">高性能の機械を導入</li>
                  <li data-aos="fade-up" class="item-text">痛みを最小限まで抑えた施術</li>
                  <li data-aos="fade-up" class="item-text">1回の施術は<br>入店～退店まで約30分</li>
                </ul>
              </div>

            </li>
            <li class="p-feature__item">
              <picture class="p-feature__picture">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_03-sp.webp"
                  media="(max-width:767.98px)"
                  type="image/webp">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_03-sp.jpg"
                  media="(max-width:767.98px)"
                  type="image/jpeg">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_03-pc.webp"
                  media="(min-width: 768px)"
                  type="image/webp">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_03-pc.jpg"
                  media="(min-width: 768px)"
                  type="image/jpeg">

                <img
                  src="<?php echo get_template_directory_uri(); ?>/img/feature_03-pc.jpg"
                  alt="背景画像"
                  width="450"
                  height="630"
                  class="p-feature__img"
                  loading="lazy">
              </picture>
            </li>
            <li class="p-feature__item">
              <h3 class="p-feature__item__sm-title" data-aos="fade-up">feature I</h3>
              <h4 class="p-feature__item__title" data-aos="fade-up">高性能の機械を導入</h4>
              <p class="p-feature__text" data-aos="fade-up">
                美肌に特化したフィルターを使用し<br>
                真皮層に働きかけることで<br>
                コラーゲンの生成を促進させます。<br>
                また、むくみの原因である溜まった<br>
                リンパを流すことで顔のむくみを取り、<br>
                若々しいお肌と小顔効果が期待できます。
              </p>
            </li>
          </ul>
        </div>

        <!-- スライド2 -->
        <div class="swiper-slide p-feature__slide">
          <ul class="p-feature__list-inner">
            <li class="p-feature__item">
              <div class="p-feature__item-inner">
                <ul class="p-feature__sub-list">
                  <li data-aos="fade-up" class="item-text">高性能の機械を導入</li>
                  <li data-aos="fade-up" class="item-text">痛みを最小限まで抑えた施術</li>
                  <li data-aos="fade-up" class="item-text">1回の施術は<br>入店～退店まで約30分</li>
                </ul>
              </div>
            </li>
            <li class="p-feature__item">
              <picture class="p-feature__picture">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_01-sp.webp"
                  media="(max-width:767.98px)"
                  type="image/webp">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_01-sp.jpg"
                  media="(max-width:767.98px)"
                  type="image/jpeg">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_01-pc.webp"
                  media="(min-width: 768px)"
                  type="image/webp">

                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/img/feature_01-pc.jpg"
                  media="(min-width: 768px)"
                  type="image/jpeg">

                <img
                  src="<?php echo get_template_directory_uri(); ?>/img/feature_01-pc.jpg"
                  alt="テスト2画像"
                  class="p-feature__img"
                  width="450"
                  height="630"
                  loading="lazy">
              </picture>
            </li>
            <li class="p-feature__item">
              <h3 class="p-feature__item__sm-title" data-aos="fade-up">feature Ⅱ</h3>
              <h4 class="p-feature__item__title" data-aos="fade-up">痛みを最小限まで抑えた施術</h4>
              <p class="p-feature__text" data-aos="fade-up">
                毛質・毛量や脱毛箇所などに合わせてオーダーメイドの脱毛プランを作成し、メンズ専用の脱毛器を使用して施術します。
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!-- Price -->
  <section class="c-pricing">
    <article class="c-pricing__header">
      <h2 class="c-pricing__title" data-aos="fade-up">price menu</h2>
      <p class="c-pricing__subtitle" data-aos="fade-up">メニュー料金</p>
    </article>

    <div class="c-pricing__content">

      <div class="c-pricing__row c-pricing__row--top">
        <div class="c-pricing__col c-pricing__col--top-left">
          <a href="<?php echo home_url('/price/#body'); ?>" class="u-hover">
            <div class="fa-arrow">
              <div class="price-item-arrow">
                <h3 class="c-pricing__item-title" data-aos="fade-up">body</h3>
                <p class="c-pricing__item-subtitle c-pricing__body" data-aos="fade-up">体脱毛</p>
              </div>
              <i class="fa-solid fa-chevron-right front-arrow" data-aos="fade-up"></i>
            </div>
          </a>
        </div>

        <div class="c-pricing__col c-pricing__col--top-right">
          <a href="<?php echo home_url('/price/#V-line'); ?>" class="u-hover">
            <div class="fa-arrow">
              <div class="price-item-arrow">
                <h3 class="c-pricing__item-title v-line-title" data-aos="fade-up">V-line</h3>
                <p class="c-pricing__item-subtitle c-pricing__vio" data-aos="fade-up">VIO脱毛</p>
              </div>
              <i class="fa-solid fa-chevron-right front-arrow" data-aos="fade-up"></i>
            </div>
          </a>
        </div>
      </div>

      <div class="c-pricing__row c-pricing__row--center">
        <div class="c-pricing__col c-pricing__col--center-left">
          <a href="<?php echo home_url('/price/#custom'); ?>" class="u-hover">
            <div class="fa-arrow">
              <div class="price-item-arrow">
                <h3 class="c-pricing__item-title" data-aos="fade-up">custom</h3>
                <p class="c-pricing__item-subtitle c-pricing__custom" data-aos="fade-up">オーダーメイド</p>
              </div>
              <i class="fa-solid fa-chevron-right front-arrow" data-aos="fade-up"></i>
            </div>
          </a>
        </div>

        <div class="c-pricing__col c-pricing__col--center-right">
          <a href="<?php echo home_url('/price/#Set'); ?>" class="u-hover">
            <div class="fa-arrow">
              <div class="price-item-arrow">
                <h3 class="c-pricing__item-title" data-aos="fade-up">set</h3>
                <p class="c-pricing__item-subtitle c-pricing__set" data-aos="fade-up">セット脱毛</p>
              </div>
              <i class="fa-solid fa-chevron-right front-arrow" data-aos="fade-up"></i>
            </div>
          </a>
        </div>
      </div>

      <div class="c-pricing__row c-pricing__row--center">

        <div class="c-pricing__row c-pricing__row--bottom">
          <a href="<?php echo home_url('/price'); ?>" class="u-hover">
            <div class="fa-arrow bottom-none">
              <div class="price-item-arrow">
                <h3 class="c-pricing__item-title" data-aos="fade-up">all</h3>
                <p class="c-pricing__item-subtitle c-pricing__all" data-aos="fade-up">全てのメニュー</p>
              </div>
              <i class="fa-solid fa-chevron-right front-arrow" data-aos="fade-up"></i>
            </div>
          </a>
        </div>
        <div class="c-pricing__row c-pricing__row--bottom bottom-last pc_only"></div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="p-faq">
    <div class="faq_inner">

      <article class="p-faq__header">
        <h2 class="c-heading" data-aos="fade-up">faq</h2>
        <p class="c-heading-sub" data-aos="fade-up">よくある質問</p>
      </article>

      <div class="c-accordion">
        <div class="c-accordion__item u-hover">
          <button class="c-accordion__question accordion-header active" data-aos="fade-up">
            脱毛後にまた毛が生えてくることはありますか？
            <span class="accordion-icon">▼</span>
          </button>
          <div class="c-accordion__answer accordion-content" data-aos="fade-up">
            <p>出産や生理といったホルモンバランスの変化によって、脱毛後も体毛が生えてくるケースがあります</p>
          </div>
        </div>

        <div class="c-accordion__item u-hover">
          <button class="c-accordion__question accordion-header" data-aos="fade-up">
            脱毛すると汗の量が増えると聞いたことがあるのですが本当ですか？
            <span class="accordion-icon">▼</span>
          </button>
          <div class="c-accordion__answer accordion-content" data-aos="fade-up">
            <p>脱毛によって発汗量が増えるというエビデンスはありませんが、毛がなくなることによって汗が直接衣服に触れることで、汗が増えたように感じることはあるかもしれません。</p>
          </div>
        </div>

        <div class="c-accordion__item u-hover">
          <button class="c-accordion__question accordion-header" data-aos="fade-up">
            コースの勧誘やセールスなどはありますか？
            <span class="accordion-icon">▼</span>
          </button>
          <div class="c-accordion__answer accordion-content" data-aos="fade-up">
            <p>お客様の毛質や毛量、ご予算等をお伺いして最適な脱毛プランを提案しますが、最終的にはお客様が無理なく通える範囲のコースを、ご自身で決定いただきたいと考えています。 特に、初めての脱毛の場合は不安になる気持ちもよくわかりますので、その場で契約せずにゆっくりと考えていただく時間も大切です。 バレンタインローズでは、無理な勧誘やしつこい営業行為は一切行いませんので、安心して無料体験にお越しください。</p>
          </div>
        </div>

        <div class="c-accordion__item u-hover">
          <button class="c-accordion__question accordion-header" data-aos="fade-up">
            脱毛することで毛が濃くなることはありますか？
            <span class="accordion-icon">▼</span>
          </button>
          <div class="c-accordion__answer accordion-content" data-aos="fade-up">
            <p>脱毛によって毛が濃くなることはありません。 ただし、硬毛化という現象によって一時的に体毛が濃くなるケースが稀にありますが、施術を進めていくことで少しずつ体毛は薄くなっていきます。</p>
          </div>
        </div>

        <div class="c-accordion__item u-hover">
          <button class="c-accordion__question accordion-header" data-aos="fade-up">
            脱毛箇所を剃毛することで、かえって体毛が太くなることはありますか？
            <span class="accordion-icon">▼</span>
          </button>
          <div class="c-accordion__answer accordion-content" data-aos="fade-up">
            <p>剃毛によって体毛が太くなることはありません。剃毛すると体毛の断面が見えやすくなることによって太く見えることはありますが、施術を重ねるたびに少しずつ薄く・細くなっていきます。</p>
          </div>
        </div>
      </div>

    </div>

  </section>

</main>

<?php get_footer(); ?>
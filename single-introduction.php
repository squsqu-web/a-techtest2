<?php get_header(); ?>

<main class="l-single-introduction">

  <!-- Main Visual -->
  <section class="l-main-visual">
    <div class="l-main-visual__title">
      <h1 class="l-main-visual__title-ja inview">各園のご紹介</h1>
      <p class="l-main-visual__title-en inview">introduction</p>
    </div>
  </section>

  <!-- カスタムパンくずリスト -->
  <div class="breadcrumb-container">
    <nav class="breadcrumb u-hover">
      <a href="<?php echo esc_url(home_url('/')); ?>">TOP</a>
      <span class="sep" data-aos="fade-up">&gt;</span>
      <a href="<?php echo esc_url(home_url('/introduction')); ?>">各園のご紹介</a>
      <span class="sep" data-aos="fade-up">&gt;</span>
      <span data-aos="fade-up"><?php the_title(); ?></span>
    </nav>
  </div>


  <!-- 紹介文セクション -->
  <section class="l-introduction-single">
    <div class="l-introduction-single__inner">

      <!-- アイキャッチ -->
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('full', array(
          'class'   => 'p-introduction-single__thumbnail',
          'alt'     => get_the_title(),
          'loading' => 'lazy'
        )); ?>
      <?php else : ?>
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/img/no-image.webp'); ?>"
          alt="<?php echo esc_attr(get_the_title()); ?>"
          class="p-introduction-single__thumbnail inview">
      <?php endif; ?>


      <!-- 紹介文 -->
      <div class="p-introduction-single__content">
        <?php if (get_field('introduction_title')) : ?>
          <h2 class="p-introduction-single__title inview">
            <?php the_field('introduction_title'); ?>
          </h2>
        <?php endif; ?>

        <?php if (get_field('introduction_text')) : ?>
          <p class="p-introduction-single__text inview">
            <?php the_field('introduction_text'); ?>
          </p>
        <?php endif; ?>
      </div>

    </div>
  </section>


  <!-- 園の様子 -->
  <section class="p-introduction-single-gallery">

    <!-- アイコン -->
    <div class="p-introduction-single__icon-wrap">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/svg/camera.svg"
        alt=""
        class="p-introduction-single__icon"
        loading="lazy"
        data-aos="fade-up">
    </div>

    <!-- セクションタイトル -->
    <div class="p-introduction-single-gallery__heading">
      <h2 class="p-introduction-single-gallery__title inview">園の様子</h2>
      <p class="p-introduction-single-gallery__subtitle inview">inside</p>
    </div>

    <!-- 無限ループ表示エリア -->
    <div class="p-introduction-single-gallery__gallery">
      <div class="p-introduction-single-gallery__track">

        <?php
        // 各園ごとの登録画像
        $introduction_gallery = get_field('introduction_gallery');

        if ($introduction_gallery) :
          foreach ($introduction_gallery as $image) :
        ?>
            <img
              src="<?php echo esc_url($image['url']); ?>"
              alt="<?php echo esc_attr($image['alt']); ?>"
              loading="lazy"
              data-aos="fade-up">
        <?php
          endforeach;
        endif;
        ?>


        <?php

        //  全園共通の固定画像
        $gallery_default_images = [
          'recruit-bg.webp',
          'loop-Inside1.webp',
          'loop-Inside2.webp',
          'loop-Inside3.webp',
          'loop-Inside4.webp',
          'loop-Inside5.webp',
        ];

        foreach ($gallery_default_images as $image) :
        ?>
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/img/' . $image); ?>"
            alt=""
            loading="lazy"
            data-aos="fade-up">
        <?php endforeach; ?>

      </div>
    </div>

  </section>


  <!-- 園長からのメッセージ -->
  <section class="p-introduction-single-message">

    <!-- アイコン -->
    <div class="p-introduction-single-message__icon-wrap inview">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/svg/mail-open.svg"
        alt="アイコン"
        class="p-introduction-single__icon"
        loading="lazy">
    </div>

    <!-- セクションタイトル -->
    <div class="p-introduction-single-message__heading">
      <h2 class="p-introduction-single-message__title inview">園長からのメッセージ</h2>
      <p class="p-introduction-single-message__subtitle inview">message</p>
    </div>

    <div class="p-introduction-single-message__content">
      <!-- 園長の写真ACF -->
      <?php
      $principal_image = get_field('introduction_principal_image');

      if ($principal_image) {
        $principal_image_url = $principal_image;
      } else {
        $principal_image_url = get_template_directory_uri() . '/img/staff/introduction-message.webp';
      }
      ?>

      <div class="p-introduction-single-message__img">
        <img
          src="<?php echo esc_url($principal_image_url); ?>"
          alt="<?php echo esc_attr(get_the_title()); ?> 園長"
          class="p-introduction-single-message__text-img inview"
          loading="lazy">
      </div>

      <!-- 園長からのメッセージACF -->
      <?php if (get_field('introduction_message')) : ?>
        <p class="p-introduction-single-message__text inview">
          <?php the_field('introduction_message'); ?>
        </p>
      <?php endif; ?>
    </div>

  </section>


  <!-- 園の概要セクションAbout Nursery -->
  <section class="p-introduction-single-overview">
    <!-- アイコン -->
    <div class="p-introduction-single-message__icon-wrap about-Nursery-heading inview">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/svg/bell.svg"
        alt="アイコン"
        class="p-introduction-single__icon"
        loading="lazy">
    </div>

    <!-- セクションタイトル -->
    <div class="p-introduction-about-nursery__heading">
      <h2 class="p-introduction-about-nursery__title inview">園の概要</h2>
      <p class="p-introduction-about-nursery__subtitle inview">about nursery</p>
    </div>

    <!-- 園の概要の表 -->
    <div class="introduction-single-message-table">
      <?php
      // ------------------------------------------------------------
      // ACFフィールド想定（未設定でも初期表示が崩れないようフォールバック値を用意）
      // ------------------------------------------------------------
      $overview_address = get_field('overview_address');
      $overview_tel     = get_field('overview_tel');
      $overview_fax     = get_field('overview_fax');
      $overview_target    = get_field('overview_target') ?: '1歳児から小学校就学前までの乳幼児<br class="sp_only">（1歳児〜5歳児）';
      $overview_admission = get_field('overview_admission');
      if (!$overview_admission) {
        $overview_admission = '原則として毎月1日<br>初回は見学になります。<br>他の保護者や園見学及び職員との三密対応及び保育園の日程により、見学日時に制限がある<br>場合がございます。ご理解のうえ、ご連絡願います。';
      }
      $overview_week_note = get_field('overview_week_note') ?: '月曜日〜土曜日（日曜日、祝日・休日、年末年始（12/29〜1/3）はお休み）';

      // 開園日（リピーター: overview_week_schedule / サブフィールド: day_label, is_open）
      $week_fallback = [
        ['day_label' => '月', 'is_open' => true],
        ['day_label' => '火', 'is_open' => true],
        ['day_label' => '水', 'is_open' => true],
        ['day_label' => '木', 'is_open' => true],
        ['day_label' => '金', 'is_open' => true],
        ['day_label' => '土', 'is_open' => true],
        ['day_label' => '日', 'is_open' => false],
      ];

      // 保育時間（フィールドグループ想定。無ければフォールバック）
      $hours_standard_time   = get_field('overview_hours_standard_time') ?: '7:30〜18:30';
      $hours_standard_extend = get_field('overview_hours_standard_extend') ?: '18:31〜19:30';
      $hours_short_time      = get_field('overview_hours_short_time') ?: '9:00〜17:00';
      $hours_short_extend    = get_field('overview_hours_short_extend') ?: '7:30〜8:59<br>17:01〜19:30';

      // 定員（リピーター: overview_capacity / サブフィールド: age_label, count）
      $overview_capacity_total = get_field('overview_capacity_total') ?: '51名';
      $capacity_fallback = [
        ['age_label' => '1歳児', 'count' => '18名'],
        ['age_label' => '2歳児', 'count' => '18名'],
        ['age_label' => '3歳児', 'count' => '5名'],
        ['age_label' => '4歳児', 'count' => '5名'],
        ['age_label' => '5歳児', 'count' => '5名'],
      ];
      $overview_capacity_note = get_field('overview_capacity_note') ?: '※定員は、開園初年度から数年をかけて102名の定員に変更していきます。';

      // 職員（リピーター: overview_staff / サブフィールド: role_label, count）
      $overview_staff_total = get_field('overview_staff_total') ?: '13名以上';
      $staff_fallback = [
        ['role_label' => '園長',   'count' => '1名'],
        ['role_label' => '保育士', 'count' => '8名'],
        ['role_label' => '調理師', 'count' => '2名'],
        ['role_label' => '看護師', 'count' => '1名'],
        ['role_label' => '事務員', 'count' => '1名'],
      ];
      $overview_staff_note = get_field('overview_staff_note') ?: '※嘱託医　1名<br>※保育士は認可保育所の基準に準じます<br>※保育児童数・年齢に応じたシフトにより、職員を増減します。';
      ?>

      <dl class="p-introduction-single-overview__list">

        <div class="p-introduction-single-overview__row">
          <dt class="p-introduction-single-overview__term inview">所在地</dt>

          <dd class="p-introduction-single-overview__desc inview">
            <address class="p-introduction-single-overview__address">
              <?php echo esc_html($overview_address); ?>
            </address>
          </dd>
        </div>

        <div class="p-introduction-single-overview__row">
          <dt class="p-introduction-single-overview__term inview">TEL / FAX</dt>

          <dd class="p-introduction-single-overview__desc inview">

            <a
              href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', $overview_tel)); ?>"
              class="tel-link u-hover">
              <?php echo esc_html($overview_tel); ?>
            </a>

            <span> / </span>

            <?php echo esc_html($overview_fax); ?>

          </dd>
        </div>

        <div class="p-introduction-single-overview__row">
          <dt class="p-introduction-single-overview__term inview">対象</dt>
          <dd class="p-introduction-single-overview__desc inview"><?php echo wp_kses_post($overview_target); ?></dd>
        </div>

        <div class="p-introduction-single-overview__row">
          <dt class="p-introduction-single-overview__term inview">入園日</dt>
          <dd class="p-introduction-single-overview__desc inview p-introduction-single-overview__desc-lh"><?php echo wp_kses_post($overview_admission); ?></dd>
        </div>

        <div class="p-introduction-single-overview__row">
          <dt class="p-introduction-single-overview__term inview">開園日</dt>
          <dd class="p-introduction-single-overview__desc inview">
            <table class="p-introduction-single-overview__table p-introduction-single-overview__table--week">
              <!-- <caption class="u-visually-hidden">曜日ごとの開園状況</caption> -->
              <thead>
                <tr>
                  <?php if (have_rows('overview_week_schedule')) : while (have_rows('overview_week_schedule')) : the_row(); ?>
                      <th scope="col"><?php echo esc_html(get_sub_field('day_label')); ?></th>
                    <?php endwhile;
                  else :
                    foreach ($week_fallback as $day) : ?>
                      <th scope="col"><?php echo esc_html($day['day_label']); ?></th>
                  <?php endforeach;
                  endif; ?>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php if (have_rows('overview_week_schedule')) : while (have_rows('overview_week_schedule')) : the_row(); ?>
                      <td><?php echo get_sub_field('is_open') ? '○' : 'ー'; ?></td>
                    <?php endwhile;
                  else :
                    foreach ($week_fallback as $day) : ?>
                      <td><?php echo $day['is_open'] ? '○' : 'ー'; ?></td>
                  <?php endforeach;
                  endif; ?>
                </tr>
              </tbody>
            </table>
            <p class="p-introduction-single-overview__note"><?php echo esc_html($overview_week_note); ?></p>
          </dd>
        </div>

        <div class="p-introduction-single-overview__row">
          <dt class="p-introduction-single-overview__term inview">保育時間</dt>
          <dd class="p-introduction-single-overview__desc inview">
            <h3 class="p-introduction-single-overview__sub-title inview">保育標準時間認定の方</h3>
            <table class="p-introduction-single-overview__table p-introduction-single-overview__table--time">
              <tbody>
                <tr>
                  <th scope="row">保育標準時間</th>
                  <td><?php echo esc_html($hours_standard_time); ?></td>
                </tr>
                <tr>
                  <th scope="row">延長保育</th>
                  <td><?php echo esc_html($hours_standard_extend); ?></td>
                </tr>
              </tbody>
            </table>

            <h3 class="p-introduction-single-overview__sub-title">保育短時間認定の方</h3>
            <table class="p-introduction-single-overview__table p-introduction-single-overview__table--time">
              <tbody>
                <tr>
                  <th scope="row">保育標準時間</th>
                  <td><?php echo esc_html($hours_short_time); ?></td>
                </tr>
                <tr>
                  <th scope="row">延長保育</th>
                  <td><?php echo wp_kses_post($hours_short_extend); ?></td>
                </tr>
              </tbody>
            </table>
          </dd>
        </div>

        <div class="p-introduction-single-overview__row">
          <dt class="p-introduction-single-overview__term inview">定員</dt>

          <dd class="p-introduction-single-overview__desc inview">

            <div class="p-introduction-single-overview__capacity">
              <div class="p-introduction-single-overview__badge-wrap">
                <span class="p-introduction-single-overview__badge">
                  定員<br>
                  <?php echo esc_html($overview_capacity_total); ?>
                </span>
              </div>

              <table class="p-introduction-single-overview__table p-introduction-single-overview__table--census">
                <thead>
                  <tr>
                    <?php if (have_rows('overview_capacity')) : while (have_rows('overview_capacity')) : the_row(); ?>
                        <th scope="col"><?php echo esc_html(get_sub_field('age_label')); ?></th>
                      <?php endwhile;
                    else :
                      foreach ($capacity_fallback as $row) : ?>
                        <th scope="col"><?php echo esc_html($row['age_label']); ?></th>
                    <?php endforeach;
                    endif; ?>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <?php if (have_rows('overview_capacity')) : while (have_rows('overview_capacity')) : the_row(); ?>
                        <td><?php echo esc_html(get_sub_field('count')); ?></td>
                      <?php endwhile;
                    else :
                      foreach ($capacity_fallback as $row) : ?>
                        <td><?php echo esc_html($row['count']); ?></td>
                    <?php endforeach;
                    endif; ?>
                  </tr>
                </tbody>
              </table>
            </div>

            <p class="p-introduction-single-overview__note">
              <?php echo esc_html($overview_capacity_note); ?>
            </p>

          </dd>
        </div>

        <div class="p-introduction-single-overview__row">
          <dt class="p-introduction-single-overview__term inview">職員</dt>

          <dd class="p-introduction-single-overview__desc inview">

            <div class="p-introduction-single-overview__capacity">

              <div class="p-introduction-single-overview__badge-wrap">
                <span class="p-introduction-single-overview__badge">
                  職員<br>
                  <?php echo esc_html($overview_staff_total); ?>
                </span>
              </div>

              <table class="p-introduction-single-overview__table p-introduction-single-overview__table--census">
                <thead>
                  <tr>
                    <?php if (have_rows('overview_staff')) : while (have_rows('overview_staff')) : the_row(); ?>
                        <th scope="col"><?php echo esc_html(get_sub_field('role_label')); ?></th>
                      <?php endwhile;
                    else :
                      foreach ($staff_fallback as $row) : ?>
                        <th scope="col"><?php echo esc_html($row['role_label']); ?></th>
                    <?php endforeach;
                    endif; ?>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <?php if (have_rows('overview_staff')) : while (have_rows('overview_staff')) : the_row(); ?>
                        <td><?php echo esc_html(get_sub_field('count')); ?></td>
                      <?php endwhile;
                    else :
                      foreach ($staff_fallback as $row) : ?>
                        <td><?php echo esc_html($row['count']); ?></td>
                    <?php endforeach;
                    endif; ?>
                  </tr>
                </tbody>
              </table>

            </div>

            <p class="p-introduction-single-overview__note-staff">
              <?php echo wp_kses_post($overview_staff_note); ?>
            </p>

          </dd>
        </div>

      </dl>
    </div>
    <!-- ここまで表 -->
  </section>


  <!-- こもれびだよりセクション -->
  <section class="p-introduction-single-letter">

    <!-- アイコン -->
    <div class="p-introduction-single-letter__icon-wrap">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/svg/letter.svg"
        alt=""
        class="p-introduction-single-letter__icon"
        loading="lazy"
        data-aos="fade-up">
    </div>

    <!-- セクションタイトル -->
    <div class="p-introduction-single-letter__heading">
      <h2 class="p-introduction-single-letter__title inview">こもれびだより</h2>
      <p class="p-introduction-single-letter__subtitle inview">letter</p>
    </div>

    <!-- サブクエリ表示エリア -->
    <div class="p-introduction-single-letter__content">
      <ul class="p-introduction-single-letter__list">
        <?php
        // 現在表示している園の投稿ID
        $current_school_id = get_the_ID();

        $args = array(
          'post_type'      => 'letter',
          'posts_per_page' => 3,
          'orderby'        => 'date',
          'order'          => 'DESC',

          // 「対象の園」が現在の園になっている記事だけ取得
          'meta_query' => array(
            array(
              'key'     => 'letter_school',
              'value'   => $current_school_id,
              'compare' => '=',
              'type'    => 'NUMERIC',
            ),
          ),
        );

        $letter_query = new WP_Query($args);

        if ($letter_query->have_posts()) :
          while ($letter_query->have_posts()) :
            $letter_query->the_post();
        ?>

            <li class="p-introduction-single-letter__item inview">
              <a
                href="<?php the_permalink(); ?>"
                class="p-introduction-single-letter__card u-hover">

                <?php if (has_post_thumbnail()) : ?>

                  <?php the_post_thumbnail('large', array(
                    'class' => 'p-introduction-single-letter__image',
                    'alt'   => get_the_title()
                  )); ?>

                <?php else : ?>

                  <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/img/no-image.webp'); ?>"
                    alt=""
                    class="p-introduction-single-letter__image"
                    loading="lazy"
                    width="640"
                    height="320">

                <?php endif; ?>

                <div class="p-introduction-single-letter__card-wrap">

                  <h3 class="p-introduction-single-letter__card-title">
                    <?php the_title(); ?>
                  </h3>

                  <time
                    class="p-introduction-single-letter__date"
                    datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                    <?php echo esc_html(get_the_date('Y.m.d')); ?>
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
      <div class="p-introduction-single-letter__link-wrap inview">
        <a
          href="<?php echo esc_url(
                  add_query_arg(
                    'school',
                    get_the_ID(),
                    get_post_type_archive_link('letter')
                  )
                ); ?>"
          class="p-introduction-single-letter__link c-button u-hover">
          もっとみる
        </a>
      </div>

    </div>
  </section>


  <!-- お問い合わせセクション -->
  <section class="p-contact">
    <div class="p-contact__inner">
      <div class="p-contact__inner-wrap">
        <!-- アイコン -->
        <div class="p-contact__icon-wrap inview">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/svg/contact.svg"
            alt=""
            class="p-contact__icon"
            loading="lazy">
        </div>

        <!-- セクションタイトル -->
        <div class="p-contact__heading">
          <h2 class="p-contact__title inview">お問い合わせ</h2>
          <p class="p-contact__subtitle inview">contact</p>
        </div>

        <!-- 説明文 -->
        <p class="p-contact__text inview">入園のお申込み、<br class="sp_only">見学のご相談はこちらから！</p>

        <!-- リンクボタン -->
        <div class="p-contact__link-wrap inview">
          <a
            href="<?php echo esc_url(home_url('/contact')); ?>"
            class="p-contact__link p-contact__link-info c-button u-hover">
            お問い合わせ
          </a>
        </div>
      </div>
    </div>

  </section>
</main>
<?php get_footer(); ?>
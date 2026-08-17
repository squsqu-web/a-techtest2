<?php get_header(); ?>

<main class="l-single-introduction">

  <!-- Main Visual -->
  <section class="l-main-visual">
    <div class="l-main-visual__title">
      <h1 class="l-main-visual__title-ja" data-aos="fade-up">各園のご紹介</h1>
      <p class="l-main-visual__title-en">introduction</p>
    </div>
  </section>

  <!-- カスタムパンくずリスト -->
  <div class="breadcrumb-container">
    <nav class="breadcrumb  u-hover" data-aos="fade-up">
      <a href="<?php echo home_url('/'); ?>">ホーム</a>
      <span class="sep" data-aos="fade-up">&gt;</span>
      <a href="<?php echo home_url('/introduction'); ?>">各園のご紹介</a>
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
          'class' => 'p-introduction-single__thumbnail'
        )); ?>
      <?php else : ?>
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/img/no-image.webp'); ?>"
          alt="<?php echo esc_attr(get_the_title()); ?>"
          class="p-introduction-single__thumbnail">
      <?php endif; ?>


      <!-- 紹介文 -->
      <div class="p-introduction-single__content">
        <?php if (get_field('introduction_title')) : ?>
          <h2 class="p-introduction-single__title">
            <?php the_field('introduction_title'); ?>
          </h2>
        <?php endif; ?>

        <?php if (get_field('introduction_text')) : ?>
          <p class="p-introduction-single__text">
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
      <h2 class="p-introduction-single-gallery__title">園の様子</h2>
      <p class="p-introduction-single-gallery__subtitle">inside</p>
    </div>

    <!-- 無限ループ表示エリア -->
    <div class="p-introduction-single-gallery__gallery">
      <div class="p-introduction-single-gallery__track">
        <img src="<?php echo get_template_directory_uri(); ?>/img/recruit-bg.webp" alt="" loading="lazy" data-aos="fade-up">
        <img src="<?php echo get_template_directory_uri(); ?>/img/loop-Inside1.webp" alt="" loading="lazy" data-aos="fade-up">
        <img src="<?php echo get_template_directory_uri(); ?>/img/loop-Inside2.webp" alt="" loading="lazy" data-aos="fade-up">
        <img src="<?php echo get_template_directory_uri(); ?>/img/loop-Inside3.webp" alt="" loading="lazy" data-aos="fade-up">
        <img src="<?php echo get_template_directory_uri(); ?>/img/loop-Inside4.webp" alt="" loading="lazy" data-aos="fade-up">
        <img src="<?php echo get_template_directory_uri(); ?>/img/loop-Inside5.webp" alt="" loading="lazy" data-aos="fade-up">
      </div>
    </div>

  </section>


  <!-- 園長からのメッセージ -->
  <section class="p-introduction-single-message">

    <!-- アイコン -->
    <div class="p-introduction-single-message__icon-wrap">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/svg/mail-open.svg"
        alt="アイコン"
        class="p-introduction-single__icon"
        loading="lazy"
        data-aos="fade-up">
    </div>

    <!-- セクションタイトル -->
    <div class="p-introduction-single-message__heading">
      <h2 class="p-introduction-single-message__title">園長からのメッセージ</h2>
      <p class="p-introduction-single-message__subtitle">message</p>
    </div>

    <div class="p-introduction-single-message__content">
      <div class="p-introduction-single-message__img">
        <img
          src="<?php echo get_template_directory_uri(); ?>/img/staff/introduction-message.png"
          alt=""
          class="p-introduction-single-message__text-img"
          loading="lazy"
          data-aos="fade-up">
      </div>

      <p class="p-introduction-single-message__text">
        桜のこもれびしぶや園の今年度のテーマは<br>
        「運動と音楽のコラボレーション・自然と食の融合」<br>
        です。<br>体操資格、リトミック資格を持った職員を中心に音楽に合わせて体を動かし個々に持っている潜在的な基礎能力の発達を促し、心身の健康の基礎となる食に関する活動を取り入れ、生活と遊びの中で自然に触れさせ意欲的に活動できるように支援していきます。<br>普段の園の様子は定期的にこもれびだよりに掲載しています。<br>月1回保育園の開放も行っています。<br>職員一同お待ちしていますのでぜひ見学にいらしてください。
      </p>
    </div>

  </section>












  <!-- 園の概要セクションAbout Nursery -->
  <section class="p-introduction-single-overview">
    <!-- アイコン -->
    <div class="p-introduction-single-message__icon-wrap about-Nursery-heading">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/svg/bell.svg"
        alt="アイコン"
        class="p-introduction-single__icon"
        loading="lazy"
        data-aos="fade-up">
    </div>

    <!-- セクションタイトル -->
    <div class="p-introduction-about-nursery__heading">
      <h2 class="p-introduction-about-nursery__title">園の概要</h2>
      <p class="p-introduction-about-nursery__subtitle">about nursery</p>
    </div>

    <!-- 園の概要の表 -->
    <div class="introduction-single-message-table">
      <?php
      // ------------------------------------------------------------
      // ACFフィールド想定（未設定でも初期表示が崩れないようフォールバック値を用意）
      // ------------------------------------------------------------
      $overview_address   = get_field('overview_address') ?: '東京都渋谷区渋谷○-○-○';
      $overview_tel       = get_field('overview_tel') ?: '0120-107-929';
      $overview_fax       = get_field('overview_fax') ?: '0120-107-929';
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

      <dl class="p-introduction-single-overview__list" data-aos="fade-up">

        <div class="p-introduction-single-overview__row">
          <dt class="p-introduction-single-overview__term">所在地</dt>
          <dd class="p-introduction-single-overview__desc"><?php echo esc_html($overview_address); ?></dd>
        </div>

        <div class="p-introduction-single-overview__row">
          <dt class="p-introduction-single-overview__term">TEL / FAX</dt>
          <dd class="p-introduction-single-overview__desc">
            <?php echo esc_html($overview_tel); ?> / <?php echo esc_html($overview_fax); ?>
          </dd>
        </div>

        <div class="p-introduction-single-overview__row">
          <dt class="p-introduction-single-overview__term">対象</dt>
          <dd class="p-introduction-single-overview__desc"><?php echo wp_kses_post($overview_target); ?></dd>
        </div>

        <div class="p-introduction-single-overview__row">
          <dt class="p-introduction-single-overview__term">入園日</dt>
          <dd class="p-introduction-single-overview__desc p-introduction-single-overview__desc-lh"><?php echo wp_kses_post($overview_admission); ?></dd>
        </div>

        <div class="p-introduction-single-overview__row">
          <dt class="p-introduction-single-overview__term">開園日</dt>
          <dd class="p-introduction-single-overview__desc">
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
          <dt class="p-introduction-single-overview__term">保育時間</dt>
          <dd class="p-introduction-single-overview__desc">
            <h3 class="p-introduction-single-overview__sub-title">保育標準時間認定の方</h3>
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
          <dt class="p-introduction-single-overview__term">定員</dt>

          <dd class="p-introduction-single-overview__desc">

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
          <dt class="p-introduction-single-overview__term">職員</dt>

          <dd class="p-introduction-single-overview__desc">

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
      <h2 class="p-introduction-single-letter__title">こもれびだより</h2>
      <p class="p-introduction-single-letter__subtitle">letter</p>
    </div>

    <!-- サブクエリ表示エリア -->
    <div class="p-introduction-single-letter__content">
      <ul class="p-introduction-single-letter__list">
        <?php
        $args = array(
          'post_type'      => 'letter',
          'posts_per_page' => 3,
          'orderby'        => 'date',
          'order'          => 'DESC',
        );

        $letter_query = new WP_Query($args);

        if ($letter_query->have_posts()) :
          while ($letter_query->have_posts()) :
            $letter_query->the_post();
        ?>

            <li class="p-introduction-single-letter__item">
              <a
                href="<?php the_permalink(); ?>"
                class="p-introduction-single-letter__card">

                <?php if (has_post_thumbnail()) : ?>

                  <?php the_post_thumbnail('large', array(
                    'class' => 'p-introduction-single-letter__image',
                    'alt'   => get_the_title()
                  )); ?>

                <?php else : ?>
                  <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/img/no-image.png'); ?>"
                    alt=""
                    class="p-introduction-single-letter__image">
                <?php endif; ?>

                <div class="p-introduction-single-letter__card-wrap">
                  <h3 class="p-introduction-single-letter__card-title"><?php the_title(); ?></h3>

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
      <div class="p-introduction-single-letter__link-wrap">
        <a
          href="<?php echo esc_url(home_url('/letter')); ?>"
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
        <div class="p-contact__icon-wrap">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/svg/contact.svg"
            alt=""
            class="p-contact__icon"
            loading="lazy"
            data-aos="fade-up">
        </div>

        <!-- セクションタイトル -->
        <div class="p-contact__heading">
          <h2 class="p-contact__title">お問い合わせ</h2>
          <p class="p-contact__subtitle">contact</p>
        </div>

        <!-- 説明文 -->
        <p class="p-contact__text">
          入園のお申込み、<br class="sp_only">見学のご相談はこちらから！
        </p>

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
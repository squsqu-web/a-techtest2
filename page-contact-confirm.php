<?php get_header(); ?>

<main>

  <!-- Main Visual -->
  <section class="l-main-visual">
    <h1 class="l-main-visual__title">reserve</h1>
    <div class="">
      <picture class="">
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/reserve_top-sp.webp" media="(max-width: 767px)" type="image/webp">
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/reserve_top-sp.jpg" media="(max-width: 767px)" type="image/jpeg">
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/reserve_top-pc.webp" media="(min-width: 768px)" type="image/webp">
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/reserve_top-pc.jpg" media="(min-width: 768px)" type="image/jpeg">
        <img src="<?php echo get_template_directory_uri(); ?>/img/reserve_top-pc.jpg" alt="スマホで予約をしている様子" class="l-main-visual__img">
      </picture>
    </div>

    <!-- カスタムパンくずリスト -->
    <div class="breadcrumb-container form-bread">
      <nav class="breadcrumb form-bread-nav u-hover">
        <a href="<?php echo home_url('/'); ?>">ホーム</a>
        <span class="sep">｜</span>
        <span>ご予約・お問い合わせ</span>
      </nav>
    </div>

    <!-- Reserve Form -->
    <section class="p-reserve-form">
      <!-- 未成年案内 -->
      <article class="p-reserve-form__minor c-minor-notice">
        <div class="p-reserve-form__minor__text">
          <h3 class="c-minor-notice__title pc_only">未成年のお客様は必ずお読みください</h3>
          <h3 class="c-minor-notice__title sp_only">未成年のお客様は必ず<br>お読みください</h3>
          <p class="c-minor-notice__text pc_only">
            脱毛箇所を問わず、未成年のお客様が施術を受けるためには、保護者の同意が必要です。<br>
            「未成年契約同意書」をダウンロードし、保護者にご記入いただいた上で初回ご来店時に持参ください。
          </p>
          <p class="c-minor-notice__text sp_only">
            脱毛箇所を問わず、未成年のお客様が施術を受けるためには、<br>保護者の同意が必要です。<br>
            「未成年契約同意書」をダウンロードし、保護者にご記入いただいた上で初回ご来店時に持参ください。
          </p>
        </div>
        <div class="c-minor-download">
          <h4 class="c-minor-download__title">未成年契約同意書</h4>
          <a href="<?php echo get_template_directory_uri(); ?>/documents/report.pdf" download class="c-minor-download__link c-button  u-hover">
            <i class="fa-solid fa-file-arrow-down"></i>
            download
          </a>
        </div>
      </article>

    </section>

    <div class="form-blck">
      <!-- メールフォーム案内 -->
      <section class="p-reserve-mailform comfirm-mailform">

        <!-- フォームステップ -->
        <div class="c-form-steps">
          <div class="c-form-steps__item">
            <h5 class="c-form-steps__step-title">step 01</h5>
            <p class="c-form-steps__step-text">内容入力</p>
          </div>
          <div class="c-form-steps__item is-current">
            <h5 class="c-form-steps__step-title">step 02</h5>
            <p class="c-form-steps__step-text">確認画面</p>
          </div>
          <div class="c-form-steps__item">
            <h5 class="c-form-steps__step-title">step 03</h5>
            <p class="c-form-steps__step-text">送信完了</p>
          </div>
        </div>
      </section>

      <!-- 入力フォーム -->
      <?php the_content(); ?>

    </div>

  </section>

</main>



<?php get_footer(); ?>
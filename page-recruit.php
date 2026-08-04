<?php get_header(); ?>
<main class="contents-wrapper">
  <div class="sticky-area">
    <!-- Main Visual -->
    <section class="l-main-visual">
      <h1 class="l-main-visual__title">採用情報</h1>
      <div class="sticky-wrapper"></div>


      <div class="contents-overlap-wrapper">
        <!-- カスタムパンくずリスト -->
        <div class="breadcrumb-container form-bread">
          <nav class="breadcrumb form-bread-nav u-hover">
            <a href="<?php echo home_url('/'); ?>">ホーム</a>
            <span class="sep">｜</span>
            <span>採用情報</span>
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
              <a href="<?php echo get_template_directory_uri(); ?>/documents/report.pdf" download class="c-minor-download__link c-button u-hover">
                <i class="fa-solid fa-file-arrow-down"></i>
                download
              </a>
            </div>
          </article>

          <!-- 電話問い合わせ案内 -->
          <article class="p-reserve-form__contact">
            <div class="c-contact-description">
              <h3 class="c-contact-description__title">tel</h3>
              <p class="c-contact-description__text">
                サービス・料金の質問や無料体験のご予約などを希望の方は、ご希望の店舗にお問い合わせください。 <br>なお、施術中は、お電話に対応することができない可能性がありますので、あらためてお電話いただくか、メールフォームからお問い合わせください。
              </p>
            </div>
            <div class="c-contact-info">
              <p class="c-contact-info__number">
                <a href="tel:0123456789" class="tel-link u-hover">01-2345-6789</a>
              </p>
              <p class="c-contact-info__time">9:00～22:00 定休日なし</p>
            </div>
          </article>
        </section>

        <div class="form-blck">
          <!-- メールフォーム案内 -->
          <section class="p-reserve-mailform">
            <div class="p-reserve-mailform__intro">
              <h3 class="p-reserve-mailform__intro-title">mail form</h3>
              <p class="p-reserve-mailform__intro-text u-hover">
                脱毛の無料体験や施術のご予約などをご希望の方は、<br>
                以下のフォームに必要事項を入力の上でお問い合わせください。<br>
                なお、当日または翌日のご予約を希望の方は、お電話で問い合わせください。
              </p>
            </div>

            <!-- フォームステップ -->
            <div class="c-form-steps">
              <div class="c-form-steps__item is-current">
                <h5 class="c-form-steps__step-title">step 01</h5>
                <p class="c-form-steps__step-text">内容入力</p>
              </div>
              <div class="c-form-steps__item">
                <h5 class="c-form-steps__step-title">step 02</h5>
                <p class="c-form-steps__step-text">確認画面</p>
              </div>
              <div class="c-form-steps__item">
                <h5 class="c-form-steps__step-title">step 03</h5>
                <p class="c-form-steps__step-text">送信完了</p>
              </div>
            </div>
          </section>
          <?php the_content(); ?>
        </div>
      </div>
    </section>
  </div>
</main>

<section class="form-bottom-block"></section>
<?php get_footer(); ?>
<?php get_header(); ?>
<main class="contents-wrapper">

  <!-- Main Visual -->
  <section class="l-main-visual">
    <h1 class="l-main-visual__title">お問い合わせ</h1>


    <!-- カスタムパンくずリスト -->
    <div class="breadcrumb-container form-bread">
      <nav class="breadcrumb form-bread-nav u-hover">
        <a href="<?php echo home_url('/'); ?>">ホーム</a>
        <span class="sep">｜</span>
        <span>お問い合わせ</span>
      </nav>
    </div>


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

  </section>

</main>



<?php get_footer(); ?>
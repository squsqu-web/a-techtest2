<?php get_header(); ?>

<main>

  <!-- Main Visual -->
  <section class="l-main-visual">
    <h1 class="l-main-visual__title">reserve</h1>
  </section>

  <!-- カスタムパンくずリスト -->
  <div class="breadcrumb-container form-bread">
    <nav class="breadcrumb form-bread-nav u-hover">
      <a href="<?php echo home_url('/'); ?>">ホーム</a>
      <span class="sep">｜</span>
      <span>ご予約・お問い合わせ</span>
    </nav>
  </div>



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

</main>



<?php get_footer(); ?>
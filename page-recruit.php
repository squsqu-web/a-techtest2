<?php get_header(); ?>
<main class="contents-wrapper">

  <!-- Main Visual -->
  <section class="l-main-visual">
    <h1 class="l-main-visual__title">採用情報</h1>

    <!-- カスタムパンくずリスト -->
    <div class="breadcrumb-container form-bread">
      <nav class="breadcrumb form-bread-nav u-hover">
        <a href="<?php echo home_url('/'); ?>">ホーム</a>
        <span class="sep">｜</span>
        <span>採用情報</span>
      </nav>
    </div>



    <!-- メールフォーム案内 -->
    <section class="p-reserve-mailform">

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
<?php get_header(); ?>

<!-- Main Visual -->
<section class="l-main-visual">
  <div class="l-main-visual__title">
    <h1 class="l-main-visual__title-ja p-thanks__title" data-aos="fade-up">お問い合わせ<br class="sp_only">ありがとうございます。</h1>
    <p class="l-main-visual__title-en">Thank You for Contacting Us</p>
  </div>
</section>

<section class="p-thanks">
  <div class="p-thanks__inner">

    <p class="p-thanks__message">
      数日以内に担当の者からご入力いただいた<br class="sp_only">メールアドレスに返信いたします。
    </p>

    <!-- TOPにもどるボタン -->
    <div class="p-thanks__button-wrap">
      <a href="<?php echo home_url('/'); ?>" class="p-thanks__button">
        <span>TOPにもどる</span>
        <span class="p-thanks__button-arrow">&gt;</span>
      </a>
    </div>

  </div>
</section>

<?php get_footer(); ?>
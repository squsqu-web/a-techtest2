<?php get_header(); ?>

<main>
  <!-- Main Visual -->
  <section class="l-main-visual">
    <h1 class="l-main-visual__title">reserve</h1>
    <div class="">
      <picture class="parallax-slide">
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



    <section class="c-form-thnaks">
      <h3 class="c-form-thnaks__title">お問い合わせありがとうございます。</h3>
      <div class="c-form-thnaks__coments">
        <p class="c-form-thnaks__text">3営業日以内に担当の者から連絡いたします。</p>
        <p class="c-form-thnaks__link  u-hover"><a href="<?php echo home_url('/'); ?>" class="u-hover">TOPに戻る</a></p>
      </div>
    </section>

  </section>
</main>



<!-- ↓共通背景用の為消さない -->
</div>

<?php get_footer(); ?>
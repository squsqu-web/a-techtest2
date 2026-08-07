<?php get_header(); ?>

<main class="l-main-about">

  <!-- Main Visual -->
  <section class="l-main-visual about-main-visual" data-aos="fade-up">
    <h1 class="l-main-visual__title">わたしたちのこと</h1>

    <!-- カスタムパンくずリスト -->
    <div class="breadcrumb-container-about">
      <nav class="breadcrumb u-hover" data-aos="fade-up">
        <a href="<?php echo home_url('/'); ?>">ホーム</a>
        <span class="sep" data-aos="fade-up">｜</span>
        <span href="<?php echo home_url('/about'); ?>">サロンコンセプト</span>
      </nav>
    </div>




      <!-- Aboutセクション -->
  <section class="p-about">
    <div class="p-about__icon-wrap">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/svg/cherry-tree.svg"
        alt=""
        class="p-about__icon"
        loading="lazy"
        data-aos="fade-up">
    </div>


    <div class="p-about__heading">
      <h2 class="p-about__title">
        桜のこもれびキッズランドへ<br>
        ようこそ
      </h2>
      <p class="p-about__subtitle">welcome</p>
    </div>

    <div class="p-about__text-wrap">
      <p class="p-about__text">
        「こもれび」とは<br>
        風に揺れる木の葉によって生み出される光と影の揺らめきを表すことばです。<br>
        それはその瞬間に一度だけ存在します。
      </p>
      <p class="p-about__text">
        桜のこもれびキッズランドは、<br>
        子どもたち一人ひとりが独自の輝きを放つように、<br>
        大切な個性を伸ばす場所です。<br>
        温かく包み込むような雰囲気の中で、安心して成長できる環境を提供し、<br>
        笑顔あふれる毎日をお約束します。
      </p>
    </div>

  </section>



  </section>


</main>



<?php get_footer(); ?>
<?php get_header(); ?>

<main class="l-main">

  <!-- Hero -->
  <section class="p-hero">
    <picture class="p-hero__picture">

      <source
        srcset="<?php echo get_template_directory_uri(); ?>/img/fv_bg-sp.webp"
        media="(max-width:767.98px)"
        type="image/webp">

      <source
        srcset="<?php echo get_template_directory_uri(); ?>/img/fv_bg-sp.jpg"
        media="(max-width:767.98px)"
        type="image/jpeg">

      <source
        srcset="<?php echo get_template_directory_uri(); ?>/img/fv_bg-pc.webp"
        media="(min-width: 768px)"
        type="image/webp">

      <source
        srcset="<?php echo get_template_directory_uri(); ?>/img/fv_bg-pc.jpg"
        media="(min-width: 768px)"
        type="image/jpeg">

      <img
        src="<?php echo get_template_directory_uri(); ?>/img/fv_bg-pc.jpg"
        alt="綺麗な女性の様子"
        width="865"
        height="680"
        class="p-hero__img"
        fetchpriority="high">
    </picture>

    <p class="p-hero__text" data-aos="fade-up">
      a-tech_test2<br class="sp_only">美しい。a-tech_test2
    </p>

  </section>


  <!-- Aboutセクション -->
  <section class="p-about">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/svg/cherry-tree.svg"
      alt=""
      class="p-about__icon"
      loading="lazy"
      data-aos="fade-up">

    <div class="p-about__heading">
      <h2 class="p-about__title">
        桜のこもれびキッズランドへ<br>
        ようこそ
      </h2>
      <p class="p-about__subtitle">welcome</p>
    </div>

    <p class="p-about__text">
      「こもれび」とは<br>
      風に揺れる木の葉によって生み出される光と影の揺らめきを表すことばです。<br>
      それはその瞬間に一度だけ存在します。
    </p>
  </section>


  <!-- 各園のご紹介セクション -->
  <section class="p-introduction">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/svg/introduction-tree.svg"
      alt=""
      class="p-introduction__icon"
      loading="lazy"
      data-aos="fade-up">

    <div class="p-introduction__heading">
      <h2 class="p-introduction__title">各園のご紹介</h2>
      <p class="p-introduction__subtitle">introduction</p>
    </div>

    <ul class="p-introduction__prefectures-list">
      <li class="p-introduction__prefectures-item">東京都</li>
      <li class="p-introduction__prefectures-item">神奈川県</li>
      <li class="p-introduction__prefectures-item">埼玉県</li>
      <li class="p-introduction__prefectures-item">千葉県</li>
      <li class="p-introduction__prefectures-item">大阪府</li>
      <li class="p-introduction__prefectures-item">京都府</li>
    </ul>

    <!-- リンクボタン -->
    <div class="inview">
      <a href="<?php echo home_url('/introduction'); ?>" class="p-introduction__link c-button u-hover">
        一覧ページへ
      </a>
    </div>
  </section>



  <!-- こもれびだよりセクション -->
  <section class="p-letter">

    <img
      src="<?php echo get_template_directory_uri(); ?>/img/svg/letter.svg"
      alt=""
      class="p-letter__icon"
      loading="lazy"
      data-aos="fade-up">


    <div class="p-letter__heading">
      <h2 class="p-letter__title">こもれびだより</h2>
      <p class="p-letter__subtitle">letter</p>
    </div>

    <ul class="p-letter__list">
      <li class="p-letter__item">
        <a href="" class="p-letter__card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/letter/aquarium.png" alt="てすと" class="p-letter__image">
          <h3 class="p-letter__card-title">なは園からのおたより</h3>
          <p class="p-letter__text">説明テキスト</p>
          <time class="p-letter__date" datetime="">日付もってくる</time>
        </a>
      </li>

      <li class="p-letter__item">
        <a href="" class="p-letter__card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/letter/aquarium.png" alt="てすと" class="p-letter__image">
          <h3 class="p-letter__card-title">タイトル持ってくる</h3>
          <p class="p-letter__text">説明テキスト</p>
          <time class="p-letter__date" datetime="">日付もってくる</time>
        </a>
      </li>

      <li class="p-letter__item">
        <a href="" class="p-letter__card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/letter/aquarium.png" alt="てすと" class="p-letter__image">
          <h3 class="p-letter__card-title">タイトル持ってくる</h3>
          <p class="p-letter__text">説明テキスト</p>
          <time class="p-letter__date" datetime="">日付もってくる</time>
        </a>
      </li>

      <li class="p-letter__item">
        <a href="" class="p-letter__card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/letter/aquarium.png" alt="てすと" class="p-letter__image">
          <h3 class="p-letter__card-title">タイトル持ってくる</h3>
          <p class="p-letter__text">説明テキスト</p>
          <time class="p-letter__date" datetime="">日付もってくる</time>
        </a>
      </li>

      <li class="p-letter__item">
        <a href="" class="p-letter__card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/letter/aquarium.png" alt="てすと" class="p-letter__image">
          <h3 class="p-letter__card-title">タイトル持ってくる</h3>
          <p class="p-letter__text">説明テキスト</p>
          <time class="p-letter__date" datetime="">日付もってくる</time>
        </a>
      </li>

      <li class="p-letter__item">
        <a href="" class="p-letter__card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/letter/aquarium.png" alt="てすと" class="p-letter__image">
          <h3 class="p-letter__card-title">タイトル持ってくる</h3>
          <p class="p-letter__text">説明テキスト</p>
          <time class="p-letter__date" datetime="">日付もってくる</time>
        </a>
      </li>

    </ul>


    <!-- リンクボタン -->
    <div class="inview">
      <a href="<?php echo home_url('/letter'); ?>" class="p-letter__link c-button u-hover">
        もっとみる
      </a>
    </div>

  </section>



  <!-- 採用情報セクション -->
  <section class="p-recruit">
    <div class="p-recruit__inner">
      <div class="p-recruit__inner-wrap">
        <img
          src="<?php echo get_template_directory_uri(); ?>/img/svg/recruit.svg"
          alt=""
          class="p-recruit__icon"
          loading="lazy"
          data-aos="fade-up">

        <div class="p-recruit__heading">
          <h2 class="p-recruit__title">採用情報</h2>
          <p class="p-recruit__subtitle">recruit</p>
        </div>

        <p class="p-recruit__text">桜のこもれびキッズランドで働いてみませんか？</p>
      </div>

      <!-- リンクボタン -->
      <div class="p-recruit__link-wrap inview">
        <a href="<?php echo home_url('/recruit'); ?>" class="p-recruit__link c-button u-hover">
          もっとみる
        </a>
        <a href="<?php echo home_url('/recruit'); ?>" class="p-recruit__link c-button u-hover">
          もっとみる
        </a>
      </div>

    </div>



  </section>


  <!-- FAQ -->
  <section class="p-faq">
    <div class="faq_inner">

      <article class="p-faq__header">
        <h2 class="c-heading" data-aos="fade-up">faq</h2>
        <p class="c-heading-sub" data-aos="fade-up">よくある質問</p>
      </article>

      <div class="c-accordion">
        <div class="c-accordion__item u-hover">
          <button class="c-accordion__question accordion-header active" data-aos="fade-up">
            脱毛後にまた毛が生えてくることはありますか？
            <span class="accordion-icon">▼</span>
          </button>
          <div class="c-accordion__answer accordion-content" data-aos="fade-up">
            <p>出産や生理といったホルモンバランスの変化によって、脱毛後も体毛が生えてくるケースがあります</p>
          </div>
        </div>

        <div class="c-accordion__item u-hover">
          <button class="c-accordion__question accordion-header" data-aos="fade-up">
            脱毛すると汗の量が増えると聞いたことがあるのですが本当ですか？
            <span class="accordion-icon">▼</span>
          </button>
          <div class="c-accordion__answer accordion-content" data-aos="fade-up">
            <p>脱毛によって発汗量が増えるというエビデンスはありませんが、毛がなくなることによって汗が直接衣服に触れることで、汗が増えたように感じることはあるかもしれません。</p>
          </div>
        </div>

        <div class="c-accordion__item u-hover">
          <button class="c-accordion__question accordion-header" data-aos="fade-up">
            コースの勧誘やセールスなどはありますか？
            <span class="accordion-icon">▼</span>
          </button>
          <div class="c-accordion__answer accordion-content" data-aos="fade-up">
            <p>お客様の毛質や毛量、ご予算等をお伺いして最適な脱毛プランを提案しますが、最終的にはお客様が無理なく通える範囲のコースを、ご自身で決定いただきたいと考えています。 特に、初めての脱毛の場合は不安になる気持ちもよくわかりますので、その場で契約せずにゆっくりと考えていただく時間も大切です。 バレンタインローズでは、無理な勧誘やしつこい営業行為は一切行いませんので、安心して無料体験にお越しください。</p>
          </div>
        </div>

        <div class="c-accordion__item u-hover">
          <button class="c-accordion__question accordion-header" data-aos="fade-up">
            脱毛することで毛が濃くなることはありますか？
            <span class="accordion-icon">▼</span>
          </button>
          <div class="c-accordion__answer accordion-content" data-aos="fade-up">
            <p>脱毛によって毛が濃くなることはありません。 ただし、硬毛化という現象によって一時的に体毛が濃くなるケースが稀にありますが、施術を進めていくことで少しずつ体毛は薄くなっていきます。</p>
          </div>
        </div>

        <div class="c-accordion__item u-hover">
          <button class="c-accordion__question accordion-header" data-aos="fade-up">
            脱毛箇所を剃毛することで、かえって体毛が太くなることはありますか？
            <span class="accordion-icon">▼</span>
          </button>
          <div class="c-accordion__answer accordion-content" data-aos="fade-up">
            <p>剃毛によって体毛が太くなることはありません。剃毛すると体毛の断面が見えやすくなることによって太く見えることはありますが、施術を重ねるたびに少しずつ薄く・細くなっていきます。</p>
          </div>
        </div>
      </div>

    </div>

  </section>

</main>

<?php get_footer(); ?>
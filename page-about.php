<?php get_header(); ?>

<main class="l-main-about">

  <!-- Main Visual -->
  <section class="l-main-visual">
    <div class="l-main-visual__title">
      <h1 class="l-main-visual__title-ja inview">わたしたちのこと</h1>
      <p class="l-main-visual__title-en inview">About</p>
    </div>
  </section>

  <!-- カスタムパンくずリスト -->
  <div class="breadcrumb-container" data-aos="fade-up">
    <nav class="breadcrumb u-hover">
      <a href="<?php echo esc_url(home_url('/')); ?>">TOP</a>
      <span class="sep" data-aos="fade-up">&gt;</span>
      <span>わたしたちのこと</span>
    </nav>
  </div>

  <!-- わたしたちの想いセクション -->
  <section class="p-about p-about-page">
    <div class="p-about-page__inner">
      <div class="p-about__icon-wrap inview">
        <img
          src="<?php echo get_template_directory_uri(); ?>/img/svg/cherry-tree.svg"
          alt=""
          class="p-about__icon inview"
          loading="lazy">
      </div>


      <div class="p-about__heading">
        <h2 class="p-about__title inview">わたしたちの想い</h2>
        <p class="p-about__subtitle inview">Philosophy</p>
      </div>

      <div class="p-about__text-wrap p-about-page__text-wrap">
        <p class="p-about__text p-about-page__text inview">
          桜のこもれびキッズランドは、<br>子どもたち一人ひとりが独自の輝きを放つように、大切な個性を<br class="sp_only">伸ばす場所です。<br>風に揺れる木々の葉が織りなす光と影の美しい揺らめきのように、<br>子どもたちのそれぞれの魅力を見つけ出し、大切に育てます。<br>自然とのふれあいを通じて、<br>子どもたちの好奇心や想像力を育み、<br>明るく豊かな未来への一歩を<br class="sp_only">共に歩んでいきます。<br>温かく包み込むような雰囲気の中で、<br>安心して成長できる環境を提供し、<br>笑顔あふれる毎日をお約束します。
        </p>
      </div>
    </div>

  </section>


  <!-- 年間行事予定セクション -->
  <section class="p-yearly-program">
    <div class="p-yearly-program__inner">

      <!-- アイコン -->
      <div class="p-yearly-program__icon-wrap inview">
        <img
          src="<?php echo get_template_directory_uri(); ?>/img/svg/introduction-tree.svg"
          alt=""
          class="p-yearly-program__icon"
          loading="lazy">
      </div>

      <!-- 見出し -->
      <div class="p-yearly-program__heading">
        <h2 class="p-yearly-program__title inview">年間行事予定</h2>
        <p class="p-yearly-program__subtitle inview">Yearly Program</p>
      </div>

      <!-- 年間行事リスト -->
      <div class="p-yearly-program__list-wraper">
        <div class="p-yearly-program__list">

          <!-- 4がつ -->
          <article class="p-yearly-program__item" data-aos="fade-up">
            <div class="p-yearly-program__card">

              <!-- アイキャッチ -->
              <div class="p-yearly-program__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/about/apr-program.webp'); ?>" alt="4がつの行事" loading="lazy" width="296" height="180">
              </div>

              <!-- 月とタイトル -->
              <h3 class="p-yearly-program__card-month">4がつ</h3>
              <p class="p-yearly-program__card-title">進級・入園おめでとうの会</p>
            </div>
          </article>

          <!-- 5がつ -->
          <article class="p-yearly-program__item" data-aos="fade-up">
            <div class="p-yearly-program__card">

              <!-- アイキャッチ -->
              <div class="p-yearly-program__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/about/may-program.webp'); ?>" alt="5がつの行事" loading="lazy" width="296" height="180">
              </div>

              <!-- 月とタイトル -->
              <h3 class="p-yearly-program__card-month">5がつ</h3>
              <p class="p-yearly-program__card-title">親子遠足</p>
            </div>
          </article>

          <!-- 6がつ -->
          <article class="p-yearly-program__item" data-aos="fade-up">
            <div class="p-yearly-program__card">

              <!-- アイキャッチ -->
              <div class="p-yearly-program__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/about/jun-program.webp'); ?>" alt="6がつの行事" loading="lazy" width="296" height="180">
              </div>

              <!-- 月とタイトル -->
              <h3 class="p-yearly-program__card-month">6がつ</h3>
              <p class="p-yearly-program__card-title">運動会</p>
            </div>
          </article>

          <!-- 7がつ -->
          <article class="p-yearly-program__item" data-aos="fade-up">
            <div class="p-yearly-program__card">

              <!-- アイキャッチ -->
              <div class="p-yearly-program__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/about/jul-program.webp'); ?>" alt="7がつの行事" loading="lazy" width="296" height="180">
              </div>

              <!-- 月とタイトル -->
              <h3 class="p-yearly-program__card-month">7がつ</h3>
              <p class="p-yearly-program__card-title">たなばた会</p>
            </div>
          </article>

          <!-- 8がつ -->
          <article class="p-yearly-program__item" data-aos="fade-up">
            <div class="p-yearly-program__card">

              <!-- アイキャッチ -->
              <div class="p-yearly-program__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/about/aug-program.webp'); ?>" alt="8がつの行事" loading="lazy" width="296" height="180">
              </div>

              <!-- 月とタイトル -->
              <h3 class="p-yearly-program__card-month">8がつ</h3>
              <p class="p-yearly-program__card-title">夏のお楽しみ会</p>
            </div>
          </article>

          <!-- 9がつ -->
          <article class="p-yearly-program__item" data-aos="fade-up">
            <div class="p-yearly-program__card">

              <!-- アイキャッチ -->
              <div class="p-yearly-program__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/about/sep-program.webp'); ?>" alt="9がつの行事" loading="lazy" width="296" height="180">
              </div>

              <!-- 月とタイトル -->
              <h3 class="p-yearly-program__card-month">9がつ</h3>
              <p class="p-yearly-program__card-title">親子レクリエーション</p>
            </div>
          </article>

          <!-- 10がつ -->
          <article class="p-yearly-program__item" data-aos="fade-up">
            <div class="p-yearly-program__card">

              <!-- アイキャッチ -->
              <div class="p-yearly-program__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/about/oct-program.webp'); ?>" alt="10がつの行事" loading="lazy" width="296" height="180">
              </div>

              <!-- 月とタイトル -->
              <h3 class="p-yearly-program__card-month">10がつ</h3>
              <p class="p-yearly-program__card-title">ハロウィン</p>
            </div>
          </article>

          <!-- 11がつ -->
          <article class="p-yearly-program__item" data-aos="fade-up">
            <div class="p-yearly-program__card">

              <!-- アイキャッチ -->
              <div class="p-yearly-program__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/about/nov-program.webp'); ?>" alt="11がつの行事" loading="lazy" width="296" height="180">
              </div>

              <!-- 月とタイトル -->
              <h3 class="p-yearly-program__card-month">11がつ</h3>
              <p class="p-yearly-program__card-title">秋の収穫体験遠足</p>
            </div>
          </article>

          <!-- 12がつ -->
          <article class="p-yearly-program__item" data-aos="fade-up">
            <div class="p-yearly-program__card">

              <!-- アイキャッチ -->
              <div class="p-yearly-program__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/about/dec-program.webp'); ?>" alt="12がつの行事" loading="lazy" width="296" height="180">
              </div>

              <!-- 月とタイトル -->
              <h3 class="p-yearly-program__card-month">12がつ</h3>
              <p class="p-yearly-program__card-title">クリスマス会</p>
            </div>
          </article>

          <!-- 1がつ -->
          <article class="p-yearly-program__item" data-aos="fade-up">
            <div class="p-yearly-program__card">

              <!-- アイキャッチ -->
              <div class="p-yearly-program__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/about/jan-program.webp'); ?>" alt="1がつの行事" loading="lazy" width="296" height="180">
              </div>

              <!-- 月とタイトル -->
              <h3 class="p-yearly-program__card-month">1がつ</h3>
              <p class="p-yearly-program__card-title">新年お楽しみ会</p>
            </div>
          </article>

          <!-- 2がつ -->
          <article class="p-yearly-program__item" data-aos="fade-up">
            <div class="p-yearly-program__card">

              <!-- アイキャッチ -->
              <div class="p-yearly-program__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/about/feb-program.webp'); ?>" alt="2がつの行事" loading="lazy" width="296" height="180">
              </div>

              <!-- 月とタイトル -->
              <h3 class="p-yearly-program__card-month">2がつ</h3>
              <p class="p-yearly-program__card-title">おゆうぎ会</p>
            </div>
          </article>

          <!-- 3がつ -->
          <article class="p-yearly-program__item" data-aos="fade-up">
            <div class="p-yearly-program__card">

              <!-- アイキャッチ -->
              <div class="p-yearly-program__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/about/mar-program.webp'); ?>" alt="3がつの行事" loading="lazy" width="296" height="180">
              </div>

              <!-- 月とタイトル -->
              <h3 class="p-yearly-program__card-month">3がつ</h3>
              <p class="p-yearly-program__card-title">ひな祭り会・巣立ちの会</p>
            </div>
          </article>
        </div>
        <p class="p-yearly-program__card-note">※上記予定は一例です。園や状況により内容は異なりますので、詳しくは園にお問い合わせください。</p>
      </div>

    </div>
  </section>


  <!-- お問い合わせセクション -->
  <section class="p-contact">
    <div class="p-contact__inner">
      <div class="p-contact__inner-wrap">
        <!-- アイコン -->
        <div class="p-contact__icon-wrap inview">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/svg/contact.svg"
            alt=""
            class="p-contact__icon"
            loading="lazy">
        </div>

        <!-- セクションタイトル -->
        <div class="p-contact__heading">
          <h2 class="p-contact__title inview">お問い合わせ</h2>
          <p class="p-contact__subtitle inview">contact</p>
        </div>

        <!-- 説明文 -->
        <p class="p-contact__text inview">入園のお申込み、<br class="sp_only">見学のご相談はこちらから！</p>

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
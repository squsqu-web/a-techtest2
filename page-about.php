<?php get_header(); ?>

<main class="main-concept">
  <div class="sticky-area">
    <!-- Main Visual -->
    <div class="contents-wrapper">
      <section class="l-main-visual concept-main-visual" data-aos="fade-up">
        <h1 class="l-main-visual__title">わたしたちのこと</h1>
        <div class="sticky-wrapper"></div>


        <div class="contents-overlap-wrapper">
          <!-- カスタムパンくずリスト -->
          <div class="breadcrumb-container-concept">
            <nav class="breadcrumb u-hover" data-aos="fade-up">
              <a href="<?php echo home_url('/'); ?>">ホーム</a>
              <span class="sep" data-aos="fade-up">｜</span>
              <span href="<?php echo home_url('/concept'); ?>">サロンコンセプト</span>
            </nav>
          </div>

          <!-- Concept Section -->
          <section class="p-concept page-concept">
            <div class="concept-innerConcept">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/page-concept_about.webp" media="(min-width: 768px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/page-concept_about.jpg" media="(min-width: 768px)" type="image/jpeg">
                <!-- フォールバック img -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/page-concept_about.jpg" alt="洗練されたワンランク上の女性の画像" class="" loading="lazy" width="720" height="405" data-aos="fade-up">
              </picture>
              <h3 class="p-concept__title__center" data-aos="fade-up">洗練されたワンランク上の <br>女性を目指すために</h3>

              <p class="p-concept__text con__txt pc_only" data-aos="fade-up">
                バレンタインローズは、東京や大阪、名古屋などの都市部をはじめ日本全国に店舗を構える脱毛サロンで、「洗練されたワンランク上の女性を目指す」というコンセプトのもとオーダーメイドの脱毛サービスを提供しています。<br>毎年30,000人以上のお客様にバレンタインローズの脱毛サービスをご利用いただいており、これまで年齢を問わず様々な女性の脱毛をサポートさせていただきました。しかし、私たちは、脱毛はあくまでもお客様がワンランク上の女性に近づくための一歩であり、目指すべきゴールではないと考えています。<br>お客様と脱毛サロンという関係だけでなく、脱毛の卒業後もお客様の隣で女性磨きをサポートすることができる存在となり、そしてバレンタインローズに通っていることを誇りに思ってもらえる、そんな脱毛サロンを目指していきます。
              </p>
              <p class="p-concept__text con__txt sp_only" data-aos="fade-up">
                バレンタインローズは、東京や大阪、名古屋などの都市部をはじめ日本全国に店舗を構える脱毛サロンで、「洗練されたワンランク上の女性を目指す」というコンセプトのもと<br>オーダーメイドの脱毛サービスを提供しています。<br>毎年30,000人以上のお客様にバレンタインローズの脱毛サービスをご利用いただいており、これまで年齢を問わず様々な女性の脱毛をサポートさせていただきました。しかし、私たちは、脱毛はあくまでもお客様がワンランク上の女性に近づくための一歩であり、目指すべきゴールではないと考えています。<br>お客様と脱毛サロンという関係だけでなく、脱毛の卒業後もお客様の隣で女性磨きをサポートすることができる存在となり、そしてバレンタインローズに通っていることを誇りに思ってもらえる、そんな脱毛サロンを目指していきます。
              </p>
            </div>
          </section>

          <!-- Instagram -->
          <section class="p-instagram">
            <div class="concept-inner">
              <div class="c-section-header">
                <h2 class="c-section-header__en instagram-title" data-aos="fade-up">instagram</h2>
                <p class="c-section-header__ja" data-aos="fade-up">公式インスタグラム</p>
              </div>
              <div class="p-instagram__images" data-aos="fade-up">
                <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
              </div>

              <!-- Instagramボタン -->
              <div class="instagram-btn" data-aos="fade-up">
                <a class="c-button p-instagram__button u-hover" href="https://www.instagram.com/valentine_rose_squ?igsh=bHBqNXRsNzVyajAx" target="_blank">
                  <i class="fa-brands fa-instagram"></i>
                  <span>Instagram</span>
                </a>
              </div>

            </div>
          </section>

          <!-- Company Profile -->
          <section class="p-company concept-company">
            <div class="concept-inner">

              <div class="c-section-header">
                <h2 class="c-section-header__en company-profile-after" data-aos="fade-up">company profile</h2>
                <p class="c-section-header__ja concept-company-sm" data-aos="fade-up">会社概要</p>
              </div>

              <article class="p-company__profile company-profile">

                <picture>

                  <source
                    srcset="<?php echo get_template_directory_uri(); ?>/img/page-concept_profile-sp.webp"
                    media="(max-width: 767px)"
                    type="image/webp">

                  <source
                    srcset="<?php echo get_template_directory_uri(); ?>/img/page-concept_profile-sp.jpg"
                    media="(max-width: 767px)"
                    type="image/jpeg">

                  <source
                    srcset="<?php echo get_template_directory_uri(); ?>/img/page-concept_profile-pc.webp"
                    media="(min-width: 768px)"
                    type="image/webp">

                  <source
                    srcset="<?php echo get_template_directory_uri(); ?>/img/page-concept_profile-pc.jpg"
                    media="(min-width: 768px)"
                    type="image/jpeg">

                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/page-concept_profile-pc.jpg"
                    alt="清潔感のある店内の画像"
                    class="l-main-visual__img"
                    loading="lazy"
                    width="1080"
                    height="540">
                </picture>

                <!-- ここから会社概要リスト -->
                <dl class="company-profile__list co__list">

                  <div class="company-profile__item">
                    <dt class="company-profile__term cp__title" data-aos="fade-up">運営会社</dt>
                    <dd class="company-profile__desc cp__content" data-aos="fade-up">
                      株式会社VALENTINE ROSE
                    </dd>
                  </div>

                  <div class="company-profile__item">
                    <dt class="company-profile__term cp__title" data-aos="fade-up">商号</dt>
                    <dd class="company-profile__desc cp__content" data-aos="fade-up">
                      VALENTINE ROSE
                    </dd>
                  </div>

                  <div class="company-profile__item">
                    <dt class="company-profile__term cp__title" data-aos="fade-up">代表者</dt>
                    <dd class="company-profile__desc cp__content" data-aos="fade-up">
                      山田 花子
                    </dd>
                  </div>

                  <div class="company-profile__item">
                    <dt class="company-profile__term cp__title" data-aos="fade-up">所在地</dt>

                    <!-- pc -->
                    <dd class="company-profile__desc cp__content pc_only" data-aos="fade-up">
                      <address>〒000-0000 東京都港区青山0-00-00</address>
                    </dd>

                    <!-- sp -->
                    <dd class="company-profile__desc cp__content sp_only" data-aos="fade-up">
                      <address>〒000-0000<br>東京都港区青山0-00-00</address>
                    </dd>
                  </div>
                  <div class="company-profile__item tel-item">
                    <dt class="company-profile__term cp__title" data-aos="fade-up">電話番号</dt>
                    <dd class="company-profile__desc cp__content" data-aos="fade-up">
                      <a href="tel:00000000000" class="tel-link u-hover">
                        000-0000-0000
                      </a>
                    </dd>
                  </div>
                  <div class="company-profile__item bottom-money">
                    <dt class="company-profile__term cp__title" data-aos="fade-up">資本金</dt>
                    <dd class="company-profile__desc cp__content" data-aos="fade-up">
                      3000万円
                    </dd>
                  </div>

                  <div class="company-profile__item employee-item">
                    <dt class="company-profile__term cp__title" data-aos="fade-up">従業員数</dt>
                    <dd class="company-profile__desc cp__content" data-aos="fade-up">
                      200名
                    </dd>
                  </div>

                  <div class="company-profile__item last-item">
                    <dt class="company-profile__term cp__title" data-aos="fade-up">業務内容</dt>

                    <!-- pc -->
                    <dd class="company-profile__desc cp__content pc_only" data-aos="fade-up">
                      − 脱毛サロン「VALENTINE ROSE」の運営
                    </dd>

                    <!-- sp -->
                    <dd class="company-profile__desc cp__content sp_only" data-aos="fade-up">
                      脱毛サロン「VALENTINE ROSE」<br>の運営
                    </dd>
                  </div>

                </dl>
                <!-- 会社概要リストここまで -->

              </article>

            </div>
          </section>

        </div>

    </div>
    </section>
  </div>

</main>

<?php get_footer(); ?>
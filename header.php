<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Googleフォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100..900&family=Kosugi+Maru&family=Yusei+Magic&display=swap" rel="stylesheet">
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/img/favicon.ico'); ?>">
  <link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri() . '/img/apple-touch-icon.png'); ?>">
  <?php wp_head(); ?>
</head>

<body>

  <!-- 共通背景用 -->
  <div class="l-page-bg">
    <header class="l-header">
      <div class="l-header__inner">


        <nav class="l-header__nav u-sp-none">
          <ul class="l-header__list">
            <!-- about -->
            <li class="l-header__item inview">
              <a href="<?php echo home_url('/about/'); ?>" class="l-header__link u-hover">
                <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/about.svg" alt="" class="l-header__icon" loading="lazy" data-aos="fade-up"></span>
                <span class="l-header__link-ja">わたしたちのこと</span>
                <span class="l-header__link-en">about</span>
              </a>
            </li>

            <!-- introduction -->
            <li class="l-header__item inview">
              <a href="<?php echo home_url('/introduction/'); ?>" class="l-header__link u-hover">
                <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/introduction-tree.svg" alt="" class="l-header__icon" loading="lazy" data-aos="fade-up"></span>
                <span class="l-header__link-ja">各園のご紹介</span>
                <span class="l-header__link-en">introduction</span>
              </a>
            </li>

            <!-- letter -->
            <li class="l-header__item inview">
              <a href="<?php echo home_url('/letter/'); ?>" class="l-header__link u-hover">
                <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/letter.svg" alt="" class="l-header__icon" loading="lazy" data-aos="fade-up"></span>
                <span class="l-header__link-ja">こもれびだより</span>
                <span class="l-header__link-en">letter</span>
              </a>
            </li>

            <!-- ロゴ -->
            <li class="l-header__item u-hover inview">
              <!-- 条件分岐 -->
              <?php if (is_front_page() || is_home()) : ?>
                <h1 class="l-header__logo u-hover">
                  <a href="<?php echo home_url('/'); ?>">
                    <picture>
                      <source
                        srcset="<?php echo get_template_directory_uri(); ?>/img/logo.webp"
                        type="image/webp">

                      <img
                        src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                        alt="ロゴ画像">
                    </picture>
                  </a>
                </h1>
              <?php else : ?>
                <div class="l-header__logo u-hover">
                  <a href="<?php echo home_url('/'); ?>">
                    <picture>
                      <source
                        srcset="<?php echo get_template_directory_uri(); ?>/img/logo.webp"
                        type="image/webp">

                      <img
                        src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                        alt="ロゴ画像" data-aos="fade-up">
                    </picture>
                  </a>
                </div>
              <?php endif; ?>
            </li>

            <!-- info -->
            <li class="l-header__item inview">
              <a href="<?php echo home_url('/info/'); ?>" class="l-header__link u-hover">
                <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/info-bell.svg" alt="" class="l-header__icon" loading="lazy" data-aos="fade-up"></span>
                <span class="l-header__link-ja">お知らせ</span>
                <span class="l-header__link-en">info</span>
              </a>
            </li>

            <!-- recruit -->
            <li class="l-header__item inview">
              <a href="<?php echo home_url('/recruit/'); ?>" class="l-header__link u-hover">
                <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/recruit.svg" alt="" class="l-header__icon" loading="lazy" data-aos="fade-up"></span>
                <span class="l-header__link-ja">採用情報</span>
                <span class="l-header__link-en">recruit</span>
              </a>
            </li>

            <!-- contact -->
            <li class="l-header__item inview">
              <a href="<?php echo home_url('/contact/'); ?>" class="l-header__link u-hover">
                <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/contact.svg" alt="" class="l-header__icon" loading="lazy" data-aos="fade-up"></span>
                <span class="l-header__link-ja">お問い合わせ</span>
                <span class="l-header__link-en">contact</span>
              </a>
            </li>

          </ul>
        </nav>


        <!-- ハンバーガーメニュー -->
        <!-- SPヘッダー -->
        <div class="l-header__sp">
          <!-- SPロゴ -->
          <?php if (is_front_page() || is_home()) : ?>
            <h1 class="l-header__logo u-hover">
              <a href="<?php echo home_url('/'); ?>">
                <picture>
                  <source
                    srcset="<?php echo get_template_directory_uri(); ?>/img/logo.webp"
                    type="image/webp">

                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                    alt="桜のこもれびキッズランド">
                </picture>
              </a>
            </h1>
          <?php else : ?>
            <div class="l-header__logo u-hover">
              <a href="<?php echo home_url('/'); ?>">
                <picture>
                  <source
                    srcset="<?php echo get_template_directory_uri(); ?>/img/logo.webp"
                    type="image/webp">

                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                    alt="桜のこもれびキッズランド">
                </picture>
              </a>
            </div>
          <?php endif; ?>

          
          <!-- ハンバーガー -->
          <div class="u-hover">
            <div class="c-hamburger js-hamburger">

              <div class="c-hamburger__line-container">
                <span class="c-hamburger__line"></span>
                <span class="c-hamburger__line"></span>
                <span class="c-hamburger__line"></span>
              </div>

              <div class="c-hamburger__text">menu</div>

            </div>
          </div>

        </div>

        <!-- ドロワーメニュー -->
        <div class="drawer js-drawer">
          <div class="drawer__inner">
            <nav class="drawer__nav">
              <ul class="drawer__list">

                <!-- わたしたちのこと -->
                <li class="drawer__item u-hover">
                  <a href="<?php echo home_url('/about/'); ?>" class="drawer__link u-hover">
                    <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/about.svg" alt="" class="drawer__icon" loading="lazy" data-aos="fade-up"></span>
                    <span class="drawer__link-ja">わたしたちのこと</span>
                    <span class="drawer__link-en">about</span>
                  </a>
                </li>

                <!-- 各園のご紹介 -->
                <li class="drawer__item u-hover">
                  <a href="<?php echo home_url('/introduction/'); ?>" class="drawer__link u-hover">
                    <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/introduction-tree.svg" alt="" class="drawer__icon" loading="lazy" data-aos="fade-up"></span>
                    <span class="drawer__link-ja">各園のご紹介</span>
                    <span class="drawer__link-en">introduction</span>
                  </a>
                </li>

                <!-- こもれびだより -->
                <li class="drawer__item u-hover">
                  <a href="<?php echo home_url('/letter/'); ?>" class="drawer__link u-hover">
                    <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/letter.svg" alt="" class="drawer__icon" loading="lazy" data-aos="fade-up"></span>
                    <span class="drawer__link-ja">こもれびだより</span>
                    <span class="drawer__link-en">letter</span>
                  </a>
                </li>

                <!-- お知らせ -->
                <li class="drawer__item u-hover">
                  <a href="<?php echo home_url('/info/'); ?>" class="drawer__link u-hover">
                    <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/info-bell.svg" alt="" class="drawer__icon" loading="lazy" data-aos="fade-up"></span>
                    <span class="drawer__link-ja">お知らせ</span>
                    <span class="drawer__link-en">info</span>
                  </a>
                </li>

                <!-- 採用情報 -->
                <li class="drawer__item u-hover">
                  <a href="<?php echo home_url('/recruit/'); ?>" class="drawer__link u-hover">
                    <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/recruit.svg" alt="" class="drawer__icon" loading="lazy" data-aos="fade-up"></span>
                    <span class="drawer__link-ja">採用情報</span>
                    <span class="drawer__link-en">recruit</span>
                  </a>
                </li>

                <!-- お問い合わせ -->
                <li class="drawer__item u-hover">
                  <a href="<?php echo home_url('/contact/'); ?>" class="drawer__link u-hover">
                    <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/contact.svg" alt="" class="drawer__icon" loading="lazy" data-aos="fade-up"></span>
                    <span class="drawer__link-ja">お問い合わせ</span>
                    <span class="drawer__link-en">contact</span>
                  </a>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- ドロワーメニューここまで -->

      </div>

    </header>
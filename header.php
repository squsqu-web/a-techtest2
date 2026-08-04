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

  <?php wp_head(); ?>
</head>

<body>
  <header class="l-header">
    <div class="l-header__inner">


      <nav class="l-header__nav u-sp-none">
        <ul class="l-header__list" data-aos="fade-up">
          <!-- about -->
          <li class="l-header__item u-hover">
            <a href="<?php echo home_url('/about'); ?>" class="l-header__link u-hover">
              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/about.svg" alt="" class="l-header__icon" loading="lazy" data-aos="fade-up"></span>
              <span>わたしたちのこと</span>
              <span>about</span>
            </a>
          </li>

          <!-- introduction -->
          <li class="l-header__item u-hover">
            <a href="<?php echo home_url('/introduction'); ?>" class="l-header__link u-hover">
              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/about.svg" alt="" class="l-header__icon" loading="lazy" data-aos="fade-up"></span>
              <span>各園のご紹介</span>
              <span>introduction</span>
            </a>
          </li>

          <!-- letter -->
          <li class="l-header__item u-hover">
            <a href="<?php echo home_url('/letter'); ?>" class="l-header__link u-hover">
              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/about.svg" alt="" class="l-header__icon" loading="lazy" data-aos="fade-up"></span>
              <span>こもれびだより</span>
              <span>letter</span>
            </a>
          </li>

          <!-- ロゴ -->
          <li class="l-header__item u-hover">
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
                      alt="ロゴ画像" data-aos="fade-up">
                  </picture>
                  <p class="l-header__title u-sp-none" data-aos="fade-up">valentine<br>rose</p>
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
                  <p class="l-header__title u-sp-none" data-aos="fade-up">valentine<br>rose</p>
                </a>
              </div>
            <?php endif; ?>
          </li>

          <!-- info -->
          <li class="l-header__item u-hover">
            <a href="<?php echo home_url('/info'); ?>" class="l-header__link u-hover">
              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/about.svg" alt="" class="l-header__icon" loading="lazy" data-aos="fade-up"></span>
              <span>お知らせ</span>
              <span>info</span>
            </a>
          </li>

          <!-- recruit -->
          <li class="l-header__item u-hover">
            <a href="<?php echo home_url('/recruit'); ?>" class="l-header__link u-hover">
              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/about.svg" alt="" class="l-header__icon" loading="lazy" data-aos="fade-up"></span>
              <span>採用情報</span>
              <span>recruit</span>
            </a>
          </li>

          <!-- contact -->
          <li class="l-header__item u-hover">
            <a href="<?php echo home_url('/contact'); ?>" class="l-header__link u-hover">
              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/about.svg" alt="" class="l-header__icon" loading="lazy" data-aos="fade-up"></span>
              <span>お問い合わせ</span>
              <span>contact</span>
            </a>
          </li>

        </ul>
      </nav>



      <!-- <nav class="l-header__nav u-sp-none">
        <ul class="l-header__list" data-aos="fade-up">
          <li class="l-header__item u-hover"><a href="<?php echo home_url('/concept'); ?>" class="l-header__link u-hover">concept</a></li>
          <li class="l-header__item u-hover"><a href="<?php echo home_url('/price'); ?>" class="l-header__link u-hover">price</a></li>
          <li class="l-header__item u-hover"><a href="<?php echo home_url('/letter'); ?>" class="l-header__link u-hover">letter</a></li>
          <li class="l-header__item c-button u-hover">
            <a href="<?php echo home_url('/reserve'); ?>" class="l-header__link reserve__btn">
              <i class="fa-solid fa-calendar-days"></i>
              <span class="fa-calendar-reserve">ご予約</span>
            </a>
          </li>
        </ul>
      </nav> -->


      <!-- ハンバーガーメニュー -->
      <div class="u-hover u-sp-show">
        <div class="c-button c-hamburger js-hamburger" data-aos="fade-up">
          <span class="c-hamburger__text">メニュー</span>
          <span class="c-hamburger__line-container">
            <span class="c-hamburger__line"></span>
            <span class="c-hamburger__line"></span>
            <span class="c-hamburger__line"></span>
          </span>
        </div>
      </div>

      <!-- ドロワーメニュー -->
      <div class="drawer js-drawer">
        <div class="drawer__inner">
          <nav class="drawer__nav">
            <ul class="drawer__list">
              <li class="drawer__item u-hover">
                <a href="<?php echo home_url('/'); ?>" class="drawer__link inview">home</a>
              </li>
              <li class="drawer__item u-hover">
                <a href="<?php echo home_url('/concept'); ?>" class="drawer__link inview">salon concept</a>
              </li>
              <li class="drawer__item u-hover">
                <a href="<?php echo home_url('/price'); ?>" class="drawer__link inview">price menu</a>
              </li>
              <li class="drawer__item u-hover">
                <a href="<?php echo home_url('/salons'); ?>" class="drawer__link inview">salons</a>
              </li>
              <li class="drawer__item u-hover">
                <a href="<?php echo home_url('/letter'); ?>" class="drawer__link inview">letter</a>
              </li>
              <li class="drawer__item u-hover">
                <a href="<?php echo home_url('/reserve'); ?>" class="drawer__link inview">reserve</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- ハンバーガーメニューここまで -->
    </div>

  </header>
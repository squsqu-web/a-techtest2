<?php get_header(); ?>


<!-- Main Visual -->
<section class="l-main-visual">
  <div class="l-main-visual__title">
    <h1 class="l-main-visual__title-ja" data-aos="fade-up">サイトマップ</h1>
    <p class="l-main-visual__title-en">Sitemap</p>
  </div>
</section>

<!-- カスタムパンくずリスト -->
<div class="breadcrumb-container u-hover" data-aos="fade-up">
  <nav class="breadcrumb">
    <a href="<?php echo home_url('/'); ?>">ホーム</a>
    <span class="sep" data-aos="fade-up">&gt;</span>
    <span>サイトマップ</span>
  </nav>
</div>


<!-- メインコンテンツセクション -->
<section class="p-sitemap">
  <div class="p-sitemap__inner">

    <!-- アイコン -->
    <div class="p-sitemap__icon-wrap">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/svg/sitemap.svg"
        alt=""
        class="p-sitemap__icon"
        loading="lazy"
        data-aos="fade-up">
    </div>


    <!-- サイトマップリスト -->
    <div class="l-sitemap">
      <div class="c-sitemap-card">

        <div class="c-sitemap-col">
          <ul class="c-sitemap-list">
            <li>
              <a href="<?php echo home_url('/'); ?>">
                <span class="dot"></span>TOP<span class="arrow">&gt;</span>
              </a>
            </li>

            <li>
              <a href="<?php echo home_url('/about/'); ?>">
                <span class="dot"></span>わたしたちのこと<span class="arrow">&gt;</span>
              </a>
            </li>

            <li>
              <a href="<?php echo home_url('/introduction/'); ?>">
                <span class="dot"></span>各園のご紹介<span class="arrow">&gt;</span>
              </a>
            </li>

            <li>
              <a href="<?php echo home_url('/letter/'); ?>">
                <span class="dot"></span>こもれびだより<span class="arrow">&gt;</span>
              </a>
            </li>

            <li>
              <a href="<?php echo home_url('/info/'); ?>">
                <span class="dot"></span>お知らせ<span class="arrow">&gt;</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="c-sitemap-col">
          <ul class="c-sitemap-list">
            <li>
              <a href="<?php echo home_url('/recruit/'); ?>">
                <span class="dot"></span>採用情報<span class="arrow">&gt;</span>
              </a>
            </li>

            <li>
              <a href="<?php echo home_url('/contact/'); ?>">
                <span class="dot"></span>お問い合わせ<span class="arrow">&gt;</span>
              </a>
            </li>

            <li>
              <a href="<?php echo home_url('/sitemap/'); ?>">
                <span class="dot"></span>サイトマップ<span class="arrow">&gt;</span>
              </a>
            </li>

            <li>
              <a href="<?php echo home_url('/privacy-policy/'); ?>">
                <span class="dot"></span>プライバシーポリシー<span class="arrow">&gt;</span>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>
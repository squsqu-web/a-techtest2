<?php get_header(); ?>


<!-- Main Visual -->
<section class="l-main-visual">
  <div class="l-main-visual__title">
    <h1 class="l-main-visual__title-ja inview">
      お探しのページが<br class="sp_only">見あたりません。
    </h1>
    <p class="l-main-visual__title-en inview">Page Not Found</p>
  </div>
</section>


<!-- カスタムパンくずリスト -->
<div class="breadcrumb-container inview">
  <nav class="breadcrumb u-hover">
    <a href="<?php echo esc_url(home_url('/')); ?>">TOP</a>
    <span class="sep" data-aos="fade-up">&gt;</span>
    <span>404</span>
  </nav>
</div>


<!-- 404メッセージセクション -->
<section class="p-404-message">
  <div class="p-404-message__inner">

    <p class="inview">
      申し訳ございません。<br>
      お探しのページは見つかりませんでした。<br>
      以下の可能性がございます。
    </p>

    <ul class="inview">
      <li>URLが変更された</li>
      <li>ページが存在しない</li>
    </ul>

    <p class="inview">恐れ入りますが、以下のリンクからお探しのページにお入りください。</p>

  </div>
</section>

<!-- サイトマップセクション -->
<section class="p-sitemap">
  <div class="p-sitemap__inner">

    <!-- アイコン -->
    <div class="p-sitemap__icon-wrap">
      <img
        src="<?php echo esc_url(get_template_directory_uri() . '/img/svg/sitemap.svg'); ?>"
        alt=""
        class="p-sitemap__icon inview"
        loading="lazy">
    </div>


    <!-- サイトマップリスト -->
    <div class="l-sitemap">
      <div class="c-sitemap-card">

        <div class="c-sitemap-col">
          <ul class="c-sitemap-list inview">
            <li class="u-hover">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <span class="dot"></span>TOP<span class="arrow">&gt;</span>
              </a>
            </li>

            <li class="u-hover">
              <a href="<?php echo esc_url(home_url('/about/')); ?>">
                <span class="dot"></span>わたしたちのこと<span class="arrow">&gt;</span>
              </a>
            </li>

            <li class="u-hover">
              <a href="<?php echo esc_url(home_url('/introduction/')); ?>">
                <span class="dot"></span>各園のご紹介<span class="arrow">&gt;</span>
              </a>
            </li>

            <li class="u-hover">
              <a href="<?php echo esc_url(home_url('/letter/')); ?>">
                <span class="dot"></span>こもれびだより<span class="arrow">&gt;</span>
              </a>
            </li>

            <li class="u-hover">
              <a href="<?php echo esc_url(home_url('/info/')); ?>">
                <span class="dot"></span>お知らせ<span class="arrow">&gt;</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="c-sitemap-col">
          <ul class="c-sitemap-list inview">
            <li class="u-hover">
              <a href="<?php echo esc_url(home_url('/recruit/')); ?>">
                <span class="dot"></span>採用情報<span class="arrow">&gt;</span>
              </a>
            </li>

            <li class="u-hover">
              <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                <span class="dot"></span>お問い合わせ<span class="arrow">&gt;</span>
              </a>
            </li>

            <li class="u-hover">
              <a href="<?php echo esc_url(home_url('/sitemap/')); ?>">
                <span class="dot"></span>サイトマップ<span class="arrow">&gt;</span>
              </a>
            </li>

            <li class="u-hover">
              <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">
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
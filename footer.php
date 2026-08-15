<footer class="footer">

  <!-- ナビゲーションとロゴ -->
  <section class="footer__menu">
    <h2 class="footer__logo inview">
      <a href="<?php echo home_url('/'); ?>" class="footer__logo-link u-hover">
        <picture>
          <source
            srcset="<?php echo get_template_directory_uri(); ?>/img/logo.webp"
            type="image/webp">

          <img
            src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
            alt="ロゴ画像">
        </picture>

      </a>
    </h2>
    <!-- pc -->
    <nav class="footer__nav">
      <ul class="footer__nav-list inview">
        <li class="footer__nav-item u-hover"><a href="<?php echo home_url('/about/'); ?>" class="footer__nav-link top-footer">わたしたちのこと</a></li>
        <li class="footer__nav-item u-hover"><a href="<?php echo home_url('/introduction/'); ?>" class="footer__nav-link">各園のご紹介</a></li>
        <li class="footer__nav-item u-hover"><a href="<?php echo home_url('/letter/'); ?>" class="footer__nav-link">こもれびだより</a></li>
        <li class="footer__nav-item u-hover"><a href="<?php echo home_url('/recruit/'); ?>" class="footer__nav-link">採用情報</a></li>
        <li class="footer__nav-item u-hover"><a href="<?php echo home_url('/info/'); ?>" class="footer__nav-link">お知らせ</a></li>
        <li class="footer__nav-item u-hover"><a href="<?php echo home_url('/contact/'); ?>" class="footer__nav-link">お問い合わせ</a></li>
        <li class="footer__nav-item u-hover"><a href="<?php echo home_url('/sitemap/'); ?>" class="footer__nav-link">サイトマップ</a></li>
        <li class="footer__nav-item u-hover"><a href="<?php echo home_url('/privacy-policy/'); ?>" class="footer__nav-link">プライバシーポリシー</a></li>
      </ul>
    </nav>

    <!-- sp -->
    <!-- sp -->
    <!-- <nav class="footer__nav sp_only">
      <ul class="footer__nav-list sp-list sp-list-top inview">
        <li class="footer__nav-item sp-item u-hover">
          <a href="<?php echo home_url('/about/'); ?>" class="footer__nav-link">わたしたちのこと</a>
        </li>
        <li class="footer__nav-item sp-item u-hover">
          <a href="<?php echo home_url('/introduction/'); ?>" class="footer__nav-link">各園のご紹介</a>
        </li>
        <li class="footer__nav-item sp-item u-hover">
          <a href="<?php echo home_url('/letter/'); ?>" class="footer__nav-link">こもれびだより</a>
        </li>
      </ul>

      <ul class="footer__nav-list sp-list sp-list-middle inview">
        <li class="footer__nav-item sp-item u-hover">
          <a href="<?php echo home_url('/recruit/'); ?>" class="footer__nav-link">採用情報</a>
        </li>
        <li class="footer__nav-item sp-item u-hover">
          <a href="<?php echo home_url('/info/'); ?>" class="footer__nav-link">お知らせ</a>
        </li>
        <li class="footer__nav-item sp-item u-hover">
          <a href="<?php echo home_url('/contact/'); ?>" class="footer__nav-link">お問い合わせ</a>
        </li>
      </ul>

      <ul class="footer__nav-list sp-list sp-list-bottom inview">
        <li class="footer__nav-item sp-item u-hover">
          <a href="<?php echo home_url('/site-map/'); ?>" class="footer__nav-link">サイトマップ</a>
        </li>
        <li class="footer__nav-item sp-item u-hover">
          <a href="<?php echo home_url('/privacy-policy/'); ?>" class="footer__nav-link">プライバシーポリシー</a>
        </li>
      </ul>
    </nav> -->

    <div class="footer__copyright">
      <p class="footer__copyright-text inview">
        &copy; 桜のこもれびキッズランド All Rights Reserved.
      </p>
    </div>
  </section>
</footer>

<!-- ページトップ -->
<div class="page-top">
  <a href="#" class="page-top__link inview"></a>
</div>

<!-- ↓共通背景用の為消さない -->
</div>

<?php wp_footer(); ?>
</body>

</html>
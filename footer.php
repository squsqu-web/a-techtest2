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
        <p class="footer__logo-title">VALENTINE<br>ROSE</p>
      </a>
    </h2>
    <!-- pc -->
    <nav class="footer__nav pc_only">
      <ul class="footer__nav-list inview">
        <li class="footer__nav-item u-hover"><a href="<?php echo home_url('/'); ?>" class="footer__nav-link top-footer">top</a></li>
        <li class="footer__nav-item u-hover"><a href="<?php echo home_url('/concept/'); ?>" class="footer__nav-link">concept</a></li>
        <li class="footer__nav-item u-hover"><a href="<?php echo home_url('/price/'); ?>" class="footer__nav-link">price</a></li>
        <li class="footer__nav-item u-hover"><a href="<?php echo home_url('/news/'); ?>" class="footer__nav-link">news</a></li>
        <li class="footer__nav-item u-hover"><a href="<?php echo home_url('/reserve/'); ?>" class="footer__nav-link">reserve</a></li>
        <li class="footer__nav-item u-hover"><a href="<?php echo home_url('/privacy-policy/'); ?>" class="footer__nav-link">privacy policy</a></li>
        <li class="footer__nav-item u-hover"><a href="<?php echo home_url('/site-map/'); ?>" class="footer__nav-link">site map</a></li>
      </ul>
    </nav>

    <!-- sp -->
    <nav class="footer__nav sp_only">
      <ul class="footer__nav-list sp-list sp-list-top inview">
        <li class="footer__nav-item sp-item u-hover"><a href="<?php echo home_url('/'); ?>" class="footer__nav-link top-footer">top</a></li>
        <li class="footer__nav-item sp-item u-hover"><a href="<?php echo home_url('/concept/'); ?>" class="footer__nav-link">concept</a></li>
        <li class="footer__nav-item sp-item u-hover"><a href="<?php echo home_url('/price/'); ?>" class="footer__nav-link">price</a></li>
      </ul>
      <ul class="footer__nav-list sp-list sp-list-middle inview">
        <li class="footer__nav-item sp-item u-hover"><a href="<?php echo home_url('/news/'); ?>" class="footer__nav-link">news</a></li>
        <li class="footer__nav-item sp-item u-hover"><a href="<?php echo home_url('/reserve/'); ?>" class="footer__nav-link">reserve</a></li>
      </ul>
      <ul class="footer__nav-list sp-list sp-list-bottom inview">
        <li class="footer__nav-item sp-item u-hover"><a href="<?php echo home_url('/privacy-policy404/'); ?>" class="footer__nav-link">privacy policy</a></li>
        <li class="footer__nav-item sp-item u-hover"><a href="<?php echo home_url('/site-map404/'); ?>" class="footer__nav-link">site map</a></li>
      </ul>
    </nav>

    <div class="footer__copyright">
      <p class="footer__copyright-text inview">
        &copy; ©桜のこもれびキッズランド All Rights Reserved.
      </p>
    </div>
  </section>
</footer>

<!-- ページトップ -->
<div class="page-top">
  <a href="#" class="page-top__link inview"></a>
</div>


<?php wp_footer(); ?>
</body>

</html>
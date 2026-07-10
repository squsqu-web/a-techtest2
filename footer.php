<footer class="footer">

  <?php
  // reserve / reserve-confirm / reserve-thanks の場合は非表示
  if (!is_page(array('reserve', 'reserve-confirm', 'reserve-thanks'))) :
  ?>
    <!-- 予約セクション -->
    <section class="footer__reserve">
      <a href="<?php echo home_url('/reserve'); ?>" class="reserve-link u-hover">
        <div class="footer__reserve-content">
          <h3 class="footer__reserve-title" data-aos="fade-up">reserve</h3>
          <p class="footer__reserve-text" data-aos="fade-up">予約はこちらから</p>
        </div>
      </a>
    </section>
  <?php endif; ?>

  <!-- リンクセクション -->
  <div class="footer__links">
    <section class="footer__links-item footer__links-item--salon">
      <a href="<?php echo home_url('/salons'); ?>" class="u-hover">
        <h3 class="footer__links-title-salons u-hover" data-aos="fade-up">salons</h3>
        <p class="footer__links-text" data-aos="fade-up">店舗一覧</p>
      </a>
    </section>
    <section class="footer__links-item footer__links-item--sns">
      <a href="https://www.instagram.com/valentine_rose_squ?igsh=bHBqNXRsNzVyajAx" target="_blank" class="u-hover">
        <h3 class="footer__links-title-sns" data-aos="fade-up">sns</h3>
        <p class="footer__links-text-sns" data-aos="fade-up">インスタグラム</p>
      </a>
    </section>
  </div>

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
        &copy; 2024 Valentine Rose., Ltd. All rights Reserved.
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
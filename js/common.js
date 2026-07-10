(function ($) {

  // ハンバーガーメニュー
  const hamburger = document.querySelector(".js-hamburger");
  const drawer = document.querySelector(".js-drawer");
  const drawerLinks = document.querySelectorAll(".js-drawer a");

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('is-active');
    drawer.classList.toggle('is-active');

    // 背景スクロール固定トグル
    document.body.classList.toggle('no-scroll');
  });

  drawerLinks.forEach(drawerLink => {
    drawerLink.addEventListener('click', () => {
      hamburger.classList.remove('is-active');
      drawer.classList.remove('is-active');
      document.body.classList.remove('no-scroll');
    });
  });

  drawer.addEventListener('click', () => {
    hamburger.classList.remove('is-active');
    drawer.classList.remove('is-active');
    document.body.classList.remove('no-scroll');
  });



  // AOS
  // 「js-stagger」クラスを自動で全振り
  document.querySelectorAll('.js-stagger > *').forEach((el, i) => {
    el.setAttribute('data-aos', 'fade-up');
    el.setAttribute('data-aos-delay', i * 100);
  });

  AOS.init({
    duration: 1300,
    once: true
  });



  //  inview
  jQuery(function ($) {
    $(".inview").on("inview", function (event, isInView) {
      if (isInView) {
        $(this).addClass("is-show");
      }
    });
  });



  // スムーズスクロール
  document.addEventListener('DOMContentLoaded', function () {
    const pageTop = document.querySelector('.page-top a');

    if (!pageTop) return;

    pageTop.style.display = 'none';

    // スクロールで表示/非表示
    window.addEventListener('scroll', function () {
      if (window.scrollY > 100) {
        pageTop.style.display = 'flex';
      } else {
        pageTop.style.display = 'none';
      }
    });

    // クリックでトップにスムーズスクロール
    pageTop.addEventListener('click', function (e) {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  });



  // 「.rellax」用パララックス
  if (document.querySelector('.rellax')) {
    new Rellax('.rellax', {
      speed: -5
    });
  }

  // この下は消さない
})(jQuery);
// featureスライド用
let swiper;

function initSwiper() {
  const isPC = window.innerWidth >= 769;

  if (swiper) {
    swiper.destroy(true, true);
  }

  swiper = new Swiper('.p-feature__swiper', {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    speed: 800,

    on: {
      slideChange: function () {
        const allTexts = document.querySelectorAll('.item-text');
        allTexts.forEach(text => text.classList.remove('is-active'));

        const currentIndex = this.realIndex;

        const targetTexts = document.querySelectorAll(`.p-feature__sub-list li:nth-child(${currentIndex + 1})`);
        targetTexts.forEach(el => el.classList.add('is-active'));
      },
    },

    ...(isPC
      ? {
        effect: 'fade',
        slidesPerView: 1,
        fadeEffect: { crossFade: true }
      }
      : {
        slidesPerView: 1.2,
        centeredSlides: true,
        spaceBetween: 16,
      })
  });
}

// 初期化
initSwiper();

window.addEventListener('resize', () => {
  initSwiper();
});



// アコーディオン
jQuery(function ($) {

  $('.accordion-content').hide();

  // 最初だけ開く
  $('.c-accordion__item:first .accordion-content').show();
  $('.c-accordion__item:first .accordion-header')
    .addClass('active')
    .find('.accordion-icon')
    .text('▲');

  $('.accordion-header').on('click', function () {

    const item = $(this).closest('.c-accordion__item');
    const content = item.find('.accordion-content');
    const icon = $(this).find('.accordion-icon');

    $('.c-accordion__item').not(item).each(function () {

      $(this)
        .find('.accordion-header')
        .removeClass('active')
        .find('.accordion-icon')
        .text('▼');

      $(this).find('.accordion-content').slideUp();

    });

    $(this).toggleClass('active');
    content.slideToggle();

    icon.text($(this).hasClass('active') ? '▲' : '▼');

  });

});
// アコーディオン
jQuery(function ($) {


  // アコーディオン
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
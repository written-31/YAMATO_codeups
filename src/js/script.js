
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  // 呼び出しの基本：
  const swiper = new Swiper('#slide1', {
    // ここにオプション設定が入ります
    direction: 'horizontal',
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    effect: 'fade',
    fadeEffect: {
      crossFade: true,
    },
  });

  //ハンバーガーメニュー
  $('.js-hamburer').on('click', function() {
    $(this).toggleClass('open');
    if($(this).hasClass('open')) {
      $('.js-nav').fadeIn();
      $('.header').addClass('transparent');
      $('body').css('overflow', 'hidden'); // スクロール無効化
      } else {
        $('.js-nav').fadeOut();
        $('.header').removeClass('transparent');
        $('body').css('overflow', 'auto'); // スクロール有効化
      }
    });





});

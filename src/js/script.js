
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

  // campaignスライダー
  const swiper2 = new Swiper('#slide2', {

    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1.31,
        spaceBetween: 24
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 3.5,
        spaceBetween: 24
      },
      1440: {
        slidesPerView: 4,
        spaceBetween: 40
      },

    }
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

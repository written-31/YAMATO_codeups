jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  // 呼び出しの基本：
  const swiper = new Swiper(".js-fv-slider", {
    // ここにオプション設定が入ります
    direction: "horizontal",
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
  });

  // campaignスライダー
  const swiper2 = new Swiper(".js-campaign-slider", {
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1.25,
        spaceBetween: 24,
      },
      425: {
        slidesPerView: 1.7,
        spaceBetween: 24,
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 3.5,
        spaceBetween: 24,
      },
      1440: {
        slidesPerView: 3.5,
        spaceBetween: 40,
      },
    },
  });

  //ハンバーガーメニュー
  $(".js-hamburer").on("click", function () {
    $(this).toggleClass("open");
    if ($(this).hasClass("open")) {
      $(".js-nav").fadeIn();
      $(".header").addClass("transparent");
      $("body").css("overflow", "hidden"); // スクロール無効化
    } else {
      $(".js-nav").fadeOut();
      $(".header").removeClass("transparent");
      $("body").css("overflow", "auto"); // スクロール有効化
    }
  });

  //要素の取得とスピードの設定
  var box = $(".colorbox"),
    speed = 500;

  //.colorboxの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
    $(this).append('<div class="color"></div>');
    var color = $(this).find($(".color")),
      image = $(this).find("img");
    var counter = 0;

    image.css("opacity", "0");
    color.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    color.on("inview", function () {
      if (counter == 0) {
        $(this)
          .delay(200)
          .animate({ width: "100%" }, speed, function () {
            image.css("opacity", "1");
            $(this).css({ left: "0", right: "auto" });
            $(this).animate({ width: "0%" }, speed);
          });
        counter = 1;
      }
    });
  });


    
  // ページトップボタン
  var topBtn = $('#js-pagetop');
  topBtn.hide();

  // ページトップボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ページトップボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });


  $(document).ready(function() {
    var pagetop = $('#js-pagetop');
    var svgPath = pagetop.find('svg path');
    var footer = $('footer');
    var footerHeight = footer.outerHeight();
  
    $(window).scroll(function() {
      var scrollTop = $(window).scrollTop();
      var windowHeight = $(window).height();
      var scrollBottom = scrollTop + windowHeight;
  
      if (scrollBottom >= footer.offset().top) {
        pagetop.css('border-color', '#fff');
        svgPath.css('stroke', '#fff'); // SVGパスの色を変更
      } else {
        pagetop.css('border-color', '');
        svgPath.css('stroke', ''); // デフォルトの色に戻す
      }
    });
  });
  
  // galleryのモーダルポップアップ
    MicroModal.init({
      awaitCloseAnimation: true,
      awaitOpenAnimation: true,
      disableScroll: true,
    });

  // tab切り替え
  $(function () {
    //最初のコンテンツ以外は非表示
    $(".information-contents__content:not(:first-of-type)").css("display", "none");
    //タブをクリックしたら
    $(".page-information__tab-item").on("click", function () {
      //現在選択中のタブからcurrentクラスを外す
      $(".js-btn-active").removeClass("js-btn-active");
      //クリックしたタブにcurrentクラスを付与
      $(this).addClass("js-btn-active");
      //クリックしたタブのインデックス番号を取得
      const index = $(this).index();
      //コンテンツを非表示、クリックしたタブのインデックス番号と同じコンテンツを表示
      $(".information-contents__content").hide().eq(index).show();
    });
  });

  //formのエラー表示
  $("#js-form").submit(function(event) {
    event.preventDefault(); // フォームのデフォルトの送信をキャンセル

    // 必須項目のチェック
    $(".form__body").each(function() {
      var inputVal = $(this).val().trim();
      if (inputVal === "") {
        // 必須項目が空欄の場合
        $(this).addClass("error");
      } else {
        $(this).removeClass("error");
      }
    });

    // エラーメッセージの表示と非表示の切り替え
    if ($("#js-form .form__body.error").length > 0) {
      // エラーメッセージを表示
      $(".form__error").show();
    } else {
      // エラーメッセージを非表示
      $(".form__error").hide();
    }
  });
});



<?php get_header(); ?>

<main>
  <div class="fv">
    <div class="swiper fv__swiper  js-fv-slider">
      <!-- [必須] Swiper ラッパー -->
      <div class="swiper-wrapper fv__wraapper">
        <!-- [必須] スライド -->
        <?php
        $image = SCF::get('firstview'); // 画像フィールドを取得
        if ($image) {
          foreach ($image as $img) {
            $image_url = wp_get_attachment_image_url($img, 'large'); // 'large' サイズの画像URLを取得
            $image_url_sp = wp_get_attachment_image_url($img, 'full'); // 'thumbnail' サイズの画像URLを取得
        ?>
            <div class="swiper-slide fv__slide">
              <picture>
                <!-- ↓幅800px以上で表示(PC)↓ -->
                <source srcset="<?php echo $image_url; ?>" media="(min-width: 768px)" />
                <!-- ↓上記全ての条件に当てはまらない場合(SP含む)に表示↓ -->
                <img src="<?php echo $image_url_sp; ?>" alt="ファーストビュー">
              </picture>
            </div>
        <?php
          }
        }
        ?>



        <div class="fv__text">
          <span class="fv__text-main">DIVING</span><!-- /fv-swiper__text-main -->
          <span class="fv__text-sub">into the ocean</span><!-- /fv-swiper__text-main -->
        </div>
      </div>
    </div>
  </div>
  <!-- /fv -->

  <section class="campaign l-top-campaign">
    <div class="inner">
      <div class="campaign__title section-title">
        <p class="section-title__sub">Campaign</p><!-- /section-title__sub -->
        <h2 class="section-title__main">キャンペーン</h2><!-- /section-title__main -->
      </div><!-- / -->
      <div class="campaign__swiper-box">
        <div class="campaign__swiper-around swiper-button-box">
          <div class="swiper-button-prev campaign__prev"></div>
          <div class="swiper-button-next campaign__next"></div>
        </div><!-- /swiper-button-box -->
        <div class="swiper campaign__swiper js-campaign-slider">
          <!-- [必須] Swiper ラッパー -->
          <div class="swiper-wrapper campaign__swiper-wrapper">
            <!-- [必須] スライド -->
            <div class="swiper-slide campaign__swiper-slide">
              <div class="campaign-card">
                <div class="campaign-card__thumb">
                  <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/campaign1.jpg" alt="ダイビング中に見れる魚の群れ" />
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__meta">
                    <p class="campaign-card__category">ライセンス講習</p>
                  </div><!-- /campaign-card__meta -->
                  <h3 class="campaign-card__title">ライセンス取得</h3>
                  <div class="campaign-card__wrap">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__discount">
                      <span class="campaign-card__discount-before"><span>
                        </span>¥56,000</span>
                      <span class="campaign-card__discount-after">¥46,000</span>
                    </div>
                    <!-- /campaign-card__discount -->
                  </div><!-- /campaign-card__body-footer -->
                </div>
                <!-- /card__body -->
              </div><!-- /card -->
            </div>
            <div class="swiper-slide campaign__swiper-slide">
              <div class="campaign-card">
                <div class="campaign-card__thumb">
                  <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/campaign1.jpg" alt="ダイビング中に見れる魚の群れ" />
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__meta">
                    <p class="campaign-card__category">ライセンス講習</p>
                  </div><!-- /campaign-card__meta -->
                  <h3 class="campaign-card__title">ライセンス取得</h3>
                  <div class="campaign-card__wrap">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__discount">
                      <span class="campaign-card__discount-before"><span>
                        </span>¥56,000</span>
                      <span class="campaign-card__discount-after">¥46,000</span>
                    </div>
                    <!-- /campaign-card__discount -->
                  </div><!-- /campaign-card__body-footer -->
                </div>
                <!-- /card__body -->
              </div><!-- /card -->
            </div>
            <div class="swiper-slide campaign__swiper-slide">
              <div class="campaign-card">
                <div class="campaign-card__thumb">
                  <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/campaign1.jpg" alt="ダイビング中に見れる魚の群れ" />
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__meta">
                    <p class="campaign-card__category">ライセンス講習</p>
                  </div><!-- /campaign-card__meta -->
                  <h3 class="campaign-card__title">ライセンス取得</h3>
                  <div class="campaign-card__wrap">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__discount">
                      <span class="campaign-card__discount-before"><span>
                        </span>¥56,000</span>
                      <span class="campaign-card__discount-after">¥46,000</span>
                    </div>
                    <!-- /campaign-card__discount -->
                  </div><!-- /campaign-card__body-footer -->
                </div>
                <!-- /card__body -->
              </div><!-- /card -->
            </div>
            <div class="swiper-slide campaign__swiper-slide">
              <div class="campaign-card">
                <div class="campaign-card__thumb">
                  <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/campaign1.jpg" alt="ダイビング中に見れる魚の群れ" />
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__meta">
                    <p class="campaign-card__category">ライセンス講習</p>
                  </div><!-- /campaign-card__meta -->
                  <h3 class="campaign-card__title">ライセンス取得</h3>
                  <div class="campaign-card__wrap">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__discount">
                      <span class="campaign-card__discount-before"><span>
                        </span>¥56,000</span>
                      <span class="campaign-card__discount-after">¥46,000</span>
                    </div>
                    <!-- /campaign-card__discount -->
                  </div><!-- /campaign-card__body-footer -->
                </div>
                <!-- /card__body -->
              </div><!-- /card -->
            </div>
          </div>
        </div><!-- /campaign__swiper-box -->
      </div>

      <div class="campaign__btn">
        <a href="page-campaign.html" class="btn slide"><span>View more</span></a><!-- /btn -->
      </div><!-- /campaign__btn -->
    </div><!-- /inner -->
  </section><!-- /campaign -->

  <section class="about l-top-about">
    <div class="about__inner inner">
      <div class="about__title section-title">
        <p class="section-title__sub">About us</p><!-- /section-title__sub -->
        <h2 class="section-title__main">私たちについて</h2><!-- /section-title__main -->
      </div><!-- / -->
      <div class="about__wrapper">
        <div class="about__thumb-wrapper">
          <div class="about__thumb1">
            <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/about_ocean1.jpg" alt="家を守るシーサー">
          </div><!-- /about__thumb1 -->
          <div class="about__thumb2">
            <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/about_ocean2.jpg" alt="ダイビング中に見れる魚">
          </div><!-- /about__thumb1 -->
          <div class="about__content">
            <div class="about__head">
              <h3 class="about__sub-title">Dive into<br>
                the Ocean
              </h3><!-- /about__sub-title -->
            </div><!-- /about__head -->
            <div class="about__body">
              <p class="about__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p><!-- /about__text -->
              <div class="about__btn">
                <a href="page-about.html" class="btn slide">View more<span></span></a><!-- /btn -->
              </div><!-- /about__btn -->
            </div><!-- /about__body -->
          </div><!-- /about__content -->
        </div><!-- /about__thumb-wrapper -->
      </div><!-- /about__wrapper -->
    </div><!-- /inner -->
  </section><!-- /about -->

  <section class="information l-top-information">
    <div class="information__inner inner">
      <div class="information__title section-title">
        <p class="section-title__sub">Information</p><!-- /section-title__sub -->
        <h2 class="section-title__main">ダイビング情報</h2><!-- /section-title__main -->
      </div><!-- / -->
      <div class="information__content information-contents">
        <div class="information-contents__content">
          <div class="information-contents__thumb js-colorbox">
            <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/information_fish.jpg" alt="ダイビング中に見れる魚の群れ">
          </div><!-- /information-contents__thumb -->
          <div class="information-contents__body">
            <h3 class="information-contents__sub-title">ライセンス講習</h3><!-- /information-contents__sub-title -->
            <p class="information-contents__text">
              当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
              正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
            </p><!-- /information-contents__text -->
            <div class="information-contents__btn">
              <a href="page-information.html" class="btn slide">View more<span></span></a><!-- /btn -->
            </div><!-- /information-contents__btn -->
          </div><!-- /information-contents__body -->
        </div>
      </div>
    </div><!-- /inner -->
  </section><!-- /information -->

  <section class="blog">
    <div class="blog__inner inner">
      <div class="blog__title section-title">
        <p class="section-title__sub section-title__sub--white">Blog</p><!-- /section-title__sub -->
        <h2 class="section-title__main section-title__main--white">ブログ</h2><!-- /section-title__main -->
      </div><!-- / -->
      <div class="blog__cards cards cards--col3 ">
        <a href="single-blog.html" class="cards__card card">
          <div class="card__thumb">
            <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/blog-card1.jpg" alt="神秘的なサンゴ礁" />
          </div>
          <!-- /card__thumb -->
          <div class="card__body">
            <p class="card__date">
              <time datetime="2023-11-17">2023.11/17</time>
            </p>
            <!-- /card__date -->
            <h3 class="card__title">ライセンス取得</h3>
            <!-- /card__title -->
            <p class="card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
            <!-- /card__text -->
          </div>
          <!-- /card__body -->
        </a><!-- /card -->
        <a href="single-blog.html" class="cards__card card ">
          <div class="card__thumb">
            <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/blog-card2.jpg" alt="ダイビング中稀に合うことのできるウミガメ" />
          </div>
          <!-- /card__thumb -->
          <div class="card__body">
            <p class="card__date">
              <time datetime="2023-11-17">2023.11/17</time>
            </p>
            <!-- /card__date -->
            <h3 class="card__title">ウミガメと泳ぐ</h3>
            <!-- /card__title -->
            <p class="card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
            <!-- /card__text -->
          </div>
          <!-- /card__body -->
        </a><!-- /card -->
        <a href="single-blog.html" class="cards__card card ">
          <div class="card__thumb">
            <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/blog-card3.jpg" alt="ダイビング中に見れるカクレクマノミ" />
          </div>
          <!-- /card__thumb -->
          <div class="card__body">
            <p class="card__date">
              <time datetime="2023-11-17">2023.11/17</time>
            </p>
            <!-- /card__date -->
            <h3 class="card__title">カクレクマノミ</h3>
            <!-- /card__title -->
            <p class="card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
            <!-- /card__text -->
          </div>
          <!-- /card__body -->
        </a><!-- /card -->
      </div>
      <div class="blog__btn">
        <a href="archive-blog.html" class="btn slide">View more<span></span></a><!-- /btn -->
      </div><!-- /blog__btn -->
    </div><!-- /inner -->
  </section><!-- /blog -->

  <section class="voice l-top-voice">
    <div class="inner voice__inner">
      <div class="voice__title section-title">
        <p class="section-title__sub">Voice</p><!-- /section-title__sub -->
        <h2 class="section-title__main">お客様の声</h2><!-- /section-title__main -->
      </div><!-- / -->
      <div class="voice__wrapper voice-cards">
        <div class="voice-cards__card voice-card">
          <div class="voice-card__head">
            <div class="voice-card__content">
              <div class="voice-card__info">
                <span class="voice-card__age">20代(女性)</span><!-- /voice-card__age -->
                <a href="page-voice.html" class="voice-card__category">ライセンス講習</a><!-- /voice-card__category -->
              </div>
              <!-- /voice-card__info -->
              <h3 class="voice-card__title">
                ここにタイトルが入ります。ここにタイトル
              </h3>
              <!-- /voice-card__title -->
            </div>
            <!-- /voice-card__content -->
            <div class="voice-card__thumb js-colorbox">
              <img src="<?php echo get_theme_file_uri()  ?>/dist/assets/images/common/voice-card1.jpg" alt="お客様の写真" />
            </div>
            <!-- /voice-card__thumb -->
          </div>
          <!-- /voice-card__head -->
          <div class="voice-card__body">
            <div class="voice-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。
            </div>
            <!-- /voice-card__text -->
          </div>
          <!-- /voice-card__body -->
        </div>
        <div class="voice__card voice-card">
          <div class="voice-card__head">
            <div class="voice-card__content">
              <div class="voice-card__info">
                <span class="voice-card__age">20代(男性)</span><!-- /voice-card__age -->
                <a href="page-voice.html" class="voice-card__category">ファンダイビング</a><!-- /voice-card__category -->
              </div>
              <!-- /voice-card__info -->
              <h3 class="voice-card__title">
                ここにタイトルが入ります。ここにタイトル
              </h3><!-- /voice-card__title -->
              <!-- /voice-card__title -->
            </div>
            <!-- /voice-card__content -->
            <div class="voice-card__thumb js-colorbox">
              <img src="<?php echo get_theme_file_uri()  ?>/dist/assets/images/common/voice-card2.jpg" alt="お客様の写真" />
            </div>
            <!-- /voice-card__thumb -->
          </div>
          <!-- /voice-card__head -->
          <div class="voice-card__body">
            <div class="voice-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。
            </div>
            <!-- /voice-card__text -->
          </div>
          <!-- /voice-card__body -->
        </div>
        <!-- /voice-card -->
      </div>
      <div class="voice__btn">
        <a href="page-voice.html" class="btn slide">View more<span></span></a>
      </div><!-- /price__btn -->
    </div><!-- /inner -->
  </section><!-- /voice -->

  <section class="price l-top-price">
    <div class="price__inner inner">
      <div class="price__title section-title">
        <p class="section-title__sub">Price</p><!-- /section-title__sub -->
        <h2 class="section-title__main">料金一覧</h2><!-- /section-title__main -->
      </div><!-- /price__title -->
      <div class="price__wrapper">
        <div class="price__thumb">
          <picture>
            <!-- ↓幅800px以上で表示↓ -->
            <source srcset="<?php echo get_theme_file_uri()  ?>/dist/assets/images/common/price-ocean.jpg" media="(min-width: 768px)" />
            <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
            <img src="<?php echo get_theme_file_uri()  ?>/dist/assets/images/common/price.jpg" alt="代替テキスト">
          </picture>
        </div>
        <div class="price__items">
          <div class="price__item">
            <h3 class="price__sub-title">ライセンス講習</h3><!-- /price__sub-title -->
            <dl>
              <div class="price__entry">
                <dt class="price__name">オープンウォーターダイバーコース</dt>
                <dd class="price__value">¥50,000</dd>
              </div>
              <div class="price__entry">
                <dt class="price__name">アドバンスドオープンウォーターコース</dt>
                <dd class="price__value">¥60,000</dd>
              </div>
              <div class="price__entry">
                <dt class="price__name">レスキュー＋EFRコース</dt>
                <dd class="price__value">¥70,000</dd>
              </div>
            </dl>
          </div><!-- /price__item -->
          <div class="price__item">
            <h3 class="price__sub-title">体験ダイビング</h3><!-- /price__sub-title -->
            <dl>
              <div class="price__entry">
                <dt class="price__name">ビーチ体験ダイビング(半日)</dt>
                <dd class="price__value">¥7,000</dd>
              </div>
              <div class="price__entry">
                <dt class="price__name">ビーチ体験ダイビング(1日)</dt>
                <dd class="price__value">¥14,000</dd>
              </div>
              <div class="price__entry">
                <dt class="price__name">ボート体験ダイビング(半日)</dt>
                <dd class="price__value">¥10,000</dd>
              </div>
              <div class="price__entry">
                <dt class="price__name">ボート体験ダイビング(1日)</dt>
                <dd class="price__value">¥18,000</dd>
              </div>
            </dl>
          </div><!-- /price__item -->
          <div class="price__item">
            <h3 class="price__sub-title">ファンダイビング</h3><!-- /price__sub-title -->
            <dl>
              <div class="price__entry">
                <dt class="price__name">ビーチダイビング(2ダイブ)</dt>
                <dd class="price__value">¥14,000</dd>
              </div>
              <div class="price__entry">
                <dt class="price__name">ボートダイビング(2ダイブ)</dt>
                <dd class="price__value">¥18,000</dd>
              </div>
              <div class="price__entry">
                <dt class="price__name">スペシャルダイビング(2ダイブ)</dt>
                <dd class="price__value">¥24,000</dd>
              </div>
              <div class="price__entry">
                <dt class="price__name">ナイトダイビング(1ダイブ)</dt>
                <dd class="price__value">¥10,000</dd>
              </div>
            </dl>
          </div><!-- /price__item -->
          <div class="price__item">
            <h3 class="price__sub-title">スペシャルダイビング</h3><!-- /price__sub-title -->
            <dl>
              <div class="price__entry">
                <dt class="price__name">貸切ダイビング(2ダイブ)</dt>
                <dd class="price__value">¥24,000</dd>
              </div>
              <div class="price__entry">
                <dt class="price__name">1日ダイビング(3ダイブ)</dt>
                <dd class="price__value">¥32,000</dd>
              </div>
            </dl>
          </div><!-- /price__item -->
        </div><!-- /price__items -->
      </div><!-- /price__wrapper -->
      <div class="price__btn">
        <a href="page-price.html" class="btn slide">View more<span></span></a><!-- /btn -->
      </div><!-- /price__btn -->
    </div><!-- /inner -->
  </section><!-- /price -->



  <?php get_footer(); ?>
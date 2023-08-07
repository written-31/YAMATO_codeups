<?php get_header(); ?>

<main>
      <div class="sub-fv">
        <div class="sub-fv__bg">
          <picture>
            <!-- ↓幅768px以上で表示↓ -->
            <source srcset="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/aboutus_fv.jpg" media="(min-width: 768px)" />
            <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
            <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/aboutus_fv-sp.jpg" alt="私たちについてのページのファーストビュー">
          </picture>
        </div>
        <h2 class="sub-fv__text">About us</h2>
      </div>
      <!-- /fv -->
      <div class="bread common-bread">
        <div class="inner">
          <div class="bread__nav">TOP > 私たちについて</div>
        </div>
      </div>

      <section class="about page-about l-page-about">
        <div class="about__inner inner">
          <div class="about__wrapper about__wrapper--top0">
            <div class="about__thumb-wrapper">
              <div class="about__thumb1 u-desktop">
                <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/about_ocean1.jpg" alt="家を守るシーサー">
              </div><!-- /about__thumb1 -->
              <div class="about__thumb2 about__thumb2--w100">
                <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/about_ocean2.jpg" alt="ダイビング中に見れる魚">
              </div><!-- /about__thumb1 -->
              <div class="about__content about__content--center">
                <div class="about__head about__head--absolute">
                  <h3 class="about__sub-title about__sub-title--white">Dive into<br>
                    the Ocean
                  </h3><!-- /about__sub-title -->
                </div><!-- /about__head -->
                <div class="about__body about__body--mt40">
                  <p class="about__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。                
                  </p><!-- /about__text -->
                </div><!-- /about__body -->
              </div><!-- /about__content -->
            </div><!-- /about__thumb-wrapper -->
          </div><!-- /about__wrapper -->
        </div><!-- /inner -->
      </section><!-- /about -->

      <section class="gallery l-gallery">
        <div class="gallery__inner inner">
          <div class="gallery__title section-title">
            <p class="section-title__sub">Gallery</p><!-- /section-title__sub -->
            <h2 class="section-title__main">フォト</h2><!-- /section-title__main -->
          </div><!-- / -->          
          <div class="gallery__container">

            <?php
            $gallery_images = SCF::get('gallerys');
            foreach ($gallery_images as $image ) {
            ?>

            <button class="gallery__button gallery__button1" data-micromodal-trigger="modal-1" aria-label="モーダル1のボタン">
              <img class="gallery__img" src="<?php echo esc_html( $image['gallery'] ); ?>" alt="小さい魚がたくさん泳いでいる海の中の絶景" />
            </button>
            <?php 
            } 
            ?>

          </div>
          <!-- modal -->
          <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
            <div class="modal__overlay" tabindex="-1" data-micromodal-close>
              <div class="modal__container" role="dialog" aria-modal="true">
                <img class="gallery-img_lg" src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/gallery1.jpg" alt="小さい魚がたくさん泳いでいる海の中の絶景" data-micromodal-close />
              </div>
            </div>
          </div>
          <div class="modal micromodal-slide" id="modal-2" aria-hidden="true">
            <div class="modal__overlay" tabindex="-1" data-micromodal-close>
              <div class="modal__container" role="dialog" aria-modal="true">
                <img class="gallery-img_lg" src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/gallery2.jpg" alt="綺麗なビーチの浜辺" data-micromodal-close />
              </div>
            </div>
          </div>
          <div class="modal micromodal-slide" id="modal-3" aria-hidden="true">
            <div class="modal__overlay" tabindex="-1" data-micromodal-close>
              <div class="modal__container" role="dialog" aria-modal="true">
                <img class="gallery-img_lg" src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/gallery3.jpg" alt="しましま模様がきれいな魚たち" data-micromodal-close />
              </div>
            </div>
          </div>
          <div class="modal micromodal-slide" id="modal-4" aria-hidden="true">
            <div class="modal__overlay" tabindex="-1" data-micromodal-close>
              <div class="modal__container" role="dialog" aria-modal="true">
                <img class="gallery-img_lg" src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/gallery4.jpg" alt="全身が黄色の魚" data-micromodal-close />
              </div>
            </div>
          </div>
          <div class="modal micromodal-slide" id="modal-5" aria-hidden="true">
            <div class="modal__overlay" tabindex="-1" data-micromodal-close>
              <div class="modal__container" role="dialog" aria-modal="true">
                <img class="gallery-img_lg" src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/gallery5.jpg" alt="小さい魚がたくさん泳いでいる海の中の絶景" data-micromodal-close />
              </div>
            </div>
          </div>
          <div class="modal micromodal-slide" id="modal-6" aria-hidden="true">
            <div class="modal__overlay" tabindex="-1" data-micromodal-close>
              <div class="modal__container" role="dialog" aria-modal="true">
                <img class="gallery-img_lg" src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/gallery6.jpg" alt="海底を泳ぐ魚の群れ" data-micromodal-close />
              </div>
            </div>
          </div>
        </div>
      </section>



<?php get_footer(); ?>
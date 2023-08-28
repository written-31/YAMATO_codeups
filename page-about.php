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
      <?php get_template_part('breadcrumb'); ?>
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
                私達のダイビングショップは、海の美しさとダイビングの楽しさを提供することを使命としています。<br>経験豊かなプロフェッショナルが安全で楽しいダイビング体験をご提供し、初心者から上級者までのニーズに応えます。<br>持続可能なダイビングを通じて海洋環境の保護も大切にし、未来の世代にも美しい海を残すことを目指しています。<br>私たちと一緒に素晴らしい海の世界を探検し、楽しさと感動を共有しましょう。
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
        $gallery_images = SCF::get('galleries');
        $modal_count = 1; // モーダルのカウンターを初期化

        foreach ($gallery_images as $image) :
          $image_id = $image['gallery']; // 画像のIDを取得
          $image_url = wp_get_attachment_image_url($image_id, 'full'); // 画像のURLを取得
        ?>

          <button class="gallery__button gallery__button<?php echo $modal_count; ?>" data-micromodal-trigger="modal-<?php echo $modal_count; ?>" aria-label="モーダル<?php echo $modal_count; ?>のボタン">
            <?php if ($image_url) : ?>
              <img class="gallery__img" src="<?php echo esc_url($image_url); ?>" />
            <?php endif; ?>
          </button>
        <?php
          $modal_count++; // モーダルのカウンターをインクリメント
        endforeach;
        ?>
        <?php
        $gallery_images = SCF::get('galleries');
        $modal_count = 1; // モーダルのカウンターを初期化

        foreach ($gallery_images as $image) :
          $image_id = $image['gallery']; // 画像のIDを取得
          $image_url = wp_get_attachment_image_url($image_id, 'full'); // 画像のURLを取得
        ?>
          <!-- modal -->
          <div class="modal micromodal-slide" id="modal-<?php echo $modal_count; ?>" aria-hidden="true">
            <div class="modal__overlay" tabindex="-1" data-micromodal-close>
              <div class="modal__container" role="dialog" aria-modal="true">
                <?php if ($image_url) : ?>
                  <img class="gallery__img" src="<?php echo esc_url($image_url); ?>" />
                <?php endif; ?>
              </div>
            </div>
          </div>

        <?php
          $modal_count++; // モーダルのカウンターをインクリメント
        endforeach;
        ?>

      </div>
  </section>



  <?php get_footer(); ?>
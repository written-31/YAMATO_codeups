<?php get_header(); ?>

<main>
      <div class="sub-fv">
        <div class="sub-fv__bg">
          <picture>
            <!-- ↓幅768px以上で表示↓ -->
            <source srcset="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/sitemap-bg_pc.jpg" media="(min-width: 768px)" />
            <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
            <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/sitemap-bg_sp.jpg" alt="ダイビング情報ページのファーストビュー">
          </picture>
        </div>
        <h2 class="sub-fv__text">Sitemap</h2>
      </div>
      <!-- /fv -->
      <div class="bread common-bread">
        <div class="inner">
          <?php get_template_part('breadcrumb'); ?>
        </div>
      </div>

      <div class="page-sitemap l-page-sitemap">
        <div class="page-sitemap__inner inner">
          <nav class="page-sitemap__content menu">
            <div class="menu__wrapper">
              <div class="menu__block">
                <ul class="menu__items menu__items--black">
                  <li class="menu__item menu__item--first-icon">
                    <a href="page-campaign.html">キャンペーン</a>
                  </li>
                  <!-- /header-content__item -->
                  <li class="menu__item">
                    <a href="page-campaign.html">ライセンス取得</a>
                  </li>
                  <!-- /header-content__item -->
                  <li class="menu__item">
                    <a href="page-campaign.html">貸切体験ダイビング</a>
                  </li>
                  <!-- /header-content__item -->
                  <li class="menu__item">
                    <a href="page-campaign.html">ナイトダイビング</a>
                  </li>
                  <!-- /header-content__item -->
                </ul>
                <!-- /header-content__items -->
                <ul class="menu__items menu__items--black">
                  <li class="menu__item menu__item--first-icon">
                    <a href="page-about.html">私たちについて</a>
                  </li>
                  <!-- /header-content__item -->
                </ul>
                <!-- /header-content__items -->
              </div>
              <!-- /footer__content-block -->
              <div class="menu__block">
                <ul class="menu__items menu__items--black">
                  <li class="menu__item menu__item--first-icon">
                    <a href="page-information.html">ダイビング情報</a>
                  </li>
                  <!-- /header-content__item -->
                  <li class="menu__item">
                    <a href="page-information.html">ライセンス講習</a>
                  </li>
                  <!-- /header-content__item -->
                  <li class="menu__item">
                    <a href="page-information.html">体験ダイビング</a>
                  </li>
                  <!-- /header-content__item -->
                  <li class="menu__item">
                    <a href="page-information.html">ファンダイビング</a>
                  </li>
                  <!-- /header-content__item -->
                </ul>
                <!-- /header-content__items -->
                <ul class="menu__items menu__items--black">
                  <li class="menu__item menu__item--first-icon">
                    <a href="archive-blog.html">ブログ</a>
                  </li>
                  <!-- /header-content__item -->
                </ul>
                <!-- /header-content__items -->
              </div>
              <!-- /footer__content-block -->
            </div>
            <div class="menu__wrapper">
              <div class="menu__block">
                <ul class="menu__items menu__items--black">
                  <li class="menu__item menu__item--first-icon">
                    <a href="page-voice.html">お客様の声</a>
                  </li>
                  <!-- /header-content__item -->
                </ul>
                <!-- /header-content__items -->
                <ul class="menu__items menu__items--black">
                  <li class="menu__item menu__item--first-icon">
                    <a href="page-price.html">料金一覧</a>
                  </li>
                  <!-- /header-content__item -->
                  <li class="menu__item">
                    <a href="page-price.html">ライセンス講習</a>
                  </li>
                  <!-- /header-content__item -->
                  <li class="menu__item">
                    <a href="page-price.html">体験ダイビング</a>
                  </li>
                  <!-- /header-content__item -->
                  <li class="menu__item">
                    <a href="page-price.html">ファンダイビング</a>
                  </li>
                  <!-- /header-content__item -->
                </ul>
                <!-- /header-content__items -->
              </div>
              <!-- /footer__content-block -->
              <div class="menu__block">
                <ul class="menu__items menu__items--black">
                  <li class="menu__item menu__item--first-icon">
                    <a href="page-faq.html">よくある質問</a>
                  </li>
                  <!-- /header-content__item -->
                </ul>
                <!-- /header-content__items -->
                <ul class="menu__items menu__items--black">
                  <li class="menu__item menu__item--first-icon">
                    <a href="page-privacy.html">プライバシー<br class="u-mobile" />ポリシー</a>
                  </li>
                  <!-- /header-content__item -->
                </ul>
                <!-- /header-content__items -->
                <ul class="menu__items menu__items--black">
                  <li class="menu__item menu__item--first-icon">
                    <a href="page-terms.html">利用規約</a>
                  </li>
                  <!-- /header-content__item -->
                </ul>
                <!-- /header-content__items -->
                <ul class="menu__items menu__items--black">
                  <li class="menu__item menu__item--first-icon">
                    <a href="page-contact.html">お問い合わせ</a>
                  </li>
                  <!-- /header-content__item -->
                </ul>
                <!-- /header-content__items -->
              </div>
              <!-- /footer__content-block -->
            </div>
          </nav>

        </div>
      </div>

<?php get_footer(); ?>
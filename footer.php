<?php
$home = esc_url(home_url('/home/'));
$campaign = esc_url(home_url('/campaign/'));
$about = esc_url(home_url('/about/'));
$information = esc_url(home_url('/information/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$price = esc_url(home_url('/price/'));
$faq = esc_url(home_url('/faq/'));
$contact = esc_url(home_url('/contact/'));
$privacy = esc_url(home_url('/privacy/'));
$terms = esc_url(home_url('/terms/'));
?>

<?php if (!is_page('contact') && !is_404()) : ?>
  <section class="contact l-top-contact">
    <div class="contact__inner inner">
      <div class="contact__wrapper">
        <div class="contact__info-wrapper">
          <div class="contact__logo">
            <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/CodeUps-logo_2.png" alt="CodeUps">
          </div><!-- /contact__logo -->
          <div class="contact__info">
            <div class="contact__info-detail">
              <address class="contact__address">
                <span>沖縄県那覇市1-1</span>
                <span>TEL:0120-000-0000</span>
              </address>
              <p class="contact__time">営業時間: <time datetime="08:30">8:30</time>-<time datetime="19:00">19:00</time></p>
              <p class="contact__holiday">定休日:毎週火曜日</p>
            </div><!-- /contact__info-detail -->
            <div class="contact__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.779121571587!2d72.99204830000001!3d4.2631442999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b4059352319c55d%3A0x147931506cb9527f!2zUmFzZGhvbywg44Oi44Or44OH44Kj44OW!5e0!3m2!1sja!2sjp!4v1688262630397!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- /contact__thumb -->
          </div><!-- /contact__info -->
        </div><!-- /contact__info-wrapper -->
        <div class="contact__area">
          <div class="contact__title section-title">
            <p class="section-title__sub section-title__sub--lg">Contact</p><!-- /section-title__sub -->
            <h2 class="section-title__main section-title__main--mt">お問い合わせ</h2><!-- /section-title__main -->
          </div><!-- / -->
          <p class="contact__text">
            ご予約・お問い合わせはコチラ
          </p><!-- /contact__text -->
          <div class="contact__btn">
            <a href="<?php echo $contact ?>" class="btn slide">Contact us<span></span></a><!-- /btn -->
          </div><!-- /contact__btn -->
        </div><!-- /contact__area -->
      </div><!-- /contact__wrapper -->
    </div><!-- /contact__inner -->
  </section><!-- /contact -->
<?php endif; ?>

</main>
<footer <?php if (is_404()) {
          echo 'class="footer"';
        } else {
          echo 'class="common-footer footer"';
        } ?>>
  <div class="footer__wrapper">
    <div class="footer__head">
      <div class="footer__logo">
        <a href="/"><img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/CodeUps-logo.png" alt="CodeUps" /></a>
      </div>
      <!-- /footer__logo -->
      <div class="footer__sns">
        <ul class="footer__sns-items">
          <li class="footer__sns-item">
            <a href="#">
              <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/icon_facebook.svg" alt="facebookのリンク" />
            </a>
          </li>
          <!-- /footer__sns-item -->
          <li class="footer__sns-item">
            <a href="#">
              <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/icon_instagram.svg" alt="instagramのリンク" />
            </a>
          </li>
          <!-- /footer__sns-item -->
        </ul>
        <!-- /footer__sns-items -->
      </div>
      <!-- /footer__sns -->
    </div>
    <!-- /footer__head -->
    <div class="footer__content">
      <nav class="footer__content-nav menu">
        <div class="menu__wrapper">
          <div class="menu__block">
            <ul class="menu__items">
              <li class="menu__item menu__item--first">
                <a href="<?php echo $campaign ?>">キャンペーン</a>
              </li>
              <!-- /header-content__item -->
              <li class="menu__item">
                <a href="<?php echo $campaign ?>">ライセンス取得</a>
              </li>
              <!-- /header-content__item -->
              <li class="menu__item">
                <a href="<?php echo $campaign ?>">貸切体験ダイビング</a>
              </li>
              <!-- /header-content__item -->
              <li class="menu__item">
                <a href="<?php echo $campaign ?>">ナイトダイビング</a>
              </li>
              <!-- /header-content__item -->
            </ul>
            <!-- /header-content__items -->
            <ul class="menu__items">
              <li class="menu__item menu__item--first">
                <a href="<?php echo $about ?>">私たちについて</a>
              </li>
              <!-- /header-content__item -->
            </ul>
            <!-- /header-content__items -->
          </div>
          <!-- /footer__content-block -->
          <div class="menu__block">
            <ul class="menu__items">
              <li class="menu__item menu__item--first">
                <a href="<?php echo $information ?>">ダイビング情報</a>
              </li>
              <!-- /header-content__item -->
              <li class="menu__item">
                <a href="<?php echo $information ?>">ライセンス講習</a>
              </li>
              <!-- /header-content__item -->
              <li class="menu__item">
                <a href="<?php echo $information ?>">体験ダイビング</a>
              </li>
              <!-- /header-content__item -->
              <li class="menu__item">
                <a href="<?php echo $information ?>">ファンダイビング</a>
              </li>
              <!-- /header-content__item -->
            </ul>
            <!-- /header-content__items -->
            <ul class="menu__items">
              <li class="menu__item menu__item--first">
                <a href="<?php echo $blog ?>">ブログ</a>
              </li>
              <!-- /header-content__item -->
            </ul>
            <!-- /header-content__items -->
          </div>
          <!-- /footer__content-block -->
        </div>
        <div class="menu__wrapper">
          <div class="menu__block">
            <ul class="menu__items">
              <li class="menu__item menu__item--first">
                <a href="<?php echo $voice ?>">お客様の声</a>
              </li>
              <!-- /header-content__item -->
            </ul>
            <!-- /header-content__items -->
            <ul class="menu__items">
              <li class="menu__item menu__item--first">
                <a href="<?php echo $price ?>">料金一覧</a>
              </li>
              <!-- /header-content__item -->
              <li class="menu__item">
                <a href="<?php echo $price ?>">ライセンス講習</a>
              </li>
              <!-- /header-content__item -->
              <li class="menu__item">
                <a href="<?php echo $price ?>">体験ダイビング</a>
              </li>
              <!-- /header-content__item -->
              <li class="menu__item">
                <a href="<?php echo $price ?>">ファンダイビング</a>
              </li>
              <!-- /header-content__item -->
            </ul>
            <!-- /header-content__items -->
          </div>
          <!-- /footer__content-block -->
          <div class="menu__block">
            <ul class="menu__items">
              <li class="menu__item menu__item--first">
                <a href="<?php echo $faq ?>">よくある質問</a>
              </li>
              <!-- /header-content__item -->
            </ul>
            <!-- /header-content__items -->
            <ul class="menu__items">
              <li class="menu__item menu__item--first">
                <a href="<?php echo $privacy ?>">プライバシー<br class="u-mobile" />ポリシー</a>
              </li>
              <!-- /header-content__item -->
            </ul>
            <!-- /header-content__items -->
            <ul class="menu__items">
              <li class="menu__item menu__item--first">
                <a href="<?php echo $terms ?>">利用規約</a>
              </li>
              <!-- /header-content__item -->
            </ul>
            <!-- /header-content__items -->
            <ul class="menu__items">
              <li class="menu__item menu__item--first">
                <a href="<?php echo $contact ?>">お問い合わせ</a>
              </li>
              <!-- /header-content__item -->
            </ul>
            <!-- /header-content__items -->
          </div>
          <!-- /footer__content-block -->
        </div>
      </nav>
      <!-- /header-content__nav -->
    </div>
    <!-- /footer__content -->
    <p class="footer__copyright">
      <small>Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights
        Reserved.</small>
    </p>
    <!-- /footer__copyright -->
  </div>
  <!-- /footer__wrapper -->
</footer>

<a class="pagetop" id="js-pagetop">
  <svg width="8" height="42" viewBox="0 0 8 42" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M7 41L7 1L1 8" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round" />
  </svg>
</a><!-- /pagetop -->

<?php wp_footer(); ?>
</body>

</html>
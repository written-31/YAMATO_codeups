<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- noindex -->
    <meta name="robots" content="noindex" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- <link
      href="https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap"
      rel="stylesheet"
    /> -->
  <?php wp_head(); ?>
</head>

<?php 
$home = esc_url( home_url( '/home/' ) );
$campaign = esc_url( home_url( '/campaign/' ) );
$about = esc_url( home_url( '/about/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$contact = esc_url( home_url( '/contact/' ) );
$privacy = esc_url( home_url( '/privacy/' ) );
$terms = esc_url( home_url( '/terms/' ) );
?>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
    <header class="header">
      <div class="header__inner">
        <h1 class="header__logo">
          <a href="/">
            <img src="<?php echo get_theme_file_uri()  ?>/dist/assets/images/common/CodeUps-logo.png" alt="CodeUps" />
          </a>
        </h1>
        <!-- /header__logo -->
        <button class="header__hamburger js-hamburer">
          <span></span>
          <span></span>
          <span></span></button
        ><!-- /header__hamburger -->
        <nav class="header__nav u-desktop">
          <ul class="header__items">
            <li class="header__item">
              <a href="<?php echo $campaign ?>" class="header__link">
                <span class="header__link-en">Campaign</span
                ><!-- /header__link-en -->
                <span class="header__link-ja">キャンペーン</span
                ><!-- /header__link-ja --> </a
              ><!-- /header__link -->
            </li>
            <!-- /header__item -->
            <li class="header__item">
              <a href="<?php echo $about ?>" class="header__link">
                <span class="header__link-en">About us</span
                ><!-- /header__link-en -->
                <span class="header__link-ja">私たちについて</span
                ><!-- /header__link-ja --> 
              </a><!-- /header__link -->
            </li>
            <!-- /header__item -->
            <li class="header__item">
              <a href="<?php echo $information ?>" class="header__link">
                <span class="header__link-en">Information</span
                ><!-- /header__link-en -->
                <span class="header__link-ja">ダイビング情報</span
                ><!-- /header__link-ja --> </a
              ><!-- /header__link -->
            </li>
            <!-- /header__item -->
            <li class="header__item">
              <a href="<?php echo $blog ?>" class="header__link">
                <span class="header__link-en">Blog</span
                ><!-- /header__link-en -->
                <span class="header__link-ja">ブログ</span
                ><!-- /header__link-ja --> </a
              ><!-- /header__link -->
            </li>
            <!-- /header__item -->
            <li class="header__item">
              <a href="<?php echo $voice ?>" class="header__link">
                <span class="header__link-en">Voice</span
                ><!-- /header__link-en -->
                <span class="header__link-ja">お客様の声</span
                ><!-- /header__link-ja --> </a
              ><!-- /header__link -->
            </li>
            <!-- /header__item -->
            <li class="header__item">
              <a href="<?php echo $price ?>" class="header__link">
                <span class="header__link-en">Price</span
                ><!-- /header__link-en -->
                <span class="header__link-ja">料金一覧</span
                ><!-- /header__link-ja --> </a
              ><!-- /header__link -->
            </li>
            <!-- /header__item -->
            <li class="header__item">
              <a href="<?php echo $faq ?>" class="header__link">
                <span class="header__link-en">FAQ</span
                ><!-- /header__link-en -->
                <span class="header__link-ja">よくある質問</span
                ><!-- /header__link-ja --> </a
              ><!-- /header__link -->
            </li>
            <!-- /header__item -->
            <li class="header__item">
              <a href="<?php echo $contact ?>" class="header__link">
                <span class="header__link-en">Contact</span
                ><!-- /header__link-en -->
                <span class="header__link-ja">お問い合わせ</span
                ><!-- /header__link-ja --> </a
              ><!-- /header__link -->
            </li>
            <!-- /header__item -->
          </ul>
          <!-- /header__items -->
        </nav>
        <!-- /header__nav -->
      </div><!-- /header__inner -->
    </header>
    <div class="header-content u-mobile js-nav">
      <nav class="header-content__nav menu">
        <div class="header-content__nav-wrapper menu__wrapper">
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
        <div class="header-content__nav-wrapper menu__wrapper">
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
          <ul class="menu__items">
            <li class="menu__item menu__item--first">
              <a href="<?php echo $faq ?>">よくある質問</a>
            </li>
            <!-- /header-content__item -->
          </ul>
          <!-- /header-content__items -->
          <ul class="menu__items">
            <li class="menu__item menu__item--first">
              <a href="<?php echo $privacy ?>">プライバシー<br />ポリシー</a>
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
      </nav>
      <!-- /header-content__nav -->
    </div>

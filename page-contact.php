<?php get_header(); ?>

<main>
  <div class="sub-fv">
    <div class="sub-fv__bg">
      <picture>
        <!-- ↓幅768px以上で表示↓ -->
        <source srcset="assets/images/common/contact-bg_pc.jpg" media="(min-width: 768px)" />
        <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
        <img src="./assets/images/common/contact-bg_sp.jpg" alt="コンタクトページのページのファーストビュー">
      </picture>
    </div>
    <h2 class="sub-fv__text">Contact</h2>
  </div>
  <!-- /fv -->
  <div class="bread common-bread">
    <div class="inner">
      <div class="bread__nav">TOP > お問い合わせ</div>
    </div>
  </div>

  <section class="page-contact l-page-contact">
    <div class="page-contact__inner inner">
      <form id="js-form" class="page-contact__form form" action="" method="post">
        <p class="form__error">※必須項目が入力されていません。入力してください。</p>
        <div class="form__row form__row--pt0">
          <label class="form__title" for="name">お名前<span class="form__required">必須</span></label>
          <input class="form__body" type="text" name="name" id="name" placeholder="山田 太郎" required>
        </div><!-- /contact__form-row -->
        <div class="form__row">
          <label class="form__title" for="email">メールアドレス<span class="form__required">必須</span></label>
          <input class="form__body" type="email" name="email" id="email" placeholder="xxx@example.com" required>
        </div><!-- /contact__form-row -->
        <div class="form__row">
          <label class="form__title" for="tel">電話番号<span class="form__required">必須</span></label>
          <input class="form__body" type="tel" name="tel" id="tel" placeholder="000-0000-0000" required>
        </div><!-- /contact__form-row -->
        <div class="form__row">
          <label class="form__title">お問合せ項目<span class="form__required">必須</span></label>
          <div class="form__body">
            <label for="check1">
              <input type="checkbox" id="check1" name="check1" value="ダイビング講習について">
              <span>ダイビング講習について</span>
            </label>
            <label for="check2">
              <input type="checkbox" id="check2" name="check2" value="ファンデイビングについて">
              <span>ファンデイビングについて</span>
            </label>
            <label for="check3">
              <input type="checkbox" id="check3" name="check3" value="体験ダイビングについて">
              <span>体験ダイビングについて</span>
            </label>
          </div>
        </div>
        <div class="form__row">
          <label class="form__title" for="tel">キャンペーン</label>
          <div class="form__select-wrap form__body">
            <select name="select">
              <option value="1">キャンペーン内容を選択</option>
              <option value="2">キャンペーン内容を選択</option>
              <option value="3">キャンペーン内容を選択</option>
            </select><!-- / -->
          </div><!-- /form__select-wrap -->
        </div><!-- /contact__form-row -->

        <div class="form__row">
          <label class="form__title" for="content">お問合せ内容<span class="form__required">必須</span></label>
          <textarea name="content" id="content"></textarea><!-- / -->
        </div><!-- /contact__form-row -->
        <div class="form__agree">
          <label>
            <input type="checkbox" name="agree" value="個人情報の取り扱いについて同意のうえ送信します。">
            <span class="form__agree-btn">個人情報の取り扱いについて同意のうえ<br class="u-mobile">
              送信します。</span>
          </label>
        </div>
        <div class="form__button">
          <button class="btn slide" disabled><span></span>Send</button><!-- /c-btn-submit -->
        </div><!-- /contact__button -->
      </form>

    </div>
  </section>

  <?php get_footer(); ?>
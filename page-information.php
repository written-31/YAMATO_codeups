<?php get_header(); ?>

<main>
      <div class="sub-fv">
        <div class="sub-fv__bg">
          <picture>
            <!-- ↓幅768px以上で表示↓ -->
            <source srcset="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/page-information_bg-pc.jpg" media="(min-width: 768px)" />
            <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
            <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/page-information_bg-sp.jpg" alt="ダイビング情報ページのファーストビュー">
          </picture>
        </div>
        <h2 class="sub-fv__text">Information</h2>
      </div>
      <!-- /fv -->
      <div class="bread common-bread">
        <div class="inner">
          <?php get_template_part('breadcrumb'); ?>
        </div>
      </div>

      <section class="page-information l-page-information">
        <div class="page-information__inner inner">
          <div class="page-information__tab">
            <!-- タブを構成するブロック -->
            <div class="page-information__tab-items">
              <button class="page-information__tab-item js-btn-active">
                <span class="page-information__tab-icon page-information__tab-icon--1 u-desktop">
                </span>
                <span>ライセンス<br class="u-mobile">講習</span>
              </button>
              <button class="page-information__tab-item">
                <span class="page-information__tab-icon page-information__tab-icon--2 u-desktop">
                </span>
                <span>ファン<br class="u-mobile">ダイビング</span>
              </button>
              <button class="page-information__tab-item">
                <span class="page-information__tab-icon page-information__tab-icon--3 u-desktop">
                </span>
                <span>体験<br class="u-mobile">ダイビング</span>
              </button>
            </div>
          
            <!-- コンテンツを構成するブロック -->
            <div class="page-information__contents information-contents">

              <div class="information-contents__content information-contents__content--border information-contents__content--flex">
                <div class="information-contents__thumb information-contents__thumb--mt js-colorbox">
                  <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/information_fish.jpg" alt="ダイビング中に見れる魚の群れ">
                </div><!-- /information-content__thumb -->
                <div class="information-contents__body information-contents__body--mt">
                  <h3 class="information-contents__sub-title information-contents__sub-title--fr">ライセンス講習</h3><!-- /information-content__sub-title -->
                  <p class="information-contents__text">
                    泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                  </p><!-- /information-content__text -->
                </div><!-- /information-content__body -->
              </div>

              <div class="information-contents__content information-contents__content--border information-contents__content--flex">
                <div class="information-contents__thumb information-contents__thumb--mt js-colorbox">
                  <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/information_fundiving.jpg" alt="ダイビング中に見れる魚の群れ">
                </div><!-- /information-content__thumb -->
                <div class="information-contents__body information-contents__body--mt">
                  <h3 class="information-contents__sub-title">ファンダイビング</h3><!-- /information-content__sub-title -->
                  <p class="information-contents__text">
                    ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                  </p><!-- /information-content__text -->
                </div><!-- /information-content__body -->
              </div>

              <div class="information-contents__content information-contents__content--border information-contents__content--flex">
                <div class="information-contents__thumb information-contents__thumb--mt js-colorbox">
                  <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/information_license.jpg" alt="ダイビング中に見れる魚の群れ">
                </div><!-- /information-content__thumb -->
                <div class="information-contents__body information-contents__body--mt">
                  <h3 class="information-contents__sub-title">体験ダイビング</h3><!-- /information-content__sub-title -->
                  <p class="information-contents__text">
                    ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                  </p><!-- /information-content__text -->
                </div><!-- /information-content__body -->
              </div>

            </div>
          </div>
        </div><!-- /inner -->
      </section><!-- /about -->

<?php get_footer(); ?>
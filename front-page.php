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

  <!-- 各ページへのリンク格納 -->
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

  <?php
  // 投稿タイプのみ指定する場合
  $args = array(
    'post_type' => 'campaign',
    'posts_per_page' => -1
  );
  // 追記はここまで↑
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) :
  ?>
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
              <?php while ($the_query->have_posts()) : $the_query->the_post();
              ?>
                <!-- [必須] スライド -->
                <div class="swiper-slide campaign__swiper-slide">
                  <div class="campaign-card">
                    <div class="campaign-card__thumb">
                      <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 
                      ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else : // なければnoimage画像をデフォルトで表示 
                      ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="">
                      <?php endif; ?>
                    </div>
                    <div class="campaign-card__body">
                      <div class="campaign-card__meta">
                        <?php
                        $taxonomy_terms = get_the_terms($post->ID, 'course');
                        if ($taxonomy_terms) {
                          echo '<span class="campaign-card__category">' . $taxonomy_terms[0]->name . '</span>';
                        }
                        ?>
                      </div><!-- /campaign-card__meta -->
                      <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                      <div class="campaign-card__wrap">
                        <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                        <div class="campaign-card__discount">
                          <span class="campaign-card__discount-before">
                            <?php if (get_field('campaign_before')) : ?>
                              <span></span><?php the_field('campaign_before') ?>
                            <?php endif ?>
                          </span>
                          <span class="campaign-card__discount-after">
                            <?php if (get_field('campaign_after')) : ?>
                              <?php the_field('campaign_after') ?>
                            <?php endif ?>
                          </span>
                        </div>
                        <!-- /campaign-card__discount -->
                      </div><!-- /campaign-card__body-footer -->
                    </div>
                    <!-- /card__body -->
                  </div><!-- /card -->
                </div>
            <?php endwhile;
              wp_reset_postdata();
            endif; ?>
            <!-- 記事のループ処理終了 -->
            </div>
          </div><!-- /campaign__swiper-box -->
        </div>

        <div class="campaign__btn">
          <a href="<?php echo $campaign ?>" class="btn slide"><span>View more</span></a><!-- /btn -->
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
                  <a href="<?php echo $about ?>" class="btn slide">View more<span></span></a><!-- /btn -->
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
                <a href="<?php echo $information ?>" class="btn slide">View more<span></span></a><!-- /btn -->
              </div><!-- /information-contents__btn -->
            </div><!-- /information-contents__body -->
          </div>
        </div>
      </div><!-- /inner -->
    </section><!-- /information -->


    <?php
    // 投稿タイプのみ指定する場合
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3
    );
    // 追記はここまで↑
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
    ?>
      <section class="blog">
        <div class="blog__inner inner">
          <div class="blog__title section-title">
            <p class="section-title__sub section-title__sub--white">Blog</p><!-- /section-title__sub -->
            <h2 class="section-title__main section-title__main--white">ブログ</h2><!-- /section-title__main -->
          </div><!-- / -->
          <div class="blog__cards cards cards--col3 ">
            <?php while ($the_query->have_posts()) : $the_query->the_post();
            ?>
              <a href="<?php the_permalink(); ?>" class="cards__card card">
                <div class="card__thumb">
                  <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 
                  ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : // なければnoimage画像をデフォルトで表示 
                  ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="">
                  <?php endif; ?>
                </div>
                <!-- /card__thumb -->
                <div class="card__body">
                  <p class="card__date">
                    <time datetime="<?php the_time('Y.n.j'); ?>">
                      <?php the_time('Y.m.d'); ?>
                    </time>
                  </p>
                  <!-- /card__date -->
                  <h3 class="card__title"><?php the_title(); ?></h3>
                  <!-- /card__title -->
                  <p class="card__text">
                    <?php the_excerpt(); ?>
                  </p>
                  <!-- /card__text -->
                </div>
                <!-- /card__body -->
              </a><!-- /card -->
          <?php endwhile;
            wp_reset_postdata();
          endif; ?>
          </div>
          <div class="blog__btn">
            <a href="<?php echo $blog ?>" class="btn slide">View more<span></span></a><!-- /btn -->
          </div><!-- /blog__btn -->
        </div><!-- /inner -->
      </section><!-- /blog -->


      <?php
      // 投稿タイプのみ指定する場合
      $args = array(
        'post_type' => 'voice',
        'posts_per_page' => 2
      );
      // 追記はここまで↑
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
        <section class="voice l-top-voice">
          <div class="inner voice__inner">
            <div class="voice__title section-title">
              <p class="section-title__sub">Voice</p><!-- /section-title__sub -->
              <h2 class="section-title__main">お客様の声</h2><!-- /section-title__main -->
            </div><!-- / -->
            <div class="voice__wrapper voice-cards">
              <?php while ($the_query->have_posts()) : $the_query->the_post();
              ?>
                <div class="voice-cards__card voice-card">
                  <div class="voice-card__head">
                    <div class="voice-card__content">
                      <div class="voice-card__info">
                        <span class="voice-card__age">
                          <?php if (get_field('voice_age')) : ?>
                            <?php the_field('voice_age') ?>
                          <?php endif ?>
                        </span><!-- /voice-card__age -->
                        <?php
                        $taxonomy_terms = get_the_terms($post->ID, 'voice-course');
                        if ($taxonomy_terms) {
                          echo '<span class="voice-card__category">' . $taxonomy_terms[0]->name . '</span>';
                        }
                        ?>
                      </div>
                      <!-- /voice-card__info -->
                      <h3 class="voice-card__title">
                        <?php the_title(); ?>
                      </h3>
                      <!-- /voice-card__title -->
                    </div>
                    <!-- /voice-card__content -->
                    <div class="voice-card__thumb js-colorbox">
                      <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 
                      ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else : // なければnoimage画像をデフォルトで表示 
                      ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="">
                      <?php endif; ?>
                    </div>
                    <!-- /voice-card__thumb -->
                  </div>
                  <!-- /voice-card__head -->
                  <div class="voice-card__body">
                    <div class="voice-card__text">
                      <?php the_excerpt(); ?>
                    </div>
                    <!-- /voice-card__text -->
                  </div>
                  <!-- /voice-card__body -->
                </div>
            <?php endwhile;
              wp_reset_postdata();
            endif; ?>
            <!-- /voice-card -->
            </div>
            <div class="voice__btn">
              <a href="<?php echo $voice ?>" class="btn slide">View more<span></span></a>
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
                <?php
                for ($i = 1; $i <= 4; $i++) {
                  $field_name = 'price-plan_' . $i;
                  $price_plans = SCF::get($field_name, 64);

                  if ($price_plans) :
                    $plan_title = SCF::get('plan_' . $i, 64); // SCFで設定したタイトルを取得
                ?>
                    <div class="price__item">
                      <h3 class="price__sub-title"><?php echo esc_html($plan_title); ?></h3><!-- /price__sub-title -->
                      <dl>
                        <?php foreach ($price_plans as $plan) : ?>
                          <div class="price__entry">
                            <dt class="price__name"><?php echo esc_html($plan['title_' . $i]); ?></dt>
                            <dd class="price__value"><?php echo esc_html($plan['price_' . $i]); ?></dd>
                          </div>
                        <?php endforeach; ?>
                      </dl>
                    </div><!-- /price__item -->
                <?php
                  endif;
                }
                ?>
              </div><!-- /price__items -->
            </div><!-- /price__wrapper -->
            <div class="price__btn">
              <a href="<?php echo $price ?>" class="btn slide">View more<span></span></a><!-- /btn -->
            </div><!-- /price__btn -->
          </div><!-- /inner -->
        </section><!-- /price -->



        <?php get_footer(); ?>
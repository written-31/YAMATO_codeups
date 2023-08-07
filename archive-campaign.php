<?php get_header(); ?>

<main>
  <div class="sub-fv">
    <div class="sub-fv__bg">
      <picture>
        <!-- ↓幅768px以上で表示↓ -->
        <source srcset="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/campaign-bg_pc.jpg" media="(min-width: 768px)" />
        <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
        <img src="<?php echo get_theme_file_uri() ?>/dist//assets/images/common/campaign-bg_sp.jpg" alt="キャンペーンページのファーストビュー">
      </picture>
    </div>
    <h2 class="sub-fv__text">Campaign</h2>
  </div>
  <!-- /fv -->

  <?php get_template_part('breadcrumb'); ?>

  <div class="page-campaign l-page-campaign">
    <div class="page-campaign__inner inner">
      <div class="page-campaign__tab">
        <ul class="common-tabs">
          <li class="common-tabs__tab is-current"><a>ALL</a></li>
          <li class="common-tabs__tab"><a>ライセンス講習</a></li>
          <li class="common-tabs__tab"><a>ファンダイビング</a></li>
          <li class="common-tabs__tab"><a>体験ダイビング</a></li>
        </ul>
      </div>
      <div class="page-campaign__content">
        <ul class="page-campaign__items">

          <?php
          $args = array(
            'post_type' => 'campaign',
            'posts_per_page' => 4,
            'paged' => get_query_var('paged')
          );
          $_query = new WP_Query($args);
          if ($_query->have_posts()) :
            while ($_query->have_posts()) : $_query->the_post();
          ?>


              <li class="page-campaign__item">
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
                  <div class="campaign-card__body campaign-card__body--padding">
                    <div class="campaign-card__meta">
                      <!-- カテゴリー(ターム)1つ表示 -->
                      <?php
                      $taxonomy_terms = get_the_terms($post->ID, 'course');
                      if ($taxonomy_terms) {
                        echo '<span class="campaign-card__category">' . $taxonomy_terms[0]->name . '</span>';
                      }
                      ?>
                    </div><!-- /campaign-card__meta -->
                    <h3 class="campaign-card__title campaign-card__title--pc"><?php the_title(); ?></h3>
                    <div class="campaign-card__wrap campaign-card__wrap--pt">
                      <p class="campaign-card__all">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__discount">
                        <span class="campaign-card__discount-before"><span>
                          </span>¥56,000</span>
                        <span class="campaign-card__discount-after">¥46,000</span>
                      </div>
                    </div>
                    <div class="campaign-card__footer u-desktop">
                      <p class="campaign-card__text">
                        <?php the_excerpt(); ?>
                      </p>
                      <div class="campaign-card__date">2023/6/1-9/30</div>
                      <p class="campaign-card__contact">ご予約・お問い合わせはコチラ</p>
                      <div class="campaign-card__btn">
                        <a href="#" class="btn slide">Contact us<span></span></a><!-- /btn -->
                      </div>
                    </div>
                  </div>
                  <!-- /card__body -->
                </div><!-- /card -->
              </li>

          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </ul>
      </div>

      <?php get_template_part('pagenation'); ?>
    </div>
  </div>


  <?php get_footer(); ?>
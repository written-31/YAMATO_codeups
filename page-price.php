<?php get_header(); ?>

<main>
  <div class="sub-fv">
    <div class="sub-fv__bg">
      <picture>
        <!-- ↓幅768px以上で表示↓ -->
        <source srcset="<?php echo get_theme_file_uri()  ?>/dist/assets/images/common/price-bg_pc.jpg" media="(min-width: 768px)" />
        <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
        <img src="<?php echo get_theme_file_uri()  ?>/dist/assets/images/common/price-bg_sp.jpg" alt="料金一覧ページのファーストビュー">
      </picture>
    </div>
    <h2 class="sub-fv__text">Price</h2>
  </div>
  <!-- /fv -->
  <div class="bread common-bread">
    <div class="inner">
    <?php get_template_part('breadcrumb'); ?>
    </div>
  </div>

  <div class="page-price l-page-price">
    <div class="page-price__inner inner">
      <div class="page-price__content">
        <?php
        for ($i = 1; $i <= 4; $i++) {
          $field_name = 'price-plan_' . $i;
          $price_plans = SCF::get($field_name);

          if ($price_plans) :
            $plan_title = SCF::get('plan_' . $i); // SCFで設定したタイトルを取得
        ?>

            <table class="page-price__table table">
              <thead>
                <tr class="table__row">
                  <th colspan="2" class="table__header">
                    <span><?php echo esc_html($plan_title); ?></span>
                    <span class="table__header-icon"><img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/icon-kujira_white.svg" alt="ジンベイザメのアイコン"></span>
                  </th>
                </tr>
              </thead>
              <tbody class="table__body">
                <?php foreach ($price_plans as $plan) : ?>
                  <tr class="table__row">
                    <td class="table__title"><?php echo esc_html($plan['title_' . $i]); ?></td>
                    <td class="table__price"><?php echo esc_html($plan['price_' . $i]); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
        <?php
          endif;
        }
        ?>
      </div>
    </div>
  </div>



  <?php get_footer(); ?>
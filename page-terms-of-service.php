<?php get_header(); ?>

<main>
  <div class="sub-fv">
    <div class="sub-fv__bg">
      <picture>
        <!-- ↓幅768px以上で表示↓ -->
        <source srcset="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/privacy-bg_pc.jpg" media="(min-width: 768px)" />
        <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
        <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/privacy-bg_sp.jpg" alt="ダイビング情報ページのファーストビュー">
      </picture>
    </div>
    <h2 class="sub-fv__text">Terms of Service</h2>
  </div>
  <!-- /fv -->
  <div class="bread common-bread">
    <div class="inner">
      <?php get_template_part('breadcrumb'); ?>
    </div>
  </div>

  <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <section class="page-terms-of-service l-page-terms">
        <div class="page-terms-of-service__inner inner">
          <div class="page-terms-of-service__contents">
            <h2 class="page-terms-of-service__title"><?php the_title(); ?></h2>
            <div class="page-terms-of-service__content">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </section>
  <? endwhile;
  endif;
  ?>

  <?php get_footer(); ?>
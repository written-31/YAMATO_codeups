<?php get_header(); ?>

<main>
  <div class="sub-fv">
    <div class="sub-fv__bg">
      <picture>
        <!-- ↓幅768px以上で表示↓ -->
        <source srcset="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/contact-bg_pc.jpg" media="(min-width: 768px)" />
        <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
        <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/contact-bg_sp.jpg" alt="コンタクトページのページのファーストビュー">
      </picture>
    </div>
    <h2 class="sub-fv__text">Contact</h2>
  </div>
  <!-- /fv -->
  <?php get_template_part('breadcrumb'); ?>


  <section class="page-contact l-page-contact">
    <div class="page-contact__inner inner">
    <?php echo do_shortcode('[contact-form-7 id="7cf4328" title="コンタクトフォーム 1"]'); ?>
    </div>
  </section>

  <?php get_footer(); ?>
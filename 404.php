<?php get_header(); ?>
<main>
  <div class="page-404 l-page-404">
    <div class="page-404__inner inner">
      <div class="page-404__bread bread common-bread">
        <?php get_template_part('breadcrumb'); ?>
      </div>
      <div class="page-404__content">
        <p class="page-404__title">404</p>
        <p class="page-404__text">申し訳ありません<br>お探しのページが見つかりません</p>
        <div class="page-404__btn">
          <a href="#" class="btn slide btn--white">Page TOP<span></span></a><!-- /btn -->
        </div><!-- /contact__btn -->
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
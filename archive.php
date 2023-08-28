<?php get_header(); ?>
<main>
  <div class="sub-fv">
    <div class="sub-fv__bg">
      <picture>
        <!-- ↓幅768px以上で表示↓ -->
        <source srcset="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/archive-blog_fv-pc.jpg" media="(min-width: 768px)" />
        <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
        <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/archive-blog_fv-sp.jpg" alt="ブログ一覧のファーストビュー">
      </picture>
    </div>
    <h2 class="sub-fv__text">Blog</h2>
  </div>
  <!-- /fv -->
  <div class="bread common-bread">
    <div class="inner">
      <?php get_template_part('breadcrumb'); ?>
    </div>
  </div>

  <div class="archive l-archive">
    <div class="archive__inner inner">
      <div class="archive__layout">
        <div class="archive__main">
          <div class="archive__cards cards cards--col2 ">
            <?php
            if (have_posts()) :
              while (have_posts()) : the_post(); ?>
                <!-- ループ開始 -->
                <a href="<?php the_permalink(); ?>" class="cards__card card">
                  <div class="card__thumb">
                    <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 
                    ?>
                      <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
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
                    <h2 class="card__title"><?php the_title(); ?></h2>
                    <!-- /card__title -->
                    <p class="card__text">
                      <?php the_excerpt(); ?>
                    </p>
                    <!-- /card__text -->
                  </div>
                  <!-- /card__body -->
                </a><!-- /card -->
            <? endwhile;
            endif;
            ?>
          </div>

          <?php get_template_part('pagenation'); ?>
        </div>

        <?php get_template_part('sidebar'); ?>
      </div>
    </div><!-- /inner -->
  </div><!-- /about -->


  <?php get_footer(); ?>
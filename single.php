<?php get_header(); ?>

<main>
  <div class="sub-fv">
    <div class="sub-fv__bg">
      <picture>
        <!-- ↓幅768px以上で表示↓ -->
        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/archive-blog_fv-pc.jpg" media="(min-width: 768px)" />
        <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/archive-blog_fv-sp.jpg" alt="ブログ詳細ページのファーストビュー">
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
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post(); ?>
              <section class="archive__single-body single-body">
                <div class="single-body__inner">
                  <p class="single-body__date">
                    <time datetime="<?php the_time('Y.n.j'); ?>">
                      <?php the_time('Y.m.d'); ?>
                    </time>
                  </p>
                  <!-- the_content()ループ開始 -->
                  <div class="single-body__content">
                    <h2><?php the_title(); ?></h2>
                    <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 
                    ?>
                      <div class="single-body__img">
                        <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                      <?php else : // なければnoimage画像をデフォルトで表示 
                      ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="">
                      </div>
                    <?php endif; ?>
                    <?php the_content(); ?>
                  </div>

                </div>
                <div class="archive__pagination-around pagination-around">
                  <?php
                  $prev_post = get_previous_post();
                  $next_post = get_next_post();
                  ?>
                  <ul class="pagination-around__items">
                    <?php if ($prev_post) : ?>
                      <li class="pagination-around__item">
                        <a href="<?php echo get_permalink($prev_post->ID); ?>">＜</a>
                      </li>
                    <?php endif; ?>
                    <?php if ($next_post) : ?>
                      <li class="pagination-around__item">
                        <a href="<?php echo get_permalink($next_post->ID); ?>">＞</a>
                      </li>
                    <?php endif; ?>
                  </ul>
                </div>
              </section>
          <? endwhile;
          endif;
          ?>
        </div>
        <?php get_template_part('sidebar'); ?>
      </div>
    </div><!-- /inner -->
  </div><!-- /about -->


  <?php get_footer(); ?>
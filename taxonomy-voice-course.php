<?php get_header(); ?>

<main>
  <div class="sub-fv">
    <div class="sub-fv__bg">
      <picture>
        <!-- ↓幅768px以上で表示↓ -->
        <source srcset="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/voice-bg_pc.jpg" media="(min-width: 768px)" />
        <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
        <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/voice-bg_sp.jpg" alt="キャンペーンページのファーストビュー">
      </picture>
    </div>
    <h2 class="sub-fv__text">Voice</h2>
  </div>
  <!-- /fv -->

  <?php get_template_part('breadcrumb'); ?>

  <div class="page-campaign l-page-campaign">
    <div class="page-campaign__inner inner">
      <div class="page-campaign__tab">
        <ul class="common-tabs">
          <?php
          $cat = get_queried_object();
          $cat_name = $cat->name;
          ?>

          <li class="common-tabs__tab"><a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">ALL</a></li>
          <?php
          $taxonomy_terms = get_terms('course', array('hide_empty' => false));
          foreach ($taxonomy_terms as $taxonomy_term) :
          ?>
            <li class="common-tabs__tab <?php
            if ($cat_name == esc_html($taxonomy_term->name)) {
              echo "is-current";
            } ?>"><a href="<?php echo esc_url(get_term_link($taxonomy_term, 'voice_course')); ?>"><?php echo esc_html($taxonomy_term->name); ?></a></li>
          <?php endforeach; ?>
        </ul>

      </div>
      <div class="page-voice__content">
        <div class="voice-cards voice-cards--gap">
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post(); ?>
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
          <? endwhile;
          endif;
          ?>
        </div>
      </div>

      <?php get_template_part('pagenation'); ?>
    </div>
  </div>


  <?php get_footer(); ?>
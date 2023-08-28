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


  <aside class="archive__sidebar sidebar">
    <div class="sidebar__inner">

      <section class="sidebar__articles">
        <div class="sidebar__title sidebar-title">
          <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/icon_sidebar.png" alt="ジンベイザメのアイコン">
          <h3>人気記事</h3>
        </div>

        <ul class="sidebar__articles-items">
          <?php
          $args = array(
            'post_type' => 'post',
            'range' => 'weekly',
            'limit' => '3',
          );
          $popular_posts = new \WordPressPopularPosts\Query($args);
          ?>
          <?php if ($popular_posts) : ?>
            <?php foreach ($popular_posts->get_posts() as $popular_post) : ?>
              <!-- ループ開始 -->
              <li class="sidebar__articles-item">
                <a class="sidebar__articles-link sidebar-article" href="<?php echo esc_url(get_permalink($popular_post->id)); ?>">
                  <div class="sidebar-article__card">
                    <div class="sidebar-article__img">
                      <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 
                      ?>
                        <img src="<?php echo get_the_post_thumbnail_url($popular_post->id); ?>" style="filter: none;">
                      <?php else : // なければnoimage画像をデフォルトで表示 
                      ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="">
                      <?php endif; ?>
                    </div>
                    <div class="sidebar-article__body">
                      <p class="sidebar-article__date">
                        <time datetime="<?php the_time('Y.n.j'); ?>">
                          <?php the_time('Y.m.d'); ?>
                        </time>
                      </p>
                      <h4 class="sidebar-article__title"><?php echo $popular_post->title ?></h4>
                    </div>
                  </div>
                </a>
              </li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </section>

      <?php
      // 投稿タイプのみ指定する場合
      $args = array(
        'post_type' => 'voice',
        'posts_per_page' => 1
      );
      // 追記はここまで↑
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
        <section class="sidebar__repeat l-sidebar">
          <div class="sidebar__title sidebar-title">
            <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/icon_sidebar.png" alt="ジンベイザメのアイコン">
            <h3>口コミ</h3>
          </div>
          <?php while ($the_query->have_posts()) : $the_query->the_post();
          ?>
            <div class="sidebar__repeat-img">
              <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 
              ?>
                <?php the_post_thumbnail(); ?>
              <?php else : // なければnoimage画像をデフォルトで表示 
              ?>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="">
              <?php endif; ?>
            </div>
            <div class="sidebar__repeat-body">
              <div class="sidebar__repeat-meta">
                <span class="voice-card__age">
                  <?php if (get_field('voice_age')) : ?>
                    <?php the_field('voice_age') ?>
                  <?php endif ?>
                </span><!-- /voice-card__age -->
              </div>
              <h4 class="sidebar__repeat-title"><?php the_title(); ?></h4>
            </div>
        <?php endwhile;
          wp_reset_postdata();
        endif; ?>
        <div class="sidebar__repeat-btn">
          <a href="<?php echo $voice ?>" class="btn slide">View more<span></span></a><!-- /btn -->
        </div><!-- /contact__btn -->
        </section>


        <?php
        // 投稿タイプのみ指定する場合
        $args = array(
          'post_type' => 'campaign',
          'posts_per_page' => 2
        );
        // 追記はここまで↑
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>
          <section class="sidebar__campaign l-sidebar">
            <div class="sidebar__title sidebar-title">
              <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/icon_sidebar.png" alt="ジンベイザメのアイコン">
              <h3>キャンペーン</h3>
            </div>
            <div class="sidebar__campaign-cards sidebar__campaign-cards--sidebar">

              <!-- サブループ開始 -->
              <?php while ($the_query->have_posts()) : $the_query->the_post();
              ?>

                <!-- 投稿のサムネイルや情報を表示する部分 -->
                <div class="sidebar__campaign-card campaign-card">
                  <div class="campaign-card__thumb campaign-card__thumb--sidebar">
                    <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 
                    ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : // なければnoimage画像をデフォルトで表示 
                    ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="">
                    <?php endif; ?>
                  </div>
                  <div class="campaign-card__body campaign-card__body--center campaign-card__body--sidebar">
                    <h3 class="campaign-card__title">
                      <?php
                      $taxonomy_terms = get_the_terms($post->ID, 'course');
                      if ($taxonomy_terms) {
                        echo $taxonomy_terms[0]->name;
                      }
                      ?>
                    </h3>
                    <div class="campaign-card__wrap campaign-card__wrap--center">
                      <p class="campaign-card__text campaign-card__text--sidebar">全部コミコミ(お一人様)</p>
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
            <?php endwhile;
              wp_reset_postdata();
            endif; ?>
            </div>
            <!-- サブループ終了 -->
    </div>
    <div class="sidebar__campaign-btn">
      <a href="<?php echo $campaign ?>" class="btn slide">View more<span></span></a><!-- /btn -->
    </div><!-- /contact__btn -->
    </section>

    <section class="sidebar__archive l-sidebar">
      <div class="sidebar__title sidebar-title">
        <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/icon_sidebar.png" alt="ジンベイザメのアイコン">
        <h3>アーカイブ</h3>
      </div>
      <div class="sidebar__archive-content">
        <?php
        $year_prev = null;
        $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
      YEAR( post_date ) AS year,
      COUNT( id ) as post_count FROM $wpdb->posts
      WHERE post_status = 'publish' and post_date <= now( )
      and post_type = 'post'
      GROUP BY month , year
      ORDER BY post_date DESC");
        foreach ($months as $month) :
          $year_current = $month->year;
          if ($year_current != $year_prev) {
            if ($year_prev != null) { ?>
              </ul>
      </div>
    <?php } ?>
    <details open>
      <summary><span></span><?php echo $month->year; ?></summary>
      <ul>
      <?php } ?>
      <li><a href="<?php echo get_month_link($month->year, $month->month); ?>"><span></span><?php echo date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>月</a></li>
    <?php $year_prev = $year_current;
        endforeach; ?>
      </ul>
    </details>
    </div>
    </section>
    </div>
  </aside>
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
              <a class="sidebar__articles-link sidebar-article" href="single-blog.html">
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

    <section class="sidebar__repeat l-sidebar">
      <div class="sidebar__title sidebar-title">
        <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/icon_sidebar.png" alt="ジンベイザメのアイコン">
        <h3>口コミ</h3>
      </div>
      <?php
      $latest_post = get_posts(array(
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
      ));

      if ($latest_post) :
        foreach ($latest_post as $post) :
          setup_postdata($post);
      ?>
          <div class="sidebar__repeat-img">
            <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/sidebar_repeat.jpg" alt="カップルの仲睦まじい写真">
          </div>
          <div class="sidebar__repeat-body">
            <div class="sidebar__repeat-meta">
              <?php
              $category = get_the_category();
              echo '<span class="sidebar__repeat-age">' . $category[0]->name . '</span>';
              ?>
            </div>
            <h4 class="sidebar__repeat-title"><?php the_title(); ?></h4>
          </div>
      <?php
        endforeach;
        wp_reset_postdata();
      else :
        echo 'まだ投稿がありません。';
      endif;
      ?>
  </div>
  <div class="sidebar__repeat-btn">
    <a href="#" class="btn slide">Contact us<span></span></a><!-- /btn -->
  </div><!-- /contact__btn -->
  </section>

  <section class="sidebar__campaign l-sidebar">
    <div class="sidebar__title sidebar-title">
      <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/icon_sidebar.png" alt="ジンベイザメのアイコン">
      <h3>キャンペーン</h3>
    </div>
    <div class="sidebar__campaign-cards sidebar__campaign-cards--sidebar">

      <!-- サブループ開始 -->
      <div class="sidebar">
        <?php
        // 最新の投稿を1件取得する
        $latest_post = get_posts(array(
          'post_type' => 'campaign', //カスタム投稿タイプの名称を入れる←ここ変える(投稿だったらpost.カスタム投稿ならslug名)
          'posts_per_page' => 2,  // 1件だけ取得する
          'orderby' => 'date',    // 日付でソート
          'order' => 'DESC'       // 最新から表示
        ));

        // 最新の投稿があるかチェック
        if ($latest_post) :
          // ループを使って投稿を表示
          foreach ($latest_post as $post) :
            setup_postdata($post);
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
                    <span class="campaign-card__discount-before campaign-card__discount-before--sidebar"><span>
                      </span>¥56,000</span>
                    <span class="campaign-card__discount-after campaign-card__discount-after--sidebar">¥46,000</span>
                  </div>
                  <!-- /campaign-card__discount -->
                </div><!-- /campaign-card__body-footer -->
              </div>
              <!-- /card__body -->
            </div><!-- /card -->
        <?php
          endforeach;
          wp_reset_postdata();  // ループのリセット
        else :
          echo 'まだ投稿がありません。';
        endif;
        ?>
      </div>
      <!-- サブループ終了 -->
    </div>
    <div class="sidebar__campaign-btn">
      <a href="#" class="btn slide">Contact us<span></span></a><!-- /btn -->
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
    <li><a href="<?php bloginfo('url') ?>/date/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>"><span></span><?php echo date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>月</a></li>
  <?php $year_prev = $year_current;
      endforeach; ?>
    </ul>
  </details>

  </div>
  </section>
  </div>
</aside>
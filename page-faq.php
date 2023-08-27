<?php get_header(); ?>

<main>
  <div class="sub-fv">
    <div class="sub-fv__bg">
      <picture>
        <!-- ↓幅768px以上で表示↓ -->
        <source srcset="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/faq-bg_pc.jpg" media="(min-width: 768px)" />
        <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
        <img src="<?php echo get_theme_file_uri() ?>/dist/assets/images/common/faq-bg_sp.jpg" alt="よくある質問ページのファーストビュー">
      </picture>
    </div>
    <h2 class="sub-fv__text">FAQ</h2>
  </div>
  <!-- /fv -->
  <div class="bread common-bread">
    <div class="inner">
      <?php get_template_part('breadcrumb'); ?>
    </div>
  </div>

  <section class="page-faq l-page-faq">
    <div class="page-faq__inner inner">
      <div class="page-faq__content">
        <?php
        $questions_and_answers = SCF::get('q_a'); // 繰り返しフィールドを取得

        if ($questions_and_answers) {
          foreach ($questions_and_answers as $qa) {
            $question = $qa['q']; // 質問
            $answer = $qa['a'];   // 回答
        ?>
            <details class="page-faq__accordion" open>
              <summary><?php echo esc_html($question); ?></summary>
              <p><?php echo esc_html($answer); ?></p>
            </details>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>
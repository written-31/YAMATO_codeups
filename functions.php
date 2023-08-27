<?php

/**
 * Functions
 */


/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup()
{
	add_theme_support('post-thumbnails'); /* アイキャッチ */
	add_theme_support('automatic-feed-links'); /* RSSフィード */
	add_theme_support('title-tag'); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action('after_setup_theme', 'my_setup');


/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
	// cssの読み込み
	wp_enqueue_style('swiper', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '1.0.1', 'all');
	wp_enqueue_style('my', get_template_directory_uri() . '/dist/assets/css/style.css', array(), '1.0.1', 'all');

	// googlefonts
	wp_enqueue_style('googlefonts', '//fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap', array(), null);

	// jQueryの読み込み
	// wp_deregister_script('jquery');
	wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', "", "1.0.1");
	wp_enqueue_script('swiper-js', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array('jquery'), '1.0.1', true);
	wp_enqueue_script('polyfill-js', '//polyfill.io/v3/polyfill.min.js?features=es6', array('jquery'), '1.0.1', true);
	wp_enqueue_script('micromodal-js', '//unpkg.com/micromodal/dist/micromodal.min.js', array('jquery'), '1.0.1', true);
	wp_enqueue_script('my', get_template_directory_uri() . '/dist/assets/js/script.js', array('jquery'), '1.0.1', true);
	wp_enqueue_script('inview-js', get_template_directory_uri() . '/dist/assets/js/jquery.inview.min.js', array('jquery'), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');


/**
 * アーカイブタイトル書き換え
 *
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */
function my_archive_title($title)
{

	if (is_home()) { /* ホームの場合 */
		$title = 'ブログ';
	} elseif (is_category()) { /* カテゴリーアーカイブの場合 */
		$title = '' . single_cat_title('', false) . '';
	} elseif (is_tag()) { /* タグアーカイブの場合 */
		$title = '' . single_tag_title('', false) . '';
	} elseif (is_post_type_archive()) { /* 投稿タイプのアーカイブの場合 */
		$title = '' . post_type_archive_title('', false) . '';
	} elseif (is_tax()) { /* タームアーカイブの場合 */
		$title = '' . single_term_title('', false);
	} elseif (is_search()) { /* 検索結果アーカイブの場合 */
		$title = '「' . esc_html(get_query_var('s')) . '」の検索結果';
	} elseif (is_author()) { /* 作者アーカイブの場合 */
		$title = '' . get_the_author() . '';
	} elseif (is_date()) { /* 日付アーカイブの場合 */
		$title = '';
		if (get_query_var('year')) {
			$title .= get_query_var('year') . '年';
		}
		if (get_query_var('monthnum')) {
			$title .= get_query_var('monthnum') . '月';
		}
		if (get_query_var('day')) {
			$title .= get_query_var('day') . '日';
		}
	}
	return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');


/**
 * 投稿タイプごとに異なるアーカイブの表示件数を指定
 * 
 * 参考：https://webcreatetips.com/coding/152/
 */
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
    return;

  if ( $query->is_post_type_archive('campaign') || $query->is_tax('course') ) {
    $query->set( 'posts_per_page', 4 ); // 数字だけで指定する場合は引用符をつけずに
  }

  if ( $query->is_post_type_archive('voice') || $query->is_tax('voice-course') ) {
    $query->set( 'posts_per_page', 6 ); // 数字だけで指定する場合は引用符をつけずに
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


// タクソノミー.phpの表示件数を指定
// function change_course_taxonomy_posts_per_page($query) {
//   if ( is_admin() || ! $query->is_main_query() )
//     return;

//   // taxonomy-course の一覧ページであるかチェック
//   if ( $query->is_tax('taxonomy-course') ) {
//     $query->set( 'posts_per_page', 4 ); // 投稿数を 4 件に設定
//   }
// }
// add_action( 'pre_get_posts', 'change_course_taxonomy_posts_per_page' );


/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
// function my_menu_init() {
// 	register_nav_menus(
// 		array(
// 			'global'  => 'ヘッダーメニュー',
// 			'utility' => 'ユーティリティメニュー',
// 			'drawer'  => 'ドロワーメニュー',
// 		)
// 	);
// }
// add_action( 'init', 'my_menu_init' );

function my_widget_init()
{
	register_sidebar(
		array(
			'name'  => 'サイドバー',
			'id' => 'sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-title">',
			'after_title' => '</div>',
		)
	);
}
add_action('init', 'my_widget_init');


/**
 * 管理メニューの「投稿」に関する表示を「NEWS（任意）」に変更
 *
 * 参考：https://wordpress-web.and-ha.com/change-management-screen-post/
 */
function change_post_menu_label()
{
	global $menu;
	global $submenu;
	$menu[5][0] = 'ブログ';
	$submenu['edit.php'][5][0] = 'ブログ一覧';
	$submenu['edit.php'][10][0] = '新しいブログ記事';
	$submenu['edit.php'][16][0] = 'タグ';
}


/**
 * 管理画面上の「投稿」に関する表示を「NEWS」に変更
 *
 * 参考：https://wordpress-web.and-ha.com/change-management-screen-post/
 */
function change_post_object_label()
{
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'ブログ';
	$labels->singular_name = 'ブログ';
	$labels->add_new = _x('追加', 'ブログ');
	$labels->add_new_item = 'ブログの新規追加';
	$labels->edit_item = 'ブログの編集';
	$labels->new_item = '新規ブログ';
	$labels->view_item = 'ブログを表示';
	$labels->search_items = 'ブログを検索';
	$labels->not_found = '記事が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';
}
add_action('init', 'change_post_object_label');
add_action('admin_menu', 'change_post_menu_label');


// Contact Form 7の自動pタグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

// mw wp form の自動pタグbrタグ消去
function mvwpform_autop_filter() {
  if (class_exists('MW_WP_Form_Admin')) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ($forms as $form) {
      add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
    }
  }
}
mvwpform_autop_filter();

// カラムを追加するコード
function add_custom_column($columns) {
	$columns['form_identifier'] = 'フォーム識別子';
	return $columns;
}
add_filter('manage_pages_columns', 'add_custom_column');

// カラムの内容を表示するコード
function display_custom_column($column, $post_id) {
	if ($column === 'form_identifier') {
			// フォーム識別子を取得
			$form_identifier = get_post_meta($post_id, 'form_identifier_key', true);
			echo esc_html($form_identifier);
	}
}
add_action('manage_pages_custom_column', 'display_custom_column', 10, 2);

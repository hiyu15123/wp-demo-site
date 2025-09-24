<?php 
/* --------------------------------------------
 * 　基本のセットアップ
 * -------------------------------------------- */
function setup_my_theme() {
   // タイトルタグ自動生成
   add_theme_support('title-tag');
   
   // RSSフィールドを有効化
   add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'setup_my_theme');

function my_theme_scripts() {
   // style.cssを読み込み
   wp_enqueue_style('all', get_theme_file_uri('/assets/css/style.css'),array(),'20241201');
   
   // jsを読み込み
   wp_enqueue_script('all', get_theme_file_uri('/assets/js/script.js'), array(), '20241201', true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

/* --------------------------------------------
 * 　施工実績
 * -------------------------------------------- */

function change_set_post($query) {
	if (is_admin() || !$query->is_main_query()) {
		return;
	}
	if ($query->is_post_type_archive('works')) {
		$query->set('posts_per_page', '9');
		return;
	}
}
add_action('pre_get_posts', 'change_set_post');

/* --------------------------------------------
 * 　フィルターフックテスト
 * -------------------------------------------- */
// function overwrite_content($content) {
// 	return 'フィルターフック作動' . $content;
// }
// add_filter('the_content', 'overwrite_content');

?>
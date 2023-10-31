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
    // css
    wp_enqueue_style('swiper-css', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '8.0.0', 'all');
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Gotu&family=Lato&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap', array(), '8.0.0', 'all');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1', 'all');

    // js
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.0.js', array('jquery'), '3.6.0', true);
    wp_enqueue_script('swiper-js', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array('jquery'), '8.0.0', true);
    wp_enqueue_script('script-js-inview', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('script-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.1', true);

    // GSAP
    // wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, true );
    // wp_enqueue_script( 'scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array(), null, true );
    // wp_enqueue_script( 'gsap2', get_template_directory_uri() . '/js/gsap.js', array( 'jquery' ), '1.0.1', true );

}
add_action('wp_enqueue_scripts', 'my_script_init');




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
/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */


/**
 * ウィジェットの登録
 *
 * @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
// function my_widget_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => 'サイドバー',
// 			'id'            => 'sidebar',
// 			'before_widget' => '<div id="%1$s" class="p-widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<div class="p-widget__title">',
// 			'after_title'   => '</div>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'my_widget_init' );


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
 * 抜粋文の文字数の変更
 *
 * @param int $length 変更前の文字数.
 * @return int $length 変更後の文字数.
 */
function my_excerpt_length($length)
{
    return 80;
}
add_filter('excerpt_length', 'my_excerpt_length', 999);


/**
 * 抜粋文の省略記法の変更
 *
 * @param string $more 変更前の省略記法.
 * @return string $more 変更後の省略記法.
 */
function my_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'my_excerpt_more');


// カスタム投稿表示件数
function change_posts_per_page($query)
{
    if (is_admin() || !$query->is_main_query())
        return;
    if ($query->is_post_type_archive('campaign')) { //カスタム投稿タイプを指定
        $query->set('posts_per_page', '4'); //表示件数を指定
    }
    if ($query->is_post_type_archive('voice')) { //カスタム投稿タイプを指定
        $query->set('posts_per_page', '6'); //表示件数を指定
    }
}
add_action('pre_get_posts', 'change_posts_per_page');



// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');




// ChatGPTから

// function custom_posts_per_page($query)
// {
//     if (is_admin() || !$query->is_main_query()) {
//         return;
//     }

//     // トップページの場合は1件だけ表示する
//     // if ($query->is_front_page()) {
//     //     $query->set('posts_per_page', 1);
//     // }

//     // // アーカイブページの場合は10件表示する
//     // if ($query->is_archive()) {
//     //     $query->set('posts_per_page', 6);
//     // }
// }
// add_action('pre_get_posts', 'custom_posts_per_page');


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}


function Change_menulabel() {
    global $menu;
    global $submenu;
    $name = 'ブログ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新しい'.$name;
    }
    function Change_objectlabel() {
    global $wp_post_types;
    $name = 'ブログ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
    }
    add_action( 'init', 'Change_objectlabel' );
    add_action( 'admin_menu', 'Change_menulabel' );

    // Contact Form7の送信ボタンをクリックした後の遷移先設定
add_action( 'wp_footer', 'add_origin_thanks_page' );
function add_origin_thanks_page() {
$thanks = home_url('/thanks/');
  echo <<< EOC
    <script>
      var thanksPage = {
        172: '{$thanks}',
      };
    document.addEventListener( 'wpcf7mailsent', function( event ) {
      location = thanksPage[event.detail.contactFormId];
    }, false );
    </script>
  EOC;
}
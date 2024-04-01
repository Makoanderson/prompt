<?php

    /*フォント設定、CSSファイル読込*/
    function readScript()
    {
        wp_enqueue_style(
            'Noto Serif Jp',
            '//fonts.googleapis.com/css2?family=Noto+serif+JP:wght@400;500;600;700&display=swap',
            []
        );
        wp_enqueue_style(
            'Zen Maru Gothic',
            '//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500;600;700&family=Zen+Maru+Gothic:wght@500;700&display=swap',
            []
        );
        wp_enqueue_style(
            'M plus 1',
            '//fonts.googleapis.com/css2?family=M+PLUS+1:wght@300;400;500&display=swap',
            []
        );
        wp_enqueue_style(
            'M plus 1p',
            '//fonts.googleapis.com/css2?family=M+PLUS+1:wght@300&family=M+PLUS+1p:wght@300&display=swap',
            []
        );
        wp_enqueue_style(
            'cssStyle',
            get_template_directory_uri() . '/styles.css/style.css',
            filemtime(get_template_directory() . '/styles.css/style.css'),
            [],
            false,
        );
    }
    add_action('wp_enqueue_scripts', 'readScript');

    /*jsファイルの読み込み*/
    function my_theme_enqueue_scripts() {
    // main.jsを登録
    wp_enqueue_script('my-custom-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
    }
    // wp_enqueue_scripts フックに登録したスクリプトを追加
    add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

      /* ---------- カスタム投稿の追加 ---------- */
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( // カスタム投稿タイプの追加関数
    'lp', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => 'ランディングページ', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 7, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );
  register_taxonomy_for_object_type('category', 'lp');
  register_taxonomy_for_object_type('post_tag', 'lp');
}
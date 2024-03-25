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
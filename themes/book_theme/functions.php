<?php
/**set up theme**/
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support(
        'html5',
        array(   
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}
add_action('after_setup_theme', 'my_setup');

/**load CSS JavaScript**/
function my_script_init()
{
    wp_enqueue_style('my_reset_css', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');
    wp_enqueue_style('my_css', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0', 'all');
    wp_enqueue_script('my_script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/** menu**/
function my_menu_init()
{
    register_nav_menus(
        array(
            'header_menu' => 'Header Menu',
            'footer_menu' => 'Footer Menu',
        )
    );
}
add_action('init', 'my_menu_init');

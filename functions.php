<?php
  /* ===============================================
      # functions.php
        テーマ内で利用する関数を定義したり、
        テーマの設定を行うためのファイルです。
    =============================================== */

    // メインカラムの幅を指定する変数。下記は 600px を指定（記述推奨）
    if ( ! isset( $content_width ) ) $content_width = 600;

    // カスタムメニュー機能を有効にするコード
    add_theme_support( 'menus' );

    // カスタムメニューの「場所」を設定するコード
    register_nav_menu( 'header-navi', 'ヘッダーのナビゲーション' );
    // register_nav_menu( 'sidebar-navi', 'サイドバーのナビゲーション' );
    register_nav_menu( 'footer-navi', 'フッターのナビゲーション' );

    //アイキャッチを使えるようにする
    add_theme_support('post-thumbnails');

    //表示した時のページ上部の管理バーを消す
    add_filter( 'show_admin_bar','__return_false' );
?>
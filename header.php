<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- <meta charset="utf-8" />↑と同じ -->

    <title>
    <?php if ( is_f1ront_page() ) {
      wp_title( '::', true, 'right' );
      }
      bloginfo( 'name' );
    ?>
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>images/favicon.png" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
    <!-- <?php wp_enqueue_script('jquery'); ?> -->
    <!-- WordPressのjqueryを使用する -->
    <!-- ワードプレス標準で読み込まれるjqueryファイルの場所
      ワードプレスインストールフォルダ/wp-includes/js/jquery/jquery.js -->

    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
    <?php wp_head(); ?>
    <!-- 必須「wp_head()」 -->
  </head>

  
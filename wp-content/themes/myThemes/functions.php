<?php 
  // ロゴの表示
  function original_the_custom_logo(){
    $logo = $tag = NULL;
    // ロゴが設定されている時
    if( has_custom_logo() ){
      // リンク付きロゴ画像を出力
      $logo = get_custom_logo();
    }
    // ロゴが設定されてないとき
    else{
      // リンク付きでテキストで出力
      $logo = '<a href="'.home_url().'">'.get_bloginfo( 'name' ).'</a>';
    }
      $tag = 'h1 ';
    echo '<'.$tag.'class="logo">'.$logo.'</'.$tag.'>';
  }


  // ナビゲーションメニューの利用
  function register_my_menus() {
    register_nav_menus( array(
      'main-menu' => 'Main Menu',
      'footer-menu' => 'Footer Menu',
    ));
  }

  add_action('after_setup_theme','register_my_menus');

  /*【表示カスタマイズ】アイキャッチ画像の有効化 */
add_theme_support( 'post-thumbnails' );


?>
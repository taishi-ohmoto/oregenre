<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style')
);
}


function init_func() {
  register_post_type('item', [
    'labels' => [
      'name' => '商品'
    ],
    'public' => true,
    'has_archive' => true,
    'hierarchial' => false,
    'menu_position' => 5,
    'menu_icon' => ''
  ]);
}

add_action('init','init_func');


// カスタム投稿にサムネイルを投稿
register_post_type(
'item',
  array(
  // 'supports'に'thumbnail'を追記
  'supports' => array('title','editor','thumbnail') 
  )
);


?>
<?php
// <title>タグ出力
add_theme_support('title-tag');
add_filter('document_title_separator', 'my_doc_title_separator');
function my_doc_title_separator($separator){
  $separator = '|';
  return $separator;
}

// アイキャッチ画像
add_theme_support('post-thumbnails');

// カスタムメニュー
add_theme_support('menus');

// wordpressに自動挿入されるimgダグのwidth, height属性を削除
add_filter( 'the_content', function( $html ){
  $html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
  return $html;
} );

<?php
add_action('init', function () {
  add_theme_support('post-thumbnails');
});

// アイキャッチがなければ標準を取得する。
function get_eyechatch()
{
  if (has_post_thumbnail()) :
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else :
    $img = array(get_template_directory_uri() . '/img/post-sample-image.jpg');
  endif;

  return $img;
}

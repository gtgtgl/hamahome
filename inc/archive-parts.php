<?php

function get_my_archive_title() {
  if(is_search()):  /* 検索結果 */
		return '「' . the_search_query() . '」で検索した結果';
  elseif(is_404()): /* 404 */
	  return '404 ページが見つかりません';
  elseif(is_date()): /* 日付アーカイブ */
    if(is_day()): /* 日別 */
      return get_query_var('year') . '年' . get_query_var('monthnum') . '月' . get_query_var('day') . '日';
    elseif(is_month()): /* 月別 */
      return get_query_var('year') . '年' . get_query_var('monthnum') . '月';
    elseif(is_year()): /* 年別 */
      return get_query_var('year') . '年';
    endif;
  elseif(is_author()): /* 投稿者 */
	  return '投稿者 : ' . the_author_meta('display_name', get_query_var('author'));
  elseif(is_tag()): /* タグ */
    return 'タグ : ' . single_tag_title('', false);
  elseif(is_category()): /* カテゴリー */
    return single_cat_title('', false);
  elseif(is_post_type_archive()): /* カスタム投稿アーカイブ */
    $wp_obj = get_queried_object();
    return $wp_obj->label;
  endif;
}

function get_my_archive_slug() {
  if(is_search()):  /* 検索結果 */
		//return 'search';
    return 'default';
  elseif(is_404()): /* 404 */
	  //return '404';
    return 'default';
  elseif(is_date()): /* 日付アーカイブ */
    //return 'date';
    return 'default';
  elseif(is_author()): /* 投稿者 */
	  //return 'author';
    return 'default';
  elseif(is_tag()): /* タグ */
    //return 'post_tag';
    return 'default';
  elseif(is_category()): /* カテゴリー */
    $wp_obj = get_queried_object();
    $slug   = $wp_obj->slug;
    if($slug === 'president' || $slug === 'staff' || $slug === 'news'):
      return $wp_obj->slug;
    else:
      //return 'category';
      return 'default';
    endif; 
  elseif(is_post_type_archive()): /* カスタム投稿アーカイブ */
    $wp_obj = get_queried_object();
    return $wp_obj->name;
  endif;
}


// 抜粋文字数指定
function register_excerpt_length()
{
  return 64;
}
add_filter('excerpt_length', 'register_excerpt_length', 999);

<?php

if ( !defined( 'ABSPATH' ) ) exit;


// 投稿からタグを削除
function hamahome_unregister_taxonomies()
{
    global $wp_taxonomies;
    if (!empty($wp_taxonomies['post_tag']->object_type)) {
        foreach ($wp_taxonomies['post_tag']->object_type as $i => $object_type) {
            if ($object_type == 'post') {
                unset($wp_taxonomies['post_tag']->object_type[$i]);
            }
        }
    }
 
    return true;
}
 
add_action('init', 'hamahome_unregister_taxonomies');

// 「投稿」を「お知らせ」に変更する
function hamahome_change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'お知らせ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function hamahome_change_objectlabel() {
	global $wp_post_types;
	$name = 'お知らせ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'hamahome_change_objectlabel' );
add_action( 'admin_menu', 'hamahome_change_menulabel' );

// let's create the function for the custom type
function custom_post_example() {
	// creating (registering) the custom type
	register_post_type( 'president_blog', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( '社長ブログ', 'hamahome' ), /* This is the Title of the Group */
			'singular_name' => __( '社長ブログ', 'hamahome' ), /* This is the individual type */
			'all_items' => __( '社長ブログ一覧', 'hamahome' ), /* the all items menu item */
			'add_new' => __( 'ブログを投稿する', 'hamahome' ), /* The add new menu item */
			'add_new_item' => __( '新しいブログを投稿する', 'hamahome' ), /* Add New Display Title */
			'edit' => __( '編集', 'hamahome' ), /* Edit Dialog */
			'edit_item' => __( '編集', 'hamahome' ), /* Edit Display Title */
			'new_item' => __( '新しい社長ブログ', 'hamahome' ), /* New Display Title */
			'view_item' => __( '社長ブログを見る', 'hamahome' ), /* View Display Title */
			'search_items' => __( '社長ブログを検索', 'hamahome' ), /* Search Custom Type Title */
			'not_found' =>  __( 'まだ社長ブログがありません', 'hamahome' ), /* This displays if there are no entries yet */
			'parent_item_colon' => ''
			), /* end of arrays */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-edit', /* the icon for the custom post type menu */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => true,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail', 'author', 'excerpt', 'sticky')
		) /* end of options */
	); /* end of register post type */
    
	// creating (registering) the custom type
	register_post_type( 'staff_blog', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'スタッフブログ', 'hamahome' ), /* This is the Title of the Group */
			'singular_name' => __( 'スタッフブログ', 'hamahome' ), /* This is the individual type */
			'all_items' => __( 'スタッフブログ一覧', 'hamahome' ), /* the all items menu item */
			'add_new' => __( 'ブログを投稿する', 'hamahome' ), /* The add new menu item */
			'add_new_item' => __( '新しいブログを投稿する', 'hamahome' ), /* Add New Display Title */
			'edit' => __( '編集', 'hamahome' ), /* Edit Dialog */
			'edit_item' => __( '編集', 'hamahome' ), /* Edit Display Title */
			'new_item' => __( '新しいスタッフブログ', 'hamahome' ), /* New Display Title */
			'view_item' => __( 'スタッフブログを見る', 'hamahome' ), /* View Display Title */
			'search_items' => __( 'スタッフブログを検索', 'hamahome' ), /* Search Custom Type Title */
			'not_found' =>  __( 'まだスタッフブログがありません', 'hamahome' ), /* This displays if there are no entries yet */
			'parent_item_colon' => ''
			), /* end of arrays */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-edit', /* the icon for the custom post type menu */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => true,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail', 'author', 'excerpt', 'sticky')
		) /* end of options */
	); /* end of register post type */

	// creating (registering) the custom type
	register_post_type( 'construction', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( '施工事例', 'hamahome' ), /* This is the Title of the Group */
			'singular_name' => __( '施工事例', 'hamahome' ), /* This is the individual type */
			'all_items' => __( '施工事例一覧', 'hamahome' ), /* the all items menu item */
			'add_new' => __( '施工事例を投稿する', 'hamahome' ), /* The add new menu item */
			'add_new_item' => __( '新しい施工事例を投稿する', 'hamahome' ), /* Add New Display Title */
			'edit' => __( '編集', 'hamahome' ), /* Edit Dialog */
			'edit_item' => __( '編集', 'hamahome' ), /* Edit Display Title */
			'new_item' => __( '新しい施工事例', 'hamahome' ), /* New Display Title */
			'view_item' => __( '施工事例を見る', 'hamahome' ), /* View Display Title */
			'search_items' => __( '施工事例を検索', 'hamahome' ), /* Search Custom Type Title */
			'not_found' =>  __( 'まだ施工事例がありません', 'hamahome' ), /* This displays if there are no entries yet */
			'parent_item_colon' => ''
			), /* end of arrays */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 6, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-portfolio', /* the icon for the custom post type menu */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => true,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail', 'author', 'excerpt', 'sticky')
		) /* end of options */
	); /* end of register post type */
}
	add_action( 'init', 'custom_post_example');

	register_taxonomy( 'president_blog_cat',
		array('president_blog'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'カテゴリー', 'hamahome' ), /* name of the custom taxonomy */
				'singular_name' => __( 'カテゴリー', 'hamahome' ), /* single taxonomy name */
				'all_items' => __( 'カテゴリー一覧', 'hamahome' ), /* all title for taxonomies */
				'parent_item' => __( '親カテゴリー', 'hamahome' ), /* parent title for taxonomy */
				'parent_item_colon' => __( '親カテゴリー：', 'hamahome' ), /* parent taxonomy title */
				'edit_item' => __( '編集', 'hamahome' ), /* edit custom taxonomy title */
				'update_item' => __( '更新', 'hamahome' ), /* update title for taxonomy */
				'add_new_item' => __( 'カテゴリーを追加する', 'hamahome' ), /* add new title for taxonomy */
				'new_item_name' => __( 'カテゴリーの名前', 'hamahome' ) /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
      'has_archive' => true,  //trueにすると投稿した記事の一覧ページを作成することができる
		)
	);

	register_taxonomy( 'staff_blog_cat',
		array('staff_blog'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'カテゴリー', 'hamahome' ), /* name of the custom taxonomy */
				'singular_name' => __( 'カテゴリー', 'hamahome' ), /* single taxonomy name */
				'all_items' => __( 'カテゴリー一覧', 'hamahome' ), /* all title for taxonomies */
				'parent_item' => __( '親カテゴリー', 'hamahome' ), /* parent title for taxonomy */
				'parent_item_colon' => __( '親カテゴリー：', 'hamahome' ), /* parent taxonomy title */
				'edit_item' => __( '編集', 'hamahome' ), /* edit custom taxonomy title */
				'update_item' => __( '更新', 'hamahome' ), /* update title for taxonomy */
				'add_new_item' => __( 'カテゴリーを追加する', 'hamahome' ), /* add new title for taxonomy */
				'new_item_name' => __( 'カテゴリーの名前', 'hamahome' ) /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
      'has_archive' => true,  //trueにすると投稿した記事の一覧ページを作成することができる
		)
	);

	register_taxonomy( 'construction_cat',
		array('construction'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'カテゴリー', 'hamahome' ), /* name of the custom taxonomy */
				'singular_name' => __( 'カテゴリー', 'hamahome' ), /* single taxonomy name */
				'all_items' => __( 'カテゴリー一覧', 'hamahome' ), /* all title for taxonomies */
				'parent_item' => __( '親カテゴリー', 'hamahome' ), /* parent title for taxonomy */
				'parent_item_colon' => __( '親カテゴリー：', 'hamahome' ), /* parent taxonomy title */
				'edit_item' => __( '編集', 'hamahome' ), /* edit custom taxonomy title */
				'update_item' => __( '更新', 'hamahome' ), /* update title for taxonomy */
				'add_new_item' => __( 'カテゴリーを追加する', 'hamahome' ), /* add new title for taxonomy */
				'new_item_name' => __( 'カテゴリーの名前', 'hamahome' ) /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
      'has_archive' => true,  //trueにすると投稿した記事の一覧ページを作成することができる
		)
	);

////////////////////////////////////////////////////////////////////
//カスタムフィールドの見た目（入力欄等）を追加する
// 参考：https://suzulang.com/wordpress-custom-field-addmetabox/

function hamahome_create_metabox(){
  // ① メタボックスの特性を定義する
  add_meta_box( 
    'metabox_construction_name',//メタボックスのdivに指定されるID
    '施工した建物の名前', //タイトル
    'hamahome_metabox_html', //表示用のHTMLを出力するphp関数（下で定義）
    'construction', //どのタイプの記事入力画面で表示するか
    'normal',
    'high'
  );
}

// ② メタボックスの中身を実装する

function hamahome_metabox_html($post){
  $areaname = "field_1";
  $key = "_key_for_field_1";
  
    // echo '<textarea name="' . $areaname . '" rows="8" cols="60">' . get_post_meta($post->ID,$key,true) . '</textarea>';
    echo '<input type="text" name="' . $areaname . '" value="' . get_post_meta($post->ID,$key,true) . '" size="50">';
  
  // ③ nonceを作成し、hiddenフィールドとして書き込む
  wp_nonce_field( 'send_field1' , 'nonce_for_field_1' );
}
// ④ カスタムフィールド用のメタボックスを追加する
add_action('admin_menu', 'hamahome_create_metabox');

//カスタムフィールドの入力欄の中のデータをデータベースへ保存する
function hamahome_save_customfield( $post_id )
{
  $areaname = "field_1";
  $key = "_key_for_field_1";
  
  ///// 正しい手段で送信されたデータであることを確認 ////
  //① nonceがセットされていなければ不正
  if ( ! isset( $_POST[ 'nonce_for_field_1' ] ) )  
    return $post_id;
  
  
  //② nonceがセットされていても、自分で作成した値でないなら不正
  if ( ! wp_verify_nonce( $_POST['nonce_for_field_1'] , 'send_field1' )) 
    return $post_id;
  
  if ( ! current_user_can( 'edit_post', $post_id ) ) // ③ 書き込み権限がなければ不正
    return $post_id;
    
  ///// カスタムフィールドの値を更新 ///
  
  $data = $_POST[$areaname];
  
  if(get_post_meta($post_id, $key) == ""){
    //新しいデータならデータを作成
    add_post_meta($post_id, $key, $data, true);
  }
  elseif($data != get_post_meta($post_id, $key, true)){
    //既存にあるデータで内容が異なるなら更新
    update_post_meta($post_id, $key, $data);
  }elseif($data == ""){
    //入力内容が空ならデータの削除
    delete_post_meta($post_id, $key, get_post_meta($post_id, $key, true));
  }
  
  return $post_id;
}
           
add_action( 'save_post', 'hamahome_save_customfield' );

// カスタムフィールドの位置を変更する
// 参考：https://techmemo.biz/wordpress/metabox-arrangement-change/
function hamahome_metabox_place_change_script( $hook ) {
	if ( $hook == 'post.php' || $hook == 'post-new.php' ) {
  $script = <<< SCRIPT
      jQuery(function($) {
      $('#metabox_construction_name').insertAfter('#titlediv');
      $('#metabox_construction_name').css('margin-top','20px');
      });
  SCRIPT;
	  wp_add_inline_script( 'editor', $script );
	}
  }
  add_action( 'admin_enqueue_scripts', 'hamahome_metabox_place_change_script' );

// 管理画面でのカスタム投稿の並び順を変更する
function hamahome_admin_custom_posttype_order($wp_query) {
	if( is_admin() ) {
	  $post_type = $wp_query->query['post_type'];
	  if($post_type !== 'post') {
		$wp_query->set('orderby','date'); //並べ替えの基準(日付)
		$wp_query->set('order','DESC'); //新しい順。古い順にしたい場合はASCを指定
	  }
	}
  }
  add_filter('pre_get_posts', 'hamahome_admin_custom_posttype_order');

<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package hamahome
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

 // 施工事例投稿一覧に建物名を追加
 // 参考：https://increment-log.com/quickedit-custom-field/
// 並び替え
function hamahome_sort_column($columns){
	$columns = array(
		'title' => 'タイトル',
		'author' => '投稿者',
		'taxonomy-construction_cat' => 'カテゴリー',
		'_key_for_field_1' => '建物名',
		'date' => '日時',
	);
	return $columns;
}
add_filter( 'manage_construction_posts_columns', 'hamahome_sort_column');

function hamahome_posts_custom_column( $column, $post_id ) {
    switch ( $column ) {
        case '_key_for_field_1':
            $post_meta = get_post_meta( $post_id, '_key_for_field_1', true );
            if ( $post_meta ) {
                echo $post_meta;
            } else {
                echo ''; //値が無い場合の表示
            }
            break;
    }
}
add_action( 'manage_construction_posts_custom_column' , 'hamahome_posts_custom_column', 10, 2 );

// クイック編集
function hamahome_custom_quickedit( $column_name, $post_type ) {
    static $print_nonce = TRUE;
    if ( $print_nonce ) {
        $print_nonce = FALSE;
        wp_nonce_field( 'quick_edit_action', $post_type . '_edit_nonce' ); //CSRF対策
    }

    ?>
    <fieldset class="inline-edit-col-right inline-custom-meta">
        <div class="inline-edit-col column-<?php echo $column_name ?>">
            <label class="inline-edit-group">
                <?php
                switch ( $column_name ) {
                    case '_key_for_field_1':
                        ?><span class="title">建物名</span><input name="field_1" /><?php
                        break;
                }
                ?>
            </label>
        </div>
    </fieldset>
<?php
}
add_action( 'quick_edit_custom_box', 'hamahome_custom_quickedit', 10, 2 );

// テキストボックスの中身を動的に置き換える
function hamahome_admin_edit_foot() {
    global $post_type;
    $slug = 'construction'; //他の一覧ページで動作しないように投稿タイプの指定をする

    if ( $post_type == $slug ) {
        echo '<script type="text/javascript" src="', get_stylesheet_directory_uri() .'/js/admin_edit.js', '"></script>';
    }
}
add_action('admin_footer-edit.php', 'hamahome_admin_edit_foot');

// クイック編集の保存処理
function hamahome_save_custom_meta( $post_id ) {
    $slug = 'construction'; //カスタムフィールドの保存処理をしたい投稿タイプを指定

    if ( $slug !== get_post_type( $post_id ) ) {
        return;
    }
    if ( !current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $_POST += array("{$slug}_edit_nonce" => '');
    if ( !wp_verify_nonce( $_POST["{$slug}_edit_nonce"], 'quick_edit_action' ) ) {
        return;
    }

    if ( isset( $_REQUEST['field_1'] ) ) {
        update_post_meta( $post_id, '_key_for_field_1', $_REQUEST['field_1'] );
    }
}
add_action( 'save_post', 'hamahome_save_custom_meta' );

function hamahome_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'hamahome_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function hamahome_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'hamahome_pingback_header' );

<?php if(!is_front_page()): ?>
<div id="breadcrumb" class="container">
<ul>
	<li><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/breadcrumb_home.svg" alt="home" class="icon"></a></li>
<?php if(is_search()):  /* 検索結果 */ ?>
		<li>&gt;　「<?php the_search_query(); ?>」で検索した結果</li>
<?php elseif(is_tag()): /* タグ */ ?>
		<li>&gt;　タグ : <?php single_tag_title(); ?></li>
<?php elseif(is_404()): /* 404 */ ?>
	<li>&gt;　404 Not found</li>
<?php elseif(is_date()): /* 日付アーカイブ */ ?>
	<?php if(is_day()): /* 日別 */ ?>
		<li>&gt;　<a href="<?php echo get_year_link(get_query_var('year')); ?>"><?php echo get_query_var('year'); ?>年</a></li>
		<li>&gt;　<a href="<?php echo get_month_link(get_query_var('year'), get_query_var('monthnum')); ?>"><?php echo get_query_var('monthnum'); ?>月</a></li>
		<li>&gt;　<?php echo get_query_var('day'); ?>日</li>
	<?php elseif(is_month()): /* 月別 */ ?>
			<li>&gt;　<a href="<?php echo get_year_link(get_query_var('year')); ?>"><?php echo get_query_var('year'); ?>年</a></li>
			<li>&gt;　<?php echo get_query_var('monthnum'); ?>月</li>
	<?php elseif(is_year()): /* 年別 */ ?>
			<li>&gt;　<?php echo get_query_var('year'); ?>年</li>
	<?php endif; ?>

<?php elseif(is_category()): /* カテゴリー */ ?>
	<?php $cat = get_queried_object(); ?>
		<?php if($cat -> parent != 0): ?>
			<?php $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' )); ?>
<?php foreach($ancestors as $ancestor): ?>
				<li>&gt;　<a href="<?php echo get_category_link($ancestor); ?>"><?php echo get_cat_name($ancestor); ?></a></li>
			<?php endforeach; ?>
		<?php endif; ?>
	<li>&gt;　<?php echo $cat -> cat_name; //single_cat_title(); ?></li>

<?php elseif( is_tax('construction_cat') ): /* 施工事例カテゴリー */ ?>
<?php 
	$term_object = get_queried_object(); // タームオブジェクトを取得
	$term_name   = $term_object->name;
	 ?>
<li>&gt;　<a href="<?php echo get_post_type_archive_link( 'construction' ); ?>">施工事例</a></li>
<li>&gt;　<?php echo $term_name; ?></li>

<?php elseif(is_author()): /* 投稿者 */ ?>
	<li>&gt;　投稿者 : <?php the_author_meta('display_name', get_query_var('author')); ?></li>
<?php elseif(is_page()): /* 固定ページ */ ?>
	<?php if($post -> post_parent != 0 ): ?>
	<?php $ancestors = array_reverse( $post-> ancestors ); ?>
	<?php foreach($ancestors as $ancestor): ?>
			<li>&gt;　<a href="<?php echo get_permalink($ancestor); ?>"><?php echo get_the_title($ancestor); ?></a></li>
	<?php endforeach; ?>
	<?php endif; ?>
	<li>&gt;　<?php echo $post -> post_title; ?></li>
<?php elseif(is_attachment()): /* 添付ファイルページ */ ?>
	<?php if($post -> post_parent != 0 ): ?>
			<li>&gt;　<a href="<?php echo get_permalink($post -> post_parent); ?>"><?php echo get_the_title($post -> post_parent); ?></a></li>
	<?php endif; ?>
		<li>&gt;　<?php echo $post -> post_title; ?></li>
<?php elseif(is_single()): /* 個別記事 */ 
	if (is_singular('construction')) :
	$term = get_the_terms($post->ID, 'construction_cat');
	if($term !== false) :
	$term_name = $term[0]->name;
	$link = get_term_link($term[0]->slug, 'construction_cat');
?>

<li>&gt;　<a href="<?php echo get_post_type_archive_link( 'construction' ); ?>">施工事例</a></li>
<li>&gt;　<a href="<?php echo get_term_link($term[0]->slug, 'construction_cat'); ?>"><?php echo $term[0]->name; ?></a></li>

<?php
	endif;
	else:
?>
	
 <?php $categories = get_the_category($post->ID); ?>
		<?php $cat = $categories[0]; ?>
	<?php if($cat -> parent != 0): ?>
		<?php $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' )); ?>
			<?php foreach($ancestors as $ancestor): ?>
				<li>&gt;　<a href="<?php echo get_category_link($ancestor); ?>"><?php echo get_cat_name($ancestor); ?></a></li>
			<?php endforeach; ?>
	<?php endif; ?>
		<li>&gt;　<a href="<?php echo get_category_link($cat -> cat_ID); ?>"><?php echo $cat-> cat_name; ?></a></li>

		<?php endif; ?>

		<li>&gt;　<?php echo $post -> post_title; ?></li>
<?php else: /* 上記に当てはまらないページ */ ?>
	<li>&gt;　<?php wp_title('', true); ?></li>
<?php endif; ?>
</ul>
</div>
<?php endif; ?>

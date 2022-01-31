<?php if(!is_front_page()): ?>
<div id="breadcrumb" class="container">
<ul>
	<li><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/breadcrumb_home.svg" alt="home" class="icon"></a></li>
	<li>&gt;</li>
<?php if(is_search()):  /* 検索結果 */ ?>
		<li>「<?php the_search_query(); ?>」で検索した結果</li>
<?php elseif(is_tag()): /* タグ */ ?>
		<li>タグ : <?php single_tag_title(); ?></li>
<?php elseif(is_404()): /* 404 */ ?>
	<li>404 Not found</li>
<?php elseif(is_date()): /* 日付アーカイブ */ ?>
	<?php if(is_day()): /* 日別 */ ?>
		<li><a href="<?php echo get_year_link(get_query_var('year')); ?>"><?php echo get_query_var('year'); ?>年</a></li>
			<li>&gt;</li>
		<li><a href="<?php echo get_month_link(get_query_var('year'), get_query_var('monthnum')); ?>"><?php echo get_query_var('monthnum'); ?>月</a></li>
			<li>&gt;</li>
		<li><?php echo get_query_var('day'); ?>日</li>
	<?php elseif(is_month()): /* 月別 */ ?>
			<li><a href="<?php echo get_year_link(get_query_var('year')); ?>"><?php echo get_query_var('year'); ?>年</a></li>
			<li>&gt;</li>
			<li><?php echo get_query_var('monthnum'); ?>月</li>
	<?php elseif(is_year()): /* 年別 */ ?>
			<li><?php echo get_query_var('year'); ?>年</li>
	<?php endif; ?>
<?php elseif(is_category()): /* カテゴリー */ ?>
	<?php $cat = get_queried_object(); ?>
		<?php if($cat -> parent != 0): ?>
			<?php $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' )); ?>
<?php foreach($ancestors as $ancestor): ?>
				<li><a href="<?php echo get_category_link($ancestor); ?>"><?php echo get_cat_name($ancestor); ?></a></li>
				<li>&gt;</li>
			<?php endforeach; ?>
		<?php endif; ?>
	<li><?php echo $cat -> cat_name; //single_cat_title(); ?></li>
<?php elseif(is_author()): /* 投稿者 */ ?>
	<li>投稿者 : <?php the_author_meta('display_name', get_query_var('author')); ?></li>
<?php elseif(is_page()): /* 固定ページ */ ?>
	<?php if($post -> post_parent != 0 ): ?>
	<?php $ancestors = array_reverse( $post-> ancestors ); ?>
	<?php foreach($ancestors as $ancestor): ?>
			<li><a href="<?php echo get_permalink($ancestor); ?>"><?php echo get_the_title($ancestor); ?></a></li>
		<li>&gt;</li>
	<?php endforeach; ?>
	<?php endif; ?>
	<li><?php echo $post -> post_title; ?></li>
<?php elseif(is_attachment()): /* 添付ファイルページ */ ?>
	<?php if($post -> post_parent != 0 ): ?>
			<li><a href="<?php echo get_permalink($post -> post_parent); ?>"><?php echo get_the_title($post -> post_parent); ?></a></li>
		<li>&gt;</li>
	<?php endif; ?>
		<li><?php echo $post -> post_title; ?></li>
<?php elseif(is_single()): /* 個別記事 */ ?>
 <?php $categories = get_the_category($post->ID); ?>
		<?php $cat = $categories[0]; ?>
	<?php if($cat -> parent != 0): ?>
		<?php $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' )); ?>
			<?php foreach($ancestors as $ancestor): ?>
				<li><a href="<?php echo get_category_link($ancestor); ?>"><?php echo get_cat_name($ancestor); ?></a></li>
				<li>&gt;</li>
			<?php endforeach; ?>
	<?php endif; ?>
		<li><a href="<?php echo get_category_link($cat -> cat_ID); ?>"><?php echo $cat-> cat_name; ?></a></li>
		<li>&gt;</li>
		<li><?php echo $post -> post_title; ?></li>
<?php else: /* 上記に当てはまらないページ */ ?>
	<li><?php wp_title('', true); ?></li>
<?php endif; ?>
</ul>
</div>
<?php endif; ?>

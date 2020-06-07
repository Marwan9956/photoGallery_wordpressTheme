<!---categories--------------->
<div class="category-list">
	<ul>
		<?php $categories = get_categories();?>
		<li><a href="<?php echo esc_url(home_url('/blog')); ?>">All photos</a></li>
		<?php foreach($categories as $category):?>
			<?php if($category->name !== 'Uncategorized'):?>
			<li>
				<a href="<?php echo esc_url(home_url('/') . 'category/' . $category->name); ?>">
				<?php echo $category->name;?></a>
			</li>
			<?php endif;?>
		<?php endforeach;?>
	</ul>
</div>
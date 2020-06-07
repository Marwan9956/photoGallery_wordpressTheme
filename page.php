<?php get_header();?>
<!---container--------------->
<section class="container middle">
	<?php if(is_page('gallery')):?>
	<!---Gallery Page--------------->
		<div class="photo-title">
			<h1>Gallery</h1>
		</div>
		<!---categories--------------->
		<?php get_template_part('get_categories');?>
		<!---Gallery--------------->
		<?php get_template_part('get_gallery');?>
	<?php else:?>
	<!---Other Pages--------------->
		<p>Other Page</p>
	<?php endif;?>
</section>
<?php get_footer();?>
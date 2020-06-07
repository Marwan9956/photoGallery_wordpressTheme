<?php get_header();?>
<!---container--------------->
<section class="container">
	<?php if(is_page('gallery')):?>
	<div class="photo-title">
		<h1>Gallery</h1>
	</div>
	<?php endif;?>
	<!---categories--------------->
	<?php get_template_part('get_categories');?>
	<!---Gallery--------------->
	
	<?php get_template_part('get_gallery');?>
</section>
<?php get_footer();?>

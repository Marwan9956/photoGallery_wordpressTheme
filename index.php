<?php get_header();?>
<!---container--------------->
<section class="container blog-posts middle">
	<div class="col-posts">
		<div class="photo-title">
			<h1>Blog</h1>
		</div>
		<!-- blog data-->
		<?php get_template_part('get_normal_post');?>
	</div>
	<div class="sidebar">
		<?php if(is_active_sidebar('main-sidebar')):?>
			<?php dynamic_sidebar('main-sidebar');?>
		<?php endif;?>
	</div>
</section>
<?php get_footer();?>	
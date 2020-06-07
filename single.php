<?php get_header();?>
<!---container--------------->
<section class="container middle">
	<div class="photo-single">
		<h1><?php the_title();?></h1>
		<?php the_post_thumbnail( 'medium_large' ); ?>
		<p>
			<?php if( '' !== get_post()->post_content )  :?>
				<?php the_content();?> 
			<?php endif;?>
		</p>
		
		<a class="btn-back" href="<?php echo site_url();?>">Back</a>
	</div>
</section>
<?php get_footer();?>
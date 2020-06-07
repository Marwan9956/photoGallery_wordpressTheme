<!---Gallery--------------->
<?php if(have_posts()):?>
<div class="posts">
	<?php while (have_posts() ) : the_post();?>
		<!---each post------------>
		<div class="post">
			<h2><?php the_title();?></h2>
			<div class="meta">
				by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author();?></a>
				on <?php the_date('Y-m-d');?>
				<?php the_category(' ');?>
			</div>
			<div class="post-img">
				<?php if(has_post_thumbnail()):?>
					<?php the_post_thumbnail(); ?>
				<?php endif;?>
			</div>
			<div class="excerpt">
				<?php the_excerpt();?>
			</div>
			<a class="btn btn-read" href="<?php the_permalink(); ?>">Read more</a>
		</div>	
		<!----------------->
	<?php endwhile;?>
	<?php echo paginate_links();?>
</div>
<?php else:?>
	<!---No posts--------------->
	<p class="alert"> there is not posts by this category </p>
<?php endif;?>
	

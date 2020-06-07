<?php 
$query = new WP_Query( ['post_type' => 'post'] );
?>
<!---Gallery--------------->
<?php if($query->have_posts()):?>
<div class="gallery">
	<?php 
		// Get all Posts with Gallery post format   
		$galleryPosts = array(
			'posts_per_page'=>-1,
			'tax_query' => array(
				array(
					'taxonomy' => 'post_format',
					'field' => 'slug',
					'terms' => array( 'post-format-gallery' )
					)
				)
			);
		$query = new WP_query($galleryPosts);
	
	?>
	<?php while ($query->have_posts() ) : $query->the_post();?>
		
			<!---each post img------------>
			<div class="img-post">
				<a href="<?php the_permalink(); ?>" class="img-link"><?php the_post_thumbnail(); ?></a>
			</div>	
			<!----------------->
		
	<?php endwhile;?>
</div>
<?php else:?>
	<!---No posts--------------->
	<p class="alert"> there is not posts by this category </p>
<?php endif;?>
	

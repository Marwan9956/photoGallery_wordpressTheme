<!---Footer--------------->
<footer class="container marg">
	<!---Footer Nav--------------->
	<nav class="footer">
		<?php 
			wp_nav_menu([
				'primary_location' => 'footer',
				'container'        => ''
			]);
		?>
	</nav>
	<!---footer copyright&web title--------------->
	<div>
		<span><?php echo date('Y'); ?> &copy; <a href="<?php echo home_url();?>"><?php bloginfo('name');?></a></span>
	</div>
</footer>
<?php wp_footer(); ?> 
</body>
</html>
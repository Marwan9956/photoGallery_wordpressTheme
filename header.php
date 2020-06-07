<!DOCTYPE html>
<html <?php bloginfo('language');?> >
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	<title><?php bloginfo('name');?></title>
	<?php wp_head();?>
</head>
<body>
<!---Web Title Logo--------------->
<section class="container web-logo">
	<h1><?php bloginfo('name');?></h1>
</section>
<!---Header--------------->
<header class="container">
	<!---Menu--------------->
	<nav class="primary">
		<!--
		<ul>
			<li><a href="#"> Home    </a></li>
			<li><a href="#"> Blog    </a></li>
			<li><a href="#"> Gallery </a></li>
		</ul>
		-->
		<?php 
			$args = [
				'theme_location' => 'primary',
				'container'      => ''
			];
			wp_nav_menu($args);
		?>
	</nav>
	<!---search-form--------------->
	<div class="search-box">
		<form method="GET" action="<?php esc_url(home_url('/')); ?>">
			<input type="submit" value="Search" name="" />
			<input type="text" name="s" placeholder="Type here"/>
		</form>
	</div>
</header>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bootcss/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/bootcss/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/bootcss/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body>
	<!--nav start-->
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container">
		  	<div id="navbar" class="collapse navbar-collapse">
		  		<ul class="nav navbar-nav">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' )); ?>
				</ul>
		  	</div>
		  </div>
		</nav>

	<!--nav end-->

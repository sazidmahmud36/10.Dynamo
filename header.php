<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width= device-width,initial-scale=1">
	
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title('');?></title>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/unslider.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/unslider-dots.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/gridism.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/fontawesome.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/ui-darkness/jquery-ui.min.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
 	<?php wp_head(); ?>

 	<style type="text/css">
 		<?php if (get_theme_mod('preset', 'dark') == 'dark'): ?>
 				body{background: #232323;color: #fff;}
 				.main-nav{background: #333;color: #fff;}
 				.main-nav a{color: #fff;}
 				.caption{background: #333;color: #fff;}
 				.post{border-bottom: 1px solid #333;}
 				.post-wrap{border:  1px solid #666;}
 				.button{background: #333;color: #fff;}
 				footer{background: #333; color: #fff;}
 			<?php else: ?>
 				body{background: #fff;color: #333;}
 				.main-nav{background: #f4f4f4;color: #333;}
 				.main-nav a{color: #333;}
 				.caption{background: #f4f4f4;color: #333;}
 				.post{border-bottom: 1px solid #ccc;}
 				.post-wrap{border:  1px solid #ccc;}
 				.button{background: #f4f4f4;color: #333;}
 				footer{background: #f4f4f4; color: #333;}
 		<?php endif; ?>

 		a{color: <?php echo get_theme_mod('color','#f9992b'); ?>}
 		.main-nav a:hover{background:  <?php echo get_theme_mod('color','#f9992b'); ?>}
 		.button:hover{background: <?php echo get_theme_mod('color','#f9992b'); ?>}
 		.bar{background: <?php echo get_theme_mod('color','#f9992b'); ?>}
 		.meta{border-bottom: 4px double <?php echo get_theme_mod('color','#f9992b'); ?>}
 		.current_page_item a{background: <?php echo get_theme_mod('color','#f9992b'); ?>}

 	</style>

</head>
<body>
	<header>
		<div class="wrap wider">
			<div class="grid">
				<div class="unit half">
					<h1 class="logo"><?php bloginfo('name'); ?></h1>
					<p class="tagline"><?php bloginfo('description'); ?></p>
				</div>
				<div class="unit half">
					<div class="header_r">
						<form class="search">
							<input type="text" name="s" placeholder="Search...">
						</form>
					</div>
				</div>
			</div>
		</div>
	</header>

	<nav class="main-nav">
		<div class="wrap wider">
			<div class="grid">
				<?php wp_nav_menu(array(
					'theme_location' => 'primary' 
			)); ?>
			</div>
		</div>
	</nav>

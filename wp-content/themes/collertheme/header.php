<!DOCTYPE html>
<html lang="en">
	<head>
    
        <meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="apple-touch-icon" sizes="180x180" <?php echo 'href="'.get_template_directory_uri().'/assets/files/favicon-180x180.png'.'"';?>>
		<link rel="icon" type="image/png" sizes="32x32" <?php echo 'href="'.get_template_directory_uri().'/assets/files/favicon-32x32.png'.'"';?>>
		<link rel="shortcut icon" <?php echo 'href="'.get_template_directory_uri().'/assets/files/favicon.ico'.'"';?>>
		<meta property="og:title" content="Project title here">
		<meta property="og:description" content="Project description here">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css" rel="stylesheet">-->
        <link rel="apple-touch-icon" sizes="180x180" <?php echo 'href="'.get_template_directory_uri().'/assets/files/favicon-180x180.png'.'"';?>>
		<link rel="icon" type="image/png" sizes="32x32" <?php echo 'href="'.get_template_directory_uri().'/assets/files/favicon-32x32.png'.'"';?>>
		<link rel="shortcut icon" <?php echo 'href="'.get_template_directory_uri().'/assets/files/favicon.ico'.'"';?>>
		<?php wp_head();?>
        <title><?php the_title();?></title>
		<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	</head>
<body>
	<header class="main-header">
		<div class="main-header-content">
			<a href="/" class="main-header-logo logo">
				<img <?php echo 'srcset="'.get_theme_mod("coller_logo").'"';?> alt="Лого" />
			</a>
			<div id="burger-menu">
				<span></span>
			</div>
			<div class="main-header-links burger-menu-wrapper" id="menu">
				<?php
        			wp_nav_menu([
						'container' => false,
            			'theme_location'  => 'header_menu',
            			'menu_class'      => 'main-header-links-list',
            			'walker'          => new HeaderMenu(),
						'menu_id'=>'',
        			]);
        		?>
				<button class="modal-all btn btn-y-secondary">Заказать звонок</button>
			</div>
		</div>
	</header>
	
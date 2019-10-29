<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/font/font.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen">	
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/responsive.css" media="screen">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/format.css">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<?php wp_head(); ?>		
	</head>
	<body>
		<div class="fix header_area">
			<div class="fix wrap header">
				<div class="logo floatleft">
					<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
				</div>
				
				<div class="mainmenu floatcenter">
					<?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'container' => 'false', 'menu_id' => 'main-nav', 'menu_class' => 'nav-bottom') ); ?>
				</div>
			
				
				<div class="manu floatright">
						<a>
							<h3>Gmail:Ducle199903@gmail.com</h3>
							<p>
							Liên Hệ:0964106042
						</p></a>
				</div>
			</div>
		</div>
		<div class="fix content_area">
			<?php if(is_home()){ ?>
			<div class="fix top_add_bar">
				<div class="addbar_leaderborard"><img src=""/></div>
			</div>
			<?php } ?>
		
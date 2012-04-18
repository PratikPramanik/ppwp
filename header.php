<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if IE]><link type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie.css" rel="stylesheet" media="all" /><![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>

</head>
<body>
<div class="wrapper"> <!--end in Footer.php-->

	<div id="header" class="container">
		<!-- TITLE BAR AT VERY TOP -->
		<div id="title-row"> <!-- Border to Border div -->
		<div class="row" >
			<div class="onecol">
				<!--EMPTY-->
			</div>
			
			<div id="title" class="tencol">
				<a href="<?php echo get_option('home'); ?>/"><img 	src="<?php bloginfo('template_directory'); ?>/images/header-idle.png" 
																	onmouseover="this.src='<?php bloginfo('template_directory'); ?>/images/header-hover.png'" 
																	onmouseout="this.src='<?php bloginfo('template_directory'); ?>/images/header-idle.png'"
																	width="750" 
																	height="75"></a>
				<!--BACKUP<h1><?php #bloginfo('description'); ?><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a><span class="description"></span></h1>-->

				<!--<ul id="nav">
				  <?php #wp_list_pages('title_li=Pages'); ?>
				  <?php #wp_list_categories('title_li=Categories'); ?>
				</ul> -->
		  
			</div>
			
			<div class="onecol last">
				<!--EMPTY-->
			</div>
		</div>
		</div>
		
		<!-- NAV BAR ROW --><!-- *** might want to switch to full length -->
		<div id="navbar" class="row">
			<div id="navbar-group1" class="navbar-group">
				<a href="<?php echo get_option('home'); ?>/projects/"><img 
						src="<?php bloginfo('template_directory'); ?>/images/design-idle.png"
						onmouseover="this.src='<?php bloginfo('template_directory'); ?>/images/design-hover.png'" 
						onmouseout="this.src='<?php bloginfo('template_directory'); ?>/images/design-idle.png'"></a>
				<a href="<?php echo get_option('home'); ?>/texts/"><img 
						src="<?php bloginfo('template_directory'); ?>/images/papers-idle.png"
						onmouseover="this.src='<?php bloginfo('template_directory'); ?>/images/papers-hover.png'" 
						onmouseout="this.src='<?php bloginfo('template_directory'); ?>/images/papers-idle.png'"></a>
			</div>
			<div class="navbar-group">
				<a href="<?php echo get_option('home'); ?>/"><img 	
						src="<?php bloginfo('template_directory'); ?>/images/home-idle.png" 
						onmouseover="this.src='<?php bloginfo('template_directory'); ?>/images/home-hover.png'" 
						onmouseout="this.src='<?php bloginfo('template_directory'); ?>/images/home-idle.png'"></a>
			</div>
			<div id="navbar-group2" class="navbar-group">
				<a href="<?php echo get_option('home'); ?>/more/"><img 
						src="<?php bloginfo('template_directory'); ?>/images/other-idle.png"
						onmouseover="this.src='<?php bloginfo('template_directory'); ?>/images/other-hover.png'" 
						onmouseout="this.src='<?php bloginfo('template_directory'); ?>/images/other-idle.png'"></a>
				<a href="<?php echo get_option('home'); ?>/blog/"><img 
						src="<?php bloginfo('template_directory'); ?>/images/blog-idle.png"
						onmouseover="this.src='<?php bloginfo('template_directory'); ?>/images/blog-hover.png'" 
						onmouseout="this.src='<?php bloginfo('template_directory'); ?>/images/blog-idle.png'"></a>
			</div>
		</div>
	</div>
<hr />

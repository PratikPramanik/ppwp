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
			<div class="twocol"></div>
			<div class ="eightcol navbar-bg">
				<div id="portfolio-button" class="navbar-button">
					<a href="<?php echo get_option('home'); ?>/portfolio/">DESIGN PORTFOLIO</a>
				</div>
				<div id="papers-button" class="navbar-button">
					<a href="<?php echo get_option('home'); ?>/texts/">PAPERS</a>
				</div>
				<div id="morework-button" class="navbar-button">
					<a href="<?php echo get_option('home'); ?>/more/">OTHER WORK</a>
				</div>
				<div id="blog-button" class="navbar-button">
					<a href="<?php echo get_option('home'); ?>/blog/">BLOG</a>
				</div>
			</div>
			<div class="twocol"></div>
		</div>
	</div>
<hr />

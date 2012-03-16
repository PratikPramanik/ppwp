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

	<!--Delete embedded styles, just for example.-->
	<style type="text/css">
	
	body {
	font-family: "Lucida Grande", "Helvetica Neue", Helvetica, Arial, sans-serif;
	}
	
	.container p {
	color: #000;
	text-align: left;
	margin: 10px 0 0 0;
	}
	</style>

<?php wp_head(); ?>

</head>
<body>
<div class="wrapper"> <!--end in Footer.php-->

	<div id="header" class="container">
		<!-- TITLE BAR AT VERY TOP -->
		<div id="title-row"> <!-- Border to Border div -->
		<div class="row" >
			<div class="threecol">
				<!--<p>Three columns</p>-->
			</div>
			
			<div id="title" class="sixcol">
				 <h1><?php #bloginfo('description'); ?><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a><span class="description"></span></h1>	

				<!--<ul id="nav">
				  <?php #wp_list_pages('title_li=Pages'); ?>
				  <?php #wp_list_categories('title_li=Categories'); ?>
				</ul> -->
		  
			</div>
			
			<div class="threecol last">
				<!--<p>Three columns</p>-->
			</div>
		</div>
		</div>
		
		<!-- NAV BAR ROW --><!-- *** might want to switch to full length -->
		<div id="navbar" class="row">
			<a><img src="wp-content/themes/pp_cleanr/images/design-idle.png"></a><a><img src="wp-content/themes/pp_cleanr/images/papers-idle.png"></a><a><img src="wp-content/themes/pp_cleanr/images/home-idle.png"></a><a><img src="wp-content/themes/pp_cleanr/images/other-idle.png"></a><a><img src="wp-content/themes/pp_cleanr/images/blog-idle.png"></a>
		</div>
	</div>
<hr />

<!DOCTYPE html> 
<html dir="ltr" lang="en-US"> 
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
    <title>
		<?php wp_title(' '); ?>
    </title>
    
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	
	<!-- Le styles -->
	<link href="<?php bloginfo('template_url');?>/assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url');?>/assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url');?>/assets/css/docs.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url');?>/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
	
	<link href="style.css" rel="stylesheet">
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Signika">
	
    <?php wp_head(); ?>	
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
	
</head>
<body <?php body_class(); ?>>

<div id="header">
	
	<div class="container">
		
		<div class="row" id="header-top">
			
			<div class="span4">
				
				<div id="logo">
					<a href="index.html"></a>
				</div>
				
			</div>
			
			<div class="span8">
				
				<ul id="menu" class="rnd">
					<li class="current">
						<a href="#">Home</a>
					</li>
					<li>
						<a href="/site/new-user/buyers-profile/">For Buyers</a>
					</li>
					<li>
						<a href="/site/commingsoon">For Sellers</a>
					</li>
					<li>
						<a href="/site/commingsoon">About</a>
					</li>
					<li>
						<a href="/site/contact">Contact</a>
					</li>
				</ul>
				
			</div>
			
		</div>
		
		<div class="row centered" id="intro">
			
			<h1>The easiest way to get your <span>dreamhouse</span> come to you.</h1>
			
		</div>
		
	</div> <!-- end .container -->
		
</div>	<!-- end #header -->

<div id="content">
	
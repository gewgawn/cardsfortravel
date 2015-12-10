<!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="shortcut icon" href="/wp-content/uploads/2013/08/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/wp-content/uploads/2013/08/favicon.ico" type="image/x-icon">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>


		<!-- typeahead plugin - if top nav search bar enabled -->
		<?php require_once('library/typeahead.php'); ?>

		<!-- <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Marvel">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Francois+One">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lusitana"> -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald|Quattrocento+Sans">

	</head>

	<body <?php body_class(); ?>>

		<header role="banner">

			<div id="inner-header" class="clearfix">

				<div class="navbar navbar-fixed-top">
					<div class="navbar-inner">
						<div class="container-fluid nav-container">
							<nav role="navigation">
									<a class="span3" id="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
									<?php if(of_get_option('branding_logo','')!='') { ?>
										<img src="<?php echo of_get_option('branding_logo'); ?>" alt="<?php echo get_bloginfo('description'); ?>">
										<?php }
										if(of_get_option('site_name','1')) bloginfo('name'); ?></a>

								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
								</a>

								<div class="nav-collapse">
									<div class="span8">
										<div class="row">
											<div class="span8">
												<img id="cft-header-text" src="/wp-content/uploads/2013/08/CardsForTravel_HEADER_TEXT.png"></img>
											</div>
										</div>
										<div class="row">
											<div class="span8">
												<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
											</div>
										</div>
									<div>
								</div>
							</nav>

							<?php if(of_get_option('search_bar', '1')) {?>
							<form class="navbar-search pull-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
								<input name="s" id="s" type="text" class="search-query" autocomplete="off" placeholder="<?php _e('Search','bonestheme'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
							</form>
							<?php } ?>

						</div> <!-- end .nav-container -->
					</div> <!-- end .navbar-inner -->
				</div> <!-- end .navbar -->

			</div> <!-- end #inner-header -->

		<script type="text/javascript">

  			var _gaq = _gaq || [];
  			_gaq.push(['_setAccount', 'UA-34297157-1']);
  			_gaq.push(['_trackPageview']);

  			(function() {
   				 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   				 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   				 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  			})();

		</script>

		<script type="text/javascript">
			jQuery('a[href^="#"]').click(function(event)
			{
    				var target = $(this.href);
    				if( target.length ) {
				        event.preventDefault();
				        $('html, body').animate({
				            scrollTop: target.offset().top
			        	}, 1000);
    				}
			});
			jQuery("a[href='http://cardsfortravel.com/best-credit-cards/']").attr('href', 'http://cardsfortravel.com/credit-cards/');
			jQuery("a[href='http://cardsfortravel.com/best-credit-cards']").attr('href', 'http://cardsfortravel.com/credit-cards');
			jQuery("a[href='/best-credit-cards']").attr('href', '/credit-cards');
		</script>
		<?php
			if(is_page('best-credit-cards')){
				header("HTTP/1.1 301 Moved Permanently");
				header("Status: 301 Moved Permanently");
				header("Location: http://cardsfortravel.com/credit-cards/");
				header("Connection: close");
				exit(0); // Optional, prevents any accidental output
			}
		?>

		</header> <!-- end header -->

		<div class="container-fluid">

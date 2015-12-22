<?php
	$client = "Registered Reviews";
	$siteTitle = "Find free local Quotes for your home needs";

	// google analytics & tag manager
	$gaId = "UA-XXXXXX-X";
	$gtmId = "GTM-XXXX";
?>

<!DOCTYPE html>
<!--[if lte IE 8 ]><html dir="ltr" lang="en-US" class="no-js ie ie8 lte9 lte8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en-US" class="no-js ie ie9 lte9"><![endif]-->
<!--[if !IE]><!--><html dir="ltr" lang="en-US" class="no-js"><!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php echo $pageTitle ?> | <?php echo $siteTitle ?></title>
		<meta name="description" content="" />
		<meta name="author" content="<?php echo $client ?>" />

		<!-- Bookmark Icons -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />

		<!-- Facebook Open Graph -->
		<meta property="og:title" content="" />
		<meta property="og:description" content="" />
		<meta property="og:image" content="" />
		<meta property="og:image:width" content="" />
		<meta property="og:image:height" content="" />
		<meta property="og:url" content="" />
		<meta property="og:site_name" content="" />
		<meta property="og:type" content="website" />

		<!-- Twitter Card -->
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:title" content="" />
		<meta name="twitter:description" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:domain" content="" />

		<!-- CDN Stylesheets -->
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />

		<!-- Global Stylesheet -->
		<link rel="stylesheet" href="/content/css/site.css" />
		
		<!-- Preloaded JS -->
		<script src="/content/js/_libs/modernizr/modernizr-2.8.3.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/content/js/_libs/jquery/jquery-1.11.3.min.js"><\/script>')</script>

		<!-- Google Analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', '<?php echo $gaId ?>', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	<body<?php echo (isset($bodyClass) ? ' class="' . $bodyClass . '"' : ''); ?>>
		<!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=<?php echo $gtmId ?>"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','<?php echo $gtmId ?>');</script>
		<!-- End Google Tag Manager -->
	
		<?php if (isset($bodyClass) && $bodyClass == 'page-cookies-policy') { ?>
			<div id="cookie-notification">
				<div class="row">
					<div class="col">
						<p class="reduced">To give you the best experience possible, this site uses cookies. Please review our <a href="/cookies-policy.php">cookies policy</a> for more details and to change your cookie preferences. By closing this notice or continuing to browse this site, you are agreeing to our use of cookies.</p>
						<a id="cookie-notification-close" href="javascript:void(0);" title="close">&#215;<span class="assistive-text">Close</span></a>
					</div>
				</div>
			</div>
		<?php } ?>

		<header class="site-header">
			<div class="app-bar row">
				<div class="col md-4 sm-12">
					<h6 class="site-title">
						<a href="/"><span>Registered Reviews</span></a>
					</h6>
					<button type="button" class="btn btn-link nav-toggle show-for-sm">
						<span class="fa fa-bars fa-2x"></span>
						<span class="assistive-text">Menu</span>
					</button> 
					<button type="button" class="btn btn-link search-toggle show-for-sm">
						<span class="fa fa-search fa-2x"></span>
						<span class="assistive-text">Search</span>
					</button> 
				</div>
				<div class="col md-5 sm-12">
					<nav class="site-nav">
						<h6 class="assistive-text">Main navigation</h6>
						<a href="#content" class="skip-link assistive-text">Skip to content</a>
						<a class="nav-toggle show-for-sm" href="#"><span class="assistive-text">Hide Nav</span></a>
						<?php include('menu.php'); ?>
					</nav>
				</div>
				<div class="col md-3 sm-12 align-right">
					<nav class="business-login hide-for-sm">
						<h6 class="assistive-text">Utility navigation</h6>
						<a class="btn btn-primary business-login" id="buisness-login-header-btn" href="#" title="Log into your Business Account">Business Login<span class="fa fa-arrow-circle-right"></span></a>				
					</nav>
				</div>
			</div>

			<div class="nav-overlay"></div>

			<div class="search-bar show-for-sm">
				<div class="row">
					<div class="col">
						<form>
							<label for="Search" class="assistive-text">Search</label>
							<input type="search" id="Search" name="Search" placeholder="Search" maxlength="150" />
							<button class="btn btn-primary">
								<span class="fa fa-search"></span>
								<span class="assistive-text">Go</span>
							</button>
						</form>
					</div>
				</div>
			</div>
		</header>

		<main class="site-main" id="content">
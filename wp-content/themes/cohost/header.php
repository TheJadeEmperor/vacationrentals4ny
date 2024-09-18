<?php
$adminEmail = 'kaiba.corporation.llc@gmail.com'; 

$keywords1 = $alt = 'Airbnb Property Management NY';
$keywords2 = 'Vacation Rental Property Management NY';
$keywords3 = 'Airbnb Property Management NJ';
$keywords4 = 'Vacation Rental Property Management NJ';

$menuHost = '<ul>
    <li><a href="/#banner" class="scrolly">Home</a></li>
    <li><a href="/#cohost" class="scrolly">About Us</a></li>
    <li><a href="/#services" class="scrolly">Services</a></li>
    <li><a href="/blog" class="scrolly">Blog</a></li>
    <li><a href="#contact" class="scrolly">Contact</a></li>
</ul>';

$menuGuest = '<ul>
    <li><a href="/guests/#banner" class="scrolly">Home</a></li>
    <li><a href="/guests/#brooklyn" class="scrolly">Brooklyn</a></li>
    <li><a href="/guests/#tours" class="scrolly">Tours</a></li>
    <li><a href="/guests/#nj" class="scrolly">NJ</a></li>
	<li><a href="/blog" class="scrolly">Blog</a></li>
    <li><a href="#contact" class="scrolly">Contact</a></li>
</ul>';

$threeDotsMenu = '<ul class="actions stacked">
	<li><a href="/" class="button primary fit scrolly">For Hosts</a></li>
	<li><a href="/#services" class="button fit scrolly">Cohost Services</a></li>
	<li><a href="/guests/" class="button primary fit scrolly">For Guests</a></li>
	<li><a href="/guests/#services" class="button fit scrolly">Guest Services</a></li>
	<li><a href="/blog/" class="button primary fit scrolly">Blog</a></li>
	<li><a href="#contact" class="button fit scrolly">Contact</a></li>
</ul>';


$path = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

if($path == 'guests') 
    $mainMenu = $menuGuest;
else 
    $mainMenu = $menuHost;

$theme_uri = get_template_directory_uri().'/';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>KaibaCorp Vacation Rentals | Airbnb Property Management in NY & NJ | Vacation Rental Property Management in NY & NJ</title>
        <meta name="description" content="We are a boutique vcation rental company that specializes in airbnb property managment in NYC, New Jersey, and the greater New York area. Contact us to find out about our property management or cohosting services.">
        <meta name="keywords" content="<?=$keywords1 ?>, <?=$keywords2 ?>, <?=$keywords3 ?>, <?=$keywords4 ?>"/>

		<link rel="icon" href="/favicon.ico" type="image/x-icon"/>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="google-site-verification" content="rckWAcSQLBeEmidxTf4S-4X_UTvRVvTX-Q83atJ28lw" />
        
		<link rel="stylesheet" href="<?=$theme_uri?>assets/css/main.css" /> 
		<link rel="stylesheet" href="<?=$theme_uri?>assets/css/blog.css" /> 
		<noscript><link rel="stylesheet" href="<?=$theme_uri?>assets/css/noscript.css" /></noscript>
       
	</head>
	<body class="is-preload">
        
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="./" class="logo"><strong>KaibaCorp</strong> <span>Vacation Rentals</span></a>

						<nav class="navbar">
						 
							<div class="navbar-links">
								<?=$mainMenu; ?>
							</div>
						</nav>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<?=$threeDotsMenu ?>
					</nav>
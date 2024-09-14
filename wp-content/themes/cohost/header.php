<?php
$adminEmail = 'kaiba.corporation.llc@gmail.com'; 

$keywords1 = $alt = 'Airbnb Property Management New York';
$keywords2 = 'Airbnb Property Management NYC';
$keywords3 = 'Airbnb Property Management Companies';
$keywords4 = 'Vacation Rental Property Management';
$keywords5 = 'Vacation Rentals New Jersey';

$menuHost = '<ul>
    <li><a href="#banner" class="scrolly">Home</a></li>
    <li><a href="#cohost" class="scrolly">About Us</a></li>
    <li><a href="#services" class="scrolly">Services</a></li>
    <li><a href="/blog" class="scrolly">Blog</a></li>
    <li><a href="#contact" class="scrolly">Contact</a></li>
</ul>';

$menuGuest = '<ul>
    <li><a href="#banner" class="scrolly">Home</a></li>
    <li><a href="#brooklyn" class="scrolly">Brooklyn</a></li>
    <li><a href="#tours" class="scrolly">Tours</a></li>
    <li><a href="#nc" class="scrolly">NC</a></li>
    <li><a href="#contact" class="scrolly">Contact</a></li>
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
		<title>KaibaCorp Vacation Rentals | <?=$keywords2 ?> | <?=$keywords3 ?></title>
        <meta name="description" content="We are a boutique vcation rental company that specializes in airbnb property managment in NYC, New Jersey, and the greater New York area. Contact us to find out about our vacation rental services.">
        <meta name="keywords" content="<?=$keywords1 ?>, <?=$keywords2 ?>, <?=$keywords3 ?>, <?=$keywords4 ?>, <?=$keywords5 ?>"/>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="google-site-verification" content="rckWAcSQLBeEmidxTf4S-4X_UTvRVvTX-Q83atJ28lw" />
        
		<link rel="stylesheet" href="<?=$theme_uri?>assets/css/main.css" />
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
								<?php 
                                echo $mainMenu;
                                ?>
							</div>
						</nav>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="actions stacked">
							<li><a href="/" class="button primary fit scrolly">For Hosts</a></li>
                            <li><a href="/#services" class="button fit scrolly">Cohost Services</a></li>
							<li><a href="./guests/" class="button primary fit scrolly">For Guests</a></li>
                            <li><a href="./guests#services" class="button fit scrolly">Guest Services</a></li>
							<li><a href="./blog/" class="button primary fit scrolly">Blog</a></li>
							<li><a href="#contact" class="button fit scrolly">Contact</a></li>
						</ul>
					</nav>
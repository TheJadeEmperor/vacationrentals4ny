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
        
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
<style> 

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 10px;
    }

    .brand-title {
        font-size: 1.5em;
        color: white;
    }

    .navbar-links {
        height: 100%;
    }

    .navbar-links ul {
        display: flex;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .navbar-links li {
        margin-left: 0px;
    }

    .navbar-links a {
        color: white;
        text-decoration: none;
        font-size: 1em;
    }

    .navbar-links a:hover {
        color: #ff6347;
    }

    .toggle-button {
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 30px;
        height: 21px;
    }

    .toggle-button .bar {
        height: 3px;
        width: 100%;
        background-color: white;
        border-radius: 10px;
    }

    @media (max-width: 950px) {
        .navbar-links {
            display: none;
            width: 100%;
        }

        .navbar-links ul {
            flex-direction: column;
            width: 100%;
        }

        .navbar-links ul li {
            text-align: center;
            margin: 10px 0;
        }
    }

    .navbar.active .navbar-links {
        display: flex;
    }

</style>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="./" class="logo"><strong>KaibaCOrp</strong> <span>Vacation Rentals</span></a>

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
							<li><a href="./" class="button primary fit scrolly">For Hosts</a></li>
                            <li><a href="./#services" class="button fit scrolly">Cohost Services</a></li>
							<li><a href="./guests" class="button primary fit scrolly">For Guests</a></li>
                            <li><a href="./guests#services" class="button fit scrolly">Guest Services</a></li>
							<li><a href="./guests#tours" class="button primary fit scrolly">Tours</a></li>
							<li><a href="#contact" class="button fit scrolly">Contact</a></li>
						</ul>
					</nav>
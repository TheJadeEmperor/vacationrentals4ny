<!DOCTYPE HTML>
<html>
	<head>
		<title>KaibaCorp Vacation Rentals & Tours</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
<style> 

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
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

@media (max-width: 900px) {
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
						<a href="index.html" class="logo"><strong>KaibaCOrp</strong> <span>Vacation Rentals</span></a>

						<nav class="navbar">
						 
							<div class="navbar-links">
								<ul>
									<li><a href="./">Hosts</a></li>
									<li><a href="./guests.php">Guests</a></li>
									<li><a href="./guests.php#tours">Tours</a></li>
									<li><a href="#contact" class="scrolly">Contact</a></li>
								</ul>
							</div>
						</nav>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="actions stacked">
							<li><a href="./" class="button primary fit scrolly">Hosts</a></li>
							<li><a href="./guests.php" class="button fit scrolly">Guests</a></li>
							<li><a href="./guests.php#tours" class="button primary fit scrolly">Tours</a></li>
							<li><a href="#contact" class="button fit scrolly">Contact</a></li>
						</ul>
					</nav>
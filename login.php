<!DOCTYPE html>
<html>
<header>
<title>Laptop - Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="16x16" href="./img/favicon.png">
<link rel="stylesheet" href="./style.css">
<script src="./script.js"></script>
</header>
<body>

<ul class="nav">
	<li><a href="javascript:Menu();"><img class="navbtn" src="./img/menu.svg" alt="Menu"></a></li>
	<div class="logoholder1"><a href="./"><img class="logo" src="./img/logo1.png" alt="Laptop"></a></div>
	<div class="logoholder2"><a href="./"><img class="logo" src="./img/logo2.png" alt="Laptop"></a></div>
	<ul class="navsearch">
		<li>
			<form id="search" action="./search.php" method="get">
				<input type="text" placeholder="Search..." name="keyword">
			</form>
		</li>
		<button class="navsearchbtn" type="submit" form="search" value="Submit"><img height="100%" src="./img/search.svg" alt="Search"></button>
	</ul>
	<li><a href="./login.php"><img class="navbtn" src="./img/account.svg" alt="Account"></a></li>
	<li><a href="./cart.php"><img class="navbtn" src="./img/cart.svg" alt="Shopping cart"></a></li>
</ul>

<ul id="menu">
	<div class="menuaccount">
		<img src="./img/account.svg" alt="Account" width="100%">
		<div>
		<h3>User</h3>
		</div>
	</div>
	<li><a class="menutitle">Range</a></li>
	<li><a class="menubtn" href="./search.php?range=low">Low-end</a></li>
	<li><a class="menubtn" href="./search.php?range=mid">Mid-end</a></li>
	<li><a class="menubtn" href="./search.php?range=high">High-end</a></li>
	<li><a class="menutitle">Categories</a></li>
	<li><a class="menubtn" href="./search.php?category=best-value">Best value<br><small>(cost/performance ratio)</small></a></li>
	<li><a class="menubtn" href="./search.php?category=portability">For high portability</a></li>
	<li><a class="menubtn" href="./search.php?category=gaming">For gaming</a></li>
	<li><a class="menubtn" href="./search.php?category=content-creation">For content creation</a></li>
	<li><a class="menubtn" href="./search.php?category=business">For business</a></li>
	<li><a class="menutitle">More</a></li>
	<li><a class="menubtn" href="./sitemap.html">Sitemap</a></li>
	<li><a class="menubtn" href="./about.html">About us</a></li>
</ul>

<div id="main">
	<h2>Login</h2>
	<p>Coming soon...</p>
</div>

</body>

<footer>
<div class="footerlinkgroup">
<a class="footerlink" href="./sitemap.html">Sitemap</a><a class="footerlink" href="./about.html">About us</a><a class="footerlink" href="./login.php">Account</a>
</div>
<small>&copy; Copyright 2020 Laptop, Inc. All rights reserved.<small>
</footer>
</html>
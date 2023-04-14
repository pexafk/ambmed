
<?php
require('/inc/config.php'); 
require('db_dal_inc.php');
$conn = db_connect();
$conn->close();
?>
<?php include('header.inc.php'); ?>

<div class="main-wrapper">

	<header class="header">
		<div class="container">
			<div class="wrapper">
				<div class="header__logo">
					<a href="/">
						<img src="assets/img/logo.png" alt="Ambulatorio">
					</a> 
				</div>
				 
				<nav class="header__menu">
					<ul>
						<li>
							<a class="header__menu-link" href="catalog.html">Catalog</a>
						</li>
						<li>
							<a class="header__menu-link" href="information.html">Information</a>
						</li>
						<li>
							<a class="header__menu-link" href="login.php">Login</a>
						</li> 
					</ul>
				</nav>
				
				<div class="burger">
					<span></span>
				</div>
			</div>
		</div>

	</header>

	<main class="content centered">
		<div class="bgfilter"></div>
		<div class="container"> 
			<div class="home__block">
				<a class="button" href="information.html">LEARN MORE</a>
			</div> 
		 
		</div>
 
	</main>

	<footer class="footer">
		<div class="container">
	 
			<div class="footer__copy">
				<div>
					&copy; 2023 - HEALTH AMBULATORIO - PIACENZA 
				</div>
				 
			</div> 
		</div>
 
	</footer>

</div>

<script src="assets/js/main.js" defer></script>

</body>
</html>

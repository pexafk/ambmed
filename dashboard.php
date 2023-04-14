<?php
require('config.php'); 
require('db_dal_inc.php');
$conn = db_connect();
$conn->close();
?>
<?php include('header.inc.php'); ?>

<body>

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
							<a class="header__menu-link" href="login.html">Login</a>
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
			 
				<div class="dashboard__block">
					<div class="dashboard__block-header">
						<a class="button" href="gestionevisite.php">Gestione visite</a>
						<a class="button" href="#">Gestione utente</a>
					</div>
					<div class="dashboard__block-main">
						<a class="button" href="#">Visualizzare informazioni</a>
						<a class="button" href="#">Visualizzare patologie</a>
						<a class="button" href="#">Visualizzare medicinali scaduti</a>
						<a class="button" href="#">Visualizzare spese totali</a>
						<a class="button" href="#">Visualizzare medici con N referti</a>
						<a class="button" href="#">Visualizzare pazienti visitati</a>
						<a class="button" href="#">Visualizzare i referti</a>
					</div>
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

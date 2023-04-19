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
							<a class="header__menu-link" href="dashboard.php">Dashboard</a>
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
			<div class="login__block">
				<form action="#" method="post" class="login__form">
					<input type="text" name="username" placeholder="Username" required="">
					<input type="password" name="password" placeholder="Password" required=""> 
					<button class="login__form-btn" type="submit">Login</button>
				</form>
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

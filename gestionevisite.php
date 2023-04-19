<?php
require('config.php'); 
require('db_dal_inc.php');
$conn = db_connect();
$rows=selectAllVisite($conn);

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
<?php if (count($rowsVisite) > 0) {?>
  <table class="table table-striped">

    <tr>
    
        
        <th>idV</th>
        <th>tipoV</th>
        <th>data</th>
        <th>ora</th>
        <th>descrizione</th>
        <th>Altro</th>
        </tr>
        <?php foreach ( $rowsVisite as $row) { ?>
        <tr>
            <td><?=$row['idV']?></td> 
            <td><?=$row['tipoV']?></td>
            <td><?=$row['data']?></td>
            <td><?=$row['ora']?></td> 
            <td><?=$row['descrizione']?></td> 
        
                

        </tr>  
<?php }?> 
</table>
<?php }?>
<div>
<?php include('footer.inc.php'); ?>

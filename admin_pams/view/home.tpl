
<?php include("inc/header.inc.php") ;?>

<body>
<?php include("inc/nav.inc.php") ;?>

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-2">
				<span> Bonjour <?= $_SESSION['login']?>, bienvenu sur l'interface ADMIN</span>
				<span> <?php if(isset($_GET['modif'])){
					echo "</br><form action='indexx.php?page=1' method='POST'> Ancien Mot de passe : <input type='password' name='ancien'> </input></br>Nouveau Mot de passe : <input type='password' name='nouveau'> </input></br>Confirmation nouveau Mot de passe : <input type='password' name='nouveau2'> </input>";
				} ?>
				</span>
			</div>
		</div>
	</div>
<?php include("inc/footer.inc.php"); ?>
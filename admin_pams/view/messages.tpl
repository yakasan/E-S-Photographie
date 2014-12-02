<?php include("../inc/header.inc.php") ?>

<body>
<?php include("../inc/nav.inc.php") ?>


	<div class="container">
		<div class="col-md-5">
			<div class="list-group">
				<a href="#" class="list-group-item disabled">Liste des messages</a>
				<a href="#" class="list-group-item">Message 1 </a>
				<a href="#" class="list-group-item">Message 2</a>
				<a href="#" class="list-group-item">Message 3</a>
				<a href="#" class="list-group-item">Message 4</a>
				<button type="button" class="btn btn-default navbar-btn">Visionner</button>
			</div>
		</div>
		<div class="col-md-2">
		</div>
		<div class="col-md-5">
			
			<div class="input-group">
				<form method="GET">
					<span>Affichage du message:</span>
					<span>Titre </span>
					<span>Email</span>
					<span>Texte</span>
					<input type="submit" value="Répondre" class="btn btn-default">
					<input type="submit" value="Supprimer" class="btn btn-default">
			</form>
				
			</div>
			
		</div>
	</div>

<?php include("../inc/footer.inc.php") ?>
<?php include("../inc/header.inc.php") ?>

<body>
<?php include("../inc/nav.inc.php") ?>


	<div class="container">
		<div class="row">
			<div class="col-md-5 divscroll">
				<div class="list-group">
					<a href="#" class="list-group-item disabled">Liste des messages</a>
					<a href="#" class="list-group-item">Message 1 </a>
					<a href="#" class="list-group-item">Message 2</a>
					<a href="#" class="list-group-item">Message 3</a>
					<a href="#" class="list-group-item">Message 4</a>
					<button type="button" class="btn btn-default navbar-btn">Visionner</button>
					<?php printMessage(); ?>
				</div>
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-5">
				<table class="table">
					<tr> 
						<th>Affichage du message: </th>
					</tr>

					<tr>
						<td>
							<form method="GET">
							<span>Titre </span>
						</td>
					</tr>
					<tr>
						<td>
							<span>Email </span>
						</td>
					</tr>
					<tr>
						<td>
							<span>Texte </span>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="Répondre" class="btn btn-default">
							<input type="submit" value="Supprimer" class="btn btn-default">
							</form>
						</td>
					</tr>	
				</table>
			</div>
		</div>
	</div>

<?php include("../inc/footer.inc.php") ?>
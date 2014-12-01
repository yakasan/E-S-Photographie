<?php include("../inc/header.inc.php") ?>

<body>
<?php include("../inc/nav.inc.php") ?>


	<div class="container">
		<div class="col-md-5">
			<div class="list-group">
				<a href="#" class="list-group-item disabled">Liste des galeries</a>
				<a href="#" class="list-group-item">Galerie 1 </a>
				<a href="#" class="list-group-item">Galerie 2</a>
				<a href="#" class="list-group-item">Galerie 3</a>
				<a href="#" class="list-group-item">Galerie 4</a>
				<button type="button" class="btn btn-default navbar-btn">Modifier</button>
			</div>
		</div>
		<div class="col-md-2">
		</div>
		<div class="col-md-5">
			
			<div class="input-group">
				<form method="GET">
					<span class="input-group-addon">Création d'une galerie :</span>
					<input type="text" class="form-control" placeholder="Nom de la galerie">
					<div class="form-group">
						<label for="comment">Description:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
					<input type="submit" value="Créer" class="btn btn-default">
			</form>
				
			</div>
			
		</div>
	</div>

</body>
</html>
<?php include("../inc/header.inc.php") ?>

<body>
<?php include("../inc/nav.inc.php") ?>


	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="list-group">

					<a href="#" class="list-group-item disabled">Liste des galeries</a>
					<?php 
						foreach ($tableData as $value) {
							echo "<a href='../gallery/". $value['title']."' class='list-group-item'>". $value['title']." </a>";
						}
					?>
					<button type="button" class="btn btn-default navbar-btn">Modifier</button>
				</div>
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-5">
				
				<!--<div class="input-group">
					<form method="GET">
						<span class="input-group-addon">Création d'une galerie :</span>
						<input type="text" class="form-control" placeholder="Nom de la galerie">
						<div class="form-group">
							<label for="comment">Description:</label>
							<textarea class="form-control" rows="5" id="comment"></textarea>
						</div>
						<input type="submit" value="Créer" class="btn btn-default">
					</form>
				</div>	-->
				
					<form method="POST" name="addGallery" id="addGallery">
						<span class="input-group-addon">Création d'une galerie :</span>
						<input type="text" name="nameGallery" id="nameGallery" class="form-control" placeholder="Nom de la galerie">
						
							<label for="textGallery">Description:</label>
							<textarea class="form-control" rows="5" name="textGallery" id="textGallery"></textarea>
						
						<input type="submit" value="Créer" class="btn btn-default">
					</form>
				</div>	
			</div>
		</div>
	</div>

<?php include("../inc/footer.inc.php") ?>
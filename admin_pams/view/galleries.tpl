<?php include("../inc/header.inc.php") ?>

<body>
<?php include("../inc/nav.inc.php") ?>


	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="list-group">

					<a href="#" class="list-group-item disabled">Liste des galeries</a>
					<div class="divscroll">
						<?php 
							foreach ($tableData as $value) {
								echo "<a class='list-group-item'>";
								echo "<input type='radio' value=".$value['title']." name='gallerieName'>".$value['title'];
								echo "</a>";
							}
						?>
						<button type="button"  value="modifier" name="modifGallery" class="btn btn-default navbar-btn">Modifier</button>
						<button type="button" value="supprimer" name="supprGallery" class="btn btn-default navbar-btn">Supprimer</button>
					</div>
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
				
					<form method="POST" name="addGallery" id="addGallery" action="../controller/galleriesController.php">
						<span class="input-group-addon">Création d'une galerie :</span>
						<input type="text" name="nameGallery" id="nameGallery" class="form-control" placeholder="Nom de la galerie">
						
							<label for="textGallery">Description:</label>
							<textarea class="form-control" rows="5" name="textGallery" id="textGallery"></textarea>
						
						<input type="submit" value="Créer" class="btn btn-default">
					</form>
				</div>	
			</div>

			<?php /*
				if(!isset($_SESSION['galleryExist'])) {
					?>
					<script type="text/javascript">
						alert('Galerie déjà éxistante, veuillez entrer un autre nom !');
					</script>
					<?php
				} 
				if(!isset($_SESSION['dataLess'])) {
					?>
					<script type="text/javascript">
						alert('Veuillez entrer un Titre et une description !');
					</script>
					<?php
				} */
			?>

		</div>
	</div>

<?php include("../inc/footer.inc.php") ?>
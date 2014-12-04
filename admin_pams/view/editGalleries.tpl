<?php include("../inc/header.inc.php") ?>

<body>
<?php include("../inc/nav.inc.php") ?>


	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="input-group">
					<form method="POST" action="../controller/generalController.php">
						<div class="form-group">
							<span class="input-group-addon">Edition de la galerie <?= $_POST['nameGallery']; ?> :</span>

							<form role="form">
								<div class="form-group">
									<label for="title">Titre de la galerie</label>
									<input type="text" class="form-control" name="title" placeholder="Titre de l'index a récup en BDD">
								</div>
								<div class="form-group">
									<label for="content">Description:</label>
									<textarea class="form-control" name="content" placeholder="Texte de l'index a récup en BDD"> 
									</textarea>
								</div>
								<button type="submit" class="btn btn-default">Valider</button>
							</form>
						</div>
					</form>
				</div>	
			</div>
		</div>
	</div>

<?php include("../inc/footer.inc.php") ?>
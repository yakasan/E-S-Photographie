<?php include("../inc/header.inc.php") ?>

<body>
<?php include("../inc/nav.inc.php") ?>


	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-4">
				<div class="input-group">
					<form method="POST" action="../controller/generalController.php">
						<div class="form-group">
							<span class="input-group-addon">Edition général du site :</span>

							<form role="form">
								<div class="form-group">
									<label for="title">Titre de l'index</label>
									<input type="text" class="form-control" name="title" placeholder="Titre de l'index a récup en BDD">
								</div>
								<div class="form-group">
									<label for="content">Message d'accueil:</label>
									<textarea class="form-control" name="content" placeholder="Texte de l'index a récup en BDD"> 
									</textarea>
								</div>
								<div class="form-group">
									<label for="url_im">image associée au texte :</label>
									<input type="file" name="url_img">
								</div>

								<div class="form-group">
									<label for="url_bg">background :</label>
									<input type="file" name="url_bg">
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
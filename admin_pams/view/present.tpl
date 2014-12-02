<?php include("../inc/header.inc.php") ?>

<body>
	<?php include("../inc/nav.inc.php") ?>
<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-4">
				<div class="input-group">
					<form method="GET">
						<div class="form-group">
							<span class="input-group-addon">Edition page de presentation</span>

							<form role="form">
								<div class="form-group">
									<label for="titrePresent">Titre </label>
									<input type="email" class="form-control" id="titrePresent" placeholder="Titre de la presentation a récup en BDD">
								</div>
								<div class="form-group">
									<label for="messagePresent">Message de presentation</label>
									<textarea class="form-control" id="messagePresent" placeholder="Texte de la presentation a récup en BDD"> 
									</textarea>
								</div>
								<div class="form-group">
									<label for="imagePresent">Image de presentation</label>
									<input type="file" id="imagePresent">
								</div>
								<button type="submit" class="btn btn-default">Previsualiser</button>
								<button type="submit" class="btn btn-default">Valider</button>
							</form>
						</div>

					</form>
				</div>	
			</div>
		</div>
	</div>

<?php include("../inc/footer.inc.php") ?>
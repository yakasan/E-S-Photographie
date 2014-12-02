<?php include("../inc/header.inc.php") ?>

<body>
<?php include("../inc/nav.inc.php") ?>


	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-4">
				<div class="input-group">
					<form method="GET">
						<div class="form-group">
							<span class="input-group-addon">Edition général du site :</span>

							<form role="form">
								<div class="form-group">
									<label for="title_index">Titre de l'index</label>
									<input type="email" class="form-control" id="title_index" placeholder="Titre de l'index a récup en BDD">
								</div>
								<div class="form-group">
									<label for="message_home">Message d'accueil:</label>
									<textarea class="form-control" id="message_home" placeholder="Texte de l'index a récup en BDD"> 
									</textarea>
								</div>
								<div class="form-group">
									<label for="index_img">image associée au texte :</label>
									<input type="file" id="index_img">
								</div>

								<div class="form-group">
									<label for="backgroun_img">background :</label>
									<input type="file" id="backgroun_img">
								</div>

								<button type="submit" class="btn btn-default">Modifier</button>
							</form>
						</div>
					</form>
				</div>	
			</div>
		</div>
	</div>

<?php include("../inc/footer.inc.php") ?>
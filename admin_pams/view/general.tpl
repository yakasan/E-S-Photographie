
<?php include("inc/header.inc.php") ?>

<body>
<?php include("inc/nav.inc.php") ?>


	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-4">
				<div class="input-group">
					<form method="POST" action="indexx.php?page=7" enctype="multipart/form-data">
						<div class="form-group">
							<span class="input-group-addon">Edition général du site :</span>

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
								<label for="url_bg">background :</label>
								<input type="file" name="background">
							</div>

							<input type="submit" name="btnvalid" class="btn btn-default" value="Valider"/>
						</div>
					</form>
				</div>	
			</div>
		</div>
	</div>

<?php include("inc/footer.inc.php") ?>

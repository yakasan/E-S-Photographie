
<?php include("inc/header.inc.php") ?>

<body>
<?php include("inc/nav.inc.php") ?>

 
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<label for="photoRecup">Modifier la photo</label>
				<form name="photoRecup">
					<?php foreach($checkbox as $key => $value):{?>
						<div>
							<div id="<?=$listePhoto[$key]['id']?>">
								<?= $listePhoto[$key]['$lool']?>
							</div>
							<input type="file">
							<label for="title">Modifier le titre</label>
							<input type="text" name="title">
							<label for="desc">Modifier la description</label>
							<input type="text" name="desc">
							<label for="exifs">Modifier les exifs</label>
							<input type="text" name="exifs">
						</div>
						<?php }endforeach;?>
					<input type="submit" value="Valider l'ensemble des modifications">
				</form>
				<form>
					<!--BOUTON RETOUR, A FINIR-->
					<input type="submit" Value="Retour à la galerie" name="retour">
				</form>	
			</div>
		</div>
	</div>


<br>
<br>
<br>
<br>
<br>


<?php include("inc/footer.inc.php") ?>

<?php include("inc/header.inc.php") ?>

<body>
<?php include("inc/nav.inc.php") ?>

 
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-offset-2">
				<span class="input-group-addon"> Modifier la photo</span><br/>
				<form name="photoRecup">
					<div class="col-xs-8 col-sm-6">
						<?php foreach($checkbox as $key => $value):{?>

								<div id="<?=$listePhoto[$key]['id']?>">
									<?= $listePhoto[$key]['$lool']?>
								</div><br/>
								<input type="file"> <br/>
					</div>

					<div class="col-xs-4 col-sm-6">
								<label for="title">Modifier le titre</label> <br/>
								<input type="text" name="title"> <br/> <br/>
								<label for="desc">Modifier la description</label> <br/>
								<input type="text" name="desc"> <br/> <br/>
								<!-- <label for="exifs">Modifier les exifs</label>
								<input type="text" name="exifs"> <br/> <br/> -->
					</div>
				
						<?php }endforeach;?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-4">
							<input type="submit" value="Valider l'ensemble des modifications">  <br/> <br/>
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
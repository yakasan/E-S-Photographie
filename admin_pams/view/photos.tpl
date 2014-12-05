<?php include("inc/header.inc.php") ?>

<body>
<?php include("inc/nav.inc.php") ?>
 

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<label for="addPhoto">Ajouter une photo à la galerie <?= $nameGallery?> (2Mo max)</label>
				<form method="POST"  enctype="multipart/form-data">
					<input type="file" name="photo">
					<label for="title">Ajouter un titre</label>
					<input type="text" name="title">
					<label for="desc">Ajouter une description</label>
					<input type="text" name="desc">
					<input type="submit" value="Ajouter" name="addPhoto">
				</form>
			</div>
		</div>
	</div>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php if(!empty($listePhoto)):{?>
					<label for="modifPhoto">Modifier une photo de la galerie</label>
					<form method="POST" name="modifPhoto">
						<div>
							<?php foreach($listePhoto as $key => $value):{?>
							<div>
								<div id="<?=$listePhoto[$key]["id"]?>">
									<?= $listePhoto[$key]['$lool']?>
								</div>
								<!--<div>
									<?php//$key ?>
									<?php//$listePhoto[$key]["id"] ?>
									<?php//$listePhoto[$key]["id_gallery"] ?>
									<?php//$listePhoto[$key]["title"] ?>
									<?php//$listePhoto[$key]["description"] ?>
									<?php//$listePhoto[$key]["exif"] ?>
									<?php//$listePhoto[$key]["url"] ?>
								</div>-->
								<input type="checkbox">Modifier</input>
								<input type="radio" name="cover">Cover</input>
								<!--<input type="button" value="Supprimer" onclick=Delete(<?php//$listePhoto[$key]['id']?>)><br>-->
							</div>
							<?php }endforeach;?>
							<input type="submit" value="Modifier">
						</div>
					</form>
				<?php }else:{
					echo "Il n'y a pas encore de photos dans cette galerie !";
				}endif;?>
			</div>
		</div>
	</div>
	
	<br>
	<br>
	<br>
	<br>
	<br>

<?php include("inc/footer.inc.php") ?>
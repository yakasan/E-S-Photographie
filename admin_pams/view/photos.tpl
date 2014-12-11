<?php include("inc/header.inc.php") ?>

<body>
<?php include("inc/nav.inc.php") ?>
 

	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<!--Formulaire d'ajout de photo-->
				<span class="input-group-addon"> Ajouter une photo à la galerie <?= $nameGallery?> (2Mo max)</span><br/>
				<form method="POST"  enctype="multipart/form-data">
					<input type="file" name="photo"><br/>
					<label for="title">Ajouter un titre</label> <br/>
					<input type="text" name="title"><br/>
					<label for="desc">Ajouter une description</label><br/>
					<input type="text" name="desc"><br/><br/>
					<input type="submit" value="Ajouter" name="addPhoto"><br/>
				</form>
			</div>

			<div class="col-md-2">
			</div>

			<div class="col-md-5">
				<span class="input-group-addon"> Miniatures des photographies</span><br/>
				<!--Si $listePhoto n'est pas vide, on affiche ce qui suit, sinon, on affiche un texte-->
				<?php if(!empty($listePhoto)):{?>
					<label for="modifPhoto">Modifier une photo de la galerie</label>
					<form method="POST" onSubmit="window.location.reload()">
						<div>
							<!--Pour chaque photo présente dans le tableau, on affiche la vignette qui va bien-->
							<?php foreach($listePhoto as $key => $value):{?>
							<div>
								<a class='list-group-item'>

									<div id="<?=$listePhoto[$key]['id']?>">
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
									<input type="checkbox" name="checkbox[]" value="<?=$listePhoto[$key]['id']?>">Sélectionner</input>
									<input type="radio" name="cover">Définir comme couverture</input>
								</a>
							</div>
							<?php }endforeach;?>
							<br>
							<input type="submit" value="Modifier" name="modifPhoto">
							<input type="submit" value="Supprimer" onclick="confirm('Etes-vous sûr de vouloir supprimer cette photo ?');" name="Supprimer">
						</div>
					</form>
				<!--Le fameux texte qui s'affiche si $listePhoto est vide-->				
				<?php }else:{
					echo "Il n'y a pas encore de photos dans cette galerie !";
				}endif;?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-5">
				<input type="button" value="Retour aux galeries" class="homebutton" id="btnHome" onClick="window.location = './indexx.php?page=2'" />
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>


	<!--
	<div>
	 A AJOUTER:

			- FONCTION MODIFICATION PHOTO:
				- MODIFIER TITRE AVEC STR_REPLACE;
				- MODIFIER DESCRIPTION AVEC STR_REPLACE;
				- MODIFIER PHOTO (UPLOAD UNE A LA PLACE DE L'ACTUELLE) + RECUPERATION EXIFS;
				- SAUVEGARDE EN BDD ET DANS DOSSIER CORRESPONDANT;

			- FONCTION AJOUT COVER (SAUF SI C'EST ALEXIS QUI SANS OCCUPE):
				- SAUVEGARDER UNE PHOTO AVEC TITRE PAR DEFAUT (EX: COVER.JPEG);
				- AJOUTER UN CHAMP BOOLEEN COVER DANS LA BDD;

			\- FONCTION SUPPRESSION DE PHOTO:			\
			\	- SUPPRESSION DE LA BDD;				\		FAIT
			\	- SUPPRESSION DU DOSSIER CORRESPONDANT;	\

			- FONCTION VERIFICATION DE L'EXTENSION (POUR PAS UPLOADER N'IMPORTE QUOI);

			A SUPPRIMER ?
			- photosModifController.php, SI J'ARRIVE A UTILISER LE .TPL DEPUIS ICI;
		<table>
			<ul>
				<li>
					<p>A AJOUTER:</p>
					<p>- FONCTION DE PREVISUALISATION DE LA VIGNETTE AVANT UPLOAD;</p>
					<ul>
						<li>
							<p>- FONCTION AJOUT COVER (SAUF SI C'EST ALEXIS QUI SANS OCCUPE):</p>
						<p>- SAUVEGARDER UNE PHOTO AVEC TITRE PAR DEFAUT (EX: COVER.JPEG);</p>
						<p>- AJOUTER UN CHAMP BOOLEEN COVER DANS LA BDD;</p>
						</li>
				</ul>
					<p>- FONCTION VERIFICATION DE L'EXTENSION (POUR PAS UPLOADER N'IMPORTE QUOI);</p>
				</li>
			</ul>
			<ul>
				<li>
					<p>A SUPPRIMER ?</p>
					<p>- photosModifController.php, SI J'ARRIVE A UTILISER LE .TPL DEPUIS ICI;</p>
				</li>
			</ul>
			<ul>
		</table>
	</div>
	-->

	<!--Delete(<?php// $listePhoto[$key]['id']?>)-->

<?php include("inc/footer.inc.php") ?>
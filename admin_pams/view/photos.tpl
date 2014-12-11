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
				<span class="input-group-addon"> Affichage des miniatures des photos si possible</span><br/>
				
			</div>

		</div>
	</div>
	
	<!--A AJOUTER:
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
	-->

	<br>
	<br>
	<br>
	<br>
	<br>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<!--Si $listePhoto n'est pas vide, on affiche ce qui suit, sinon, on affiche un texte-->
				<?php if(!empty($listePhoto)):{?>
					<label for="modifPhoto">Modifier une photo de la galerie</label>
					<form method="POST" onSubmit="window.location.reload()">
						<div>
							<!--Pour chaque photo présente dans le tableau, on affiche la vignette qui va bien-->
							<?php foreach($listePhoto as $key => $value):{?>
							<div>
								<div id="<?=$listePhoto[$key]['id']?>">
									<?= $listePhoto[$key]['$lool']?>
								</div>
								<!--<div>			ça c'est en commentaire parce que je sais pas encore si ça va servir ou pas
								                                                    /¯/¯/¯/¯/¯/¯\
									<?php//$key ?>                                 //¯¯¯¯¯¯¯¯¯¯¯\\
									<?php//$listePhoto[$key]["id"] ?>			   ||¯¯¯|	|¯¯¯||						
									<?php//$listePhoto[$key]["id_gallery"] ?>	 |¯|| o |===| o ||¯|					
									<?php//$listePhoto[$key]["title"] ?>		 | | ¯¯¯ | | ¯¯¯ | |
									<?php//$listePhoto[$key]["description"] ?>	  ¯|	/o¯o\	 |^						
									<?php//$listePhoto[$key]["exif"] ?>				\\_________//		
									<?php//$listePhoto[$key]["url"] ?>				 \_________/
								</div>-->
								<input type="checkbox" name="checkbox[]" value="<?=$listePhoto[$key]['id']?>">Modifier</input>
								<input type="radio" name="cover">Cover</input>
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
	</div>
	<!--Delete(<?php// $listePhoto[$key]['id']?>)-->
	<br>
	<br>
	<br>
	<br>
	<br>

<?php include("inc/footer.inc.php") ?>
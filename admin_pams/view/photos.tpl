<?php include("inc/header.inc.php") ?>

<body>
<?php include("inc/nav.inc.php") ?>
 

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<label for="addPhoto">Ajouter une photo à la galerie (2Mo max)</label>
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
			<div class="col-md-3">
				<label for="modifPhoto">Modifier une photo de la galerie</label>
				<form method="POST">
					<div>
						<?php foreach($listePhoto as $key => $value):{?>
						<div>
							<div>
								<?= $lool?>
								<?= "<img src='../gallery/test/".$listePhoto[$key]['url']."'>"; ?>
							</div>
							<div>
								<?= $key ?>
								<?= $listePhoto[$key]["id"] ?>
								<?= $listePhoto[$key]["id_gallery"] ?>
								<?= $listePhoto[$key]["title"] ?>
								<?= $listePhoto[$key]["description"] ?>
								<?= $listePhoto[$key]["exif"] ?>
								<?= $listePhoto[$key]["url"] ?>

							</div>
							thumbnail<br>
							<input type="checkbox">Modifier</input>
							<input type="radio" name="cover">Cover</input><br>
							<!--<input type="button" value="Supprimer" onclick=Delete(<?php//$listePhoto[$key]['id']?>)><br>-->
						</div>
						<?php }endforeach;?>
						<input type="submit" value="Modifier"  name="modifPhoto">
					</div>
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

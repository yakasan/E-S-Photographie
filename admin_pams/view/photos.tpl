<?php include("../inc/header.inc.php") ?>

<body>
<?php include("../inc/nav.inc.php") ?>

<label for="addPhoto">Ajouter une photo à la galerie</label>
<form method="POST" name="formAdd">
	<input type="file">
	<label for="title">Ajouter un titre</label>
	<input type="text" name="title">
	<label for="desc">Ajouter une description</label>
	<input type="text" name="desc">
	<input type="submit" value="Ajouter">
</form>

<br>
<br>
<br>
<br>
<br>

<label for="modifPhoto">Modifier une photo de la galerie</label>
<form method="POST" name="modifPhoto">
	<?php// foreach($.... as $key => $value):{?>
		thumbnail
		<input type="checkbox">Modifier</input>
		<input type="radio" name="cover">
	<?php// }endforeach;?>
	<input type="submit" value="Modifier">
</form>


<br>
<br>
<br>
<br>
<br>

<a href='http://localhost/E-S-Photographie/admin_pams/controller/photos_modifController.php'>click</a>

<?php include("../inc/footer.inc.php") ?>
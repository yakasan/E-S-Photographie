<?php include("../inc/header.inc.php") ?>

<body>
<?php include("../inc/nav.inc.php") ?>


	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<label for="addPhoto">Ajouter une photo à la galerie</label>
				<form method="POST" name="formAdd">
					<input type="file">
					<label for="title">Ajouter un titre</label>
					<input type="text" name="title">
					<label for="desc">Ajouter une description</label>
					<input type="text" name="desc">
					<input type="submit" value="Ajouter">
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
				<form method="POST" name="modifPhoto">
					<?php// foreach($.... as $key => $value):{?>
						thumbnail<br>
						<input type="checkbox">Modifier</input>
						<input type="radio" name="cover">Cover</input><br>
					<?php// }endforeach;?>
					<input type="submit" value="Modifier">
				</form>
			</div>
		</div>
	</div>
	
	
	<br>
	<br>
	<br>
	<br>
	<br>

<?php include("../inc/footer.inc.php") ?>
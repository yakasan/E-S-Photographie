<?php include("../inc/header.inc.php") ?>

<body>
<?php include("../inc/nav.inc.php") ?>

 
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<label for="photoRecup">Modifier la photo</label>
				<?php// foreach($..... as $key => $value): {?>
					<form name="photoRecup">
						thumbnail<br>
						lien
						<input type="file">
						<label for="title">Modifier le titre</label>
						<input type="text" name="title">
						<label for="desc">Modifier la description</label>
						<input type="text" name="desc">
						<label for="exifs">Modifier les exifs</label>
						<input type="text" name="exifs">
				<?php// } endforeach;?>
						<input type="submit" value="Valider l'ensemble des modifications">
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
<?php include("../inc/header.inc.php") ?>

<body>
<?php include("../inc/nav.inc.php") ?>

<label for="photoRecup">Modifier la photo</label>
<?php// foreach($..... as $key => $value): {?>
	<div id="$key">
		<form name="photoRecup">
			thumbnail
			lien
			<input type="file">
			<label for="title">Modifier le titre</label>
			<input type="text" name="title">
			<label for="desc">Modifier la description</label>
			<input type="text" name="desc">
			<label for="exifs">Modifier les exifs</label>
			<input type="text" name="exifs">
		</form>
	</div>
<?php// } endforeach;?>




<?php include("../inc/footer.inc.php") ?>
<?php include("../inc/header.inc.php") ?>

<body>
<?php include("../inc/nav.inc.php") ?>


	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="list-group">
					
					<a href="#" class="list-group-item disabled">Liste des messages</a>
					<form method='POST'>
					<div class="divscroll">
					<?php if (isset($recmess)){
						foreach ($recmess as $key => $value) {
							if (isset($recmess[$key]['id'])){
								if ($recmess[$key]['seen']==1){
									$colorb='lgrey';
								}
						echo "<a href='#' class='list-group ".$colorb."' name='idmess".($recmess[$key]['id'])."'>".$recmess[$key]['title']."</br>Mail : ".$recmess[$key]['sender_email']."</a>" ;
							}
						}
					}
					?>
					</div>
					<input type="submit" class="btn btn-default navbar-btn" value="Visionner"/>
					</form>
				</div>
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-5">
				<?php if (!empty($_POST)){ ?>
				<table class="table">
					<tr> 
						<th>Affichage du message: </th>
					</tr>

					<tr>
						<td>
							<form method="GET">
							<span>Titre : </span></br>
							<span><?= $recmessindiv[0]['title'] ; ?></span>
						</td>
					</tr>
					<tr>
						<td>
							<span>Email : </span></br>
							<span><?= $recmessindiv[0]['sender_email']; ?></span>
						</td>
					</tr>
					<tr>
						<td>
							<span>Texte : </span></br>
							<span><?= $recmessindiv[0]['text']; ?></span>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="Répondre" class="btn btn-default">
							<input type="submit" value="Supprimer" class="btn btn-default">
							</form>
						</td>
					</tr>	
				</table>
				<?php } ?>
			</div>
		</div>
	</div>

<?php include("../inc/footer.inc.php") ?>
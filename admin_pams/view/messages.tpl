<?php include("inc/header.inc.php") ?>

<body>
<?php include("inc/nav.inc.php") ?>


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
								}else{
									$colorb='';
								}
						echo "<a class='list-group-item ".$colorb."' name='idmess".($recmess[$key]['id'])."'> <input type='radio' name='idmess' value='".($recmess[$key]['id'])."'/> Titre : ".$recmess[$key]['title']."</br>Mail : ".$recmess[$key]['sender_email']."</a>" ;
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
			<div class="col-md-5 divscrollbis">
				<?php if (!empty($recmessindiv)){ ?>
				<table class="table">
					<tr> 
						<th>Affichage du message: </th>
					</tr>

					<tr>
						<td>
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
							<span><?= utf8_encode($recmessindiv[0]['text']); ?></span>
						</td>
					</tr>
					<tr>
						<td>
							<?= "<a href='mailto:".$recmessindiv[0]['sender_email']."' class='btn btn-default navbar-btn'> Répondre </a>" ;?>
							<?= '<a  name="Supprimer" href="?supprimer&id=' . $id . '" class="btn btn-default navbar-btn">Supprimer</a>'?>
						</td>
					</tr>	
				</table>
				<?php } ?>
			</div>
		</div>
	</div>

<?php include("inc/footer.inc.php") ?>
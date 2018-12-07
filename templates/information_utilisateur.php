<!DOCTYPE html>
<html lang="fr">
<head>
	<?php
		include 'head.php';
	?>
	<link rel="stylesheet" type="text/css" href="./CSS/styles_info_utilisateur.css">

	</script>
</head>
<body>
		<?php include
			'header.php';
		?>
		<!-- Corps du site -->
		<!-- Debut corps de la page -->
		<div class="container-fluid mt-3">
			<div class="row">
				<div class="col-4">
					<div class="container-fluid border rounded pt-3">
						<?php
						/*echo("
							<div class='list-group md-2' id='myList' role='tablist'>
								<a class='list-group-item list-group-item-action active list-group-item-secondary' data-toggle='list'
									href='http://localhost/~avadrot/ProjetS3/information_utilisateur.php?action=compte' role='tab' onclick='epicerie()'>
									Compte
								</a> 
								<a class='list-group-item list-group-item-action list-group-item-secondary' data-toggle='list'
									href='http://localhost/~avadrot/ProjetS3/information_utilisateur.php?action=modifications' role='tab' onclick='condiments()'>
									Modifier les informations personnelles
								</a>
								<a class='list-group-item list-group-item-action list-group-item-secondary' data-toggle='list' href='http://localhost/~avadrot/ProjetS3/information_utilisateur.php?action=parametres' role='tab' onclick='feculents()'>
									Paramètres du frigo
								</a>
								<a class='list-group-item list-group-item-action list-group-item-secondary' data-toggle='list' href='http://localhost/~avadrot/ProjetS3/information_utilisateur.php?action=notifications' role='tab' onclick='autres()'>
									Notifications
								</a>
								<a class='list-group-item list-group-item-action list-group-item-secondary' data-toggle='list' href='http://localhost/~avadrot/ProjetS3/information_utilisateur.php?action=abonnement' role='tab' onclick='autres()'>
									Gérer les abonnements
								</a>
							</div>");*/
							echo("<ul class='pl-5'>
								<li class='pt-3'><a href='http://localhost/~avadrot/ProjetS3/information_utilisateur.php?action=compte'>Compte</a></li>
								<li class='pt-3'><a href='http://localhost/~avadrot/ProjetS3/information_utilisateur.php?action=modifications'>Modifier les informations personnelles</a></li>
								<li class='pt-3'><a href='http://localhost/~avadrot/ProjetS3/information_utilisateur.php?action=parametres'>Paramètres du frigo</a></li>
								<li class='pt-3'><a href='http://localhost/~avadrot/ProjetS3/information_utilisateur.php?action=notifications'>Notifications</a></li>
								<li class='pt-3'><a href='http://localhost/~avadrot/ProjetS3/information_utilisateur.php?action=abonnement'>Gérer les abonnements</a></li>
							</ul>
							"); 
						?>
					</div>
				</div>
				<div class="col-8">
					<div class="container-fluid border rounded pt-3">
						<?php
							if(!isset($_GET["action"])) {
								$_GET["action"] == 'compte';
							}
							if($_GET["action"] == 'compte') {
								echo("
									<div>
										<div>
											<h6>Vous etes connectés en tant que : PHP A INSEREZ POUR RECCUP LEPSEUDO</h6>
										</div>
										<div>
											<h6>Votre adresse mail : PHP A INSEREZ POUR RECCUP LADRESSE</h6>
										</div>
										<div>
											<h6>Votre numéro de téléphone : PHP A INSEREZ POUR RECCUP LE TEL</h6>
										</div>
										<div>
											<h6>Votre image de profil : PHP A INSEREZ POUR RECCUP LA PP</h6>
										</div>
									</div>
								");
							} else if($_GET['action'] == 'modifications') {
								echo("
									<div class='container-fluid pb-2'>
										<div>
											<div class='container-fluid'>
												<div class='row mt-2'>
													<div class='col-2 mt-2'>
														<h6 '>Modifier votre nom d'utilisateur : </h6>
													</div>
													<form class='col-10' action='index.php?module=joueurs&action=ajout' method='post'>
		 												<div class='container-fluid'>
			 												<div class='row justify-content-between'>
		 														<input class='col-4 mr-2' type='text' name='nom' placeholder='Votre nouveau nom d utilisateur'>
		 														
		 													</div>
		 												</div>
													</form>
												</div>
											</div>

											<div class='container-fluid'>
												<div class='row mt-2'>
													<div class='col-2 mt-2'>
														<h6 '>Modifier votre adresse mail : </h6>
													</div>
													<form class='col-10' action='index.php?module=joueurs&action=ajout' method='post'>
		 												<div class='container-fluid'>
			 												<div class='row justify-content-between'>
		 														<input class='col-4 mr-2' type='text' name='nom' placeholder='Votre nouvelle adresse mail : '>
		 														
		 													</div>
		 												</div>
													</form>
												</div>
											</div>

											<div class='container-fluid'>
												<div class='row mt-2'>
													<div class='col-2 mt-2'>
														<h6>Modifier votre nom de passe : </h6>
													</div>
													<form class='col-10' action='index.php?module=joueurs&action=ajout' method='post'>
		 												<div class='modification_champ'>
			 												<div class='container-fluid'>
			 													<div class='row'>
		 															<input class='col-4 mr-5' type='text' name='nom' placeholder='Votre nouveau mot de passe'>
		 															<input class='col-4 mr-2' type='text' name='nom' placeholder='Confirmation nouveau mot de passe'>
		 															
			 													</div>
			 												</div>
		 												</div>
													</form>
												</div>
											</div>
										</div>
										<div class=' container-fluid border-top border-topsuccess'>
											<div class='row md-2'>
												<input class='col-md-6 offset-md-3 mt-2' id='button_change' type='submit' value='Appliquer les modifications'>
											</div>
										</div>
									</div>
								");
							} else if($_GET['action'] == 'parametres') {
								echo("
									<div class='container-fluid pb-2'>
										<div>
											<div class='container-fluid'>
												<div class='row mt-2'>
													<div class='col-3 mt-2'>
														<h6>Vider le frigo : </h6>
													</div>
													<form class='col-9	' action='index.php?module=joueurs&action=ajout' method='post'>
		 												<div class='container-fluid'>
			 												<div class='row justify-content-between'>
		 														<input type='checkbox' aria-label='Checkbox for following text input'>
		 														
		 													</div>
		 												</div>
													</form>
												</div>
												<div class='row mt-2'>
													<div class='col-3 mt-2'>
														<h6>Vider une catégorie du frigo : </h6>
													</div>
													<div>
														<select class='custom-select disabled' id='inputGroupSelect01'>
													    <option selected>Catégorie</option>
													    <option value='1'>Fruits</option>
													    <option value='2'>Légumes</option>
													    <option value='3'>Laitiers</option>
													    <option value='4'>Surgelés</option>
													    <option value='5'>Viandes</option>
													  </select>
													</div>
												</div>
												<div class='row mt-2'>
													<div class='col-3 mt-2'>
														<h6>Vider une catégorie de l'étagère : </h6>
													</div>
													<div>
														<select class='custom-select disabled' id='inputGroupSelect01'>
													    <option selected>Catégorie</option>
													    <option value='1'>Epicerie</option>
													    <option value='2'>Condiments</option>
													    <option value='3'>Sauces</option>
													  </select>
													</div>
												</div>
											</div>
										</div>
										<div class=' container-fluid border-top border-topsuccess'>
											<div class='row'>	
												<input class='col-md-6 offset-md-3 mt-md-2' id='button_change' type='submit' value='Appliquer les modifications'>
											</div>
										</div>
									</div>
								");
							} else if($_GET['action'] == 'notifications') {
								echo("
									<div class='container-fluid pb-2'>
										<div>
											<div class='container-fluid'>
												<div class='row mt-2'>
													<div class='col-4 mt-2'>
														<h6>Authoriser l'envoie de notifications :  </h6>
													</div>
													<form class='col-8 pt-3' action='index.php?module=joueurs&action=ajout' method='post'>
		 												<div class='container-fluid'>
			 												<div class='row justify-content-between'>
		 														<input type='checkbox' aria-label='Checkbox for following text input'>
		 														
		 													</div>
		 												</div>
													</form>
												</div>
											</div>

											<div class='container-fluid'>
												<div class='row mt-2'>
													<div class='col-5'>
														<h6>Les notifications sont envoyées à : </h6>
													</div>
													<div class='col-7'>
													<h6>ADRESSE A AJOUETR EN PHP</h6>
													</div>
											</div>

											<div class='container-fluid mb-2'>
												<div class='row mt-2'>
													<div class='col-4 mt-2'>
														<h6>Fréquence des notifications : </h6>
													</div>
													<div>
														<select class='custom-select disabled' id='inputGroupSelect01'>
													    <option selected>Fréquence</option>
													    <option value='1'>Quotidiennement</option>
													    <option value='2'>Hebdomadairement</option>
													    <option value='3'>Mensuellement</option>
													    <option value='4'>Annuellement</option>
													    <option value='5'>Toute les décénnies</option>
													  </select>
													</div>
												</div>
											</div>
										</div>
										<div class=' container-fluid border-top border-topsuccess'>
											<div class='row'>
											<input class='col-md-6 offset-md-3 mt-md-2' id='button_change' type='submit' value='Appliquer les modifications'>
											</div>
										</div>
									</div>
								");
							} else if($_GET['action'] == 'abonnement') {
								echo("
									<div class='container-fluid pb-2'>
										<div>
											<div class='container-fluid'>
												<div class='row mt-2'>
													<div class='col-4 mt-2'>
														<h6>Vous avez X abonnement(s)</h6>
													</div>
												</div>
											</div>

											<div class='container-fluid'>
												<div class='row mt-2'>
													<div class='col-5'>
														<h6>Vous etes suivis par X personne(s)</h6>
													</div>
											</div>

											<div class='container-fluid mb-2'>
												<div class='row mt-2'>
													<div class='col-4 mt-2'>
														<h6>Fréquence des notifications : </h6>
													</div>
													<div>
														 
													</div>
												</div>
											</div>
										</div>
										<div class=' container-fluid border-top border-topsuccess'>
											<div class='row'>
											<input class='col-md-6 offset-md-3 mt-md-2' id='button_change' type='submit' value='Appliquer les modifications'>
											</div>
										</div>
									</div>
								");
							}
						?>
					</div>
				</div>
			</div>
		</div>
		<!-- Fin corps de la page   -->
		<?php include 'footer.php'?>
</body>
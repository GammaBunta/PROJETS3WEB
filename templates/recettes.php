<!DOCTYPE html>
<html lang="fr">
<head>
	<?php
		include 'head.php';
	?>
	<link rel="stylesheet" type="text/css" href="./CSS/styles_recettes.css">

	<script>
		function alerteChgmntPage() {
			return confirm("Vous allez changer de page !");
			
		}
	</script>
</head>
<body>
	<?php
		include 'header.php';
	?>
	<!-- Corps du site -->
	<!-- Debut corps de la page -->

	<!-- Debut entete recherche -->
	<div class="row justify-content-md-center p-3 md-3">
		<div class="container m-3 bg-success">
			<div class="row justify-content-md-center p-4">
				<h3>
					Trouvez votre recette parmi notre base de données
				</h3>
			</div>
			<div class="pl-3 row input-group">
					<input type="text" class="form-control" placeholder="Entrez une recette" name="inputRecette">
					<span class="input-group-btn">
						<button class="btn btn-default">Chercher</button>
					</span>
			</div>
			<!-- Debut Options-->
			<div class="mt-3 mb-3 container border border-dark">
				<div class="row">
					<div class="col">
						<ul>
						<li>
							<div>
								<h5>Catégorie du plat : </h5>
								<select class='custom-select disabled' id='inputGroupSelect01'>
								    <option selected>Catégorie</option>
								    <option value='1'>Entrée</option>
								    <option value='2'>Plat Salé</option>
								    <option value='3'>Plat Sucré</option>
								    <option value='4'>Dessert</option>
								    <option value='5'>Gouter avec un circonflexe sur le u</option>
							  </select>
							</div>
						</li>
						<li>Option 2</li>
						<li>Option 3</li>
						<li>Option 4</li>
						</ul>
					</div>
					<div class="col">
						<ul>
						<li>Option 5</li>
						<li>Option 6</li>
						<li>Option 7</li>
						<li>Option 8</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Fin Options-->
			<div>
				<div class='row md-2 pb-2'>
					<a href="http://localhost/~avadrot/ProjetS3/information_utilisateur.php"
						class='btn btn-success col-md-6 offset-md-3 mt-2 rounded border-dark'
						id='tailleTxtBtn' onclick='return alerteChgmntPage()'>Rechercher avec mes ingrédients du frigo</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Fin entete recherche-->
	<!-- Fin corps du site -->
	<!-- Fin corps de la page -->
	<?php
		include 'footer.php';
	?>
</body>
</html>
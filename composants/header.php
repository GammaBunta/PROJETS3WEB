<div class="sticky-top bg-success" id="headerTop">
	<div>
		<div class="row justify-content-around">
		<!-- Bouton déroulant BURGER-->
			<nav class="col-4">
				<div class="container-fluid" data-toggle="collapse" data-target="#menuCote" aria-expanded="false" aria-controls="menuCote" onclick="myFunction(this)">
	  				<div>
	  					<div class="bar1"></div>
	  					<div class="bar2"></div>
	  					<div class="bar3"></div>
	  				</div>
				</div>
			</nav>
			<!-- Fin Bouton déroulant BURGER-->

			<!-- Nom du site -->
			<header class="col-4 text-center">
				<div>
					<a href="index.php" id="ofrigo" class="text-center h2">O•FR!GO</a>
				</div>
			</header>
			<!-- Fin Nom du site -->

			<!-- cadre connexion/log in -->
			<!-- <div class="col align-self-end" id="cadre"> -->
			<div class="col-4" id="cadre">
				<div class="text-center border border-light rounded">
					<div class="row">
						<div class="col-1 ">
							<img class="img-responsive" style="width: 50px;" src="./Images/pprofil.png">
						</div>
						<div class="col text-center mt-3">
						<?php
							if(isset($_SESSION['login'])){
								echo '<a href="index.php?module=Connexion&action=deconnexion" class="text-center h6">Deconnexion</a>';
            				}
							else{
								echo '<a href="index.php?module=Connexion" class="text-center h6">Connexion</a>';
							}
							
						?>
						</div>
					</div>
				</div>
			</div>
			<!-- fin cadre connexion/log in -->
		</div>
	</div>

	<!-- menu déroulé -->
	<div class="sticky-top">
		<div class="collapse" id="menuCote">
			<div class="row">
				<div class="col-sm">
					Ceci est un test
				</div>
				<div class="col-sm">
					Ceci est un test 2
				</div>
			</div>
		</div>
	</div>
	<!-- fin menu déroulé -->
</div>
<!-- fin header du site -->

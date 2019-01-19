<header>
	<nav class="navbar navbar-expand-lg navbar-success bg-success fixed-top mb-5">
		<div class="container-fluid">
			<div class="float-left">
				<a id="ofrigo" class="navbar-brand float-left" href="index.php" ><img  src="./Images/logo_blanc.png" width="50" height="45" alt="logofrigo"/></a>
				<ul class="nav navbar-nav mt-3">
					<li class="nav-item">
						<a class="nav-link text-light" href="index.php">Accueil</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Recettes</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="index.php?module=RechercheRecettes">Recettes disponibles</a>
							<?php
							if(isset($_SESSION['id'])){
								echo '<a class="dropdown-item" href="index.php?module=ajoutRecette">Publier une recette</a>';
							}else{
								echo '<a class="dropdown-item disabled" >Publier une recette</a>';
							}
							?>


						</div>
					</li>

					<li class="nav-item">
						<?php
						if(isset($_SESSION['id'])){
							echo '<a class="nav-link text-light" href="index.php?module=Frigo">Frigo</a>';
						}else{
							echo '<a class="nav-link disabled" >Frigo</a>';

						}
						?>

					</li>
						<form class="navbar-form ml-3" action="./index.php?module=RechercheRecettes&action=rechercheNav" enctype="multipart/form-data" method="post" role="search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Chercher une recette" name="nomRec">
								<div class="input-group-btn">
								<button type="submit" class="btn btn-light"> <img width="24" src="./Images/search.png"/></button>
								</div>
							</div>
						</form>
				</ul>

			</div>
			<ul class="nav navbar-nav navbar-right">
			<?php
			if(isset($_SESSION['id'])){
				echo '<li><a class="text-white" href="index.php?module=Connexion&action=deconnexion"><img class="mr-2" src="./Images/log-out.png"width="30" height="30" alt="logoConnexion"/>Déconnexion</a></li>';
			}else{
				echo '<li><a class="text-white" href="index.php?module=Connexion"><img class="mr-2" src="./Images/log-out.png"width="30" height="30" alt="logoConnexion"/>Connexion</a></li>';
			}
			if(isset($_SESSION['id'])){
				echo '<li class="border-left border-white mt-1 ml-2 pl-2"><a class="text-white" href="index.php?module=Compte">Compte</a></li>';
			}
			 ?>
    	</ul>
		</div>
	</nav>
</header>
<!-- fin header du site -->

<header>
	<nav class="navbar navbar-expand-lg navbar-success bg-success fixed-top mb-5">
		<div class="container-fluid">
			<div class="float-left">
			<a id="ofrigo" class="navbar-brand float-left" href="index.php" ><img  src="./Images/logo_blanc.png" width="40" height="40" alt="logofrigo"/></a>
			<ul class="nav navbar-nav">
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
			</ul>
		</div>
			<ul class="nav navbar-nav navbar-right">
			<?php
			if(isset($_SESSION['id'])){
				echo '<li><a class="text-white" href="index.php?module=Connexion&action=deconnexion"><img class="mr-1" src="./Images/logo_connexion.png"width="30" height="30" alt="logoConnexion"/>Déconnexion</a></li>';
			}else{
				echo '<li><a class="text-white" href="index.php?module=Connexion"><img class="mr-1" src="./Images/logo_connexion.png"width="30" height="30" alt="logoConnexion"/>Connexion</a></li>';
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

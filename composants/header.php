<header>
	<nav class="navbar navbar-expand-lg navbar-success bg-success">
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
			      <a class="dropdown-item" href="#">Recettes disponibles</a>
			      <a class="dropdown-item" href="#">Créer une recette</a>
			    </div>
			  </li>
				<li class="nav-item">
        	<a class="nav-link disabled" href="#">Frigo</a>
      	</li>
			</ul>
		</div>
			<ul class="nav navbar-nav navbar-right">
	      <li><a class="text-white" href="#"><img class="mr-1" src="./Images/logo_connexion.png"width="30" height="30" alt="logoConnexion"/>Connexion</a></li>
    	</ul>
		</div>
	</nav>
</header>
	<!-- fin header du site -->



<!---
	<?php
	if(isset($_SESSION['id'])){
		echo '<a href="index.php?module=Connexion&action=deconnexion" class="text-center h6">Deconnexion</a>';
	}
	else{
		echo '<a href="index.php?module=Connexion" class="text-center h6">Connexion</a>';
	}
	?>
-->

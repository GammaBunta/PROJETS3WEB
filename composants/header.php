<header>
	<nav class="navbar navbar-expand-lg navbar-success bg-success">
		<a id="ofrigo" class="float-left ml-5" href="index.php"><img  src="./Images/logo_blanc.png" /><a>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
				</ul>
				<span class="navbar-text">
					Navbar text with an inline element
				</span>
			</div>
		</nav>
	</header>
	<!-- fin header du site -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light">


	</nav>


	<?php
	if(isset($_SESSION['id'])){
		echo '<a href="index.php?module=Connexion&action=deconnexion" class="text-center h6">Deconnexion</a>';
	}
	else{
		echo '<a href="index.php?module=Connexion" class="text-center h6">Connexion</a>';
	}
	?>

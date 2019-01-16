<?php
    require_once('./ClassesGeneriques/vue_generique.php');
    class Vue_CreerCompte extends VueGenerique{
    	private $erreur;
        public function __construct(){
            parent::__construct();
            $this->erreur ="";
        }

        public function setErreur($er){
          $this->erreur = $er;
        }

        public function afficheInit(){
        	echo '

        	<body>
			 	<main class="text-center padding-bottom padding-top-xl mt-5   " style="min-height: calc(72.5vh);">
			        <a class="logo logo-lg" href="index.php">

			        </a>
			        <div class="col-4 container bg-light border border-primary mt-5 rounded ">
			            <p>
			                <h1 class="display-5">
			                    Créer un compte
			                </h1>
			            </p>
			            <hr>
			            <p>';
			if ($this->erreur != "") {
                echo '<ul class="list-group ">';
                        echo '	        <li class="list-group-item list-group-item-danger">';
                        echo $this->erreur;
                        echo "        </li>\n";
                echo '</ul>';
            }

			echo'
			                <form action="./index.php?module=CreerCompte&action=creer" method="post" id="needs-validation">
			                    <div class="form-group ">
			                        <input type="text" class="form-control mt-4" name="login" placeholder="Nom d\'utilisateur" required>
			                        <div class="invalid-feedback text-left">
			                           Nom d\'utilisateur
			                        </div>
			                    </div>
			                    <div class="form-group ">
			                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="E-mail" required>
			                        <div class="invalid-feedback text-left">
			                           E-mail
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <input type="password" class="form-control" name="mdp" id="pwd" placeholder="Mot de passe" required>
			                        <div class="invalid-feedback text-left">
			                        	Mot de passe.
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <input type="password" class="form-control"  name="mdp2" placeholder="Confirmer mot de passe" required>
			                        <div class="invalid-feedback text-left">
			                            Mot de passe.
			                        </div>
			                    </div>


			                    <button type="submit" class="btn btn-success btn-lg">S\'inscrire</button>
			                </form>
			            </p>
			        </div>
			    </main>
			</body>
			</html>';
        }
    }
?>

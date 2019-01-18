<?php
    require_once('./ClassesGeneriques/vue_generique.php');
    class Vue_Connexion extends VueGenerique{

        private $erreur;
        public function __construct(){
            parent::__construct();
            $this->erreur ="";
        }

        public function setErreur($er){
          $this->erreur = $er;
        }

        public function afficheInit($tok){
            echo'

            <body>
              <main class="text-center padding-bottom padding-top-xl mt-5 ">
                <div class ="row mt-5">

                    <div class="col-4 container bg-light border border-primary rounded mt-5   ">
                        <p>
                            <h1 class="display-5">
                                Connexion
                            </h1>
                        </p>
                        <hr>
                        <p>';

            if ($this->erreur != "") {
                echo '<ul class="list-group ">';
                        echo '          <li class="list-group-item list-group-item-danger">';
                        echo $this->erreur;
                        echo "        </li>\n";
                echo '</ul>';
            }
            echo'
                            <form action="?module=Connexion&action=connecte" method="post" id="needs-validation" novalidate>
                                <div class="form-group ">
                                    <input type="text" class="form-control mt-3" id="email" name="login" placeholder="Nom d\'utilisateur ou E-mail" required>
                                    <div class="invalid-feedback text-left">
                                       Nom d\'utilisateur ou E-mail .
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="pwd" name="mdp" placeholder="Mot de passe" required>
                                    <div class="invalid-feedback text-left">
                                      Mot de passe.
                                    </div>
                                </div>
                                <small class="form-text">
                                    <div class="row">
                                        <div class="col-6 text-left">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox">
                                                <span class="custom-control-description">Se souvenir de moi</span>
                                            </label>
                                        </div>
                                        <div class="col-6 text-right">
                                            <a href="forgot.php">Mot de passe oublié ?</a>
                                        </div>
                                    </div>
                                </small>';
                                echo $this->getHiddenToken($tok);
                                echo'<button type="submit" class="btn btn-success btn-lg">Connexion</button>
                            </form>
                            <hr>
                            <small class="form-text text-muted">
                            Pas encore inscrit ?
                            <a href="./index.php?module=CreerCompte">Créer un compte.</a></small>
                        </p>
                    </div>
                    </div>
                </main>
            </body>
            ';
        }


    }

?>

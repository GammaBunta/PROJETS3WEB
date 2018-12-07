<?php
    require_once('./ClassesGeneriques/vue_generique.php');
    class Vue_Connexion extends VueGenerique{

        public function __construct(){
            parent::__construct();
        }


        public function afficheInit(){
            echo'
            <head>
              <title>Connexion</title>
            </head>
            <body>
              <main class="text-center padding-bottom padding-top-xl">
                    <a class="logo logo-lg" href="index.php">

                    </a>
                    <div class="col-4 container bg-light border border-primary rounded mt-5">
                        <p>
                            <h1 class="display-5">
                                Connexion
                            </h1>
                        </p>
                        <hr>
                        <p>
                            <form action="index.php" method="post" id="needs-validation" novalidate>
                                <div class="form-group ">
                                    <input type="text" class="form-control" id="email" placeholder="Nom d\'utilisateur ou E-mail" required>
                                    <div class="invalid-feedback text-left">
                                       Nom d\'utilisateur ou E-mail .
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="pwd" placeholder="Mot de passe" required>
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
                                </small>
                                <button type="submit" class="btn btn-success btn-lg">Connexion</button>
                            </form> 
                            <hr>
                            <small class="form-text text-muted">
                            Pas encore inscrit ? 
                            <a href="CreerCompte.php">Créer un compte.</a></small>
                        </p>
                    </div>
                </main>
            </body>
            ';
        }


    }

?>

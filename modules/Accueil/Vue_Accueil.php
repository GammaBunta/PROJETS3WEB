<?php
    require_once('./ClassesGeneriques/vue_generique.php');
    class Vue_Accueil extends VueGenerique{

        public function __construct(){
            parent::__construct();
        }

        public function afficheInitCo(){

        }

        public function afficheInitPasCo(){
            echo '

            <head>
              <?php include "./composants/head.php"; ?>
              <link rel="stylesheet" type="text/css" href="./CSS/accueil.css">
                <title>Frigo</title>
            </head>

    <body>
        <main class="text-center padding-bottom padding-top-xl mt-5 mb-5 " >
            <div class="container mt-5">
              <div class="row justify-content-around pt-5">
                  <div class="col-4 mt-5">
                        <h4 id="titre" class="text-light bg-success border border-secondary mb-0">
                          Recettes
                        </h4>
                        <div class="bg-light border border-secondary p-3">
                          <p class="mt-1">
                            Recherchez des recettes qui correspondent au contenu de votre frigo,
                            ou bien cherchez en fonction de la difficulté ou du type de plat voulu ! </br>
                            Vous pouvez aussi publiez vos propres recettes.
                           <hr>
                           <a href="index.php?module=RechercheRecettes" class="mb-1">Voir toutes les Recettes</a>
                        </p>
                        </div>
                  </div>

                  <div class="col-4 mt-5 ">
                        <h4 id="titre" class="text-light bg-success border border-secondary mb-0">
                          Frigo
                        </h4>
                        <div class="bg-light border border-secondary p-3" >
                          <p class="mt-1">
                              Gérez le contenu de votre frigo, vous pouvez voir son contenu en un clic. </br>
                              Vous pouvez voir la quantité et la date de péremption de vos aliments à tout moment.</br>
                              Pour cela il faut créer un compte.
                             <hr>
                             <a href="index.php?module=CreerCompte" class="mb-1">S\'inscrire</a>
                          </p>
                        </div>
                  </div>
              </div>
      </main>
    </body>

';
        }
    }
?>

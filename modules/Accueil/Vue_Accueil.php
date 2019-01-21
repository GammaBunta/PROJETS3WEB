<?php
    require_once('./ClassesGeneriques/vue_generique.php');
    class Vue_Accueil extends VueGenerique{

        public function __construct(){
            parent::__construct();
        }

        public function afficheInit(){
            echo '

              <head>

                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="">
                <meta name="author" content="">

                  <?php include "./composants/head.php"; ?>

                    <title>O•FR!GO</title>
                <!-- Bootstrap core CSS -->
                <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

                <!-- Custom fonts for this template -->
                <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

                <!-- Custom styles for this template -->
                <link href="./CSS/accueil.css" rel="stylesheet">

              </head>

              <body>


                <header class="masthead text-center text-white">
                  <div class="masthead-content">
                    <div class="container-fluid">
                      <h1 class="masthead-heading mb-0">UN FRIGO O NIVEAU</h1>
                      <h2 class="masthead-subheading mb-0">avec O•FR!GO</h2>
                      ';
                      if(isset($_SESSION['id'])){
                           echo' <a href="index.php?module=Frigo" class="btn btn-primary btn-xl rounded-pill mt-5">Votre Frigo</a>';
                      }else{

                          echo' <a href="index.php?module=CreerCompte" class="btn btn-primary btn-xl rounded-pill mt-5">S\'inscrire</a>';
                      }


                      echo'
                    </div>
                  </div>
                </header>

                <section>
                  <div class="container-fluid">
                    <div class="row align-items-center">
                      <div class="col-lg-6 order-lg-2">
                        <div class="p-5">
                          <img class="img-fluid rounded-circle" src="./Images/accueil1.png" alt="">
                        </div>
                      </div>
                      <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                          <h2 class="display-4">Recherchez des Recettes</h2>
                          <p>  Vous pouvez choisir les recettes qui vont conviennent en faisant un recherche par rapport au contenu de votre frigo ou bien en sélectionnant vos préférences.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>

                <section>
                  <div class="container-fluid">
                    <div class="row align-items-center">
                      <div class="col-lg-6">
                        <div class="p-5">
                          <img class="img-fluid rounded-circle" src="./Images/accueil3.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="p-5">
                          <h2 class="display-4">Organisez votre frigidaire </h2>
                          <p>Vous pouvez ajouter le contenu de votre frigidaire puis l\'actualiser pour vous aider à faire attention au gaspillage, aux dates de péremption ou bien aux enfants gourmants. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>

                <section>
                  <div class="container-fluid">
                    <div class="row align-items-center">
                      <div class="col-lg-6 order-lg-2">
                        <div class="p-5">
                          <img class="img-fluid rounded-circle" src="./Images/accueil2.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                          <h2 class="display-4">Publiez vos recettes secrètes</h2>
                          <p>Laissez les autres utilisateurs juger de la qualité de vos plats grâce au système de vote.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>

                </body>

                                <footer class="card-footer font-small bg-success mt-5">
                     <div class="container-fluid ">
                          <div class="text-center text-white">
                               <a href="http://www.iut.univ-paris8.fr/" id="ofrigo" class="text-center h4">    <img width="45" height ="35" src="./Images/logo_iut.png" /></a>
                                  <a href="index.php" id="ofrigo" class="text-center h5">O•FR!GO - Michel Samuel - Brood Sarah - Vadrot Arthur</a>
                          </div>
                      </div>
                </footer>



                <!-- Bootstrap core JavaScript -->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            </html>

';
        }
    }
?>

<?php
    require_once('./ClassesGeneriques/vue_generique.php');
    class Vue_RechercheRecettes extends VueGenerique{
        public function __construct(){
            parent::__construct();
        }

        public function afficheInit($array){
            echo '
            <head>
              <?php include "./composants/head.php"; ?>
              <link rel="stylesheet" type="text/css" href="./CSS/Recette.css">
              <script type="text/javascript" src="./scripts/frigo.js"> </script>

                <title>Frigo</title>
            </head>

            <body>
                <main class="text-center padding-bottom padding-top-xl mt-5 mb-5">

            <!-- Page Content -->
            <div class="container">

              <!-- Page Heading -->
              <div>
                  <h1 class="text-light bg-success mt-5 mb-0">RECETTES DISPONIBLES
                      <button type="button" class="btn btn-black float-right" data-toggle="collapse" data-target="#recherche" aria-expanded="false" aria-controls="recherche">
                          filtrer la recherche
                      </button>
                  </h1>
                  <div class="container  collapse bg-white " id="recherche">
                  <form action="./index.php?module=RechercheRecettes&action=rechercheNormale" enctype="multipart/form-data" method="post" id="form">
                      <div class="row">

                              <div class="col-5 mt-4">
                                  <div class="form-group">
                                      <label>Catégorie</label>
                                      <select class="form-control-sm float-right" name="categorie" required>
                                          <option selected>Choisir...</option>
                                          <option>Entrée</option>
                                          <option>Plat</option>
                                          <option>Dessert</option>
                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <label>Niveau</label>
                                      <select class="form-control-sm float-right " name="niveau" required>
                                          <option selected>Choisir...</option>
                                          <option>Très Facile</option>
                                          <option>Facile</option>
                                          <option>Intermédiaire</option>
                                          <option>Difficile</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="col-5 mt-4 ml-5">
                                  <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="vegetarien" value="vegetarien" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                        Végetarien
                                        </label>
                                  </div>
                                  <div class="form-check  mt-4">
                                        <input class="form-check-input" type="checkbox" name="gluten" value="gluten" id="defaultCheck2">
                                        <label class="form-check-label" for="defaultCheck2">
                                         Sans Gluten
                                        </label>
                                  </div>

                            </div>
                        </div>

                          <div class="row justify-content-center">
                              <button type="submit" class="btn btn-success ">Filtrer</button>
                          </div>
                      </div>

                  </form>
              </div>






              ';
             $compteur = 0;
             echo '<div class="mt-3">

             <div class="row">';
             if($array==NULL){
                 echo '<div class="row justify-content-center font-weight-bold mt-5 mb-0 ml-5 text-center">
                     <h3 class="text-light  bg-black centered text-center "> :\'( ... OUPS, on a rien trouvé pour vous ! </h3>
                      <button type="submit" onclick="window.location.href=\'index.php?module=Recettes\';"class="btn btn-success ml-5">Afficher toutes les recettes</button>
                 </div>';
             }else{
                 foreach($array as $item){
                      echo utf8_encode('

                        <div class="col-lg-4 col-sm-6 portfolio-item">
                          <div class="card h-60">  ');
                          if($item['img']==NULL){
                             $img='./Images/imagesRecettes/noimage.png';
                         }else{
                             $img=$item['img'];
                         }
                          echo utf8_encode('
                            <a href="index.php?module=Recettes&id='.$item['idrec'].'"><img class="card-img-top" src="'.$img.'" alt=""></a>
                            <div class="card-body">
                              <h4 class="card-title">
                                <a href="index.php?module=Recettes&id='.$item['idrec'].'">'.$item['titre'].'</a>
                              </h4>
                              <p class="card-text">Categorie : '.$item['categorie'].'</br> Niveau : '.$item['niveau'].' </br> Avis Positifs : '.$item['avisPositif'].'  </br> Avis Negatifs : '.$item['avisNegatif'].' </p>
                            </div>
                          </div>
                        </div>');
                        if($compteur==2){
                            $compteur=0;
                           echo '</div> <div class="row mt-5">';
                        }
                        $compteur++;

                 }
            }

                 echo '</div></div>';

                 echo '
                     <!-- Pagination -->
                     <ul class="pagination justify-content-center mt-5">
                       <li class="page-item">
                         <a class="page-link" href="#" aria-label="Previous">
                           <span aria-hidden="true">&laquo;</span>
                           <span class="sr-only">Previous</span>
                         </a>
                       </li>
                       <li class="page-item">
                         <a class="page-link" href="#">1</a>
                       </li>
                       <li class="page-item">
                         <a class="page-link" href="#">2</a>
                       </li>
                       <li class="page-item">
                         <a class="page-link" href="#">3</a>
                       </li>
                       <li class="page-item">
                         <a class="page-link" href="#" aria-label="Next">
                           <span aria-hidden="true">&raquo;</span>
                           <span class="sr-only">Next</span>
                         </a>
                       </li>
                     </ul>
                     </div>
               </div>
             }

            <!-- /.container -->


          </body>

        ';

        }

    }
?>

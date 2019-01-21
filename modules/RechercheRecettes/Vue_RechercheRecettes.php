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
              <script type="text/javascript" src="./scripts/rechercheRecettes.js"> </script>

                <title>Frigo</title>
            </head>

            <body>
            ';

            if(sizeof($array)<4){
                echo '<main class="text-center padding-bottom padding-top-xl pb-5 mb-5 mt-5 ">';
            }else{
                echo '<main class="text-center padding-top-xl mt-5 ">';
            }

            echo '    </br></br>

            <!-- Page Content -->
            <div class="container">

              <!-- Page Heading -->
              <div>
                  <h1 class="text-light bg-success mt-5 mb-0 border-rounded">RECETTES DISPONIBLES
                      <button type="button" class="btn btn-light float-right rounded m-0"  data-toggle="collapse" data-target="#recherche" aria-expanded="false" aria-controls="recherche">
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
             $compteurrow=0;
             echo '<div class="mt-3">';


             if($array==NULL){
                 echo '<div class="row justify-content-center font-weight-bold mt-5 mb-0 ml-5 text-center">
                     <h3 class="text-black  bg-light centered text-center "> :\'( ... OUPS, on a rien trouvé pour vous ! </h3>
                      <button type="submit" onclick="window.location.href=\'index.php?module=RechercheRecettes\';"class="btn btn-success ml-5">Afficher toutes les recettes</button>
                 </div>';
             }else{
                 echo'<div class="row">';
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
                            <a href="index.php?module=Recettes&id='.$item['idrec'].'"><img class="card-img-top" width="258" height="310" src="'.$img.'" alt=""></a>
                            <div class="card-body">
                              <h4 class="card-title">
                                <a href="index.php?module=Recettes&id='.$item['idrec'].'">');
                                if($item['idUser']!=1){
                                    echo $item['titre'];
                                }else{
                                    echo utf8_encode($item['titre']);
                                }
                                echo'</a>
                              </h4>
                              <p class="card-text">Categorie : ';
                              echo $item['categorie'];
                              echo '</br> Niveau : ';
                              echo utf8_encode( $item['niveau']);
                              echo utf8_encode(' </br> Avis Positifs : '.$item['avisPositif'].'  </br> Avis Negatifs : '.$item['avisNegatif'].' </p>
                            </div>
                          </div>
                        </div>');
                        $compteur++;
                        if($compteur==3){
                            $compteurrow++;
                            $compteur=0;
                           echo '</div> <div class="row mt-5 mb-5">';
                        }


                 }
            }

                 echo '</div></div>

                     </div>
               </div>';

               if($array != NULL){
                   if(sizeof($array)<4 ){
                       echo '<footer class="fixed-bottom card-footer font-small bg-success mt-5">';
                   }else{
                       echo '    <footer class="card-footer font-small bg-success mt-5">';
                   }
               }else{
                     echo '<footer class="fixed-bottom card-footer font-small bg-success mt-5">';
               }



            echo'      <div class="container-fluid ">
                      <div class="text-center text-white">
                           <a href="http://www.iut.univ-paris8.fr/" id="ofrigo" class="text-center h4">    <img width="45" height ="35" src="./Images/logo_iut.png" /></a>
                              <a href="index.php" id="ofrigo" class="text-center h5">O•FR!GO - Michel Samuel - Brood Sarah - Vadrot Arthur</a>
                      </div>
                  </div>
            </footer>


          </body>

        ';

        }

    }
?>

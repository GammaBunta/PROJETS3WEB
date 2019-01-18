<?php
    require_once('./ClassesGeneriques/vue_generique.php');
    class Vue_Recettes extends VueGenerique{
        public function __construct(){
            parent::__construct();
        }


        public function affichageRecette($item,$ingr){
            //FAUT GERER LES ACCENTS AVEC UTF8 ENCODE AUSSI
            //si personne est co dans le onLoad on met en enable les boutons pour pouvoir voter
            //$item['textRec']
            if(isset($_SESSION['id'])){
                $co=true;
            }else{
                $co=false;
            }

            if($item['vegetarien']==0){
                $vege="non";
            }else{
                $vege="oui";
            }
            if($item['gluteenFree']==0){
                $glut="Sans";
            }else{
                $glut="Avec";
            }
            echo'
            <head>
                <?php include "./composants/head.php"; ?>
                <link rel="stylesheet" type="text/css" href="./CSS/RechercheRecette.css">
                <script type="text/javascript" src="./scripts/recette.js"> </script>
                <title>Recette</title>
            </head>
            <body onLoad="setId(' . $_SESSION['id'] . ');onLoad('.$co.');" >
                <main class="row align-items-center justify-content-center mt-5 mb-5">
                    <div class="container bg-light border border-secondary rounded mt-5 p-5">
                        <div class="row container">
                            <div class="col-4 ml-5 mr-5">
                              <p class="font-weight-bold text-center green-text">INFOS</p>
                              <ul class="list-group">
                                  <li class="list-group-item"><span class="font-weight-bold">Catégorie : </span>';echo utf8_encode($item['categorie']); echo'</li>
                                  <li class="list-group-item"><span class="font-weight-bold">Niveau : </span>';echo utf8_encode($item['niveau']);echo'</li>
                                  <li class="list-group-item"><span class="font-weight-bold">Végétarien : </span>'.$vege.'</li>
                                  <li class="list-group-item"><span class="font-weight-bold">Gluten : </span>'.$glut.'</li>
                                  <li class="list-group-item"><span class="font-weight-bold">Pour  </span>'.$item['nbpers'].'<span class="font-weight-bold"> personnes</span></li>
                                  <li class="list-group-item"><span class="font-weight-bold">Temps de préparation : </span>'.$item['tpsprepa'].'<span class="font-weight-bold"> min</span></li>
                                  ';
                                  if($item['tpsrepose']!=0){
                                      echo utf8_encode('<li class="list-group-item"><span class="font-weight-bold">Temps de repos : </span>'.$item['tpsrepose'].'<span class="font-weight-bold"> min</span></li>');
                                  }
                                  if($item['tpscuisson']!=0){
                                      echo utf8_encode(' <li class="list-group-item"><span class="font-weight-bold">Temps de cuisson : </span>'.$item['tpscuisson'].'<span class="font-weight-bold"> min</span></li>');
                                  }
                                  echo '
                              </ul>
                              <div class="container">
                                <button type="button" class="ml-5 btn btn-" id="plusAvis" onclick="plusAvis()" disabled><img src="./Images/thumbsup.svg" class="rounded mx-auto d-block img-fluid" alt="pouce vers le haut ">Like : '.$item['avisPositif'].'</button>
                                <button type="button" class="btn btn-" id="moinsAvis" onclick="moinsAvis()" disabled><img src="./Images/thumbsdown.svg" class="rounded mx-auto d-block img-fluid" alt="pouce vers le bas">Dislike : '.$item['avisNegatif'].'</button>
                              </div>
                            </div>
                            <div class="ml-5">
                              <div class="row ">
                                  <h4 class="container-fluid font-weight-bold text-success-dark text-center">'.$item['titre'].'</h4>
                              </div>
                              <img src="'.$item['img'].'" class="rounded mx-auto d-block img-fluid"  width="520" height="450" alt="Photo de la Recette">
                            </div>
                          </div>
                          <div class="row mt-4">
                              <div class="col-4 mt-5 mr-5 ml-5">
                              <div class="row mb-2">
                                  <h4 class="container-fluid font-weight-bold text-success-dark text-center">Ingrédients</h4>
                              </div>';
                              echo '<ul class="list-group">';
                              foreach($ingr as $petit){
                                  echo utf8_encode('<li class="list-group-item">'.$petit['nomingr']);
                                  echo ' quantite :'; echo utf8_encode($petit['quantite']."</li>");
                              }
                              echo "</ul>";
                              echo '</div>
                              <div class="col-6 ml-5 mt-5">
                                <div class="row mb-2">
                                    <h4 class="container-fluid font-weight-bold text-success-dark text-center">Recette</h4>
                                </div>';
                                    echo utf8_encode($item['textrec']);
                                echo'  </div>
                              </div>
                            </div>
                    </div>
                </main>
            </body>';
            echo '</br>';
            echo '</br>';
        }


    }
?>

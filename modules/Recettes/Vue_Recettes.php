<?php
    require_once('./ClassesGeneriques/vue_generique.php');
    class Vue_Recettes extends VueGenerique{

        public function __construct(){
            parent::__construct();
        }


        public function afficheInit($array){
            echo '
            <head>
              <?php include "./composants/head.php"; ?>
              <link rel="stylesheet" type="text/css" href="./CSS/Frigo.css">
              <script type="text/javascript" src="./scripts/frigo.js"> </script>

                <title>Frigo</title>
            </head>

            <body>
                <main class="text-center padding-bottom padding-top-xl">

            <!-- Page Content -->
            <div class="container">

              <!-- Page Heading -->
              <h1 class="my-4 text-light bg-success mt-5">TOUTES LES RECETTES DISPONIBLES
              </h1>

              ';
             $compteur = 0;
             echo '<div class="row">';
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
                         <a href="index.php?module=Recettes&action=affichageSpecial&id='.$item['idrec'].'"><img class="card-img-top" src="'.$img.'" alt=""></a>
                         <div class="card-body">
                           <h4 class="card-title">
                             <a href="index.php?module=Recettes&action=affichageSpecial&id='.$item['idrec'].'">'.$item['titre'].'</a>
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
              echo '</div>';

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
            <!-- /.container -->


          </body>

        ';

        }



        public function affichageRecette($item,$ingr){

            //FAUT GERER LES ACCENTS AVEC UTF8 ENCODE AUSSI

            //si personne est co dans le onLoad on met en enable les boutons pour pouvoir voter
            if(isset($_SESSION['id'])){
                $co=true;
            }else{
                $co=false;
            }
            foreach($ingr as $petit){
                echo '</br> nom ingr : '.$petit['nomingr'];
                echo ' quantite : '.$petit['quantite'];
            }

            //ET NOTE AVI :
            echo '</br>nombre avis positifs : ';
            echo $item['avisPositif'];

            echo '</br>nombre avis negatif : ';
            echo $item['avisNegatif'];


            //NB AVIS :
            echo '</br>nombre avis  : ';
            echo $item['nombreAvis'];

            //BOUTONS pour noter :
            echo '
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-" id="plusAvis" onclick="plusAvis()" disabled><img src="./Images/thumbsup.svg" alt="pouce vers le haut "</button>
              <button type="button" class="btn btn-" id="moinsAvis" onclick="moinsAvis()" disabled><img src="./Images/thumbsdown.svg" alt="pouce vers le bas"></button>
            </div>

            ';

            echo '
            ';

            //POUR l'image :
            echo '
            <img src="'.$item['img'].'" alt="Photo de la Recette">';


            //ET LE TEXTE :   $item['textrec']
            if($item['vegetarien']==0){
                $vege="non";
            }else{
                $vege="oui";
            }
            if($item['gluteenFree']==0){
                $glut="non";
            }else{
                $glut="oui";
            }

            echo '
            <head>
                <?php include "./composants/head.php"; ?>
                <script type="text/javascript" src="./scripts/recette.js"> </script>
            </head>
            <body onLoad="setId(' . $_SESSION['id'] . ');onLoad('.$co.');" >
                <main class="mt-5 row align-items-center justify-content-center mb-5">
                    <div class="container border border-secondary rounded mt-5 p-5">

                        <div class="row">
                            <h4 class="font-weight-bold text-success-dark">'.$item['titre'].'</h4>
                        </div>

                        <div class="row mt-4">
                            <div class="col-4">
                                <p class="font-weight-bold text-center green-text">INFOS</p>
                                <ul class="list-group">

                                    <li class="list-group-item"><span class="font-weight-bold">Catégorie : </span>'.$item['categorie'].'</li>
                                    <li class="list-group-item"><span class="font-weight-bold">Niveau : </span>'.$item['niveau'].'</li>

                                    <li class="list-group-item"><span class="font-weight-bold">Végétarien : </span>'.$vege.'</li>
                                    <li class="list-group-item"><span class="font-weight-bold">Gluten : </span>'.$glut.'</li>
                                    <li class="list-group-item"><span class="font-weight-bold">Pour  </span>'.$item['nbpers'].'<span class="font-weight-bold"> personnes</span></li>
                                    <li class="list-group-item"><span class="font-weight-bold">Temps de préparation : </span>'.$item['tpsprepa'].'<span class="font-weight-bold"> min</span></li>
                                    ';
                                    if($item['tpsrepose']!=0){
                                        echo '<li class="list-group-item"><span class="font-weight-bold">Temps de repos : </span>'.$item['tpsrepose'].'<span class="font-weight-bold"> min</span></li>';
                                    }
                                    if($item['tpscuisson']!=0){
                                        echo ' <li class="list-group-item"><span class="font-weight-bold">Temps de cuisson : </span>'.$item['tpscuisson'].'<span class="font-weight-bold"> min</span></li>';
                                    }

                                    echo '
                                </ul>
                                </div>
                                <div class="col-6">

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </body>';
        }

    }
?>

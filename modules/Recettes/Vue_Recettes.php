<?php
    require_once('./ClassesGeneriques/vue_generique.php');
    class Vue_Recettes extends VueGenerique{

        public function __construct(){
            parent::__construct();
        }


        public function afficheInit(){
            echo 'afficheInit';
        }

        public function afficherRechercheSpeciale($array){
            foreach($array as $item){
                 echo utf8_encode(' </br> Titre : '.$item['titre'].' </br> nb personne : '.$item['nbpers'].' </br> Categorie : '.$item['categorie'].' </br> Texte : '.$item['textrec']);
           }
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
                <main class="mt-5 row align-items-center justify-content-center">
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

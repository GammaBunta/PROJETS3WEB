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
            //TODO
            //IL RESTE A AFFICHER LES INGREDIENTS,
            foreach($ingr as $petit){

           }
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
                <script type="text/javascript" src="./scripts/ajoutRecette.js"> </script>
            </head>

            <body>
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

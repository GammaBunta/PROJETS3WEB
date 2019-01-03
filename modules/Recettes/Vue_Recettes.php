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


        public function affichageRecette($item){
            echo utf8_encode(' </br> Titre : '.$item['titre'].' </br> nb personne : '.$item['nbpers'].' </br> Categorie : '.$item['categorie'].' </br> Texte : '.$item['textrec']);
        }

    }
?>

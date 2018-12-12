<?php
    require_once('./ClassesGeneriques/vue_generique.php');
    class Vue_Recettes extends VueGenerique{

        public function __construct(){
            parent::__construct();
        }


        public function afficheInit(){
            echo 'OUI';
        }

        public function afficherRechercheSpeciale($array){
            echo 'array';
            foreach($array as $item){
                 echo utf8_encode('ouais affichage ici');
           }
        }

    }
?>

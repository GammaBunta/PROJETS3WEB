<?php
    require_once('./ClassesGeneriques/modele_generique.php');
    class Modele_Frigo extends ModeleGenerique{
        public function __construct(){
            ModeleGenerique::init();
        }


        public function getLaitiers(){

            $result = self::$bdd -> prepare('select * from Utilisateur natural join possede natural join Ingredient where famille= "Produits Laitiers" and idUser = '.$_SESSION['id']);
            $res = $result -> execute();
            return $result->fetchAll();
        }

    }
?>

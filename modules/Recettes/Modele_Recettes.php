<?php
require_once('./ClassesGeneriques/modele_generique.php');
class Modele_Recettes extends ModeleGenerique{

    public function __construct(){
        ModeleGenerique::init();
    }

    public function infoRecette($id){
        $req = self::$bdd -> prepare('SELECT * FROM Recette where idrec=:id');
        $req->bindParam(':id', $id);
        $req -> execute();
        return $req -> fetch();

    }

    public function infoIngrRecette($id){
        $req = self::$bdd -> prepare('select * from utiliser natural join Ingredient where idrec=:id');
        $req->bindParam(':id',$id);
        $req -> execute();
        return $req->fetchAll();

    }
}
?>

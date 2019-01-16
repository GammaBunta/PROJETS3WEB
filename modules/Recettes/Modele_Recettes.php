<?php
    require_once('./ClassesGeneriques/modele_generique.php');
    class Modele_Recettes extends ModeleGenerique{

        public function __construct(){
            ModeleGenerique::init();
        }
        public function toutesRecette(){
            $req = self::$bdd -> prepare('SELECT * FROM Recette');
            $req -> execute();
            return $req-> fetchAll();
        }

        public function rechercheSpeciale($array){
            var_dump($array);
            if($array[0]==""){
                $sel = 'select * from Recette';
            }else{
                $sel = 'select * from Recette natural join utiliser where';
                for($i=0 ; $i < count($array); $i++){
                    echo '</br>ingrédient : ';
                    var_dump($array[$i]);
                    $select = 'SELECT idingr FROM Ingredient WHERE nomingr ="'.utf8_decode($array[$i]).'"';
                    echo '</br>'.$select;
                    $id=self::$bdd -> query($select);
                    echo '</br> select : ';
                    $idIngr=$id->fetch();
                    echo $idIngr[0];

                    if($i == count($array)-1){
                        $sel .=' idingr='.$idIngr[0];
                    }else{
                        $sel .=' idingr='.$idIngr[0].' or ';
                    }
                }
            }


            echo '</br>'.$sel;
            $result = self::$bdd -> prepare($sel);
            var_dump($result);
            $res = $result -> execute();
            return $result->fetchAll();


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

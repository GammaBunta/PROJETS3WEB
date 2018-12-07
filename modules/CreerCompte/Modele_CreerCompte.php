<?php
    require_once('./ClassesGeneriques/modele_generique.php');
    class Modele_CreerCompte extends ModeleGenerique{
        public function __construct(){
            ModeleGenerique::init();
        }


        public function creer($l, $m, $e){
            $login = $l;
            $email = $e;
            $mdp = crypt($m, 'CRYPT_STD_DES');
            $req = self::$bdd-> prepare('insert into utilisateur values (default, :login, :mdp, :email, null');
            $req->bindParam(':login', $login);
            $req->bindParam(':mdp', $mdp);
            $req->bindParam(':email', $email);

            if($req->execute()){
                return true;  
            }
            return false;

        }

    }
?>

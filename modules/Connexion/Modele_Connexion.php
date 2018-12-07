<?php
    require_once('./ClassesGeneriques/modele_generique.php');
    class Modele_Connexion extends ModeleGenerique{
        public function __construct(){
            ModeleGenerique::init();
        }


        public function connecte($l, $m){
            $login = $l;
            $mdp = crypt($m, 'CRYPT_STD_DES');
            $req = self::$bdd-> prepare('select password from connexion where login like :login');
            $req->bindParam(':login', $login);
            if($req->execute()){
                $res = $req -> fetch();
                if(strcmp($mdp, $res['password'] )==0 ){
                    $_SESSION['login'] = $login;
                    return true;
                }
                else {
                    return false;
                }
            }
            return false;

        }

    }
?>

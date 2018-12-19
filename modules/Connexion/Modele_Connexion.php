<?php
    require_once('./ClassesGeneriques/modele_generique.php');
    class Modele_Connexion extends ModeleGenerique{
        public function __construct(){
            ModeleGenerique::init();
        }


        public function connecte($l, $m){
            $login = $l;
            $mdp = crypt($m, 'CRYPT_STD_DES');
            $req = self::$bdd-> prepare('select password from Utilisateur where pseudo like :login');
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

        public function deconnexion(){
            unset($_SESSION['login']);
            session_destroy();
        }
    }
?>

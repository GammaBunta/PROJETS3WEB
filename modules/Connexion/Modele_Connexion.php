<?php
    require_once('./ClassesGeneriques/modele_generique.php');
    class Modele_Connexion extends ModeleGenerique{
        public function __construct(){
            ModeleGenerique::init();
        }


        public function connecte($l, $m){
            if($this->verifToken()){
                $login = $l;
                $mdp = crypt($m, 'CRYPT_STD_DES');
                $req = self::$bdd-> prepare('select password, idUser from Utilisateur where pseudo like :login or email like :login');
                $req->bindParam(':login', $login);
                if($req->execute()){
                    $res = $req -> fetch();
                    $id = $res['idUser'];
                    if(strcmp($mdp, $res['password'])==0){;
                        $_SESSION['id'] = $id;
                        return true;
                    }
                    else {
                        return false;
                    }
                }
                return false;
            }
        }

        public function deconnexion(){
            unset($_SESSION['id']);
            session_destroy();
        }
    }
?>

<?php
    require_once('./ClassesGeneriques/modele_generique.php');
    class Modele_CreerCompte extends ModeleGenerique{
        public function __construct(){
            ModeleGenerique::init();
        }


        public function creer(){
            $m = htmlspecialchars($_POST['mdp']);
            $m2 = htmlspecialchars($_POST['mdp2']);
            $login = htmlspecialchars($_POST['login']);
            $email = htmlspecialchars($_POST['email']);
            $req1 = self::$bdd-> prepare('select * from Utilisateur where email like :email or pseudo like :pseudo');
            $req1->bindParam(':email', $email);
            $req1->bindParam(':pseudo', $login);
            $req1->execute();
            echo 'avant if creer \n';
            if($req1->fetch() == false){
                $mdp = crypt($m, 'CRYPT_STD_DES');
                $req = self::$bdd-> prepare('INSERT INTO Utilisateur(pseudo, password, email) values (:login, :mdp, :email)');
                $req->bindParam(':login', $login);
                $req->bindParam(':mdp', $mdp);
                $req->bindParam(':email', $email);
                $res1 = $req->execute();
                    // if($req->execute()){
                    //     return "ok";  
                    // }
                return true;

            }
            else{
                    return false;
            }

        }

    }
?>

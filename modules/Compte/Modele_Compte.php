<?php
    require_once('./ClassesGeneriques/modele_generique.php');
    class Modele_Compte extends ModeleGenerique{
        public function __construct(){
            ModeleGenerique::init();
        }


        public function getInfos(){

            $result = self::$bdd -> prepare('select * from Utilisateur where idUser = '.$_SESSION['id']);
            $res = $result -> execute();
            return $result->fetch();
        }

        public function pseudo(){
          $login = htmlspecialchars($_POST['pseudo']);
          $req1 = self::$bdd-> prepare('select * from Utilisateur where pseudo like :pseudo');
          $req1->bindParam(':pseudo', $login);
          $req1->execute();
          if($req1->fetch() == false){
              $req = self::$bdd-> prepare('UPDATE Utilisateur SET pseudo = :login where idUser ='.$_SESSION['id']);
              $req->bindParam(':login', $login);
              $res1 = $req->execute();
              return true;
          }
          return false;
        }

        public function email(){
          $email = htmlspecialchars($_POST['email']);
          $req1 = self::$bdd-> prepare('select * from Utilisateur where email like :email');
          $req1->bindParam(':email', $email);
          $req1->execute();
          if($req1->fetch() == false){
              $req = self::$bdd-> prepare('UPDATE Utilisateur SET email = :email where idUser ='.$_SESSION['id']);
              $req->bindParam(':email', $email);
              $res1 = $req->execute();
              return true;

          }
          return false;
        }

        public function mdp(){
          $m = htmlspecialchars($_POST['mdp1']);
          $mdp = crypt($m, 'CRYPT_STD_DES');
          $req = self::$bdd-> prepare('UPDATE Utilisateur SET password = :mdp where idUser ='.$_SESSION['id']);
          $req->bindParam(':mdp', $mdp);
          $res1 = $req->execute();

        }

    }
?>

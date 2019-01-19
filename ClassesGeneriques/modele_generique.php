<?php
class ModeleGenerique{

    protected static $bdd;
    public function __construct(){

    }

    public static function init(){
/*        $b = 'mysql:host=localhost;dbname=ProjetFrigo';
        $user = 'root';
        $password = 'samsam974';
        self::$bdd = new PDO($b, $user, $password);

*/

//Le array à la fin permet d'avoir les erreurs de mysql dans les requêtes et wallah c'est cool.
        $servername = "localhost";
        self::$bdd = new PDO("mysql:host=$servername;dbname=ProjetFrigo", 'root', 'samsam974',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    }


    public function verifToken(){
        $posttoken =$_POST['token'];
        if( $posttoken== $_SESSION['token']){
            $my_date=date("Y-m-d H:i:s");
            if($my_date < $_SESSION['dateToken']){
                return true;
            }else{
                unset($_SESSION['dateToken']);
                unset($_SESSION['token']);
            }
        }
        return false;
    }
}
?>

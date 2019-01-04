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
        self::$bdd->exec('SET CHARACTER SET UTF-8');
*/

//Le array à la fin permet d'avoir les erreurs de mysql dans les requêtes et wallah c'est cool.
        $servername = "localhost";
        self::$bdd = new PDO("mysql:host=$servername;dbname=frigo", 'root', '!Minou240499!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    }

}
?>

<?php
class ModeleGenerique{

    protected static $bdd;
    public function __construct(){

    }

    public static function init(){

       $b = 'mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw201642';
        $user = 'dutinfopw201642';
        $password = 'pubepete';
        self::$bdd = new PDO($b, $user, $password);
        self::$bdd->exec('SET CHARACTER SET UTF-8');
    /*

        $servername = "localhost";
        self::$bdd = new PDO("mysql:host=$servername;dbname=projetS3", 'root', '!Minou240499!');
*/
    }
}
?>

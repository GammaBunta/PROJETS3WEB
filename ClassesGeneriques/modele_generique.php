<?php
class ModeleGenerique{

    protected static $bdd;
    public function __construct(){

    }
    public static function init(){
        $b = 'mysql:host=localhost;dbname=ProjetFrigo';
        $user = 'root';
        $password = 'samsam974';
        self::$bdd = new PDO($b, $user, $password);
    /*
        $servername = "localhost";
        self::$bdd = new PDO("mysql:host=$servername;dbname=projetS3", 'root', '!Minou240499!');
    */    
    }
}
?>

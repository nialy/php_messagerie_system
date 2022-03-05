<?php
function getConnection(){
    $serveur = 'localhost';
    $nomBd = 'l2_php';
    $user = 'root';
    $mdp = '';

    try {
        $bdd = new PDO('mysql:host='.$serveur.';dbname='.$nomBd,$user,$mdp,[PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    } catch (PDOException $exception) {
        die("Erreur de connexion à la BD ".$exception->getMessage());
    }
    return $bdd;
}
   
// if (getConnection()) {
//     echo "connection reussi";
// }else {
//     echo "erreur";
// }

?>
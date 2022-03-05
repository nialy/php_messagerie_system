<?php
    require_once "db.php";
    //fonction pour la verification de l'authentification
   function login($email, $password){
    $sql="SELECT * FROM user where email = '$email' AND password ='$password'";
    $con = getConnection();
    $ok = $con->query($sql);
    return $ok;
   }
   //fonction pour l'ajout d'un utilisateur
   function addUser($nom, $prenom, $email, $password){
    $sql = "INSERT INTO user VALUES(NULL, '$nom', '$prenom', '$email', '$password')";
    $con = getConnection();
    $ok = $con->exec($sql);
    return $ok;
   }
   //fonction pour la liste des utilisateurs sauf l'utilisateur connecté
   function listeUser($email){
    $sql="SELECT * FROM user where email != '$email'";
    $con = getConnection();
    $ok = $con->query($sql);
    return $ok;
   }

//fonction pour l'ajout d'un utilisateur
    function addMessage($destinataire, $expediteur, $objet, $contenu){
        //$date = date('d-M-Y');
        $sql = "INSERT INTO message VALUES(NULL, '$destinataire', '$expediteur', '$objet', '$contenu', NOW())";
        $con = getConnection();
        $ok = $con->exec($sql);
        return $ok;
        //var_dump($ok);
   } 
   
   function msgRecu($email){
    $sql="SELECT * FROM message where expediteur = '$email' ORDER BY id DESC";
    $con = getConnection();
    $ok = $con->query($sql);
    return $ok;
   }

   function msgEn($sender){
    $sql="SELECT * FROM user where email = '$sender'";
    $con = getConnection();
    $ok = $con->query($sql);
    return $ok;
   }



   function msgR($email){
    $sql="SELECT * FROM message where destinataire = '$email' ORDER BY id DESC";
    $con = getConnection();
    $ok = $con->query($sql);
    return $ok;
   }


   function msgE($sender){
    $sql="SELECT * FROM user where email = '$sender'";
    $con = getConnection();
    $ok = $con->query($sql);
    return $ok;
   }
?>
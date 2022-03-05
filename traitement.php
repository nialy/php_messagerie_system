<?php
session_start();
require_once "logindb.php";
if(isset($_POST['valider'])){
    //extract($_POST);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $login = login($email, $password)->fetch();
    if($login){
        $_SESSION['login'] = $_POST['email'];
        header("location:accueil.php");
    }else{
        echo "login ou mot de passe incorrect";
    }
}

if(isset($_POST['ajout'])){
    extract($_POST);
    addUser($nom, $prenom, $email, $password);
    header("location:login.php");
}

if(isset($_POST['save'])){
    //extract($_POST);
    $user = $_POST['destinataire'];
    $expediteur = $_SESSION['login'];
    $objet = $_POST['objet'];
    $contenu = $_POST['contenu'];
    addMessage($user, $expediteur, $objet, $contenu);
    header("location:accueil.php");
    //echo $user;
}

?>
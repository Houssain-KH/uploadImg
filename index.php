<?php

/* 
 * Contrôleur frontal
 */
session_start();

// on essaye de se connecter
try{
    $connect = new PDO('mysql:host=localhost;dbname=mvc_5', "root", "");
// on récupère l'erreur au cas où    
}catch(PDOException $e){
    // on affiche un message d'erreur
    echo "<h1>".$e->getMessage()."</h1>";
    
}
// affichage d'erreur sql, pour debuggage (dev)
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// pour charger toutes les bibliothèques installées via composer
require_once 'vendor/autoload.php';

// création du loader twig
$loader = new Twig_Loader_Filesystem('v');
$twig = new Twig_Environment($loader/*, array(
    'cache' => 'cache',
)*/);

// récupération du contrôleur

if(isset($_POST["login"])&&isset($_POST["pwd"])){
    require_once 'c/ConnectController.php';
// si on est connecté
}elseif(isset($_SESSION['laclef'])&& $_SESSION['laclef']==session_id()){
    // on va sur le contrôleur de l'admin
    require_once 'c/adminController.php';
// on veut afficher un artiste grâce à son id
}else{
    require_once 'c/ImagesController.php';
}

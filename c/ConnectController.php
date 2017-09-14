<?php


if($_POST["login"]==$_POST['getLelogin'] && $_POST["pwd"]== $_POST["getPwd"]){
    // session valide
    $_SESSION['laclef'] = session_id();
    $_SESSION['nom'] = $_POST['login'];
    // redirection sur l'accueil
    header("Location: ./");
}else{
    header("Location: ./?faux");
}